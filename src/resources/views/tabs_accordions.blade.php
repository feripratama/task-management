@extends('layouts/default') {{-- Page title --}} @section('title') Tabs and Accordoins @stop {{-- local styles --}} @section('header_styles')
<link rel="stylesheet" href="vendors/toolbar/css/jquery.toolbar.css">
<link rel="stylesheet" href="vendors/wenk/wenk.min.css">
<link type="text/css" href="css/tab.css" rel="stylesheet"> @stop {{-- Page Header--}} @section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Tabs and Accordoins</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> UI Features</li>
        <li class="active">
            Tabs and Accordoins
        </li>
    </ol>
</section>
@stop {{-- Page content --}} @section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-layout-tab-window"></i> Tabs
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                            </span>
            </div>
            <div class="panel-body">
                <div class="bs-example">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active">
                            <a href="#home" data-toggle="tab">Home</a>
                        </li>
                        <li>
                            <a href="#profile" data-toggle="tab">Profile</a>
                        </li>
                        <li class="disabled">
                            <a href="#">Disabled</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.
                            </p>
                            <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            </p>
                            <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-layout-tab"></i> Pills
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <div class="bs-example">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li class="disabled">
                            <a href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
                <br>
                <div class="bs-example">
                    <ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li class="disabled">
                            <a href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-comment"></i> Popover
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <div>
                    <button type="button" class="btn btn-warning" title="Popover title" data-container="body" data-toggle="popover" data-placement="right" data-content="Popover on right" style="margin-bottom:10px;margin-left:10px;">right
                    </button>
                    <button type="button" class="btn btn-success" title="Popover title" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Popover on bottom" style="margin-bottom:10px;margin-left:10px;">bottom
                    </button>
                    <button type="button" class="btn btn-default" title="Popover title" data-container="body" data-toggle="popover" data-placement="left" data-content="Popover on left" style="margin-bottom:10px;margin-left:10px;">left
                    </button>
                    <button type="button" class="btn btn-primary" title="Popover title" data-container="body" data-toggle="popover" data-placement="top" data-content="Popover on top" style="margin-bottom:10px;margin-left:10px;">top
                    </button>
                </div>
            </div>
        </div>
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-comments"></i> Tool Tips
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <p>
                    <span class="bs-example tooltip-demo">
                                    <button class="btn tooltips btn-primary btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="top" data-original-title="Tooltip in top"
                                            style="margin-bottom:10px;">Top
                                    </button>
                                </span>
                    <span class="bs-example tooltip-demo">
                                    <button class="btn tooltips btn-success btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="left" data-original-title="Tooltip in left"
                                            style="margin-bottom:10px;">Left
                                    </button>
                                </span>
                    <span class="bs-example tooltip-demo">
                                    <button class="btn tooltips btn-info btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="right" data-original-title="Tooltip in right"
                                            style="margin-bottom:10px;">Right
                                    </button>
                                </span>
                    <span class="bs-example tooltip-demo">
                                    <button class="btn tooltips btn-warning btn-lg" data-toggle="tooltip"
                                            data-tooltip="tooltip"
                                            data-placement="bottom" data-original-title="Tooltip in bottom"
                                            style="margin-bottom:10px;">Bottom
                                    </button>
                                </span>
                </p>
                <div class="bs-example">
                    <ul class="tooltip-examples list-inline">
                        <li>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="hi">Tooltip</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="hello!!">small
                                            tooltip</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="A much longer tooltip to demonstrate the max-width of the Bootstrp tooltip.">Large
                                            tooltip</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Bye!">Last
                                            tooltip</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-comment-alt"></i> Popover
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <div>
                    <div class="po-markup">
                        <br>
                        <a href="http://www.fifa.com/" class="po-link">fifa.com</a> ← popover on link so you can get site information.
                        <div class="po-content hidden">
                            <div class="po-title">
                                <img src="img/football.jpg" alt="Google" width="20" height="20" /> Foot Ball world cup
                            </div>
                            <!-- ./po-title -->
                            <div class="po-body">
                                <p>
                                    Football refers to a number of sports that involve, to varying degrees, kicking a ball with the foot to score a goal. The most popular of these sports worldwide is
                                    <strong>association football</strong> , more commonly known as just "football" or "soccer".
                                </p>
                            </div>
                            <!-- ./po-body -->
                        </div>
                        <!-- ./po-content -->
                    </div>
                    <!-- ./po-markup-->
                </div>
                <!-- ./col-md6 -->
            </div>
        </div>
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-comment"></i> Wenk Tool tip
                            </h3>
                <span class="pull-right">
                                <i class="fa fa-fw ti-angle-up clickable"></i>
                                <i class="fa fa-fw ti-close removepanel clickable"></i>
                            </span>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Wenk positions</h4></div>
                    <div class="col-sm-6 text-center">
                        <p><span class="wenk-area" data-wenk="Top!">Wenk to the top!</span></p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <p><span class="wenk-area" data-wenk="Left!" data-wenk-pos="left">Wenk to the left!</span></p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <p><span class="wenk-area" data-wenk="Right!" data-wenk-pos="right">Wenk to the right!</span></p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <p><span class="wenk-area" data-wenk="Bottom!" data-wenk-pos="bottom">Wenk to the bottom!</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Wenk Size</h4></div>
                    <div class="col-sm-6 text-center">
                        <p><span data-wenk="I'm small!" class="wenk-length--small wenk-area">Small wenk!</span></p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <p><span data-wenk="I'm medium!" class="wenk-length--medium wenk-area">Medium wenk!</span></p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <p><span data-wenk="I'm large!" class="wenk-length--large wenk-area">Large wenk!</span></p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <p><span data-wenk="I fit!" class="wenk-length--fit wenk-area">I fit just right!</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Wenk Alignment</h4></div>
                    <div class="col-sm-4 text-center">
                        <p><span data-wenk="I'm left!" class="wenk-align--left wenk-length--large wenk-area">Left wenk!</span>
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <p><span data-wenk="I'm center!" class="wenk-align--center wenk-length--large wenk-area">center wenk!</span>
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <p><span data-wenk="I'm right!" class="wenk-align--right wenk-length--large wenk-area">Right wenk!</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-layout-menu-v"></i> Accordions
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <!--tab starts-->
                <!-- Nav tabs category -->
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#faq-cat-1" data-toggle="tab">Tab 1</a>
                    </li>
                    <li>
                        <a href="#faq-cat-2" data-toggle="tab">Tab 2</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content faq-cat-content">
                    <div class="tab-pane active in fade" id="faq-cat-1">
                        <div class="panel-group" id="accordion-cat-1">
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-1">
                                        <h4 class="panel-title">
                                                        Item Tab 1-1
                                                        <span class="pull-right"></span>
                                                    </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </p>
                                        <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </p>
                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-1" href="#faq-cat-1-sub-2">
                                        <h4 class="panel-title">
                                                        Item Tab 1-2
                                                        <span class="pull-right"></span>
                                                    </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-1-sub-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </p>
                                        <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </p>
                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-cat-2">
                        <div class="panel-group" id="accordion-cat-2">
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-1">
                                        <h4 class="panel-title">
                                                        Item Tab 2-1
                                                        <span class="pull-right"></span>
                                                    </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-2-sub-1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                        </p>
                                        <p>
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </p>
                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default panel-faq">
                                <div class="panel-heading">
                                    <a data-toggle="collapse" data-parent="#accordion-cat-2" href="#faq-cat-2-sub-2">
                                        <h4 class="panel-title">
                                                        Item Tab 2-2
                                                        <span class="pull-right"></span>
                                                    </h4>
                                    </a>
                                </div>
                                <div id="faq-cat-2-sub-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                        </p>
                                        <p>Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica.
                                        </p>
                                        <p>Craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab ends-->
            </div>
        </div>
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="ti-comment-alt"></i> Toolbars
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                    <i class="fa fa-fw ti-close removepanel clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <h4>Toolbar</h4>
                <div class="row toolbar_animate">
                    <div class="col-md-12">
                        <div data-toolbar="user-options1" class="btn-toolbar feature-toolbar btn-toolbar-info text-center" data-toolbar-style="info"><i class="fa fa-bicycle" style="position: relative"></i></div>
                    </div>
                </div>
                <h4>Shades</h4>
                <div class="row toolbar_animate">
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div data-toolbar="user-options" class="btn-toolbar feature-toolbar btn-toolbar-light text-center" data-toolbar-style="light"><i class="fa fa-apple" style="position: relative"></i></div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div data-toolbar="set-01" class="btn-toolbar feature-toolbar btn-toolbar-dark text-center" data-toolbar-style="dark"><i class="fa fa-pie-chart" style="position: relative"></i>
                        </div>
                    </div>
                </div>
                <h4>Colorful</h4>
                <div class="row toolbar_animate">
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="user-options" class="btn-toolbar feature-toolbar btn-toolbar-primary text-center" data-toolbar-style="primary"><i class="fa fa-gift" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-01" class="btn-toolbar feature-toolbar btn-toolbar-danger text-center" data-toolbar-style="danger"><i class="fa fa-bar-chart" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-02" class="btn-toolbar feature-toolbar btn-toolbar-warning text-center" data-toolbar-style="warning"><i class="fa fa-heart" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-03" class="btn-toolbar feature-toolbar btn-toolbar-info text-center" data-toolbar-style="info"><i class="fa fa-gbp" style="position: relative"></i>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-04" class="btn-toolbar feature-toolbar btn-toolbar-success text-center" data-toolbar-style="success"><i class="fa fa-plane" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="transport-options-o" class="btn-toolbar feature-toolbar btn-toolbar-danger text-center" data-toolbar-style="danger"><i class="fa fa-bicycle" style="position: relative"></i></div>
                    </div>
                </div>
                <h4>Customizable</h4>
                <div class="row toolbar_animate">
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="user-options-b" class="btn-toolbar feature-toolbar btn-toolbar-danger text-center" data-toolbar-style="danger"><i class="fa fa-apple" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-a" class="btn-toolbar feature-toolbar btn-toolbar-primary text-center" data-toolbar-style="primary"><i class="fa fa-area-chart" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-c" class="btn-toolbar feature-toolbar btn-toolbar-danger text-center" data-toolbar-style="danger"><i class="fa fa-heart" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-f" class="btn-toolbar feature-toolbar btn-toolbar-warning text-center" data-toolbar-style="warning"><i class="fa fa-bell-o" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="transport-options-d" class="btn-toolbar feature-toolbar btn-toolbar-success text-center" data-toolbar-style="success"><i class="fa fa-bicycle" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-e" class="btn-toolbar feature-toolbar btn-toolbar-info text-center" data-toolbar-style="info"><i class="fa fa-bitcoin" style="position: relative"></i></div>
                    </div>
                </div>
                <h4>Animations</h4>
                <div class="row toolbar_animate">
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="user-options" data-toolbar-animation="standard" class="btn-toolbar feature-toolbar btn-toolbar-primary text-center" data-toolbar-style="primary"><i class="fa fa-plane" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-01" data-toolbar-animation="flip" class="btn-toolbar feature-toolbar btn-toolbar-danger text-center" data-toolbar-style="danger"><i class="fa fa-line-chart" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-02" data-toolbar-animation="grow" class="btn-toolbar feature-toolbar btn-toolbar-warning text-center" data-toolbar-style="warning"><i class="fa fa-heart" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-03" data-toolbar-animation="flyin" class="btn-toolbar feature-toolbar btn-toolbar-info text-center" data-toolbar-style="info"><i class="fa fa-jpy" style="position: relative"></i>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="set-04" data-toolbar-animation="bounce" class="btn-toolbar feature-toolbar btn-toolbar-success text-center" data-toolbar-style="success"><i class="fa fa-star" style="position: relative"></i></div>
                    </div>
                    <div class="col-sm-2 col-xs-4">
                        <div data-toolbar="transport-options-o" data-toolbar-animation="grow" class="btn-toolbar feature-toolbar btn-toolbar-danger text-center" data-toolbar-style="danger"><i class="fa fa-truck" style="position: relative"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======tool item sets===== -->
<div id="user-options1" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-car"></i></a>
    <a href="#"><i class="fa fa-bicycle"></i></a>
    <a href="#"><i class="fa fa-truck"></i></a>
    <a href="#"><i class="fa fa-plane"></i></a>
    <a href="#"><i class="fa fa-shield"></i></a>
</div>
<div id="user-options" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-user"></i></a>
    <a href="#"><i class="fa fa-star"></i></a>
    <a href="#"><i class="fa fa-edit"></i></a>
    <a href="#"><i class="fa fa-trash"></i></a>
    <a href="#"><i class="fa fa-circle"></i></a>
</div>
<div id="set-01" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-area-chart"></i></a>
    <a href="#"><i class="fa fa-bar-chart"></i></a>
    <a href="#"><i class="fa fa-pie-chart"></i></a>
    <a href="#"><i class="fa fa-line-chart"></i></a>
    <a href="#"><i class="fa fa-trash"></i></a>
</div>
<div id="set-02" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-android"></i></a>
    <a href="#"><i class="fa fa-apple"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
</div>
<div id="set-03" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-bitcoin"></i></a>
    <a href="#"><i class="fa fa-rupee"></i></a>
    <a href="#"><i class="fa fa-dollar"></i></a>
    <a href="#"><i class="fa fa-eur"></i></a>
    <a href="#"><i class="fa fa-cny"></i></a>
</div>
<div id="set-04" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-heart"></i></a>
    <a href="#"><i class="fa fa-lock"></i></a>
    <a href="#"><i class="fa fa-heart-o"></i></a>
    <a href="#"><i class="fa fa-truck"></i></a>
    <a href="#"><i class="fa fa-headphones"></i></a>
</div>
<div id="transport-options-o" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-car"></i></a>
    <a href="#"><i class="fa fa-bicycle"></i></a>
    <a href="#"><i class="fa fa-truck"></i></a>
    <a href="#"><i class="fa fa-plane"></i></a>
    <a href="#"><i class="fa fa-shield"></i></a>
</div>
<!--customized -->
<div id="user-options-b" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-user"></i></a>
    <a href="#"><i class="fa fa-star"></i></a>
    <a href="#"><i class="fa fa-edit"></i></a>
    <a href="#"><i class="fa fa-trash"></i></a>
    <a href="#"><i class="fa fa-circle"></i></a>
</div>
<div id="set-a" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-area-chart"></i></a>
    <a href="#"><i class="fa fa-bar-chart"></i></a>
    <a href="#"><i class="fa fa-pie-chart"></i></a>
    <a href="#"><i class="fa fa-line-chart"></i></a>
    <a href="#"><i class="fa fa-trash"></i></a>
</div>
<div id="set-c" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-android"></i></a>
    <a href="#"><i class="fa fa-apple"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitte"></i></a>
</div>
<div id="set-e" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-bitcoin"></i></a>
    <a href="#"><i class="fa fa-rupee"></i></a>
    <a href="#"><i class="fa fa-dollar"></i></a>
    <a href="#"><i class="fa fa-eur"></i></a>
    <a href="#"><i class="fa fa-cn"></i></a>
</div>
<div id="set-f" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-heart"></i></a>
    <a href="#"><i class="fa fa-lock"></i></a>
    <a href="#"><i class="fa fa-heart-o"></i></a>
    <a href="#"><i class="fa fa-truck"></i></a>
    <a href="#"><i class="fa fa-headphones"></i></a>
</div>
<div id="transport-options-d" class="toolbar-icons hidden">
    <a href="#"><i class="fa fa-car"></i></a>
    <a href="#"><i class="fa fa-bicycle"></i></a>
    <a href="#"><i class="fa fa-truck"></i></a>
    <a href="#"><i class="fa fa-plane"></i></a>
    <a href="#"><i class="fa fa-shield"></i></a>
</div>
@stop {{-- local scripts --}} @section('footer_scripts')
<script type="text/javascript" src="vendors/toolbar/js/jquery.toolbar.min.js"></script>
<script type="text/javascript" src="js/custom_js/tabs_accordions.js"></script> @stop
