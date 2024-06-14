@extends('GymOwner.master1')

@section('title', 'Add Gallery')

@section('content')
<aside class="right-side right-padding">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h2>Add Gallery</h2>
        <ol class="breadcrumb">
            <li>
                <a href='index.html'>
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#">Gallery</a>
            </li>
            <li>
                <a href='/addGallery'>Add Gallery</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- First Basic Table starts here-->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-picture-o"></i> Add Gallery
                        </h3>
                    </div>
                    <div class="panel-body" style="padding:30px;">
                        <div class="row">
                            <p>
                                File Upload widget with multiple file selection, progress bars, validation and preview images for jQuery.
                            </p>
                            <form id="fileupload" action="{{ route('addGallery') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Redirect browsers with JavaScript disabled to the origin page -->
                                <noscript>
                                    <input type="hidden" name="redirect" value="">
                                </noscript>
                                <!-- Add category field -->
                                <div class="form-group">
                                    <label for="category">Category:</label>
                                    <input type="text" class="form-control" id="category" name="category" placeholder="Enter category">
                                </div>
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <div class="form-group">
                                    <label for="files">Add Files:</label>
                                    <input type="file" id="files" name="files[]" multiple>  
                                </div>
                                <!-- The global file processing state -->
                                <span class="fileupload-process"></span>
                                <!-- The table listing the files available for upload/download -->
                                <table role="presentation" class="table table-striped">
                                    <tbody class="files">
                                    </tbody>
                                </table>

                                <!-- Single submit button -->
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-fw fa-cloud-upload"></i>
                                    <span>Upload</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</aside>
@endsection