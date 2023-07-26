@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Societies') }}</div>
                    <div class="card-body">
                        <societie-list></societie-list>
                        test
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
