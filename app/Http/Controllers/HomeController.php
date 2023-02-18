<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function payment(){
        return view("payment");
    }

    public function admissionform(){
        return view("admissionform");
    }

    public function storeData(Request $req){
        $data = $req->validate([
            'fullname' => 'required',
            'contact' => 'required'
        ]);

        Student::create($data);
        return redirect()->route('home');



    }

    // public function dashboard(){
    //     return view.admin("admin.dashboard");
    // }
}
