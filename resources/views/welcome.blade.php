<!DOCTYPE html>
<html lang="ru_RU">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
<h1>{{ env('APP_NAME') }}</h1>
<ul>
    @forelse($query as $k => $q)
        <li>{{ $k }} = {{ $q }}</li>
    @empty
        No data in $query
    @endforelse
</ul>
</body>
</html>
