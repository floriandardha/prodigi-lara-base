<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('head_title')</title>
    <style>
        h1{
            color: red;
        }
        table {
    border: 1px solid #000;
	background-color: #ccc;
}
tr {
    background-color: #ddd;
}
    </style>
</head>
<body>
    @yield('content')

</body>
</html>