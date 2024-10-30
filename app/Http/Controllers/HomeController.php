<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Guest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $guest = $request->to;

        $groom = "Ruliansyah";
        $bride = "Dian Anggraini";
        $nick_groom = explode(' ', $groom)[0];
        $nick_bride = explode(' ', $bride)[0];

        $day = "Jumat";
        $date = "20";
        $month = "12";
        $Month = "Des";
        $year = "2024";
        $hour = "10";
        $minute = "00";
        $reception_hour = "12";
        $reception_minute = "00";

        $location = "Conversation Hall Batam Centre";
        $locationUrl = "https://maps.app.goo.gl/3ciJ7LuDuGhxtFUR7";

        return view('invitation', compact(
            'guest',
            'groom',
            'bride',
            'nick_groom',
            'nick_bride',
            'day',
            'date',
            'month',
            'Month',
            'year',
            'hour',
            'minute',
            'reception_hour',
            'reception_minute',
            'location',
            'locationUrl'
        ));
    }
}
