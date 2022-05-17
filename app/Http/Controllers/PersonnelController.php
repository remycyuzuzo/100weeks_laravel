<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PersonnelController extends Controller
{

    public function index()
    {
        return view('admin.personnels.all-personnels');
    }

    public function create(Request $request)
    {
        $personnel_type = $request->personnel;

        return view('admin.personnels.new-personnel', [
            'personnel_type' => $personnel_type
        ]);
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'fname' => 'required|max:255',
            'lname' => 'max:255',
            // 'idcard' => [Rule::unique('personnels', 'id_card_number')],
            'tel' => 'required',
            'address' => 'max:255',
            'gender' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'max:255'
        ]);

        $personnel = Personnel::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'id_card_number' => $request->idcard,
            'tel_number' => $request->tel,
            'address' => $request->address,
            'gender' => $request->gender,
            'personnel_type' => $request->type
        ]);

        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'personnel_id' => $personnel->id
        ]);

        return redirect('/users');
    }
}
