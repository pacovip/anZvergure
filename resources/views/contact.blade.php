@extends('layouts.app')

@section('page_title')
    Contact | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">
                    <h1 class="">Contact</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="./">Accueil</a>
                        </li>

                        <li class="breadcrumb-item active">
                            Contact
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
                                <h2 style="color: #333;">Ecrivez-nous</h2>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="name">Nom
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="phone">Téléphone
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Téléphone">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="email">Email
                                        <span class="required">*</span>
                                    </label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-placeholder">
                                    <label for="subject">Sujet
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Sujet">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="contact form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="form-group has-placeholder text-center">
                                    <button type="submit" id="contact_form_submit" name="contact_submit" class="btn theme_button">Envoyer votre Message
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

                    <h2 class="contact-title ">Nos Contacts</h2>

                    <div class="media mb-20">
                        <div class="icon-styled color-main fs-20">
                            <i class="fa fa-map-marker"></i>
                        </div>

                        <div class="media-body">
                            <h4>
                                Adresse:
                            </h4>
                            <p>
                                Cocody Riviera 5 Akouedo Palmeraie Rue Lot 57, Abidjan, Côte d'Ivoire
                            </p>
                        </div>
                    </div>

                    <div class="media mb-20">
                        <div class="icon-styled color-main fs-20">
                            <i class="fa fa-phone"></i>
                        </div>

                        <div class="media-body">
                            <h4>
                                Tel:
                            </h4>
                            <p>
                                <a href="tel:+225 79 05 62 03">+225 79 05 62 03</a>
                            </p>
                        </div>
                    </div>

                    <div class="media mb-20">
                        <div class="icon-styled color-main fs-20">
                            <i class="fa fa-pencil"></i>
                        </div>

                        <div class="media-body">
                            <h4>
                                Email:
                            </h4>
                            <p>
                                <a href="mailto:info@anzvergure.com">info@anzvergure.com</a>
                            </p>
                        </div>
                    </div>

                    <h3>Liens Sociaux</h3>

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
        <div class="marker-address">Cocody Riviera 5 Akouedo Palmeraie Rue Lot 57, Abidjan, Côte d'Ivoire</div>
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

        <img class="marker-icon" src="images/map_marker_icon.png" alt="">
    </div>
    <!-- .marker -->
</section>

@stop

<!-- eof content -->

