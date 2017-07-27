@extends('layouts.master')
@section('title', 'metrics')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5 class="m-b-md">Server status Q12</h5>
					<h2 class="text-navy">
						<i class="fa fa-play fa-rotate-270"></i> Up
					</h2>
					<small>Last down 42 days ago</small>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content ">
					<h5 class="m-b-md">Server status Q13</h5>
					<h2 class="text-navy">
						<i class="fa fa-play fa-rotate-270"></i> Up
					</h2>
					<small>Last down 42 days ago</small>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5 class="m-b-md">Server status Q42</h5>
					<h2 class="text-danger">
						<i class="fa fa-play fa-rotate-90"></i> Down
					</h2>
					<small>Server down since 4 days</small>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5 class="m-b-md">Server status Q43</h5>
					<h2 class="text-danger">
						<i class="fa fa-play fa-rotate-90"></i> Down
					</h2>
					<small>Server down since 4:32 pm.</small>
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Visits in last 24h</h5>
					<h2>198 009</h2>
					<div id="sparkline1"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Visits week</h5>
					<h2>65 000</h2>
					<div id="sparkline2"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Last month</h5>
					<h2>680 900</h2>
					<div id="sparkline3"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Avarage time</h5>
					<h2>00:06:40</h2>
					<div id="sparkline4"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Usage</h5>
					<h2>65%</h2>
					<div class="progress progress-mini">
						<div style="width: 68%;" class="progress-bar"></div>
					</div>

					<div class="m-t-sm small">Server down since 4:32 pm.</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Usage</h5>
					<h2>50%</h2>
					<div class="progress progress-mini">
						<div style="width: 78%;" class="progress-bar"></div>
					</div>

					<div class="m-t-sm small">Server down since 4:32 pm.</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Usage</h5>
					<h2>14%</h2>
					<div class="progress progress-mini">
						<div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
					</div>

					<div class="m-t-sm small">Server down since 4:32 pm.</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Usage</h5>
					<h2>20%</h2>
					<div class="progress progress-mini">
						<div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
					</div>

					<div class="m-t-sm small">Server down since 4:32 pm.</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Percentage distribution</h5>
					<h2>42/20</h2>
					<div class="text-center">
						<div id="sparkline5"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Percentage division</h5>
					<h2>100/54</h2>
					<div class="text-center">
						<div id="sparkline6"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Percentage distribution</h5>
					<h2>685/211</h2>
					<div class="text-center">
						<div id="sparkline7"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Percentage division</h5>
					<h2>240/32</h2>
					<div class="text-center">
						<div id="sparkline8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Income</h5>
					<h1 class="no-margins">886,200</h1>
					<div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
					<small>Total income</small>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Income last month</h5>
					<h1 class="no-margins">1 738,200</h1>
					<div class="stat-percent font-bold text-navy">98% <i class="fa fa-bolt"></i></div>
					<small>Total income</small>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Income last day</h5>
					<h1 class="no-margins">-200,100</h1>
					<div class="stat-percent font-bold text-danger">12% <i class="fa fa-level-down"></i></div>
					<small>Total income</small>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Income all</h5>
					<h1 class="no-margins">54,200</h1>
					<div class="stat-percent font-bold text-danger">24% <i class="fa fa-level-down"></i></div>
					<small>Total income</small>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>All new alerts</h5>
					<table class="table table-stripped small m-t-md">
						<tbody>
							<tr>
								<td class="no-borders">
									<i class="fa fa-circle text-navy"></i>
								</td>
								<td  class="no-borders">
									Example element 1
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-navy"></i>
								</td>
								<td>
									Example element 2
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-navy"></i>
								</td>
								<td>
									Example element 3
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Alerts</h5>
					<table class="table table-stripped small m-t-md">
						<tbody>
							<tr>
								<td class="no-borders">
									<i class="fa fa-circle text-navy"></i>
								</td>
								<td  class="no-borders">
									Example element 1
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-navy"></i>
								</td>
								<td>
									Example element 2
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-navy"></i>
								</td>
								<td>
									Example element 3
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>All messages</h5>
					<table class="table table-stripped small m-t-md">
						<tbody>
							<tr>
								<td class="no-borders">
									<i class="fa fa-circle text-danger"></i>
								</td>
								<td  class="no-borders">
									Example element 1
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-danger"></i>
								</td>
								<td>
									Example element 2
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-danger"></i>
								</td>
								<td>
									Example element 3
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="ibox">
				<div class="ibox-content">
					<h5>Last notification</h5>
					<table class="table table-stripped small m-t-md">
						<tbody>
							<tr>
								<td class="no-borders">
									<i class="fa fa-circle text-danger"></i>
								</td>
								<td  class="no-borders">
									Example element 1
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-danger"></i>
								</td>
								<td>
									Example element 2
								</td>
							</tr>
							<tr>
								<td>
									<i class="fa fa-circle text-danger"></i>
								</td>
								<td>
									Example element 3
								</td>
							</tr>
						</tbody>
					</table>
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
@section('js')

    <script>
        $(document).ready(function() {

            var sparklineCharts = function(){
                 $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#1ab394',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline2").sparkline([24, 43, 43, 55, 44, 62, 44, 72], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#1ab394',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline3").sparkline([74, 43, 23, 55, 54, 32, 24, 12], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#ed5565',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline4").sparkline([24, 43, 33, 55, 64, 72, 44, 22], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#ed5565',
                     fillColor: "#ffffff"
                 });

                 $("#sparkline5").sparkline([1, 4], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#1ab394', '#F5F5F5']
                 });

                 $("#sparkline6").sparkline([5, 3], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#1ab394', '#F5F5F5']
                 });

                 $("#sparkline7").sparkline([2, 2], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#ed5565', '#F5F5F5']
                 });

                 $("#sparkline8").sparkline([2, 3], {
                     type: 'pie',
                     height: '140',
                     sliceColors: ['#ed5565', '#F5F5F5']
                 });
            };

            var sparkResize;

            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });

            sparklineCharts();


        });
    </script>
@endsection