<!-- template sections -->

<!--topline section visible only on small screens|-->
<section class="page_topline ls ms c-my-10 s-py-15">
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
                            <a class="dropdown-toggle" href="#" role="button" id="dropdown-language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <div class="col-xl-3 col-lg-2 col-11">
                <a href="{{route('home', app()->getLocale() )}}" class="logo">
                    <img src="../images/logo.png" alt="">

                </a>
            </div>
            <div class="col-xl-9 col-lg-10 col-1 text-sm-center">

                <div class="nav-wrap">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">

                            <!-- Accueil -->
                            <li class="{{ Request::route() == route('home', app()->getLocale()) ? 'active' : '' }}">
                            <a href="{{route('home', app()->getLocale() )}}">{{ __('menu.accueil') }}</a>
                            </li>
                            <!-- eof Accueil -->

                            <!-- Présentation -->
                            <li>
                                <a href="#">{{ __('menu.apropos') }}</a>
                                <ul>
                                    <li>
                                        <a href="{{route('about-us', app()->getLocale() )}}">{{ __('menu.presenation') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('consultant', app()->getLocale() )}}">{{ __('menu.consultants') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{route('policy', app()->getLocale() )}}">{{ __('menu.politiquequalite') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof Présentation -->
                            <!-- Services -->
                            <li>
                                <a href="#">{{ __('menu.secteurcouvert') }}</a>
                                <ul>
                                    <li>
                                        <a href="">PME</a>
                                    </li>
                                    <li>
                                        <a href="">TPME</a>
                                    </li>
                                    <li>
                                        <a href="">Entreprises Unipersonnelles</a>
                                    </li>
                                    <li>
                                        <a href="">Cabinets</a>
                                    </li>
                                    <li>
                                        <a href="">ONG</a>
                                    </li>
                                    <li>
                                        <a href="#">Organismes</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- offres -->
                            <li>
                                <a href="#">{{ __('menu.nosoffres') }}</a>
                                <div class="mega-menu">
                                    <ul class="mega-menu-row">
                                        <li class="mega-menu-col">
                                            <a href="#">Solutions RH</a>
                                            <ul>
                                                <li>
                                                    <a href="#">RH Externalisée</a>
                                                </li>
                                                <li>
                                                    <a href="#">Screening & Vetting</a>
                                                </li>
                                                <li>
                                                    <a href="#">Recrutement</a>
                                                </li>
                                                <li>
                                                    <a href="#">Conseil & Assistance RH</a>
                                                </li>
                                                <li>
                                                    <a href="#">Fiches de poste</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <a href="#">Gestion administrative</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Conseils</a>
                                                </li>
                                                <li>
                                                    <a href="#">Plan de restructuration</a>
                                                </li>
                                                <li>
                                                    <a href="#">Rédaction documentaire</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gestion Administrative</a>
                                                </li>
                                                <li>
                                                    <a href="#">Gestions de contrats</a>
                                                </li>
                                                <li>
                                                    <a href="#">Représentation</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <a href="#">Gestion de Paie</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Gestion externe de la paie </a>
                                                </li>
                                                <li>
                                                    <a href="#">Grilles salariales </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <a href="#">Formations</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Plan de formation</a>
                                                </li>
                                                <li>
                                                    <a href="#">Conseils & Assistances</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- contacts -->
                            <li class="{{ Request::route() == route('contact', app()->getLocale()) ? 'active' : '' }}">
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
