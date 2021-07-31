<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\City;

class HotelController extends Controller
{
    public function index()
    {
        $type = 'hotel-active';
        $is_saved = 1;
        return view('hotel.hotel.index', compact('type', 'is_saved'));
    }

    public function getHotels() {

        if(request()->ajax()) {
            if (request()->hotel_type == 'active')
                $data = Hotel::where('status', 'active');
            if (request()->hotel_type == 'approval')
                $data = Hotel::where('status', 'approval');
            if (request()->hotel_type == 'approved')
                $data = Hotel::where('status', 'approved');
            if (request()->hotel_type == 'inactive')
                $data = Hotel::where('status', 'inactive');

            return datatables()->of($data)
                ->addColumn('city_name', function($hotel){
                    return City::findOrFail($hotel->city_id)->name;
                })
                ->addColumn('action', function($hotel) {
                    return view('partials.action', [
                        'hotel'       => $hotel,
                        'url_show'      => route('hotel.show', $hotel->id),
                        'url_edit'      => route('hotel.edit', $hotel->id),
                        'url_destroy'   => route('hotel.destroy', $hotel->id)
                    ]);
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $type = 'hotel-active';
        $is_saved = 1;
        return view('hotel.hotel.show', compact('type', 'is_saved'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
