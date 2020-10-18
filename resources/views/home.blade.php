@extends('layouts.app')



@section('page_title')
    {{ __('menu.accueil')}} | www.anzvergure.com
@stop



@section('page_slider')
    <section class="page_slider">
        <div class=" flexslider" data-nav="true" data-dots="false">
            <ul class="slides">
                <li class="ds text-center">
                    <img src="{{ asset('images/slide01.jpg') }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInLeft">
                                            <h3 class="intro_before_featured_word">
                                                {{ __('home.slider_1_text') }}
                                            </h3>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h2 class="text-uppercase intro_featured_word">
                                                {!! __('home.slider_1_subtext') !!}
                                            </h2>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <div class="d-inline-block">
                                                <a href="{{route('offer-hr', app()->getLocale())}}"><button type="button" class="btn btn-outline-maincolor center-block" data-animation="fadeIn"> {{ __('home.slider_btn') }} </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- eof .intro_layers -->
                                </div>
                                <!-- eof .intro_layers_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li class="ds text-center">
                    <img src="{{ asset('images/slide02.jpg') }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="pullUp">
                                            <h3 class="intro_before_featured_word">
                                                {{ __('home.slider_2_text') }}
                                            </h3>
                                        </div>
                                        <div class="intro_layer" data-animation="pullDown">
                                            <h2 class="text-uppercase intro_featured_word">
                                                {!! __('home.slider_2_subtext') !!}
                                            </h2>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <div class="d-inline-block">
                                                <a href="{{route('offer-management', app()->getLocale())}}"><button type="button" class="btn btn-outline-maincolor center-block" data-animation="fadeIn"> {{ __('home.slider_btn') }} </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- eof .intro_layers -->
                                </div>
                                <!-- eof .intro_layers_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
                <li class="ds text-center">
                    <img src="{{ asset('images/slide03.jpg') }}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="pullDown">
                                            <h3 class="intro_before_featured_word">
                                                {{ __('home.slider_3_text') }}
                                            </h3>
                                        </div>
                                        <div class="intro_layer" data-animation="pullUp">
                                            <h2 class="text-uppercase intro_featured_word">
                                                {!! __('home.slider_3_subtext') !!}
                                            </h2>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <div class="d-inline-block">
                                                <a href="{{route('offer-hr', app()->getLocale())}}"><button type="button" class="btn btn-outline-maincolor center-block"> {{ __('home.slider_btn') }}  </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- eof .intro_layers -->
                                </div>
                                <!-- eof .intro_layers_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
            </ul>
            <ul class="flex-direction-nav">
                <li class="flex-nav-prev">
                    <a class="flex-prev" href="#">&gt;</a>
                </li>
                <li class="flex-nav-next">
                    <a class="flex-next" href="#">&lt;</a>
                </li>
            </ul>
        </div>
        <!-- eof flexslider -->
    </section>

    <section class="ds slider-bottomline d-none d-xl-block py-50">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="info-block">
                        <p>
                            {{__('home.appeleznous')}}
                        </p>
                        <h5>
                            <a href="tel:{{__('contact.tel1')}}"> {{__('contact.tel1')}}</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="info-block">
                        <p>
                            {{__('contact.emailtext')}}
                        </p>
                        <h5>
                            <a href="mailto:{{__('contact.email')}}">{{__('contact.email')}}</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="info-block">
                        <p>
                            {{__('home.noshoraires')}}
                        </p>
                        <h5>
                            {{__('home.horairesbureau')}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
<!-- eof page_slider -->




@section('page_content')

    <section class="ls about s-pt-25">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
                    <div class="heading-about">
                        <h2>
                            {!!__('home.anzvergure')!!}
                        </h2>
                        <p class="text-justify">
                            {!! __('home.anzvergure_description') !!}
                            <a href="{{route('about-us', app()->getLocale() )}}">...</a>
                        </p>
                    </div>
                    <div class="icons-list">
                        <ul class="list-bordered">
                            <li class=" media media-body">
                                <i class="teaser-icon fa fa-group"></i>
                                <h4 class="title">
                                    <span>04</span> {{ __('aboutus.consultant') }}s
                                </h4>
                            </li>
                            <li class="media media-body">
                                <i class="teaser-icon fa fa-briefcase"></i>
                                <h4 class="title">
                                    <span>02</span> {{ __('aboutus.partenaire') }}s
                                </h4>
                            </li>
                            <li class="media media-body">
                                <i class="teaser-icon fa fa-graduation-cap"></i>
                                <h4 class="title">
                                    <span>05</span> {{ __('home.entreprisescli') }}
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
                    <img src="{{ asset('images/person01.png') }}" alt="{{ asset('images/person01.png') }}">
                </div>
            </div>
        </div>
    </section>

    <section class="icon-boxed teaser-box ls s-py-lg-130 c-my-lg-10 s-parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 animate" data-animation="slideInLeft">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-address-card-o"></i>
                        </div>
                        <h3>
                            <a href="{{ route('offer-administrative', app()->getLocale() )}}">
                                {{ __('menu.suiviadm') }}
                            </a>
                        </h3>
                        <p>
                            {!! __('home.suiviadm_subtexte') !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 animate" data-animation="slideInLeft">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <h3>
                            <a href="{{ route('offer-management', app()->getLocale() )}}">
                                {{ __('menu.suivimanag') }}
                            </a>
                        </h3>
                        <p>
                            {!! __('home.suivimanag_subtexte') !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 animate" data-animation="slideInLeft">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <h3>
                            <a href="{{ route('offer-project', app()->getLocale() )}}">
                                {{ __('menu.suiviproj') }}
                            </a>
                        </h3>
                        <p>
                            {!! __('home.suiviproj_subtexte') !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
                <div class="col-lg-4 animate" data-animation="slideInRight">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-assistive-listening-systems"></i>
                        </div>
                        <h3>
                            <a href="{{ route('offer-hr', app()->getLocale() )}}">
                                {{ __('menu.suividevrh') }}
                            </a>
                        </h3>
                        <p>
                            {!! __('home.suividevrh_subtexte') !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 animate" data-animation="slideInRight">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-credit-card-alt"></i>
                        </div>
                        <h3>
                            <a href="{{ route('offer-payroll', app()->getLocale() )}}">
                                {{ __('menu.suivipaie') }} <br>&nbsp;
                            </a>
                        </h3>
                        <p>
                            {!! __('home.suivipaie_subtexte') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-20 pb-10 s-py-lg-130 main_contact_form">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact-header heading text-center">
                    <h5>
                        {{ __('home.envoyer') }}
                    </h5>
                    <h4>
                        {{ __('home.votrecv') }}
                    </h4>
                </div>
                <div class="px-30 ds-form">
                    <form class="ds contact-form c-mb-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="name">{{ __('home.nomcomplet') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="200" value="" name="your-name" id="name" class="form-control" placeholder="{{ __('home.nomcomplet') }}">
                                </div>
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="text">{{ __('contact.telephone') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="200" value="" name="text" id="text" class="form-control" placeholder="{{ __('contact.telephone') }}">
                                </div>
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="email">{{ __('contact.adresseemail') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" aria-required="true" size="200" value="" name="your-email" id="email" class="form-control" placeholder="{{ __('contact.adresseemail') }}">
                                </div>
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="text">{{ __('home.votredomaine') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="200" value="" name="text" id="text" class="form-control" placeholder="{{ __('home.votredomaine') }}">
                                </div>
                                <div class="col-c-mb-60 form-group">
                                    <input type="file" class="custom-file-input button" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">{{ __('home.joindrecv') }}</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="message">{{ __('home.commentaire') }}</label>
                                    <textarea aria-required="true" rows="6" cols="40" name="message" id="message" class="form-control" placeholder="{{ __('home.commentaire') }}"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group text-center">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="button">{{ __('home.envoyer') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" class="s-pt-75 s-pb-50">
        <div class="container">
            <div class="row">
                <div class="divider-50 d-none d-lg-block"></div>

                <div class="col-md-12">

                    <div class="testimonials-slider owl-carousel" data-autoplay="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true">
                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="{{ asset('images/team/testimonials_01.jpg') }}" alt="">
                            </div>
                            <p class="small-text color-darkgrey">
                                Jessica J.
                                <br>
                                <span>Aumiller</span>
                            </p>
                            <p class="testimonials">
                                <em class="big text-muted">
                                    Working with HR Invenir has already allowed us to challenge some existing assumptions internally, right from the first data collection. The dashboards have been able to provide us with some validated external insight.
                                </em>
                            </p>
                        </div>
                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="{{ asset('images/team/testimonials_02.jpg') }}" alt="">
                            </div>
                            <p class="small-text color-darkgrey">
                                Michael J.
                                <span>Carter</span>
                            </p>
                            <p class="testimonials">
                                <em class="big text-muted">
                                    That is always so powerful in evaluating performance and setting future direction. The data collection itself was straightforward, and Nicky and Jeremy have been a pleasure to work with
                                </em>
                            </p>
                        </div>


                        <div class="quote-item">
                            <div class="quote-image">
                                <img src="{{ asset('images/team/testimonials_03.jpg') }}" alt="">
                            </div>
                            <p class="small-text color-darkgrey">
                                Sammy
                                <span>Winchell</span>
                            </p>
                            <p class="testimonials">
                                <em class="big text-muted">
                                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent.
                                </em>
                            </p>
                        </div>

                    </div>
                    <!-- .testimonials-slider -->

                </div>

                <div class="divider-50 d-none d-lg-block"></div>
            </div>
        </div>
    </section>


    <div class="ls ms page_map" data-draggable="true" data-scrollwheel="true">
        <div class="marker">
            <div class="marker-address">{{ __('contact.adr') }} </div>
            <div class="marker-title">{{ __('contact.pmarker') }} </div>
            <div class="marker-description">
                <ul class="list-unstyled">
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <span>
                                {{ __('contact.adr') }}
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-phone"></i>
                            </span>
                            <span>
                                <a href="tel:{{ __('contact.tel1') }}">{{ __('contact.tel1') }}</a>
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <span>
                                <a href="mailto:{{ __('contact.email') }}">{{ __('contact.email') }}</a>
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
            <img class="marker-icon" src="{{ asset('images/map_marker_icon.png') }}" alt="">
        </div>
        <!-- .marker -->
    </div>

@stop

<!-- eof page_content -->

