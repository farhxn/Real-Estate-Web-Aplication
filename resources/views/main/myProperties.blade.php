@section('title', 'My Properties List')
@include('main.layout.head')

<section class="bg-no-repeat bg-center bg-cover bg-[#E9F1FF] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('{{ asset('assets/images/breadcrumb/bg-1.png') }}');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[600px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">My Properties</span></div>
                    <h1 class="font-lora text-[36px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">My Properties</h1>
                    <p class="text-base mt-5 max-w-[500px] mx-auto text-center">Huge number of propreties availabe here for buy and sell also you can find here co-living property as you like</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popular-properties py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="flex lg:justify-between lg:flex-row flex-col-reverse justify-start items-start lg:items-center mb-10">
                    <div class="flex flex-row items-center">
                        <ul class="grid-tab-menu flex flex-wrap">
                            <li data-grid="grid" class="mr-[10px] leading-none active flex">
                                <button class="leading-none capitalize transition-all text-[16px] ease-out">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_901_7333)">
                                            <path d="M4.37474 0H0.874735C0.391831 0 0 0.391831 0 0.874735V4.37474C0 4.85764 0.391831 5.24947 0.874735 5.24947H4.37474C4.85764 5.24947 5.24947 4.85764 5.24947 4.37474V0.874735C5.25053 0.391831 4.85764 0 4.37474 0Z" fill="currentcolor" />
                                            <path d="M4.37474 7.87474H0.874735C0.391831 7.87474 0 8.26657 0 8.75053V12.2505C0 12.7334 0.391831 13.1253 0.874735 13.1253H4.37474C4.85764 13.1253 5.24947 12.7334 5.24947 12.2505V8.75053C5.25053 8.26657 4.85764 7.87474 4.37474 7.87474Z" fill="currentcolor" />
                                            <path d="M4.37474 15.7505H0.874735C0.391831 15.7505 0 16.1424 0 16.6253V20.1253C0 20.6082 0.391831 21 0.874735 21H4.37474C4.85764 21 5.24947 20.6082 5.24947 20.1253V16.6253C5.25053 16.1424 4.85764 15.7505 4.37474 15.7505Z" fill="currentcolor" />
                                            <path d="M12.2497 0H8.74973C8.26683 0 7.875 0.391831 7.875 0.874735V4.37474C7.875 4.85764 8.26683 5.24947 8.74973 5.24947H12.2497C12.7326 5.24947 13.1245 4.85764 13.1245 4.37474V0.874735C13.1245 0.391831 12.7326 0 12.2497 0Z" fill="currentcolor" />
                                            <path d="M12.2497 7.87474H8.74973C8.26683 7.87474 7.875 8.26657 7.875 8.74948V12.2495C7.875 12.7324 8.26683 13.1242 8.74973 13.1242H12.2497C12.7326 13.1242 13.1245 12.7324 13.1245 12.2495V8.75054C13.1245 8.26657 12.7326 7.87474 12.2497 7.87474Z" fill="currentcolor" />
                                            <path d="M12.2497 15.7505H8.74973C8.26683 15.7505 7.875 16.1424 7.875 16.6253V20.1253C7.875 20.6082 8.26683 21 8.74973 21H12.2497C12.7326 21 13.1245 20.6082 13.1245 20.1253V16.6253C13.1245 16.1424 12.7326 15.7505 12.2497 15.7505Z" fill="currentcolor" />
                                            <path d="M20.1247 0H16.6247C16.1418 0 15.75 0.391831 15.75 0.874735V4.37474C15.75 4.85764 16.1418 5.24947 16.6247 5.24947H20.1247C20.6076 5.24947 20.9995 4.85764 20.9995 4.37474V0.874735C20.9995 0.391831 20.6076 0 20.1247 0Z" fill="currentcolor" />
                                            <path d="M20.1247 7.87474H16.6247C16.1418 7.87474 15.75 8.26657 15.75 8.74948V12.2495C15.75 12.7324 16.1418 13.1242 16.6247 13.1242H20.1247C20.6076 13.1242 20.9995 12.7324 20.9995 12.2495V8.75054C20.9995 8.26657 20.6076 7.87474 20.1247 7.87474Z" fill="currentcolor" />
                                            <path d="M20.1247 15.7505H16.6247C16.1418 15.7505 15.75 16.1424 15.75 16.6253V20.1253C15.75 20.6082 16.1418 21 16.6247 21H20.1247C20.6076 21 20.9995 20.6082 20.9995 20.1253V16.6253C20.9995 16.1424 20.6076 15.7505 20.1247 15.7505Z" fill="currentcolor" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_901_7333">
                                                <rect width="21" height="21" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </li>
                            <li data-grid="list" class="leading-none flex">
                                <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">
                                    <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.7525 18.6641H7.03597C6.34482 18.6641 5.78906 18.1017 5.78906 17.4052C5.78906 16.71 6.34611 16.1462 7.03597 16.1462H23.7525C24.4411 16.1462 24.9994 16.71 24.9994 17.4052C24.9994 18.103 24.4411 18.6641 23.7525 18.6641Z" fill="currentcolor" />
                                        <path d="M23.7525 10.7602H7.03597C6.34482 10.7602 5.78906 10.1965 5.78906 9.5013C5.78906 8.80608 6.34611 8.24236 7.03597 8.24236H23.7525C24.4411 8.24236 24.9994 8.80608 24.9994 9.5013C24.9994 10.1965 24.4411 10.7602 23.7525 10.7602Z" fill="currentcolor" />
                                        <path d="M23.7525 2.85378H7.03597C6.34482 2.85378 5.78906 2.29005 5.78906 1.59483C5.78906 0.899617 6.34611 0.335892 7.03597 0.335892H23.7525C24.4411 0.335892 24.9994 0.899617 24.9994 1.59483C24.9994 2.29005 24.4411 2.85378 23.7525 2.85378Z" fill="currentcolor" />
                                        <path d="M3.35001 1.69248C3.35001 2.62594 2.60084 3.38235 1.67629 3.38235C0.749175 3.38235 0 2.62594 0 1.69248C0 0.759011 0.749175 0 1.67629 0C2.60084 0 3.35001 0.759011 3.35001 1.69248Z" fill="currentcolor" />
                                        <path d="M3.35001 9.5013C3.35001 10.4348 2.60084 11.1912 1.67629 11.1912C0.750464 11.1912 0 10.4348 0 9.5013C0 8.56783 0.749175 7.80882 1.67629 7.80882C2.60084 7.80752 3.35001 8.56653 3.35001 9.5013Z" fill="currentcolor" />
                                        <path d="M3.35001 17.3088C3.35001 18.2423 2.60084 18.9987 1.67629 18.9987C0.750464 18.9987 0 18.2423 0 17.3088C0 16.3754 0.749175 15.6163 1.67629 15.6163C2.60084 15.6163 3.35001 16.3754 3.35001 17.3088Z" fill="currentcolor" />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <div class="ml-3">
                            <span class="text-primary">Sort by:</span>
                            <select id="sortOptions" class="bg-white text-[#9C9C9C] text[14px] capitalize cursor-pointer">
                                <option value="0" selected>Default Order</option>
                                <option value="1">A to Z</option>
                                <option value="2">Z to A</option>
                                <option value="3">All</option>
                            </select>
                        </div>

                    </div>
                    <ul class="all-properties flex flex-wrap lg:pt-[10px]">
                        <li data-tab="all-properties" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none active">
                            <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">All Properties</button>
                        </li>
                        <li data-tab="ForBuy" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none">
                            <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">For Buy</button>
                        </li>
                        <li data-tab="ForSale" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none">
                            <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">For Sale</button>
                        </li>
                        <li data-tab="ForRent" class="mr-[30px] md:mr-[45px] mb-4 lg:mb-0 leading-none">
                            <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">For Rent</button>
                        </li>
                        <li data-tab="co-living2" class="md:mr-[0px] mb-4 lg:mb-0 leading-none">
                            <button class="leading-none capitalize text-primary hover:text-secondary transition-all text-[16px] ease-out">Co living</button>
                        </li>
                    </ul>
                </div>
                <div id="propertyList">
                    @include('main.partials.gridProperties', ['prop' => $prop])
                </div>

                <div class="list grid-tab-content">
                    <div class="col-span-12">
                        <div class="all-properties properties-tab-content active">
                            <div class="grid grid-cols-1 gap-[30px]">
                                @foreach($prop as $pro)
                                @php
                                $listedText = $pro?->Location ;
                                $wordArray = explode(' ', $listedText);

                                if(count($wordArray) > 5) {
                                $trimmedText = implode(' ', array_slice($wordArray, 0, 5)) . '...';
                                } elseif(strlen($listedText) > 10 && !str_contains($listedText, ' ')) {
                                $trimmedText = substr($listedText, 0, 5) . '...';
                                } else {
                                $trimmedText = $listedText;
                                }

                                @endphp
                                <div class="overflow-hidden rounded-md text-center transition-all duration-300 drop-shadow-[0px_2px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] hover:-translate-y-[10px] flex flex-wrap flex-col md:flex-row items-end">
                                    <div class="relative mb-[15px] lg:mb-[0px] block w-full lg:w-[300px]">

                                        <a href="{{url('PropertyDetail',$pro->id)}}" class="block h-[250px]">
                                            <img src="{{ asset('propertyPictures/'. $pro?->MainPic) }}" class="w-full h-full rounded-tl-[6px] lg:rounded-bl-[6px] object-cover" loading="lazy" width="300" height="250" alt="{{ $pro->Name }}">
                                        </a>

                                        <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">05</button>
                                        </div>

                                        <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal">{{ $pro->Type }}</span>

                                    </div>

                                    <div class="flex flex-col relative w-full lg:w-[calc(100%-300px)]">
                                        <div class="text-left px-4 lg:px-0 w-full md:w-auto md:flex-1 lg:mr-7 xl:mr-[55px] bg-[#FFFDFC] lg:ml-[30px]">
                                            <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">{{ $pro->Name }}</a></h3>
                                            <h4><a href="properties-details.html" class="font-light text-tiny underline">{{ $trimmedText }}</a></h4>
                                            <span class="font-light text-sm block">Added: {{ $pro->created_at->format('Y-m-d') }} </span>
                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-[15px] mb-[10px] pt-[10px] border-t border-[#E0E0E0]">
                                                    <span class="font-lora text-base text-primary leading-none font-medium">Price: Rs {{ $pro->Prize }}</span>
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

                                        <ul class="flex flex-nowrap items-center bg-[#F4F4F4] w-full mt-5">
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Area }}</span>
                                            </li>
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Room }}</span>
                                            </li>
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Bath }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="ForBuy properties-tab-content">
                            <div class="grid grid-cols-1 gap-[30px]">
                                @foreach($prop as $pro)
                                @if($pro->Type == "For Buy")
                                @php
                                $listedText = $pro?->Location ;
                                $wordArray = explode(' ', $listedText);

                                if(count($wordArray) > 5) {
                                $trimmedText = implode(' ', array_slice($wordArray, 0, 5)) . '...';
                                } elseif(strlen($listedText) > 10 && !str_contains($listedText, ' ')) {
                                $trimmedText = substr($listedText, 0, 5) . '...';
                                } else {
                                $trimmedText = $listedText;
                                }

                                @endphp
                                <div class="overflow-hidden rounded-md text-center transition-all duration-300 drop-shadow-[0px_2px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] hover:-translate-y-[10px] flex flex-wrap flex-col md:flex-row items-end">
                                    <div class="relative mb-[15px] lg:mb-[0px] block w-full lg:w-[300px]">

                                        <a href="{{url('PropertyDetail',$pro->id)}}" class="block h-[250px]">
                                            <img src="{{ asset('propertyPictures/'. $pro?->MainPic) }}" class="w-full h-full rounded-tl-[6px] lg:rounded-bl-[6px] object-cover" loading="lazy" width="300" height="250" alt="{{ $pro->Name }}">
                                        </a>

                                        <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">05</button>
                                        </div>

                                        <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal">{{ $pro->Type }}</span>

                                    </div>

                                    <div class="flex flex-col relative w-full lg:w-[calc(100%-300px)]">
                                        <div class="text-left px-4 lg:px-0 w-full md:w-auto md:flex-1 lg:mr-7 xl:mr-[55px] bg-[#FFFDFC] lg:ml-[30px]">
                                            <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">{{ $pro->Name }}</a></h3>
                                            <h4><a href="properties-details.html" class="font-light text-tiny underline">{{ $trimmedText }}</a></h4>
                                            <span class="font-light text-sm block">Added: {{ $pro->created_at->format('Y-m-d') }} </span>
                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-[15px] mb-[10px] pt-[10px] border-t border-[#E0E0E0]">
                                                    <span class="font-lora text-base text-primary leading-none font-medium">Price: Rs {{ $pro->Prize }}</span>
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

                                        <ul class="flex flex-nowrap items-center bg-[#F4F4F4] w-full mt-5">
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Area }}</span>
                                            </li>
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Room }}</span>
                                            </li>
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Bath }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="ForSale properties-tab-content">
                            <div class="grid grid-cols-1 gap-[30px]">
                                @foreach($prop as $pro)
                                @if($pro->Type == "For Sale")
                                @php
                                $listedText = $pro?->Location ;
                                $wordArray = explode(' ', $listedText);

                                if(count($wordArray) > 5) {
                                $trimmedText = implode(' ', array_slice($wordArray, 0, 5)) . '...';
                                } elseif(strlen($listedText) > 10 && !str_contains($listedText, ' ')) {
                                $trimmedText = substr($listedText, 0, 5) . '...';
                                } else {
                                $trimmedText = $listedText;
                                }

                                @endphp
                                <div class="overflow-hidden rounded-md text-center transition-all duration-300 drop-shadow-[0px_2px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] hover:-translate-y-[10px] flex flex-wrap flex-col md:flex-row items-end">
                                    <div class="relative mb-[15px] lg:mb-[0px] block w-full lg:w-[300px]">

                                        <a href="{{url('PropertyDetail',$pro->id)}}" class="block h-[250px]">
                                            <img src="{{ asset('propertyPictures/'. $pro?->MainPic) }}" class="w-full h-full rounded-tl-[6px] lg:rounded-bl-[6px] object-cover" loading="lazy" width="300" height="250" alt="{{ $pro->Name }}">
                                        </a>

                                        <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                            <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">05</button>
                                        </div>

                                        <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal">{{ $pro->Type }}</span>

                                    </div>

                                    <div class="flex flex-col relative w-full lg:w-[calc(100%-300px)]">
                                        <div class="text-left px-4 lg:px-0 w-full md:w-auto md:flex-1 lg:mr-7 xl:mr-[55px] bg-[#FFFDFC] lg:ml-[30px]">
                                            <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">{{ $pro->Name }}</a></h3>
                                            <h4><a href="properties-details.html" class="font-light text-tiny underline">{{ $trimmedText }}</a></h4>
                                            <span class="font-light text-sm block">Added: {{ $pro->created_at->format('Y-m-d') }} </span>
                                            <ul>
                                                <li class="flex flex-wrap items-center justify-between mt-[15px] mb-[10px] pt-[10px] border-t border-[#E0E0E0]">
                                                    <span class="font-lora text-base text-primary leading-none font-medium">Price: Rs {{ $pro->Prize }}</span>
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

                                        <ul class="flex flex-nowrap items-center bg-[#F4F4F4] w-full mt-5">
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Area }}</span>
                                            </li>
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Room }}</span>
                                            </li>
                                            <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                                <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" fill="#494949" />
                                                </svg>
                                                <span>{{ $pro->Bath }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="ForRent properties-tab-content">
                        <div class="grid grid-cols-1 gap-[30px]">
                            @foreach($prop as $pro)
                            @if($pro->Type == "For Rent")
                            @php
                            $listedText = $pro?->Location ;
                            $wordArray = explode(' ', $listedText);

                            if(count($wordArray) > 5) {
                            $trimmedText = implode(' ', array_slice($wordArray, 0, 5)) . '...';
                            } elseif(strlen($listedText) > 10 && !str_contains($listedText, ' ')) {
                            $trimmedText = substr($listedText, 0, 5) . '...';
                            } else {
                            $trimmedText = $listedText;
                            }

                            @endphp
                            <div class="overflow-hidden rounded-md text-center transition-all duration-300 drop-shadow-[0px_2px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] hover:-translate-y-[10px] flex flex-wrap flex-col md:flex-row items-end">
                                <div class="relative mb-[15px] lg:mb-[0px] block w-full lg:w-[300px]">

                                    <a href="{{url('PropertyDetail',$pro->id)}}" class="block h-[250px]">
                                        <img src="{{ asset('propertyPictures/'. $pro?->MainPic) }}" class="w-full h-full rounded-tl-[6px] lg:rounded-bl-[6px] object-cover" loading="lazy" width="300" height="250" alt="{{ $pro->Name }}">
                                    </a>

                                    <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                        <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">05</button>
                                    </div>

                                    <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal">{{ $pro->Type }}</span>

                                </div>

                                <div class="flex flex-col relative w-full lg:w-[calc(100%-300px)]">
                                    <div class="text-left px-4 lg:px-0 w-full md:w-auto md:flex-1 lg:mr-7 xl:mr-[55px] bg-[#FFFDFC] lg:ml-[30px]">
                                        <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">{{ $pro->Name }}</a></h3>
                                        <h4><a href="properties-details.html" class="font-light text-tiny underline">{{ $trimmedText }}</a></h4>
                                        <span class="font-light text-sm block">Added: {{ $pro->created_at->format('Y-m-d') }} </span>
                                        <ul>
                                            <li class="flex flex-wrap items-center justify-between mt-[15px] mb-[10px] pt-[10px] border-t border-[#E0E0E0]">
                                                <span class="font-lora text-base text-primary leading-none font-medium">Price: Rs {{ $pro->Prize }}</span>
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

                                    <ul class="flex flex-nowrap items-center bg-[#F4F4F4] w-full mt-5">
                                        <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                            <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" fill="#494949" />
                                            </svg>
                                            <span>{{ $pro->Area }}</span>
                                        </li>
                                        <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                            <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" fill="#494949" />
                                            </svg>
                                            <span>{{ $pro->Room }}</span>
                                        </li>
                                        <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                            <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" fill="#494949" />
                                            </svg>
                                            <span>{{ $pro->Bath }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="co-living2 properties-tab-content">
                    <div class="grid grid-cols-1 gap-[30px]">
                        @foreach($prop as $pro)
                        @if($pro->Type == "For Co-Living")
                        @php
                        $listedText = $pro?->Location ;
                        $wordArray = explode(' ', $listedText);

                        if(count($wordArray) > 5) {
                        $trimmedText = implode(' ', array_slice($wordArray, 0, 5)) . '...';
                        } elseif(strlen($listedText) > 10 && !str_contains($listedText, ' ')) {
                        $trimmedText = substr($listedText, 0, 5) . '...';
                        } else {
                        $trimmedText = $listedText;
                        }

                        @endphp
                        <div class="overflow-hidden rounded-md text-center transition-all duration-300 drop-shadow-[0px_2px_5px_rgba(0,0,0,0.1)] bg-[#FFFDFC] hover:-translate-y-[10px] flex flex-wrap flex-col md:flex-row items-end">
                            <div class="relative mb-[15px] lg:mb-[0px] block w-full lg:w-[300px]">

                                <a href="{{url('PropertyDetail',$pro->id)}}" class="block h-[250px]">
                                    <img src="{{ asset('propertyPictures/'. $pro?->MainPic) }}" class="w-full h-full rounded-tl-[6px] lg:rounded-bl-[6px] object-cover" loading="lazy" width="300" height="250" alt="{{ $pro->Name }}">
                                </a>

                                <div class="flex flex-wrap flex-col absolute top-5 right-5">
                                    <button class="flex flex-wrap items-center bg-primary p-[5px] rounded-[2px] text-white mb-[5px] text-xs"><img class="mr-1" src="assets/images/icon/camera.png" loading="lazy" width="13" height="10" alt="camera icon">05</button>
                                </div>

                                <span class="absolute bottom-5 left-5 bg-[#FFFDFC] p-[5px] rounded-[2px] text-primary leading-none text-[14px] font-normal">{{ $pro->Type }}</span>

                            </div>

                            <div class="flex flex-col relative w-full lg:w-[calc(100%-300px)]">
                                <div class="text-left px-4 lg:px-0 w-full md:w-auto md:flex-1 lg:mr-7 xl:mr-[55px] bg-[#FFFDFC] lg:ml-[30px]">
                                    <h3><a href="properties-details.html" class="font-lora leading-tight text-[22px] xl:text-[26px] text-primary font-medium">{{ $pro->Name }}</a></h3>
                                    <h4><a href="properties-details.html" class="font-light text-tiny underline">{{ $trimmedText }}</a></h4>
                                    <span class="font-light text-sm block">Added: {{ $pro->created_at->format('Y-m-d') }} </span>
                                    <ul>
                                        <li class="flex flex-wrap items-center justify-between mt-[15px] mb-[10px] pt-[10px] border-t border-[#E0E0E0]">
                                            <span class="font-lora text-base text-primary leading-none font-medium">Price: Rs {{ $pro->Prize }}</span>
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

                                <ul class="flex flex-nowrap items-center bg-[#F4F4F4] w-full mt-5">
                                    <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                        <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.8125 9.68709V4.31285C12.111 4.23634 12.384 4.0822 12.6037 3.86607C12.8234 3.64994 12.982 3.37951 13.0634 3.08226C13.1448 2.78501 13.1461 2.47151 13.0671 2.1736C12.9882 1.87569 12.8318 1.60398 12.6139 1.38605C12.396 1.16812 12.1243 1.01174 11.8263 0.932792C11.5284 0.85384 11.2149 0.855126 10.9177 0.936521C10.6204 1.01792 10.35 1.17652 10.1339 1.39623C9.91774 1.61593 9.7636 1.88892 9.68709 2.18747H4.31285C4.23634 1.88892 4.0822 1.61593 3.86607 1.39623C3.64994 1.17652 3.37951 1.01792 3.08226 0.936521C2.78501 0.855126 2.47151 0.85384 2.1736 0.932792C1.87569 1.01174 1.60398 1.16812 1.38605 1.38605C1.16812 1.60398 1.01174 1.87569 0.932792 2.1736C0.85384 2.47151 0.855126 2.78501 0.936521 3.08226C1.01792 3.37951 1.17652 3.64994 1.39623 3.86607C1.61593 4.0822 1.88892 4.23634 2.18747 4.31285V9.68709C1.88892 9.7636 1.61593 9.91774 1.39623 10.1339C1.17652 10.35 1.01792 10.6204 0.936521 10.9177C0.855126 11.2149 0.85384 11.5284 0.932792 11.8263C1.01174 12.1243 1.16812 12.396 1.38605 12.6139C1.60398 12.8318 1.87569 12.9882 2.1736 13.0671C2.47151 13.1461 2.78501 13.1448 3.08226 13.0634C3.37951 12.982 3.64994 12.8234 3.86607 12.6037C4.0822 12.384 4.23634 12.111 4.31285 11.8125H9.68709C9.7636 12.111 9.91774 12.384 10.1339 12.6037C10.35 12.8234 10.6204 12.982 10.9177 13.0634C11.2149 13.1448 11.5284 13.1461 11.8263 13.0671C12.1243 12.9882 12.396 12.8318 12.6139 12.6139C12.8318 12.396 12.9882 12.1243 13.0671 11.8263C13.1461 11.5284 13.1448 11.2149 13.0634 10.9177C12.982 10.6204 12.8234 10.35 12.6037 10.1339C12.384 9.91774 12.111 9.7636 11.8125 9.68709ZM11.375 1.74997C11.548 1.74997 11.7172 1.80129 11.8611 1.89744C12.005 1.99358 12.1171 2.13024 12.1834 2.29012C12.2496 2.45001 12.2669 2.62594 12.2332 2.79568C12.1994 2.96541 12.1161 3.12132 11.9937 3.24369C11.8713 3.36606 11.7154 3.4494 11.5457 3.48316C11.3759 3.51692 11.2 3.49959 11.0401 3.43337C10.8802 3.36714 10.7436 3.25499 10.6474 3.11109C10.5513 2.9672 10.5 2.79803 10.5 2.62497C10.5002 2.39298 10.5925 2.17055 10.7565 2.00651C10.9206 1.84246 11.143 1.7502 11.375 1.74997ZM1.74997 2.62497C1.74997 2.45191 1.80129 2.28274 1.89744 2.13885C1.99358 1.99495 2.13024 1.8828 2.29012 1.81658C2.45001 1.75035 2.62594 1.73302 2.79568 1.76678C2.96541 1.80055 3.12132 1.88388 3.24369 2.00625C3.36606 2.12862 3.4494 2.28453 3.48316 2.45427C3.51692 2.624 3.49959 2.79993 3.43337 2.95982C3.36714 3.1197 3.25499 3.25636 3.11109 3.35251C2.9672 3.44865 2.79803 3.49997 2.62497 3.49997C2.39298 3.49974 2.17055 3.40748 2.00651 3.24343C1.84246 3.07939 1.7502 2.85696 1.74997 2.62497ZM2.62497 12.25C2.45191 12.25 2.28274 12.1987 2.13885 12.1025C1.99495 12.0064 1.8828 11.8697 1.81658 11.7098C1.75035 11.5499 1.73302 11.374 1.76678 11.2043C1.80055 11.0345 1.88388 10.8786 2.00625 10.7563C2.12862 10.6339 2.28453 10.5505 2.45427 10.5168C2.624 10.483 2.79993 10.5003 2.95982 10.5666C3.1197 10.6328 3.25636 10.745 3.35251 10.8888C3.44865 11.0327 3.49997 11.2019 3.49997 11.375C3.49974 11.607 3.40748 11.8294 3.24343 11.9934C3.07939 12.1575 2.85696 12.2497 2.62497 12.25ZM9.68709 10.9375H4.31285C4.23448 10.6367 4.07729 10.3622 3.8575 10.1424C3.63771 9.92265 3.36326 9.76546 3.06247 9.68709V4.31285C3.36324 4.23444 3.63766 4.07724 3.85745 3.85745C4.07724 3.63766 4.23444 3.36324 4.31285 3.06247H9.68709C9.76546 3.36326 9.92265 3.63771 10.1424 3.8575C10.3622 4.07729 10.6367 4.23448 10.9375 4.31285V9.68709C10.6367 9.76542 10.3622 9.92259 10.1424 10.1424C9.92259 10.3622 9.76542 10.6367 9.68709 10.9375ZM11.375 12.25C11.2019 12.25 11.0327 12.1987 10.8888 12.1025C10.745 12.0064 10.6328 11.8697 10.5666 11.7098C10.5003 11.5499 10.483 11.374 10.5168 11.2043C10.5505 11.0345 10.6339 10.8786 10.7563 10.7563C10.8786 10.6339 11.0345 10.5505 11.2043 10.5168C11.374 10.483 11.5499 10.5003 11.7098 10.5666C11.8697 10.6328 12.0064 10.745 12.1025 10.8888C12.1987 11.0327 12.25 11.2019 12.25 11.375C12.2496 11.6069 12.1573 11.8293 11.9933 11.9933C11.8293 12.1573 11.6069 12.2496 11.375 12.25Z" fill="#494949" />
                                        </svg>
                                        <span>{{ $pro->Area }}</span>
                                    </li>
                                    <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                        <svg class="mr-[5px]" width="14" height="10" viewBox="0 0 14 10" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.0002 4.18665V2.33331C13.0002 1.23331 12.1002 0.333313 11.0002 0.333313H8.3335C7.82016 0.333313 7.3535 0.533313 7.00016 0.853313C6.64683 0.533313 6.18016 0.333313 5.66683 0.333313H3.00016C1.90016 0.333313 1.00016 1.23331 1.00016 2.33331V4.18665C0.593496 4.55331 0.333496 5.07998 0.333496 5.66665V9.66665H1.66683V8.33331H12.3335V9.66665H13.6668V5.66665C13.6668 5.07998 13.4068 4.55331 13.0002 4.18665ZM8.3335 1.66665H11.0002C11.3668 1.66665 11.6668 1.96665 11.6668 2.33331V3.66665H7.66683V2.33331C7.66683 1.96665 7.96683 1.66665 8.3335 1.66665ZM2.3335 2.33331C2.3335 1.96665 2.6335 1.66665 3.00016 1.66665H5.66683C6.0335 1.66665 6.3335 1.96665 6.3335 2.33331V3.66665H2.3335V2.33331ZM1.66683 6.99998V5.66665C1.66683 5.29998 1.96683 4.99998 2.3335 4.99998H11.6668C12.0335 4.99998 12.3335 5.29998 12.3335 5.66665V6.99998H1.66683Z" fill="#494949" />
                                        </svg>
                                        <span>{{ $pro->Room }}</span>
                                    </li>
                                    <li class="flex flex-wrap items-center 2xl:px-[35px] xl:px-[20px] sm:px-[40px] md:px-[15px] px-[15px] py-2 border-r border-[#E0DEDE]">
                                        <svg class="mr-[5px]" width="14" height="14" viewBox="0 0 14 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.6875 7.65627H2.1875V2.7344C2.18699 2.54904 2.22326 2.36543 2.29419 2.19418C2.36512 2.02294 2.46932 1.86746 2.60075 1.73676L2.61168 1.72582C2.81765 1.52015 3.0821 1.38309 3.36889 1.33336C3.65568 1.28362 3.95083 1.32364 4.21403 1.44795C3.96546 1.86122 3.86215 2.34571 3.9205 2.82443C3.97885 3.30315 4.19552 3.74864 4.53608 4.0901L4.83552 4.38954L4.28436 4.94073L4.90304 5.55941L5.4542 5.00825L8.5082 1.95431L9.05937 1.40314L8.44066 0.78443L7.88946 1.3356L7.59002 1.03616C7.23151 0.678646 6.75892 0.458263 6.2546 0.413412C5.75029 0.368561 5.24622 0.502086 4.83025 0.790719C4.3916 0.513704 3.87178 0.394114 3.35619 0.451596C2.84059 0.509078 2.35987 0.740213 1.993 1.10703L1.98207 1.11797C1.76912 1.32975 1.6003 1.58165 1.48537 1.85911C1.37044 2.13657 1.31168 2.43407 1.3125 2.7344V7.65627H0.4375V8.53127H1.3125V9.37072C1.31248 9.44126 1.32386 9.51133 1.34619 9.57823L2.16016 12.02C2.20359 12.1508 2.28712 12.2645 2.39887 12.345C2.51062 12.4256 2.64491 12.4689 2.78266 12.4688H3.1354L2.81641 13.5625H3.72786L4.04688 12.4688H9.73711L10.0652 13.5625H10.9785L10.6504 12.4688H11.2172C11.355 12.4689 11.4893 12.4256 11.6011 12.3451C11.7129 12.2645 11.7964 12.1508 11.8398 12.02L12.6538 9.57823C12.6761 9.51133 12.6875 9.44126 12.6875 9.37072V8.53127H13.5625V7.65627H12.6875ZM5.15484 1.65486C5.3959 1.41433 5.72254 1.27924 6.06308 1.27924C6.40362 1.27924 6.73026 1.41433 6.97132 1.65486L7.2707 1.95431L5.45429 3.77072L5.15484 3.47134C4.91432 3.23027 4.77924 2.90364 4.77924 2.5631C4.77924 2.22256 4.91432 1.89593 5.15484 1.65486ZM11.8125 9.33518L11.0597 11.5938H2.94033L2.1875 9.33518V8.53127H11.8125V9.33518Z" fill="#494949" />
                                        </svg>
                                        <span>{{ $pro->Bath }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</section>
@include('main.layout.footer')
<script async src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#sortOptions').on('change', function() {
            var sortOrder = $(this).val();
            $.ajax({
                url: '{{ route("sort.properties") }}', // Define the route in your web.php file
                type: 'GET',
                data: {
                    order: sortOrder
                },
                success: function(response) {
                    // Assuming you return the sorted HTML directly from the controller
                    $('#propertyList').html(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
