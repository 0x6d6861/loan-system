@extends('layouts.app')

@section('content')
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Dashboard</h3>
        {{--<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>--}}
    </div>
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
</div>
@endsection
