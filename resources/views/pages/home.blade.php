@extends('layout.layout')

@section('hero')
<section class="hero is-medium is-info is-bold">
  <div class="hero-body">
    <div class="container">
      
    </div>
  </div>
</section>
@endsection

@section('content')
<div class="container-fluid">
  <section class="section has-text-centered pb-50">
      <div class="container has-half-container-width">
        <div class="heading">
          <h1 class="title pb-20">Cuipers Johnny Bouwwerken</h1>
          <hr>
          <h2 class="subtitle">
            Voor al uw bouwwerken, verbouwingen en nieuwbouw kan u bij ons terecht. 
            Kwaliteit en professionaliteit komen op de eerste plaats.
          </h2>
          <hr>
        </div>
        <p class="content pt-20">Welkom op onze website
          Onze werkzaamheden bestaan uit het aannemen en uitvoeren van <strong>algemene 
          bouw- en renovatiewerken, verbouwingen en nieuwbouwwoningen.</strong>
          Door een ruime ervaring, zorgen we er steeds voor dat we voor elk project, 
          groot of klein kwalitatief werk afleveren.

          Voor meer info of wenst u een vrijblijvende offerte, aarzel niet om ons te contacteren 
          via het contactformulier.
        
          Alvast bedankt,
          Met vriendelijke groeten,

          Johnny Cuipers
        </p>
    </div>
  </section>

  <section class="section has-no-background">
    <div class="container has-text-centered">

        <div class="heading mb-50">
          <h1 class="title">Nieuwbouw</h1>
          <hr>
          <h2 class="subtitle">
            Een overzicht van realisaties nieuwbouw.
          </h2>
        </div>
        
        <div class="columns is-multiline">

          <div class="column is-one-third showcase-card-column">
            <a href="/bouwwerken/verbouwingen/showcase/1">
              <img class="showcase-card-image" src="{{ asset('images/hero2.jpg') }}" />
              <div class="showcase-card-image-overlay">
                <h1 class="title is-3">Waregem</h1>
              </div>
            </a>
          </div>
          
        </div>
    </div>
  </section>

  <section class="section">
    <div class="container has-text-centered">

        <div class="heading mb-50">
          <h1 class="title">Verbouwingen</h1>
          <hr>
          <h2 class="subtitle">
            Een overzicht van realisaties verbouwingen.
          </h2>
        </div>
        
        <div class="columns is-multiline">

          <div class="column is-one-third showcase-card-column">
            <a href="/bouwwerken/verbouwingen/showcase/1">
              <img class="showcase-card-image" src="{{ asset('images/hero2.jpg') }}" />
              <div class="showcase-card-image-overlay">
                <h1 class="title is-3">Waregem</h1>
              </div>
            </a>
          </div>

        </div>
    </div>
  </section>

  <section class="section has-no-background">
    <div class="container has-text-centered">

        <div class="heading mb-50">
          <h1 class="title">Renovaties</h1>
          <hr>
          <h2 class="subtitle">
            Een overzicht van realisaties renovaties.
          </h2>
        </div>
        
        <div class="columns is-multiline">

          <div class="column is-one-third showcase-card-column">
            <a href="/bouwwerken/verbouwingen/showcase/1">
              <img class="showcase-card-image" src="{{ asset('images/hero2.jpg') }}" />
              <div class="showcase-card-image-overlay">
                <h1 class="title is-3">Waregem</h1>
              </div>
            </a>
          </div>

        </div>
    </div>
  </section>

  <section class="section">
    <div class="container has-text-centered">
        <div class="heading mb-50">
          <h1 class="title">Contact</h1>
          <hr>
          <h2 class="subtitle">
            Via onderstaand formulier kan u ons contacteren voor al uw vragen
          </h2>
        </div>

        <div class="container has-half-container-width">

          <form action="#" class="contact-form" @submit="validateContactForm" v-show="formControl.showForm">
            
            <p class="control has-icon">
              <input class="input is-medium" type="text" placeholder="Naam" name="naam" v-validate data-rules="required" v-model="contactInfo.naam">
              <i class="fa fa-user"></i>
              <span class="error-msg">@{{ errors.first('naam') }}</span>
            </p>

            <p class="control has-icon">
              <input class="input is-medium" type="text" placeholder="Adres" name="adres" v-model="contactInfo.adres">
              <i class="fa fa-map-marker"></i>
            </p>

            <p class="control has-icon">
              <input class="input is-medium" type="text" placeholder="Gemeente" name="gemeente" v-model="contactInfo.gemeente">
              <i class="fa fa-map-marker"></i>
            </p>

            <p class="control has-icon">
              <input class="input is-medium" type="text" placeholder="Telefoon/GSM" name="telefoon" v-validate data-rules="required|numeric" v-model="contactInfo.telefoon">
              <i class="fa fa-phone"></i>
              <span class="error-msg">@{{ errors.first('telefoon') }}</span>
            </p>

            <p class="control has-icon">
              <input class="input is-medium" type="email" name="email" placeholder="Email" v-validate data-rules="required|email" :class="{'has-error': errors.has('email') }" v-model="contactInfo.email">
              <i class="fa fa-envelope"></i>
              <span class="error-msg">@{{ errors.first('email') }}</span>
            </p>

            <p class="control">
              <textarea class="textarea" placeholder="Bericht" name="bericht" v-validate data-rules="required" v-model="contactInfo.bericht"></textarea>
              <span class="error-msg">@{{ errors.first('bericht') }}</span>
            </p>

            <p class="control">
              <button class="button is-primary" type="submit">Verzenden</button>
            </p>

          </form>

          <svg class="checkmark" v-if='formControl.showCheckmark' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
          
        </div>
        
    </div>
  </section>
</div>
@endsection