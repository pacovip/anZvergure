@extends('layouts.app')

@section('page_title')
    {{ __('menu.contact')}} | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">
                    <h1 class="">
                        {{ __('menu.contact')}}
                    </h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">
                                {{ __('menu.accueil')}}
                            </a>
                        </li>

                        <li class="breadcrumb-item active">
                            {{ __('menu.contact')}}
                        </li>
                    </ol>
                </div>

                <div class="divider-50"></div>

            </div>
        </div>
    </section>

@stop
<!-- eof page_slider -->




@section('page_content')

<section class="ls ms s-py-75">
    <div class="container">
        <div class="row">

            <div class="divider-85 d-none d-xl-block"></div>

            <div class="col-lg-7 animate" data-animation="scaleAppear">

                <div class="cs s-parallax s-overlay- s-map-light py-60 px-20" style="background: rgb(213, 200, 250);">

                    <form class="contact-form c-mb-15 c-gutter-15" method="post" action="/">

                        <div class="row">

                            <div class="col-sm-12 contact-title">
                                <h2 style="color: #333;">{{ __('contact.ecriveznous') }}</h2>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="name">{{ __('contact.nom') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="{{ __('contact.nom') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="phone">{{ __('contact.telephone') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="{{ __('contact.telephone') }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="email">{{ __('contact.emailtext') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="{{ __('contact.emailtext') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="subject">{{ __('contact.sujet') }}
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="{{ __('contact.sujet') }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="form-group has-placeholder">
                                    <label for="message">{{ __('contact.message') }}</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="contact form-control" placeholder="{{ __('contact.message') }}"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="form-group has-placeholder text-center">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn theme_button">{{ __('contact.envoyermessage') }}
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
            <!--.col-* -->

            <div class="col-lg-5 animate" data-animation="scaleAppear">
                <div class="hero-bg p-60">

                    <h2 class="contact-title ">{{ __('contact.noscontacts') }}</h2>

                    <div class="media mb-20">
                        <div class="icon-styled color-main fs-20">
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="media-body">
                            <h4>
                                {{ __('contact.adresse') }}:
                            </h4>
                            <p>
                                {{ __('contact.adr') }}
                            </p>
                        </div>
                    </div>

                    <div class="media mb-20">
                        <div class="icon-styled color-main fs-20">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="media-body">
                            <h4>
                                {{ __('contact.mintelephone') }}:
                            </h4>
                            <p>
                                <a href="tel:{{ __('contact.tel1') }}">{{ __('contact.tel1') }}</a>
                            </p>
                        </div>
                    </div>

                    <div class="media mb-20">
                        <div class="icon-styled color-main fs-20">
                            <i class="fa fa-pencil"></i>
                        </div>

                        <div class="media-body">
                            <h4>
                                {{ __('contact.emailtext') }}:
                            </h4>
                            <p>
                                <a href="mailto:{{ __('contact.email') }}">{{ __('contact.email') }}</a>
                            </p>
                        </div>
                    </div>

                    <h3>{{ __('contact.lienssociaux') }}</h3>

                    <div class="social-icons contact-icon">

                        <a href="#" class="fa fa-facebook" title="facebook"></a>
                        <a href="#" class="fa fa-twitter" title="twitter"></a>
                        <a href="#" class="fa fa-instagram" title="instagram"></a>
                        <a href="#" class="fa fa-google" title="google"></a>

                    </div>

                </div>
            </div>
            <!--.col-* -->


            <div class="divider-85 d-none d-xl-block"></div>

        </div>
    </div>
</section>

<section class="ls ms page_map">

    <div class="marker">
        <div class="marker-address">{{ __('contact.adr') }}</div>
        <div class="marker-title">{{ __('contact.pmarker') }}</div>
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
                            <a href="tel:+225 79 05 62 03">{{ __('contact.tel1') }}</a>
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

        <img class="marker-icon" src="{{asset('images/map_marker_icon.png')}}" alt="">
    </div>
    <!-- .marker -->
</section>

@stop

<!-- eof content -->

