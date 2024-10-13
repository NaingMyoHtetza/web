<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke() {
        // dd(request('search'));
        $jobs = Job::where('title','LIKE','%'.request('search').'%')->get();
        
        return view('results',['jobs' => $jobs]);
    }
}
