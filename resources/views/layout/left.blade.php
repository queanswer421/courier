 <!-- ========== Left Sidebar Start ========== -->
 <div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <ul>
            <li class="has_sub">
                <a href={{route('couriers.index')}} class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-view-dashboard"></i><span> Moje przesyłki </span> </a>
            </li>

            
            <li class="has_sub">
                <a href={{route('couriers.create')}} class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-view-dashboard"></i><span> Dodaj przesyłke </span> </a>
            </li>


            <li class="has_sub">
                <a href={{route('couriers.search')}} class="waves-effect"><span class="badge badge-pill badge-primary float-right"></span><i class="zmdi zmdi-view-dashboard"></i><span> Szukaj przesyłki </span> </a>
            </li>
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Status</span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="courier.php">Couriers</a></li>
                    <li><a href="courierpickup.php">Courier Pickup</a></li>
                    <li><a href="shipped.php">Shipped</a></li>
                    <li><a href="intransit.php">Intransit</a></li>
                        <li><a href="arriveddes.php">Arrived at Destination</a></li>
                        <li><a href="outfordelivery.php">Out for Delivery</a></li>
                        <li><a href="delivered.php">Delivered</a></li>
                                                    </ul>
            </li>
        </ul>
            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>

</div>