@extends('layouts.app')

@section('page_title')
{{ __('menu.presentation')}} | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">

                    <h1 class="">
                        {{ __('menu.presentation')}}
                    </h1>

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                {{ __('menu.accueil')}}
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            {{ __('menu.apropos')}}
                        </li>

                        <li class="breadcrumb-item active">
                            {{ __('menu.presentation')}}
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

<section class="ls about about-padge s-pt-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
                <div class="heading-about">
                    <h3>
                        {{ __('home.anzvergure')}}
                    </h3>
                    <p class="text-justify">
                        {{ __('home.anzvergure_description_2')}}
                    </p>
                    <h4 style="padding: 0px; margin:0px;">
                        {{ __('aboutus.notremission')}}
                    </h4>
                    <p class="text-justify" style="padding: 0px; margin-top:0px;">
                        {!! __('aboutus.mission_texte') !!}
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
                <img src="{{asset('images/person01.jpg')}}" alt="person01.jpg">
            </div>
        </div>
    </div>
</section>
<section class="ls s-pt-50 s-pb-75 c-gutter-60 c-mb-lg-50 service-item">
    <div class="container">
        <div class="row">

            <div class="d-none d-lg-block divider-80"></div>

            <div class="col-md-12 col-sm-12 text-center">
                <h3 class="text-head">{{ __('home.anzvergure')}} {{ __('aboutus.enchiffres')}}</h3>
            </div>
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-group"></i>
                    </div>

                    <h4>
                        <a>17
                            <br> {{ __('aboutus.consultant')}}s</a>
                    </h4>

                    <p>
                        {{ __('aboutus.consultant_texte')}}
                    </p>


                </div>
            </div>
            <!-- .col-* -->

            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-building-o"></i>
                    </div>

                    <h4>
                        <a>09
                            <br>{{ __('aboutus.partenaire')}}s</a>
                    </h4>

                    <p>
                        {{ __('aboutus.partenaire_texte')}}
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-briefcase"></i>
                    </div>

                    <h4>
                        <a>03
                            <br>{{ __('aboutus.cooperation')}}s</a>
                    </h4>

                    <p>
                        {{ __('aboutus.cooperation_texte')}}
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-money"></i>
                    </div>

                    <h4>
                        <a>369
                            <br>{{ __('aboutus.employesgeres')}}</a>
                    </h4>

                    <p>
                        {{ __('aboutus.employesgeres_texte')}}
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-handshake-o"></i>
                    </div>

                    <h4>
                        <a>12
                            <br>{{ __('home.entreprisescli')}}</a>
                    </h4>

                    <p>
                        {{ __('aboutus.entreprisescli_texte')}}
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-file-text-o"></i>
                    </div>

                    <h4>
                        <a>60
                            <br>{{ __('aboutus.cvenmoyenne')}}</a>
                    </h4>

                    <p>
                        {{ __('aboutus.cvenmoyenne_texte')}}
                    </p>


                </div>
            </div>
            <!-- .col-* -->

            <div class="d-none d-lg-block divider-20"></div>

        </div>

    </div>
</section>

@stop

<!-- eof content -->

