<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('people.customer.index');
    }

    public function getCustomers() {

        if(request()->ajax()) {
            return datatables()->of(User::where('role_id', '4'))
            ->addColumn('action', function($user) {
                return view('partials.action', [
                    'user'       => $user,
                    'url_show'      => route('customer.show', $user->id),
                    'url_edit'      => route('customer.edit', $user->id),
                    'url_destroy'   => route('customer.destroy', $user->id)
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
        return view('people.customer.show', compact('user'));
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
