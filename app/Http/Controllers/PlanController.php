<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
        $plan = Plan::all();
        return view('plan.index',['plan'=>$plan]);
    }
    public function contact($id){
        $plan = Plan::findOrFail($id);
        return view('plan.contact',['plan'=>$plan->id]);
    }
}
