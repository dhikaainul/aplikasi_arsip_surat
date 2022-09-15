<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="/" class="nav-link {{ Request::path() === '/' ? 'active' : 'collapsed' }}">
              <i class="bi bi-circle"></i><span>Data Arsip</span>
            </a>
          </li>
          <li>
            <a href="{{route('about')}}" class="nav-link {{ Request::path() === 'about' ? 'active' : 'collapsed' }}">
              <i class="bi bi-circle"></i><span>About</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
    </ul>
  </aside>