@extends('layouts.master')
@section('title','Widgets')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-9">
                    <h2>Widgets</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <strong>Widgets</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget style1">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Today income </span>
                                <h2 class="font-bold">$ 4,232</h2>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-cloud fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Today degrees </span>
                            <h2 class="font-bold">26'C</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-envelope-o fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> New messages </span>
                            <h2 class="font-bold">260</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-music fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> New albums </span>
                            <h2 class="font-bold">12</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="widget navy-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">$ 1,540</h1>

                        <h3 class="font-bold no-margins">
                            Annual income
                        </h3>
                        <small>Income form project Alpha.</small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget lazur-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">$ 210,660</h1>

                        <h3 class="font-bold no-margins">
                            Monthly income
                        </h3>
                        <small>Income form project Beta.</small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget yellw-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">$ 50,992</h1>

                        <h3 class="font-bold no-margins">
                            Half-year revenue margin
                        </h3>
                        <small>Sales marketing.</small>
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart3"></div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">217</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-thumbs-up fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">400</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-rss fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">10</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 lazur-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-phone fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">120</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 lazur-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-euro fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">462</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 yellow-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-shield fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">610</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Alex Smith
                            </h2>
                                <small>Founder of Groupeq</small>
                            </div>
                            <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            <div>
                                <span>100 Tweets</span> |
                                <span>350 Following</span> |
                                <span>610 Followers</span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">Alex Smith</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="text-right">
                                <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                            </div>
                        </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-shield fa-4x"></i>
                            <h1 class="m-xs">456</h1>
                            <h3 class="font-bold no-margins">
                                Shield
                            </h3>
                            <small>power</small>
                        </div>
                    </div>
                    <div class="widget  p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-flash fa-4x"></i>
                            <h1 class="m-xs">612</h1>
                            <h3 class="font-bold no-margins">
                                Thunder
                            </h3>
                            <small>amount</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget lazur-bg p-xl">

                                <h2>
                                    Janet Smith
                                </h2>
                        <ul class="list-unstyled m-t-md">
                            <li>
                                <span class="fa fa-envelope m-r-xs"></span>
                                <label>Email:</label>
                                mike@mail.com
                            </li>
                            <li>
                                <span class="fa fa-home m-r-xs"></span>
                                <label>Address:</label>
                                Street 200, Avenue 10
                            </li>
                            <li>
                                <span class="fa fa-phone m-r-xs"></span>
                                <label>Contact:</label>
                                (+121) 678 3462
                            </li>
                        </ul>

                    </div>
                    <div class="widget red-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-bell fa-4x"></i>
                            <h1 class="m-xs">47</h1>
                            <h3 class="font-bold no-margins">
                                Notification
                            </h3>
                            <small>We detect the error.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                <div class="widget yellow-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-thumbs-up fa-4x"></i>
                        <h1 class="m-xs">520</h1>
                        <h3 class="font-bold no-margins">
                            Likes
                        </h3>
                        <small>amount</small>
                    </div>
                </div>
                    <div class="widget yellow-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-warning fa-4x"></i>
                            <h1 class="m-xs">Alarm</h1>
                            <h3 class="font-bold no-margins">
                                Do
                            </h3>
                            <small>something</small>
                        </div>
                    </div>
                    </div>
            </div>
        <div class="row m-t-lg">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">

                    <div class="ibox-content">

                        <div>
                <div class="chat-activity-list">

                    <div class="chat-element">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right text-navy">1m ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                    <div class="chat-element right">
                        <a href="#" class="pull-right">
                            <img alt="image" class="img-circle" src="img/a4.jpg">
                        </a>
                        <div class="media-body text-right ">
                            <small class="pull-left">5m ago</small>
                            <strong>John Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing.
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>

                    <div class="chat-element ">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="img/a2.jpg">
                        </a>
                        <div class="media-body ">
                            <small class="pull-right">2h ago</small>
                            <strong>Mike Smith</strong>
                            <p class="m-b-xs">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            </p>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>
                </div>
                </div>
                        <div class="chat-form">
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>Send message</strong></button>
                                </div>
                            </form>
                        </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-danger m-r-sm">12</button>
                                Total messages
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary m-r-sm">28</button>
                                Posts
                            </td>
                            <td>
                                <button type="button" class="btn btn-info m-r-sm">15</button>
                               Comments
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-info m-r-sm">20</button>
                                News
                            </td>
                            <td>
                                <button type="button" class="btn btn-success m-r-sm">40</button>
                                Likes
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger m-r-sm">30</button>
                                Notifications
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-warning m-r-sm">20</button>
                                Albums
                            </td>
                            <td>
                                <button type="button" class="btn btn-default m-r-sm">40</button>
                                Groups
                            </td>
                            <td>
                                <button type="button" class="btn btn-warning m-r-sm">30</button>
                                Permissions
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ibox-content text-center">
                                <h1>Nicki Smith</h1>
                                <div class="m-b-sm">
                                        <img alt="image" class="img-circle" src="img/a8.jpg">
                                </div>
                                        <p class="font-bold">Consectetur adipisicing</p>

                                <div class="text-center">
                                    <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ibox-content">
                                <div>
                                    <div>
                                        <span>Memory</span>
                                        <small class="pull-right">10/200 GB</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 60%;" class="progress-bar"></div>
                                    </div>

                                    <div>
                                        <span>Bandwidth</span>
                                        <small class="pull-right">20 GB</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 50%;" class="progress-bar"></div>
                                    </div>

                                    <div>
                                        <span>Activity</span>
                                        <small class="pull-right">73%</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 40%;" class="progress-bar"></div>
                                    </div>

                                    <div>
                                        <span>FTP</span>
                                        <small class="pull-right">400 GB</small>
                                    </div>
                                    <div class="progress progress-small">
                                        <div style="width: 20%;" class="progress-bar progress-bar-danger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="ibox-content">
                    <h2>TODO List</h2>
                    <small>This is example of task list</small>
                    <ul class="todo-list m-t">
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks"/>
                            <span class="m-l-xs">Buy a milk</span>
                            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" checked/>
                            <span class="m-l-xs">Go to shop and find some products.</span>
                            <small class="label label-info"><i class="fa fa-clock-o"></i> 3 mins</small>
                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks" />
                            <span class="m-l-xs">Send documents to Mike</span>
                            <small class="label label-warning"><i class="fa fa-clock-o"></i> 2 mins</small>
                        </li>
                        <li>
                            <input type="checkbox" value="" name="" class="i-checks"/>
                            <span class="m-l-xs">Go to the doctor dr Smith</span>
                            <small class="label label-danger"><i class="fa fa-clock-o"></i> 42 mins</small>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h2>TODO Small version</h2>
                        <small>This is example of small version of todo list</small>
                        <ul class="todo-list m-t small-list">
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs todo-completed">Buy a milk</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs  todo-completed">Go to shop and find some products.</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Send documents to Mike</span>
                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Go to the doctor dr Smith</span>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Plan vacation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-lg-12">
                <div class="ibox-content">
                    <h2>Word map</h2>
                    <small>This is simple example of map</small>
                <div id="world-map" style="height: 300px;"></div>
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