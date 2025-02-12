<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/sass/app.css">
    <!-- <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script> -->
    <script src="resources/js/app.js"></script>


</head>
<body>
  {{-- HEADER --}}
  @include('components.nav')
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
