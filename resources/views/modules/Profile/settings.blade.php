@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <h4>Users Details</h4>
            
        </div>
        <div class="col-sm-6 panel">
            <div class="panel-body">
            <img id="avatar_image" class="" src="{{ $user->avatar }}/resize/150/150/1" style="width:150px; height:150px; margin-right:25px;">

            <!--<img id="avatar_image" class="" src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; margin-right:25px;">-->
                <form enctype="multipart/form-data" name="update_profile" id="update_profile" action="{{ route('update.profile') }}" method="POST">
                        <input type="hidden" form="update_profile" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" class="form-control" id="avatar" name="avatar">
                </form> 
                <div class="">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input form="update_profile" type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="Full Name">
                      </div>
                    <div class="form-group">
                        
                        <form action="https://image-server1.herokuapp.com/api/upload" enctype="multipart/form-data" class="form-horizontal" method="post">
            				
            				 <div class="progress" style="">
            				  <div class="progress-bar" role="progressbar" aria-valuenow="0"
            				  aria-valuemin="0" aria-valuemax="100" style="width:0%">
            				    0%
            				  </div>
            				</div>
            				<div class="input-group">
            				    <input type="file" name="pic" class="form-control" />
                                  <span class="input-group-btn">
            				            <button class="btn btn-default upload-image">Upload Image</button>
                                  </span>
                                </div>
            							
            			</form>
                        
                      </div>
                        <div class="form-group">
                            <input form="update_profile" type="submit" class="btn btn-primary">
                        </div>
                    </div>
                    
                
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
        $(document).ready(function() { 


         var progressbar   = $('.progress-bar');


            $(".upload-image").click(function(e){

			e.preventDefault();

            	$(".form-horizontal").ajaxForm(
		{
		  target: '.preview',
		  beforeSend: function() {
			$(".progress").css("display","block");
			progressbar.width('0%');
			progressbar.text('0%');
                    },
		    uploadProgress: function (event, position, total, percentComplete) {
		        progressbar.width(percentComplete + '%');
		        progressbar.text(percentComplete + '%');
		     },
			complete: function(xhr) {
		      if(xhr.responseText)
		      {
		          document.getElementById('avatar').value = JSON.parse(xhr.responseText).link;
		          document.getElementById('avatar_image').src = JSON.parse(xhr.responseText).link + "/resize/150/150/1";

// 			document.getElementById("results").innerHTML=JSON.parse(xhr.responseText).link;
		      }
		    }
				})
		.submit();
            });


        }); 
    </script>
@endsection