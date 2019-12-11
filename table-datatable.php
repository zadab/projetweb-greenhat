<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../projetweb/back/views/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../../projetweb/back/views/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../../projetweb/back/views/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="../../projetweb/back/views/index.html">
                    <b class="logo-abbr"><img src="../../projetweb/back/views/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="../../projetweb/back/views/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="../../projetweb/back/views/images/logo-text.png" alt="">                    </span>                </a>            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge gradient-1 badge-pill badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../../projetweb/back/views/images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../../projetweb/back/views/images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../../projetweb/back/views/images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="../../projetweb/back/views/images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2 badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span>                                                </div>
                                            </a>                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>                                                </div>
                                            </a>                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>                                                </div>
                                            </a>                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span>                                                </div>
                                            </a>                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="../../projetweb/back/views/images/user/1.png" height="40" width="40" alt="">                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="../../projetweb/back/views/app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>                                        </li>
                                        <li>
                                            <a href="../../projetweb/back/views/email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>                                        </li>
                                        
                                        <hr class="my-2">
                                        <li>
                                            <a href="../../projetweb/back/views/page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>                                        </li>
                                        <li><a href="../../projetweb/back/views/page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/index.html">Home 1</a></li>
                            <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/layout-blank.html">Blank</a></li>
                            <li><a href="../../projetweb/back/views/layout-one-column.html">One Column</a></li>
                            <li><a href="../../projetweb/back/views/layout-two-column.html">Two column</a></li>
                            <li><a href="../../projetweb/back/views/layout-compact-nav.html">Compact Nav</a></li>
                            <li><a href="../../projetweb/back/views/layout-vertical.html">Vertical</a></li>
                            <li><a href="../../projetweb/back/views/layout-horizontal.html">Horizontal</a></li>
                            <li><a href="../../projetweb/back/views/layout-boxed.html">Boxed</a></li>
                            <li><a href="../../projetweb/back/views/layout-wide.html">Wide</a></li>
                            
                            
                            <li><a href="../../projetweb/back/views/layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="../../projetweb/back/views/layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Email</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/email-inbox.html">Inbox</a></li>
                            <li><a href="../../projetweb/back/views/email-read.html">Read</a></li>
                            <li><a href="../../projetweb/back/views/email-compose.html">Compose</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Apps</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/app-profile.html">Profile</a></li>
                            <li><a href="../../projetweb/back/views/app-calender.html">Calender</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Charts</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/chart-flot.html">Flot</a></li>
                            <li><a href="../../projetweb/back/views/chart-morris.html">Morris</a></li>
                            <li><a href="../../projetweb/back/views/chart-chartjs.html">Chartjs</a></li>
                            <li><a href="../../projetweb/back/views/chart-chartist.html">Chartist</a></li>
                            <li><a href="../../projetweb/back/views/chart-sparkline.html">Sparkline</a></li>
                            <li><a href="../../projetweb/back/views/chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">UI Components</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">UI Components</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/ui-accordion.html">Accordion</a></li>
                            <li><a href="../../projetweb/back/views/ui-alert.html">Alert</a></li>
                            <li><a href="../../projetweb/back/views/ui-badge.html">Badge</a></li>
                            <li><a href="../../projetweb/back/views/ui-button.html">Button</a></li>
                            <li><a href="../../projetweb/back/views/ui-button-group.html">Button Group</a></li>
                            <li><a href="../../projetweb/back/views/ui-cards.html">Cards</a></li>
                            <li><a href="../../projetweb/back/views/ui-carousel.html">Carousel</a></li>
                            <li><a href="../../projetweb/back/views/ui-dropdown.html">Dropdown</a></li>
                            <li><a href="../../projetweb/back/views/ui-list-group.html">List Group</a></li>
                            <li><a href="../../projetweb/back/views/ui-media-object.html">Media Object</a></li>
                            <li><a href="../../projetweb/back/views/ui-modal.html">Modal</a></li>
                            <li><a href="../../projetweb/back/views/ui-pagination.html">Pagination</a></li>
                            <li><a href="../../projetweb/back/views/ui-popover.html">Popover</a></li>
                            <li><a href="../../projetweb/back/views/ui-progressbar.html">Progressbar</a></li>
                            <li><a href="../../projetweb/back/views/ui-tab.html">Tab</a></li>
                            <li><a href="../../projetweb/back/views/ui-typography.html">Typography</a></li>
                        <!-- </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-layers menu-icon"></i><span class="nav-text">Components</span>
                        </a>
                        <ul aria-expanded="false"> -->
                            <li><a href="../../projetweb/back/views/uc-nestedable.html">Nestedable</a></li>
                            <li><a href="../../projetweb/back/views/uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="../../projetweb/back/views/uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="../../projetweb/back/views/uc-toastr.html">Toastr</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../projetweb/back/views/widgets.html" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>                        </a>                    </li>
                    <li class="nav-label">Forms</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Forms</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/form-basic.html">Basic Form</a></li>
                            <li><a href="../../projetweb/back/views/form-validation.html">Form Validation</a></li>
                            <li><a href="../../projetweb/back/views/form-step.html">Step Form</a></li>
                            <li><a href="../../projetweb/back/views/form-editor.html">Editor</a></li>
                            <li><a href="../../projetweb/back/views/form-picker.html">Picker</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Onglet Produits</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Onglet Produits</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/table-basic.html" aria-expanded="false">Categories</a></li>
                            <li><a href="../../projetweb/back/views/table-datatable.html" aria-expanded="false">Produits</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Pages</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">Pages</span>                        </a>
                        <ul aria-expanded="false">
                            <li><a href="../../projetweb/back/views/page-login.html">Login</a></li>
                            <li><a href="../../projetweb/back/views/page-register.html">Register</a></li>
                            <li><a href="../../projetweb/back/views/page-lock.html">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="../../projetweb/back/views/page-error-404.html">Error 404</a></li>
                                    <li><a href="../../projetweb/back/views/page-error-403.html">Error 403</a></li>
                                    <li><a href="../../projetweb/back/views/page-error-400.html">Error 400</a></li>
                                    <li><a href="../../projetweb/back/views/page-error-500.html">Error 500</a></li>
                                    <li><a href="../../projetweb/back/views/page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Produit</h4>
                                <div class="table-responsive">
								<p align="center"><a href="../../projetweb/back/views/ajoutproduit.html">
<button > Ajouter Produit</button></a></p>
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Identifiant</th>
                                                <th>Quantite</th>
                                                <th>Description</th>
                                                <th>Prix</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
										     <?PHP
                    include "../core/produitC.php";
                    $produit1C=new ProduitC();
                    $listeproduits=$produit1C->afficherproduits();
                    ?>
                    <?PHP
foreach($listeproduits as $row){
  ?>
  <tr>
  <td><?PHP echo $row['idP'] ; ?></td>
  <td><?PHP echo $row['nomP']; ?></td>
  <td><?PHP echo $row['quantiteP']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
  <td><?PHP echo $row['prix']; ?></td>
  <td><a><img class="" src="images\produit\<?php echo $row['image'];?>" style="width: 100px; height:100px;"></a></td>
  <td><form method="POST" action="../../projetweb/back/views/supprimerproduit.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['idP']; ?>" name="idP">
  </form>  </td>
  <td><a href="../../projetweb/back/views/form.php?idP=<?PHP echo $row['idP']; ?>">
  Modifier</a></td>
  </tr>
  <?PHP
}
?>


                                            <tr>
                                                <th>Name</th>
                                                <th>Id</th>
                                                <th>Quantite</th>
                                                <th>Desccription</th>
                                                <th>Prix </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			
            <!-- #/ container -->
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../../projetweb/back/views/plugins/common/common.min.js"></script>
    <script src="../../projetweb/back/views/js/custom.min.js"></script>
    <script src="../../projetweb/back/views/js/settings.js"></script>
    <script src="../../projetweb/back/views/js/gleek.js"></script>
    <script src="../../projetweb/back/views/js/styleSwitcher.js"></script>

    <script src="../../projetweb/back/views/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../../projetweb/back/views/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../../projetweb/back/views/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>