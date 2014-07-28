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
	<th>
		<!--
        Helper (
        <%= link_to "Path", "#", 'data-route-helper' => '_path',
                    title: "Returns a relative path (without the http or domain)" %>
        /
        <%= link_to "Url", "#", 'data-route-helper' => '_url',
                    title: "Returns an absolute url (with the http and domain)" %>
        )
		-->
	</th>
	<th>HTTP Verb</th>
	<th>Path</th>
	<th>Controller#Action</th>
</tr>
</thead>
<tbody>
@foreach ($routes as $route)
	@include('sextant::_route', array('route' => $route))
@endforeach
</tbody>
</table>

<script type='text/javascript'>
	setupRouteToggleHelperLinks();
</script>
@stop
