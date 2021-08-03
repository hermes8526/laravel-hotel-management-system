<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomTypeController extends Controller
{
    public function index()
    {
        $is_saved = 1;
        return view('hotel.roomType.index', compact('is_saved'));
    }

    public function getRoomTypes() {

        if(request()->ajax()) {
            $data = RoomType::all();
            return datatables()->of($data)
                ->addColumn('action', function($roomType) {
                    return view('partials.action', [
                        'url_show'      => route('roomType.show', $roomType->id),
                        'url_edit'      => route('roomType.edit', $roomType->id),
                        'url_destroy'   => route('roomType.destroy', $roomType->id)
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
        return view('hotel.roomType.show');
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
