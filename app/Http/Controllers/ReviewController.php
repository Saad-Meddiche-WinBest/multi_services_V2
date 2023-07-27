<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReviewController extends Controller
{

    public function store(Request $request)
    {
        $user = $request->session()->get('user');

        $data = $request->all();

        $data['name'] = $user['name'];
        $data['sub_googleUser'] = $user['sub_googleUser'];
        $data['image'] = $user['image'];
        $data['email'] = $user['email'];

        Review::create($data);

        return Redirect::route('societie.show', ['societie' => $request->societie_id]);
    }
    public function getItems($page)
    {
        $reviews = Review::paginate(3, ['*'], 'page', $page);
        return response()->json($reviews);  
    }

    public function update(Request $request, Review $review)
    {
        $review->update($request->all());

        return Redirect::route('societie.show', ['societie' => $request->societie_id]);
    }

    public function destroy(Request $request, Review $review)
    {
        $review->delete();

        return Redirect::route('societie.show', ['societie' => $request->societie_id]);
    }
}
