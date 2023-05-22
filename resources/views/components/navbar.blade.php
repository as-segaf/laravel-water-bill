<div class="px-6 py-6 lg:px-8 bg-primary-500">
    <div class="flex h-9 items-center justify-between" aria-label="Global">
        <div class="flex" aria-label="Global">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">{{config('app.name')}}</span>
                <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="flex items-center gap-8">
            <div class="flex min-w-0 justify-end gap-x-8">
                <a href="#" class="font-semibold text-white hover:text-white">Beranda</a>
            </div>
            <div class="flex min-w-0 justify-end">
                <a href="{{ route('filament.pages.dashboard') }}" class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm ring-1 ring-white-100/10 hover:ring-white-100/20">Log in</a>
            </div>
        </div>
    </div>
</div>