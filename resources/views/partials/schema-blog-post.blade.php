@php use Carbon\Carbon; @endphp
@once
    @push('scripts')
        @php


            // Accept either $post (model) or a plain $data array
            $item = $post ?? ($data ?? null);

            $tz = config('app.timezone', 'America/Los_Angeles');
            $publisher  = 'The Rave Review Guru';

            $headline   = $item->title ?? ($title ?? 'Untitled Post');
            $url        = $item->url
                            ?? ($item->slug ?? null ? url('/blog/'.$item->slug) : url()->current());

            $authorName = data_get($item, 'author.name') ?? ($item->author_name ?? 'The Rave Review Guru');
            $authorUrl  = data_get($item, 'author.profile_url') ?? ($item->author_url ?? url('/about'));

            $publishedAt = isset($item->published_at)
                ? Carbon::parse($item->published_at)->setTimezone($tz)->toIso8601String()
                : Carbon::now($tz)->toIso8601String();

            $modifiedAt  = isset($item->updated_at)
                ? Carbon::parse($item->updated_at)->setTimezone($tz)->toIso8601String()
                : $publishedAt;

            $desc = $item->meta_description
                ?? $item->excerpt
                ?? ($item->summary ?? (isset($item->body) ? trim(strip_tags($item->body)) : null));
            if ($desc && mb_strlen($desc) > 300) $desc = mb_substr($desc, 0, 300).'…';

            $about = (array)($item->about ?? []);
            $about = $about ?: ['Customer reviews', 'Local SEO', 'Reputation management'];

            $keywords = $item->seo_keywords ?? $item->keywords ?? [];
            $keywords = is_string($keywords) ? array_map('trim', array_filter(explode(',', $keywords))) : (array)$keywords;
            $keywords = $keywords ?: [
                'hidden power of reviews',
                'local business reviews',
                'customer review strategy',
                'online reputation management',
                'Google reviews for local business',
                'review marketing',
                'reputation control',
                'AI and customer reviews',
            ];

            $images = [];
            if (!empty($item->featured_image_url)) $images[] = $item->featured_image_url;
            if (!empty($item->social_image_url))   $images[] = $item->social_image_url;

            // Optional site-wide fallback once you add a real file (>=1200px wide)
            // if (empty($images)) $images[] = asset('images/rrg-default-1200x630.jpg');

            $ld = array_filter([
                '@context' => 'https://schema.org',
                '@type' => 'BlogPosting',
                'headline' => $headline,
                'author' => [
                    '@type' => 'Person',
                    'name'  => $authorName,
                    'url'   => $authorUrl,
                ],
                'publisher' => ['@type' => 'Organization', 'name' => $publisher],
                'datePublished' => $publishedAt,
                'dateModified'  => $modifiedAt,
                'image' => $images ?: null, // omitted if empty
                'about' => $about,
                'keywords' => $keywords,
                'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $url],
                'url' => $url,
                'description' => $desc ?: 'Discover how to turn customer feedback into a powerful marketing asset.',
            ], fn($v) => !is_null($v));
        @endphp

        <script type="application/ld+json">
            {!! json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    @endpush
@endonce
