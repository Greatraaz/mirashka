<div class="vertical-menu">
    <div class="h-100">
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"><?= $site_title ?></li>
                <li>
                    <a href="<?= base_url(); ?>admin" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ti-package"></i>
                  <span>Franchise Master</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?=base_url();?>admin/franchise">Franchise Outlets</a></li>
                    <li><a href="<?=base_url();?>admin/roles">Roles</a></li>
                    <li><a href="<?=base_url();?>admin/roles/permissions">Permissions</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ti-package"></i>
                  <span>Admin Staff</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?=base_url();?>admin/Staff">Staff</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ti-package"></i>
                  <span>Products</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?=base_url();?>admin/category">Product Categories</a></li>
                    <li><a href="<?=base_url();?>admin/products">All Products</a></li>
                    <li><a href="<?=base_url();?>admin/orders/neworders">All Orders</a></li>
                    <li><a href="<?=base_url();?>admin/products/invoices">Order Invoices</a></li>
                    <li><a href="<?=base_url();?>admin/product_for_warranty">Product For Warranty</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ti-package"></i>
                  <span>Tickets & Support</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?=base_url();?>admin/tickets/issue">Ticket Issue</a></li>
                    <li><a href="<?=base_url();?>admin/tickets/newTickets">New Tickets</a></li>
                    <li><a href="<?=base_url();?>admin/tickets/assignedtickets">Assigned Tickets</a></li>
                    <li><a href="<?=base_url();?>admin/tickets/closedtickets">Closed Tickets</a></li>
                    <li><a href="<?=base_url();?>admin/tickets/chatsupport">Chat Support</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="ti-package"></i>
                  <span>Schemes</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                    <li><a href="<?=base_url();?>admin/schemes">Schemes (Coupon)</a></li>
                    <li><a href="<?=base_url();?>admin/schemes_offers">Offers (Banner)</a></li>
                  </ul>
                </li>                    
            </ul>
        </div>
    </div>
</div>
