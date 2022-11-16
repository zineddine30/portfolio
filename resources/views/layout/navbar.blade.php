<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<header
    x-data="{navbarOpen: false}"
    class="fixed top-0 left-0 z-50 flex items-center w-full h-24 bg-white shadow-md dark:bg-slate-900"
>

<div class="container">
    <div class="relative flex items-center justify-between -mx-4">
        <div class="max-w-full pr-4 w-60">
            <a href="/" class="flex items-center w-full py-2">
                <img
                    src="{{ url('/img/logo-si-dev.png') }}"
                    alt="logo"
                    class="w-[48px] lg:w-[64px] inline-block dark:hidden"
                    >
                <img
                    src="{{ url('/img/logo-si-dev-white.png') }}"
                    alt="logo"
                    class="w-[48px] lg:w-[64px] hidden dark:inline-block"
                    >
                <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">
                    SI-Developer
                </span>
            </a>
        </div>
        <div class="flex items-center justify-end w-full px-4">
            <x-layout.navbar-humburger
                @click="navbarOpen = !navbarOpen"
                x-bind:class="navbarOpen && 'navbarTogglerActive'"
            >

            </x-layout.navbar-humburger>
            <nav
                :class="!navbarOpen && 'hidden'"
                id="navbarCollapse"
                class="absolute right-0 z-50 w-full px-6 py-5 bg-white rounded-lg shadow top-full dark:bg-slate-900 dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none"
            >
                <ul class="block lg:flex lg:items-center">
                    @foreach($navigationItems as $item)
                        <x-layout.navbar-item :href="$item['href']">
                            {{ $item['label'] }}
                        </x-layout.navbar-item>
                    @endforeach
                </ul>
            </nav>
        </div>

    </div>
</div>

</header>
