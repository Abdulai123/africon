<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('assets/img/main-logo.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Africon</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{route('dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Menus</li>
        <li>
            <ul>
            <li> <a href="{{url('create-job')}}"><i class="bx bx-right-arrow-alt"></i>Post a Job</a></li>
            </ul>
        </li>
        <li>
            <ul>
            <li> <a href="{{route('dashboard')}}"><i class="bx bx-right-arrow-alt"></i>Job History</a></li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->