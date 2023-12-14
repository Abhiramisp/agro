<body class="sb-nav-fixed bg-white">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">AgriConnect</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php/admin">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Home
                        </a>
                        <!-- Farmers -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Farmers
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_farmerList">View
                                    details</a>
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_addFarmer">Add
                                    details</a>
                                <a class="nav-link"
                                    href="<?php echo base_url(); ?>index.php/Admin_assignFarmer">Assign Task</a>
                            </nav>
                        </div>
                        <!-- buyers -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            buyers
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_buyerList">View
                                    details</a>
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_addBuyer">Add
                                    details</a>
                            </nav>
                        </div>
                        <!-- freelancer -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Freelancer
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapse" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_freelanceList">View
                                    details</a>
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_addFreelancer">Add
                                    details</a>
                                <a class="nav-link"
                                    href="<?php echo base_url(); ?>index.php/Admin_assignFreelancer">Assign Task</a>
                            </nav>
                        </div>
                        <!-- transport -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Transporter
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayout" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_transportList">View
                                    details</a>
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_addTransport">Add
                                    details</a>
                                <a class="nav-link"
                                    href="<?php echo base_url(); ?>index.php/Admin_assignTransport">Assign Task</a>
                            </nav>
                        </div>
                        <!-- transaction Detials -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collLayout"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                            Transaction
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collLayout" aria-labelledby="headingOne"Admin_transactionAmountPending
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="Admin_transactionHistory">Transaction Detials</a>
                                <a class="nav-link" href="Admin_transactionPending">Pending Transaction</a>
                                <a class="nav-link" href="Admin_transactionComplete">Complete Transaction</a>
                                <a class="nav-link" href="Admin_amountTransaction">Transaction Amount</a>
                            </nav>
                        </div>
                        <!-- Product -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collLay"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-wheat-awn"></i></div>
                            Product
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collLay" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_addProduct">Add
                                    Product</a>
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_productList">Edit
                                    Product</a>
                            </nav>
                        </div>

                        <!-- Loan -->
                        <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#loan"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-sack-dollar"></i></div>
                            Loan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>

                        </a>
                        <div class="collapse" id="loan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url(); ?>index.php/Admin_viewLoanrequest">Loan
                                    Request</a>
                                <a class="nav-link"
                                    href="<?php echo base_url(); ?>index.php/Admin_viewApprovedloan">Approved Loan</a>
                            </nav>
                        </div>

                        <!-- sales detials -->
                        <a class="nav-link collapsed" href="Admin_salesReport" aria-expanded="false"
                            aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                            Sales Detials
                        </a>


                    </div>
                </div>

        </div>