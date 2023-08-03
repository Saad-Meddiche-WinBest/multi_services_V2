@extends('layouts.app')

@section("content")
    {{-- Banner-header --}}
    <div class="banner-header-solution">
        <div class="container">
            <div class="text-header-solution">
                <div class="text-header">
                    <h1>Nos solutions entreprises</h1>
                </div>
                <div class="description-header">
                    <p>Nous proposons une grande variété de solutions pour répondre à tous vos besoins et vous satisfaire pleinement</p>
                </div>
            </div>
        </div>
    </div>
    {{-- paragraph --}}
    <div class="solution-paragraph">
        <div class="container">
            <div class="paragraph">
                <p>Nous vous offrons des <b>solutions de visibilité</b> sur les <b>moteurs de recherches</b> et sur <b>Multiservices</b> pour optimiser votre référencement en ligne et mettre en avant votre activité.</p>
            </div>
        </div>
    </div>
    {{-- solutions --}}
    <section style="background-color:rgb(237, 237, 237)">
    <div class="container" >
        <div class="section-solutions">
            <div class="solution-image">
                <img src="{{url('https://lirp.cdn-website.com/7da9325e/dms3rep/multi/opt/Vignettes-2880w.jpg')}}"/>
            </div>
            <div class="solution-description">
                <div class="solution-description-title">
                    <h1>Référencement</h1>
                </div>
                
                <div class="solution-description-paragraph">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel optio quas minima, ea officia voluptatibus nulla, perspiciatis consequuntur accusamus commodi dolorem neque? Praesentium nostrum fugiat ad error ducimus, quos beatae.</p>
                </div>
                <div class="solution-description-list">
                    <ul>
                        <li>-Test solution</li>
                        <li>-Test solution</li>
                        <li>-Test solution</li>
                    </ul>
                </div>
                <button class="btn btn-warning">Savoir plus</button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container" >
        <div class="section-solutions">
            <div class="solution-description">
                <div class="solution-description-title">
                    <h1>Référencement</h1>
                </div>
                
                <div class="solution-description-paragraph">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel optio quas minima, ea officia voluptatibus nulla, perspiciatis consequuntur accusamus commodi dolorem neque? Praesentium nostrum fugiat ad error ducimus, quos beatae.</p>
                </div>
                <div class="solution-description-list">
                    <ul>
                        <li>-Test solution</li>
                        <li>-Test solution</li>
                        <li>-Test solution</li>
                    </ul>
                </div>
                <button class="btn btn-warning">Savoir plus</button>
            </div>
            <div class="solution-image">
                <img src="{{url('https://lirp.cdn-website.com/7da9325e/dms3rep/multi/opt/Vignettes-2880w.jpg')}}"/>
            </div>
        </div>
        
    </div>
</section>
@endsection