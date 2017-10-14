<!DOCTYPE html>
<html>
<head>
  @include('admin.partial.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    @include('admin.partial.navigasi')
  </header>
  <aside class="main-sidebar">
    @include('admin.partial.sidebar')
  </aside>
  <div class="content-wrapper">
    @include('admin.partial.content-header')
    <section class="content">
      @yield('content')
    </section>
  </div>

  <footer class="main-footer">
    @include('admin.partial.footer')
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    @include('admin.partial.control-sidebar')
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
  @include('admin.partial.script')
</body>
</html>
