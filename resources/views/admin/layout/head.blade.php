<!DOCTYPE html>
<html lang="en">

<head>
    <title>Berry | @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{asset('admin/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/toastr/css/toastr.min.css')}}">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/vendor/datatables/responsive/responsive.css')}}" rel="stylesheet">
    <link async href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" async rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <div class="nav-header">
            <a href="{{url('AdminHome')}}" class="brand-logo">
                <img class="w-full h-full" src="{{asset('assets/images/logo/logo.svg')}}" loading="lazy" width="99" height="46" alt="brand logo">
                <!-- <img class="logo-abbr" src="{{asset('admin/images/logo.png')}}" alt="/">
                <img class="logo-compact" src="{{asset('admin/images/logo-text.png')}}" alt="/">
                <img class="brand-title" src="{{asset('admin/images/logo-text.png')}}" alt="/"> -->
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <div class="search_bar dropdown">
                                    <div class="dropdown-menu p-0 m-0">
                                        <form>
                                            <div class="input-group search-area d-xl-inline-flex d-none">
                                                <input class="form-control" type="text" placeholder="Search Here" aria-label="Search">
                                                <button class="input-group-text">
                                                    <span class="search_icon p-3 c-pointer">
                                                        <svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#3B4CB8" />
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <div class="header-info">
                                        @php
                                        $listedText = Session::get('LoginName');

                                        $wordArray = explode(' ', $listedText);

                                        if(count($wordArray) > 5) {
                                        $trimmedText = implode(' ', array_slice($wordArray, 0, 5)) . '...';
                                        } elseif(strlen($listedText) > 10 && !str_contains($listedText, ' ')) {
                                        $trimmedText = substr($listedText, 0, 5) . '...';
                                        } else {
                                        $trimmedText = $listedText;
                                        }
                                        @endphp
                                        <span class="text-black">{{ $listedText }}.</span>
                                        <p class="fs-12 mb-0">Admin</p>
                                    </div>
                                    <img src="{{ asset('admin/images/profile/17.jpg') }}" width="20" alt="/">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ url('EditProfile') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="{{ url('Logout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-dashboard-1"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('AdminHome')}}">Home</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                            <i class="flaticon-381-layer-1"></i>
                            <span class="nav-text">Property</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('AddProperty') }}">Add Property</a></li>
                            <li><a href="{{ url('PropertyList') }}">Property List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                      <i class="flaticon-381-battery-1"></i>
                            <span class="nav-text">City</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('AddCity') }}">Add City</a></li>
                            <li><a href="{{ url('CityList') }}">City List</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                            <i class="flaticon-381-user-7"></i>
                            <span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('UserList') }}">User List</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="copyright">
                    <p><strong>Berry Real Estate </strong> © 2023 All Rights Reserved</p>
                    <p>by M. Farhan Atif </p>
                </div>
            </div>
        </div>