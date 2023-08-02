<nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm" style="background-color: rgb(22, 22, 22);">
    <div class="container">
        <a class="navbar-brand" style="color: white" href="{{ url('/') }}">
            <b>Multi</b>Serivces
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <div class="sandwitch-icon">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <button class="btn-devis">

                        <a class="nav-link" style="color:black;padding:0 5px" href="{{ route('home') }}">

                            <img src="{{ asset('assets/images/new_icon.png') }}"
                                style="position: relative;left: 0;z-index: 999;width: 40px;height: fit-content;bottom: 1px;" />

                        <a class="nav-link" style="color:black;padding:0 5px" href="{{ route('contact') }}">
                            
                            <img src="{{asset('assets/images/new_icon.png')}}" style="position: relative;left: 0;z-index: 999;width: 40px;height: fit-content;bottom: 1px;" />

                            {{-- <i class="fa fa-bullhorn"></i> --}}
                            {{ __('Demande de devis') }}</a>
                    </button>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="color:white;text-decoration:underline;"
                        href="{{ route('societies.index') }}">{{ __('Toutes les sociétés') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white;text-decoration:underline;"
                        href="{{ route('societies.index') }}">{{ __('A propos') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white;text-decoration:underline;"
                        href="{{ route('societies.index') }}">{{ __('Découvrir nos solutions') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white;text-decoration:underline;"
                        href="{{ route('societies.index') }}">{{ __('Inscription Etablissement') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:white;text-decoration:underline;"
                        href="{{ route('societiesPremiums.index') }}">{{ __('Societie Premium') }}</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Pages') }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item">
                            {{ __('Page 1') }}
                        </a>
                        <a class="dropdown-item">
                            {{ __('Page 2') }}
                        </a>
                        <a class="dropdown-item">
                            {{ __('Page 3') }}
                        </a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
