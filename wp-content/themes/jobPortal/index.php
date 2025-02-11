<!-- Call header -->
<?php get_header(); ?>
<!-- Top Bar End -->
<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
            <img src="<?= get_template_directory_uri() ?>/assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
                <h5 class="text-light">Mr. Michael Hill </h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class=""><i class="mdi mdi-power text-danger"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right align-item-center mt-2">
                        <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                    </div>
                    <h4 class="page-title mb-2"><i class="mdi mdi-monitor-dashboard mr-2"></i>Dashboard</h4>
                    <div class="">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                            <li class="breadcrumb-item active">Dashboard-3</li>
                        </ol>
                    </div>
                </div><!--end page title box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
    </div><!--end page-wrapper-img-inner-->
</div><!--end page-wrapper-img-->

<div class="page-wrapper">
    <div class="page-wrapper-inner">

        <!-- Left Sidenav -->
        <div class="left-sidenav">

            <ul class="metismenu left-sidenav-menu" id="side-nav">

                <li class="menu-title">Main</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-monitor"></i><span>Dashboards</span><span class="badge badge-danger badge-pill float-right">9+</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="index-2.html">Dashboard 2</a></li>
                        <li><a href="index-3.html">Dashboard 3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>App</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="app-chat.html"><span>Chat</span></a></li>
                        <li><a href="app-calendar.html"><span>Calendar</span></a></li>

                        <li>
                            <a href="javascript: void(0);">ECommerce <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="app-ecommerce-product.html">Product</a></li>
                                <li><a href="app-ecommerce-product-list.html">Product List</a></li>
                                <li><a href="app-ecommerce-product-detail.html">Product Detail</a></li>
                                <li><a href="app-ecommerce-cart.html">Cart</a></li>
                                <li><a href="app-ecommerce-checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li><a href="app-contact-list.html"><span>Contact List</span></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-email-variant"></i><span>Email</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Read Email</a></li>
                    </ul>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-cards-playing-outline"></i><span>UI Elements</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-progress.html">Progress</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-grid.html">Grid System</a></li>
                        <li><a href="ui-scrollspy.html">Scrollspy</a></li>
                        <li><a href="ui-spinners.html">Spinners</a></li>
                        <li><a href="ui-toasts.html">Toasts</a></li>


                        <li>
                            <a href="javascript: void(0);">Oter Components <span class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="ui-other-animation.html">Animation</a></li>
                                <li><a href="ui-other-avatar.html">Avatar</a></li>
                                <li><a href="ui-other-clipboard.html">Clip Board</a></li>
                                <li><a href="ui-other-files.html">File Meneger</a></li>
                                <li><a href="ui-other-ribbons.html">Ribbons</a></li>
                                <li><a href="ui-other-dragula.html"><span>Dragula</span></a></li>
                                <li><a href="ui-other-check-radio.html"><span>Check & Radio Buttons</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-buffer"></i><span>Advanced UI</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                        <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                        <li><a href="advanced-nestable.html">Nestable List</a></li>
                        <li><a href="advanced-ratings.html">Ratings</a></li>
                        <li><a href="advanced-highlight.html">Highlight</a></li>
                        <li><a href="advanced-session.html">Session Timeout</a></li>
                        <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-clipboard-outline"></i><span class="badge badge-info float-right">8</span><span>Forms</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="forms-elements.html">Basic Elements</a></li>
                        <li><a href="forms-advanced.html">Advance Elements</a></li>
                        <li><a href="forms-validation.html">Validation</a></li>
                        <li><a href="forms-wizard.html">Wizard</a></li>
                        <li><a href="forms-editors.html">Editors</a></li>
                        <li><a href="forms-repeater.html">Repeater</a></li>
                        <li><a href="forms-x-editable.html">X Editable</a></li>
                        <li><a href="forms-uploads.html">File Upload</a></li>
                        <li><a href="forms-img-crop.html">Image Crop</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-poll"></i><span>Charts</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="charts-apex.html">Apex</a></li>
                        <li><a href="charts-morris.html">Morris</a></li>
                        <li><a href="charts-chartist.html">Chartist</a></li>
                        <li><a href="charts-flot.html">Flot</a></li>
                        <li><a href="charts-peity.html">Peity</a></li>
                        <li><a href="charts-chartjs.html">Chartjs</a></li>
                        <li><a href="charts-sparkline.html">Sparkline</a></li>
                        <li><a href="charts-knob.html">Jquery Knob</a></li>
                        <li><a href="charts-justgage.html">JustGage</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-format-list-bulleted-type"></i><span>Tables</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic</a></li>
                        <li><a href="tables-datatable.html">Datatables</a></li>
                        <li><a href="tables-responsive.html">Responsive</a></li>
                        <li><a href="tables-footable.html">Footable</a></li>
                        <li><a href="tables-jsgrid.html">Jsgrid</a></li>
                        <li><a href="tables-editable.html">Editable</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-diamond-stone"></i><span>Icons</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-fontawesome.html">Font awesome</a></li>
                        <li><a href="icons-themify.html">Themify</a></li>
                        <li><a href="icons-typicons.html">Typicons</a></li>
                    </ul>
                </li>

                <li class="menu-title">More</li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-map"></i><span>Maps</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-lock-outline"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="auth-login.html">Login</a></li>
                        <li><a href="auth-register.html">Register</a></li>
                        <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                        <li><a href="auth-404.html">Error 404</a></li>
                        <li><a href="auth-500.html">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-book-open-page-variant"></i><span>Pages</span><span class="badge badge-success float-right">Hot</span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="page-tour.html">Tour</a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>
                        <li><a href="page-invoice.html">Invoice</a></li>
                        <li><a href="page-treeview.html">Treeview</a></li>
                        <li><a href="page-profile.html">Profile</a></li>
                        <li><a href="page-starter.html">Starter Page</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-blogs.html"><span>Blogs</span></a></li>
                        <li><a href="page-faq.html">FAQs</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);"><i class="mdi mdi-contact-mail"></i><span>Email Templates</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                        <li><a href="email-templates-alert.html">Alert Email</a></li>
                        <li><a href="email-templates-billing.html">Billing Email</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- end left-sidenav-->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="dripicons-user-group font-24 text-secondary"></i>
                                </div>
                                <span class="badge badge-danger">Visits</span>
                                <h3 class="font-weight-bold">24k</h3>
                                <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>Up From Yesterday</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="dripicons-cart  font-20 text-secondary"></i>
                                </div>
                                <span class="badge badge-info">New Orders</span>
                                <h3 class="font-weight-bold">10k</h3>
                                <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Up From Last Week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="dripicons-jewel font-20 text-secondary"></i>
                                </div>
                                <span class="badge badge-warning">Return Order</span>
                                <h3 class="font-weight-bold">8400</h3>
                                <p class="mb-0 text-muted text-truncate"><span class="text-danger"><i class="mdi mdi-trending-down"></i>3%</span> Down From Last Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="dripicons-wallet font-20 text-secondary"></i>
                                </div>
                                <span class="badge badge-success">Revenue</span>
                                <h3 class="font-weight-bold">$85000</h3>
                                <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>10.5%</span> Up From Last Week</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Revenue</h4>
                                <div class="apexchart-wrapper chart-demo">
                                    <div id="e-dash1" class="chart-gutters"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-0">Total Orders Reports</h4>
                            </div>
                            <div class="card-body track-report">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="icon-info">
                                            <i class="dripicons-cart bg-soft-success"></i>
                                        </div>
                                        <h3>1845</h3>
                                        <p class="mb-0 font-13 text-muted">Total Orders</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon-info">
                                            <i class="dripicons-box bg-soft-warning"></i>
                                        </div>
                                        <h3>1545</h3>
                                        <p class="mb-0 font-13 text-muted">Shipping</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon-info">
                                            <i class="dripicons-checkmark bg-soft-pink"></i>
                                        </div>
                                        <h3>300</h3>
                                        <p class="mb-0 font-13 text-muted">Delivered</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ol class="c-progress-steps">
                                    <li class="c-progress-steps__step  done">Packing</li>
                                    <li class="c-progress-steps__step  done">Shipping</li>
                                    <li class="c-progress-steps__step  current">On the Way</li>
                                    <li class="c-progress-steps__step">Delivered</li>
                                </ol>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="card mb-0 shadow-none">
                                        <div class="" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-soft-primary btn-lg" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Tracking Report<i class="mdi mdi-gesture-double-tap font-20 ml-1"></i>
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="">
                                                <div class="tracking-timeline">
                                                    <ul class="timeline mt-4">
                                                        <li>
                                                            <p class="timeline-date">4 March 2019</p>
                                                            <div class="timeline-content">
                                                                <div class="track-info">
                                                                    <div class="text-muted float-right">
                                                                        <p class="mb-1">5:15PM</p>
                                                                        <span>T-No:1254326541253</span>
                                                                    </div>
                                                                    <h5 class="mt-0 mb-1">Delivered </h5>
                                                                    <p class="mb-0">San Francisco, California</p>
                                                                </div>
                                                                <div class="track-info">
                                                                    <div class="text-muted float-right">
                                                                        <p class="mb-1">9:10AM</p>
                                                                        <span>T-No:3521486514458</span>
                                                                    </div>
                                                                    <h5 class="mt-0 mb-1">Delivered </h5>
                                                                    <p class="mb-0">Tel Aviv, Israel</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <p class="timeline-date">3 March 2019</p>
                                                            <div class="timeline-content">
                                                                <div class="track-info">
                                                                    <div class="text-muted float-right">
                                                                        <p class="mb-1">4:35PM</p>
                                                                        <span>T-No:6574148212355</span>
                                                                    </div>
                                                                    <h5 class="mt-0 mb-1">Delivered </h5>
                                                                    <p class="mb-0">Gujarat, India</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card carousel-bg-img">
                            <div class="card-body dash-info-carousel">
                                <h4 class="mt-0 header-title">Populer Product</h4>
                                <div id="carousel_2" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="media">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/products/img-2.png" height="200" class="mr-4" alt="...">
                                                <div class="media-body align-self-center">
                                                    <span class="badge badge-primary mb-2">354 sold</span>
                                                    <h4 class="mt-0">Important Watch</h4>
                                                    <p class="text-muted mb-0">$99.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="media">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/products/img-3.png" height="200" class="mr-4" alt="...">
                                                <div class="media-body align-self-center">
                                                    <span class="badge badge-primary mb-2">654 sold</span>
                                                    <h4 class="mt-0">Wireless Headphone</h4>
                                                    <p class="text-muted mb-0">$39.00</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="media">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/products/img-1.png" height="200" class="mr-4" alt="...">
                                                <div class="media-body align-self-center">
                                                    <span class="badge badge-primary mb-2">551 sold</span>
                                                    <h4 class="mt-0">Leather Bag</h4>
                                                    <p class="text-muted mb-0">$49.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel_2" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel_2" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->


                        <div class="card overflow-hidden">
                            <div class="card-body bg-gradient3">
                                <div class="">
                                    <div class="card-icon">
                                        <i class="far fa-smile"></i>
                                    </div>
                                    <h2 class="font-weight-bold text-white">58</h2>
                                    <p class="text-white mb-0 font-16">Stores Very Good Review</p>
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body dash-info-carousel">
                                <div id="carousel_review" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <div class="media">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/flags/us_flag.jpg" class="mr-2 thumb-xs rounded-circle" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">USA Store</h6>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p class="review-data mb-0">4.8<span>/ 5.0</span></p>
                                                <p class="px-4 py-1 bg-soft-success d-inline-block rounded">Very Good</p>
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                </ul>
                                                <p class="mb-1 text-muted">There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by injected humour, or randomised.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="media">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/flags/spain_flag.jpg" class="mr-2 thumb-xs rounded-circle" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Spain Store</h6>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p class="review-data mb-0">4.6<span>/ 5.0</span></p>
                                                <p class="px-4 py-1 bg-soft-success d-inline-block rounded">Very Good</p>
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                </ul>
                                                <p class="mb-1 text-muted">There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by injected humour, or randomised.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item active">
                                            <div class="media">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/flags/russia_flag.jpg" class="mr-2 thumb-xs rounded-circle" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Russia Store</h6>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <p class="review-data mb-0">5.0<span>/ 5.0</span></p>
                                                <p class="px-4 py-1 bg-soft-success d-inline-block rounded">Exellent</p>
                                                <ul class="list-inline mb-1">
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                    <li class="list-inline-item mr-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                </ul>
                                                <p class="mb-1 text-muted">There are many variations of passages of Lorem Ipsum available,
                                                    but the majority have suffered alteration in some form, by injected humour, or randomised.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel_review" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel_review" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div><!--end card-body-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!-- container -->

            <footer class="footer text-center text-sm-left">
                &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
            </footer>
        </div>
        <!-- end page content -->
    </div>
    <!--end page-wrapper-inner -->
</div>

<!-- Call footer -->
<!-- end page-wrapper -->
<?php get_footer() ?>