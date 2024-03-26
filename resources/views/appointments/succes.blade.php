<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('components.header')
    <div class="container mx-auto">
        <div class="text-center mt-64">
            <img src="images/succes.png" alt="">
            <h2 class="text-5xl font-bold mb-8">Afspraak is gemaakt!</h2>
            <h6 class="text-2xl font-bold mb-8">U wordt over 5 seconden automatisch teruggestuurd!</h6>
            <script>
                setTimeout(() => {
                    window.location = "{{ url('/') }}"; // specify the URL directly
                }, 5000);
            </script>
        </div>
    </div>
</body>
</html>

