@extends('layouts.dashboard')
@section('page_heading','Database (Employee)')
@section('section')
           
           <div class="col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel ">
                        <div class="panel-footer">
                        	<div class="row">
                                <div class="col-xs-3">
                                    <span><em>Date:</em></span>
                                </div>
                                <div class="col-xs-9">
                                    <span><?php $mydate = Carbon\Carbon::now(); echo $mydate->toDateString(); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span><em>Time:</em></span>
                                </div>
                                <div class="col-xs-9">
                                    <span><?php $mytime = Carbon\Carbon::now(); echo $mytime->toTimeString(); ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span><em>Department:</em></span>
                                </div>
                                <div class="col-xs-9">
                                    <span>Operations</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel ">
                        <div class="panel-footer">
                        	<div class="row">
                                <div class="col-xs-3">
                                    <span><em>Admin Name:</em></span>
                                </div>
                                <div class="col-xs-9">
                                    <span>Gino T. Labiste</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span><em>Job Title:</em></span>
                                </div>
                                <div class="col-xs-9">
                                    <span>Web Developer</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-3">
                                    <span><em>Access Level:</em></span>
                                </div>
                                <div class="col-xs-9">
                                    <span>Regular</span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
            	@section ('pane4_panel_title', 'Personal Information')
                    @section ('pane4_panel_body')
	                    <div class="list-group">
	                        <div class="panel-footer">
	                           	<div class="col-lg-6">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">Fullname</span>
							                <input type="text" value="Gino T. Labiste" class="form-control" />
							            </div>
						            </fieldset>
					            </div>
	                            <div class="col-lg-2">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">Age</span>
							                <input type="text" value="24" class="form-control" />
							            </div>
						            </fieldset>
					            </div>
					            <div class="col-lg-4">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">ID Number</span>
							                <input type="text" value="16-113" class="form-control" />
							            </div>
						            </fieldset>
					            </div>
					            <div class="col-lg-12">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">Address</span>
							                <input type="text" value="Mangga St., Dumanlas, Buhangin, Davao City, Davao del Sur, Philippines, 8000" class="form-control" />
							            </div>
						            </fieldset>
					            </div>
					            <div class="clearfix"></div>
                            </div>
	                    </div>
	                    <!-- /.panel-footer -->
	                @endsection
                	@include('widgets.panel', array('header'=>true, 'as'=>'pane4'))
            </div>
            <div class="row">
            	@section ('pane5_panel_title', 'Department Information')
                    @section ('pane5_panel_body')
	                    <div class="list-group">
	                        <div class="panel-footer">
	                           	<div class="col-lg-4">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">Department</span>
							                <input type="text" value="Web Development & Design" class="form-control" />
							            </div>
						            </fieldset>
					            </div>
	                            <div class="col-lg-4">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">Campaign</span>
							                <input type="text" value="N/A" class="form-control" />
							            </div>
						            </fieldset>
					            </div>
					            <div class="col-lg-4">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">Direct Supervisor</span>
							                <input type="text" value="Giancarlo Matei" class="form-control" />
							            </div>
						            </fieldset>
					            </div>
					            <div class="clearfix"></div>
                            </div>
	                    </div>
	                    <!-- /.panel-footer -->
	                @endsection
                	@include('widgets.panel', array('header'=>true, 'as'=>'pane5'))
            </div>
            <div class="row">
            	@section ('pane6_panel_title', 'Government Identification')
                    @section ('pane6_panel_body')
	                    <div class="list-group">
	                        <div class="panel-footer">
	                           	<div class="col-lg-3">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">SSS</span>
							                <input type="text" value="09-3565384-9" class="form-control" />
							            </div>
							        </fieldset>
							        <fieldset>
							            <button type="submit" class="btn btn-primary col-lg-12">Click to see image</button>
						            </fieldset>
					            </div>
	                            <div class="col-lg-3">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">HDMF</span>
							                <input type="text" value="1211-1080-1584" class="form-control" />
							            </div>
							        </fieldset>
							        <fieldset>
							            <button type="submit" class="btn btn-primary col-lg-12">Click to see image</button>
						            </fieldset>
					            </div>
					            <div class="col-lg-3">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">TIN</span>
							                <input type="text" value="406-916-369" class="form-control" />
							            </div>
							        </fieldset>
							        <fieldset>
							            <button type="submit" class="btn btn-primary col-lg-12">Click to see image</button>
						            </fieldset>
					            </div>
					            <div class="col-lg-3">
		                            <fieldset disabled>
							            <div class="form-group input-group">
							                <span class="input-group-addon">PHIC</span>
							                <input type="text" value="15-050362924-2" class="form-control" />
							            </div>
							        </fieldset>
							        <fieldset>
							            <button type="submit" class="btn btn-primary col-lg-12">Click to see image</button>
						            </fieldset>
					            </div>
					            <div class="clearfix"></div>
                            </div>
	                    </div>
	                    <!-- /.panel-footer -->
	                @endsection
                	@include('widgets.panel', array('header'=>true, 'as'=>'pane6'))
            </div>
        </div>
            
@stop
