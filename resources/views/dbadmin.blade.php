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
					
					<fieldset>
		                <button type="submit" class="btn btn-primary pull-left" data-toggle="modal" data-target="#add-employee">Add Employee</button>
		            </fieldset>
		            <p></p>
		            
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
					
					<fieldset>
		                <button type="submit" class="btn btn-primary pull-left" data-toggle="modal" data-target="#add-department">Add Department</button>
		            </fieldset>
		            <p></p>
			        
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
        <div class="col-lg-12">
        	<div class="row">        		
                <div class="modal fade" id="add-employee" role="dialog">     
                	<div class="modal-dialog">
                		<div class="modal-content">
		                	<div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Add Department</h4>
						    </div>
						    <div class="modal-body">
						    	<div class="row">           	
				                	<form role="form">
							            <div class="form-group col-md-12">
							                <label>Full Name</label>
							                <input class="form-control" placeholder="Ex. Gino T. Labiste">
							            </div>
							            <div class="form-group col-md-12">
							                <label>Job Title</label>
							                <input class="form-control" placeholder="Ex. Web Developer">
							            </div>
							            <div class="form-group col-md-6">
							                <label>ID Number</label>
							                <input class="form-control" placeholder="Ex. 16-113">
							            </div>
							            <div class="form-group col-md-6">
							                <label>Hire Date</label>
							                <input class="form-control" placeholder="Ex. 02-21-2017">
							            </div>
							            <div class="form-group col-md-6">
							                <label>Employee Status</label>
							                <select class="form-control">
							                    <option>Active</option>
							                    <option>Inactive</option>
							                </select>
							            </div>
							            <div class="form-group col-md-6">
							                <label>Current Employment Status</label>
							                <select class="form-control">
							                    <option>Trainee</option>
							                    <option>Probationary</option>
							                    <option>Regular</option>
							                </select>
							            </div>
							            <div class="form-group col-md-12">
							                <label>Contact Number</label>
							                <input class="form-control" placeholder="Ex. +63915-349-1079">
							            </div>
							            <div class="form-group col-md-6">
							                <label>Date of Birth</label>
							                <input class="form-control" placeholder="Ex. 02-2-1993">
							            </div>
							            <div class="form-group col-md-6">
							                <label>Age</label>
							                <input class="form-control" placeholder="Ex. 24 yrs. old">
							            </div>
							            <div class="form-group col-md-12">
							                <label>Address</label>
							                <textarea class="form-control" rows="3"></textarea>
							            </div>
							            <div class="form-group col-md-6">
							                <label>Civil Status</label>
							                <select class="form-control">
							                    <option>Single</option>
							                    <option>Married</option>
							                    <option>Widow</option>
							                </select>
							            </div>
							            <div class="form-group col-md-6">
							                <label>Tax Status</label>
							                <select class="form-control">
							                    <option>Active</option>
							                    <option>Inactive</option>
							                </select>
							            </div>
							            <div class="form-group col-md-12">
							                <label>Referred by</label>
							                <input class="form-control" placeholder="Ex. Caryl Luyao">
							            </div>
							           	<div class="rows col-md-12">
							            	<p><strong><em>Emergency</em></strong></p>
							            </div>
						            	<div class="form-group col-md-6">
							                <label>Contact Person</label>
							                <input class="form-control" placeholder="Ex. Nena T. Labiste">
							            </div>
							            <div class="form-group col-md-6">
							                <label>Contact Number</label>
							                <input class="form-control" placeholder="Ex. +63946-204-3758">
							            </div>
							            <div class="col-md-12">
										<fieldset>
							                <button type="submit" class="btn btn-primary pull-right">Add Employee</button>
							            </fieldset>
							            <p></p>
							        </div>
							        </form>
							    </div>
							</div>
						</div>
					</div>
                </div>                
                <div class="modal fade" id="add-department" role="dialog">
                	<div class="modal-dialog">
                		<div class="modal-content">
		                	<div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Add Department</h4>
						    </div>
						    <div class="modal-body">
						    	<div class="row">
				                	<form role="form">
							            <div class="form-group col-md-12">
							                <label>Department Name</label>
							                <input class="form-control" placeholder="Ex. Web Design & Development">
							            </div>
							            <div class="form-group col-md-6">
							                <label>Manager</label>
							                <input class="form-control" placeholder="Ex. Giancarlo Matei">
							            </div>
							            <div class="form-group col-md-6">
							                <label>Number of Employees</label>
							                <input class="form-control" placeholder="Ex. 2">
							            </div>
							            <div class="form-group col-md-12">
							                <label>Description</label>
							                <textarea class="form-control" rows="3"></textarea>
							            </div>	
							            <div class="col-md-12">
											<fieldset>
								                <button type="submit" class="btn btn-primary pull-right">Add Department</button>
								            </fieldset>
								            <p></p>
							        	</div>		            		            
							        </form>
						        </div>
						    </div>
			        	</div>
			        </div>
                </div>
            </div>
        </div>
            
@stop
