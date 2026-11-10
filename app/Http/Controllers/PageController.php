<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'password' => 'required',
        ]);

        if ($request->input('password') !== '12345') {
            return back()
                ->withErrors(['password' => 'Access Denied! Password Pit Wall harus: 12345'])
                ->withInput();
        }

        return redirect()->route('dashboard', ['username' => $request->input('username')]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest Strategist');

        $dashboardCards = [
            'next_race' => [
                'label' => 'NEXT GRAND PRIX',
                'title' => 'Las Vegas GP',
                'subtitle' => 'Las Vegas Strip Circuit • 22 Nov',
                'tag' => 'Round 22'
            ],
            'season_progress' => [
                'label' => 'SEASON PROGRESS',
                'title' => '21 / 24 Races',
                'subtitle' => '87.5% Musim Terealisasi (3 Seri Tersisa)',
                'tag' => 'Active Season'
            ],
            'wdc_contender' => [
                'label' => 'TOP WDC CONTENDER',
                'title' => 'Max Verstappen',
                'subtitle' => '393 Pts • Unggul +62 Pts di Klasemen',
                'tag' => 'P1 Standings'
            ]
        ];

        return view('dashboard', compact('username', 'dashboardCards'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest Strategist');

        $raceLogs = [
            [
                'round' => 'R01',
                'gp' => 'Bahrain Grand Prix',
                'circuit' => 'Bahrain International Circuit',
                'winner' => 'Max Verstappen',
                'team' => 'Red Bull Racing',
                'status' => 'Watched',
                'rating' => '8.0/10',
                'notes' => 'Dominasi pembuka musim, ritme balap malam sangat stabil.'
            ],
            [
                'round' => 'R04',
                'gp' => 'Japanese Grand Prix',
                'circuit' => 'Suzuka International Racing Course',
                'winner' => 'Max Verstappen',
                'team' => 'Red Bull Racing',
                'status' => 'Watched',
                'rating' => '9.2/10',
                'notes' => 'Sirkuit favorit! High-speed corner Sector 1 Suzuka selalu ikonik.'
            ],
            [
                'round' => 'R08',
                'gp' => 'Monaco Grand Prix',
                'circuit' => 'Circuit de Monaco',
                'winner' => 'Charles Leclerc',
                'team' => 'Scuderia Ferrari',
                'status' => 'Watched',
                'rating' => '9.0/10',
                'notes' => 'Kemenangan kandang emosional Leclerc setelah drama red flag Lap 1.'
            ],
            [
                'round' => 'R12',
                'gp' => 'British Grand Prix',
                'circuit' => 'Silverstone Circuit',
                'winner' => 'Lewis Hamilton',
                'team' => 'Mercedes-AMG Petronas',
                'status' => 'Watched',
                'rating' => '10/10',
                'notes' => 'Masterclass dari Hamilton di trek basah-kering! Kemenangan ke-9 di Silverstone.'
            ],
            [
                'round' => 'R14',
                'gp' => 'Belgian Grand Prix',
                'circuit' => 'Circuit de Spa-Francorchamps',
                'winner' => 'Lewis Hamilton',
                'team' => 'Mercedes-AMG Petronas',
                'status' => 'Watched',
                'rating' => '9.5/10',
                'notes' => 'Pace Mercedes sangat kuat, strategi ban berjalan dieksekusi sempurna.'
            ],
            [
                'round' => 'R21',
                'gp' => 'São Paulo Grand Prix',
                'circuit' => 'Autódromo José Carlos Pace (Interlagos)',
                'winner' => 'Max Verstappen',
                'team' => 'Red Bull Racing',
                'status' => 'Watched',
                'rating' => '9.8/10',
                'notes' => 'Hujan deras di Interlagos, comeback gila dari P17 menuju podium pertama.'
            ],
            [
                'round' => 'R22',
                'gp' => 'Las Vegas Grand Prix',
                'circuit' => 'Las Vegas Strip Circuit',
                'winner' => 'TBA',
                'team' => 'TBA',
                'status' => 'Upcoming',
                'rating' => '-',
                'notes' => 'Penentuan gelar WDC di balapan malam jalan raya Las Vegas.'
            ],
        ];

        return view('pengelolaan', compact('username', 'raceLogs'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest Strategist');

        $profileData = [
            'username' => $username,
            'role' => 'Race Anthusiast',
            'favorite_team' => 'Mercedes Petronas F1 Team',
            'favorite_driver' => 'Lewis Hamilton (#44)',
            'favorite_circuit' => 'Suzuka International Racing Course',
            'home_base' => 'Jember, East Java',
            'licence_id' => 'FIA-JBR-4401',
        ];

        return view('profile', compact('username', 'profileData'));
    }
}
