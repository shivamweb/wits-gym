@extends('GymOwner.master1')
@section('title', 'Gym Designation')
@section('content')
<aside class="right-side right-padding">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h2>Designation</h2>
        <ol class="breadcrumb">
            <li>
                <a href='index.html'>
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a class='activated' href='#'> Gym Designation</a>
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
                            <i class="fa fa-scissors "></i> Add Designation
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="coupon_form" action="{{route('addGymDesignation')}}" method="POST" class="form-horizontal">
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="designation">
                                                Designation Name
                                                <span class='require'>*</span>
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                    </span>
                                                    <input type="text" name="designation_name" id="designation_name" class="form-control" placeholder="Enter Designation">
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
                            <i class="fa fa-fw fa-file-text-o"></i> Present Designation
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
                                    <th>Designation Name</th>
                                    <th>Delete/Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($designations as $designation)
                                <tr>
                                    <td>{{ $designation->designation_name }}</td>
                                    <td>
                                        <form action="{{ route('deleteGymDesignation', $designation->uuid) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this designation?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete btn btn-danger mar-bm">
                                                <i class="fa fa-trash-o"></i> Delete
                                            </button>
                                        </form>
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
    <!-- /.content -->
</aside>
@endsection
