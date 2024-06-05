<!-- <base href="/public"> -->
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bery-Real Estate | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" async>
    <link rel="preconnect" href="https://fonts.gstatic.com" async crossorigin>
    <link async href="https://fonts.googleapis.com/css2?family=karla:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" async >
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" async rel="stylesheet">
    <link async rel="preconnect" href="https://fonts.googleapis.com/">
    <link async rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link async href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&amp;family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>


<body class="font-karla text-body text-tiny">
    <div class="overflow-hidden">
        <!-- Header start -->

        <!-- header top start -->
        <div class="bg-primary font-lora text-white py-[11px]" style="display:{{ request()->is('/') ? 'none' : '' }}">
            <div class="container">
                <div class="grid items-center grid-cols-12 gap-x-[30px]">
                    <div class="col-span-12 sm:col-span-6 text-center sm:text-left">
                        <p>Have a question? <a class="hover:text-secondary" href="tel:9985254784">+92 333 22 45 310</a></p>
                    </div>
                    <div class="col-span-12 sm:col-span-6 text-center sm:text-right">
                        <p>Visit us: 9am to 10 pm ( Mon - Fri)</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <header id="sticky-header" class="{{ request()->is('/') ? 'absolute left-0 top-[15px] lg:top-[30px] xl:top-[45px] w-full z-10' : 'relative bg-[#E9F1FF] lg:py-[20px] z-10 secondary-sticky secondary-sticky' }}">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="flex flex-wrap items-center justify-between">
                            <a href="{{ url('/') }}" class="block">
                                <img class="w-full h-full" src="{{asset('assets/images/logo/logo.svg')}}" loading="lazy" width="99" height="46" alt="brand logo">
                            </a>
                            <nav class="flex flex-wrap items-center">
                                <ul class="hidden lg:flex flex-wrap items-center font-lora text-[16px] xl:text-[18px] leading-none text-black">
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('/') }}" class="transition-all hover:text-secondary">Home</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('Properties') }}" class="transition-all hover:text-secondary">Properties</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('Agencies') }}" class="transition-all hover:text-secondary">Agency</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('Agentes') }}" class="transition-all hover:text-secondary">Agents</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('AboutUs') }}" class="transition-all hover:text-secondary">About</a>
                                    </li>
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('ContactUs') }}" class="transition-all hover:text-secondary">Contact</a>
                                    </li>
                                </ul>

                                <ul class="flex flex-wrap items-center">
                                    @if (session()->has('LoginId'))
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
                                    <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                        <a href="{{ url('/') }}" class="transition-all hover:text-secondary"><strong>Welcome,&nbsp;{{$trimmedText}}</strong></a>

                                        <ul class="list-none bg-white drop-shadow-[0px_6px_10px_rgba(0,0,0,0.2)] rounded-[12px] flex flex-wrap flex-col w-[180px] absolute top-[120%] sm:left-1/2 sm:-translate-x-1/2 transition-all group-hover:top-[60px] invisible group-hover:visible opacity-0 group-hover:opacity-100 right-0 ">
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ url('MyProperties') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-t-[12px]">My Properties</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{ url('EditProfile') }}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-t-[12px]">Update Profile</a>
                                            </li>
                                            <li class="border-b border-dashed border-primary border-opacity-40 last:border-b-0 hover:border-solid transition-all">
                                                <a href="{{url('Logout')}}" class="font-lora leading-[1.571] text-[14px] text-primary p-[10px] capitalize block transition-all hover:bg-primary hover:text-white text-center my-[-1px] rounded-b-[12px]">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    @else
                                    <li class="mr-1">
                                        <a href="{{url('Login')}}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Login / Sign up</a>
                                    </li>

                                    @endif
                                    <li>
                                        <a href="  @if (session()->has('LoginId')) 
                                        {{ url('AddPropertyUser') }}
                                        @else
                                        {{url('Login')}}
                                        @endif
                                        " class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                                            Property</a>
                                    </li>
                                    <li class="ml-2 sm:ml-5 lg:hidden">
                                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                            <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50"></div>
        <div id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

            <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
                <!-- close button start -->
                <button class="offcanvas-close text-primary text-[25px] w-10 h-10 absolute right-0 top-0 z-[1]" aria-label="offcanvas">x</button>
                <!-- close button end -->

                <!-- offcanvas-menu start -->

                <nav class="offcanvas-menu mr-[20px]">
                    <ul>
                        <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a></li>
                    </ul>
                    <ul>
                        <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Properties</a></li>
                    </ul>
                    <ul>
                        <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">About</a></li>
                    </ul>
                    <ul>
                        <li class="relative block border-b-primary border-b"><a href="contact.html" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact</a></li>
                    </ul>
                </nav>

                <div class="px-5 flex flex-wrap mt-3 sm:hidden">
                    <a href="#" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add
                        Property</a>
                </div>
            </div>
        </div>