<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? : '' }} d-flex align-items-center gap-2 " aria-current="page" href="/dashboard">
                <i class="bi bi-speedometer2"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('monitoringpd') ? : '' }} d-flex align-items-center gap-2 " href="/monitoringpd">
                <i class="bi bi-display"></i>
             Partial Discharge Monitoring
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('monitoringpa') ? : '' }} d-flex align-items-center gap-2 " href="/monitoringpa">
                <i class="bi bi-display"></i>
              Partial Arc Monitoring
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('manajemen') ? : '' }} d-flex align-items-center gap-2 " href="/manajemen">
                <i class="bi bi-controller"></i>
                Manajemen Perangkat
              </a>
            </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
                <i class="bi bi-box-arrow-right"></i>
              Sign out
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>