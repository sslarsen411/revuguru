@props(['json' => []])

@push('scripts')
    <script type="application/ld+json">
        {!! json_encode($json, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
    </script>
@endpush
