@extends('layouts.dashboard')
@section('page_heading','Dashboard')
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
            <div class="row">
            	<div class="col-lg-12">
            		@section ('cchart11_panel_title','Line Chart')
                    @section ('cchart11_panel_body')
                    @include('widgets.charts.clinechart')
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'cchart11'))
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                	@section ('cotable_panel_title','Login Details')
					@section ('cotable_panel_body')
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Time-in</th>
								<th>Time-out</th>
								<th>Date</th>
							</tr>
						</thead>
						<tbody>
							<tr class="success">
								<td>12:30:12</td>
								<td>12:30:12</td>
								<td>June 25, 2017</td>
							</tr>
							<tr>
								<td>12:30:12</td>
								<td>12:30:12</td>
								<td>June 26, 2017</td>
							</tr>
							<tr class="info">
								<td>12:30:12</td>
								<td>12:30:12</td>
								<td>June 27, 2017</td>
							</tr>
							<tr>
								<td>12:30:12</td>
								<td>12:30:12</td>
								<td>June 28, 2017</td>
							</tr>
							<tr class="warning">
								<td>12:30:12</td>
								<td>12:30:12</td>
								<td>June 29, 2017</td>
							</tr>
							<tr>
								<td>12:30:12</td>
								<td>12:30:12</td>
								<td>June 30, 2017</td>
							</tr>
							<tr class="danger">
								<td>12:30:12</td>
								<td>12:30:12</td>
								<td>June 31, 2017</td>
							</tr>
						</tbody>
					</table>	
					@endsection
					@include('widgets.panel', array('header'=>true, 'as'=>'cotable'))

					@section ('pane1_panel_title', 'Reminder')
                    @section ('pane1_panel_body')
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                1. New Comment
                                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                2. 3 New Followers
                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                3. Message Sent
                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                4. New Task
                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                5. Server Rebooted
                                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                6. Server Crashed!
                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                </span>
                            </a>
                        </div>
                        <!-- /.list-group -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Remind
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'pane1'))
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-6">
					@section ('pane4_panel_title', 'Time and Date')
                    @section ('pane4_panel_body')
	                    <div class="list-group">
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <form role="form">
						            <fieldset class="col-lg-6" disabled>
						                <button type="submit" class="btn btn-primary col-lg-12">Clock-in</button>
						            </fieldset>
						            <fieldset class="col-lg-6">
						                <button type="submit" class="btn btn-primary col-lg-12">Clock-out</button>
						            </fieldset>
						        </form>
	                        </div>
	                        <!-- /.panel-body -->
	                        <div class="panel-footer">
                                <div class="row">
	                                <div class="col-lg-4">
	                                    <span><em>Actual Time-in:</em></span>
	                                </div>
	                                <div class="col-lg-8">
	                                    <span><?php $mytime = Carbon\Carbon::now(); echo $mytime->toTimeString(); ?></span>
	                                </div>
	                            </div>
	                            <div class="row">
	                                <div class="col-lg-4">
	                                    <span><em>Actual Time-out:</em></span>
	                                </div>
	                                <div class="col-lg-8">
	                                    <span></span>
	                                </div>
	                            </div>
                            </div>
	                    </div>
	                    <!-- /.panel-footer -->
	                @endsection
                	@include('widgets.panel', array('header'=>true, 'as'=>'pane4'))
                	 <!-- /.panel -->
                    @section ('pane3_panel_title', 'Company Updates')
                    @section ('pane3_panel_body')
	                    <div class="list-group">
	                        <div class="btn-group pull-right margin-inverse-top">
	                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
	                                <i class="fa fa-chevron-down"></i>
	                            </button>
	                            <ul class="dropdown-menu slidedown">
	                                <li>
	                                    <a href="#">
	                                        <i class="fa fa-refresh fa-fw"></i> Refresh
	                                    </a>
	                                </li>
	                                <li>
	                                    <a href="#">
	                                        <i class="fa fa-check-circle fa-fw"></i> Available
	                                    </a>
	                                </li>
	                                <li>
	                                    <a href="#">
	                                        <i class="fa fa-times fa-fw"></i> Busy
	                                    </a>
	                                </li>
	                                <li>
	                                    <a href="#">
	                                        <i class="fa fa-clock-o fa-fw"></i> Away
	                                    </a>
	                                </li>
	                                <li class="divider"></li>
	                                <li>
	                                    <a href="#">
	                                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
	                                    </a>
	                                </li>
	                            </ul>
	                        </div>      
	                
	                        <!-- /.panel-heading -->
	                        <div class="panel-body">
	                            <ul class="chat">
	                                <li class="left clearfix">
	                                    <span class="chat-img pull-left">
	                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
	                                    </span>
	                                    <div class="chat-body clearfix">
	                                        <div class="header">
	                                            <strong class="primary-font">Jack Sparrow</strong>
	                                            <small class="pull-right text-muted">
	                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
	                                            </small>
	                                        </div>
	                                        <p>
	                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
	                                        </p>
	                                    </div>
	                                </li>
	                                <li class="left clearfix">
	                                    <span class="chat-img pull-left">
	                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
	                                    </span>
	                                    <div class="chat-body clearfix">
	                                        <div class="header">
	                                        	<strong class="primary-font">Bhaumik Patel</strong>
	                                            <small class="pull-right text-muted">
	                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago
	                                            </small>
	                                        </div>
	                                        <p>
	                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
	                                        </p>
	                                    </div>
	                                </li>
	                                <li class="left clearfix">
	                                    <span class="chat-img pull-left">
	                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
	                                    </span>
	                                    <div class="chat-body clearfix">
	                                        <div class="header">
	                                            <strong class="primary-font">Jack Sparrow</strong>
	                                            <small class="pull-right text-muted">
	                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
	                                        </div>
	                                        <p>
	                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
	                                        </p>
	                                    </div>
	                                </li>
	                                <li class="left clearfix">
	                                    <span class="chat-img pull-left">
	                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
	                                    </span>
	                                    <div class="chat-body clearfix">
	                                        <div class="header">
	                                        	<strong class="primary-font">Bhaumik Patel</strong>
	                                            <small class="pull-right text-muted">
	                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
	                                            </small>
	                                        </div>
	                                        <p>
	                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
	                                        </p>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                        <!-- /.panel-body -->
	                        <div class="panel-footer">
	                            <div class="input-group">
	                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
	                                <span class="input-group-btn">
	                                    <button class="btn btn-warning btn-sm" id="btn-chat">
	                                        Update
	                                    </button>
	                                </span>
	                            </div>
	                        </div>
	                        <!-- /.panel-footer -->
	                    </div>
                    <!-- /.panel .chat-panel -->
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'pane3'))
	            </div>
                <!-- /.panel .chat-panel -->
            </div>
		</div>
                <!-- /.col-lg-4 -->
            
@stop
