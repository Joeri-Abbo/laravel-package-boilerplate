<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>Laravel Easy Translations {{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>
    <link rel="stylesheet"
          href="{{asset(mix('/css/app.css', 'vendor/'. \JoeriAbbo\Boilerplate\BoilerplatePackageServiceProvider::PACKAGE_NAME))}}">
    <script src="{{asset(mix('/js/app.js', 'vendor/'. \JoeriAbbo\Boilerplate\BoilerplatePackageServiceProvider::PACKAGE_NAME))}}"></script>
</head>
<body>
<div id="laravel-easy-translations">
    {!! $slot !!}
</div>
<div class="h-auto py-2 text-center bg-black text-white">
    Copyright &copy; {{date('Y')}}
    <a target="_blank" href="https://www.linkedin.com/in/joeri-abbo-43a457144/" class="underline font-bold">
        Joeri Abbo
    </a>
    All Rights Reserved
</div>
</body>
</html>
