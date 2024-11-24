   <!--start sidebar-->
   <aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-img" alt="">
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
            <a href="{{url('supervisor/dashboard')}}">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>

          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
              </div>
              <div class="menu-title">Vendor</div>
            </a>
            <ul>
              {{-- <li><a href="{{url('supervisor/vendor/add')}}"><i class="material-icons-outlined">arrow_right</i>Add Form</a> --}}
              </li>
              <li><a href="{{url('supervisor/vendor/list')}}"><i class="material-icons-outlined">arrow_right</i>List</a>
              </li>
              <li><a href="{{url('supervisor/vendor/upload')}}"><i class="material-icons-outlined">arrow_right</i>Upload File</a>
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