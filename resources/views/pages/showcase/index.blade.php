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
      <h1 class="title">Nieuwbouw</h1>
      <hr>
      <h2 class="subtitle">
        Een overzicht van realisaties verbouwingen.
      </h2>
    </div>
    
    <div class="columns is-multiline">
      <div class="column is-one-third showcase-card-column">
        <img class="showcase-card-image" src="{{ asset('images/hero2.jpg') }}" />
        <div class="showcase-card-image-overlay">
          <h1 class="title is-3">Waregem</h1>
        </div>
      </div>
      <div class="column is-one-third showcase-card-column">
        <img class="showcase-card-image" src="{{ asset('images/hero2.jpg') }}" />
        <div class="showcase-card-image-overlay">
          <h1 class="title is-3">Waregem</h1>
        </div>
      </div>
      <div class="column is-one-third showcase-card-column">
        <img class="showcase-card-image" src="{{ asset('images/hero2.jpg') }}" />
        <div class="showcase-card-image-overlay">
          <h1 class="title is-3">Waregem</h1>
        </div>
      </div>
    </div>
</div>
</section>

@endsection