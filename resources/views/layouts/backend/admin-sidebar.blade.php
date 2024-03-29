<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                <!-- <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a> -->
                <a class="nav-link admin-sidebar" href="<?php echo url('admin/Maincontents/index')?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Main Contents
                </a>
                <a class="nav-link admin-sidebar" href="<?php echo url('admin/Home/index')?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                    HOME
                </a>
                <a class="nav-link admin-sidebar" href="<?php echo url('admin/Aboutus/index')?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-eject"></i></div>
                    ABOUT US
                </a>

                <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    SERVICES
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            MISSION
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">OUR MISSION</a>
                            </nav>
                        </div>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">OUR CLIENTS</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            VISION
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">OUR CLIENTS</a>
                            </nav>
                        </div>
                    </nav>
                </div> -->

                <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts-service" aria-expanded="false" aria-controls="collapseLayouts-service">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    SERVICES
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts-service" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Services/index')?>">OUR SERVICES</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Mission/index')?>">OUR MISION</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Vision/index')?>">OUR VISION</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Client/index')?>">OUR CLIENTS</a>
                    </nav>
                </div>

                <!-- <div class="sb-sidenav-menu-heading">GALLERY</div> -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts-gallery" aria-expanded="false" aria-controls="collapseLayouts-gallery">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    GALLERY
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts-gallery" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Galleries/index')?>">GALLERY</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Maingalleries/index')?>">Main GALLERY</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Subgalleries/index')?>">SUB GALLERY</a>
                    </nav>
                </div>

                <!-- <div class="sb-sidenav-menu-heading">NEWS</div> -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper"></i></div>
                    NEWS
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/News/index')?>">News Content</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Category/index')?>">News Category</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/NewsItem/index')?>">News Item</a>
                    </nav>
                </div>
                
                <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                <a class="nav-link admin-sidebar" href="#">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days"></i></div>
                    EVENTS
                </a>
               
                <a class="nav-link admin-sidebar" href="<?php echo url('admin/Contactus/index')?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                    CONTACT US
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts-user" aria-expanded="false" aria-controls="collapseLayouts-user">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                    USER MANAGEMENT
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts-user" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Users/index')?>">Users</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Roles/index')?>">Role</a>
                    </nav>
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link admin-sidebar" href="<?php echo url('admin/Permissions/index')?>">Permission</a>
                    </nav>
                </div>
            </div>
        </div>
        <!-- <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div> -->
    </nav>
</div>