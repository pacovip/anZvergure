<!-- template sections -->

<!--topline section visible only on small screens|-->
<section class="page_topline ls ms c-my-10 s-py-15">
    <div class="container-fluid">
        <div class="row align-items-right text-right">

            <div class="col-xl-7 col-lg-6 text-center text-lg-center">
            </div>

            <div class="col-xl-3 col-lg-2 text-center text-lg-center">
                <span class="social-icons top">

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
                                <img src="images/flags/fr.gif" alt=""> Français
                            </a>
                            <div class="dropdown-menu ls" aria-labelledby="dropdown-language">
                                <a href="#">
                                    <img src="images/flags/fr.gif" alt=""> Français</a>
                                <a href="#">
                                    <img src="images/flags/us.gif" alt=""> English</a>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</section>

<!--eof topline-->

<?php
    $page = '';
    $url = Request::url();
    if($url != '' && count(explode('/', $url)) > 0 ) {
        $exp_url = explode('/', $url);
        $nbre_exp = count($exp_url)-1;
        $page_index = $nbre_exp ;
        // dans le cas des page "edit"
        if( $exp_url[$page_index] == 'create' || is_numeric($exp_url[$page_index]) )
            $page_index = $nbre_exp - 1 ;
        if( $exp_url[$page_index] == 'edit' )
            $page_index = $nbre_exp - 2 ;

        //
        $page = $exp_url[$page_index];
        //echo $exp_url[$page_index];
    }
?>

<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
<header class="page_header ls s-bordertop nav-narrow justify-nav-center">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-2 col-11">
                <a href="{{url('home')}}" class="logo">
                    <img src="images/logo.png" alt="">

                </a>
            </div>
            <div class="col-xl-9 col-lg-10 col-1 text-sm-center">

                <div class="nav-wrap">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">

                            <!-- Accueil -->
                            <li class="{{ Request::url() == url('/home') ? 'active' : '' }}">
                                <a href="{{url('home')}}">Accueil</a>
                            </li>
                            <!-- eof Accueil -->

                            <!-- Présentation -->
                            <li>
                                <a href="#">A-Propos</a>
                                <ul>
                                    <li>
                                        <a href="{{url('about-us')}}">Présenation</a>
                                    </li>
                                    <li>
                                        <a href="{{url('consultant')}}">Consultants</a>
                                    </li>
                                    <li>
                                        <a href="{{url('policy')}}">Politique qualité</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- eof Présentation -->
                            <!-- Services -->
                            <li>
                                <a href="#">Secteurs Couverts</a>
                                <ul>
                                    <li>
                                        <a href="{{url('/pme')}}">PME</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/tpme')}}">TPME</a>
                                    </li>
                                    <li>
                                        <a href="{{url('etpu')}}">Entreprises Unipersonnelles</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/cabinet')}}">Cabinets</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/ong')}}">ONG</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/organisation')}}">Organismes</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- offres -->
                            <li>
                                <a href="#">Nos Offres</a>
                                <div class="mega-menu">
                                    <ul class="mega-menu-row">
                                        <li class="mega-menu-col">
                                            <a href="#">Solutions RH</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('/')}}">RH Externalisée</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Screening & Vetting</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Recrutement</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Conseil & Assistance RH</a>
                                                </li>
                                                <li>
                                                    <a href="header5.html">Fiches de poste</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <a href="#">Gestion administrative</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('/')}}">Conseils</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Plan de restructuration</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Rédaction documentaire</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Gestion Administrative</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Gestions de contrats</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Représentation</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <a href="#">Gestion de Paie</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('/')}}">Gestion externe de la paie </a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Grilles salariales </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <a href="#">Formations</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('/')}}">Plan de formation</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/')}}">Conseils & Assistances</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- contacts -->
                            <li class="{{ Request::url() == url('/contact') ? 'active' : '' }}">
                                <a href="{{url('contact')}}">Contacts</a>
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
