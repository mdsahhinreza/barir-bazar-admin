<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#products" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="products" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('create.product') }}">
                        <i class="bi bi-circle"></i><span>Create Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('products') }}">
                        <i class="bi bi-circle"></i><span>Product List</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('create.category') }}">
                        <i class="bi bi-circle"></i><span>Create Category</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Category List</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#shop" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Shop</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="shop" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('create.shop') }}">
                        <i class="bi bi-circle"></i><span>Create Shop</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Shop List</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#delevery-man" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Delevery Man</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="delevery-man" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('create.delevery.boy') }}">
                        <i class="bi bi-circle"></i><span>Create Delevery Man</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Delevery Man List</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#orders" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="orders" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>New Order</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Processing Order</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Completed Order</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Create User</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>User List</span>
                    </a>
                </li>

            </ul>
        </li>

        {{-- <li class="nav-heading">Pages</li> --}}

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Report</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside>
