 <!-- [ Sidebar Menu ] start -->
 <nav class="pc-sidebar">
     <div class="navbar-wrapper">
         <div class="m-header flex items-center py-4 px-6 h-header-height">
             <a href="{{ route('index') }}" class="b-brand flex items-center gap-3">
                 <!-- ========   Change your logo from here   ============ -->
                 <img src="{{asset('assets/images/logo-white.svg')}}" class="img-fluid logo logo-lg" alt="logo" />
                 <img src="{{asset('assets/images/favicon.svg')}}" class="img-fluid logo logo-sm" alt="logo" />
             </a>
         </div>
         <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
             <ul class="pc-navbar">

                 <li class="pc-item pc-caption">
                     <label>Masters</label>
                 </li>
                 <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="user-check"></i>
                         </span><span class="pc-mtext">Accounts</span><span class="pc-arrow"><i
                                 class="ti ti-chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                         <li class="pc-item"><a class="pc-link" href="{{ route('customer.list') }}">Customer</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Supplier</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Bank</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Chart Of Accounts</a></li>
                     </ul>
                 </li>

                 <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="box"></i>
                         </span><span class="pc-mtext">Stocks</span><span class="pc-arrow"><i
                                 class="ti ti-chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                         <li class="pc-item"><a class="pc-link" href="#!">Category</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">SubCategory</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Stocks</a></li>
                     </ul>
                 </li>
                 
                 <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="grid"></i>
                         </span><span class="pc-mtext">Common</span><span class="pc-arrow"><i
                                 class="ti ti-chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                         <li class="pc-item"><a class="pc-link" href="#!">VAT Master</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Unit Master</a></li>
                     </ul>
                 </li>

                 <li class="pc-item pc-caption">
                     <label>Documents</label>
                     <i data-feather="feather"></i>
                 </li>
               
                 <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="airplay"></i>
                         </span><span class="pc-mtext">Sales</span><span class="pc-arrow"><i
                                 class="ti ti-chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                         <li class="pc-item"><a class="pc-link" href="#!">Credit Sales</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Cash Sales</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Credit Sale Return</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Cash Sale Return</a></li>
                     </ul>
                 </li>

                 <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="shopping-cart"></i>
                         </span><span class="pc-mtext">Purchase</span><span class="pc-arrow"><i
                                 class="ti ti-chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                         <li class="pc-item"><a class="pc-link" href="#!">Credit Purchase</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Cash Purchase</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Credit Purchase Return</a></li>
                         <li class="pc-item"><a class="pc-link" href="#!">Cash Purchase Return</a></li>
                     </ul>
                 </li>

                 <li class="pc-item pc-hasmenu">
                     <a href="../pages/login-v1.html" class="pc-link" target="_blank">
                         <span class="pc-micon"> <i data-feather="layers"></i></span>
                         <span class="pc-mtext">Receipt</span>
                     </a>
                 </li>

                 <li class="pc-item pc-hasmenu">
                     <a href="../pages/login-v1.html" class="pc-link" target="_blank">
                         <span class="pc-micon"> <i data-feather="codepen"></i></span>
                         <span class="pc-mtext">Payment</span>
                     </a>
                 </li>

                 <li class="pc-item pc-caption">
                     <label>Pages</label>
                     <i data-feather="monitor"></i>
                 </li>
                 <li class="pc-item pc-hasmenu">
                     <a href="../pages/login-v1.html" class="pc-link" target="_blank">
                         <span class="pc-micon"> <i data-feather="lock"></i></span>
                         <span class="pc-mtext">Login</span>
                     </a>
                 </li>
                 <li class="pc-item pc-hasmenu">
                     <a href="../pages/register-v1.html" class="pc-link" target="_blank">
                         <span class="pc-micon"> <i data-feather="user-plus"></i></span>
                         <span class="pc-mtext">Register</span>
                     </a>
                 </li>
                 <li class="pc-item pc-caption">
                     <label>Other</label>
                     <i data-feather="sidebar"></i>
                 </li>
                 <li class="pc-item pc-hasmenu">
                     <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i>
                         </span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i
                                 class="ti ti-chevron-right"></i></span></a>
                     <ul class="pc-submenu">
                         <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                         <li class="pc-item pc-hasmenu">
                             <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i
                                         class="ti ti-chevron-right"></i></span></a>
                             <ul class="pc-submenu">
                                 <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                 <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                 <li class="pc-item pc-hasmenu">
                                     <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i
                                                 class="ti ti-chevron-right"></i></span></a>
                                     <ul class="pc-submenu">
                                         <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                         <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                         <li class="pc-item pc-hasmenu">
                             <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i
                                         class="ti ti-chevron-right"></i></span></a>
                             <ul class="pc-submenu">
                                 <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                 <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                 <li class="pc-item pc-hasmenu">
                                     <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i
                                                 class="ti ti-chevron-right"></i></span></a>
                                     <ul class="pc-submenu">
                                         <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                                         <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
                 <li class="pc-item">
                     <a href="../other/sample-page.html" class="pc-link">
                         <span class="pc-micon">
                             <i data-feather="sidebar"></i>
                         </span>
                         <span class="pc-mtext">Sample page</span>
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- [ Sidebar Menu ] end -->
