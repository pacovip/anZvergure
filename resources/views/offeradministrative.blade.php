@extends('layouts.app')

@section('page_title')
    {{ __('menu.suiviadm')}} | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">

                    <h1 class="">
                        {{ __('menu.suiviadm')}}
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
                            {{ __('menu.suiviadm')}}
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
                            <img src="{{asset('images/offeradministrative.jpg')}}" alt="{{ __('menu.suiviadm') }}" title="{{ __('menu.suiviadm') }}">
                        </div>
                    </div>

                    <div class="item-content">
                        <div class="entry-content text-justify">
                            <p>
                                {{ __('offeradministrative.texte') }}
                            </p>

                            <ul class="list1">
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_1') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_2') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_3') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_4') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_5') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_6') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_7') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_8') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_9') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_10') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_11') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_12') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_13') }}
                                </li>
                                <li class="pb-2">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('offeradministrative.li_14') }}
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
                    <div class="col-lg-12 icons-list mb-20">
                        <p>
                            <i>{{ __('offeradministrative.offresdispos') }}</i>
                        </p>
                        <ul class="list-bordered">
                            <li class="media media-body" style="border: none;">
                                <i class="teaser-icon fa fa-briefcase"></i>
                                <h4 class="title">
                                    <span>{{ __('offeradministrative.enabonnement') }} </span>
                                </h4>
                            </li>
                            <li class="media media-body" style="border: none;">
                                <i class="teaser-icon fa fa-briefcase"></i>
                                <h4 class="title">
                                    <span>{{ __('home.et') }} {{ __('offeradministrative.alademande') }} </span>
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

