@extends('admin.master')
@section('title','List Enquiry')
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
                <a>List Enquiry</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    <div class="container-fluid">
        <!--main content-->
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
                                    <th>Gym Name</th>
                                    <th>Title</th>
                                    <th>View</th>
                                    <th>Delete/Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>{{ $enquiry->gym->gym_name }}</td>
                                    <td>{{ $enquiry->title }} </td>
                                    <td>
                                        <a class="edit btn btn-primary" href={{route('viewAdminEnquiry',$enquiry->uuid)}} >
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
@endsection