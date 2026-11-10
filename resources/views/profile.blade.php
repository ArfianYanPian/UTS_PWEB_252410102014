@extends('layouts.app')

@section('title', 'Strategist Profile')

@section('content')
    <div class="flex justify-center items-center py-4">

        <div
            class="bg-[#EE2A26] text-white rounded-3xl p-8 sm:p-12 w-full max-w-4xl min-h-[420px] shadow-sm flex flex-col justify-between">

            <div>
                <div class="flex items-center gap-4 border-b border-white/30 pb-6">
                    <div
                        class="w-16 h-16 sm:w-20 sm:h-20 bg-white text-[#EE2A26] rounded-2xl flex items-center justify-center font-black text-2xl sm:text-3xl">
                        {{ strtoupper(substr($profileData['username'], 0, 2)) }}
                    </div>
                    <div class="flex-grow">
                        <h1 class="font-black text-2xl sm:text-4xl uppercase tracking-wide">
                            {{ $profileData['username'] }}
                        </h1>
                        <p class="text-xs sm:text-sm font-bold uppercase tracking-wider opacity-90 mt-1">
                            {{ $profileData['role'] }}
                        </p>
                    </div>
                    <div class="hidden sm:block text-right">
                        <span class="text-xs font-extrabold opacity-80 block uppercase">FIA Licence ID</span>
                        <span class="font-black text-lg block">{{ $profileData['licence_id'] }}</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8 text-sm">
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/20">
                        <span class="text-xs font-extrabold uppercase opacity-80 block">Favorite Constructor</span>
                        <span class="font-black text-lg uppercase mt-1 block">{{ $profileData['favorite_team'] }}</span>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/20">
                        <span class="text-xs font-extrabold uppercase opacity-80 block">Primary Driver</span>
                        <span class="font-black text-lg uppercase mt-1 block">{{ $profileData['favorite_driver'] }}</span>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/20">
                        <span class="text-xs font-extrabold uppercase opacity-80 block">Favorite Circuit</span>
                        <span class="font-black text-lg uppercase mt-1 block">{{ $profileData['favorite_circuit'] }}</span>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-4 border border-white/20">
                        <span class="text-xs font-extrabold uppercase opacity-80 block">Home Base Operations</span>
                        <span class="font-black text-lg uppercase mt-1 block">{{ $profileData['home_base'] }}</span>
                    </div>
                </div>
            </div>

            <div
                class="mt-8 pt-4 border-t border-white/30 text-xs font-bold text-center opacity-80 uppercase flex justify-between items-center">
                <span>Status: Verified</span>
            </div>

        </div>

    </div>
@endsection
