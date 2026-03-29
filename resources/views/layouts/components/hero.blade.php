<section id="hero" class="relative overflow-hidden">

  <!-- Background image -->
  <div class="absolute inset-0">
    <img src="{{ asset('images/hero-bg.png') }}" alt="" class="w-full h-full object-cover object-center" />
    <div class="absolute inset-0 bg-black/80"></div>
  </div>

  <!-- Content grid -->
  <div class="relative z-10 mx-auto px-8 lg:px-12 grid grid-cols-1 lg:grid-cols-4 gap-4 lg:gap-0 items-end lg:items-stretch">

    <!-- LEFT-->
    <div class="flex flex-col justify-center mt-18 py-14 lg:py-16 lg:col-span-1 animate-slide-left">
      <h1 class="font-serif text-3xl font-semibold mb-5 text-gold-light shadow-sm">
        Inner Clarity.<br>
        Fearless Decisions.<br>
        Higher Awareness.
      </h1>
      <p class="text-sm mb-7 max-w-[360px] text-white">
        The 14 Mukhi Rudraksha is known for sharpening decision-making, reducing overthinking, and boosting confidence.
        Traditionally linked to Lord Shiva and the Agya Chakra, it supports inner clarity, fearless action, and
        spiritual elevation. Aligned with Saturn's discipline and Mars' courage.
      </p>
      <div class="flex flex-wrap gap-2 mb-8">
        <span
          class="inline-block px-3 py-1 border border-gold/40 rounded-xl text-xxs tracking-[0.08em] text-white bg-gold/5">Discipline
         & Restraint</span>
        <span
          class="inline-block px-3 py-1 border border-gold/40 rounded-xl text-xxs tracking-[0.08em] text-white bg-gold/5">Spiritual
          Elevation</span>
        <span
          class="inline-block px-3 py-1 border border-gold/40 rounded-xl text-xxs tracking-[0.08em] text-white bg-gold/5">Saturn
          – Mars Alignment</span>
      </div>
    </div>

    <!-- CENTER-->
    <div class="hidden lg:flex flex-col items-center relative pt-0 lg:col-span-2">
      <div
        class="absolute rounded-full pointer-events-none w-[500px] h-[500px] left-1/2 -translate-x-1/2 -translate-y-1/2 planet-glow-bg">
      </div>

      <!-- Rudraksha Image -->
      <img src="{{ asset('images/rud14.png') }}" alt="14 Mukhi Rudraksha"
        class="relative z-50 w-full max-w-[550px] h-auto drop-shadow-[0_20px_50px_rgba(0,0,0,0.85)]" />

      <div class="text-center mt-10 pb-5">
        <p class="text-4xl font-display font-semibold tracking-wide text-white mb-2">
          14 Mukhi Rudraksha
        </p>
        <a href="#" class="btn-gold inline-flex items-center mt-7 gap-2">
          FEEL THE CHANGE
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4">
            <path d="M5 12h14M12 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>

    <!-- Mobile bead -->
    <div class="lg:hidden flex flex-col items-center pb-4 animate-float">
      <img src="{{ asset('images/rud14.png') }}" alt="14 Mukhi Rudraksha"
        class="w-[280px] h-auto mx-auto [filter:drop-shadow(0_16px_40px_rgba(0,0,0,0.8))]" />
      <p class="font-display text-3xl font-semibold tracking-[0.14em] text-white mt-4 mb-5 text-center">
        14 Mukhi Rudraksha
      </p>
      <a href="#" class="btn-gold">
        FEEL THE CHANGE
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M5 12h14M12 5l7 7-7 7" />
        </svg>
      </a>
    </div>

    <!-- RIGHT -->
    <div class="flex flex-col justify-center items-end py-14 lg:py-16 lg:col-span-1 animate-slide-right">
      <div class="w-full testimonial-card p-5">
        <div class="flex items-center gap-3 mb-4">
          <div
            class="w-6 h-6 rounded-lg flex items-center justify-center shrink-0 bg-gray-50/5">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="#808080">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <div class="font-body leading-snug">
            <span class="text-white text-xs block">14,000+ happy user results</span>
          </div>
        </div>
        <blockquote class="font-serif text-sm italic mb-3 text-white">
          "It helps me make decisions with confidence and keeps my mind grounded. This is one of the few things I truly
          trust to uplift my mood and guide my daily life."
        </blockquote>
        <cite class="font-body text-xxs text-gray-100 not-italic block mb-3">
          -Derek Smith (Lawyer)
        </cite>
        <div class="flex items-center gap-1.5">
          <span class="w-5 h-1 rounded-full bg-gray-200"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
          <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span>
        </div>
      </div>
    </div>
  </div>
</section>