<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HotelFacility;
use App\Models\RoomFacility;

class FacilityController extends Controller
{
    public function index()
    {
        $type = 'hotel-facility';
        $is_saved = 1;
        return view('hotel.facility.index', compact('type', 'is_saved'));
    }

    public function getFacilities() {

        if(request()->ajax()) {
            if (request()->facility_type == 'hotel') {
                $data = HotelFacility::all();
                return datatables()->of($data)
                    ->addColumn('action', function($hotelFacility) {
                        return view('partials.action', [
                            'url_show'      => route('facility.show', $hotelFacility->id),
                            'url_edit'      => route('facility.edit', $hotelFacility->id),
                            'url_destroy'   => route('facility.destroy', $hotelFacility->id)
                        ]);
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            }
            if (request()->facility_type == 'room') {
                $data = RoomFacility::all();
                return datatables()->of($data)
                    ->addColumn('action', function($roomFacility) {
                        return view('partials.action', [
                            'url_show'      => route('facility.show', $roomFacility->id),
                            'url_edit'      => route('facility.edit', $roomFacility->id),
                            'url_destroy'   => route('facility.destroy', $roomFacility->id)
                        ]);
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            }
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
        return view('hotel.facility.show');
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
