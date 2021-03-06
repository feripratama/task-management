@extends('layouts/default') {{-- Page title --}} @section('title') Form Wizards @stop {{-- local styles --}} @section('header_styles')
<link href="{{asset('vendors/select2/css/select2.min.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('vendors/select2/css/select2-bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/iCheck/css/all.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/custom_css/wizard.css')}}" rel="stylesheet"> @stop {{-- Page Header--}} @section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Form Wizards</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Forms</li>
        <li class="active">
            Form Wizards
        </li>
    </ol>
</section>
@stop {{-- Page content --}} @section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                Bootstrap Wizard
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" class="btn btn-primary btn-block">1</a>
                            <p>Step 1</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" class="btn btn-default btn-block">2</a>
                            <p>Step 2</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" class="btn btn-default btn-block">3</a>
                            <p>Step 3</p>
                        </div>
                    </div>
                </div>
                <form role="form">
                    <div class="row setup-content" id="step-1">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <h3> Step 1</h3>
                                <div class="form-group">
                                    <label for="step_fname" class="control-label">First Name</label>
                                    <input id="step_fname" maxlength="100" type="text" class="form-control" placeholder="Enter First Name" />
                                </div>
                                <div class="form-group">
                                    <label for="step_lname" class="control-label">Last Name</label>
                                    <input id="step_lname" maxlength="100" type="text" class="form-control" placeholder="Enter Last Name" />
                                </div>
                                <div class="form-group">
                                    <label for="step_email" class="control-label">Email</label>
                                    <input id="step_email" maxlength="100" type="email" class="form-control" placeholder="Enter Email Address" />
                                </div>
                                <div class="form-group">
                                    <label for="step_cemail" class="control-label">Confirm Email</label>
                                    <input id="step_cemail" maxlength="100" type="email" class="form-control" placeholder="Re-enter Your Email" />
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <h3> Step 2</h3>
                                <div class="form-group">
                                    <label for="step_cname" class="control-label">Company Name</label>
                                    <input id="step_cname" maxlength="200" type="text" class="form-control" placeholder="Enter Company Name" />
                                </div>
                                <div class="form-group">
                                    <label for="step_cadd" class="control-label">Company Address</label>
                                    <input id="step_cadd" maxlength="200" type="text" class="form-control" placeholder="Enter Company Address" />
                                </div>
                                <div class="form-group">
                                    <label for="step_pwd" class="control-label">Password</label>
                                    <input id="step_pwd" maxlength="12" type="password" class="form-control" placeholder="Enter password" />
                                </div>
                                <div class="form-group">
                                    <label for="step_cpwd" class="control-label">Confirm Password</label>
                                    <input id="step_cpwd" maxlength="12" type="password" class="form-control" placeholder="Confirm password" />
                                </div>
                                <button class="btn btn-primary prevBtn pull-left" type="button">
                                    Previous
                                </button>
                                <button class="btn btn-primary nextBtn pull-right" type="button">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-3">
                        <div class="col-xs-12">
                            <div class="col-md-12">
                                <h3> Step 3</h3>
                                <div class="form-group">
                                    <label for="acceptTerms1">
                                        <input id="acceptTerms1" name="acceptTerms" type="checkbox" class="custom-checkbox"> I agree with the <a href="javascript:void(0)">terms &amp; Conditions</a>.
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary prevBtn pull-left" type="button">
                                        Previous
                                    </button>
                                    <button class="btn btn-success pull-right" type="submit">
                                        Finish!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                                <i class="livicon" data-name="bell" data-size="16" data-loop="true" data-c="#fff"
                                   data-hc="white"></i> Bootstrap Wizard 2
                            </h3>
                <span class="pull-right">
                                    <i class="fa fa-fw ti-angle-up clickable"></i>
                                </span>
            </div>
            <div class="panel-body">
                <form id="commentForm" method="post" action="#">
                    <div id="rootwizard">
                        <ul>
                            <li>
                                <a href="#tab1" data-toggle="tab">
                                    <span>
                                                    <span>Credentials</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">
                                    <span>
                                                    <span>Details</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab">
                                    <span>
                                                    <span>Contact</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="tab1">
                                <h2 class="hidden">&nbsp;</h2>
                                <div class="form-group">
                                    <label for="userName" class="control-label">User name *</label>
                                    <input id="userName" name="username" type="text" placeholder="Enter user name" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Email *</label>
                                    <input id="email" name="email" placeholder="Enter your Email" type="text" class="form-control required email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Password *</label>
                                    <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label for="confirm" class="control-label">Confirm Password *</label>
                                    <input id="confirm" name="confirm" type="password" placeholder="Confirm your password " class="form-control required">
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <h2 class="hidden">&nbsp;</h2>
                                <div class="form-group">
                                    <label for="name" class="control-label">First name *</label>
                                    <input id="name" name="fname" placeholder="Enter your First name" type="text" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label for="surname" class="control-label">Last name *</label>
                                    <input id="surname" name="lname" type="text" placeholder=" Enter your Last name" class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label for="email">Gender</label>
                                    <select class="form-control" name="gender" id="gender" title="Select an account type...">
                                        <option disabled="" selected="">Select</option>
                                        <option>MALE</option>
                                        <option>FEMALE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" name="address" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="age" class="control-label">Age *</label>
                                    <input id="age" name="age" type="text" maxlength="3" class="form-control required number" data-bv-greaterthan-inclusive="false" data-bv-lessthan-inclusive="true">
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="form-group">
                                    <label for="phone1" class="control-label">Home number *</label>
                                    <input type="text" class="form-control" id="phone1" name="phone1" placeholder="(999)999-9999">
                                </div>
                                <div class="form-group">
                                    <label for="phone2" class="control-label">Personal number *</label>
                                    <input type="text" class="form-control" id="phone2" name="phone2" placeholder="(999)999-9999">
                                </div>
                                <div class="form-group">
                                    <label for="phone3" class="control-label">Alternate number *</label>
                                    <input type="text" class="form-control" id="phone3" name="phone3" placeholder="(999)999-9999">
                                </div>
                                <h2 class="hidden">&nbsp;</h2>
                                <div class="form-group">
                                    <label>
                                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="custom-checkbox"> *I agree with the <a href="javascript:void(0)">terms &amp; Conditions</a>.
                                    </label>
                                </div>
                            </div>
                            <ul class="pager wizard">
                                <li class="previous">
                                    <a>Previous</a>
                                </li>
                                <li class="next">
                                    <a>Next</a>
                                </li>
                                <li class="next finish" style="display:none;">
                                    <a>Finish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">User Register</h4>
                                </div>
                                <div class="modal-body">
                                    <p>You have Submitted Successfully.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">OK
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop {{-- local scripts --}} @section('footer_scripts')
<script src="{{asset('vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
<script src="{{asset('vendors/select2/js/select2.js')}}" type="text/javascript"></script>
<script src="{{asset('vendors/bootstrapwizard/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
<script src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/custom_js/form_wizards.js')}}" type="text/javascript"></script> @stop
