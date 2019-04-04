 

<div class="sidebar" data-color="purple" data-background-color="white" data-image="admin/assets/img/sidebar-1.jpg">


 <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item @if(request()->url() ==route('admin.panel-admin')) {{'active'}} @endif">
            <a class="nav-link "  href="{{route('admin.panel-admin')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
         
            </a>
          </li>
 

 
          <li class="nav-item @if(request()->url() ==route('admin.product.index')) {{'active'}} @endif">
       

        <a class="nav-link" href="{{route('admin.product.index')}}">
              <i class="material-icons">label</i>
              <p>Products</p>
            </a>
          </li>

          <li class="nav-item
           @if(request()->url() ==route('admin.category.index')) {{'active'}} @endif" >


            <a class="nav-link" href="{{route('admin.category.index')}}">
              <i class="material-icons">person</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">bubble_chart</i>
              <p>Exports</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">location_ons</i>
              <p>TVC</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">location_ons</i>
              <p>Ingredients</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">language</i>
              <p>Carrer</p>
            </a>
          </li>


              <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">language</i>
              <p>Images</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">unarchive</i>
              <p>Contact</p>
            </a>
          </li>
        </ul>
      </div>


