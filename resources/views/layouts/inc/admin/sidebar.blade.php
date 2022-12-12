<nav class="sidebar sidebar-offcanvas sidebar-fill bg-dark" id="sidebar">
    <ul class="nav mt-4">
      <li class="nav-item border-0">
        <a class="nav-link " href="{{url('/admin/dashboard')}}">
          <i class="mdi mdi-home menu-icon" style="color:white"></i>
          <span class="menu-title text-light">Dashboard</span>
        </a>
      </li>

      <li class="nav-item border-0">
        <a class="nav-link" href="{{url('/admin/appointments')}}">
            <i class="bi bi-calendar3"></i>
          <span class="menu-title text-light ms-4">Appointments</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/services')}}">
            <i class="bi bi-bag-plus"></i>
          <span class="menu-title text-light ms-4">Services</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/promotions')}}">
            <i class="bi bi-megaphone"></i>
          <span class="menu-title text-light ms-4">Promotions</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/testimonies')}}">
            <i class="bi bi-chat-heart"></i>
          <span class="menu-title text-light ms-4">Testimonies</span>
        </a>
      </li>
      {{-- <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/calendar')}}">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title text-light">Calendar</span>
        </a>
      </li> --}}

      {{-- <li class="nav-item border-0">
        <a class="nav-link" href="pages/charts/chartjs.html">
            <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title text-light">Profile</span>
        </a>
      </li> --}}
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('admin/patients')}}">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title text-light">Patient Records</span>
        </a>
      </li>
      <li class="nav-item border-0">
        <a class="nav-link" href="{{ url('/admin/web-settings')}}">
            <i class="bi bi-sliders"></i>

          <span class="menu-title text-light ms-4">Web Setting</span>
        </a>
      </li>
    </ul>
  </nav>
