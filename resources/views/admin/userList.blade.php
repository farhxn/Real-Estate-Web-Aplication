@section('title','City List')
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Listed At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($city as $pro)
                                    <tr>
                                        <td>{{$pro?->name}}</td>
                                        <td>{{$pro?->email}}</td>
                                        <td>{{ $pro?->Role == "0" ? "Customer" : ($pro?->Role == "1" ? "Agent" : "Admin") }}</td>
                                        <td>{{$pro?->created_at}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ url('EditCity',$pro->id) }}" class="btn btn-warning shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                <button data-url="{{ url('DeleteCity', $pro->id) }}" class="btn btn-danger delete-btn shadow btn-xs sharp "><i class="fa fa-trash"></i></button>
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