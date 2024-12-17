<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('search', compact('users'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        if (empty($query)) {
            $users = Users::with('designation', 'department')->get();
        } else {
            $users = Users::with('designation', 'department')
                         ->where('name', 'like', "%$query%")
                         ->orWhereHas('designation', function($q) use ($query) {
                             $q->where('name', 'like', "%$query%");
                         })
                         ->orWhereHas('department', function($q) use ($query) {
                             $q->where('name', 'like', "%$query%");
                         })
                         ->get();
        }
        return response()->json($users);
    }
}
