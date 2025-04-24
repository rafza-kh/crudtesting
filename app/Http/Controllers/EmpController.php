<?php

namespace App\Http\Controllers;

use App\Models\emp;

use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function dashboard() {

    }

    public function addform()
    {
        return view('add');
    }
    public function add(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'password' => 'required',

        ]);
        Emp::create($data);
        return redirect()->back();
    }

    public function show()
    {
        $empdata = emp::paginate(10);
        return view('dashboard')->with(['empdata' => $empdata]);
    }

    public function showtrash()
    {
        $empdata = Emp::onlyTrashed()->get();
        return view('trash')->with(['empdata' => $empdata]);
    }
    public function edit($id)
    {
        $empdata = Emp::find($id);
        return view('edit')->with(['empdata' => $empdata]);
    }
    public function delete($id)
    {
        $user = Emp::find($id);
        if ($user->delete())
         {
            return redirect()->route('emp.show');
        }
    }

    public function fdelete($id)
    {
        $user = Emp::withTrashed()->find($id);
        if ($user->forceDelete())
         {
            return redirect()->back()->with('user deleted successfully') ;
        }
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name' => 'required|max:30',
                'email' => 'required|email',
                'password' => 'required',
            ]
        );
        $user = Emp::find($id);
        $user->update($data);
        return redirect()->route('emp.show');
    }

    public function restore($id)
    {
        $user = Emp::withTrashed()->find($id);
        if ($user->restore()) {
            return redirect()->route('emp.show');
        } else {
            return redirect()->back();
        }
    }
}
