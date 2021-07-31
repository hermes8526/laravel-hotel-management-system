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
        return view('home.list', compact('search', 'hotels'));
    }

    public function single(Request $request) {

        $search['hotel_id'] = $request->post('searchHotel');
        $search['checkIn'] = $request->post('searchCheckin');
        $search['checkOut'] = $request->post('searchCheckout');
        $search['roomCount'] = $request->post('searchRoomCount');

        $hotels = Hotel::where([['id', '1'], ['status', 'Activated']])->get();
        return view('home.single', compact('search', 'hotels'));
    }

    public function cart(Request $request) {

        $search['hotel_id'] = $request->post('searchHotel');
        $search['checkIn'] = $request->post('searchCheckin');
        $search['checkOut'] = $request->post('searchCheckout');
        $search['roomCount'] = $request->post('searchRoomCount');

        $hotels = Hotel::where([['id', '1'], ['status', 'Activated']])->get();
        return view('home.cart', compact('search', 'hotels'));
    }

    public function book(Request $request) {

        $search['hotel_id'] = $request->post('searchHotel');
        $search['checkIn'] = $request->post('searchCheckin');
        $search['checkOut'] = $request->post('searchCheckout');
        $search['roomCount'] = $request->post('searchRoomCount');

        $hotels = Hotel::where([['id', '1'], ['status', 'Activated']])->get();
        return view('home.book', compact('search', 'hotels'));
    }

    public function getHotels() {

        $hotels = Hotel::with('city')->get();
        echo $hotels;
    }
}
