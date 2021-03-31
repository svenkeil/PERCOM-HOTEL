<nav class="pcoded-navbar" navbar-theme="themelight1" active-item-theme="theme1" sub-item-theme="theme2" active-item-style="style0" pcoded-navbar-position="fixed">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Votre hotel</div>
        <ul class="pcoded-item pcoded-left-item">
        <li class="pcoded-hasmenu">
            <a href="javascript:void(0)">
                <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                    <span class="pcoded-mtext">Gestion de l'Hotel</span>
            </a>
            <ul class="pcoded-submenu">
                <li class="">
                    <a href="{{route('hotel-profil')}}">
                        <span class="pcoded-mtext">Profil</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('config-hotel')}}">
                        <span class="pcoded-mtext">Configuration de l'Hotel</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('liste-hotel')}}">
                        <span class="pcoded-mtext">Liste Hotels</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('reception')}}">
                        <span class="pcoded-mtext">Reception</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('occupation-chambres')}}">
                        <span class="pcoded-mtext">Planning d'occuptation des chambres</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('historique-reception')}}">
                        <span class="pcoded-mtext">Historique de reception</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('sorties')}}">
                        <span class="pcoded-mtext">Sorties</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('liste-delogements')}}">
                        <span class="pcoded-mtext">Liste des delogements</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('liste-hs')}}">
                        <span class="pcoded-mtext">Liste des H . S</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('liste-departs')}}">
                        <span class="pcoded-mtext">Liste des departs</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{route('main-courante')}}">
                        <span class="pcoded-mtext">Main courante de reception</span>
                    </a>
                </li>
                <!-- <li class="">
                    <a href="index.html">
                        <span class="pcoded-mtext">Rapports</span>
                    </a>
                </li> -->
                <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Restauration</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('liste-menus')}}">
                                <span class="pcoded-mtext">Liste de restauration</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{route('restau-exterieur')}}">
                                <span class="pcoded-mtext">Restauration(EXT)</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{route('liste-formules')}}">
                                <span class="pcoded-mtext">Historique formules chambres</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Gestion des Chambres</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('liste-chambres')}}">
                                <span class="pcoded-mtext">Liste des Chambres</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('type-chambres')}}">
                                <span class="pcoded-mtext">Type de chambres</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('qualite-chambres')}}">
                                <span class="pcoded-mtext">Qualite de chambres</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('formule-chambres')}}">
                                <span class="pcoded-mtext">Formule de chambres</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{route('liste-reglements')}}">
                        <span class="pcoded-mtext">Liste des reglements</span>
                    </a>
                </li>
                <li class="">
                    <a href="index.html">
                        <span class="pcoded-mtext">Comptabilite</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu ">
                    <a href="javascript:void(0)">
                        <span class="pcoded-mtext">Parking</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('ajouter-parking')}}">
                                <span class="pcoded-mtext">Liste des parkings</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{route('reservation-parking')}}">
                                <span class="pcoded-mtext">Reservations parkings</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="{{route('historique-parking')}}">
                                <span class="pcoded-mtext">Historique de reservation</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="index.html">
                        <span class="pcoded-mtext">Entretien</span>
                    </a>
                </li>
                <!-- <li class="">
                    <a href="index.html">
                        <span class="pcoded-mtext">Gestion Relation Client</span>
                    </a>
                </li>-->
                <li class="">
                    <a href="{{route('liste-modes-paiements')}}">
                        <span class="pcoded-mtext">Mode de paiement</span>
                    </a>
                </li>
        
            </ul>
                </li>

                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                        <span class="pcoded-mtext">Gestion du personnel</span>
                    </a>
                    <ul class="pcoded-submenu">
                    <li class=" ">
                    <a href="{{route('user-login')}}">
                        <span class="pcoded-mtext">Login</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('user-register')}}">
                        <span class="pcoded-mtext">Registration</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('user-list')}}">
                        <span class="pcoded-mtext">Liste Utilisateurs</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('user-gestion')}}">
                        <span class="pcoded-mtext">Gestions Utilisateurs</span>
                    </a>
                </li>
                <li class=" ">
                        <a href="default/button.html">
                            <span class="pcoded-mtext">Gestion de la paie</span>
                        </a>
                </li>
            </ul>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                        <span class="pcoded-mtext">Administrateur</span>
                    </a>
                    <ul class="pcoded-submenu">
                    <li class=" ">
                    <a href="{{route('register-receptionniste')}}">
                        <span class="pcoded-mtext">Creer un receptionniste</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('register-restaurateur')}}">
                        <span class="pcoded-mtext">Creer un restaurateur</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('register-resp-hebergement')}}">
                        <span class="pcoded-mtext">Creer un responsable d'hebergement</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('register-comptable')}}">
                        <span class="pcoded-mtext">Creer un gerant de la comptabilite</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('liste-restaurateurs')}}">
                        <span class="pcoded-mtext">Liste des restaurateurs</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('liste-resp-hebergement')}}">
                        <span class="pcoded-mtext">Liste des responsables d'hebergement</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('liste-receptionnistes')}}">
                        <span class="pcoded-mtext">Liste des receptionnistes</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="{{route('liste-comptable')}}">
                        <span class="pcoded-mtext">Liste des comptables</span>
                    </a>
                </li>

                    </ul>
            </li>
            <li class=" ">
                <a href="{{route('calendrier')}}">
                    <span class="pcoded-micon"><i
                        class="feather icon-aperture"></i><b>A</b></span>
                    <span class="pcoded-mtext">Calendrier</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{route('liste-clotures')}}">
                    <span class="pcoded-micon"><i
                        class="feather icon-box"></i><b>A</b></span>
                    <span class="pcoded-mtext">Situation Globale</span>
                </a>
            </li>
            <li class=" ">
                <a href="{{route('cloture')}}">
                    <span class="pcoded-micon"><i
                        class="feather icon-box"></i><b>A</b></span>
                    <span class="pcoded-mtext">Cloture Journee</span>
                </a>
            </li>

        </ul>
        <div class="pcoded-navigatio-lavel">Clients</div>
        <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                        <span class="pcoded-mtext">Gestions des Clients</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="{{route('customer-list')}}">
                                <span class="pcoded-mtext">Liste Clients</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{route('customer-type')}}">
                                <span class="pcoded-mtext">Type de Clients</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{route('customer-gestion')}}">
                                <span class="pcoded-mtext">Gestions Clients</span>
                            </a>
                        </li>
                    </ul>
                </li>

        </ul>
        <div class="pcoded-navigatio-lavel">Votre Site</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                            <span class="pcoded-mtext">Analyse du site Internet</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" ">
                            <a href="default/alert.html">
                                <span class="pcoded-mtext">Resume</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="default/breadcrumb.html">
                                <span class="pcoded-mtext">Visiteurs</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="default/button.html">
                                <span class="pcoded-mtext">Carte</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="index.html">
                        <span class="pcoded-micon"><i
                                                        class="feather icon-aperture"></i><b>A</b></span>
                        <span class="pcoded-mtext">Site Internet</span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigatio-lavel">Vos Occupations</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                            <span class="pcoded-mtext">Reservations</span>
                        </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="{{route('reserver')}}">
                                        <span class="pcoded-micon"><i
                                                        class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Reserver</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{route('historique-reservation')}}">
                                        <span class="pcoded-micon"><i
                                                        class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Historiques des Reservations</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{route('reservation-gestion')}}">
                                        <span class="pcoded-micon"><i
                                                        class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Gestion des Reservations</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{route('type-reservation')}}">
                                        <span class="pcoded-micon"><i
                                                        class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Type de Reservations</span>
                                    </a>
                                </li>
                            </ul>
                            <li class=" ">
                                <a href="index.html">
                                    <span class="pcoded-micon"><i
                                        class="feather icon-aperture"></i><b>A</b></span>
                                    <span class="pcoded-mtext">Gestion des salles(In - Out)</span>
                                </a>
                            </li>
                    </li>       
                    </ul>     
                        <div class="pcoded-navigatio-lavel">Autres</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                        <span class="pcoded-mtext">Autres Fonctionnalites</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Produits</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Gestion du Materiel</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Achats</span>
                                            </a>
                                        </li>
                                        <!-- <li class="">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Ventes</span>
                                            </a>
                                        </li> -->
                                        <li class="">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Fournisseurs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Agence de voyages</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{route('partenaires')}}">
                                                <span class="pcoded-mtext">Partenaires</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="index.html">
                                                <span class="pcoded-mtext">Reseaux sociaux</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            </div>
    </div>
</nav>
