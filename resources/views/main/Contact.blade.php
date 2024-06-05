@section('title', 'Contact Us')
@include('main.layout.head')

<section class="bg-no-repeat bg-center bg-cover bg-[#E9F1FF] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Contact Information</span></div>
                    <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        Contact Us
                    </h1>

                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">
                        Huge number of propreties availabe here for buy and sell
                        also you can find here co-living property as you like
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->


<div class="pt-[80px] lg:pt-[120px]">
    <div class="container">
        <form id="contact-form" action="#" method="post">
            <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px] items-end">
                <div class="col-span-12 lg:col-span-7 mb-[30px]">
                    <div>
                        <h2 class="font-lora text-primary text-[24px] sm:text-[28px] leading-[1.277] capitalize mb-[10px] font-medium">Send Message</h2>
                        <p class="max-w-[465px] mb-[40px]">
                            Huge number of propreties availabe here for buy, sell and Rent.
                            Also you find here co-living property, lots opportunity
                        </p>
                    </div>
                    <div class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]">

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="First Name" name="name">
                        </div>

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Last Name" name="name">
                        </div>

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="text" placeholder="Phone number" name="number">
                        </div>

                        <div class="col-span-12 md:col-span-6">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="email" placeholder="Email Address" name="email">
                        </div>

                        <div class="col-span-12">
                            <textarea class="h-[196px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="message" id="textarea" cols="30" rows="10" placeholder="Message"></textarea>
                        </div>


                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 mb-[30px] order-last lg:order-none">
                    <div class="h-[385px] rounded-[6px] overflow-hidden xl:ml-[40px]">
                        <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.0976235916137!2d67.06734167442963!3d24.860515145257185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e9f60d36339%3A0x1d64ea8b0a7ca381!2sMohammad%20Ali%20Jinnah%20University!5e0!3m2!1sen!2s!4v1716878046446!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-span-12 mb-[30px] lg:mb-0  order-2 lg:order-none">
                    <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all mb-[30px] lg:mb-0">Contact us</button>
                    <p class="form-messege mt-3"></p>
                </div>
            </div>
        </form>

    </div>
</div>


<!-- contact form start -->
<section class="py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid col-span-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-[30px] mb-[-30px]">

            <div class="flex hover:drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] group">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/map.png" width="40" height="55" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-lora group-hover:text-secondary group-hover:transition-all leading-none text-[28px] text-primary mb-[10px]">Address <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">MAJU Road, Main Shahrah-e-Faisal, 22-E, Block 6 P.E.C.H.S., Karachi</p>
                </div>
            </div>

            <div class="flex hover:drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] group">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/phone.png" width="46" height="46" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-lora group-hover:text-secondary group-hover:transition-all leading-none text-[28px] text-primary mb-[10px]">Call us <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">+92 333 22 45 310</p>
                    <p class="font-light text-[18px] lg:max-w-[230px]">+92 333 22 45 310</p>
                </div>
            </div>

            <div class="flex hover:drop-shadow-[0px_16px_10px_rgba(0,0,0,0.1)] hover:bg-[#F5F9F8] transition-all p-[20px] xl:p-[35px] rounded-[8px] mb-[30px] xl:pl-[65px] group">
                <img class="self-center mr-[20px] sm:mr-[40px] lg:mr-[20px] xl:mr-[40px] sm:mb-[15px] lg:mb-0" src="assets/images/icon/mail.png" width="46" height="52" loading="lazy" alt="image icon">
                <div class="flex-1">
                    <h4 class="font-lora group-hover:text-secondary group-hover:transition-all leading-none text-[28px] text-primary mb-[10px]">Email us <span class="text-secondary">.</span></h4>
                    <p class="font-light text-[18px] lg:max-w-[230px]">
                        <a href="mailto:support@berry.com" class="hover:text-secondary">support@berry.com</a>
                        <a href="mailto:info@berry.com" class="hover:text-secondary">info@berry.com</a>
                    </p>
                </div>
            </div>

        </div>


    </div>
</section>
<!-- contact form end -->

@include('main.layout.footer')