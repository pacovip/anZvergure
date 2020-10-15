@extends('layouts.app')

@section('page_title')
    {{ __('menu.secteurprive')}} | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">

                    <h1 class="">
                        {{ __('menu.secteurprive')}}
                    </h1>

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">
                                {{ __('menu.accueil')}}
                            </a>
                        </li>

                        <li class="breadcrumb-item">
                            {{ __('menu.notrecible')}}
                        </li>

                        <li class="breadcrumb-item active">
                            {{ __('menu.secteurprive')}}
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
                            <img src="{{asset('images/privatesector.jpg')}}" alt="{{ __('menu.secteurprive') }}">
                        </div>
                    </div>

                    <div class="item-content">
                        <div class="entry-content text-justify">
                            <p>
                                {{ __('privatesector.texte') }}
                            </p>

                            <ul class="list1">
                                <li class="pb-3">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('privatesector.li_1') }}
                                </li>
                                <li class="pb-3">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('privatesector.li_2') }}
                                </li>
                                <li class="pb-3">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('privatesector.li_3') }}
                                </li>
                                <li class="pb-3">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('privatesector.li_4') }}
                                </li>
                                <li class="pb-3">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('privatesector.li_5') }}
                                </li>
                                <li class="pb-3">
                                    <i class="color-main fa fa-check"></i>
                                    {{ __('privatesector.li_6') }}
                                </li>

                            </ul>

                        </div>
                        <!-- .entry-content -->

                    </div>
                    <!-- .item-content -->
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

