<?php
   // session_start() ;
    
   // if(isset($_SESSION['email'])) {
      
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="GestionSyndic est une application qui permet de gérer les syndicats, copropriétés, etc...">
    <meta name="keywords" content="syndicat, immobilier, dashboard template, entrepreneur, copropriété, Livres de compte">
    <meta name="author" content="Thioro Diop">
    <title>Tableau de Bord - Gestion Syndicats</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/data-list-view.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!--Header-->
    <?php include 'header.php';?>

    <!--Main Menu-->
    <?php include 'main_menu.php';?>


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Copropriété</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Tableau de bord</a></li>
                                    <li class="breadcrumb-item"><a href="#">Lots</a></li>
                                    <li class="breadcrumb-item active">Liste des lots</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-download"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <div class="action-btns">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#AddForm">
                                    <span><i class="feather icon-plus"></i></span>Ajouter lot
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>LOTS / DESCRIPTION</th>
                                    <th>PROPRIETAIRES</th>
                                    <th>GENERALES</th>
                                    <th>ESCALIER</th>
                                    <th>EAU</th>
                                    <th>CHARGE 1</th>
                                    <th>CHARGE 2</th>
                                    <th>TRAVAUX</th>
                                    <th>PROVISION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="product-name">Lot N°1</td>
                                    <td class="product-category">Thioro DIOP</td>
                                    <td class="product-price"> <small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 300 </td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-action">
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-name">Lot N°2</td>
                                    <td class="product-category">Modou SENE</td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 200 </td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 250 </td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-action">
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-name">Lot N°3</td>
                                    <td class="product-category">Cheikh SARR</td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 100 </td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 250 </td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-action">
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-name">Lot N°4</td>
                                    <td class="product-category">John Doe</td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 200 </td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 250 </td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-action">
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-name">Lot N°5</td>
                                    <td class="product-category">Maram KARE</td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 200 </td>
                                    <td class="product-price"><small class="badge badge-pill badge-secondary">Tantièmes</small> <br> 250 </td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-price">0 €</td>
                                    <td class="product-action">
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-edit"><i class="feather icon-edit"></i></span></a>
                                        <a href="#?edit=<?php echo $donnee["id"]; ?>"><span class="action-delete"><i class="feather icon-trash"></i></span></a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- Add Modal -->
                    <div class="modal fade text-left" id="AddForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Ajouter lot </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <!-- Messages d'erreur -->
                                <div>
                                    <!-- Message d'erreur si les champs sont vides -->
                                    <?php
                                        if(@$_GET['Empty']==true)  {
                                    ?>
                                    <div style="color:red; margin-bottom:10px; margin-top:-15px; text-align:center;"><?php echo $_GET['Empty'];?></div>
                                    <?php 
                                    } 
                                    ?>

                                    <!-- Message d'erreur si les informations sont incorrectes -->
                                    <?php
                                        if(@$_GET['Invalid']==true)  {
                                    ?>
                                    <div style="color:red; margin-bottom:10px; margin-top:-15px; text-align:center;"><?php echo $_GET['Invalid'];?></div>
                                    <?php 
                                    } 
                                    ?>
                                </div>

                                <form action="save_charge.php" method="post">
                                    <div class="modal-body my-2">
                                        <label>Nom charge: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Saisir nom lot" name="nom" required>
                                        </div>

                                        <label>Description: </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Saisir description" name="description" required>
                                        </div>

                                        <label>Copropriétaire</label>
                                        <select class="form-group form-control" id="data-category" name="type">
                                            <option value="Thioro Diop">Thioro DIOP</option>
                                            <option value="Modou SENE ">Modou SENE</option>
                                            <option value="Modou SENE ">Cheikh SARR</option>
                                        </select>

                                        <!-- Charges Générales -->
                                        <div class="col-sm-12 mb-1">
                                            <label>Charges Générales</label>
                                            <div class="row">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Charges Escalier -->
                                        <div class="col-sm-12 mb-1">
                                            <label>Charges Escalier</label>
                                            <div class="row">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Charges Eau -->
                                        <div class="col-sm-12 mb-1">
                                            <label>Charges Eau</label>
                                            <div class="row">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Charge 1 -->
                                        <div class="col-sm-12 mb-1">
                                            <label>Charge 1</label>
                                            <div class="row">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Charge 2 -->
                                        <div class="col-sm-12 mb-1">
                                            <label>Charge 2</label>
                                            <div class="row">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Travaux -->
                                        <div class="col-sm-12 mb-1">
                                            <label>Travaux</label>
                                            <div class="row">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Provision -->
                                        <div class="col-sm-12 mb-1">
                                            <label>Provision</label>
                                            <div class="row">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <div class="add-data-btn">
                                            <input type="submit" class="btn btn-primary" name="valider" value="Enregister" />
                                        </div>
                                        <div class="cancel-data-btn">
                                            <input type="reset" class="btn btn-outline-danger" value="Annuler" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Modifier lot</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Nom</label>
                                            <input type="text" class="form-control" placeholder="Lot N°6" disabled id="data-name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Description</label>
                                            <input type="text" class="form-control" id="data-name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-category"> Copropriétaire </label>
                                            <select class="form-control" id="data-category">
                                                <option>Thioro DIOP</option>
                                                <option>Modou SENE</option>
                                                <option>Cheikh SARR</option>
                                                <option>John Doe</option>
                                                <option>Maram KARE</option>
                                            </select>
                                        </div>
                                        <!-- Charges Générales -->
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Charges Générales</label>
                                            <div class="row px-1">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Charges Escalier -->
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Charges Escalier</label>
                                            <div class="row px-1">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Charges Eau -->
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Charges Eau</label>
                                            <div class="row px-1">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Charges 1 -->
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Charge 1</label>
                                            <div class="row px-1">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Charges 2 -->
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Charge 2</label>
                                            <div class="row px-1">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Travaux -->
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Travaux</label>
                                            <div class="row px-1">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Provision -->
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status">Provision</label>
                                            <div class="row px-1">
                                                <select class="form-control col-sm-7" id="data-status">
                                                    <option>Tantièmes</option>
                                                    <option>Prorota</option>
                                                </select>
                                                <div class="col-sm-5 input-group">
                                                    <input type="number" class="form-control" aria-label="Montant (en euros)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">€</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary">Enregister</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!--Footer-->
    <?php 
    include 'footer.php';
    
    //}
   // else
    //{
     //   header("location:index.php");
    //}
    
    ?>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/ui/data-list-view.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>