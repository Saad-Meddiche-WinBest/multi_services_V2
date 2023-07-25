<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{

    public function store(Request $request)
    {
        Review::create($request->all());

        return Redirect::route('societie.show', ['societie' => $request->societie_id]);
    }

    public function update(Request $request, Review $review)
    {
        //
    }

    public function destroy(Review $review)
    {
        //
    }

   
}
