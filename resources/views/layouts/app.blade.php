<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

    {{-- Bootstrap Css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Css Style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Bootstrap CSS V4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- RateYo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        @include('layouts.includes.user.navbar')

        {{-- Content --}}
        <main>
            @yield('content')
        </main>


    </div>
    @include('layouts.includes.user.footer')
</body>

{{-- BootStrap Js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

{{-- Vue Js --}}
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

{{-- Axios --}}
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

{{-- Functions Of Societies --}}
<script src="{{asset('assets/js/societies.js')}}" type="module"></script>

{{-- jQuery library --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- Function of slider --}}
<script src="{{asset('assets/js/slider.js')}}" type="module"></script>

{{-- Function of stars --}}
<script src="{{asset('assets/js/stars.js')}}" type="module"></script>
{{-- Function of maps --}}
<script src="{{asset('assets/js/maps.js')}}" type="module"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- RateYo JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>
    $(document).ready(function() {

        $("#location-rating, #price-rating, #quality-rating, #service-rating").rateYo({
            rating: 0,
            fullStar: true,
            onSet: function(rating, rateYoInstance) {
                $(this).next().val(rating);
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        let currentPage = {{ $reviews->currentPage() }};
        let lastPage = {{ $reviews->lastPage() }};
        let nextPage = currentPage + 1;

        $('#load-more').on('click', function() {
          
            if (nextPage <= lastPage) {
                alert('resrs')
                $.ajax({
                    url: '/reviews/' + nextPage,
                    type: 'GET',
                    success: function(data) {
                        console.log(data)
                        // Append the new paginated content to the existing content
                        $.each(data.data, function(index, item) {
                            // Append each item to the container (replace 'item-container' with the appropriate ID)
                            $('#pagination-items').append('<div>' + item.name + '</div>');
                        });
                        currentPage = data.current_page;
                        nextPage = currentPage + 1;
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
        });
    });
</script>

</html>
