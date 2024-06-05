@section('title','Add City')
@include('admin.layout.head')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">City / </a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add City</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add City</h4>
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
                    <form method="post" action="{{url('RegisterCity')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col">
                                    <label class="form-label">City Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Karachi..." required="">
                                </div>

                                <div class="mb-3 col">
                                    <label for="fileUpload" class="form-label small-label">Upload Image:</label>
                                    <input type="file" required name="img" class="form-control form-control-sm" id="fileUpload" accept=".jpeg, .jpg, .png" />
                                </div>
                                <div class="mb-3 col">
                                    <img id="previewImage" src="{{asset('pdf.png')}}" alt="Image Preview" style="display: none; max-width: 100%; height: auto;" />
                                    <p id="fileMessage" style="display: none;"></p>
                                </div>

                            </div>
                            <div class="col-sm-12 pt-3">
                                    <button type="submit" class="btn btn-sm btn-primary me-2">Submit</button>
                                    <button type="button" id="toastr-success-bottom-right" class="btn btn-sm btn-danger light">Cancel</button>
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
    document.getElementById('fileUpload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const imgElement = document.getElementById('previewImage');
        const fileMessage = document.getElementById('fileMessage');

        if (file) {
            const fileType = file.type;
            const validImageTypes = ['image/jpeg', 'image/png', 'image/tiff', 'image/heic'];
            if (validImageTypes.includes(fileType)) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imgElement.src = e.target.result;
                    imgElement.style.display = 'block';
                    fileMessage.style.display = 'none';
                };
                reader.readAsDataURL(file);
            } else {
                var documentsBaseUrl = "{{ asset('documents') }}/";
                var renderImg = documentsBaseUrl + 'pdf.png';
                imgElement.src = renderImg;
                imgElement.style.display = 'block'; // Hide the image element if not an image file
                fileMessage.textContent = 'No preview available for PDFs.';
                fileMessage.style.display = 'block'; // Show the message for non-image files
            }
        }
    });
</script>