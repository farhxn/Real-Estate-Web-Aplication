@section('title', 'Add Property')
@include('main.layout.head')
<section class="bg-no-repeat bg-center bg-cover bg-[#FFF6F0] h-[350px] lg:h-[513px] flex flex-wrap items-center relative before:absolute before:inset-0 before:content-[''] before:bg-[#000000] before:opacity-[70%]" style="background-image: url('assets/images/breadcrumb/bg-1.png');">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <div class="max-w-[700px]  mx-auto text-center text-white relative z-[1]">
                    <div class="mb-5"><span class="text-base block">Property ADD</span></div>
                    <h1 class="font-lora text-[32px] sm:text-[50px] md:text-[68px] lg:text-[50px] leading-tight xl:text-2xl font-medium">
                        Add Property
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
<div class="pt-[80px] lg:pt-[120px] add-properties-form-select">
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
        <form method="post" action="{{url('RegisterProperty')}}" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-12 gap-x-[30px]">

                <div class="mb-[45px] col-span-12 md:col-span-8">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="property-title"> Property
                        Title</label>
                    <input id="property-title" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" name="pro_name" placeholder="Agency Title">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-4">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="property-title"> Property
                        Price</label>
                    <input id="property-title" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " min="1" type="number" name="price" placeholder="Agency Price">
                </div>
                <!-- <div class="mb-[45px] col-span-12 md:col-span-4">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="Price">Price</label>
                    <div class="relative">
                        <select class="nice-select form-select" id="Price">
                            <option selected value="0">Price $</option>
                            <option value="1">$5000</option>
                            <option value="2">$7000</option>
                        </select>
                    </div>
                </div> -->


                <div class="mb-[45px] col-span-12">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="textarea">Property
                        Description</label>
                    <textarea class="h-[196px] xl:h-[360px] font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] resize-none" name="desc" id="textarea" cols="30" rows="10" placeholder="Write you text here"></textarea>
                </div>

            </div>


            <div class="grid grid-cols-12 gap-x-[30px]">

                <div class="col-span-12">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="Location">Location</label>
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="text" placeholder="Address" name="address" id="patientAddress">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <div class="relative">
                        <select class="nice-select form-select" name="city" id="Price">
                            <option disabled selected>Select City</option>
                            @foreach ($ct as $city)
                            <option value="{{$city->id}}">{{ $city->Name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-[45px] col-span-12">
                    <div id="dynamicInputContainer">
                        <div class="input-group mb-[15px]">
                            <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px]" type="text" id="nearAddress" name="near[]" placeholder="Zip code">
                            <!-- <button type="button" class="removeButton before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all" onclick="removeInputField(this)">Remove</button> -->
                        </div>
                    </div>
                    <button type="button" id="addButton" onclick="addInputField()" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">Add Address</button>
                    <!-- < class="btn btn-sm btn-primary me-2" >Submit</button> -->
                    <!-- <button type="button"  class="mt-[15px] bg-green-500 text-white rounded-[8px] px-[15px] py-[10px] btn-primary" >Add Field</button> -->
                </div>


            </div>



            <div class="grid grid-cols-12 gap-x-[30px]">

                <div class="mb-[45px] col-span-12 ">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="PropertyType1">Property
                        Type</label>
                    <div class="relative">
                        <select class="nice-select form-select" name="status">
                            <option>For Rent</option>
                            <option>For Buy</option>
                            <option>For Sale</option>
                            <option>For Co-Living</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-x-[30px]">
                <div class="col-span-12">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="Propertyinfo1">Property
                        info</label>
                </div>

            </div>


            <div class="grid grid-cols-12 gap-x-[30px]">
                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input id="Propertyinfo1" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " name="area" type="number" placeholder="Area(sqft)">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="number" name="bed" placeholder="Number of  Bedroom">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="number" name="bath" placeholder="Number of Bathroom">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="number" name="room" placeholder="Number of Max Rooms">
                </div>

            </div>


            <div class="grid grid-cols-12 gap-x-[30px]">
                <div class="mb-[45px] col-span-12">

                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary">Add Images</label>
                    <div class="py-[35px] px-[15px] flex flex-wrap items-center justify-center text-center border border-[#1B2D40] border-opacity-60 rounded-[8px]">
                        <div class="relative">
                            <input class="absolute inset-0 z-[0] opacity-0 w-full" type="file" name="img" id="Images">
                            <label for="Images" class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[30px] py-[12px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all flex flex-wrap items-center justify-center cursor-pointer"> <svg class="mr-[5px]" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.5853 8.39666C21.4868 8.25357 21.3542 8.1373 21.1995 8.05834C21.0448 7.97938 20.8729 7.94023 20.6992 7.94444H6.82698C6.53428 7.95684 6.25076 8.05025 6.00799 8.21425C5.76523 8.37825 5.57275 8.60641 5.45198 8.87333C5.44998 8.90181 5.44998 8.9304 5.45198 8.95888L3.66753 15.2778V4.27777H7.63365L9.22865 6.47166C9.28554 6.54951 9.36004 6.6128 9.44607 6.65635C9.53211 6.69989 9.62722 6.72246 9.72365 6.72221H19.5564C19.5564 6.39806 19.4277 6.08718 19.1984 5.85797C18.9692 5.62876 18.6584 5.49999 18.3342 5.49999H10.0353L8.62365 3.55666C8.50987 3.40095 8.36085 3.27438 8.18879 3.18728C8.01673 3.10019 7.8265 3.05505 7.63365 3.05555H3.66753C3.34338 3.05555 3.0325 3.18432 2.80329 3.41353C2.57408 3.64274 2.44531 3.95361 2.44531 4.27777V18.1439C2.45485 18.3638 2.55062 18.5711 2.71189 18.721C2.87316 18.8708 3.08695 18.9511 3.30698 18.9444H18.542C18.6783 18.9499 18.8126 18.9095 18.9234 18.8297C19.0341 18.75 19.115 18.6355 19.1531 18.5044L21.7136 9.27666C21.7614 9.12999 21.7747 8.97428 21.7524 8.82164C21.7302 8.66901 21.673 8.52357 21.5853 8.39666ZM18.0592 17.7222H4.21753L6.58865 9.28277C6.64651 9.20822 6.72869 9.15632 6.82087 9.1361H20.467L18.0592 17.7222Z" fill="#FAFAFA" />
                                </svg> Add Images</label>
                        </div>
                    </div>
                </div>



            </div>

            <div class="grid grid-cols-12 gap-x-[30px]">
                <div class="col-span-12">
                    <label class="mb-[20px] font-lora text-[20px] font-medium leading-none block text-primary" for="Propertyinfo1">Property
                        Pictures</label>
                </div>

            </div>


            <div class="grid grid-cols-12 gap-x-[30px]">
                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input id="Propertyinfo1" class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="file" name="img1" placeholder="Area(sqft)">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="file" placeholder="Number of  Bedroom" name="img2">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="file" placeholder="Number of Bathroom" name="img3">
                </div>

                <div class="mb-[45px] col-span-12 md:col-span-6">
                    <input class="font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px] " type="file" placeholder="Number of Max Rooms" name="img4">
                </div>

            </div>

    </div>
</div>
<!-- create agency End-->

<section class="pb-[80px] lg:pb-[120px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-x-[30px] mb-[-45px]">

            <div class="col-span-12  mb-[45px]">
                <h3 class="mb-[40px] font-lora leading-none text-primary  text-[24px] font-medium">Property Aminities
                </h3>
                    <ul class="mb-[-30px] list-none text-[15px] lg:text-[16px] flex flex-wrap">
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox" name="checkboxes[]" value="Air Conditioning" >
                            <label for="checkbox">Air Conditioning</label>
                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox2" name="checkboxes[]" value="Bedding">
                            <label for="checkbox2">Bedding</label>


                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox3" name="checkboxes[]" value="Balcony">
                            <label for="checkbox3">Balcony</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox4" name="checkboxes[]" value="Cable TV">
                            <label for="checkbox4"> Cable TV</label>


                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox5" name="checkboxes[]" value="Oven">
                            <label for="checkbox5">Oven</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox6" name="checkboxes[]" value="Internet">
                            <label for="checkbox6">Internet</label>
                        </li>

                        <li class="mb-[30px] capitalize w-1/2">

                            <input type="checkbox" id="checkbox7" name="checkboxes[]" value="Parking">
                            <label for="checkbox7">Parking</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox8" name="checkboxes[]" value="Lift">
                            <label for="checkbox8">Lift</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox9" name="checkboxes[]" value="Pool">
                            <label for="checkbox9">Pool</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox10" name="checkboxes[]" value="Dishwasher">
                            <label for="checkbox10">Dishwasher</label>

                        </li>
                        <li class="mb-[30px] capitalize w-1/2">

                            <input type="checkbox" id="checkbox11" name="checkboxes[]" value="Washing Machine">
                            <label for="checkbox11"> Washing Machine</label>


                        </li>
                        <li class="mb-[30px] capitalize w-1/2">
                            <input type="checkbox" id="checkbox12" name="checkboxes[]" value="Toaster">
                            <label for="checkbox12">Toaster</label>

                        </li>


                    </ul>

                <div class="mt-[50px] lg:mt-[80px]">
                    <button class="before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[40px] py-[15px] capitalize font-medium text-white text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all">
                        Add Property</button>
                </div>
            </div>

        </div>
    </div>
</section>
</form>
@include('main.layout.footer')
<script>
    function addInputField() {
        var container = document.getElementById('dynamicInputContainer');
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-[15px]';

        var input = document.createElement('input');
        input.type = 'text';
        input.name = 'near[]';
        input.id = 'nearAddress';
        input.className = 'font-light w-full leading-[1.75] placeholder:opacity-100 placeholder:text-body border border-[#1B2D40] border-opacity-60 rounded-[8px] p-[15px] focus:border-secondary focus:border-opacity-60 focus:outline-none focus:drop-shadow-[0px_6px_15px_rgba(0,0,0,0.1)] h-[60px]';
        input.placeholder = 'Near Address';

        var removeButton = document.createElement('button');
        removeButton.type = 'button';
        removeButton.className = 'removeButton removeButton before:rounded-md before:block before:absolute before:left-auto before:right-0 before:inset-y-0 before:-z-[1] before:bg-secondary before:w-0 hover:before:w-full hover:before:left-0 hover:before:right-auto before:transition-all leading-none px-[20px] py-[15px] capitalize font-medium text-white hidden sm:block text-[14px] xl:text-[16px] relative after:block after:absolute after:inset-0 after:-z-[2] after:bg-primary after:rounded-md after:transition-all';
        removeButton.onclick = function() {
            removeInputField(removeButton);
        };
        removeButton.innerText = 'Remove';

        inputGroup.appendChild(input);
        inputGroup.appendChild(removeButton);
        container.appendChild(inputGroup);
        addAutocomplete(input);
    }

    function removeInputField(button) {
        var inputGroup = button.parentNode;
        inputGroup.parentNode.removeChild(inputGroup);
    }
</script>