@extends('layouts.app')

@section('content')
    <section style="background-color: antiquewhite">
        <div class="container">
            <div class="text-header-solution">
                <div class="text-header">
                    <h1>Inscrire votre établissement sur Multiservices</h1>
                </div>
                <div class="description-header">
                    <p>Vous n'êtes pas encore inscrits sur le plus grand réseau de professionnels au Maroc ?

                        Renseignez le formulaire ci-dessous afin d'être vu et contacté.

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section style="padding:30px">
        <div class="container">
            <div class="card-inscription">
                <div class="card-inscription-text">
                    <span>Quel type d'établissement êtes-vous ?</span>
                </div>
                <div class="card-all-category">
                    <a href="/inscription/contact/1">
                        <div class="card-category">
                            <div class="card-category-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="card-category-titre">
                                <span>Société professionnels</span>
                            </div>
                        </div>
                    </a>
                    <a href="/inscription/contact/2">
                        <div class="card-category">
                            <div class="card-category-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="card-category-titre">
                                <span>société particulier</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
