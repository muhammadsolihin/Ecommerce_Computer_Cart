    <section class="sidebar"> 
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('assetadmin')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">
          HEADER
        </li>
        <li class="active">
          <a href="{{route('home.index')}}">
            <i class="fa fa-link"></i> 
              <span>Home</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/product')}}">
            <i class="fa fa-link"></i> 
              <span>Product</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/category')}}">
            <i class="fa fa-link"></i> 
              <span>Category</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/brand')}}">
            <i class="fa fa-link"></i> 
              <span>Brand</span>
          </a>
        </li>
        <li>
          <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              <i class="fa fa-link"></i> <span>Logout</span>
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </section>