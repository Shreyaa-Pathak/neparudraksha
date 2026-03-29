<section class="bg-ebony py-24 px-8 text-center relative overflow-hidden">
  <div class="flex items-center justify-center gap-3 mb-8">
    <span class="block w-10 h-px bg-gold opacity-50"></span>
    <p class="font-body text-sm tracking-[0.22em] uppercase text-gold">TWO PATHS, ONE POWER</p>
    <span class="block w-10 h-px bg-gold opacity-50"></span>
  </div>

  <h2 class="font-serif text-6xl font-semibold text-ivory mb-4 tracking-tight">
    The Dual Planetary Power
  </h2>
  <p class="font-body text-sm text-muted max-w-lg mx-auto mb-12 leading-relaxed">
    No other Rudraksha holds the combined force of two great planets. The 14 Mukhi channels both Saturn's supreme
    discipline and Mars's relentless courage into a single sacred bead.
  </p>

  {{-- Diagram --}}
  <div class="relative max-w-7xl mx-auto">

    <div class="absolute left-0 right-0 h-px bg-white/10 z-0 top-[230px]"></div>

    <div class="grid grid-cols-3 items-start gap-0">

      {{-- Saturn --}}
      <div class="flex flex-col items-start pl-4 text-left">
        <img src="{{ asset('images/saturn.png') }}" class="w-50 h-50 object-contain mb-0.5" alt="Saturn" />
        <div class="flex items-center gap-2 mt-1 pl-8">
          <span class="block w-2 h-px bg-blue-400/60"></span>
          <p class="font-display text-lg font-semibold text-blue-400/60 tracking-wide">Saturn</p>
          <span class="block w-2 h-px bg-blue-400/60"></span>
        </div>
        <p class="font-serif pl-10 text-sm text-blue-400/60 mb-5">शनि</p>
        <div class="grid grid-cols-2 gap-2">
          @foreach([['bi-person-arms-up','Discipline'],['bi-hand-thumbs-up','Patience'],['bi-link-45deg','Restraint'],['bi-hand-raised','Karma']] as $q)
          <div class="flex items-center gap-2 bg-blue-50/5 border border-blue-100/10 rounded-2xl px-3 py-1.5">
            <div class="w-6 h-6 rounded-full bg-blue-50/5 border border-blue-50/10 flex items-center justify-center shrink-0">
              <i class="bi {{ $q[0] }} text-blue-400/70 text-sm"></i>
            </div>
            <span class="font-body text-xs text-blue-400/70">{{ $q[1] }}</span>
          </div>
          @endforeach
        </div>
      </div>

      {{-- Center Bead --}}
      <div class="flex flex-col items-center relative z-10">
        <div class="relative w-115 h-115 flex items-center justify-center">

          <div class="absolute inset-0 rounded-full"
            style="background: radial-gradient(circle, transparent 17%, rgba(184,136,58,0.25) 22%, rgba(184,136,58,0.08) 34%, transparent 44%);">
          </div>

          <div class="absolute inset-4 rounded-full border border-dashed border-gold/30"></div>
          <div class="absolute inset-22 rounded-full border border-dashed border-gold/50"></div>
          <div class="absolute inset-30 rounded-full border border-dashed border-gold/50"></div>
          <div class="absolute inset-34 rounded-full border border-dashed border-gold/50"></div>

          <div class="w-36 h-36 rounded-full bg-gold flex items-center justify-center z-10 relative">
            <img src="{{ asset('images/rudmid.png') }}" class="pt-6 pr-3 h-full object-cover" alt="14 Mukhi" />
          </div>

        </div>

        <p class="font-display text-2xl italic  text-white tracking-widest -mt-30 relative z-20">14 Mukhi</p>
        <p class="font-body text-muted text-sm tracking-[0.2em] uppercase mt-1 relative z-20">UNIFIED FORCE</p>
      </div>

      {{-- Mars --}}
      <div class="flex flex-col items-end pr-4 text-right">
        <img src="{{ asset('images/mars.png') }}" class="w-50 h-50 object-contain mb-0,5" alt="Mars" />
        <div class="flex items-center gap-2 mt-1 pr-6">
          <span class="block w-2 h-px bg-red-400/70"></span>
          <p class="font-display text-lg font-semibold text-red-400/70 tracking-wide">Mars</p>
          <span class="block w-2 h-px bg-red-400/70"></span>
        </div>
        <p class="font-serif text-sm text-red-400/70 mb-5 pr-8">मंगल</p>
        <div class="grid grid-cols-2 gap-2">
          @foreach([['bi-person-walking','Courage'],['bi-eye','Willpower'],['bi-lightning-charge','Action'],['bi-flower1','Vitality']] as $q)
          <div class="flex items-center gap-2 bg-red-50/5 border border-red-100/5 rounded-2xl px-3 py-1.5">
            <div class="w-6 h-6 rounded-full bg-red-50/5 border border-red-100/10 flex items-center justify-center shrink-0">
              <i class="bi {{ $q[0] }} text-red-400/70 text-sm"></i>
            </div>
            <span class="font-body text-xs text-red-400/70">{{ $q[1] }}</span>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>