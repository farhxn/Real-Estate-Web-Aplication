@section('title', 'Home')
@include('main.layout.head')
<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('{{ asset('assets/images/breadcrumb/bg-1.png') }}');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Our Properties</span></div>
                    <h1 class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        {{$prop?->Name}} Details
                    </h1>

                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                        Huge number of propreties availabe here for buy and sell
                        also you can find here {{$prop?->Type}} property as you like
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->

<!-- Popular Properties start -->
<section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12 mb-[-30px] gap-[30px] xl:gap-[50px]">
            <div class="col-span-12 md:col-span-6 lg:col-span-8 mb-[30px]">
                <img src="{{ asset('propertyPictures/'. $prop?->MainPic) }}" class="w-full" loading="lazy" alt="Elite Garden Resedence." width="770" height="465">
                <div class="mt-[45px] mb-[35px] flex items-center justify-between">
    <div>
        <h2 class="font-lora leading-tight text-[22px] md:text-[28px] lg:text-[36px] text-primary mb-[5px] font-medium">
            {{$prop?->Name}} (Rs. {{$prop->Prize ?? 'N/A'}})
        </h2>
        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($prop?->Location) }}" target="_blank">
            <h3 class="font-light text-[18px] text-secondary underline mb-[20px]">{{$prop?->Location}}</h3>
        </a>
        <p>{{$prop?->Desc}}</p>
    </div>
    <a href="{{url('chatify',7)}}" target="_blank" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Chat with</a>
</div>


                <div class="xl:flex xl:flex-nowrap xl:justify-between gap-y-[30px] gap-x-[15px] xl:gap-x-[0px] mb-[30px] items-center">
                    <div class="grid grid-cols-12 gap-y-[30px] gap-x-[15px] xl:gap-x-[20px] xl:mr-[30px]">
                        <div class="col-span-7">
                            <a href="{{ asset('propertyPictures/'. $prop?->SubPic1) }}" class="gallery-image">
                                <img class="object-cover rounded-[8px] w-full h-full" src="{{ asset('propertyPictures/'. $prop?->SubPic1) }}" alt="gallery image" loading="lazy" width="270" height="187">
                            </a>
                        </div>
                        <div class="col-span-5">
                            <a href="{{ asset('propertyPictures/'. $prop?->SubPic2) }}" class="gallery-image">
                                <img class="object-cover rounded-[8px] w-full h-full" src="{{ asset('propertyPictures/'. $prop?->SubPic2) }}" alt="gallery image" loading="lazy" width="170" height="187">
                            </a>
                        </div>
                        <div class="col-span-5">
                            <a href="{{ asset('propertyPictures/'. $prop?->SubPic3) }}" class="gallery-image">
                                <img class="object-cover rounded-[8px] w-full h-full" src="{{ asset('propertyPictures/'. $prop?->SubPic3) }}" alt="gallery image" loading="lazy" width="170" height="187">
                            </a>
                        </div>
                        <div class="col-span-7">
                            <a href="{{ asset('propertyPictures/'. $prop?->SubPic4) }}" class="gallery-image">
                                <img class="object-cover rounded-[8px] w-full h-full" src="{{ asset('propertyPictures/'. $prop?->SubPic4) }}" alt="gallery image" loading="lazy" width="270" height="187">
                            </a>
                        </div>
                    </div>
                </div>

                @if($prop->Features && $prop->Features != '[]')
                <h4 class="font-lora text-primary text-[24px] leading-[1.277] sm:text-[28px] capitalize mt-[50px] mb-[40px] font-medium">Property Amenities<span class="text-secondary">.</span></h4>
                <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 px-[15px] mx-[-15px] mt-[40px]">
                    @foreach(json_decode($prop->Features) as $Features)
                    <li class="flex flex-wrap items-center mb-[25px]">
                        <img class="mr-[15px]" src="{{asset('assets/images/about/check.png')}}" loading="lazy" alt="icon" width="20" height="20">
                        <span>{{$Features}}</span>
                    </li>
                    @endforeach
                </ul>
                @endif


                @if($prop->NearBy != "[null]") <div class="grid grid-cols-12 mt-[70px]">
                    <div class="col-span-12 flex flex-wrap flex-col md:flex-row md:items-center justify-between mb-[50px] lg:mb-[70px]">
                        <div class="mb-5 xl:mb-0">
                            <h2 class="font-lora text-primary text-[24px] sm:text-[28px] capitalize font-medium">
                                Nearby Places<span class="text-secondary">.</span></h2>
                        </div>
                    </div>

                    <div class="col-span-12 mb-[80px]">

                        <div id="ForBuy" class="properties-tab-content active">
                            <ul>

                                @foreach(json_decode($prop->NearBy) as $place)

                                <li class="flex flex-wrap items-center justify-between pb-[25px] mb-[25px] border-b border-[#016450]">
                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($place) }}" target="_blank">
                                        <div class="flex flex-wrap mb-[20px] sm:mb-[0px] md:mb-[20px]">
                                            <img class="self-start mr-[40px]" src="{{ asset('assets/images/icon/location.svg') }}" loading="lazy" width="54" height="68" alt="logo">
                                            <div class="flex-1">
                                                <h4 class="text-primary font-lora text-[18px] leading-none mb-[5px]">{{ $place }}</h4>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                @endforeach
                            </ul>
                        </div>

                        @endif
                    </div>


                    <div class="col-span-12">
                        <h2 class="font-lora text-primary text-[24px] sm:text-[28px] capitalize font-medium">
                            Feedback<span class="text-secondary">.</span>
                        </h2>

                        <ul class="mt-[50px] lg:mt-[70px]">

                            <li class="flex flex-wrap mb-[55px] sm:even:ml-[110px] md:even:ml-[0px] lg:even:ml-[110px] last:mb-0">
                                <img class="self-start mr-[35px] border border-primary rounded-[26px]" src="assets/images/commentor/03.png" width="78" height="80" loading="lazy" alt="image">
                                <div class="flex-1">
                                    <h4 class="text-primary font-lora text-[18px] leading-none mb-[5px]">
                                        Shohel Buddy, <span class="text-[14px] text-[#494949]">20 Jan,
                                            2022</span> </h4>
                                    <p>Bary do a great job to find the perfect home. It’s very easy for every
                                        one to buy, sell
                                        or rent property we belive they continure their great service and
                                        appriciat.</p>
                                    <p class="mt-[8px]"> <a href="#" class="inline-block mr-[10px] hover:text-secondary">Like</a> <a class="inline-block hover:text-secondary" href="#">Reply</a></p>
                                </div>
                            </li>
                        </ul>

                        <h2 class="font-lora text-primary text-[24px] sm:text-[28px] capitalize nt-[80px] lg:mt-[90px] font-medium">
                            Leave a Message<span class="text-secondary">.</span>
                        </h2>
                        <div class="mt-[60px]">
                            <form action="#" class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="First Name">
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Last Name">
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone number">
                                </div>

                                <div class="col-span-12 md:col-span-6">
                                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address">
                                </div>

                                <div class="col-span-12">
                                    <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="textarea" id="textarea" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>

                                <div class="col-span-12">
                                    <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Contact us</button>
                                </div>

                            </form>



                        </div>
                    </div>

                </div>

            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-4 mb-[30px]">
                <aside class="mb-[-60px] asidebar">
                    <div class="mb-[60px]">
                        <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[40px] font-medium">Property Search <span class="text-secondary">.</span></h3>

                        <form action="#" class="relative">
                            <div class="relative mb-[25px] bg-white">
                                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white" type="text" placeholder="Location">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.39648 6.41666H8.60482" stroke="#016450" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M7 8.02083V4.8125" stroke="#016450" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M2.11231 4.9525C3.26148 -0.0991679 10.7456 -0.0933345 11.889 4.95833C12.5598 7.92167 10.7165 10.43 9.10064 11.9817C7.92814 13.1133 6.07314 13.1133 4.89481 11.9817C3.28481 10.43 1.44148 7.91583 2.11231 4.9525Z" stroke="#0B2C3D" stroke-width="1.5" />
                                </svg>
                            </div>
                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_928_754)">
                                        <path d="M4.64311 0H0V4.64311H4.64311V0ZM3.71437 3.71437H0.928741V0.928741H3.71437V3.71437Z" fill="#0B2C3D" />
                                        <path d="M8.35742 0V4.64311H13.0005V0H8.35742ZM12.0718 3.71437H9.28616V0.928741H12.0718V3.71437Z" fill="#0B2C3D" />
                                        <path d="M0 13H4.64311V8.35689H0V13ZM0.928741 9.28563H3.71437V12.0713H0.928741V9.28563Z" fill="#0B2C3D" />
                                        <path d="M8.35742 13H13.0005V8.35689H8.35742V13ZM9.28616 9.28563H12.0718V12.0713H9.28616V9.28563Z" fill="#0B2C3D" />
                                        <path d="M6.96437 0H6.03563V6.03563H0V6.96437H6.03563V13H6.96437V6.96437H13V6.03563H6.96437V0Z" fill="#0B2C3D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_928_754">
                                            <rect width="13" height="13" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body borderborder-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary border-primary pl-[40px] pr-[20px] py-[8px] focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option value="0">Property Category</option>
                                    <option value="1">Property</option>
                                    <option value="2">Category</option>
                                </select>
                            </div>
                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.16602 12.8333H12.8327" stroke="#0B2C3D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M1.7207 12.8333L1.74987 5.81583C1.74987 5.45999 1.91904 5.12169 2.19904 4.90002L6.28237 1.72085C6.70237 1.39418 7.29154 1.39418 7.71737 1.72085L11.8007 4.89418C12.0865 5.11585 12.2499 5.45416 12.2499 5.81583V12.8333" stroke="#0B2C3D" stroke-width="1.5" stroke-miterlimit="10" stroke-linejoin="round" />
                                    <path d="M9.04232 6.41666H4.95898C4.47482 6.41666 4.08398 6.8075 4.08398 7.29166V12.8333H9.91732V7.29166C9.91732 6.8075 9.52648 6.41666 9.04232 6.41666Z" stroke="#0B2C3D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.83398 9.47916V10.3542" stroke="#0B2C3D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.125 4.375H7.875" stroke="#0B2C3D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <select class="nice-select font-light w-full h-[45px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option value="0">Property Type</option>
                                    <option value="1">Property A</option>
                                    <option value="2">Category B</option>
                                </select>
                            </div>
                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.78125 9.55323C5.78125 10.4132 6.44125 11.1066 7.26125 11.1066H8.93458C9.64792 11.1066 10.2279 10.4999 10.2279 9.75323C10.2279 8.9399 9.87458 8.65323 9.34792 8.46657L6.66125 7.53323C6.13458 7.34657 5.78125 7.0599 5.78125 6.24657C5.78125 5.4999 6.36125 4.89323 7.07458 4.89323H8.74792C9.56792 4.89323 10.2279 5.58657 10.2279 6.44657" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8 4V12" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.9987 14.6667C11.6806 14.6667 14.6654 11.6819 14.6654 8C14.6654 4.3181 11.6806 1.33333 7.9987 1.33333C4.3168 1.33333 1.33203 4.3181 1.33203 8C1.33203 11.6819 4.3168 14.6667 7.9987 14.6667Z" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option selected value="0">Price Range</option>
                                    <option value="1">1500 usd</option>
                                    <option value="2">1600 usd</option>
                                </select>
                            </div>
                            <div class="relative mb-[25px] bg-white">
                                <svg class="absolute top-1/2 -translate-y-1/2 z-[1] left-[20px] pointer-events-none" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.33268 4.66667H4.66602V9.33334H9.33268V4.66667Z" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.91602 12.8333C3.87852 12.8333 4.66602 12.0458 4.66602 11.0833V9.33333H2.91602C1.95352 9.33333 1.16602 10.1208 1.16602 11.0833C1.16602 12.0458 1.95352 12.8333 2.91602 12.8333Z" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.91602 4.66667H4.66602V2.91667C4.66602 1.95417 3.87852 1.16667 2.91602 1.16667C1.95352 1.16667 1.16602 1.95417 1.16602 2.91667C1.16602 3.87917 1.95352 4.66667 2.91602 4.66667Z" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.33398 4.66667H11.084C12.0465 4.66667 12.834 3.87917 12.834 2.91667C12.834 1.95417 12.0465 1.16667 11.084 1.16667C10.1215 1.16667 9.33398 1.95417 9.33398 2.91667V4.66667Z" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.084 12.8333C12.0465 12.8333 12.834 12.0458 12.834 11.0833C12.834 10.1208 12.0465 9.33333 11.084 9.33333H9.33398V11.0833C9.33398 12.0458 10.1215 12.8333 11.084 12.8333Z" stroke="#0B2C3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <select class="nice-select font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] pl-[40px] pr-[20px] py-[8px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] bg-white appearance-none cursor-pointer">
                                    <option selected value="0">Property Size</option>
                                    <option value="1">1500 squre fit</option>
                                    <option value="2">1600 squre fit</option>
                                </select>
                            </div>


                            <button type="submit" class="block z-[1] before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:z-[-1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:z-[-2] after:bg-primary after:rounded-md after:transition-all">Search</button>

                        </form>
                    </div>

                    <div class="mb-[60px]">
                        <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[40px] font-medium">Featured Property<span class="text-secondary">.</span></h3>
                        <div class="sidebar-carousel relative">
                            <div class="swiper p-1">
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">

                                        @foreach($similarProperties as $tp)
                                        <div class="overflow-hidden rounded-md drop-shadow-[0px_2px_3px_rgba(0,0,0,0.1)] bg-[#FFFDFC] text-center mb-[40px]">
                                            <div class="relative">
                                                <a href="{{url('PropertyDetail',$tp->id)}}" class="block">
                                                    <img src="{{ asset('propertyPictures/'. $tp?->MainPic) }}" class="w-full h-full" loading="lazy" width="370" height="266" alt="@@title">
                                                </a>
                                                <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                                    <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">05</button>
                                                    <!-- <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white text-xs"><img class="mr-1" src="assets/images/icon/video.png" loading="lazy" width="14" height="10" alt="camera icon">08</button> -->
                                                </div>

                                            </div>

                                            <div class="pt-[15px] pb-[20px] px-[20px] text-left">
                                                <h3><a href="{{url('PropertyDetail',$tp->id)}}" class="font-lora leading-tight text-[18px] text-primary">{{$tp->Name}}</a></h3>
                                                <h4 class="leading-none"><a href="{{url('PropertyDetail',$tp->id)}}" class="font-light text-[14px] leading-[1.75] text-primary underline">{{$tp->Location}}</a></h4>
                                                <ul class="mt-[10px]">
                                                    <li class="flex flex-wrap items-center justify-between">
                                                        <span class="font-lora text-[14px] text-secondary leading-none">Price: Rs.{{$tp->Prize}}</span>

                                                        <span class="flex flex-wrap items-center">

                                                            <button class="text-[#B1AEAE] hover:text-secondary">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(.clip0_656_640)">
                                                                        <path d="M7.9999 2.74799L7.2829 2.01099C5.5999 0.280988 2.5139 0.877988 1.39989 3.05299C0.876895 4.07599 0.758895 5.55299 1.71389 7.43799C2.63389 9.25299 4.5479 11.427 7.9999 13.795C11.4519 11.427 13.3649 9.25299 14.2859 7.43799C15.2409 5.55199 15.1239 4.07599 14.5999 3.05299C13.4859 0.877988 10.3999 0.279988 8.7169 2.00999L7.9999 2.74799ZM7.9999 15C-7.33311 4.86799 3.27889 -3.04001 7.82389 1.14299C7.88389 1.19799 7.94289 1.25499 7.9999 1.31399C8.05632 1.25504 8.11503 1.19833 8.17589 1.14399C12.7199 -3.04201 23.3329 4.86699 7.9999 15Z" fill="currentColor" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath class="clip0_656_640">
                                                                            <rect width="16" height="16" fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </li>
                                                </ul>


                                            </div>
                                        </div>

                                        @endforeach

                                    </div>

                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="flex flex-wrap items-center justify-center mt-[25px]">
                                <div class="swiper-button-prev w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                </div>
                                <div class="swiper-button-next w-[26px] h-[26px] rounded-full bg-primary  text-white hover:bg-secondary static mx-[5px] mt-[0px]">
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="mb-[60px]">
                        <h3 class="text-primary leading-none text-[24px] font-lora underline mb-[30px] font-medium">Our Agents<spanclass="text-secondary">.</span></h3>

                        <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-x-[20px] mb-[-20px]">
                            <!-- single team start -->
                            <div class="text-center group mb-[30px]">
                                <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                    <a href="agent-details.html" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                        <img src="assets/images/team/person3.png" class="w-full object-contain block mx-auto" loading="lazy" width="130" height="154" alt="Albert S. Smith">
                                    </a>
                                </div>

                                <div class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[10px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                    <h3><a href="agent-details.html" class="font-lora text-[14px] text-primary hover:text-secondary">Albert S. Smith</a></h3>
                                    <p class="font-light text-[12px] leading-none capitalize mt-[5px]">Real Estate Agent</p>
                                </div>
                            </div>
                            <div class="text-center group mb-[30px]">
                                <div class="relative z-[1] rounded-[6px_6px_0px_0px]">
                                    <a href="agent-details.html" class="block relative before:absolute before:content-[''] before:inset-x-0 before:bottom-0 before:bg-[#016450] before:w-full before:h-[calc(100%_-_30px)] before:z-[-1] before:rounded-[6px_6px_0px_0px]">
                                        <img src="assets/images/team/person4.png" class="w-full object-contain block mx-auto" loading="lazy" width="130" height="154" alt="Amelia Margaret">
                                    </a>
                                </div>

                                <div class="bg-[#FFFDFC] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] rounded-[0px_0px_6px_6px] px-[10px] pt-[5px] pb-[15px] border-b-[6px] border-primary transition-all duration-700 group-hover:border-secondary">
                                    <h3><a href="agent-details.html" class="font-lora text-[14px] text-primary hover:text-secondary">Amelia Margaret</a></h3>
                                    <p class="font-light text-[12px] leading-none capitalize mt-[5px]">Real Estate Broker</p>
                                </div>
                            </div>

                            <!-- single team end-->
                        </div>
                    </div>

                </aside>
            </div>
        </div>

    </div>
</section>

@include('main.layout.footer')
