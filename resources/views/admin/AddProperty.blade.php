@section('title','Add Property')
@include('admin.layout.head')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Property / </a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Property</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Property</h4>
                    </div>
                    <div class="card-body">
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
                            <div class="row">
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property Name</label>
                                    <input type="text" name="pro_name" class="form-control" placeholder="Ibex office..." required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property Status</label>
                                    <select class="default-select form-control wide" name="status">
                                        <option>For Rent</option>
                                        <option>For Buy</option>
                                        <option>For Sale</option>
                                        <option>For Co-Living</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property City</label>
                                    <select class="default-select  form-control wide" name="city">
                                        @foreach ($ct as $city)
                                        <option value="{{$city->id}}">{{ $city->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property Price</label>
                                    <input type="number" class="form-control" placeholder="Rs. 2800" name="price" required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Max Rooms</label>
                                    <input type="number" class="form-control" placeholder="2.." name="room" required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Bed Rooms</label>
                                    <input type="number" class="form-control" placeholder="3.." name="bed" required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Bath Rooms</label>
                                    <input type="number" class="form-control" placeholder="3..." name="bath" required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Area</label>
                                    <input type="text" class="form-control" placeholder="85 sq ft" name="area">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" id="patientAddress" name="address" placeholder="Address of your property">
                                </div>
                                <div class="mb-3 col">
                                    <label class="form-label">Main Image</label>
                                    <input class="form-control" type="file" id="formFileMultiple" name="img">
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4" name="desc"></textarea>
                                </div>
                            </div>

                            <div class="mb-3 col" id="locationsContainer">
                                <label class="form-label">Near By Locations</label>
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="near[]" id="nearAddress" placeholder="Address Near By of your property">
                                    <button type="button" onclick="addLocationField()" class="btn btn-primary">Add Another Location</button>
                                </div>
                            </div>


                            <div class="row">
                                <div class="mb-3 col">
                                    <label class="form-label">Images</label>
                                    <input type="file" class="form-control" name="img1">
                                </div>
                                <div class="mb-3 col">
                                    <label class="form-label">Images</label>
                                    <input type="file" class="form-control" name="img2">
                                </div>
                                <div class="mb-3 col">
                                    <label class="form-label">Images</label>
                                    <input type="file" class="form-control" name="img3">
                                </div>
                                <div class="mb-3 col">
                                    <label class="form-label">Images</label>
                                    <input type="file" class="form-control" name="img4">
                                </div>


                                <div class="mb-3 col-12">
                                    <label class="form-label d-block">Additional features</label>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Emergency Exit" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4"> Emergency Exit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="CCTV" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5"> CCTV</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Free Wi-Fi" id="flexRadioDefault6">
                                        <label class="form-check-label" for="flexRadioDefault6"> Free Wi-Fi</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Free Parking In The Area" id="flexRadioDefault7">
                                        <label class="form-check-label" for="flexRadioDefault7"> Free Parking In The Area</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Air Conditioning" id="flexRadioDefault8">
                                        <label class="form-check-label" for="flexRadioDefault8"> Air Conditioning</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Security Guard" id="flexRadioDefault9">
                                        <label class="form-check-label" for="flexRadioDefault9"> Security Guard</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Terrace" id="flexRadioDefault10">
                                        <label class="form-check-label" for="flexRadioDefault10"> Terrace</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Laundry Service" id="flexRadioDefault11">
                                        <label class="form-check-label" for="flexRadioDefault11"> Laundry Service</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Elevator Lift" id="flexRadioDefault12">
                                        <label class="form-check-label" for="flexRadioDefault12"> Elevator Lift</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="checkboxes[]" value="Balcony" id="flexRadioDefault13">
                                        <label class="form-check-label" for="flexRadioDefault13"> Balcony</label>
                                    </div>
                                </div>


                                <div class="col-sm-12 pt-3">
                                    <button type="submit" class="btn btn-sm btn-primary me-2">Submit</button>
                                    <button type="button" id="toastr-success-bottom-right" class="btn btn-sm btn-danger light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.footer')
<script>
    function addLocationField() {
        // Create a new div to hold the input and remove button
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-2';

        // Create the new input element
        var newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'near[]';
        newInput.className = 'form-control';
        newInput.placeholder = 'Another nearby address';

        // Create the remove button
        var removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.className = 'btn btn-danger';
        removeBtn.textContent = 'Remove';
        removeBtn.onclick = function() {
            inputGroup.remove();
        };
        inputGroup.appendChild(newInput);
        inputGroup.appendChild(removeBtn);

        document.getElementById('locationsContainer').appendChild(inputGroup);
        addAutocomplete(newInput);
    }
</script>