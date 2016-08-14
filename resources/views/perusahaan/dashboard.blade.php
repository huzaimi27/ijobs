@extends('admin.app')

@section('content')

<!-- Theme JS files -->
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('administrator/assets/js/plugins/visualization/c3/c3.min.js')}}"></script>

<script type="text/javascript" src="{{asset('administrator/assets/js/charts/c3/c3_axis.js')}}"></script>

<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title">Dashboard</h5>
    </div>

    <div class="panel-body">
        <div class="chart-container">
            <div class="chart" id="c3-axis-categorized"></div>
        </div>
    </div>
</div>

@endsection