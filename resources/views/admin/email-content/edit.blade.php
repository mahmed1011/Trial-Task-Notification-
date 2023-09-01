@extends('admin.layouts')
@section('content')
    <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
        data-assets-path="../assets/" data-template="vertical-menu-template-free">


    <body>
        <!-- Layout wrapper -->
        @include('sweetalert::alert')
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
                                        href="https://github.com/themeselection/sneat-html-admin-template-free"
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
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Send</span> Custom Email</h4>

                        <!-- Basic Layout -->
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-body">

                                        <div class="card-body">
                                            {{-- @if (session('success'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('success') }}
                                                </div>
                                            @endif --}}

                                            <form action="{{ route('send.custom.email') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="user_id" class="form-label">Select User:</label>
                                                    <select name="user_id" id="user_id" class="form-select">
                                                        @foreach ($users as $user)
                                                            @if ($user->role === 'user')
                                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email_subject" class="form-label">Email Subject:</label>
                                                    <input type="text" name="email_subject" id="email_subject" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="email_message" class="form-label">Email Message:</label>
                                                    <textarea name="email_message" id="email_message" class="form-control" rows="5"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Send Email</button>
                                            </form>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->
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
