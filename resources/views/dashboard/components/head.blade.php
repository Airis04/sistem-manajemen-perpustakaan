<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? '' }} | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/dashboard/images/favicon.ico">


    <!-- App css -->
    <link href="/assets/dashboard/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="/assets/dashboard/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/dashboard/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    @stack('styles')
</head>
