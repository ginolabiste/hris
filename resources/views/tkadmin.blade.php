@extends('layouts.dashboard')
@section('page_heading','Time Keeping (Admin)')
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
                <div class="col-lg-4">
                	
                	@section ('pane4_panel_title', 'Admin Schedule Plot')
                    @section ('pane4_panel_body')
	                        <!-- /.panel-heading -->
	                    <div class="panel-body">
	                        <form role="form">
					            <div class="form-group">
					                <label>Date Plotted</label>
					                <input class="form-control" placeholder="Date From (mm/dd/yyyy)">
					                <p></p>
					                <input class="form-control" placeholder="Date To (mm/dd/yyyy)">
					            </div>
					            <div class="form-group input-group">
					                <span class="input-group-addon">Plotted by</span>
					                <select class="form-control">
					                    <option>Ma. Theresa Estrada</option>
					                    <option>Emmaree Lozada</option>
					                    <option>Marlon Corpuz</option>
					                    <option>Pretty Nadine Carno</option>
					                </select>
					            </div>
					            <div class="form-group">
					                <label>Status</label><br>
					                <button type="submit" class="btn btn-default">Plotted</button>
					            	<button type="reset" class="btn btn-default">Pending Approval</button>
					            </div>
					            <div class="form-group input-group">
					                <span class="input-group-addon">Approved by</span>
					                <select class="form-control">
					                    <option>Patrick Panuncillon</option>
					                    <option>Giancarlo Matei</option>
					                    <option>John Gison</option>
					                    <option>Al Punzalan</option>
					                </select>
					            </div>
					            <fieldset class="col-lg-12">
					                <button type="submit" class="btn btn-primary col-lg-12">Request for Plot</button>
					            </fieldset>
					        </form>
	                    </div>
	                        <!-- /.panel-body -->
	                    <!-- /.panel-footer -->
	                @endsection
                	@include('widgets.panel', array('header'=>true, 'as'=>'pane4'))

                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-8">

                	@section ('cotable_panel_title','Calendar')
					@section ('cotable_panel_body')
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><p>06-19-17</p><p>Monday</p></th>
								<th><p>06-20-17</p><p>Tuesday</p></th>
								<th><p>06-21-17</p><p>Wednesday</p></th>
								<th><p>06-22-17</p><p>Thursday</p></th>
								<th><p>06-23-17</p><p>Friday</p></th>
							</tr>
						</thead>
						<tbody>
							<tr class="info">
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
							</tr>
							<tr class="success">
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
							</tr>
							<tr class="success">
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
							</tr>
						</tbody>
						<thead>
							<tr>
								<th><p>06-19-17</p><p>Monday</p></th>
								<th><p>06-20-17</p><p>Tuesday</p></th>
								<th><p>06-21-17</p><p>Wednesday</p></th>
								<th><p>06-22-17</p><p>Thursday</p></th>
								<th><p>06-23-17</p><p>Friday</p></th>
							</tr>
						</thead>
						<tbody>
							<tr class="info">
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
								<td><p>1PM - 10PM</p><span class="text-muted small"><em>Time Plot</em></span></td>
							</tr>
							<tr class="success">
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
								<td><p>12:30:12</p><span class="text-muted small"><em>Actual Time-in</em></span></td>
							</tr>
							<tr class="success">
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
								<td><p>22:30:12</p><span class="text-muted small"><em>Actual Time-out</em></span></td>
							</tr>
						</tbody>
					</table>	

					<fieldset class="col-lg-12">
		                <button type="submit" class="btn btn-primary pull-right">Apply for Leave</button>
		            </fieldset>

					@endsection
					@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))

	            </div>
                <!-- /.panel .chat-panel -->
            </div>
		</div>
                <!-- /.col-lg-4 -->
            
@stop
