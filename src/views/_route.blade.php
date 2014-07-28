<tr class='route_row' data-helper='path'>
	@foreach ($headers as $header)
	<td data-route-name='{{ $header }}'>
		{{ @$route[strtolower($header)] }}
	</td>
	@endforeach
</tr>
