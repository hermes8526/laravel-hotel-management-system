<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class WholeSalerController extends Controller
{
    public function index()
    {
        return view('people.wholeSaler.index');
    }

    public function getWholeSalers() {

        if(request()->ajax()) {
            return datatables()->of(User::where('role', 'wholeSaler'))
            ->addColumn('action', function($user) {
                return view('partials.action', [
                    'user'       => $user,
                    'url_show'      => route('wholeSaler.show', $user->id),
                    'url_edit'      => route('wholeSaler.edit', $user->id),
                    'url_destroy'   => route('wholeSaler.destroy', $user->id)
                ]);
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('people.wholeSaler.show', compact('user'));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
