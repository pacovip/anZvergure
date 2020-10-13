
<!--topline section visible only on small screens|-->
<section class="page_topline ls ms c-my-10- s-py-2">
    <div class="container-fluid">
        <div class="row align-items-right text-right">

            <div class="col-xl-7 col-lg-6 text-center text-lg-center">
            </div>

            <div class="col-xl-3 col-lg-2 text-center text-lg-center">
                <span class="social-icons top" style="margin-top: -10px;">

                    <a href="#" class="fa fa-facebook " title="facebook"></a>
                    <a href="#" class="fa fa-twitter " title="twitter"></a>
                    <a href="#" class="fa fa-google " title="google"></a>
                    <a href="#" class="fa fa-linkedin " title="linkedin"></a>
                    <a href="#" class="fa fa-pinterest-p " title="linkedin"></a>
                </span>
            </div>
            <div class="col-xl-2 col-lg-2 text-center text-lg-left">
                <ul class="top-includes border-divided">

                    <li class="dropdown-language">
                        <div class="dropdown show">
                            <a class="dropdown-toggle text-white-xx" href="#" role="button" id="dropdown-language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('images/flags/'.app()->getLocale().'.gif')}}" alt=""> {{ ucfirst( __('menu.'.app()->getLocale()) ) }}
                            </a>
                            <div class="dropdown-menu ls" aria-labelledby="dropdown-language">
                                @foreach (config('app.available_locales') as $locale)
                                    <a
                                        @if (app()->getLocale() == $locale)
                                            style="font-weight: bold; "
                                        @else
                                            href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                                        @endif
                                    >
                                        <img src="{{asset('images/flags/'.$locale.'.gif')}}" alt=""> {{ ucfirst( __('menu.'.$locale) ) }}
                                    </a>

                                @endforeach

                            </div>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</section>

<!--eof topline-->

<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
<header class="page_header ls s-bordertop nav-narrow justify-nav-center">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-5 col-11">
                <div class="text-left">
                    <div class="header_logo_left text-left">
                        <a href="{{route('home', app()->getLocale() )}}" class="logo">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- eof .header_left_logo -->
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7 col-1 text-sm-center">

                <div class="nav-wrap">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">

                            <!-- Accueil -->
                            <li class="{{ Request::url() == url(app()->getLocale().'/home') ? 'active' : '' }} {{ Request::url() == url(app()->getLocale()) ? 'active' : '' }} ">
                            <a href="{{route('home', app()->getLocale() )}}">{{ __('menu.accueil') }}</a>
                            </li>
                            <!-- eof Accueil -->

                            <!-- Présentation -->
                            <li class="{{ Request::url() == url(app()->getLocale().'/about-us') ? 'active' : '' }} {{ Request::url() == url(app()->getLocale().'/consultant') ? 'active' : '' }} {{ Request::url() == url(app()->getLocale().'/policy') ? 'active' : '' }} ">
                                <a href="#">{{ __('menu.apropos') }}</a>
                                <ul>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/about-us') ? 'active' : '' }} ">
                                        <a href="{{route('about-us', app()->getLocale() )}}">{{ __('menu.presentation') }}</a>
                                    </li>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/consultant') ? 'active' : '' }} ">
                                        <a href="{{route('consultant', app()->getLocale() )}}">{{ __('menu.consultants') }}</a>
                                    </li>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/policy') ? 'active' : '' }} ">
                                        <a href="{{route('policy', app()->getLocale() )}}">{{ __('menu.politiquequalite') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof Présentation -->
                            <!-- Services -->
                            <li class="{{ Request::url() == url(app()->getLocale().'/private-sector') ? 'active' : '' }} {{ Request::url() == url(app()->getLocale().'/public-sector') ? 'active' : '' }}">
                                <a href="#">{{ __('menu.notrecible') }}</a>
                                <ul>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/private-sector') ? 'active' : '' }}">
                                        <a href="{{route('private-sector', app()->getLocale() )}}">{{ __('menu.secteurprive') }}</a>
                                    </li>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/public-sector') ? 'active' : '' }}">
                                        <a href="{{route('public-sector', app()->getLocale() )}}">{{ __('menu.secteurpublic') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- offres -->
                            <li class="
                            {{ Request::url() == url(app()->getLocale().'/offer-administrative') ? 'active' : '' }}
                            {{ Request::url() == url(app()->getLocale().'/offer-management') ? 'active' : '' }}
                            {{ Request::url() == url(app()->getLocale().'/offer-project') ? 'active' : '' }}
                            {{ Request::url() == url(app()->getLocale().'/offer-hr') ? 'active' : '' }}
                            {{ Request::url() == url(app()->getLocale().'/offer-payroll') ? 'active' : '' }}
                            ">
                                <a href="#">{{ __('menu.nosoffres') }}</a>
                                <ul>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/offer-administrative') ? 'active' : '' }}">
                                        <a href="{{route('offer-administrative', app()->getLocale() )}}">{{ __('menu.suiviadm') }}</a>
                                    </li>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/offer-management') ? 'active' : '' }}">
                                        <a href="{{route('offer-management', app()->getLocale() )}}">{{ __('menu.suivimanag') }}</a>
                                    </li>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/offer-project') ? 'active' : '' }}">
                                        <a href="{{route('offer-project', app()->getLocale() )}}">{{ __('menu.suiviproj') }}</a>
                                    </li>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/offer-hr') ? 'active' : '' }}">
                                        <a href="{{route('offer-hr', app()->getLocale() )}}">{{ __('menu.suividevrh') }}</a>
                                    </li>
                                    <li class="{{ Request::url() == url(app()->getLocale().'/offer-payroll') ? 'active' : '' }}">
                                        <a href="{{route('offer-payroll', app()->getLocale() )}}">{{ __('menu.suivipaie') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- contacts -->
                            <li class="{{ Request::url() == url(app()->getLocale().'/contact') ? 'active' : '' }}">
                                <a href="{{route('contact', app()->getLocale() )}}">{{ __('menu.contacts') }}</a>
                            </li>
                            <!-- eof contacts -->


                        </ul>


                    </nav>
                    <!-- eof main nav -->

                    <!--modal search-->
                    <span>
                        <a href="#" class="search_modal_button">
                            <i class="fa fa-search"></i>
                        </a>
                    </span>

                </div>

            </div>
        </div>
    </div>

    <!-- header toggler -->

    <span class="toggle_menu">
        <span></span>
    </span>

</header>
