@extends('sextant::_layouts.sextant')

@section('content')
<h2>
	Laravel Routes
</h2>

<p>
	Routes match in priority from top to bottom
</p>

<table id="route_table" class="route_table">
<thead>
	<tr>
		<th>Domain</th>
		<th>URI</th>
		<th>Name</th>
		<th>Action</th>
		<th>Before Filters</th>
		<th>After Filters</th>
	</tr>
	<tr class="bottom">
	</tr>
</thead>

<tbody class="matched_paths" id="matched_paths">
</tbody>

<tbody>
@foreach ($routes as $route)
	@include('sextant::_route', array('route'=> $route))
@endforeach
</tbody>
</table>
@stop
