@extends('layouts.app')

@section('page_title')
    Politique qualité | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">

                    <h1 class="">
                        Politique qualité
                    </h1>

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">Accueil</a>
                        </li>

                        <li class="breadcrumb-item">
                            A-Propos
                        </li>

                        <li class="breadcrumb-item active">
                            Politique qualité
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
                        <div class="embed-responsive embed-responsive-3by2">
                            <a class="embed-placeholder">
                                <img src="../images/img_03.jpg" alt="">
                            </a>
                        </div>
                    </div>


                    <div class="item-content">
                        <div class="entry-content">
                            <h4 class="entry-title">
                                Notre politique qualité
                            </h4>
                            <p>
                                The world of work has changed and the appetite for spending long periods of time…
                            </p>

                            <p>
                                Short ribs fatback ball tip landjaeger burgdoggen pork chop shank strip steak alcatra frankfurter. Leberkas salami ribeye capicola. Turducken bresaola pork shankle tongue ball tip sausage picanha pig biltong jowl meatball kielbasa t-bone. Ball tip ham
                                corned beef prosciutto hamburger shoulder.
                            </p>

                            <blockquote class="divider-0 text-center">
                                <p>
                                    Working with HR Invenir has already allowed us to challenge some existing assumptions internally, right from the first data collection. The dashboards have been able.
                                </p>
                                <span>
                                    Daniel
                                    <br>
                                    <strong>Craigs</strong>
                                </span>
                            </blockquote>

                            <p>
                                Jowl tongue andouille fatback. Pork chop tri-tip ground round burgdoggen, short ribs pig spare ribs cupim tongue. Corned beef picanha filet mignon pastrami, cupim leberkas boudin. Leberkas boudin pastrami.
                            </p>

                            <ul class="list1">
                                <li>
                                    <i class="color-main fa fa-check"></i>
                                    Meatball biltong pork belly
                                </li>
                                <li>
                                    <i class="color-main fa fa-check"></i>
                                    Corned beef pig turkey pastrami
                                </li>
                                <li>
                                    <i class="color-main fa fa-check"></i>
                                    Chuck doner ham salami pork
                                </li>
                            </ul>

                            <p>
                                <img class="alignleft" alt="" src="images/partner-image.jpg">
                            </p>


                            <p class="right">
                                Doner biltong bresaola tenderloin, andouille chicken cow. Turkey short ribs pancetta, alcatra biltong pork loin sirloin beef.
                            </p>

                            <p>
                                Ham hock tail tongue drumstick brisket burgdoggen shoulder. Meatball tongue filet mignon venison. Cupim pig bresaola ball tip drumstick.
                            </p>

                            <p>
                                ail short loin ham pastrami hamburger tongue meatloaf andouille t-bone shankle. Ground round ham jerky pork flank turkey ball tip porchetta t-bone. Short ribs pancetta kielbasa pig bresaola.
                            </p>
                            <p>
                                Hamburger shoulder pancetta ground round, drumstick meatball beef flank spare ribs biltong sausage porchetta short ribs landjaeger. Pork chop beef picanha, turkey brisket pork chuck turducken.
                            </p>

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

