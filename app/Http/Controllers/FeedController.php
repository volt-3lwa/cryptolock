<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{

    public function store(Request $request)
    {
        request()->validate([
            "first_name"=>"required",
            "last_name"=>"required",
            "feedback"=>"required",
        ]);
        Feed::create(
            ["first_name"=> request("first_name"),
            "last_name"=> request("last_name"),
            "feedback"=> request("feedback")
            ]);
        return redirect('/');
    }

}
