@extends('layouts.app')

@section('content')

    @include('layouts.includes.user.searchbar')
    
    @if ($premiumSocieties->isNotEmpty())
        @include('layouts.includes.societies.premiumSocieties')
    @endif
    @include('layouts.includes.aboutPages.index')
    @include('layouts.includes.cities.index')
    @include('layouts.includes.categories.index')
    @include('layouts.includes.societies.newSocieties')
@endsection
