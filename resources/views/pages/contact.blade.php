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
              <span class="error-msg" v-cloak>@{{ errors.first('naam') }}</span>
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
              <span class="error-msg" v-cloak>@{{ errors.first('telefoon') }}</span>
            </p>

            <p class="control has-icon">
              <input class="input is-medium" type="email" name="email" placeholder="Email" v-validate data-rules="required|email" :class="{'has-error': errors.has('email') }" v-model="contactInfo.email">
              <i class="fa fa-envelope"></i>
              <span class="error-msg" v-cloak>@{{ errors.first('email') }}</span>
            </p>

            <p class="control">
              <textarea class="textarea" placeholder="Bericht" name="bericht" v-validate data-rules="required" v-model="contactInfo.bericht"></textarea>
              <span class="error-msg" v-cloak>@{{ errors.first('bericht') }}</span>
            </p>

            <p class="control">
              <button class="button is-primary" type="submit">Verzenden</button>
            </p>

          </form>

          <div class="sk-fading-circle" v-if="formControl.loading">
            <div class="sk-circle1 sk-circle"></div>
            <div class="sk-circle2 sk-circle"></div>
            <div class="sk-circle3 sk-circle"></div>
            <div class="sk-circle4 sk-circle"></div>
            <div class="sk-circle5 sk-circle"></div>
            <div class="sk-circle6 sk-circle"></div>
            <div class="sk-circle7 sk-circle"></div>
            <div class="sk-circle8 sk-circle"></div>
            <div class="sk-circle9 sk-circle"></div>
            <div class="sk-circle10 sk-circle"></div>
            <div class="sk-circle11 sk-circle"></div>
            <div class="sk-circle12 sk-circle"></div>
          </div>

          <svg class="checkmark" v-if='formControl.showCheckmark' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>

          <p v-if="formControl.showCheckmark">Bedankt voor uw bericht, deze wordt zo snel mogelijk beantwoord.</p>
          
        </div>
        
    </div>
  </section>

@endsection