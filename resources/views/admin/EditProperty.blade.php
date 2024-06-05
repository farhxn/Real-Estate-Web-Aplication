@section('title','Edit Property')
@include('admin.layout.head')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Property / </a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Property Detail's of {{$prop?->Name}}</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Property Detail's of {{$prop?->Name}}</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('UpdateProperty',$prop->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property Name</label>
                                    <input type="text" name="pro_name" class="form-control" value="{{$prop?->Name}}" placeholder="Ibex office..." required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property Status</label>
                                    <select class="default-select form-control wide" name="status">
                                        <option @if ($prop->Type == "For Rent") selected
                                            @endif>For Rent</option>
                                        <option @if ($prop->Type == "For Sale") selected
                                            @endif>For Sale</option>
                                        <option @if ($prop->Type == "For Co-Living") selected
                                            @endif>For Co-Living</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property City</label>
                                    <select class="default-select  form-control wide" name="city">
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                        <option>For Co-Living</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Property Price</label>
                                    <input type="number" class="form-control" value="{{$prop?->Prize}}" placeholder="Rs. 2800" name="price" required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Max Rooms</label>
                                    <input type="number" class="form-control" value="{{$prop?->Room}}" placeholder="2.." name="room" required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Bath Rooms</label>
                                    <input type="number" class="form-control" placeholder="3..." value="{{$prop?->Bath}}" name="bath" required="">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Area</label>
                                    <input type="text" class="form-control" placeholder="85 sq ft" value="{{$prop?->Area}}" name="area">
                                </div>
                                <div class="mb-3 col-lg-4 col-md-6">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" id="patientAddress" value="{{$prop?->Location}}" name="address" placeholder="Address of your property">
                                </div>
                                <div class="mb-3 col">
                                    <label class="form-label">Main Image</label>
                                    <input class="form-control" type="file" id="formFileMultiple" name="img">
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="4" name="desc" value="{{$prop?->Room}}">{{$prop?->Desc}}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 col" id="locationsContainer">
                                <label class="form-label">Near By Locations</label>
                                @if($prop->NearBy)
                                @foreach(json_decode($prop->NearBy) as $location)
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="near[]" value="{{ $location }}" placeholder="Address Near By of your property">
                                    <button type="button" onclick="addLocationField()" class="btn btn-primary">Add Another Location</button>
                                </div>
                                @endforeach
                                @else
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" name="near[]" id="nearAddress" placeholder="Address Near By of your property">
                                    <button type="button" onclick="addLocationField()" class="btn btn-primary">Add Another Location</button>
                                </div>
                                @endif
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
                                    @php
                                    // Decode the JSON data from the database
                                    $featuresFromDatabase = json_decode($prop->Features);
                                    // Ensure $featuresFromDatabase is an array
                                    $featuresFromDatabase = is_array($featuresFromDatabase) ? $featuresFromDatabase : [];
                                    // List of all possible features
                                    $features = ['Emergency Exit', 'CCTV', 'Free Wi-Fi', 'Free Parking In The Area', 'Air Conditioning', 'Security Guard', 'Terrace', 'Laundry Service', 'Elevator Lift', 'Balcony'];
                                    @endphp

                                    @foreach($features as $feature)
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" checked class="form-check-input" name="checkboxes[]" value="{{ $feature }}" id="flexRadioDefault{{ $loop->index + 4 }}" @if(in_array($feature, $featuresFromDatabase)) checked @endif>
                                        <label class="form-check-label" for="flexRadioDefault{{ $loop->index + 4 }}">{{ $feature }}</label>
                                    </div>
                                    @endforeach
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