@section('title', 'Create Agency')
@include('main.layout.head')
<section class="bg-no-repeat bg-center bg-cover bg-[#E9F1FF] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Agent Create</span></div>
                    <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        Create Agent
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

<!-- create agency Etart-->
<div class="pt-[80px] lg:pt-[120px]">
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{url('RegisterAgent')}}" method="post" class="grid grid-cols-12 gap-x-[20px] gap-y-[30px]" enctype="multipart/form-data">
            @csrf
            <div class="col-span-12">
                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " value="{{old('Email')}}" name="Email" type="mail" required placeholder="Agent E-Mail">
            </div>

            <div class="col-span-12">
                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)]" value="{{old('title')}}"  name="title" required type="text" placeholder="Agent Name">
            </div>

            <div class="col-span-12">
                <textarea class="h-[196px] xl:h-[485px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" required name="desc" value="{{old('desc')}}" id="textarea" cols="3" rows="4" placeholder="Overview"></textarea>
            </div>

            <div class="col-span-12">
                <textarea class="h-[196px] xl:h-[485px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" required name="bio" id="textarea" cols="3" rows="4" placeholder="Birography"></textarea>
            </div>

            <div class="col-span-12">
                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " name="phNo" type="number" required placeholder="Phone Number">
            </div>
            <div class="col-span-12">
                <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="file" name="img" required placeholder="Address line 2">
            </div>
            <div class="col-span-12">
                <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">create agent</button>
            </div>


        </form>
    </div>
</div>
<br>
@include('main.layout.footer')