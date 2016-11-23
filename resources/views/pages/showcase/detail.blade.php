@extends('layout.layout')

@section('hero')
<section class="hero is-small is-info is-bold">
  <div class="hero-body">
    <div class="container">
      
    </div>
  </div>
</section>
@endsection

@section('content')

<section class="section">
    <div class="container has-text-centered">

        <div class="heading mb-50">
          <h1 class="title">Nieuwbouw Waardamme</h1>
          <hr>
          <h2 class="subtitle">
            Een overzicht van realisaties verbouwingen.
          </h2>
        </div>
        
        <div class="showcase-album-container has-text-centered gallery">
        	<a class="showcase-album-item" href="{{ asset('images/hero2.jpg') }}">
        		  <img class="showcase-album-image" src="{{ asset('images/hero2.jpg') }}" alt="image">
        	</a>
            <a class="showcase-album-item" href="{{ asset('images/hero2.jpg') }}">
                  <img class="showcase-album-image" src="{{ asset('images/hero2.jpg') }}" alt="image">
            </a>
            <a class="showcase-album-item" href="{{ asset('images/hero2.jpg') }}">
                  <img class="showcase-album-image" src="{{ asset('images/hero2.jpg') }}" alt="image">
            </a>
            <a class="showcase-album-item" href="{{ asset('images/hero2.jpg') }}">
                  <img class="showcase-album-image" src="{{ asset('images/hero2.jpg') }}" alt="image">
            </a>
            <a class="showcase-album-item" href="{{ asset('images/hero2.jpg') }}">
                  <img class="showcase-album-image" src="{{ asset('images/hero2.jpg') }}" alt="image">
            </a>
            <a class="showcase-album-item" href="{{ asset('images/hero2.jpg') }}">
                  <img class="showcase-album-image" src="{{ asset('images/hero2.jpg') }}" alt="image">
            </a>
        	
        </div>
        
    </div>
  </section>

@endsection