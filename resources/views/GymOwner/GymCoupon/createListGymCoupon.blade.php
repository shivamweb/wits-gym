@extends('GymOwner.master1')
@section('title', 'Add coupon')
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
                    <a>Gym coupon</a>
                </li>
            </ol>
        </section>
        <!--section ends-->
        <div class="container-fluid">
            <!--main content-->
            <div class="row" style="padding:20px;">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-fw fa-file-text-o"></i> Add Coupon
                            </h4>
                            <span class="pull-right">
                                <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                <i class="glyphicon glyphicon-remove removepanel"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div class="row" style="padding: 20px;">
                                <div class="col-md-12">
                                    <form id="course_form" action="/gym-coupon" class="form-horizontal" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="name" class="col-md-3 control-label">
                                                    Name
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="name" type="text" name="name"
                                                            class="form-control" placeholder="Enter Name" required>
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
                                                        <input id="start_date" type="date" name="from" required
                                                            class="form-control" placeholder="Enter Start Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="end_date" class="col-md-3 control-label">
                                                    End Date
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="end_date" type="date" name="to" required
                                                            class="form-control" placeholder="Enter End Date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="amount" class="col-md-3 control-label">
                                                    Amount
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="amount" step="any" type="number" required name="amount"
                                                            class="form-control" placeholder="Enter Amount">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="discount" class="col-md-3 control-label">
                                                    Discount
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="discount" step="any" type="number" required name="discount"
                                                            class="form-control" placeholder="Enter Discount">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="discount_type" class="col-md-3 control-label">
                                                    Discount Type
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <select id="discount_type" name="type" required>
                                                            <option value="percentage">Percentage</option>
                                                            <option value="fixed">Fixed Amount</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="max_amount" class="col-md-3 control-label">
                                                    Maximum Discount
                                                    <span class='require'>*</span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <input id="max_amount" type="number" name="max_amount" required
                                                            class="form-control" placeholder="Enter Maximum Amount">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-7">
                                                        <input type="submit" class="btn btn-primary" value="Add">
                                                        &nbsp;
                                                        <a class='btn btn-danger' href='/dashboard'> Cancel</a>
                                                        <input type="reset" id="add-news-reset-editable"
                                                            class="btn btn-default reset-styles" value="Reset">
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
            <div class="row">
                <div class="col-lg-12">
                    <!-- Basic charts strats here-->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="fa fa-fw fa-file-text-o"></i> Gym Coupons
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
                                        <th>Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Amount</th>
                                        <th>Discount</th>
                                        <th>Maximum Amount</th>
                                        <th>Edit/Save</th>
                                        <th>Delete/Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coupons as $coupon)
                                        <tr>
                                            <td>{{ $coupon->name }}</td>
                                            <td>{{ $coupon->from }}</td>
                                            <td>{{ $coupon->to }}</td>
                                            <td>{{ $coupon->amount }}</td>
                                            <td>{{ $coupon->discount }}</td>
                                            <td>{{ $coupon->max_amount }}</td>
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
        </div>
    </aside>

@endsection
