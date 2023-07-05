<?php
require 'connexion.php';
if (isset($_POST['enregistrer'])) {
    if (isset($_POST['typeMesure'], $_POST['epaule'], $_POST['manche'], $_POST['poitrine'], $_POST['taille'], $_POST['cuisse'] , $_POST['longueur'], $_POST['fesse'], $_POST['ceinture']));
    $req = $bd->prepare('INSERT into mesure ( typeMesure,epaule,manche,poitrine,taille,cuisse,longueur,fesse,ceinture) values(?,?,?,?,?,?,?,?,?)');
    $req->bindValue(1, $_POST['typeMesure']);
    $req->bindValue(2, $_POST['epaule']);
    $req->bindValue(3, $_POST['manche']);
    $req->bindValue(4, $_POST['poitrine']); 
    $req->bindValue(5, $_POST['taille']);
    $req->bindValue(6, $_POST['cuisse']);
    $req->bindValue(7, $_POST['longueur']);
    $req->bindValue(8, $_POST['fesse']);
    $req->bindValue(9, $_POST['ceinture']);
    $req->execute();
    header('Location:commande.php');
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="src/assets/images/favicon.png">
    <title>Freedash Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="src/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-lg">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <img src="src/assets/images/logoTmp.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge text-bg-primary notify-no rounded-circle">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-success text-white rounded-circle btn-circle"><i
                                                        data-feather="calendar" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Event today</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        a reminder that you have event</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-info rounded-circle btn-circle"><i
                                                        data-feather="settings" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Settings</h6>
                                                    <span
                                                        class="font-12 text-nowrap d-block text-muted text-truncate">You
                                                        can customize this template
                                                        as you want</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-primary rounded-circle btn-circle"><i
                                                        data-feather="box" class="text-white"></i></span>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6> <span
                                                        class="font-12 text-nowrap d-block text-muted">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings" class="svg-icon"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <div class="customize-input">
                                    <select
                                        class="custom-select form-control bg-white custom-radius custom-shadow border-0">
                                        <option selected>EN</option>
                                        <option value="1">AB</option>
                                        <option value="2">AK</option>
                                        <option value="3">BE</option>
                                    </select>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="src/assets/images/users/profile-pic.jpg" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ms-2 d-none d-lg-inline-block"><span>Bonjour,</span> <span
                                        class="text-dark">Thiam</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon me-2 ms-1"></i>
                                    Mon Profil</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon me-2 ms-1"></i>
                                    Parametre Compte</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="deconnexion.php"><i data-feather="power"
                                        class="svg-icon me-2 ms-1"></i>
                                    Se deconnecter</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/projetatelier"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Accueil</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Vues</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="src/html/javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Formulaires</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"> <a class="sidebar-link" href="client_form.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Client
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="commande.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Commande
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="employe.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Employe
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="fournisseur.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Fournisseur
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="gerant.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Gerant
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="mesure.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Mesure
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="modele.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Modele
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="stock.php"
                                        aria-expanded="false"><i data-feather="edit" class="feather-icon"></i><span
                                            class="hide-menu">Formulaire Stock
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="src/html/javascript:void(0)"
                                aria-expanded="false"><i data-feather="menu" class="feather-icon"></i><span
                                    class="hide-menu">Listes</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"> <a class="sidebar-link" href="commande_liste.php"
                                        aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
                                            class="hide-menu">Liste Commmandes
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="employe_liste.php"
                                        aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
                                            class="hide-menu">Liste Employes
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="gerant_liste.php"
                                        aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
                                            class="hide-menu">Liste Gerants
                                        </span></a>
                                </li>
                                <li class="sidebar-item"> <a class="sidebar-link" href="stock_liste.php"
                                        aria-expanded="false"><i data-feather="list" class="feather-icon"></i><span
                                            class="hide-menu">Liste Stocks
                                        </span></a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="src/php/app-calendar.php"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Authentication</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="src/php/authentication-login1.php" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">Se connecter
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                                href="src/php/authentication-register1.php" aria-expanded="false"><i data-feather="lock"
                                    class="feather-icon"></i><span class="hide-menu">S'inscrire
                                </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="deconnexion.php" aria-expanded="false"><i
                                    data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Mesure</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Formulaires</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Mesure</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Formulaire Mesure</h4>
                                <form class="mt-4" action="mesure.php" method="post">
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <select name="typeMesure" class="form-select" id="inputGroupSelect01">
                                            <option><?php if (isset($_POST['typeMesure'])) echo $_POST['typeMesure'] ?>
                                            </option>
                                            <option value="robe">Robe</option>
                                            <option value="jupe">Jupe</option>
                                            <option value="Pantalon">Pantalon</option>
                                            <option value="boubou">Boubou</option>
                                            <option value="chemise">Chemise</option>
                                        </select>
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Epaule:</label>
                                        <input type="text" class="form-control" name="epaule"
                                            value="<?php if (isset($_POST['epaule'])) echo $_POST['epaule'] ?>">
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Manche</label>
                                        <input type="text" class="form-control" name="manche"
                                            value="<?php if (isset($_POST['manche'])) echo $_POST['manche'] ?>">
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Poitrine</label>
                                        <input type="text" class="form-control" name="poitrine"
                                            value="<?php if (isset($_POST['poitrine'])) echo $_POST['poitrine'] ?>">
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Taille</label>
                                        <input type="text" class="form-control" name="taille"
                                            value="<?php if (isset($_POST['taille'])) echo $_POST['taille'] ?>">
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Cuisse</label>
                                        <input type="text" class="form-control" name="cuisse"
                                            value="<?php if (isset($_POST['cuisse'])) echo $_POST['cuisse'] ?>">
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Longueur</label>
                                        <input type="text" class="form-control" name="longueur"
                                            value="<?php if (isset($_POST['longueur'])) echo $_POST['longueur'] ?>">
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Fesse</label>
                                        <input type="text" class="form-control" name="fesse"
                                            value="<?php if (isset($_POST['fesse'])) echo $_POST['fesse'] ?>">
                                    </div>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <label for="">Ceinture</label>
                                        <input type="text" class="form-control" name="ceinture"
                                            value="<?php if (isset($_POST['ceinture'])) echo $_POST['ceinture'] ?>">
                                    </div>
                                    <?php { ?>
                                    <div class="form-group" style="margin-top: 1rem;">
                                        <input type="submit"
                                            class="btn waves-effect waves-light btn-rounded btn-primary"
                                            value="Enregistrer" name="enregistrer">
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                All Rights Reserved by Freedash. Designed and Developed by <a
                    href="https://adminmart.com/">Adminmart</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="src/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="src/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="src/dist/js/app-style-switcher.js"></script>
    <script src="src/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="src/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="src/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="src/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="src/dist/js/custom.min.js"></script>
</body>

</html>