@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <h4>Users Details</h4>
        </div>
        <div class="col-sm-6 panel">
            <div class="panel-body">
            <img class="pull-left" src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%; margin-right:25px;">
                <form class="pull-left" enctype="multipart/form-data" action="{{ route('update.profile') }}" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="Full Name">
                      </div>
                    <div class="form-group">
                        <label for="name">Profile Picture</label>
                        <input type="file" class="form-control" id="avatar" name="avatar">
                      </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                    </div>
                    
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-3">
            <h4>Change Password</h4>
        </div>
        <div class="col-sm-6 panel">
                <div class="panel-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}
 
                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <div class="">
                                <input id="current-password" type="password" placeholder="Current Password" class="form-control" name="current-password" required>
 
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">

                            <div class="">
                                <input id="new-password" type="password" placeholder="New Password" class="form-control" name="new-password" required>
 
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">

                            <div class="">
                                <input id="new-password-confirm" type="password" placeholder="Password Comfirmation" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
           
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection