{{ \Cachet\Facades\CachetView::renderHook(\Cachet\View\RenderHook::STATUS_PAGE_NAVIGATION_BEFORE) }}
<div class="flex items-center justify-between border-b border-zinc-200 px-4 sm:px-6 lg:px-8 py-4 dark:border-zinc-700">
    <div>
        <a href="{{ route('cachet.status-page') }}" class="transition hover:opacity-80">
            <img src="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/logo/DeepStone_Negativo.png" alt="{{ $siteName }}" class="h-8 w-auto negative-logo" />
            <img src="https://deepstone-public-assets.s3.us-east-1.amazonaws.com/logo/DeepStone_Positivo.png" alt="{{ $siteName }}" class="h-8 w-auto positife-logo" />
        </a>
    </div>

    
    <div class="flex items-center gap-2.5 sm:gap-5">
         <a href="https://deepstone.app.n8n.cloud/form/eb128e0c-42bc-4c47-9ad6-60536756fe78" class="rounded-sm bg-accent px-3 py-2 text-sm font-semibold text-accent-foreground">
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
