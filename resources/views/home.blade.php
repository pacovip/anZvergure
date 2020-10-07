@extends('layouts.app')



@section('page_title')
    Accueil | www.anzvergure.com
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
                                                Profitez des services compétitifs
                                            </h3>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInRight">
                                            <h2 class="text-uppercase intro_featured_word">
                                                D'externalisation
                                                <br> des RH
                                            </h2>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <div class="d-inline-block">
                                                <a href=""><button type="button" class="btn btn-outline-maincolor center-block" data-animation="fadeIn"> En savoir plus </button></a>
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
                                                Optez pour la performance et
                                            </h3>
                                        </div>
                                        <div class="intro_layer" data-animation="pullDown">
                                            <h2 class="text-uppercase intro_featured_word">
                                                ANzVERGURE
                                                <br> S'OCCUPE DE VOS EXTRA
                                            </h2>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <div class="d-inline-block">
                                                <a href=""><button type="button" class="btn btn-outline-maincolor center-block" data-animation="fadeIn"> En savoir plus </button></a>
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
                                                Nous améliorons la productivité de votre personnel
                                            </h3>
                                        </div>
                                        <div class="intro_layer" data-animation="pullUp">
                                            <h2 class="text-uppercase intro_featured_word">
                                                DES FORMATIONS
                                                <br> SUR MESURE
                                            </h2>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeIn">
                                            <div class="d-inline-block">
                                                <a href=""><button type="button" class="btn btn-outline-maincolor center-block"> En savoir plus </button></a>
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
                            Appellé-nous
                        </p>
                        <h5>
                            <a href="tel:+225 79 05 62 03"> +225 79 05 62 03</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="info-block">
                        <p>
                            Email
                        </p>
                        <h5>
                            <a href="mailto:+225 79 05 62 03">info@anzvergure.com</a>
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="info-block">
                        <p>
                            Nos horaires
                        </p>
                        <h5>
                            Lun-Ven : 8h:00 - 18h:00
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
                            ANzVERGURE
                        </h2>
                        <p>
                            ANzVERGURE est d'une entreprise spécialisée en Gestion Externalisée des Ressources Humaines, créé en 2020 par des acteurs très expérimentés de la Gestion des Ressources Humaines en Afrique.
                            <br>
                            Après plus 22 années passés à sillonner toute l’Afrique et une partie du Monde, en travaillant pour diverses multinationales opérant aussi bien dans le GSM, les Télécommunications, la sécurité, les ventes d’engins de BTP qu’en cabinet d’Avocat et dans les Organisations internationales.
                        </p>
                    </div>
                    <div class="icons-list">
                        <ul class="list-bordered">
                            <li class=" media media-body">
                                <i class="teaser-icon fa fa-rocket"></i>
                                <h4 class="title">
                                    <span>238</span> Entreprises clientes
                                </h4>
                            </li>
                            <li class="media media-body">
                                <i class="teaser-icon fa fa-briefcase"></i>
                                <h4 class="title">
                                    <span>12</span> &nbsp;Programmes de coopération
                                </h4>
                            </li>
                            <li class="media media-body">
                                <i class="teaser-icon fa fa-graduation-cap"></i>
                                <h4 class="title">
                                    <span>64</span> &nbsp;Cours & Formations
                                </h4>
                            </li>
                            <li class="border-bottom-0 media media-body">
                                <i class="teaser-icon fa fa-group"></i>
                                <h4 class="title">
                                    <span>12</span> &nbsp;Partenaires stratégiques
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
                <div class="col-lg-4">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-unlock-alt"></i>
                        </div>
                        <h3>
                            <a href="#">Management Organisationnel</a>
                        </h3>
                        <p>
                            Cloud-based services can offer our customers single tenant dedicated environments ...
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <h3>
                            <a href="#">Suivi Administratif & de la Paie</a>
                        </h3>
                        <p>
                            Working with customers making 100-40,000 hires per annum ...
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-database"></i>
                        </div>
                        <h3>
                            <a href="#">Développement Ressources Humaines</a>
                        </h3>
                        <p>
                            All of our customers' data is validated. We build accurate data banks for reporting ...
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-unlock-alt"></i>
                        </div>
                        <h3>
                            <a href="#">Externalisation des Ressources Humaines</a>
                        </h3>
                        <p>
                            Cloud-based services can offer our customers single tenant dedicated environments ...
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-unlock-alt"></i>
                        </div>
                        <h3>
                            <a href="#">Formation <br>&nbsp;</a>
                        </h3>
                        <p>
                            Cloud-based services can offer our customers single tenant dedicated environments ...
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="icon-box text-center hero-bg box-shadow">
                        <div class="teaser-icon icon-styled bg-maincolor3">
                            <i class="fa fa-unlock-alt"></i>
                        </div>
                        <h3>
                            <a href="#">Suivi des Projets <br>&nbsp;</a>
                        </h3>
                        <p>
                            Cloud-based services can offer our customers single tenant dedicated environments ...
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
                        Submit
                    </h5>
                    <h4>
                        Candidate CV
                    </h4>
                </div>
                <div class="px-30 ds-form">
                    <form class="ds contact-form c-mb-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="name">Full Name
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="200" value="" name="your-name" id="name" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="text">Phone number
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="200" value="" name="text" id="text" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="email">Email address
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" aria-required="true" size="200" value="" name="your-email" id="email" class="form-control" placeholder="Email address">
                                </div>
                                <div class="col-c-mb-60 form-group has-placeholder">
                                    <label for="text">Job sector
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="200" value="" name="text" id="text" class="form-control" placeholder="Job sector">
                                </div>
                                <div class="col-c-mb-60 form-group">
                                    <input type="file" class="custom-file-input button" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Attach CV</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="message">Comment</label>
                                    <textarea aria-required="true" rows="6" cols="40" name="message" id="message" class="form-control" placeholder="comment"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group text-center">
                                <button type="submit" id="contact_form_submit" name="contact_submit" class="button">Submit CV</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ls s-py-lg-130 s-pt-30 s-pb-30 pt-20 main_blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-header text-center">
                        <h5>
                            Our
                        </h5>
                        <h4>
                            Blog Posts
                        </h4>
                    </div>
                    <div class="owl-carousel pt-30" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-nav="false" data-dots="false">
                        <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/img_01.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- .post-thumbnail -->
                            <div class="item-content ">
                                <header class="blog-header ">
                                    <a href="#" rel="bookmark">
                                        <h4>
                                            Modernising our Talent Programmes
                                        </h4>
                                    </a>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content ls">
                                    <p>The world of work has changed and the appetite for spending long periods of time…</p>
                                </div>
                                <!-- .entry-content -->
                                <div class="blog-item-icons">
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-user "></i>
                                        <a href="#">
                                            Emma
                                        </a>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-calendar"></i>
                                        <a href="#">
                                            August 11, 2017
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="color-main fa fa-tag"></i>
                                        <a href="#">
                                            Post
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item-content -->
                        </article>
                        <!-- #post-## -->
                        <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/blog-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="blog-header ">
                                    <a href="#" rel="bookmark">
                                        <h4>
                                            Franki goes to… The Philippines & Indonesia
                                        </h4>
                                    </a>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content ls">
                                    <p>In this blog series titled ‘Franki goes to…’ we follow her travels around the world…</p>
                                </div>
                                <!-- .entry-content -->
                                <div class="blog-item-icons">
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-user "></i>
                                        <a href="#">
                                            Emma
                                        </a>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-calendar"></i>
                                        <a href="#">
                                            August 7, 2017
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="color-main fa fa-tag"></i>
                                        <a href="#">
                                            Post
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item-content -->
                        </article>
                        <!-- #post-## -->
                        <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/blog-2.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="blog-header ">
                                    <a href="#" rel="bookmark">
                                        <h4>
                                            Getting More For Your Money
                                        </h4>
                                    </a>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content ls">
                                    <p>The majority of businesses will have a degree of reliance on recruitment suppliers…</p>
                                </div>
                                <!-- .entry-content -->
                                <div class="blog-item-icons">
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-user "></i>
                                        <a href="#">
                                            Emma
                                        </a>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-calendar"></i>
                                        <a href="#">
                                            August 6, 2017
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="color-main fa fa-tag"></i>
                                        <a href="#">
                                            Post
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item-content -->
                        </article>
                        <!-- #post-## -->
                        <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/blog-3.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="blog-header ">
                                    <a href="#" rel="bookmark">
                                        <h4>
                                            Post With Youtube
                                            <br> Video
                                        </h4>
                                    </a>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content ls">
                                    <p>Ribeye cupim jerky ham. Fatback sausage shoulder, bresaola boudin hamburger pork turkey</p>
                                </div>
                                <!-- .entry-content -->
                                <div class="blog-item-icons">
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-user "></i>
                                        <a href="#">
                                            Emma
                                        </a>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-calendar"></i>
                                        <a href="#">
                                            June 10, 2017
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="color-main fa fa-tag"></i>
                                        <a href="#">
                                            Post
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item-content -->
                        </article>
                        <!-- #post-## -->
                        <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/blog-4.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="blog-header ">
                                    <a href="#" rel="bookmark">
                                        <h4>
                                            Post format:
                                            <br> Image
                                        </h4>
                                    </a>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content ls">
                                    <p>Beef beef ribs pancetta sirloin tail brisket strip steak chuck swine frankfurter ham hock kielbasa</p>
                                </div>
                                <!-- .entry-content -->
                                <div class="blog-item-icons">
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-user "></i>
                                        <a href="#">
                                            Emma
                                        </a>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-calendar"></i>
                                        <a href="#">
                                            June 8, 2017
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="color-main fa fa-tag"></i>
                                        <a href="#">
                                            Post
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item-content -->
                        </article>
                        <!-- #post-## -->
                        <article class="box vertical-item text-center content-padding padding-small bordered post type-post status-publish format-standard has-post-thumbnail">
                            <div class="item-media post-thumbnail">
                                <a href="#">
                                    <img src="{{ asset('images/blog-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- .post-thumbnail -->
                            <div class="item-content">
                                <header class="blog-header ">
                                    <a href="#" rel="bookmark">
                                        <h4>
                                            Post With Carousel
                                            <br>
                                        </h4>
                                    </a>
                                </header>
                                <!-- .entry-header -->
                                <div class="entry-content ls">
                                    <p>Beef beef ribs pancetta sirloin tail brisket strip steak chuck swine frankfurter ham hock kielbasa </p>
                                </div>
                                <!-- .entry-content -->
                                <div class="blog-item-icons">
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-user "></i>
                                        <a href="#">
                                            Emma
                                        </a>
                                    </div>
                                    <div class="col-sm-4 ">
                                        <i class="color-main fa fa-calendar"></i>
                                        <a href="#">
                                            june 7, 2017
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <i class="color-main fa fa-tag"></i>
                                        <a href="#">
                                            Post
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item-content -->
                        </article>
                        <!-- #post-## -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ds half-section collapse-section">
        <div class="row">
            <div class="col-lg-6">
                <div class="image_cover image_cover_left half-image">
                </div>
            </div>
            <div class="col-lg-6 collapse-table">
                <div class="contact-header collapse-header heading pt-30">
                    <h5>
                        Receiving
                    </h5>
                    <h4>
                        A job offer
                    </h4>
                </div>
                <div id="accordion01" role="tablist">
                    <div class="card-header" role="tab" id="collapse01_header">
                        <h5>
                            <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                Be decisive
                            </a>
                        </h5>
                    </div>
                    <div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
                        <div class="card-body">
                            Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                        </div>
                    </div>
                    <div class="card-header" role="tab" id="collapse02_header">
                        <h5>
                            <a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                Or take your time
                            </a>
                        </h5>
                    </div>
                    <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
                        <div class="card-body">
                            Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                        </div>
                    </div>
                    <div class="card-header" role="tab" id="collapse03_header">
                        <h5>
                            <a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                Resign
                            </a>
                        </h5>
                    </div>
                    <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
                        <div class="card-body">
                            Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                        </div>
                    </div>


                    <div class="card-header" role="tab" id="collapse04_header">
                        <h5>
                            <a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                Counter offers
                            </a>
                        </h5>
                    </div>
                    <div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
                        <div class="card-body">
                            Confirming your acceptance guarantees the job is yours. Usually there are other candidates in the process at this point so ensure you are committed.
                        </div>
                    </div>
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
            <div class="marker-address">Cocody Riviera 5 Akouedo Palmeraie Rue Lot 57, Abidjan, Côte d'Ivoire </div>
            <div class="marker-title">First Marker</div>
            <div class="marker-description">
                <ul class="list-unstyled">
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <span>
                                Cocody Riviera 5 Akouedo Palmeraie Rue Lot 57, Abidjan, Côte d'Ivoire
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-phone"></i>
                            </span>
                            <span>
                                <a href="tel:+225 79 05 62 03">+225 79 05 62 03</a>
                            </span>
                        </span>
                    </li>
                    <li>
                        <span class="icon-inline">
                            <span class="icon-styled color-main">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <span>
                                <a href="mailto:info@anzvergure.com">info@anzvergure.com</a>
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

