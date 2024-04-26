@extends('admin.master1')
@section('title','Gym Info')
@section('content')


<div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-10">
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
                            <th>Gym Name</th>
                            <th>Duration</th>
                            <th>Desciption</th>
                            <th>Amount</th>
                            <th>Edit/Save</th>
                            <th>Cancel/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gymLists as $gymList)
                        <tr>
                            <td>{{$gymList->gym_name}}</td>
                            <td>{{$gymList->web_link}}</td>
                            <td>{{$gymList->terms_and_conditions}}</td>
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
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection