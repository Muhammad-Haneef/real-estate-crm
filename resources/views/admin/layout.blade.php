<!DOCTYPE html>
<html lang="en">
  <head>    
    @include('admin.partials.head')
  </head>
  <body>
    <!-- loader starts  onload="startTime()"-->
    <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
        <defs></defs>
        <filter id="goo">
          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
        </filter>
      </svg>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">

      <!-- Page Header Start-->
      @include('admin.partials.header')     
      <!-- Page Header Ends-->

      <!-- Page Body Start-->
      <div class="page-body-wrapper">


        <!-- Page Sidebar Start-->
        @include('admin.partials.sidebar')
        <!-- Page Sidebar Ends-->


        <div class="page-body">
          
          @include('admin.partials.breadcrumb')

          <!-- Container-fluid starts-->
          <div class="container-fluid">
            @yield('content')
          </div>
          <!-- Container-fluid Ends-->

        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2023 by TagLix  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    

    @include('admin.partials.includejs')

    @yield('js')
  </body>
</html>