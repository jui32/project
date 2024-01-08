<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion no-print-sidebar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard.home')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Restoran</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfacet
            </div>

             <!--Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}"  data-target="#collapseTwo"
                     aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Categories<span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('Item.list')}}"  data-target="#collapseTwo"
                     aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Items<span>
                </a>
            </li>
        
            <li class="nav-item">
                <a class="nav-link" href="{{route('order.list')}}"  data-target="#collapseTwo"
                     aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Orders<span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('Customer.list')}}"  data-target="#collapseTwo"
                     aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Customers<span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('users.list')}}"  data-target="#collapseTwo"
                     aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Users<span>
                </a>
            </li>

            
               <!-- DeliveryMan -->

            <li class="nav-item">
                <a class="nav-link" href="{{route('Delivery.list')}}"  data-target="#collapseTwo"
                     aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Delivery man<span>
                </a>
            </li>



           




           






            









        
           

         
            
        </ul>

<style>
@media print {
    .no-print-sidebar {
        display: none;
    }
}
</style>