<header
    x-data="{ scrolled: false, mobileOpen: false }"
    x-init="scrolled = window.scrollY > 48"
    x-on:scroll.window.passive="scrolled = window.scrollY > 48"
    class="fixed inset-x-0 top-0 z-50 transition-all duration-500"
    x-bind:class="scrolled ? 'bg-white shadow-[0_8px_30px_rgb(15_42_69/0.10)]' : 'bg-transparent'"
>
    <div
        class="hidden h-[34px] bg-[#173452] pl-[300px] pr-8 text-white transition-all duration-500 lg:flex"
        x-bind:class="scrolled ? '-translate-y-full opacity-0' : 'translate-y-0 opacity-100'"
    >
        <div class="mx-auto flex w-full max-w-[1240px] items-center justify-end gap-9">
            <nav class="flex items-center gap-9 text-[11px] font-semibold tracking-[0.08em]">
                <a href="#group" class="transition hover:text-[#35c4b6]">Group</a>
                <a href="#sustainability" class="transition hover:text-[#35c4b6]">Sustainability</a>
                <a href="#manufacturing" class="transition hover:text-[#35c4b6]">Manufacturing</a>
                <a href="#export" class="transition hover:text-[#35c4b6]">Export</a>
                <a href="#sales" class="transition hover:text-[#35c4b6]">Sales &amp; Distribution</a>
                <a href="#co-packing" class="transition hover:text-[#35c4b6]">Co-Packing</a>
                <a href="#careers" class="transition hover:text-[#35c4b6]">Careers</a>
            </nav>
            <div class="flex items-center gap-4">
                <a href="#linkedin" aria-label="LinkedIn" class="transition hover:text-[#35c4b6]">
                    <svg class="size-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M5.4 7.8H1.8V19h3.6V7.8ZM3.6 2.3a2.1 2.1 0 1 0 0 4.2 2.1 2.1 0 0 0 0-4.2ZM19.2 12.6c0-3.4-1.8-5-4.3-5-2 0-2.9 1.1-3.4 1.9V7.8H8V19h3.6v-5.5c0-1.5.3-2.9 2.1-2.9 1.8 0 1.8 1.7 1.8 3V19h3.7v-6.4Z"/></svg>
                </a>
                <a href="#facebook" aria-label="Facebook" class="transition hover:text-[#35c4b6]">
                    <svg class="size-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 2-5 5v2H6v4h3v7h4v-7h3.2l.8-4h-4V9c0-.7.3-1 1-1Z"/></svg>
                </a>
                <a href="#instagram" aria-label="Instagram" class="transition hover:text-[#35c4b6]">
                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
                </a>
                <a href="#x" aria-label="X" class="transition hover:text-[#35c4b6]">
                    <svg class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="m4 3 16 18M20 3 4 21"/></svg>
                </a>
            </div>
        </div>
    </div>

    <div
        class="absolute left-0 top-0 z-20 flex bg-[#173452] transition-all duration-500 [clip-path:polygon(0_0,100%_0,88%_100%,0_100%)]"
        x-bind:class="scrolled ? 'h-20 w-[270px]' : 'h-[114px] w-[290px]'"
    >
        <a href="{{ route('home') }}" class="flex w-full items-center justify-center pr-8" aria-label="{{ config('app.name') }}">
            <span class="relative font-serif text-5xl font-semibold italic leading-none tracking-[-0.08em] text-white">
                dcs
                <span class="absolute -bottom-3 left-3 whitespace-nowrap font-sans text-[7px] not-italic tracking-[0.35em]">MANUFACTURING</span>
            </span>
        </a>
        <span class="absolute right-0 top-0 h-full w-2 bg-[#35c4b6]"></span>
    </div>

    <div
        class="transition-all duration-500"
        x-bind:class="scrolled ? '-mt-[34px] bg-white text-[#102f50]' : 'bg-white/30 text-[#102f50] backdrop-blur-[2px]'"
    >
        <div class="mx-auto flex h-20 max-w-[1240px] items-center justify-end px-5 lg:px-8">
            <button type="button" class="ml-auto rounded p-2 text-[#173452] lg:hidden" x-on:click="mobileOpen = ! mobileOpen" aria-label="Toggle navigation">
                <svg class="size-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 7h16M4 12h16M4 17h16"/></svg>
            </button>
            <nav class="hidden items-center gap-9 text-[12px] font-semibold tracking-[0.13em] lg:flex">
                <a href="#about" class="flex items-center gap-2 transition hover:text-[#239f98]">About Us <span class="border-r-2 border-b-2 border-current p-1 rotate-45 -translate-y-0.5"></span></a>
                <a href="#expertise" class="flex items-center gap-2 transition hover:text-[#239f98]">Our Expertise <span class="border-r-2 border-b-2 border-current p-1 rotate-45 -translate-y-0.5"></span></a>
                <a href="#environment" class="transition hover:text-[#239f98]">Environment</a>
                <a href="#faqs" class="transition hover:text-[#239f98]">FAQs</a>
                <a href="#news" class="transition hover:text-[#239f98]">News</a>
                <a href="#contact" class="ml-1 rounded-full bg-[#173452] px-11 py-4 text-[12px] tracking-normal text-white transition hover:bg-[#35aFA6]">Contact Us</a>
            </nav>
        </div>
    </div>

    <nav
        x-show="mobileOpen"
        x-cloak
        x-transition
        class="grid gap-1 border-t border-slate-200 bg-white px-6 py-5 text-sm font-semibold text-[#173452] shadow-xl lg:hidden"
    >
        <a href="#about" class="py-2" x-on:click="mobileOpen = false">About Us</a>
        <a href="#expertise" class="py-2" x-on:click="mobileOpen = false">Our Expertise</a>
        <a href="#environment" class="py-2" x-on:click="mobileOpen = false">Environment</a>
        <a href="#faqs" class="py-2" x-on:click="mobileOpen = false">FAQs</a>
        <a href="#news" class="py-2" x-on:click="mobileOpen = false">News</a>
        <a href="#contact" class="mt-2 rounded-full bg-[#173452] px-5 py-3 text-center text-white" x-on:click="mobileOpen = false">Contact Us</a>
    </nav>
</header>
