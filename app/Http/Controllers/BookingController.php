<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Hotel;

class BookingController extends Controller
{

    public function index()
    {
        $type = 'bookingNew';
        $is_saved = 1;
        return view('booking.index', compact('type', 'is_saved'));
    }

    public function getBookings() {

        if(request()->ajax()) {
            if (request()->booking_type == 'new')
                $data = Booking::where('booking_type', 'new');
            if (request()->booking_type == 'confirmed')
                $data = Booking::where('booking_type', 'confirmed');
            if (request()->booking_type == 'canceled')
                $data = Booking::where('booking_type', 'canceled');
            if (request()->booking_type == 'quotation')
                $data = Booking::where('booking_type', 'quotation');

            return datatables()->of($data)
                ->addColumn('hotel_name', function($booking){
                    return Hotel::findOrFail($booking->hotel_id)->name;
                })
                ->addColumn('action', function($booking) {
                    return view('partials.action', [
                        'booking'       => $booking,
                        'url_show'      => route('booking.show', $booking->id),
                        'url_edit'      => route('booking.edit', $booking->id),
                        'url_destroy'   => route('booking.destroy', $booking->id)
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
        return view('booking.show');
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
