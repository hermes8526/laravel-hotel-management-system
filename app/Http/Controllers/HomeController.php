<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HomeController extends Controller
{

    public function index() {

        return view('home.home');
    }

    public function list(Request $request) {

        $search['hotel_id'] = $request->post('searchHotel');
        $search['checkIn'] = $request->post('searchCheckin');
        $search['checkOut'] = $request->post('searchCheckout');
        $search['roomCount'] = $request->post('searchRoomCount');

        $hotels = Hotel::where([['city_id', '27'], ['status', 'Activated']])->get();
        return view('home.hotelList', compact('search', 'hotels'));
    }

    public function getHotels() {

        $hotels = Hotel::with('city')->get();
        echo $hotels;
    }
}
