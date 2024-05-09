@extends('GymOwner.master1')
@section('title', 'Update Staff')
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
                    <a>Update Gym Staff</a>
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
                                <i class="fa fa-fw fa-file-text-o"></i> Update Staff
                            </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                <i class="glyphicon glyphicon-remove removepanel"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="row" style="padding: 20px;">
                                <div class="col-md-12">
                                    <form id="course_form" action="{{ route('updateStaff') }}" class="form-horizontal"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Image <span
                                                    class='require'>*</span></label>
                                            <div class="col-md-7 text-center">
                                                <div class="input-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        @if ($staffDetail && $staffDetail->image)
                                                            <div class="fileinput-new thumbnail"
                                                                style="width: 200px; height: 150px;">
                                                                <img src="{{ '../' . $staffDetail->image }}" alt="profile">
                                                            </div>
                                                        @else
                                                            <!-- Handle the case where $staffDetail is null or image is not set -->
                                                            <div class="fileinput-new thumbnail"
                                                                style="width: 200px; height: 150px;">
                                                                <img src="{{ asset('placeholder-image.jpg') }}"
                                                                    alt="profile">
                                                            </div>
                                                        @endif

                                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                                            style="max-width: 200px; max-height: 150px;"></div>
                                                        <div class="select_align">
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="image" id="image">
                                                            </span>
                                                            <a href="#" class="btn btn-primary fileinput-exists"
                                                                data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="member_name" class="col-md-3 control-label">
                                                    Name
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="member_name"
                                                            @if ($staffDetail && $staffDetail->name) value="{{ $staffDetail->name }}" @endif
                                                            type="text" name="member_name" required class="form-control"
                                                            placeholder="Enter Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="member_designation" class="col-md-3 control-label">
                                                    Designation
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="member_designation"
                                                            @if ($staffDetail && $staffDetail->designation) value="{{ $staffDetail->designation }}" @endif
                                                            type="text" required name="member_designation"
                                                            class="form-control" placeholder="Enter Designation">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="salary" class="col-md-3 control-label">
                                                    Salary
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="salary"
                                                            @if ($staffDetail && $staffDetail->salary) value="{{ $staffDetail->salary }}" @endif
                                                            type="float" required name="salary" class="form-control"
                                                            placeholder="Enter Salary">
                                                        <input type="hidden" name="uuid" id="uuid"
                                                            @if ($staffDetail && $staffDetail->uuid) value="{{ $staffDetail->uuid }}" @endif>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-7">
                                                        <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                        <a class='btn btn-danger' href='/dashboard'> Cancel</a>
                                                        <input type="reset" id="add-news-reset-editable"
                                                            class="btn btn-default reset-styles" value="Reset">
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
