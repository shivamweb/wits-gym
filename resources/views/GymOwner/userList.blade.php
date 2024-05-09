@extends('GymOwner.master1')
@section('title', 'User List')
@section('content')

<aside class="right-side right-padding">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h2>Users List</h2>
        <ol class="breadcrumb">
            <li>
                <a href='/dashboard'>
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a>Users</a>
            </li>
            <li>
                <a>Users List</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-line-chart"></i> Users Trend
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div id="bar-chart-stacked" class="flotChart1"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--main content-->
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic charts strats here-->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-file-text-o"></i> Users List
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Gender</th>
                                    <th>Edit/Save</th>
                                    <th>Delete/Cancel</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>

                                    <td><img src="{{ $user->image }}" height="100"></td>
                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone_no }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>
                                        <a class="edit btn btn-primary" href="{{route('showUserProfile', $user->uuid)}}" data-user-uuid="{{ $user->uuid  }}">
                                            <i class="fa fa-fw fa-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a class="delete btn btn-danger" href="javascript:;">
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
        <!-- col-md-6 -->
        <!--row -->
    </div>
</aside>
@endsection
