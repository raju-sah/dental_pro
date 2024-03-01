<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{url('home')}}" class="app-brand-link">
            <span class="app-brand-text demo text-body fw-bolder text-uppercase">LOGO</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <x-sidebar-item route="{{route('home')}}" name="Dashboard" uri="home">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
        </x-sidebar-item>
        <x-sidebar-item route="{{route('admin.teams.index')}}" name="Teams" uri="admin/destinations">
            <i class="menu-icon tf-icons bx bxs-group"></i>
        </x-sidebar-item>
        <x-sidebar-item route="{{route('admin.testimonials.index')}}" name="Testimonials" uri="admin/destinations">
            <i class="menu-icon tf-icons bx bxs-group"></i>
        </x-sidebar-item>
        <x-sidebar-item route="{{route('admin.services.index')}}" name="Services" uri="admin/destinations">
            <i class="menu-icon tf-icons bx bxs-group"></i>
        </x-sidebar-item>

        <x-sidebar-item route="{{route('admin.sliders.index')}}" name="Slider" uri="admin/destinations">
            <i class="menu-icon tf-icons bx bxs-group"></i>
        </x-sidebar-item>
      
      
      
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-dock-top"></i>
              <div data-i18n="Account Settings">Settings</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="{{route('admin.settings.create')}}" class="menu-link">
                  <div data-i18n="Account">General Setting</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="" class="menu-link">
                  <div data-i18n="Notifications">Social setting</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="" class="menu-link">
                  <div data-i18n="Connections">Other Setting</div>
                </a>
              </li>
            </ul>
          </li>

    </ul>
</aside>
