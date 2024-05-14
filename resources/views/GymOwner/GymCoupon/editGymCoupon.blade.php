@extends('GymOwner.master1')
@section('title', 'update coupon')
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
                    <a>Update coupon</a>
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
                                    <form id="course_form" action={{ route('updateGymCoupon') }} class="form-horizontal"
                                        method="POST" enctype="multipart/form-data">
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
                                                        <input type="hidden" name="uuid" value={{ $gymCoupon->uuid }}>
                                                        <input id="name" type="text" name="name"
                                                            class="form-control" value={{ $gymCoupon->name }}
                                                            placeholder="Enter Name" required>
                                                        </span>
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
                                                        <input id="start_date" type="date" value={{ $gymCoupon->from }}
                                                            name="from" required class="form-control"
                                                            placeholder="Enter Start Date">
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
                                                        <input id="end_date" type="date" value={{ $gymCoupon->to }}
                                                            name="to" required class="form-control"
                                                            placeholder="Enter End Date">
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
                                                        <input id="amount" step="any" value={{ $gymCoupon->amount }}
                                                            type="number" required name="amount" class="form-control"
                                                            placeholder="Enter Amount">
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
                                                        <input id="discount" value={{ $gymCoupon->discount }}
                                                            step="any" type="number" required name="discount"
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
                                                        <select name="type" id="type" class="form-control">
                                                            <option value="percentage">Percentage</option>
                                                            <option value="fixed"
                                                                {{ $gymCoupon->type == 'fixed' ? 'selected' : '' }}>Fixed
                                                                Amount</option>
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
                                                        <input id="max_amount" value={{ $gymCoupon->max_amount }}
                                                            type="number" name="max_amount" required
                                                            class="form-control" placeholder="Enter Maximum Amount">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-7">
                                                        <input type="submit" class="btn btn-primary" value="Update">
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
        </div>
    </aside>

@endsection
