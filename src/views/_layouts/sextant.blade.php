<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Routes</title>
	<style>
		body { background-color: #fff; color: #333; }

		body, p, ol, ul, td {
			font-family: helvetica, verdana, arial, sans-serif;
			font-size:   13px;
			line-height: 18px;
		}

		pre {
			background-color: #eee;
			padding: 10px;
			font-size: 11px;
			white-space: pre-wrap;
		}

		a { color: #000; }
		a:visited { color: #666; }
		a:hover { color: #fff; background-color:#000; }

		h2 { padding-left: 10px; }

		#route_table {
			margin: 0 auto 0;
			border-collapse: collapse;
		}

		#route_table td {
			padding: 0 30px;
		}

		#route_table tr.bottom th {
			padding-bottom: 10px;
			line-height: 15px;
		}

		#route_table .matched_paths {
			background-color: LightGoldenRodYellow;
		}

		#route_table .matched_paths {
			border-bottom: solid 3px SlateGrey;
		}

		#path_search {
			width: 80%;
			font-size: inherit;
		}
	</style>
</head>
<body>
	@yield('content')
</body>
</html>
