<ul class="menu">
    <li class="menu-item active ">
        <a href="{{ url('admin/home') }}" class=" menu-link">
            <span class="menu-label">
                <span class="menu-name">Dashboard</span>

            </span>
        </a>
    </li>
    <li class="menu-item ">
        <a href="#" class="open-dropdown menu-link">
            <span class="menu-label">
                <span class="menu-name">Manage Inventory
                    <span class="menu-arrow"></span>
                </span>
            </span>
        </a>
        <!--submenu-->
        <ul class="sub-menu">
            <li class="menu-item ">
                <a href="{{url('admin/manage-users')}}" class=' menu-link'>
                    <span class="menu-label">
                        <span class="menu-name">Inventory</span>
                    </span>
                    <span class="menu-icon">
                        <i class="icon-placeholder  mdi mdi-shape-circle-plus "></i>
                    </span>
                </a>
            </li>
        </ul>
    </li>

</ul>