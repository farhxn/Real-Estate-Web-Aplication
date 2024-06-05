@section('title', 'Register')
@include('main.layout.head')

<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Register</span></div>
                    <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        Register now!
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


<div class="py-[80px] lg:py-[120px]">
    <div class="container">
        <form action="{{url('RegisterUser')}}" method="post">
            @csrf
            <div class="grid grid-cols-12 gap-x-[30px] mb-[-30px]">
                <div class="col-span-12 lg:col-span-6 mb-[30px]">
                    <h2 class="font-lora text-primary text-[24px] sm:text-[30px] leading-[1.277] xl:text-xl mb-[15px] font-medium">
                        Create Account<span class="text-secondary">.</span></h2>

                    <p class="max-w-[465px] mb-[50px]">
                        Huge number of propreties availabe here for buy, sell and Rent.
                        Also you find here co-living property, lots opportunity you have to
                        choose here and enjoy huge discount you can get.
                    </p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <div class="grid grid-cols-12 gap-x-[20px] gap-y-[35px]">

                        <div class="col-span-12">
                            <input required class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " name="name" value="{{old('name')}}" type="text" placeholder="Usename">
                        </div>

                        <div class="col-span-12">
                            <input required class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " name="mail" type="email" value="{{old('mail')}}" placeholder="Email">
                        </div>


                        <div class="col-span-12">
                            <input required min="8" class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " name="password" type="password" placeholder="Password">

                        </div>

                        <div class="col-span-12">
                            <!-- <input class="font-light w-full sm:w-[400px] leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-primary border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] " type="password" placeholder="Conform Password"> -->

                            <div class="flex flex-wrap items-center justify-between w-full sm:w-[400px]">
                                <div class="flex flex-wrap mt-[15px] items-center">
                                    <input type="checkbox" required id="checkbox1" name="Remember me">
                                    <label for="checkbox1" class="ml-[5px] cursor-pointer"> I agree with the
                                        <a href="#" class="underline text-secondary">Terms &
                                            Conditions</a></label><br>
                                </div>
                            </div>
                        </div>



                        <div class="col-span-12">
                            <div class="flex flex-wrap items-center">
                                <button type="submit" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[40px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Register</button>

                                <p class="ml-[40px]">Already have an Account? <a href="{{ url('Login') }}" class="text-secondary">Login</a></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-6 mb-[30px]">
                    <img src="assets/images/contact/image2.png" class="w-full lg:max-w-[538px] h-auto rounded-[10px]" width="546" height="668" alt="image">
                </div>
            </div>
        </form>

    </div>
</div>

@include('main.layout.footer')