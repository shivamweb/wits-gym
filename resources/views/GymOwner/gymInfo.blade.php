@extends('GymOwner.master1')
@section('title','Club Info')
@section('content')


<aside class="right-side right-padding">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h2>Gym Info</h2>
        <ol class="breadcrumb">
            <li>
                <a href='index.html'>
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a class='activated' href='admin_clubinfo.html'>Gym Info</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    <div class="container-fluid">
        <!--main content-->
        <div class="row">
            <div class="col-lg-12">
                <!-- Basic charts strats here-->
                <div class="panel">
                    <div class="panel-heading bg-primary">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-user"></i> Gym Info
                        </h4>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <div class="terms">
                                <ul class="nav nav-tabs nav-custom " role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#Info" aria-controls="Info" role="tab" data-toggle="tab">
                                            <strong>Gym Info</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#terms" aria-controls="terms" role="tab" data-toggle="tab">
                                            <strong>Terms & Conditions</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#social" aria-controls="social" role="tab" data-toggle="tab">
                                            <strong>Social Networks</strong>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <form action="{{ route('addGymByAdmin') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf    
                            <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Info">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4 text-center">
                                                <div class="form-group pad-top">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            <img data-src="holder.js/200x150" src="#" alt="profile">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div class="select_align">
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="image">
                                                            </span>
                                                            <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="users">
                                                            <tr>
                                                                <td>Username</td>
                                                                
                                                                <input type="text" name="username" class="editable" placeholder="enter gym_name">
                                                                <td>
                                                                    <input type="text" name="gym_name" placeholder="enter gym_name">
                                                                    <a href="#" data-pk="1" id="username" class="editable" data-title="Edit User Name" data-placeholder="Required">Nataliapery</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>E-mail</td>
                                                                <td>
                                                                    <input type="text" name="address" placeholder="enter address">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone Number</td>
                                                                <td>
                                                                    <input type="text" name="country" placeholder="enter country">

                                                                    <a href="#" data-pk="1" class="editable" id="contact" data-title="Edit Phone Number" data-placeholder="Required">999-999-9999</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address</td>
                                                                <td>
                                                                    <input type="text" name="state" placeholder="enter state">

                                                                    <a href="#" data-pk="1" id="addr" class="editable" data-title="Edit Address" data-placeholder="Required">Sydney, Australia</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>City</td>
                                                                <td>
                                                                    <input type="text" name="city" placeholder="enter city">

                                                                    <a href="#" data-pk="1" id="city" class="editable" data-title="Edit City" data-placeholder="Required">Nakia</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pincode</td>
                                                                <td>
                                                                    <input type="text" name="gym_link" placeholder="enter gym_link">

                                                                    <a href="#" data-pk="1" id="pincode" class="editable" data-title="Edit Pincode" data-placeholder="Required">999999</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Fax</td>
                                                                <td>
                                                                    <input type="text" name="gym_type" placeholder="enter gym_type">

                                                                    <a href="#" data-pk="1" id="fax" class="editable" data-title="Edit Fax">12345</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Website</td>
                                                                <td>
                                                                    <a href="#" data-pk="1" id="url" class="editable" data-type="url" data-title="Edit Website">https://www.example.com</a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    <button type="submit">save</button>
                                        </div>
                                    </div>
                            </form>
                            <div role="tabpanel" class="tab-pane" id="terms">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <h4>Terms and Conditions</h4>
                                        </div>
                                        <form>
                                            <textarea class="summernote edi-css" placeholder="Place some text here"></textarea>
                                            <div class="form-actions pad-top">
                                                <div class="">
                                                    <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                    <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                    <input type="reset" class="btn btn-default reset-editable" value="Reset">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="social">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <h4>Social Networks</h4>
                                        </div>
                                        <form action="#" class="form-horizontal">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="fb-name">Facebook</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-facebook text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder=" " id="fb-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="twitter">Twitter</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-twitter text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder=" " id="twitter" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="g-plus">Google plus</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-google-plus text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder=" " id="g-plus" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="skype">Skype</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-skype text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder=" " id="skype" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-2 col-md-9">
                                                        <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                        <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                        <input type="reset" class="btn btn-default" value="Reset">
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
        </div>
    </div>
    </div>
</aside>

@endsection