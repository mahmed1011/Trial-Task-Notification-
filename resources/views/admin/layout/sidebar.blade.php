      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
                <img src="{{asset('admin')}}/assets/logo.png" alt="">
            </a>

            <a href="javascript:void(0);"
                class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
                <a href="{{route('admin.dashboard')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Analytics">Dashboard</div>
                </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='menu-icon tf-icons bx bxs-user-check'></i>
                    <div data-i18n="Layouts">Users</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{route('users')}}" class="menu-link">
                            <div data-i18n="Without menu">View Users</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='menu-icon tf-icons bx bxs-user-check'></i>
                    <div data-i18n="Layouts">Notification</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{route('admin.send-notification')}}" class="menu-link">
                            <div data-i18n="Without menu">Send Notification</div>
                        </a>
                    </li>
                </ul>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{route('admin.email.form')}}" class="menu-link">
                            <div data-i18n="Without menu">Send Custom Email</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <!-- / Menu -->
