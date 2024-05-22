@extends('GymOwner.master')
@section('title','View Enquiry')
@section('content')

<aside class="right-side right-padding">
    <section class="content-header">
        <!--section starts-->
        {{-- <h2>Courses</h2> --}}
        <ol class="breadcrumb">
            <li>
                <a href='/admin/adminDashboard'>
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a>View Enquiry</a>
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
                            <i class="fa fa-fw fa-file-text-o"></i> View Enquiry
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="padding: 20px;">
                            <div class="col-md-12">
                                <form id="course_form" action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
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
                                                    <input id="title" type="text" value="{{$enquiryDetails->title}}" name="title" required class="form-control" placeholder="Enter Title" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">
                                                Description
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <textarea class="summernote edi-css form-control" id="description" name="description" required disabled>
                                                    {{ isset($enquiryDetails->description) ? $enquiryDetails->description : '' }}
                                                    </textarea>
                                                    @if(isset($enquiryDetails->image))
                                                    <img src="{{ asset($enquiryDetails->image) }}" alt="Enquiry Image" style="position: absolute; left: 10px; top: 10px; max-width: 150px;">
                                                    @else
                                                    <img alt="" style="position: absolute; max-width: 70px;">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label for="image_and_description" class="col-md-3 control-label">
                                                Description <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-7" style="position: relative;">
                                                <textarea id="content_editor" name="description" class="form-control" style="height: 200px; overflow-y: auto; padding-left: 80px;" disabled>{{$enquiryDetails->description}}</textarea>
                                                @if(isset($enquiryDetails->image))
                                                <img src="{{'../'.$enquiryDetails->image}}" alt="Enquiry Image" style="position: absolute; left: 10px; top: 10px; max-width: 150px;">
                                                @else
                                                <img alt="" style="position: absolute; max-width: 70px;">
                                                @endif
                                                <button type="button" onclick="uploadImage()" class="btn btn-primary mt-2">Upload Image</button>
                                            </div>
                                        </div> -->

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-7">
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

    </div>
</aside>
@endsection
