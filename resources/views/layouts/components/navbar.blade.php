 <nav id="main-nav" class="nav-root transition-shadow duration-300 bg-white">

    <div class=" mx-auto px-5 lg:px-8 h-14 flex items-center justify-between">

        <!-- Hamburger -->
        <button id="hamburger" class="flex flex-col justify-center gap-1 w-8 h-8 bg-transparent border-0 cursor-pointer p-0 shrink-0" aria-label="Toggle menu">
        <span id="ham-1" class="block w-5 h-[1.5px] bg-black transition-all duration-300 origin-center"></span>
        <span id="ham-2" class="block w-5 h-[1.5px] bg-black transition-all duration-300"></span>
        <span id="ham-3" class="block w-5 h-[1.5px] bg-black transition-all duration-300 origin-center"></span>
        </button>

        <!-- Logo -->
        <a href="#" class="absolute left-1/2 -translate-x-1/2 flex items-center gap-2.5">
        <img src="{{ asset('images/logo.jpg') }}" alt="" class="w-12 h-10 shrink-0" />
        <span class="font-display text-lg font-bold text-gold whitespace-nowrap">
            Nepa Rudraksha
        </span>
        </a>

        <!-- Currency  -->
        <div class="flex items-center gap-3 shrink-0">
        <button class="flex items-center gap-1.5 bg-transparent border border-gray-300 p-1 rounded-md cursor-pointer text-gray-600 hover:text-gold transition-colors duration-200 text-xxs font-body tracking-wide" aria-label="Currency">
            <span class="text-xxs font-medium">USD</span>
            <svg class="w-3 h-3 opacity-80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
        </button>
        <button class="p-1 bg-transparent border-0 cursor-pointer text-gray-600 hover:text-gold transition-colors duration-200" aria-label="Notifications">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
            </svg>
        </button>
        </div>
    </div>

    <!-- Nav links  -->
    <div class="mx-auto px-5 lg:px-6 h-9 hidden lg:flex items-center text-black">
        <div class="flex-1 flex justify-center">
        <ul class="flex items-center gap-14" id="nav-links">
            <li><a href="#" class="nav-link active" data-key="home">Home</a></li>
            <li><a href="#" class="nav-link" data-key="rudraksha">Rudraksha</a></li>
            <li><a href="#" class="nav-link" data-key="exclusive">Exclusive</a></li>
            <li><a href="#" class="nav-link" data-key="siddhaMala">Siddha Mala</a></li>
            <li><a href="#" class="nav-link" data-key="consultation">Rudraksha Consultation</a></li>
            <li><a href="#" class="nav-link" data-key="aboutUs">About Us</a></li>
            <li><a href="#" class="nav-link" data-key="more">More</a></li>
        </ul>
        </div>
        <div class="flex items-center gap-1 shrink-0">
        <button class="flex items-center gap-1.5 px-2 py-1 bg-transparent border-0 cursor-pointer text-black hover:text-gold transition-colors duration-200" aria-label="Search">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.35-4.35"/></svg>
            <span class="font-body text-[12px] tracking-wide">Search</span>
        </button>
        <button class="p-2 bg-transparent border-0 cursor-pointer text-black hover:text-gold transition-colors duration-200" aria-label="Cart">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/>
            <path d="M16 10a4 4 0 0 1-8 0"/>
            </svg>
        </button>
        <button class="p-2 bg-transparent border-0 cursor-pointer text-black hover:text-gold transition-colors duration-200" aria-label="Wishlist">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
            </svg>
        </button>
        <button class="p-2 bg-transparent border-0 cursor-pointer text-black hover:text-gold transition-colors duration-200" aria-label="Account">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
            </svg>
        </button>
        </div>
    </div>

    <!-- Mobile icon row -->
    <div class="lg:hidden flex items-center justify-end gap-1 px-5 h-18">
        <button class="flex items-center gap-1.5 px-2 py-1 bg-transparent border-0 cursor-pointer text-parchment text-xxs font-body" aria-label="Search">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.35-4.35"/></svg>
        Search
        </button>
        <button class="p-2 bg-transparent border-0 cursor-pointer text-parchment hover:text-gold" aria-label="Cart">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
        </button>
        <button class="p-2 bg-transparent border-0 cursor-pointer text-parchment hover:text-gold" aria-label="Wishlist">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </button>
        <button class="p-2 bg-transparent border-0 cursor-pointer text-parchment hover:text-gold" aria-label="Account">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
        </button>
    </div>

    <!-- Mobile Drawer -->
    <div id="mobile-drawer" class="overflow-hidden transition-all duration-300 bg-ebony-mid max-h-0 opacity-0 nav-drawer-top">
        <ul class="px-6 pt-2 pb-6">
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-gold pl-2 transition-all duration-200">Home</a></li>
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-parchment hover:text-gold hover:pl-2 transition-all duration-200"></a></li>
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-parchment hover:text-gold hover:pl-2 transition-all duration-200">Rudraksha</a></li>
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-parchment hover:text-gold hover:pl-2 transition-all duration-200">Exclusive</a></li>
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-parchment hover:text-gold hover:pl-2 transition-all duration-200">Siddha Mala</a></li>
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-parchment hover:text-gold hover:pl-2 transition-all duration-200">Rudraksha Consultation</a></li>
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-parchment hover:text-gold hover:pl-2 transition-all duration-200">About Us</a></li>
        <li><a href="#" class="block py-3 font-body text-sm uppercase text-parchment hover:text-gold hover:pl-2 transition-all duration-200">More</a></li>
        </ul>
    </div>
    </nav>