<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <x-home.master.links-loader/>
    <title>{{$title}}</title>
</head>
<body>
<header class="header mb-4">
    <x-home.master.header/>
    <x-home.master.top-nav/>
</header>
{{$slot}}
<x-home.master.footer/>
<x-home.master.scripts/>
</body>
