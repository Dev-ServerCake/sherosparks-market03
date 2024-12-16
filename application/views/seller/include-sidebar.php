<?php $settings = get_settings('system_settings', true); ?>
<aside class="main-sidebar elevation-2 sidebar-dark-indigo">
    <!-- Brand Logo -->

    <!-- Raghu     -->
    <!-- Raghu style tag -->
     <div class="raghu-brand-logo" style="background-color: white; padding-left: 20%; padding-top: 10px; padding-bottom: 10px;">
    <a href="<?= base_url('seller/home') ?>">
    
    <!-- <img src="<?= base_url() . get_settings('favicon') ?>" alt="<?= $settings['app_name']; ?>" title="<?= $settings['app_name']; ?>" class="brand-image">
        <span class="brand-text font-weight-light small"><?= $settings['app_name']; ?></span> -->
        <img src="<?= base_url('uploads/seller/'. 'Seller page logo.png')?>" style="width: 50%;">
    </a>
    </div>

    <!-- Sidebar -->
    <!-- Raghu style tag -->
    <div class="sidebar" style="background-color: #260b19;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="<?= base_url('seller/home') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home" style="color: white !important;"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                <!-- Raghu -->
                <style>
                            
                            .nav-link.active {
                                background-color: #ef519d !important;
                            }

                            
                </style>
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart text-warning" style="color: white !important;"></i>
                        <p>
                            Orders
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('seller/orders/') ?>" class="nav-link">
                                <i class="fa fa-shopping-cart nav-icon" style="color: white !important;"></i>
                                <p>Orders</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/orders/order-tracking') ?>" class="nav-link">
                                <i class="fa fa-map-marker-alt nav-icon" style="color: white !important;"></i>
                                <p>Order Tracking</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/category/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-bullseye text-success" style="color: white !important;"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/brand/') ?>" class="nav-link">
                        <i class="fab fa-adversal nav-icon text-primary" style="color: white !important;"></i>
                        <p>Brands</p>
                    </a>
                </li>


                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link menu-open">
                        <i class="nav-icon fas fa-calculator" style="color: white !important;"></i>
                        <p>
                        Point Of Sale
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?= base_url('seller/point_of_sale/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-calculator" style="color: white !important;"></i>
                                <p>Point Of Sale</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/point_of_sale_table') ?>" class="nav-link">
                                <i class="fas fa-sliders-h nav-icon" style="color: white !important;"></i>
                                <p>Point Of Sale Orders</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('seller/manage_stock') ?>" class="nav-link">
                        <i class="nav-icon fa fa-cube text-success" style="color: white !important;"></i>
                        <p>
                            Manage Stock
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('seller/chat') ?>" class="nav-link">
                        <i class="nav-icon 	far fa-comments text-warning" style="color: white !important;"></i>
                        <p>
                            Chat
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link menu-open">
                        <i class="nav-icon fas fa-cubes text-danger" style="color: white !important;"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?= base_url('seller/attribute_set/') ?>" class="nav-link">
                                <i class="fa fa-cogs nav-icon" style="color: white !important;"></i>
                                <p>Attribute Sets</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/attributes/') ?>" class="nav-link">
                                <i class="fas fa-sliders-h nav-icon" style="color: white !important;"></i>
                                <p>Attributes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/attribute_value/') ?>" class="nav-link">
                                <i class="fas fa-filter nav-icon" style="color: white !important;"></i>
                                <p>Attribute Values</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?= base_url('seller/taxes/') ?>" class="nav-link">
                                <i class="fas fa-percentage nav-icon" style="color: white !important;"></i>
                                <p>Tax</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/product/create-product') ?>" class="nav-link">
                                <i class="fas fa-plus-square nav-icon" style="color: white !important;"></i>
                                <p>Add Products</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/product/bulk-upload') ?>" class="nav-link">
                                <i class="fas fa-upload nav-icon" style="color: white !important;"></i>
                                <p>Bulk upload</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/product/') ?>" class="nav-link">
                                <i class="fas fa-boxes nav-icon" style="color: white !important;"></i>
                                <p>Manage Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/product_faqs/') ?>" class="nav-link">
                                <i class="fas fa-question-circle nav-icon" style="color: white !important;"></i>
                                <p>Product FAQs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/media/') ?>" class="nav-link">
                        <i class="nav-icon fas fa-icons text-success" style="color: white !important;"></i>
                        <p>
                            Media
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/transaction/wallet-transactions') ?>" class="nav-link">
                        <i class="fa fa-rupee-sign nav-icon text-warning" style="color: white !important;"></i>
                        <p>Wallet Transactions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('seller/payment-request/withdrawal-requests') ?>" class="nav-link">
                        <i class="nav-icon fas fa-money-bill-wave text-danger" style="color: white !important;"></i>
                        <p> Withdrawal Requests</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="<?= base_url('seller/Pickup_location/manage_pickup_locations') ?>" class="nav-link">
                        <i class="nav-icon fas fa-shipping-fast text-success" style="color: white !important;"></i>
                        <p>
                            Pickup Location
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-map-marked-alt text-info" style="color: white !important;"></i>
                        <p>
                            Location
                            <i class="right fas fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage-zipcodes') ?>" class="nav-link">
                                <i class="fa fa-map-pin nav-icon " style="color: white !important;"></i>
                                <p>Zipcodes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage-cities') ?>" class="nav-link">
                                <i class="fa fa-location-arrow nav-icon " style="color: white !important;"></i>
                                <p>City</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage-areas') ?>" class="nav-link">
                                <i class="fas fa-street-view nav-icon " style="color: white !important;"></i>
                                <p>
                                    Areas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/area/manage_countries') ?>" class="nav-link">
                                <i class="fas fa-solid fa-globe nav-icon" style="color: white !important;"></i>
                                <p>
                                    Countries
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-pie nav-icon text-primary" style="color: white !important;"></i>
                        <p>Reports
                            <i class="right fas fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('seller/sales-report') ?>" class="nav-link">
                                <i class="fa fa-chart-line nav-icon" style="color: white !important;"></i>
                                <p>Sales Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('seller/sales-inventory') ?>" class="nav-link">
                                <i class="fa fa-chart-line nav-icon " style="color: white !important;"></i>
                                <p>Sale Inventory Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>