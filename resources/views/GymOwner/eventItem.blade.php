@extends('GymOwner.master1')
@section('title','Add News')
@section('content')


<aside class="right-side right-padding">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h2>Event Item</h2>
    <ol class="breadcrumb">
        <li>
            <a href='index.html'>
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="#">Events</a>
        </li>
        <li>
            <a href='event_item.html'>Event Item</a>
        </li>
    </ol>
</section>
<!--section ends-->
<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        One Week Yoga Training
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <img src="assets/img/events/8.png" class="img-responsive event_img" alt="image not found">
                        </div>
                        <div class="col-sm-11">
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                            <p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
                            <p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet.", comes from a line in section 1.10.32.
                            </p>
                            <ol class="li_font">
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </li>
                                <li>There are many variations of passages of Lorem Ipsum available, but the majority.
                                </li>
                                <li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>
                                <li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                                </li>
                                <li>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                </li>
                                <li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</aside>
@endsection
