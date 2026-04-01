@use('Cachet\Cachet')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-accent-background text-zinc-700 dark:text-zinc-300">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" href="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/DeepStone_AzzurroIcon.png" />
        <link rel="apple-touch-icon" href="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/DeepStone_AzzurroIcon.png" />

        <title>{{ $title ?: config('cachet.title', 'Cachet') }}</title>
        <meta name="title" content="{{ $title ?: config('cachet.title', 'Cachet') }}" />
        <meta name="description" content="{{ $description }}" />

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ url(Cachet::path()) }}" />
        <meta property="og:image" content="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/deepstone-status-page-cover.png" />
        <meta property="og:title" content="{{ $title ?: config('cachet.title', 'Cachet') }}" />
        <meta property="og:description" content="{{ $description }}" />

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:url" content="{{ url(Cachet::path()) }}" />
        <meta property="twitter:image" content="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/deepstone-status-page-cover.png" />
        <meta property="twitter:title" content="{{ $title ?: config('cachet.title', 'Cachet') }}" />
        <meta property="twitter:description" content="{{ $description }}" />

        @vite(['resources/css/cachet.css', 'resources/js/cachet.js'], 'vendor/cachethq/cachet/build')
        @filamentStyles

        @if($refresh_rate)
        <meta http-equiv="refresh" content="{{ $refresh_rate }}">
        @endif

        <!-- Custom Cachet Header -->
        {!! $cachet_header !!}

        <style type="text/css">
            {{ $theme->styles  }}

            {!! $cachet_css !!}
        </style>
    </head>
    <body class="flex min-h-screen flex-col items-stretch antialiased">
        {{ \Cachet\Facades\CachetView::renderHook(\Cachet\View\RenderHook::STATUS_PAGE_BODY_BEFORE) }}
        {{ $slot }}

        <!-- Custom Cachet Footer -->
        {!! $cachet_footer !!}

        {{ \Cachet\Facades\CachetView::renderHook(\Cachet\View\RenderHook::STATUS_PAGE_BODY_AFTER) }}
    </body>
</html>
