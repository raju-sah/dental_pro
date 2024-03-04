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
        <x-sidebar-item route="{{route('admin.testimonials.index')}}" name="Testimonials" uri="admin/testimonials">
            <i class="menu-icon tf-icons bx bxs-star"></i>
        </x-sidebar-item>
        <x-sidebar-item route="{{route('admin.services.index')}}" name="Services" uri="admin/services">
            <i class="menu-icon tf-icons bx bxs-donate-heart"></i>
        </x-sidebar-item>

        <x-sidebar-item route="{{route('admin.sliders.index')}}" name="Slider" uri="admin/sliders">
            <i class="menu-icon tf-icons bx bxs-image"></i>
        </x-sidebar-item>
        <x-sidebar-item route="{{route('admin.feedback.index')}}" name="Feedbacks" uri="admin/feedbacks">
            <i class="menu-icon tf-icons bx bxs-like"></i>
        </x-sidebar-item>
        <x-sidebar-item route="{{route('admin.news-letters.index')}}" name="News Letters" uri="admin/news-letters">
            <i class="menu-icon tf-icons bx bxs-envelope"></i>
        </x-sidebar-item>


    </ul>
</aside>
