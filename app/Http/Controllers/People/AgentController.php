<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AgentController extends Controller
{
    public function index()
    {
        return view('people.agent.index');
    }

    public function getAgents() {

        if(request()->ajax()) {
            return datatables()->of(User::where('role_id', 2))
            ->addColumn('action', function($user) {
                return view('partials.action', [
                    'user'       => $user,
                    'url_show'      => route('agent.show', $user->id),
                    'url_edit'      => route('agent.edit', $user->id),
                    'url_destroy'   => route('agent.destroy', $user->id)
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
        return view('people.agent.show', compact('user'));
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
