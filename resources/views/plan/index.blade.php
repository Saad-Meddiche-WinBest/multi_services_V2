@extends('layouts.app')

@section("content")
<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
        <p class="lead">The pricing page is here. Please choose your plan.</p>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        @foreach ($plan as $p)
            <div class="card mb-4 box-shadow">
              <div class="card-header bg-primary">
                  <h4 class="my-0 font-weight-normal">{{$p->name}}</h4>
              </div>
              <div class="card-body">
                  <h1 class="card-title pricing-card-title">{{$p->price}} <small class="text-muted">/ mo</small></h1>
                  <ul class="list-unstyled mt-3 mb-4">
                      <li style="height:160px">{{$p->description}}</li>
                      <li>{{$p->periode}} /mo</li>
                  </ul>
                  <a href="/plans/contact/{{$p->id}}"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button></a>
              </div>
          </div>
        @endforeach
        </div>
        
    </div>

  </div>  
@endsection