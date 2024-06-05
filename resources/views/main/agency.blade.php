@section('title', 'Agency')
@include('main.layout.head')
<section class="bg-no-repeat bg-center bg-cover bg-[#E9F1FF] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Listed Agencies</span></div>
                    <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        Our Agencies
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

<!-- Brand Section Etart-->
<section class="py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center">
            @if (session()->has('LoginAgency'))
            <a href="{{ url('EditAgency') }}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Edit agency</a>
            <a href="{{ url('AddAgent') }}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add Agent</a>
            @else
            <a href="{{ url('CreateAgency') }}" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">create agency</a>
            @endif
            </div>

        </div>
        <br>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-[30px]">
            @foreach ($agency as $ag)
            @php
            $listedText = $ag->name;
            $wordArray = explode(' ', $listedText);

            if(count($wordArray) > 5) {
            $trimmedText = implode(' ', array_slice($wordArray, 0, 5)) . '...';
            } elseif(strlen($listedText) > 10 && !str_contains($listedText, ' ')) {
            $trimmedText = substr($listedText, 0, 5) . '...';
            } else {
            $trimmedText = $listedText;
            }

            @endphp
            <div class="p-[25px] sm:p-[20px] lg:p-[25px] lg:pb-[30px] drop-shadow-[0px_2px_15px_rgba(0,0,0,0.1)] bg-[#FFFDFC] rounded-[5px] flex flex-col">
                <img class="self-center xl:mb-0 w-full" src="{{ asset('Agency/'.$ag->img) }}" alt="brand logo" style="height: 250px; width: 100%;  object-fit: contain;">
                <div class="flex-1 mt-[15px]">
                    <div class="sm:flex flex-wrap md:items-center md:justify-center flex-col text-center">
                        <h4 class="font-lora text-primary text-[22px] lg:text-[28px]">{{ $ag->title }}<span class="text-secondary">.</span></h4>
                        <span class="underline text-secondary font-light block mb-[10px]">{{ $trimmedText }}</span>
                        <p class="mb-[15px] xl:mb-[30px] font-lora text-primary text-[16px]">{{ $PropertyCounts[$ag->id] ?? 0 }} Properties - and {{ $AgentCounts[$ag->id] ?? 0  }} Agents</p>
                        <a href="{{ url('AgencyDetail',$ag->id) }}" class="inline-block before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white text-center text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</section>
<!-- Brand Section End-->

@include('main.layout.footer')