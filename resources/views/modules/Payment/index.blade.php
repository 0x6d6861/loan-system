@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
   
    
    <div class="row">
        <div class="col-sm-10">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Payments</h3>
                    <!--<p class="panel-subtitle">From: Oct 14, 2016 - Today</p>-->
                </div>
                <div class="panel-body">
                    Payments
                </div>
            </div>

        </div>
    </div>
    
@endsection

@section('script')
    <script type="text/javascript">
        
    </script>
@endsection