<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
             Wish Ecommerce
        </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}">
          <a class="nav-link" href="{{ url("/dashboard") }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('users') ? 'active':'' }}">
          <a class="nav-link" href="#">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('addcategory') ? 'active':'' }}">
            <a class="nav-link" href="{{ url("addcategory") }}">
              <i class="material-icons">add</i>
              <p>Add Category</p>
            </a>
          </li>
        <li class="nav-item {{ Request::is('categories') ? 'active':'' }} ">
          <a class="nav-link" href="{{ url("categories") }}">
            <i class="material-icons">content_paste</i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('addproduct') ? 'active':'' }}">
            <a class="nav-link" href="{{ url("addproduct") }}">
              <i class="material-icons">add</i>
              <p>Add Product</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('products') ? 'active':'' }} ">
            <a class="nav-link" href="{{ url("products") }}">
              <i class="material-icons">content_paste</i>
              <p>Products</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('orders') ? 'active':'' }} ">
            <a class="nav-link" href="{{ url("orders") }}">
              <i class="material-icons">content_paste</i>
              <p>Orders</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('users') ? 'active':'' }} ">
            <a class="nav-link" href="{{ url("users") }}">
              <i class="material-icons">group</i>
              <p>Users</p>
            </a>
          </li>
      </ul>
    </div>
  </div>
