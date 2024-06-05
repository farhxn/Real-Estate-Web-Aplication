@section('title', 'About US')
@include('main.layout.head')
        <section class="bg-no-repeat bg-left-bottom xl:bg-right-bottom bg-contain xl:bg-cover bg-[#E9F1FF] h-[450px] lg:h-[500px] xl:h-[650px] flex flex-wrap items-center relative">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="max-w-[420px] text-center mx-auto">
                            <div class="mb-5"><span class="text-base text-secondary block">About us</span></div>
                            <h1 class="font-lora text-primary text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl title font-medium">
                                About Bary<span class="text-secondary">.</span>
                            </h1>
                            <p class="text-base mt-5">Huge number of propreties availabe here for buy and sell, also you can find here co-living property</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->


        <!-- About section start -->
        <section class="relative z-[1] mt-[80px] xl:mt-0">
            <div class="container">
                <div class="items-center">
                    <div class="lg:mb-[60px] mb-10 -mt-[150px]">
                        <img class="mx-auto w-full" src="assets/images/about/about5.png" width="597" height="716" alt="about image">
                    </div>
                    <div class="max-w-[830px] mx-auto text-center">
                        <span class="text-secondary text-tiny inline-block mb-2">Since 1975</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.3888] xl:text-[35px] capitalize mb-[30px] lg:mb-[50px] font-medium"> We Provide Right Choice of Properties that You need and have great opportunity to choose from thousands of Collection<span class="text-secondary">.</span></h2>
                        <div class="flex justify-center">
                            <ul class="flex flex-wrap list-none">
                                <li class="block">
                                    <span class="font-lora text-secondary text-xl"><span class="counter-up">{{ $prop }}</span></span>
                                    <p>Properties</p>
                                </li>
                                <li class="block pl-[30px] sm:pl-[40px] md:pl-[60px]">
                                    <span class="font-lora text-secondary text-xl"><span class="counter-up">12</span> <span>k+</span></span>
                                    <p>Customers</p>
                                </li>
                                <li class="block pl-[30px] sm:pl-[40px] md:pl-[60px]">
                                    <span class="font-lora text-secondary text-xl"><span class="counter-up">160</span>
                                    <span>+</span></span>
                                    <p>Awards Win</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section end -->


        <!-- About Us Sectin Start -->
        <section class="about-section pt-[80px] lg:pt-[120px]">
            <div class="container">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-12 lg:col-span-6">
                        <span class="text-secondary text-tiny inline-block mb-2">Why Choose us</span>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl capitalize mb-5 lg:mb-16 font-medium max-w-[500px]">We Provide Latest Properties for our valuable Clients.<span class="text-secondary">.</span></h2>
                        <div class="scene" data-relative-input="true">
                            <img data-depth="0.1" src="assets/images/about/about7.png" class="" loading="lazy" width="729" height="663" alt="about Image">
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 lg:pl-[70px]">
                        <p class="max-w-[448px] ">Huge number of propreties availabe here for buy, sell and
                            Rent. Also you find here co-living property so lots opportunity
                            you have to choose here and enjoy huge discount. </p>

                        <div class="-mb-10 mt-12 xl:mt-[70px] 2xl:mt-[100px]">
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/doller.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Budget
                                        Friendly</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/location.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">Prime
                                        Location</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                            <div class="flex flex-wrap mb-5 lg:mb-10">
                                <img src="assets/images/icon/trusted.png" class="self-start mr-5" loading="lazy" width="50" height="50" alt="about Image">
                                <div class="flex-1">
                                    <h3 class="font-lora text-primary text-[22px] xl:text-lg capitalize mb-2">
                                        Trusted by
                                        Thousand</h3>
                                    <p class="max-w-[315px]">Properties are most budget friendly so you
                                        have opportunity to find the best one</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Sectin End -->


        <!-- service Section Start-->
        <section class="py-[80px] lg:py-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[30px] lg:mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2">Our Services</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">
                                Services that we Provide<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px]">
                    <div class="relative group">
                        <a href="{{ url('Properties') }}" class="block">
                            <img src="assets/images/service/service1.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Sale Property">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">Sale Property<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="{{ url('Properties') }}" class="block">
                            <img src="assets/images/service/service2.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Buy Property">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">Buy Property<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="{{ url('Properties') }}" class="block">
                            <img src="assets/images/service/service3.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Rent Property">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">Rent Property<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="{{ url('Properties') }}" class="block">
                            <img src="assets/images/service/service4.png" class="w-full h-full block mx-auto rounded-[6px_6px_0px_0px]" loading="lazy" width="270" height="290" alt="Mortgage">
                            <div class="drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] hover:drop-shadow-[0px_8px_20px_rgba(0,0,0,0.15)] bg-[#FFFDFC] rounded-[0px_0px_6px_6px] px-[25px] py-[25px]">
                                <h3 class="font-lora font-normal text-[24px] xl:text-lg text-primary group-hover:text-secondary transition-all mb-[5px]">Mortgage<span class="text-secondary group-hover:text-primary">.</span> </h3>
                                <p class="font-light text-tiny">Provide prorpery Sale options opportunity to find the best </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- service Section End-->


        <!-- Testimonial carousel Start -->
        <section class="testimonial-section bg-white relative z-[5] pb-[80px] lg:pb-[120px]">
            <div class="container testimonial-carousel-two relative">
                <div class="scene dots-shape absolute left-0">
                    <img data-depth="0.4" class="z-[1]" src="assets/images/testimonial/dots.png" width="106" height="129" loading="lazy" alt="shape">
                </div>
                <div class="grid items-center grid-cols-12 gap-x-[30px]">
                    <div class="col-span-12 relative">
                        <div class="swiper rounded-[30px] pb-[40px] md:pb-0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- shape and images -->

                                    <div class="pl-[50px] xl:pl-[150px]">
                                        <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                            <img src="assets/images/testimonial/person2.png" class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy" width="402" height="505" alt="Oliver Stephen">
                                            <img class="absolute left-[0px] top-0 z-[1]" src="assets/images/testimonial/persone-pattern.png" width="400" height="500" loading="lazy" alt="shape">
                                        </div>
                                    </div>


                                    <div class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                        <div class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                            <div class="relative">
                                                <span class="block absolute right-[0px] top-[0px]">

                    <svg class="ml-auto mb-[4px]" width="78" height="57" viewBox="0 0 78 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.08">
                        <path d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z" fill="#01614E"/>
                        </g>
                        </svg>


                </span>

                                                <span class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Testimonial</span>
                                                <h2 class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                    Reviews from our <br class="hidden xl:block" /> happy Clients<span class="text-secondary">.</span>
                                                </h2>
                                                <p class="max-w-[480px]">
                                                    Bary do a great job to find the perfect home. It’s very easy for
                                                    every one to buy, sell or rent property we belive they continure
                                                    their great service and appriciate them recomended.

                                                </p>
                                            </div>

                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-4">
                                                    <span class="font-lora text-[18px] leading-none capitalize text-secondary">Oliver Stephen</span>
                                                    <span class="flex flex-wrap">
                        <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    </span>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- shape and images -->

                                    <div class="pl-[50px] xl:pl-[150px]">
                                        <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                            <img src="assets/images/testimonial/person4.png" class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy" width="402" height="505" alt="Sun Francisco">
                                            <img class="absolute left-[0px] top-0 z-[1]" src="assets/images/testimonial/persone-pattern.png" width="400" height="500" loading="lazy" alt="shape">
                                        </div>
                                    </div>


                                    <div class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                        <div class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                            <div class="relative">
                                                <span class="block absolute right-[0px] top-[0px]">

                    <svg class="ml-auto mb-[4px]" width="78" height="57" viewBox="0 0 78 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.08">
                        <path d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z" fill="#01614E"/>
                        </g>
                        </svg>


                </span>

                                                <span class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Testimonial</span>
                                                <h2 class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                    Reviews from our <br class="hidden xl:block" /> happy Clients<span class="text-secondary">.</span>
                                                </h2>
                                                <p class="max-w-[480px]">
                                                    Bary do a great job to find the perfect home. It’s very easy for
                                                    every one to buy, sell or rent property we belive they continure
                                                    their great service and appriciate them recomended.

                                                </p>
                                            </div>

                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-4">
                                                    <span class="font-lora text-[18px] leading-none capitalize text-secondary">Sun Francisco</span>
                                                    <span class="flex flex-wrap">
                        <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    </span>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- shape and images -->

                                    <div class="pl-[50px] xl:pl-[150px]">
                                        <div class="inline-block relative bg-primary text-primary rounded-[30px] z-10">
                                            <img src="assets/images/testimonial/person2.png" class="w-auto h-auto block mx-auto relative z-[2] thumb" loading="lazy" width="402" height="505" alt="Oliver Stephen">
                                            <img class="absolute left-[0px] top-0 z-[1]" src="assets/images/testimonial/persone-pattern.png" width="400" height="500" loading="lazy" alt="shape">
                                        </div>
                                    </div>


                                    <div class="before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-full before:h-[395px] before:content-[''] before:bg-[#F5F9F8] before:rounded-[30px]">

                                        <div class="text-left rounded-[14px] max-w-[100%] sm:max-w-[90%] md:max-w-[560px] mx-auto md:ml-auto absolute top-[65%] sm:top-1/2 left-0 md:left-auto right-0 md:right-[50px] xl:right-0 -translate-y-1/2 px-[20px] md:px-[30px] xl:pl-[0px] xl:pr-[60px]  py-[20px] md:py-[30px] z-20 bg-white xl:bg-transparent shadow lg:shadow-none scale-[0.8] sm:scale-100">
                                            <div class="relative">
                                                <span class="block absolute right-[0px] top-[0px]">

                    <svg class="ml-auto mb-[4px]" width="78" height="57" viewBox="0 0 78 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.08">
                        <path d="M5.50357 56.0343H22.0143L33.0214 34.02V0.998535H0V34.02H16.5107L5.50357 56.0343ZM49.5321 56.0343H66.0429L77.05 34.02V0.998535H44.0286V34.02H60.5393L49.5321 56.0343Z" fill="#01614E"/>
                        </g>
                        </svg>


                </span>

                                                <span class="text-secondary text-tiny capitalize inline-block mb-[5px] xl:mb-[10px]">Testimonial</span>
                                                <h2 class="font-lora text-primary text-[24px] xl:text-xl capitalize mb-[10px] xl:mb-[20px] leading-[1.2] font-medium">
                                                    Reviews from our <br class="hidden xl:block" /> happy Clients<span class="text-secondary">.</span>
                                                </h2>
                                                <p class="max-w-[480px]">
                                                    Bary do a great job to find the perfect home. It’s very easy for
                                                    every one to buy, sell or rent property we belive they continure
                                                    their great service and appriciate them recomended.

                                                </p>
                                            </div>

                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-4">
                                                    <span class="font-lora text-[18px] leading-none capitalize text-secondary">Oliver Stephen</span>
                                                    <span class="flex flex-wrap">
                        <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    <span class="ml-[4px]">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.64181 4.13829L6.66642 3.70586L5.33634 1.00938C5.30001 0.935551 5.24024 0.875786 5.16642 0.839457C4.98126 0.748051 4.75626 0.824223 4.66368 1.00938L3.3336 3.70586L0.358214 4.13829C0.276182 4.15 0.201182 4.18868 0.143761 4.24727C0.0743407 4.31862 0.0360871 4.41461 0.0374056 4.51416C0.038724 4.6137 0.0795065 4.70864 0.150792 4.77813L2.30353 6.87696L1.79493 9.84063C1.78301 9.90957 1.79063 9.98048 1.81695 10.0453C1.84327 10.1101 1.88723 10.1663 1.94384 10.2074C2.00045 10.2485 2.06745 10.2729 2.13724 10.2779C2.20702 10.2829 2.27681 10.2682 2.33868 10.2356L5.00001 8.83633L7.66134 10.2356C7.73399 10.2742 7.81837 10.2871 7.89923 10.2731C8.10314 10.2379 8.24024 10.0445 8.20509 9.84063L7.69649 6.87696L9.84923 4.77813C9.90782 4.72071 9.94649 4.64571 9.95821 4.56368C9.98985 4.3586 9.84688 4.16875 9.64181 4.13829Z"
                                    fill="#B39359" />
                            </svg>
                        </span>
                                                    </span>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="testimonial-pagination hidden sm:block">
                                <div class="swiper-button-prev w-[36px] h-[36px] rounded-full bg-secondary xl:bg-primary  text-white hover:bg-secondary top-auto bottom-[85px] left-[30px]">
                                </div>
                                <div class="swiper-button-next w-[36px] h-[36px] rounded-full bg-secondary xl:bg-primary  text-white hover:bg-secondary top-auto bottom-[85px] left-[85px]">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Testimonial carousel End -->


        <!-- Brand section Start-->
        <div class="brand-section pb-[80px] lg:pb-[120px]">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="mb-[30px] lg:mb-[60px] text-center">
                            <span class="text-secondary text-tiny inline-block mb-2">Our Partner’s</span>
                            <h2 class="font-lora text-primary text-[24px] sm:text-[30px] xl:text-xl capitalize font-medium">Reliable Partner’s<span class="text-secondary">.</span></h2>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="brand-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- swiper-slide start -->
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand1.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand2.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand4.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand5.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center">
                                        <a href="#" class="block">
                                            <img src="assets/images/brand/brand3.png" class="w-auto h-auto block mx-auto" loading="lazy" width="125" height="109" alt="@@title">
                                        </a>
                                    </div>

                                    <!-- swiper-slide end-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand section End-->

        @include('main.layout.footer')