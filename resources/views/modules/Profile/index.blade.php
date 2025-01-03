@extends('layouts.app')

@section('content')
    <div class="panel panel-profile">
        <div class="clearfix">
            <!-- LEFT COLUMN -->
            <div class="profile-left">
                <!-- PROFILE HEADER -->
                <div class="profile-header">
                    <div class="overlay"></div>
                    <div class="profile-main">
                        <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" alt="Avatar" style="height: 150px;">
                        <h3 class="name">{{ Auth::user()->name }}</h3>
                        {{--<span class="online-status status-available">Available</span>--}}
                    </div>
                    {{--<div class="profile-stat">
                        <div class="row">
                            <div class="col-md-4 stat-item">
                                45 <span>Loans</span>
                            </div>
                            <div class="col-md-4 stat-item">
                                15 <span>Lends</span>
                            </div>
                            <div class="col-md-4 stat-item">
                                2174 <span>Points</span>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <a href="#" style="border-top-right-radius: 0;border-top-left-radius: 0;border-top-width: 0;" class="btn btn-default btn-block" data-toggle="modal" data-target="#editModal">Edit Profile</a>

                <!-- END PROFILE HEADER -->
                <!-- PROFILE DETAIL -->
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading">Basic Info</h4>
                        <ul class="list-unstyled list-justify">
                            <li>Birthdate <span>24 Aug, 2016</span></li>
                            <li>Mobile <span>(124) 823409234</span></li>
                            <li>Email <span>samuel@mydomain.com</span></li>
                            <li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span></li>
                        </ul>
                    </div>
                    <div class="profile-info">
                        <h4 class="heading">Social</h4>
                        <ul class="list-inline social-icons">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- END PROFILE DETAIL -->
            </div>
            <!-- END LEFT COLUMN -->
            <!-- RIGHT COLUMN -->
            <div class="profile-right">
                <h4 class="heading">{{ Auth::user()->name }}'s Statistics</h4>
                <!-- AWARDS -->
                <div class="awards">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="award-item">
                                <div class="hexagon">
                                    <span class="award-icon">24</span>
                                </div>
                                <span>Total Loans</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="award-item">
                                <div class="hexagon">
                                    <span class="award-icon">33</span>
                                </div>
                                <span>Total Lends</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="award-item">
                                <div class="hexagon">
                                    <span class="award-icon">21</span>                                </div>
                                <span>Total Paid Loans</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="award-item">
                                <div class="hexagon">
                                    <span class="award-icon">47%</span>                                </div>
                                <span>Loan Eligibility</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-info">
                    <h4 class="heading">About</h4>
                    <p>Interactively fashion excellent information after distinctive outsourcing.</p>
                </div>

                <!-- END AWARDS -->
                <!-- TABBED CONTENT -->
                <div class="custom-tabs-line tabs-line-bottom left-aligned">
                    <ul class="nav" role="tablist">
                        {{--TODO: Add another tab for lends--}}
                        <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
                        <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Resent Loans <span class="badge">4</span></a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab-bottom-left1">
                        <ul class="list-unstyled activity-timeline">
                            <li>
                                <i class="fa fa-comment activity-icon"></i>
                                <p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span></p>
                            </li>
                            <li>
                                <i class="fa fa-cloud-upload activity-icon"></i>
                                <p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New Year Campaign</a> <span class="timestamp">7 hours ago</span></p>
                            </li>
                            <li>
                                <i class="fa fa-plus activity-icon"></i>
                                <p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to project repository <span class="timestamp">Yesterday</span></p>
                            </li>
                            <li>
                                <i class="fa fa-check activity-icon"></i>
                                <p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1 day ago</span></p>
                            </li>
                        </ul>
                        <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
                    </div>
                    <div class="tab-pane fade" id="tab-bottom-left2">
                        <div class="table-responsive">
                            <table class="table project-table">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Progress</th>
                                    <th>Leader</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="#">Spot Media</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                <span>60% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">E-Commerce Site</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                <span>33% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                    <td><span class="label label-warning">PENDING</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                <span>68% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Wordpress Theme</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span>75%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle" /> <a href="#">Antonius</a></td>
                                    <td><span class="label label-default">CLOSED</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Redesign Landing Page</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle" /> <a href="#">Jason</a></td>
                                    <td><span class="label label-default">CLOSED</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END TABBED CONTENT -->
            </div>
            <!-- END RIGHT COLUMN -->
        </div>
    </div>




    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Edit Profile</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">.col-md-4</div>
                        <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
                        <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9">
                            Level 1: .col-sm-9
                            <div class="row">
                                <div class="col-xs-8 col-sm-6">
                                    Level 2: .col-xs-8 .col-sm-6
                                </div>
                                <div class="col-xs-4 col-sm-6">
                                    Level 2: .col-xs-4 .col-sm-6
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection