@extends('layouts.dashboard')
@section('page_heading','Database (Admin)')
@section('section')
           
               <!-- /.row -->
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
		        <div class="col-lg-6">

		        	@section ('cotable_panel_title','Employee Table')
					@section ('cotable_panel_body')
					<div class="col-lg-12">
						<fieldset>
			                <button type="submit" class="btn btn-primary pull-left">Add Employee</button>
			            </fieldset>
			            <p></p>
		            </div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Fullname</th>
								<th>ID</th>
								<th>Department</th>
								<th>E-status</th>
							</tr>
						</thead>
						<tbody>
							<tr class="info">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="success">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="success">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>	

					@endsection
					@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))

		        </div>
		        <div class="col-lg-6">

		        	@section ('cotable2_panel_title','Department Table')
					@section ('cotable2_panel_body')
					<div class="col-lg-12">
						<fieldset>
			                <button type="submit" class="btn btn-primary pull-left">Add Department</button>
			            </fieldset>
			            <p></p>
			        </div>
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Dept. name</th>
								<th>Campaign</th>
								<th># of employees</th>
								<th>Supervisor</th>
							</tr>
						</thead>
						<tbody>
							<tr class="info">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="success">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="success">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>

					@endsection
					@include('widgets.panel', array('header'=>true, 'as'=>'cotable2'))

		        </div>
		    </div>
        </div>
            
@stop
