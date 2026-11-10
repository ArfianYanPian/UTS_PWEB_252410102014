@extends('layouts.app')

@section('title', 'Paddock Access Login')

@section('content')
    <div class="min-h-[75vh] flex items-center justify-center p-4">
        <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 items-center gap-12">

            <!-- Kiri: Logo F1 + TRACKER besar -->
            <div class="flex flex-col items-center md:items-start justify-center">
                <img src="{{ asset('images/formula-1-seeklogo.png') }}" alt="F1 Logo" class="h-20 sm:h-28">
                <h1 class="font-black text-4xl sm:text-6xl text-[#EE2A26] italic tracking-tighter mt-2">
                    TRACKER
                </h1>
            </div>

            <!-- Kanan: Form Login Kotak Merah -->
            <div class="border-2 border-[#EE2A26] rounded-3xl p-8 sm:p-10 bg-[#F8F4F0] shadow-sm">
                <h2
                    class="font-black text-2xl sm:text-3xl text-[#EE2A26] uppercase tracking-wide border-b-2 border-[#EE2A26] pb-3 mb-6">
                    F1TRACKER ACCESS
                </h2>

                <!-- Notifikasi Error dari Kode Lama -->
                @if ($errors->any())
                    <div
                        class="mb-5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl text-sm font-semibold">
                        <p class="font-bold mb-1">⚠ Telemetry Error:</p>
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <!-- Form Login -->
                <form action="{{ route('login.submit') }}" method="POST" class="space-y-5">
                    @csrf

                    <div>
                        <label for="username"
                            class="block text-xs font-extrabold text-[#EE2A26] uppercase tracking-wider mb-2">
                            USERNAME
                        </label>
                        <input type="text" id="username" name="username" value="{{ old('username') }}"
                            placeholder="Masukkan Nama (contoh: Dzaki)" required
                            class="w-full bg-gray-200 text-gray-800 font-semibold px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#EE2A26] text-sm">
                    </div>

                    <div>
                        <label for="password"
                            class="block text-xs font-extrabold text-[#EE2A26] uppercase tracking-wider mb-2">
                            PASSWORD <span class="text-gray-500 font-normal ml-2 lowercase tracking-normal">(Default:
                                12345)</span>
                        </label>
                        <input type="password" id="password" name="password" placeholder="•••••" required
                            class="w-full bg-gray-200 text-gray-800 font-semibold px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#EE2A26] text-sm">
                    </div>

                    <button type="submit"
                        class="w-full bg-[#EE2A26] hover:bg-[#d4231f] text-white font-black text-lg py-3 rounded-xl uppercase transition tracking-wider mt-4">
                        CONNECT →
                    </button>
                </form>
            </div>

        </div>
    </div>
@endsection
