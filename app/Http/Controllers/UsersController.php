<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Joblist;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $jobListings = Joblist::orderBy('id' , 'DESC')->get();
        return view('user.index')->with('joblistings' , $jobListings);
    }

    public function search(Request $request) {
       if ($request->jobTitle == '' && $request->jobArea == '' && $request->jobCategory == '') {
           return back()->with('status' , 'No Inputs');
       } else if ($request->jobTitle != '' && $request->jobArea != '' && $request->jobCategory == '') {
        $jobTitle = $request->jobTitle;
           $jobArea = $request->jobArea;
           $jobCategory = $request->jobCategory;
           $jobListings = Joblist::where('jobTitle' , 'like' , '%'.$jobTitle.'%')->where('jobArea' , $jobArea)->orWhere('jobCategory' , $jobCategory)->orderBy('id' , 'DESC')->get();
           return view('user.search')->with('jobListings' , $jobListings);
       }
       else if ($request->jobTitle != '' && $request->jobArea == '' && $request->jobCategory == '') {
        $jobTitle = $request->jobTitle;
        $jobArea = $request->jobArea;
        $jobCategory = $request->jobCategory;
        $jobListings = Joblist::where('jobTitle' , 'like' , '%'.$jobTitle.'%')->orderBy('id' , 'DESC')->get();
        return view('user.search')->with('jobListings' , $jobListings);
       }
       else if ($request->jobTitle == '' && $request->jobArea != '' && $request->jobCategory == '') {
        $jobTitle = $request->jobTitle;
        $jobArea = $request->jobArea;
        $jobCategory = $request->jobCategory;
        $jobListings = Joblist::where('jobTitle' , 'like' , '%'.$jobTitle.'%')->orderBy('id' , 'DESC')->get();
        return view('user.search')->with('jobListings' , $jobListings);
       }
       else if ($request->jobTitle == '' && $request->jobArea == '' && $request->jobCategory != '') {
        $jobTitle = $request->jobTitle;
        $jobArea = $request->jobArea;
        $jobCategory = $request->jobCategory;
        $jobListings = Joblist::where('jobTitle' , 'like' , '%'.$jobTitle.'%')->orderBy('id' , 'DESC')->get();
        return view('user.search')->with('jobListings' , $jobListings);
       }
    }
}