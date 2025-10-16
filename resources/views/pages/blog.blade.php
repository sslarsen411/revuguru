<x-app-layout>
    <section class="py-16">
        <div class="container mx-auto max-w-7xl px-4">
            <div class="mb-10">
                <h1 class="text-3xl font-bold tracking-tight">Rave Review Guru Posts</h1>
                <p class="mt-3 text-lg opacity-80">
                    Practical tactics for earning, polishing, and leveraging customer reviews.
                </p>
            </div>

            @php
                // TEMP: Inline data while wiring up the controller.
                // Replace with data from a BlogController or config/blog.php.
                $posts = $posts ?? [
                  [
                    'title' => 'Your Review Strategy Is Failing Because You’re Making It a Contest Instead of a Connection',
                    'slug' => 'your-review-strategy-is-failing',
                    'excerpt' => 'If asking for reviews feels awkward discover how to flip
                    the script so every review request feels natural, effortless, and genuinely appreciated ',
                    'image' => 'https://cdn.mojoimpact.com/rrg/blog/contest-thmb.webp',
                    'updated_at' => '2025-10-15',
                  ],
                  [
                    'title' => 'Why Are Customer Reviews Such a Pain?',
                    'slug' => 'collecting-reviews-is-a-pain',
                    'excerpt' => 'If you’ve ever felt like getting reviews is akin to sitting on a cactus, you\'re not alone...',
                    'image' => 'https://cdn.mojoimpact.com/rrg/blog/reviews-are-a-pain-thmb.webp',
                    'updated_at' => '2025-09-22',
                  ],
                  [
                    'title' => 'Rave Review Guru Favor Flow vs Enticements',
                    'slug' => 'favor-flow-vs-enticements',
                    'excerpt' => 'Is the Rave Review Guru Flavor Flow formula a bribe? Will it get your profile banned?',
                    'image' => 'https://cdn.mojoimpact.com/rrg/blog/bribe-thmb.webp',
                    'updated_at' => '2025-10-14',
                  ],
                  [
                    'title' => 'Cheating for Reviews: Why Taking Shortcuts Hurts Everyone',
                    'slug' => 'cheating-for-reviews',
                    'excerpt' => 'Getting reviews is hard and shortcuts seem easy. Are they worth it?',
                    'image' => 'https://cdn.mojoimpact.com/rrg/blog/intimidation-thmb.webp',
                    'updated_at' => '2025-10-15',
                  ],
                  [
                    'title' => 'The Hidden Power of Reviews That Most Business Owners Completely Miss',
                    'slug' => 'hidden-power-of-reviews',
                    'excerpt' => 'If asking for reviews feels awkward discover how to flip
                    the script so every review request feels natural, effortless, and genuinely appreciated ',
                    'image' => 'https://cdn.mojoimpact.com/rrg/blog/review-value-thmb.webp',
                    'updated_at' => '2025-10-15',
                  ],
                   [
                    'title' => 'Trap #5: The Platform Prison',
                    'slug' => 'platform-prison',
                    'excerpt' => 'You, not Google need to own your reviews. Here\'s why...',
                    'image' => 'https://cdn.mojoimpact.com/rrg/blog/the-platform-prison-thmb.webp',
                    'updated_at' => '2025-10-01',
                  ],
                  // Add 6 or 10 more to reach 8 or 12 total…
                ];
            @endphp

            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach($posts as $post)
                    <article class="group overflow-hidden rounded-2xl border shadow-sm transition hover:shadow-md">
                        <a href="{{ url('/blog/'.$post['slug']) }}" class="block">
                            <div class="aspect-[16/9] overflow-hidden">
                                <img src="{{ $post['image'] }}" alt="" class="h-full w-full object-cover transition group-hover:scale-[1.03]">
                            </div>
                            <div class="p-5">
                                <h2 class="text-lg font-semibold leading-snug">
                                    {{ $post['title'] }}
                                </h2>
{{--                                @if(!empty($post['updated_at']))--}}
{{--                                    <p class="mt-1 text-xs opacity-60">Updated {{ \Illuminate\Support\Carbon::parse($post['updated_at'])->toFormattedDateString() }}</p>--}}
{{--                                @endif--}}
                                <p class="mt-2 text-sm opacity-80">
                                    {{ $post['excerpt'] }}
                                </p>
                                <span class="mt-3 inline-flex items-center gap-1 text-sm underline underline-offset-4 group-hover:no-underline">
                Read more…
              </span>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
