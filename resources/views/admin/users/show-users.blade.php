@extends('admin.layouts')
@section('content')

    <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
        data-assets-path="../assets/" data-template="vertical-menu-template-free">


    <body>
        @include('sweetalert::alert')
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->

                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->
                    <!-- Navbar -->

                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                        id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>

                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <!-- Search -->
                            <div class="navbar-nav align-items-center">
                                <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                        aria-label="Search..." />
                                </div>
                            </div>
                            <!-- /Search -->

                            <ul class="navbar-nav flex-row align-items-center ms-auto">
                                <!-- Place this tag where you want the button to render. -->
                                <li class="nav-item lh-1 me-3">
                                    <a class="github-button"
                                        href=""
                                        data-icon="octicon-star" data-size="large" data-show-count="true"
                                        aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                                </li>
                                <!-- User -->
                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                        data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="{{ asset('admin') }}/assets/img/avatars/ahmi.png " alt
                                                class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                </li>
                                <!--/ User -->
                            </ul>
                        </div>
                    </nav>

                    <!-- / Navbar -->
                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <!-- Bootstrap Dark Table -->
                    <div class="card mt-5" style="margin: 31px;">
                        <div class="card-header">
                            <h4>All Users</h4>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-light" id="example">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ intval($key) + 1 }}</strong></td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                @if ($user->role === 'user')
                                                    <a href="{{ route('delete.user', $user->id) }}" class="btn btn-danger" onClick="showit()">Delete</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Bootstrap Dark Table -->
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>

        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>

    </html>
@endsection
