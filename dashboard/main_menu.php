<!--Main menu-->
<div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">GestionSyndic</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item active" data-menu=""><a class="dropdown-item" href="index.php"><i class="feather icon-home"></i><span data-i18n="Tableau de bord">Tableau de bord</span></a></li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-server"></i><span data-i18n="Copropriété">Banque</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="copropriete.php" data-toggle="dropdown" data-i18n="Liste de lots"><i class="feather icon-eye"></i>Liste des lots</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Nouveau lot"><i class="feather icon-plus"></i>Nouveau lot</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Compte"><i class="feather icon-list"></i>Compte</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Select"><i class="feather icon-circle"></i>Compte de lots</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Switch"><i class="feather icon-circle"></i>Relevés de compte</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Checkbox"><i class="feather icon-circle"></i>Annexe comptable</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-users"></i><span data-i18n="Copropriétaires">Copropriétaires</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="proprietaires.php" data-toggle="dropdown" data-i18n="Liste copropriétaires"><i class="feather icon-eye"></i>Liste des copropriétaires</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Nouveau copropriétaire"><i class="feather icon-user-plus"></i>Nouveau copropriétaire</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-layers"></i><span data-i18n="Copropriétaires">Charges</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="charges.php" data-toggle="dropdown" data-i18n="Liste des charges"><i class="feather icon-eye"></i>Liste des charges</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Frais spéciaux"><i class="feather icon-paperclip"></i>Frais spéciaux</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Nouvelle charge"><i class="feather icon-file-plus"></i>Nouvelle charge</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span data-i18n="Budget">Budget</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="copropriete.php" data-toggle="dropdown" data-i18n="Appels de fonds"><i class="feather icon-trending-up"></i>Appels de fonds</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Prévisionnel"><i class="feather icon-percent"></i>Prévisionnel</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-more-horizontal"></i><span data-i18n="Others">Autres</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Attestation"><i class="feather icon-file"></i>Attestation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Délibération"><i class="feather icon-folder"></i>Délibération</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->