@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="row">
        <div class="col-sm-3">
            <div class="panel">
                <div class="panel-heading">
                    Navigation
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked nav-pills-stacked-example"> 
                        @foreach($statuses as $status)
                        <li role="presentation"><a href="#{{ $status->id }}">{{ $status->name }}</a></li> 
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="panel panel-headline inbox">
                <div class="panel-heading">
                    
                    header

                </div>
                <div class="panel-body">

							<ul class="messages-list">

								<li class="unread">
									<a href="page-inbox-message.html">
										<div class="header">
											<!--<span class="action"><i class="fa fa-square-o"></i><i class="fa fa-square"></i></span> -->
											<span class="from">Lukasz Holeczek</span>
											<span class="date"><span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
										</div>
										<div class="title">
											<!--<span class="action"><i class="fa fa-star-o"></i><i class="fa fa-star bg"></i></span>-->
											Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										</div>	
										<div class="description">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										</div>
									</a>		
								</li>

								<li>
									<a href="page-inbox-message.html">
										<div class="header">
											<!--<span class="action"><i class="fa fa-square-o"></i><i class="fa fa-square"></i></span> -->
											<span class="from">Lukasz Holeczek</span>
											<span class="date"><span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
										</div>
										<div class="title">
											<!--<span class="action"><i class="fa fa-star-o"></i><i class="fa fa-star bg"></i></span>-->
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										</div>	
										<div class="description">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
										</div>
									</a>		
								</li>

								

							
								

							</ul>
							
						</div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {

        	
        
         });
    </script>
@endsection

@section('style')
<style type="text/css">
.inbox ul.messages-list {
    list-style: none;
    margin: 15px -15px 0 -15px;
    padding: 15px 15px 0 15px;
    border-top: 1px solid #e1e6ef;
}
.inbox ul.messages-list li {
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    cursor: pointer;
    margin-bottom: 10px;
    padding: 10px;
}

.inbox ul.messages-list li a {
    color: #374767;
}

.inbox ul.messages-list li.unread .header, .inbox ul.messages-list li.unread .title {
    font-weight: bold;
}

.inbox ul.messages-list li.unread .header, .inbox ul.messages-list li.unread .title {
    font-weight: bold;
}

.inbox ul.messages-list li .description {
    font-size: 12px;
    /*padding-left: 29px;*/
}

.inbox ul.messages-list li .action {
    display: inline-block;
    width: 16px;
    text-align: center;
    margin-right: 10px;
    color: #e1e6ef;
}

.inbox ul.messages-list li .header .from {
    width: 49.9%;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
}

.inbox ul.messages-list li .header .date {
    width: 50%;
    text-align: right;
    float: right;
}

.inbox ul.messages-list li .action {
    display: inline-block;
    width: 16px;
    text-align: center;
    margin-right: 10px;
    color: #e1e6ef;
}

.inbox ul.messages-list li .description {
    font-size: 12px;
    /*padding-left: 29px;*/
}
.inbox ul.messages-list li .action {
    display: inline-block;
    width: 16px;
    text-align: center;
    margin-right: 10px;
    color: #e1e6ef;
}

.inbox ul.messages-list li:hover {
    background: #f2f4f8;
    border: 1px solid #e1e6ef;
    padding: 9px;
}

</style>

@endsection