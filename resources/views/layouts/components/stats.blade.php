<section class="mx-auto px-8 lg:px-10 pb-16">
  <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">

    {{-- Stat 1 --}}
    <div class="bg-white p-7 lg:p-8 flex flex-col gap-3 rounded-xl shadow-card">
      <i
        class="flex items-center justify-center w-12 h-12 bg-ivory/60 text-gold rounded-2xl border border-gray-200 bi bi-clock-history"></i>
      <div class="font-display pt-2 text-5xl font-bold leading-none text-gold-dark">89%</div>
      <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden">
        <div class="h-full bg-gold-dark rounded-full" style="width: 89%"></div>
      </div>
      <div class="font-body text-sm font-semibold text-ebony">Reported Less Stress</div>
      <div class="font-body text-xs text-muted">Within the first 21 days of wearing</div>
    </div>

    {{-- Stat 2 --}}
    <div
      class="bg-gradient-to-br from-gold-light to-gold-dark via-gold p-7 lg:p-8 flex flex-col gap-3 rounded-xl shadow-card">
      <i
        class="flex items-center justify-center w-12 h-12 text-ivory bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 bi bi-arrow-bar-up"></i>
      <div class="font-display pt-2 text-5xl font-bold leading-none text-ivory">92%</div>
      <div class="w-full h-1 bg-ivory/25 rounded-full overflow-hidden">
        <div class="h-full bg-ivory rounded-full" style="width: 92%"></div>
      </div>
      <div class="font-body text-sm font-semibold text-ivory">Felt More Confident</div>
      <div class="font-body text-xs text-ivory/50">Self-reported after 6 weeks</div>
    </div>

    {{-- Stat 3 --}}
    <div class="bg-white p-7 lg:p-8 flex flex-col gap-3 rounded-xl shadow-card">
      <i
        class="flex items-center justify-center w-12 h-12 bg-ivory/60 rounded-2xl text-gold border border-gray-200 bi bi-crosshair"></i>
      <div class="font-display pt-2 text-5xl font-bold leading-none text-gold-dark">78%</div>
      <div class="w-full h-1 bg-gray-200 rounded-full overflow-hidden">
        <div class="h-full bg-gold-dark rounded-full" style="width: 78%"></div>
      </div>
      <div class="font-body text-sm font-semibold text-ebony">Sharper Focus at Work</div>
      <div class="font-body text-xs text-muted">Among professionals & students</div>
    </div>


    <div
      class="bg-gradient-to-br from-gold-light to-gold-dark via-gold p-7 lg:p-8 flex flex-col gap-3 rounded-xl shadow-card">
      <i
        class="flex items-center justify-center w-12 h-12 text-ivory bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 bi bi-check2-circle"></i>
      <div class="font-display pt-2 text-5xl font-bold leading-none text-ivory">84%</div>
      <div class="w-full h-1 bg-ivory/25 rounded-full overflow-hidden">
        <div class="h-full bg-ivory rounded-full" style="width: 84%"></div>
      </div>
      <div class="font-body text-sm font-semibold text-ebony">Better Quality Sleep</div>
      <div class="font-body text-xs text-ebony/60">Tracked over a 90-day period</div>
    </div>
  </div>

  {{-- Feature Banners--}}
  <div class="grid grid-cols-1 lg:grid-cols-[1fr_0.6fr_1fr] gap-3 mt-5">
    <div class="relative overflow-hidden flex flex-col justify-end rounded-xl p-7 lg:p-8 min-h-[380px]">
      <div class="absolute inset-0">
        <img src="{{ asset('images/shiva.png') }}" class="w-full h-full object-cover" />
      </div>
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative z-10">
        <span class="font-body text-xs font-medium uppercase text-gold block mb-3">
          DOCUMENTED IN SHIVA PURANA
        </span>
        <p class="font-serif text-2xl font-semibold text-ivory m-0">
          "He who wears Rudraksha achieves the sight of Shiva himself."
        </p>
      </div>
    </div>

    {{-- 100% authentic--}}

    <div class="relative flex flex-col bg-gradient-to-br from-gold to-gold-dark rounded-xl p-7 lg:p-8 min-h-[380px]">
      <div class="font-display text-6xl font-bold text-ivory leading-none pt-6 mb-2">100%</div>
      <div class="font-body text-xs font-medium uppercase text-white block">Natural & Authentic Bead.</div>

      <div class="absolute bottom-4 right-4 font-serif italic text-sm text-parchment">Nepal . Arun Valley</div>
    </div>

    {{-- Scripture --}}
    <div class="relative overflow-hidden flex flex-col justify-end rounded-xl p-7 lg:p-8 min-h-[380px]">
      <div class="absolute inset-0">
        <img src="{{ asset('images/book.jpg') }}" class="w-full h-full object-cover" />
      </div>
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative z-10">
        <span class="font-body text-xs font-medium uppercase text-gold block mb-3">
          VEDIC SCRIPTURES
        </span>
        <p class="font-serif text-xl font-semibold text-ivory m-0">
          Written in Sanskrit over 5,000 years ago
        </p>
      </div>
    </div>

  </div>
</section>