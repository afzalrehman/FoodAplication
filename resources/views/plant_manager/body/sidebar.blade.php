   <!--start sidebar-->
   <aside class="sidebar-wrapper" data-simplebar="true">
       <div class="sidebar-header">
           <div class="logo-icon">
               <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-img" alt="">
           </div>
           <div class="logo-name flex-grow-1">
               <h5 class="mb-0">Qasim</h5>
           </div>
           <div class="sidebar-close">
               <span class="material-icons-outlined">close</span>
           </div>
       </div>
       <div class="sidebar-nav">
           <!--navigation-->
           <ul class="metismenu" id="sidenav">
               <li>
                   <a href="{{ route('plantmanager.dashboard') }}">
                       <div class="parent-icon"><i class="material-icons-outlined">home</i>
                       </div>
                       <div class="menu-title">Dashboard</div>
                   </a>
               </li>

               <li>
                   <a href="javascript:;" class="has-arrow">
                       <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                       </div>
                       <div class="menu-title">SQF
                       </div>
                   </a>
                   <ul>
                       <li>
                           <a href="javascript:;" class="has-arrow">
                               <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                               </div>
                               <div class="menu-title">Document
                               </div>
                           </a>
                           <ul>
                               <li>
                                   <a href="widgets-data.html"><i
                                           class="material-icons-outlined">insert_drive_file</i>Form 1</a>
                               </li>
                               <li>
                                   <a href="widgets-static.html"><i
                                           class="material-icons-outlined">insert_drive_file</i>Form 2</a>
                               </li>

                           </ul>


                       </li>
                       <li>
                           <a href="javascript:;" class="has-arrow">
                               <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                               </div>
                               <div class="menu-title">Form
                               </div>
                           </a>
                           <ul>
                               <li>
                                   <a href="{{ route('plantmanager.sqf_1.index') }}"><i
                                           class="material-icons-outlined">insert_drive_file</i>SQF 01</a>
                               </li>
                               <li>
                                   <a href="{{ route('plantmanager.sqf_2.index') }}"><i
                                           class="material-icons-outlined">insert_drive_file</i>SQF 02</a>
                               </li>
                               <li>
                                   <a href="{{ route('plantmanager.sqf_3.index') }}"><i
                                           class="material-icons-outlined">insert_drive_file</i>SQF 03</a>
                               </li>

                           </ul>


                       </li>

                   </ul>
               </li>
               <li>
                   <a href="javascript:;" class="has-arrow">
                       <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                       </div>
                       <div class="menu-title">HACCP
                       </div>
                   </a>
                   <ul>
                       <li>
                           <a href="javascript:;" class="has-arrow">
                               <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                               </div>
                               <div class="menu-title">Document
                               </div>
                           </a>
                           <ul>
                               <li>
                                   <a href="widgets-data.html"><i
                                           class="material-icons-outlined">insert_drive_file</i>Form 1</a>
                               </li>
                               <li>
                                   <a href="widgets-static.html"><i
                                           class="material-icons-outlined">insert_drive_file</i>Form 2</a>
                               </li>


                           </ul>


                       </li>
                       <li>
                           <a href="javascript:;" class="has-arrow">
                               <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                               </div>
                               <div class="menu-title">Form
                               </div>
                           </a>
                           <ul>


                               <li>
                                   <a href="{{ route('plantmanager.haccp_1.index') }}"><i
                                           class="material-icons-outlined">insert_drive_file</i>HACCP-01</a>
                               </li>
                               <li>
                                   <a href="{{ route('plantmanager.haccp_2.index') }}"><i
                                           class="material-icons-outlined">insert_drive_file</i>HACCP-02</a>
                               </li>
                               <li>
                                   <a href="{{ route('plantmanager.haccp_3.index') }}"><i
                                           class="material-icons-outlined">insert_drive_file</i>HACCP-03</a>
                               </li>
                               <li>
                                   <a href="{{ route('plantmanager.haccp_4.index') }}"><i
                                           class="material-icons-outlined">insert_drive_file</i>HACCP-04</a>
                               </li>

                           </ul>


                       </li>

                   </ul>
               </li>

               <li>
                   <a href="javascrpt:;">
                       <div class="parent-icon"><i class="material-icons-outlined">support</i>
                       </div>
                       <div class="menu-title">Support</div>
                   </a>
               </li>
           </ul>
           <!--end navigation-->
       </div>
   </aside>
   <!--end sidebar-->
