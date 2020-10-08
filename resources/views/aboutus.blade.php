@extends('layouts.app')

@section('page_title')
    Présentation | www.anzvergure.com
@stop

@section('page_slider')

    <section class="page_title cs s-parallax s-overlay gradientradial-background s-py-25">
        <div class="container">
            <div class="row">

                <div class="divider-50"></div>

                <div class="col-md-12 text-center">

                    <h1 class="">
                        Présentation
                    </h1>

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">Accueil</a>
                        </li>

                        <li class="breadcrumb-item">
                            A-Propos
                        </li>

                        <li class="breadcrumb-item active">
                            Présentation
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

<section class="ls about about-padge s-pt-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInLeft">
                <div class="heading-about">
                    <h3>
                        ANzVERGURE
                    </h3>
                    <p>
                        est d'une entreprise spécialisée en Gestion Externalisée des Ressources Humaines créé en 2020 par des acteurs très expérimentés de la Gestion des Ressources Humaines en Afrique.
                        <br>
                        Après plus 22 années passés à sillonner toute l’Afrique et une partie du Monde, en travaillant pour diverses multinationales opérant aussi bien dans le GSM, les Télécommunications, la sécurité, les ventes d’engins de BTP qu’en cabinet d’Avocat et dans les Organisations internationales.

                    </p>
                    <h4 style="padding: 0px; margin:0px;">
                        Notre mission
                    </h4>
                    <p style="padding: 0px; margin-top:0px;">
                        Les promoteurs d’ANzVERGURE ont décidé de mutualiser leurs expériences pour aider à solutionner les différentes problématiques qui se posent aux dirigeants d’entreprises que très souvent leurs propres DRH et / ou Avocat n’arrivent pas à résoudre de manière efficiente et durable.
                        <br>
                        Ayant géré les Ressources Humaines de ces différentes entreprises au niveau stratégique et très souvent de manière externalisée au regard des filiales des Groupes qui étaient gérées depuis le holding, ils ont pris conscience d’un tel besoin et de la nécessité de soutenir les organisations à partir de ce « business model » et de ce mode de fonctionnement qu’ils maitrisent parfaitement.
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 animate" data-animation="slideInRight">
                <img src="../images/person01.jpg" alt="person01.jpg">
            </div>
        </div>
    </div>
</section>
<section class="ls s-pt-50 s-pb-75 c-gutter-60 c-mb-lg-50 service-item">
    <div class="container">
        <div class="row">

            <div class="d-none d-lg-block divider-80"></div>

            <div class="col-md-12 col-sm-12 text-center">
                <h3 class="text-head">ANzVERGURE en chiffres</h3>
            </div>
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-group"></i>
                    </div>

                    <h4>
                        <a>17
                            <br> Consultants</a>
                    </h4>

                    <p>
                        ANzVERGURE travail avec des Consultants nationaux et internationaux.
                    </p>


                </div>
            </div>
            <!-- .col-* -->

            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-building-o"></i>
                    </div>

                    <h4>
                        <a>09
                            <br>Partenaires</a>
                    </h4>

                    <p>
                        ANzVERGURE collabore avec des partenaires stratégiques.
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-briefcase"></i>
                    </div>

                    <h4>
                        <a>03
                            <br>Coopérations</a>
                    </h4>

                    <p>
                        ANzVERGURE est ouverte à des Coopérations B2B.
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-money"></i>
                    </div>

                    <h4>
                        <a>369
                            <br>Employés gérés</a>
                    </h4>

                    <p>
                        Nous recueillons le retour sur satisfactions des employés de nos clients.
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-handshake-o"></i>
                    </div>

                    <h4>
                        <a>12
                            <br>Entreprises Clientes</a>
                    </h4>

                    <p>
                        Nos offres et notre politique qualité satisfons aux besoins et aux exigences de nos clients.
                    </p>


                </div>
            </div>
            <!-- .col-* -->
            <div class="col-md-4 col-sm-6">

                <div class="icon-box text-center">
                    <div class="icon-styled fs-56">
                        <i class="color-main2 fa fa-file-text-o"></i>
                    </div>

                    <h4>
                        <a>60
                            <br>CV en moyenne/j</a>
                    </h4>

                    <p>
                        De nombre postulants attendent de débuter une carrière.
                    </p>


                </div>
            </div>
            <!-- .col-* -->

            <div class="d-none d-lg-block divider-20"></div>

        </div>

    </div>
</section>

@stop

<!-- eof content -->

