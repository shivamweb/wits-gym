@extends('GymOwner.master')
@section('title','Add Subscription')
@section('content')


<aside class="right-side right-padding">
<section class="content-header">
    <!--section starts-->
    <h2>Courses</h2>
    <ol class="breadcrumb">
        <li>
            <a href='/dashboard'>
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a>Gym Subscription</a>
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
                        <i class="fa fa-fw fa-file-text-o"></i> Add Subscription
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="course_form" action="/add-gym-subscription" class="form-horizontal" method="POST">
                                @csrf
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
                                                <input id="subscription_name" type="text" name="subscription_name" class="form-control" placeholder="Enter Name">
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
                                                <input id="subscription_duration" type="text" name="validity" class="form-control" placeholder="Enter Subscription Duration">
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
                                                <input id="subscription_price" type="text" name="amount" class="form-control" placeholder="Enter Course Price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subscription_id" class="col-md-3 control-label">
                                            Subscription id
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                </span>
                                                <input id="subscription_id" type="text" name="plan_id" class="form-control" placeholder="Enter Subscription id">
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
                                                <textarea class="summernote edi-css form-control" id="description" name="description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-7">
                                            <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                            <a class='btn btn-danger' href='admin_courseschedule.html'> Cancel</a>
                                            <input type="reset" id="add-news-reset-editable" class="btn btn-default reset-styles" value="Reset">
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
                        <i class="fa fa-fw fa-file-text-o"></i> Courses
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
                                <th>Course Name</th>
                                <th>Course Duration</th>
                                <th>Course Price</th>
                                <th>Edit/Save</th>
                                <th>Delete/Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Yoga</td>
                                <td>3 Months</td>
                                <td>$70</td>
                                <td>
                                    <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fitness</td>
                                <td>3 Months</td>
                                <td>$70</td>
                                <td>
                                    <a class=" edit btn btn-primary mar-bm" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class=" delete btn btn-danger mar-bm" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Body Building</td>
                                <td>3 Months</td>
                                <td>$70</td>
                                <td>
                                    <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Aerobics</td>
                                <td>3 Months</td>
                                <td>$70</td>
                                <td>
                                    <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Flexibility</td>
                                <td>3 Months</td>
                                <td>$70</td>
                                <td>
                                    <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</aside>
@endsection
