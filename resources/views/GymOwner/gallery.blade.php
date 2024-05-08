@extends('GymOwner.master1')
@section('title', 'Gallery')
@section('content')

<aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <!--section starts-->
                <h2>Gallery</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='/'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href='/gallery'>Gallery</a>
                    </li>
                </ol>
            </div>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="btn-group m-b-20">
                                <span class="btn btn-success mr10 mb10 filter" data-filter="all">All</span>
                                <span class="btn btn-primary mr10 mb10 filter" data-filter=".category-1">Fitness</span>
                                <span class="btn btn-danger mr10 mb10 filter" data-filter=".category-2">Yoga</span>
                                <span class="btn btn-warning mr10 mb10 filter" data-filter=".category-3">Aerobics</span>
                            </div>
                        </div>
                        <div class="gallery">
                            <div class="row" id="gallery">
                                <div class="mix category-3 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="1">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/6.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/6.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="2">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/3.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i> </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/3.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="3">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/7.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/7.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="5">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/9.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/9.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="4">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/5.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/5.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="8">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/2.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/2.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="6">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/8.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/8.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="10">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/10.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/10.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="7">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/11.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/11.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="12">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/12.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/12.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="11">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/13.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/13.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="9">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/14.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/14.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="7">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/6.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/6.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="12">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/15.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/15.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="11">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/4.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/4.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-3 col-md-4 col-sm-4 col-xs-12" data-value="11">
                                    <div class="post3-main-div">
                                        <div class="box1 p1">
                                            <div class="box-shadow">
                                                <figure>
                                                    <figcaption>
                                                        <div class="hover-btn">
                                                            <a href="assets/img/gallery/1.jpg" class="hover-btn1 btn-h btn btn-primary boxer fancybox-buttons" data-fancybox-group="button">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <a class="hover-btn2 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-heart-o"></i></a>
                                                            <a href="#" class="hover-btn3 btn-h btn btn-primary" data-fancybox-group="button"><i
                                                                class="fa fa-file-text-o"></i></a>
                                                        </div>
                                                    </figcaption>
                                                    <div class="meet-img-hover">
                                                        <img src="assets/img/gallery/thumbs/1.jpg" class="fancy-img  center-block img-responsive" alt="meet-our-team" />
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </aside>

@endsection
