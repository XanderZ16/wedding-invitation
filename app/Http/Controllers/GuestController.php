<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {
        $guests = Guest::all();
        $totalAttendance = 0;
        foreach ($guests as $guest) {
            $totalAttendance += $guest->attendance;
        }

        $nick_groom = 'Ruliansyah';
        $nick_bride = 'Dian';

        return view('guests', compact('guests', 'totalAttendance', 'nick_groom', 'nick_bride'));
    }

    public function store(Request $request) {
        $validated_data = $request->validate([
            'name' => 'required',
            'attendance' => 'required|numeric',
        ]);

        Guest::create($validated_data);

        return redirect()->back();
    }

    public function invite() {
        $nick_groom = 'Ruliansyah';
        $nick_bride = 'Dian';

        return view('invite', compact('nick_groom', 'nick_bride'));
    }
}
