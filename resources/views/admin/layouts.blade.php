<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
@include('admin.layout.heads')
<body>
    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    @yield('content')
    @include('admin.layout.footer')
    @include('admin.layout.script')
 
</body>
</html>