@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
<div class="row">
	<div class="col-sm-12">
	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
		<i class="fa fa-plus"></i> Lend The company
	</button>
	</div>
</div>
    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">My Lends</h3>
                    <!--<p class="panel-subtitle">From: Oct 14, 2016 - Today</p>-->
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
						<thead>
							<tr><th>Date</th><th>Amount (KSH)</th><th>Percentage</th><th>Status</th></tr>
						</thead>
						<tbody>
							@forelse ($lends as $lend)
								<tr><td>DATE</td><td>{{ $lend->amount }}</td><td>{{ $lend->percentage }}</td><td>{{ $lend->status->name }}</td></tr>
							@empty
							    <tr>
							    	<td colspan='4' style="text-align:center">
							    		EMPTY
							    	</td>
							    </tr>
							@endforelse
						</tbody>
					</table>
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <h4>My Stats</h4>
            <div id="multiple-chart" class="ct-chart"></div>
        </div>
    </div>
    
    
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  	<form>
  		
  	
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lend The company</h4>
      </div>
      <div class="modal-body">
        <div class="row">
		  	<div class="col-sm-4">
		  		<div class="form-group">
			    <label for="amount">How Much?</label>
			    <input type="number" class="form-control" name="amount" id="amount" placeholder="How much?">
			  </div>
		  
		  	</div>
		  	<div class="col-sm-4">
		  		<div class="form-group">
				    <label for="percentage">Percentage</label>
				    <input type="number" class="form-control" name="percentage" id="percentage" placeholder="Percentage">
				  </div>
		  	</div>
		  	<div class="col-sm-4">
		  		<div class="form-group">
				    <label for="to_be_paid_on">When to be paid</label>
				    <input type="date" class="form-control" name="to_be_paid_on" id="to_be_paid_on" placeholder="To be paid on">
				  </div>
		  	</div>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        var data = {
			labels: ['Jan', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
			series: [{
				name: 'series-real',
				data: [380, 570, 400, 555, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 600, 700, 800],
			}]
		};
		
		var options = {
			fullWidth: true,
			lineSmooth: false,
			height: "180px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};
		
				new Chartist.Line('#multiple-chart', data, options);
    </script>
@endsection