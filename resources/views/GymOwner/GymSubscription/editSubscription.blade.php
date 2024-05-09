@extends('GymOwner.master')
@section('title', 'Update Subscription')
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
                    <a>Update Subscription</a>
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
                                <i class="fa fa-fw fa-file-text-o"></i> Update Subscription
                            </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                <i class="glyphicon glyphicon-remove removepanel"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="row" style="padding: 20px;">
                                <div class="col-md-12">
                                    <form id="course_form" action="/gym-subscription" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Image <span
                                                    class='require'>*</span></label>
                                            <div class="col-md-7 text-center">
                                                <div class="input-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail"
                                                            style="width: 200px; height: 150px;">
                                                            <img data-src="holder.js/200x150" src="{{$subscription->image}}" alt="profile">
                                                        </div>
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
                                                <label for="subscription_name" class="col-md-3 control-label">
                                                    Subscription Name
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="subscription_name" value={{$subscription->subscription_name}} type="text" required
                                                            name="subscription_name" class="form-control"
                                                            placeholder="Enter Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subscription_duration" class="col-md-3 control-label">
                                                    Subscription Duration
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="subscription_duration" value={{$subscription->validity}} type="text" name="validity" required
                                                            class="form-control" placeholder="Enter Subscription Duration">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="start_date" class="col-md-3 control-label">
                                                    Start Date
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="start_date" value={{$subscription->start_date}} type="date" name="start_date" required
                                                            class="form-control" placeholder="Enter Start Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="subscription_price" class="col-md-3 control-label">
                                                    Subscription Price
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                                        </span>
                                                        <input id="subscription_price" value={{$subscription->amount}} type="text" name="amount" required
                                                            class="form-control" placeholder="Enter Course Price">
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
                                                        <textarea class="summernote edi-css form-control" id="description" name="description" required>{{$subscription->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-7">
                                                    <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                    <a class='btn btn-danger' href={{route('listSubscriptionPlan')}}> Cancel</a>
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
