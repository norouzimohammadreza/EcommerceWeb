<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{$title}}</title>
    <x-admin.master.links-loader/>
</head>
<body>
<x-admin.master.header/>
<x-admin.master.sub-header/>
    <div class="main-container" id="container">
    <x-admin.master.sidebar/>
        {{$slot}}
    </div>
<x-admin.master.js-loader/>
</body>
</html>
