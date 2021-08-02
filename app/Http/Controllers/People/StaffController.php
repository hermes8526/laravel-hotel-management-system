<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StaffController extends Controller
{
    public function index()
    {
        return view('people.staff.index');
    }

    public function getStaffs() {

        if(request()->ajax()) {
            return datatables()->of(User::where('role', 'staff'))
            ->addColumn('action', function($user) {
                return view('partials.action', [
                    'user'       => $user,
                    'url_show'      => route('staff.show', $user->id),
                    'url_edit'      => route('staff.edit', $user->id),
                    'url_destroy'   => route('staff.destroy', $user->id)
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
        return view('people.staff.show', compact('user'));
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
