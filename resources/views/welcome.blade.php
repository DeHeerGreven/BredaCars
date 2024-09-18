<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
</head>
<body style= 'font-family: "Bebas Neue", sans-serif;'>
  {{-- HEADER --}}
  @include('components.header')
  {{--MAIN--}}
  @include('components.main')
  {{-- SERVICES --}}
  @include('components.services')
  {{--ABOUT US--}}
  @include('components.about_us')
  {{--CONTACT--}}
  @include('components.contact')
  {{--FOOTER--}}
  @include('components.footer')
</body>
</html>