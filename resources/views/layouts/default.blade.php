<!DOCTYPE html>
<html lang="en">
 <!-- [Head] start -->
 @include('layouts.header')
  <!-- [Head] end -->
  
  <!-- [Body] Start -->
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
         @include('layouts.menubar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
             @include('layouts.topbar')
            <!-- Navbar End -->

                       @yield('page')         

            <!-- Footer Start -->
             @include('layouts.footer') 
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
          @include('layouts.backtotop') 
    </div>

    <!-- JavaScript Libraries -->
    @include('layouts.footer_js') 
</body>
  <!-- [Body] end -->

</html>



{{-- 
<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
  <!-- [Head] start -->
 @include('layouts.header')
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
  <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
    <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
 @include('layouts.menubar')
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
 @include('layouts.topbar')
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
           @yield('page')         
           
      </div>
    </div>
    <!-- [ Main Content ] end -->
       @include('layouts.footer') 
 
    <!-- Required Js -->
    @include('layouts.footer_js') 

    @include('layouts.footer_script') 
     
    

  </body>
  <!-- [Body] end -->
</html>

 --}}
