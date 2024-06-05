@section('title','Property List')
@include('admin.layout.head')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Property</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Listed Properties</a></li>
            </ol>
        </div>
        <!-- row -->
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
                                    @foreach ($prop as $pro)

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
                                        @php
                                        $user = App\Models\users::find($pro->userId);
                                        @endphp
                                        <td><a href="javascript:void(0);"><strong class="text-black">{{ $pro?->listed_by === 1 ? "User" : "Agency" }}  ( {{ $user?->name }} ) </strong></a></td>
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