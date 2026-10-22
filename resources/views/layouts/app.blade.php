<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventory System P5</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        .alert { padding: 10px; background: #e2f0d9; color: #385723; margin-bottom: 10px; }
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <h1>Inventory Management System (P5)</h1>
    <hr>
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    @yield('content')
</body>
</html>