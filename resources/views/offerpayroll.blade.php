@extends('layouts.app')

@section('page_title')
    {{ __('menu.suivipaie')}} | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">

                    <h1 class="">
                        {{ __('menu.suivipaie')}}
                    </h1>

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                {{ __('menu.accueil')}}
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            {{ __('menu.nosoffres')}}
                        </li>

                        <li class="breadcrumb-item active">
                            {{ __('menu.suivipaie')}}
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



<section class="ls s-py-50 c-gutter-60">
    <div class="container">
        <div class="row">

            <div class="d-none d-lg-block divider-70"></div>

            <main class="col-lg-7 col-xl-8">
                <article class="vertical-item post type-post status-publish format-standard has-post-thumbnail box">

                    <!-- .post-thumbnail -->
                    <div class="item-media post-thumbnail">
                        <div class="embed-responsive- embed-responsive-3by2-">
                            <img src="{{asset('images/offerpayroll.jpg')}}" alt="{{ __('menu.suivipaie') }}" title="{{ __('menu.suivipaie') }}">
                        </div>
                    </div>

                    <div class="item-content">
                        <div class="entry-content text-justify">
                            <p>
                                {{ __('offerpayroll.texte') }}
                            </p>

                            <ul class="list1">
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offerpayroll.li_1') }}
                                </li>
                            </ul>

                            <ul class="list-bordered">
                                <li class=" media media-body"> </li>
                            </ul>

                            <div class="divider-15 pb-20"></div>

                        </div>
                        <!-- .entry-content -->



                    </div>
                    <!-- .item-content -->
                    <div class="col-lg-12 icons-list pb-20">
                        <p>
                            <i>{{ __('offermanagement.offredispo') }}</i>
                        </p>
                        <ul class="list-bordered">
                            <li class="media media-body" style="border: none;">
                                <i class="teaser-icon fa fa-briefcase"></i>
                                <h4 class="title">
                                    <span>{{ __('offeradministrative.alademande') }} </span>
                                </h4>
                            </li>
                        </ul>
                    </div>


                </article>

            </main>

            <aside class="col-lg-5 col-xl-4">

                <!--sidebar-->

                @include('inc.sidebar')

                <!--eof sidebar-->

            </aside>

            <div class="d-none d-lg-block divider-70"></div>
        </div>

    </div>
</section>

@stop

<!-- eof content -->

