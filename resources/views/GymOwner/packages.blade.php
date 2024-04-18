@extends('GymOwner.master')
@section('title','Dashboard')
@section('content')
<!-- Content Header (Page header) -->


<aside class="right-side right-padding">
<section class="content-header">
    <!--section starts-->
    <h2>Packages</h2>
    <ol class="breadcrumb">
        <li>
            <a href='index.html'>
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li class="active" id="active">
            <a href='packages.html'>Packages</a>
        </li>
    </ol>
</section>
<!--section ends-->
<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-money"></i> Add Package
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="packages" action="#" class="form-horizontal">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="title">
                                            Package Name
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image</label>
                                        <div class="col-md-7 text-center">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img data-src="holder.js/200x150" src="#" alt="profile">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                    <div class="select_align">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="...">
                                                        </span>
                                                        <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="start">
                                            Start *
                                        </label>
                                        <div class="col-md-3">
                                            <div class='input-group date datetimepicker6'>
                                                <input type='text' class="form-control" id="start" name="date_start" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="col-md-1 control-label" for="end">
                                            End *
                                        </label>
                                        <div class="col-md-3">
                                            <div class='input-group date datetimepicker7'>
                                                <input type='text' class="form-control" id="end" name="date_end" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description<span class='require'> *</span></label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <textarea name="content" class="summernote edi-css form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="submit" class="btn btn-primary" value="Add">
                                            <input type="button" class="btn btn-danger" value="Cancel">
                                            <input type="reset" ID="add-news-reset-editable" class="btn btn-default" value="Reset">
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
                        <i class="fa fa-fw fa-file-text-o"></i> Present Packages
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-bordered table1">
                        <thead>
                            <tr>
                                <th>Package Name</th>
                                <th>Duration</th>
                                <th>Desciption</th>
                                <th>Amount</th>
                                <th>Edit/Save</th>
                                <th>Cancel/Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Yoga</td>
                                <td>3 Months</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </td>
                                <td>$60</td>
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
                                <td>Body Building</td>
                                <td>2 Months</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </td>
                                <td>$60</td>
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
                                <td>1 Month</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </td>
                                <td>$60</td>
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
                                <td>1 Month</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </td>
                                <td>$60</td>
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