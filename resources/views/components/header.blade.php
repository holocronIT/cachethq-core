{{ \Cachet\Facades\CachetView::renderHook(\Cachet\View\RenderHook::STATUS_PAGE_NAVIGATION_BEFORE) }}
<div class="flex items-center justify-between border-b border-zinc-200 px-4 sm:px-6 lg:px-8 py-4 dark:border-zinc-700">
    <div>
        <a href="{{ route('cachet.status-page') }}" class="transition hover:opacity-80">
            <img src="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/logo/DeepStone_Negativo.png" alt="{{ $siteName }}" class="h-8 w-auto negative-logo" />
            <img src="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/logo/DeepStone_Positivo.png" alt="{{ $siteName }}" class="h-8 w-auto positive-logo" />
        </a>
    </div>

    
    <div class="flex items-center gap-2.5 sm:gap-5">
         <a href=https://1e2b541f.sibforms.com/serve/MUIFAFVteb30Q5StxZC5HvV9SfHSH80x1HmAruF-PXg7RG6XzJwrMbqSYCd158nUKhhBylsKv_Y6KYxNECGGGDLo5SFZmqRz3ld1IKFuETYhHY83TrG5e1SoaUWoUhOVA_gBrqcTyDYgdSSz8vp4clOf0sGQ4-KTkDNkrQFkgH0ANXAJO9_XC6v4F2tAR-WuXUeSTP43WeEAgot40Q==" target="blank" class="rounded-sm bg-accent px-3 py-2 text-sm font-semibold text-accent-foreground">
            Subscribe
        </a>
        @if ($dashboardLoginLink)
        <a href="{{ Cachet\Cachet::dashboardPath() }}" class="rounded-sm bg-accent px-3 py-2 text-sm font-semibold text-accent-foreground">
            {{ __('filament-panels::pages/dashboard.title') }}
        </a>
        @auth
        {{-- TODO: This form sucks... --}}
        <form action="{{ \Cachet\Cachet::dashboardPath() }}/logout" method="POST">
            @csrf
            <button class="text-sm font-medium text-zinc-800 transition hover:text-zinc-700 dark:text-zinc-400 dark:hover:text-zinc-300 sm:text-base">
                {{ __('filament-panels::layout.actions.logout.label') }}
            </button>
        </form>
        @endauth
         @endif
    </div>
   
</div>
{{ \Cachet\Facades\CachetView::renderHook(\Cachet\View\RenderHook::STATUS_PAGE_NAVIGATION_AFTER) }}
