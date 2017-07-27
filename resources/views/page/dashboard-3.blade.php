@extends('layouts.master')
@section('title','dashboard-4')
@section('content')
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-2">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<span class="label label-success pull-right">Monthly</span>
					<h5>Views</h5>
				</div>
				<div class="ibox-content">
					<h1 class="no-margins">386,200</h1>
					<div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
					<small>Total views</small>
				</div>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<span class="label label-info pull-right">Annual</span>
					<h5>Orders</h5>
				</div>
				<div class="ibox-content">
					<h1 class="no-margins">80,800</h1>
					<div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
					<small>New orders</small>
				</div>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<span class="label label-primary pull-right">Today</span>
					<h5>Vistits</h5>
				</div>
				<div class="ibox-content">

					<div class="row">
						<div class="col-md-6">
							<h1 class="no-margins">406,42</h1>
							<div class="font-bold text-navy">44% <i class="fa fa-level-up"></i> <small>Rapid pace</small></div>
						</div>
						<div class="col-md-6">
							<h1 class="no-margins">206,12</h1>
							<div class="font-bold text-navy">22% <i class="fa fa-level-up"></i> <small>Slow pace</small></div>
						</div>
					</div>


				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Monthly income</h5>
					<div class="ibox-tools">
						<span class="label label-primary">Updated 12.2015</span>
					</div>
				</div>
				<div class="ibox-content no-padding">
					<div class="flot-chart m-t-lg" style="height: 55px;">
						<div class="flot-chart-content" id="flot-chart1"></div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<div>
						<span class="pull-right text-right">
							<small>Average value of sales in the past month in: <strong>United states</strong></small>
							<br/>
							All sales: 162,862
						</span>
						<h3 class="font-bold no-margins">
							Half-year revenue margin
						</h3>
						<small>Sales marketing.</small>
					</div>

					<div class="m-t-sm">

						<div class="row">
							<div class="col-md-8">
								<div>
									<canvas id="lineChart" height="114"></canvas>
								</div>
							</div>
							<div class="col-md-4">
								<ul class="stat-list m-t-lg">
									<li>
										<h2 class="no-margins">2,346</h2>
										<small>Total orders in period</small>
										<div class="progress progress-mini">
											<div class="progress-bar" style="width: 48%;"></div>
										</div>
									</li>
									<li>
										<h2 class="no-margins ">4,422</h2>
										<small>Orders in last month</small>
										<div class="progress progress-mini">
											<div class="progress-bar" style="width: 60%;"></div>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>

					<div class="m-t-md">
						<small class="pull-right">
							<i class="fa fa-clock-o"> </i>
							Update on 16.07.2015
						</small>
						<small>
							<strong>Analysis of sales:</strong> The value has been changed over time, and last month reached a level over $50,000.
						</small>
					</div>

				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<span class="label label-warning pull-right">Data has changed</span>
					<h5>User activity</h5>
				</div>
				<div class="ibox-content">
					<div class="row">
						<div class="col-xs-4">
							<small class="stats-label">Pages / Visit</small>
							<h4>236 321.80</h4>
						</div>

						<div class="col-xs-4">
							<small class="stats-label">% New Visits</small>
							<h4>46.11%</h4>
						</div>
						<div class="col-xs-4">
							<small class="stats-label">Last week</small>
							<h4>432.021</h4>
						</div>
					</div>
				</div>
				<div class="ibox-content">
					<div class="row">
						<div class="col-xs-4">
							<small class="stats-label">Pages / Visit</small>
							<h4>643 321.10</h4>
						</div>

						<div class="col-xs-4">
							<small class="stats-label">% New Visits</small>
							<h4>92.43%</h4>
						</div>
						<div class="col-xs-4">
							<small class="stats-label">Last week</small>
							<h4>564.554</h4>
						</div>
					</div>
				</div>
				<div class="ibox-content">
					<div class="row">
						<div class="col-xs-4">
							<small class="stats-label">Pages / Visit</small>
							<h4>436 547.20</h4>
						</div>

						<div class="col-xs-4">
							<small class="stats-label">% New Visits</small>
							<h4>150.23%</h4>
						</div>
						<div class="col-xs-4">
							<small class="stats-label">Last week</small>
							<h4>124.990</h4>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row">

		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Custom responsive table </h5>
					<div class="ibox-tools">
						<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
						</a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-wrench"></i>
						</a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a>
							</li>
							<li><a href="#">Config option 2</a>
							</li>
						</ul>
						<a class="close-link">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="ibox-content">
					<div class="row">
						<div class="col-sm-9 m-b-xs">
							<div data-toggle="buttons" class="btn-group">
								<label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> Day </label>
								<label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> Week </label>
								<label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Month </label>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
								<button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>

										<th>#</th>
										<th>Project </th>
										<th>Name </th>
										<th>Phone </th>
										<th>Company </th>
										<th>Completed </th>
										<th>Task</th>
										<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Project <small>This is example of project</small></td>
										<td>Patrick Smith</td>
										<td>0800 051213</td>
										<td>Inceptos Hymenaeos Ltd</td>
										<td><span class="pie">0.52/1.561</span></td>
										<td>20%</td>
										<td>Jul 14, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Alpha project</td>
										<td>Alice Jackson</td>
										<td>0500 780909</td>
										<td>Nec Euismod In Company</td>
										<td><span class="pie">6,9</span></td>
										<td>40%</td>
										<td>Jul 16, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Betha project</td>
										<td>John Smith</td>
										<td>0800 1111</td>
										<td>Erat Volutpat</td>
										<td><span class="pie">3,1</span></td>
										<td>75%</td>
										<td>Jul 18, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>Gamma project</td>
										<td>Anna Jordan</td>
										<td>(016977) 0648</td>
										<td>Tellus Ltd</td>
										<td><span class="pie">4,9</span></td>
										<td>18%</td>
										<td>Jul 22, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Alpha project</td>
										<td>Alice Jackson</td>
										<td>0500 780909</td>
										<td>Nec Euismod In Company</td>
										<td><span class="pie">6,9</span></td>
										<td>40%</td>
										<td>Jul 16, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Project <small>This is example of project</small></td>
										<td>Patrick Smith</td>
										<td>0800 051213</td>
										<td>Inceptos Hymenaeos Ltd</td>
										<td><span class="pie">0.52/1.561</span></td>
										<td>20%</td>
										<td>Jul 14, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>Gamma project</td>
										<td>Anna Jordan</td>
										<td>(016977) 0648</td>
										<td>Tellus Ltd</td>
										<td><span class="pie">4,9</span></td>
										<td>18%</td>
										<td>Jul 22, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Project <small>This is example of project</small></td>
										<td>Patrick Smith</td>
										<td>0800 051213</td>
										<td>Inceptos Hymenaeos Ltd</td>
										<td><span class="pie">0.52/1.561</span></td>
										<td>20%</td>
										<td>Jul 14, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Alpha project</td>
										<td>Alice Jackson</td>
										<td>0500 780909</td>
										<td>Nec Euismod In Company</td>
										<td><span class="pie">6,9</span></td>
										<td>40%</td>
										<td>Jul 16, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Betha project</td>
										<td>John Smith</td>
										<td>0800 1111</td>
										<td>Erat Volutpat</td>
										<td><span class="pie">3,1</span></td>
										<td>75%</td>
										<td>Jul 18, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>Gamma project</td>
										<td>Anna Jordan</td>
										<td>(016977) 0648</td>
										<td>Tellus Ltd</td>
										<td><span class="pie">4,9</span></td>
										<td>18%</td>
										<td>Jul 22, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Alpha project</td>
										<td>Alice Jackson</td>
										<td>0500 780909</td>
										<td>Nec Euismod In Company</td>
										<td><span class="pie">6,9</span></td>
										<td>40%</td>
										<td>Jul 16, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>1</td>
										<td>Project <small>This is example of project</small></td>
										<td>Patrick Smith</td>
										<td>0800 051213</td>
										<td>Inceptos Hymenaeos Ltd</td>
										<td><span class="pie">0.52/1.561</span></td>
										<td>20%</td>
										<td>Jul 14, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>Gamma project</td>
										<td>Anna Jordan</td>
										<td>(016977) 0648</td>
										<td>Tellus Ltd</td>
										<td><span class="pie">4,9</span></td>
										<td>18%</td>
										<td>Jul 22, 2013</td>
										<td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>

		</div>


	</div>


	<div class="footer">
		<div class="pull-right">
			10GB of <strong>250GB</strong> Free.
		</div>
		<div>
			<strong>Copyright</strong> Example Company &copy; 2014-2015
		</div>
	</div>

</div>
<div id="right-sidebar">
	<div class="sidebar-container">

		<ul class="nav nav-tabs navs-3">

			<li class="active"><a data-toggle="tab" href="#tab-1">
				Notes
			</a></li>
			<li><a data-toggle="tab" href="#tab-2">
				Projects
			</a></li>
			<li class=""><a data-toggle="tab" href="#tab-3">
				<i class="fa fa-gear"></i>
			</a></li>
		</ul>

		<div class="tab-content">


			<div id="tab-1" class="tab-pane active">

				<div class="sidebar-title">
					<h3> <i class="fa fa-comments-o"></i> Latest Notes</h3>
					<small><i class="fa fa-tim"></i> You have 10 new message.</small>
				</div>

				<div>

					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a1.jpg">

								<div class="m-t-xs">
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
								</div>
							</div>
							<div class="media-body">

								There are many variations of passages of Lorem Ipsum available.
								<br>
								<small class="text-muted">Today 4:21 pm</small>
							</div>
						</a>
					</div>
					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a2.jpg">
							</div>
							<div class="media-body">
								The point of using Lorem Ipsum is that it has a more-or-less normal.
								<br>
								<small class="text-muted">Yesterday 2:45 pm</small>
							</div>
						</a>
					</div>
					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a3.jpg">

								<div class="m-t-xs">
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
								</div>
							</div>
							<div class="media-body">
								Mevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
								<br>
								<small class="text-muted">Yesterday 1:10 pm</small>
							</div>
						</a>
					</div>
					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a4.jpg">
							</div>

							<div class="media-body">
								Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
								<br>
								<small class="text-muted">Monday 8:37 pm</small>
							</div>
						</a>
					</div>
					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a8.jpg">
							</div>
							<div class="media-body">

								All the Lorem Ipsum generators on the Internet tend to repeat.
								<br>
								<small class="text-muted">Today 4:21 pm</small>
							</div>
						</a>
					</div>
					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a7.jpg">
							</div>
							<div class="media-body">
								Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
								<br>
								<small class="text-muted">Yesterday 2:45 pm</small>
							</div>
						</a>
					</div>
					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a3.jpg">

								<div class="m-t-xs">
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
									<i class="fa fa-star text-warning"></i>
								</div>
							</div>
							<div class="media-body">
								The standard chunk of Lorem Ipsum used since the 1500s is reproduced below.
								<br>
								<small class="text-muted">Yesterday 1:10 pm</small>
							</div>
						</a>
					</div>
					<div class="sidebar-message">
						<a href="#">
							<div class="pull-left text-center">
								<img alt="image" class="img-circle message-avatar" src="Static/img/a4.jpg">
							</div>
							<div class="media-body">
								Uncover many web sites still in their infancy. Various versions have.
								<br>
								<small class="text-muted">Monday 8:37 pm</small>
							</div>
						</a>
					</div>
				</div>

			</div>

			<div id="tab-2" class="tab-pane">

				<div class="sidebar-title">
					<h3> <i class="fa fa-cube"></i> Latest projects</h3>
					<small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
				</div>

				<ul class="sidebar-list">
					<li>
						<a href="#">
							<div class="small pull-right m-t-xs">9 hours ago</div>
							<h4>Business valuation</h4>
							It is a long established fact that a reader will be distracted.

							<div class="small">Completion with: 22%</div>
							<div class="progress progress-mini">
								<div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
							</div>
							<div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="small pull-right m-t-xs">9 hours ago</div>
							<h4>Contract with Company </h4>
							Many desktop publishing packages and web page editors.

							<div class="small">Completion with: 48%</div>
							<div class="progress progress-mini">
								<div style="width: 48%;" class="progress-bar"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="small pull-right m-t-xs">9 hours ago</div>
							<h4>Meeting</h4>
							By the readable content of a page when looking at its layout.

							<div class="small">Completion with: 14%</div>
							<div class="progress progress-mini">
								<div style="width: 14%;" class="progress-bar progress-bar-info"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="label label-primary pull-right">NEW</span>
							<h4>The generated</h4>
							<!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
							There are many variations of passages of Lorem Ipsum available.
							<div class="small">Completion with: 22%</div>
							<div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="small pull-right m-t-xs">9 hours ago</div>
							<h4>Business valuation</h4>
							It is a long established fact that a reader will be distracted.

							<div class="small">Completion with: 22%</div>
							<div class="progress progress-mini">
								<div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
							</div>
							<div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="small pull-right m-t-xs">9 hours ago</div>
							<h4>Contract with Company </h4>
							Many desktop publishing packages and web page editors.

							<div class="small">Completion with: 48%</div>
							<div class="progress progress-mini">
								<div style="width: 48%;" class="progress-bar"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="small pull-right m-t-xs">9 hours ago</div>
							<h4>Meeting</h4>
							By the readable content of a page when looking at its layout.

							<div class="small">Completion with: 14%</div>
							<div class="progress progress-mini">
								<div style="width: 14%;" class="progress-bar progress-bar-info"></div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="label label-primary pull-right">NEW</span>
							<h4>The generated</h4>
							<!--<div class="small pull-right m-t-xs">9 hours ago</div>-->
							There are many variations of passages of Lorem Ipsum available.
							<div class="small">Completion with: 22%</div>
							<div class="small text-muted m-t-xs">Project end: 4:00 pm - 12.06.2014</div>
						</a>
					</li>

				</ul>

			</div>

			<div id="tab-3" class="tab-pane">

				<div class="sidebar-title">
					<h3><i class="fa fa-gears"></i> Settings</h3>
					<small><i class="fa fa-tim"></i> You have 14 projects. 10 not completed.</small>
				</div>

				<div class="setings-item">
					<span>
						Show notifications
					</span>
					<div class="switch">
						<div class="onoffswitch">
							<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
							<label class="onoffswitch-label" for="example">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="setings-item">
					<span>
						Disable Chat
					</span>
					<div class="switch">
						<div class="onoffswitch">
							<input type="checkbox" name="collapsemenu" checked class="onoffswitch-checkbox" id="example2">
							<label class="onoffswitch-label" for="example2">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="setings-item">
					<span>
						Enable history
					</span>
					<div class="switch">
						<div class="onoffswitch">
							<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
							<label class="onoffswitch-label" for="example3">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="setings-item">
					<span>
						Show charts
					</span>
					<div class="switch">
						<div class="onoffswitch">
							<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
							<label class="onoffswitch-label" for="example4">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="setings-item">
					<span>
						Offline users
					</span>
					<div class="switch">
						<div class="onoffswitch">
							<input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example5">
							<label class="onoffswitch-label" for="example5">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="setings-item">
					<span>
						Global search
					</span>
					<div class="switch">
						<div class="onoffswitch">
							<input type="checkbox" checked name="collapsemenu" class="onoffswitch-checkbox" id="example6">
							<label class="onoffswitch-label" for="example6">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>
				<div class="setings-item">
					<span>
						Update everyday
					</span>
					<div class="switch">
						<div class="onoffswitch">
							<input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
							<label class="onoffswitch-label" for="example7">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</div>
					</div>
				</div>

				<div class="sidebar-content">
					<h4>Settings</h4>
					<div class="small">
						I belive that. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						And typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
						Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop