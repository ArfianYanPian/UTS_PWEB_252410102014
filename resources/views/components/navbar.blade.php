@props(['username' => 'Guest Strategist'])

<nav class="bg-[#F8F4F0] border-b-2 border-[#EE2A26] sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-between py-3 gap-3 sm:gap-0">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="flex items-center gap-2 group">
                <img src="{{ asset('images/formula-1-seeklogo.png') }}" alt="F1 Logo" class="h-6 sm:h-7">
                <span class="font-black text-2xl tracking-tighter text-[#EE2A26] italic">
                    TRACKER
                </span>
            </a>

            <div class="flex items-center gap-3 font-extrabold text-sm">
                <a href="{{ route('dashboard', ['username' => $username]) }}"
                    class="px-5 py-1.5 rounded-xl border-2 border-[#EE2A26] transition uppercase tracking-wider {{ Request::is('dashboard') ? 'bg-[#EE2A26] text-white' : 'bg-white text-[#EE2A26] hover:bg-[#EE2A26] hover:text-white' }}">
                    Dashboard
                </a>

                <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                    class="px-5 py-1.5 rounded-xl border-2 border-[#EE2A26] transition uppercase tracking-wider {{ Request::is('pengelolaan') ? 'bg-[#EE2A26] text-white' : 'bg-white text-[#EE2A26] hover:bg-[#EE2A26] hover:text-white' }}">
                    Race Log
                </a>

                <a href="{{ route('profile', ['username' => $username]) }}"
                    class="px-5 py-1.5 rounded-xl border-2 border-[#EE2A26] transition uppercase tracking-wider {{ Request::is('profile') ? 'bg-[#EE2A26] text-white' : 'bg-white text-[#EE2A26] hover:bg-[#EE2A26] hover:text-white' }}">
                    Profile
                </a>
            </div>

            <div class="flex items-center gap-4">
                <span class="font-black text-base text-[#EE2A26] uppercase tracking-wide">
                    {{ $username }}
                </span>
                <a href="{{ route('login') }}"
                    class="bg-[#EE2A26] hover:bg-[#d4231f] text-white font-extrabold text-sm px-4 py-1.5 rounded-xl uppercase transition tracking-wider">
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>
