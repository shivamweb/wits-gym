@extends('GymOwner.master1')
@section('title','Add Enquiry')
@section('content')

<aside class="right-side right-padding">
    <section class="content-header">
        <!--section starts-->
        {{-- <h2>Courses</h2> --}}
        <ol class="breadcrumb">
            <li>
                <a href='/dashboard'>
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a>Add Enquiry</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    <div class="container-fluid">
        <!--main content-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-fw f fa-question-circle"></i> Add Enquiry
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="padding: 20px;">
                            <div class="col-md-12">
                                <form id="course_form" action="{{route('addGymEnquiry')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="title" class="col-md-3 control-label">
                                                Title
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                    </span>
                                                    <input id="title" type="text" name="title" required class="form-control" placeholder="Enter Title">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="image_and_description" class="col-md-3 control-label">
                                                Description <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-7">
                                                <textarea id="content_editor"id="imagePreview" name="description" contenteditable="true" class="form-control" style="height: 200px; overflow-y: auto;"></textarea>

                                                <button type="button" id="upload-image-btn" class="btn btn-primary mt-2">Upload Image</button>
                                                <input type="file" id="image" name="image" style="display: none; height: 300px;" accept="image/*" onchange="handleImageUpload(event)">
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-7">
                                                    <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                    <a class='btn btn-danger' href='/dashboard'> Cancel</a>
                                                    <input type="reset" id="add-news-reset-editable" class="btn btn-default reset-styles" value="Reset">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic charts strats here-->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-file-text-o"></i> Enquiry List
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel"></i>
                        </span>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-bordered" id="fitness-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>View</th>
                                    <th>Delete/Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>{{ $enquiry->title }} </td>
                                    <td>
                                        <a class="edit btn btn-primary" href={{route('viewEnquiry',$enquiry->uuid)}}>
                                            <i class="fa fa-fw fa-eye"></i> View
                                        </a>
                                    </td>
                                    <td>
                                        <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </a>
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
</aside>

<!-- CSS Styles for Buttons -->
<style>
    .btn {
        margin-right: 10px;
    }

    .btn-primary {
        background-color: #337ab7;
        border-color: #2e6da4;
        color: #fff;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active {
        background-color: #286090;
        border-color: #204d74;
        color: #fff;
    }

    .btn-danger {
        background-color: #d9534f;
        border-color: #d43f3a;
        color: #fff;
    }

    .btn-danger:hover,
    .btn-danger:focus,
    .btn-danger:active,
    .btn-danger.active {
        background-color: #c9302c;
        border-color: #ac2925;
        color: #fff;
    }
</style>

<script>
    // Function to trigger click event on file input
    document.getElementById('upload-image-btn').addEventListener('click', function() {
        document.getElementById('image').click();
    });

    function handleImageUpload(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            const imagePreview = document.createElement('img');
            imagePreview.src = e.target.result;
            imagePreview.style.maxWidth = '100%';
            imagePreview.style.height = 'auto';
            const contentEditor = document.getElementById('content_editor');
            contentEditor.focus();
            contentEditor.appendChild(imagePreview); // Append image to description box
        };

        reader.readAsDataURL(file);
    }

    function handleImageUpload(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const imageSrc = e.target.result;
        const imgElement = `<img src="${imageSrc}" style="max-width: 100%; height: auto;">`;

        // Get the image preview container
        const imagePreview = document.getElementById('imagePreview');

        // Append the image HTML to the image preview container
        imagePreview.innerHTML = imgElement;
    };

    reader.readAsDataURL(file);
}

</script>



@endsection
