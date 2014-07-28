@extends('sextant::_layouts.sextant')

@section('content')
<h2>
	Laravel Routes
</h2>

<p>
	Routes match in priority from top to bottom
</p>

<table id='route_table' class='route_table'>
<thead>
	<tr>
		@foreach ($headers as $header)
		<th>
			{{ $header }}
		</th>
		@endforeach
	</tr>
	<tr class='bottom'>
	</tr>
</thead>

<tbody class='matched_paths' id='matched_paths'>
</tbody>

<tbody>
@foreach ($routeCollection->getRoutes() as $route)
	@include('sextant::_route', array(
		'headers' => $headers,
		'route'   => $route,
	))
@endforeach
</tbody>
</table>
@stop
