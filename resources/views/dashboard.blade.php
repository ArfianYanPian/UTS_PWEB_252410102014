@extends('layouts.app')

@section('title', 'Dashboard Telemetry')

@section('content')
    <div class="space-y-8">

        <!-- Hero Banner Merah -->
        <div
            class="bg-[#EE2A26] text-white rounded-3xl p-8 sm:p-10 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div>
                <h1 class="font-black text-2xl sm:text-4xl uppercase tracking-wide">
                    WELCOME TO F1TRACKER, {{ $username }}!!
                </h1>
                <p class="mt-3 text-sm sm:text-base font-medium leading-relaxed max-w-3xl opacity-95">
                    Ayo pantau jadwal Grand Prix berikutnya, progres seri balapan musim ini, dan kalkulasi kandidat kuat
                    juara dunia (WDC) langsung dari F1Tracker.
                </p>
            </div>

            <a href="{{ route('pengelolaan', ['username' => $username]) }}"
                class="shrink-0 bg-white hover:bg-gray-100 text-[#EE2A26] font-extrabold uppercase text-sm px-6 py-3 rounded-2xl transition tracking-wider shadow-sm">
                Buka Race Log →
            </a>
        </div>

        <!-- 3 Card Utama Sesuai Spesifikasi -->
        <div>
            <h2 class="font-black text-xl text-[#EE2A26] uppercase tracking-wider mb-4">
                SEASON TELEMETRY SUMMARY
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1: Next Race -->
                <div class="bg-[#EE2A26] text-white rounded-2xl p-6 flex flex-col justify-between h-56 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between text-xs font-extrabold uppercase">
                            <span>{{ $dashboardCards['next_race']['label'] }}</span>
                            <span
                                class="bg-white text-[#EE2A26] px-3 py-1 rounded-full">{{ $dashboardCards['next_race']['tag'] }}</span>
                        </div>
                        <h3 class="font-black text-2xl sm:text-3xl uppercase mt-3">
                            {{ $dashboardCards['next_race']['title'] }}
                        </h3>
                        <p class="text-xs font-medium opacity-90 mt-1">
                            {{ $dashboardCards['next_race']['subtitle'] }}
                        </p>
                    </div>
                    <div class="border-t border-white/30 pt-3 text-xs font-bold uppercase">
                        Status : Balapan Malam Ini
                    </div>
                </div>


                <div class="bg-[#EE2A26] text-white rounded-2xl p-6 flex flex-col justify-between h-56 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between text-xs font-extrabold uppercase">
                            <span>{{ $dashboardCards['season_progress']['label'] }}</span>
                            <span
                                class="bg-white text-[#EE2A26] px-3 py-1 rounded-full">{{ $dashboardCards['season_progress']['tag'] }}</span>
                        </div>
                        <h3 class="font-black text-3xl sm:text-4xl uppercase mt-3">
                            {{ $dashboardCards['season_progress']['title'] }}
                        </h3>
                        <p class="text-xs font-medium opacity-90 mt-1">
                            {{ $dashboardCards['season_progress']['subtitle'] }}
                        </p>
                    </div>
                    <div class="border-t border-white/30 pt-3 text-xs font-bold uppercase">
                        Target Seri: 24 Grand Prix
                    </div>
                </div>


                <div class="bg-[#EE2A26] text-white rounded-2xl p-6 flex flex-col justify-between h-56 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between text-xs font-extrabold uppercase">
                            <span>{{ $dashboardCards['wdc_contender']['label'] }}</span>
                            <span
                                class="bg-white text-[#EE2A26] px-3 py-1 rounded-full">{{ $dashboardCards['wdc_contender']['tag'] }}</span>
                        </div>
                        <h3 class="font-black text-2xl sm:text-3xl uppercase mt-3">
                            {{ $dashboardCards['wdc_contender']['title'] }}
                        </h3>
                        <p class="text-xs font-medium opacity-90 mt-1">
                            {{ $dashboardCards['wdc_contender']['subtitle'] }}
                        </p>
                    </div>
                    <div class="border-t border-white/30 pt-3 text-xs font-bold uppercase">
                        WDC PROBABILITY : 94.2%
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
