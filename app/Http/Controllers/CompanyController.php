<?php

namespace App\Http\Controllers;

use App\Models\Joblist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function registerPage()
    {
        return view('company.register');
    }
    public function store(Request $request)
    {
        //validation 
        $this->validate($request, [
            'companyName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'address' => 'required'
        ]);
        //storing to the database
        User::create([
            'companyName' => $request->companyName,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password)
        ]);
        //sign in the company user
        Auth::attempt($request->only('email', 'password'));
        return redirect()->route('dashboard');
    }
    public function dashboard()
    {
        $company = User::find(auth()->user()->id);
        $listings = $company-> joblists;
        return view('company.dashboard')->with('listings' , $listings);
    }
    public function loginPage()
    {
        return view('company.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('loginError', 'E-mail or password incorrect');
        }
    }
    public function createPage() {
        return view('company.create');
    }
    public function storeListing(Request $request) {
        //validation 
        $this->validate($request , [
            'jobTitle'=> 'required',
            'exceptedPay' => 'required'
        ]);
        //stroing values to a new row 
        Joblist::create([
            'jobTitle' => $request->jobTitle,
            'jobArea' => $request->jobArea,
            'jobCategory' => $request->jobCategory,
            'exceptedPay' => $request->exceptedPay,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('dashboard')->with('createSuccess' , 'Listing created successfully');
    }
    public function destroy($id) {
        $listing = Joblist::destroy($id);
        return redirect()->route('dashboard')->with('deleteSuccess' , 'Listing Delete successfully');
    }
}
