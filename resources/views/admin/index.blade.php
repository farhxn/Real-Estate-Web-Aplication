@section('title','Admin Home')

@include('admin.layout.head')
<div class="content-body">
    <div class="container-fluid">
        <div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
            <div class="me-auto d-lg-block d-block">
                <h2 class="text-black font-w600">Dashboard</h2>
                <p class="mb-0">Welcome to Berry Property Admin Panel</p>
            </div>
            <a href="{{url('AdminHome')}}" class="btn btn-primary rounded light">Refresh</a>
        </div>
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card bg-danger property-bx text-white">
                            <div class="card-body">
                                <div class="media d-sm-flex d-block align-items-center">
                                    <span class="me-4 d-block mb-sm-0 mb-3">
                                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z" fill="white" />
                                            <path d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z" fill="white" />
                                            <path d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z" fill="white" />
                                        </svg>
                                    </span>
                                    <div class="media-body mb-sm-0 mb-3 me-5">
                                        <h4 class="fs-22 text-white">Total Properties</h4>
                                        <div class="progress mt-3 mb-2" style="height:8px;">
                                            <div class="progress-bar bg-white progress-animated" style="width: {{ $prop }}%; height:8px;" role="progressbar">
                                                <span class="sr-only">{{ $prop }}% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="fs-35 font-w500">{{ $prop }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card property-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-28 text-black font-w600">{{ $sale }}</h2>
                                        <p class="property-p mb-0 text-black font-w500">Properties for Sale</p>
                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 30, "radius": {{ $sale }}}'>{{ $sale }}/100</span>
                                        <small class="text-primary">{{ $sale }}%</small>
                                        <span class="circle bgl-primary"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card property-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-28 text-black font-w600">{{ $rent }}</h2>
                                        <p class="property-p mb-0 text-black font-w500">Properties for Rent</p>
                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>{{ $rent }}/100</span>
                                        <small class="text-success">{{ $rent }}%</small>
                                        <span class="circle bgl-success"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card property-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-28 text-black font-w600">{{ $buy }}</h2>
                                        <p class="property-p mb-0 text-black font-w500">Properties for Buy</p>
                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)],   "innerRadius": 38, "radius": 10}'>{{ $buy }}/100</span>
                                        <small class="text-danger">{{ $buy }}%</small>
                                        <span class="circle bgl-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card property-card">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <div class="media-body me-3">
                                        <h2 class="fs-28 text-black font-w600">{{ $co }}</h2>
                                        <p class="property-p mb-0 text-black font-w500">Properties for CO-Living</p>
                                    </div>
                                    <div class="d-inline-block position-relative donut-chart-sale">
                                        <span class="donut1" data-peity='{ "fill": ["rgb(200, 200, 50)", "rgba(255, 255, 150, 1)"],   "innerRadius": 38, "radius": 10}'>{{ $co }}/100</span>
                                        <small class="text-warning">{{ $co }}%</small>
                                        <span class="circle bgl-warning"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Properties</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 850px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>City</th>
                                        <th>Area</th>
                                        <th>Address</th>
                                        <th>Uploaded By</th>
                                        <th>Status</th>
                                        <th>Listed At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pr as $pro)

                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="{{ asset('propertyPictures/'. $pro?->MainPic) }}" alt="/"></td>
                                        <td>{{$pro?->Name}}</td>
                                        <td>{{$pro?->Type}}</td>
                                        <td>{{$pro?->City}}</td>
                                        <td>{{$pro?->Area}}</td>
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

                                        // Prepare the full location text for the URL
                                        $locationUrl = 'https://www.google.com/maps/search/?api=1&query=' . urlencode($listedText);
                                        @endphp

                                        <td> <a href="{{ $locationUrl }}" target="_blank">
                                                <strong class="text-black">{{ $trimmedText }}</strong>
                                            </a>
                                        </td>
                                        <td><a href="javascript:void(0);"><strong class="text-black">{{ $pro?->listed_by === 0 ? "User" : "Agency" }} {{ $pro?->uesrId }} </strong></a></td>
                                        <td> <span class="badge light  badge-{{$pro?->activate === 0?'success':'danger' }}">
                                                <i class="fa fa-circle text-{{$pro?->activate === 0?'success':'danger' }} me-1"></i>
                                                {{$pro?->activate === 0?'Activated':'Not Activated' }}
                                            </span> </td>
                                        <td>{{$pro?->created_at}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a data-url="{{ url('StatusProperty', $pro->id) }}" class="btn btn-primary ban-btn shadow btn-xs sharp me-1"><i class="fa fa-ban"></i></a>
                                                <a href="{{ url('EditProperty',$pro->id) }}" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                <button data-url="{{ url('DeleteProperty', $pro->id) }}" class="btn btn-danger delete-btn shadow btn-xs sharp "><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layout.footer')