{{-- Usage: <x-schema.blog-post :post="$post" /> --}}
@include('partials.schema-blog-post', ['post' => $post ?? null, 'data' => $data ?? null])
