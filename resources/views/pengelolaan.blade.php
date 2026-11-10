@extends('layouts.app')

@section('title', 'Pengelolaan Race Log')

@section('content')
    <div class="space-y-6">

        <div
            class="bg-[#EE2A26] text-white rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-sm">
            <div>
                <h1 class="font-black text-2xl sm:text-3xl uppercase tracking-wide">
                    Pengelolaan Catatan & Riwayat Balapan
                </h1>
                <p class="text-sm font-medium opacity-90 mt-1">
                    Grand Prix Archive • Strategist: {{ $username }}
                </p>
            </div>
            <div class="bg-white text-[#EE2A26] font-black px-5 py-2 rounded-xl text-sm uppercase self-start sm:self-auto">
                Total Log: {{ count($raceLogs) }} GP
            </div>
        </div>

        <div class="bg-white rounded-3xl border-2 border-[#EE2A26] overflow-hidden shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#EE2A26] text-white font-extrabold text-xs uppercase tracking-wider">
                            <th class="py-4 px-5">Rnd</th>
                            <th class="py-4 px-5">Grand Prix & Sirkuit</th>
                            <th class="py-4 px-5">Pemenang & Tim</th>
                            <th class="py-4 px-5">Status</th>
                            <th class="py-4 px-5">Rating</th>
                            <th class="py-4 px-5">Catatan Strategist</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-sm font-medium">
                        @foreach ($raceLogs as $race)
                            <tr class="hover:bg-red-50/50 transition">
                                <td class="py-4 px-5 font-black text-[#EE2A26]">
                                    #{{ $race['round'] }}
                                </td>
                                <td class="py-4 px-5">
                                    <div class="font-bold text-gray-900">{{ $race['gp'] }}</div>
                                    <div class="text-xs text-gray-500">{{ $race['circuit'] }}</div>
                                </td>
                                <td class="py-4 px-5">
                                    <div class="font-bold text-gray-800">{{ $race['winner'] }}</div>
                                    <div class="text-xs font-bold text-[#EE2A26]">{{ $race['team'] }}</div>
                                </td>
                                <td class="py-4 px-5">
                                    @if ($race['status'] === 'Watched')
                                        <span
                                            class="inline-block bg-[#EE2A26] text-white px-3 py-1 rounded-full text-xs font-bold">
                                            Watched
                                        </span>
                                    @else
                                        <span
                                            class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-bold">
                                            Upcoming
                                        </span>
                                    @endif
                                </td>
                                <td class="py-4 px-5 font-black text-[#EE2A26]">
                                    {{ $race['rating'] }}
                                </td>
                                <td class="py-4 px-5 text-gray-600 text-xs leading-relaxed max-w-xs">
                                    "{{ $race['notes'] }}"
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
