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
      <h1 class="title">{{ $albums->first()->category }}</h1>
      <hr>
      <h2 class="subtitle">
        Een overzicht van onze realisaties.
      </h2>
    </div>
    
    <div class="columns is-multiline">
      @foreach($albums as $album)
        <div class="column is-one-third showcase-card-column">
          <a href="/bouwwerken/{{ $album->category }}/showcase/{{ $album->id }}">
            <img class="showcase-card-image" src="/images/{{ $album->category }}/{{ $album->photo->first()->path }}" />
            <div class="showcase-card-image-overlay">
              <h1 class="title is-3">{{ $album->title }}</h1>
            </div>
          </a>
        </div>
      @endforeach
    </div>
</div>
</section>

@endsection