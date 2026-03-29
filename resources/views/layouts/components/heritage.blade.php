<section class="bg-ivory pt-24 py-12 px-8 lg:px-10">
    <div class="pl-10 mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="font-serif text-5xl font-semibold text-ebony">
                <span class="text-gold-dark">5000+ years</span> of usage<br>
                Now in your hands
            </h2>
        </div>
        <div>
            <p class="font-body text-lg text-ebony-brown mb-8">
                The 14 Mukhi Rudraksha, celebrated for 5000 years, is now a powerful bead you can wear daily. Known for
                boosting intuition, confidence, and focus, it helps young professionals.
            </p>
            {{-- Floating Buy Now Button --}}
            <div id="floating-buy" x-data="{ expanded: false }" class="fixed bottom-6 right-6 z-50 flex flex-col items-end">

                {{-- Expanded Card --}}
                <div x-show="expanded" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 scale-95"
                    class="mb-3 w-72 bg-ivory rounded-2xl shadow-2xl overflow-hidden border border-gold/20">
                    {{-- Card Top --}}
                    <div class="p-5 pb-4">
                        <div class="flex items-start justify-between mb-3">
                            <div>
                                <p class="font-body text-xxs font-semibold tracking-[0.18em] uppercase text-gold mb-1">
                                    Sacred Bead
                                </p>
                                <h3 class="font-display text-2xl font-bold text-ebony leading-tight tracking-wide">14
                                    MUKHI<br>RUDRAKSHA</h3>
                            </div>
                            <div
                                class="w-11 h-11 rounded-full border border-gold/40 flex items-center justify-center shrink-0 mt-1">
                                <svg class="w-4 h-4 text-gold" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.5">
                                    <circle cx="12" cy="12" r="3" />
                                    <circle cx="12" cy="12" r="8" />
                                </svg>
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="flex items-baseline gap-3 mt-4 mb-1">
                            <span class="font-display text-3xl font-bold text-ebony">₹49,999</span>
                            <span class="font-body text-sm text-muted line-through">₹74,999</span>
                            <span
                                class="font-body text-[10px] font-semibold tracking-wide text-gold border border-gold/40 rounded-full px-2 py-0.5">33%
                                OFF</span>
                        </div>
                    </div>

                    {{-- Divider --}}
                    <div class="h-px bg-gray-200 mx-5"></div>

                    {{-- Features --}}
                    <div class="px-5 py-4 flex flex-col gap-2.5">
                        @foreach(['Free energisation ritual included', 'Certificate of authenticity', 'Ships in 2–3
                        business
                        days'] as $f)
                        <div class="flex items-center gap-2.5">
                            <span class="text-gold text-xs">✦</span>
                            <span class="font-body text-sm text-ebony/70">{{ $f }}</span>
                        </div>
                        @endforeach
                    </div>

                    {{-- Buy Button inside card --}}
                    <div class="px-4 pb-4">
                        <a href="#"
                            class="flex items-center justify-center gap-3 w-full bg-gold-pale rounded-xl py-3.5 group">
                            <svg class="w-4 h-4 text-ivory" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.5">
                                <circle cx="12" cy="12" r="3" />
                                <circle cx="12" cy="12" r="8" />
                            </svg>
                            <span class="font-body text-sm font-semibold tracking-[0.15em] uppercase text-ivory">Buy
                                Now</span>
                            <svg class="w-4 h-4 text-ivory transition-transform group-hover:translate-x-1"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                {{-- Floating Pill Button --}}
                <button @click="expanded = !expanded"
                    class="flex items-center gap-3 bg-gold-pale rounded-2xl px-4 py-3 shadow-xl transition-all duration-300 hover:shadow-gold/20 hover:shadow-2xl group">
                    {{-- Icon circle --}}
                    <div class="w-9 h-9 rounded-full border border-ivory/30 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-ivory" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5">
                            <circle cx="12" cy="12" r="3" />
                            <circle cx="12" cy="12" r="8" />
                        </svg>
                    </div>

                    {{-- Text --}}
                    <div class="text-left">
                        <p class="font-body text-[9px] font-medium tracking-[0.18em] uppercase text-ivory/60">14 MUKHI ·
                            AAA GRADE
                        </p>
                        <p class="font-display text-base font-bold text-ivory leading-tight">Buy Now · ₹4,999</p>
                    </div>

                    {{-- Chevron --}}
                    <svg class="w-4 h-4 text-ivory/60 ml-1 transition-transform duration-300"
                        :class="expanded ? 'rotate-180' : ''" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M18 15l-6-6-6 6" />
                    </svg>
                </button>

            </div>
        </div>
    </div>
</section>