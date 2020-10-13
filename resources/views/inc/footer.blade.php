
    <footer class="page_footer ds s-py-sm-20 s-pt-md-75 s-pb-md-50 s-py-lg-130 c-gutter-60 pb-20 half-section">
        <div class="container">
            <div class="row">
                <div class="footer col-md-5 text-center animate" data-animation="fadeInUp">
                    <div class="footer widget text-center">
                        <h3 class="widget-title title-menu">{{ __('footer.explorez') }}</h3>
                        <ul class="footer-menu">
                            <li>
                                <a href="{{route('about-us', app()->getLocale() )}}">{{ __('menu.presenation') }}</a>
                            </li>
                            <li class="menu1">
                                <a href="{{route('consultant', app()->getLocale() )}}">{{ __('menu.consultants') }}</a>
                            </li>
                            <li>
                                <a href="{{route('policy', app()->getLocale() )}}">{{ __('menu.politiquequalite') }}</a>
                            </li>
                            <li class="menu1">
                                <a href="{{route('private-sector', app()->getLocale() )}}">{{ __('menu.secteurprive') }}</a>
                            </li>
                            <li>
                                <a href="{{route('public-sector', app()->getLocale() )}}">{{ __('menu.secteurpublic') }}</a>
                            </li>
                            <li class="menu1">
                                <a href="{{route('contact', app()->getLocale() )}}">{{ __('menu.contacts') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer  col-md-4 text-center animate" data-animation="fadeInUp">
                    <div class="text-center">
                        <div class="header_logo_center footer-logo-ds">
                            <a href="./" class="logo">
                                <img src="{{ asset('images/logo.png') }}" alt="">
                            </a>
                        </div>
                        <!-- eof .header_left_logo -->
                    </div>
                    <div class="widget">
                        <div class="media">
                            <i class="mx-10 color-main fa fa-map-marker"></i>
                            {{ __('contact.adr') }}
                        </div>

                        <div class="media">
                            <i class="mx-10 color-main fa fa-phone"></i>
                            <a href="tel:{{ __('contact.tel1') }}">{{ __('contact.tel1') }}</a>
                        </div>

                        <div class="media text-center link">
                            <i class="mx-10 text-center color-main fa fa-envelope"></i>
                            <a href="mailto:{{ __('contact.email') }}">{{ __('contact.email') }}</a>
                        </div>
                    </div>

                    <div class="author-social">
                        <a href="#" class="fa fa-facebook color-bg-icon rounded-icon"></a>
                        <a href="#" class="fa fa-twitter color-bg-icon rounded-icon"></a>
                        <a href="#" class="fa fa-google color-bg-icon rounded-icon"></a>
                    </div>
                </div>
                <div class="footer col-md-3 text-center animate" data-animation="fadeInUp">
                    <div class="widget widget_mailchimp">

                        <h3 class="widget-title">{{ __('footer.newsletter_titre') }}</h3>

                        <p>
                            {!! __('footer.newsletter_texte') !!}
                        </p>

                        <form class="signup-xx">
                            <label for="mailchimp_email">
                                <span class="screen-reader-text">{{ __('footer.inscrivezvous') }}:</span>
                            </label>

                            <input required id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email" placeholder="{{ __('footer.adresseemail') }}">

                            <button type="submit" class="search-submit">{{ __('footer.inscription') }}</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <section class="page_copyright ds s-py-30 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="divider-20 d-none d-lg-block"></div>
                <div class="col-md-12 text-center">
                    <p>{!! __('footer.copyright') !!}
                        <span class="copyright_year">2020 @if(date('Y') > 2020) - {{date('Y')}} @endif </span> {{ __('footer.droitreserves') }}</p>
                </div>
                <div class="divider-20 d-none d-lg-block"></div>
            </div>
        </div>
    </section>
