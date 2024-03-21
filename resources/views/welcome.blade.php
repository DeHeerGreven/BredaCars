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
    {{-- HEADER --}}
    <div class="navbar bg-gray-900">
        <div class="flex-1">
          <a class="text-white text-3xl pl-8">BredaCars</a>
        </div>
        <div class="flex-none">
          <ul class="menu menu-horizontal px-24">
            <li class="text-2xl text-white font-bold"><a>Home</a></li>
            <li class="text-2xl text-white font-bold"><a>Services</a></li>
            <li class="text-2xl text-white font-bold"><a>Over ons</a></li>
            <li class="text-2xl text-white font-bold"><a>Contact</a></li>
          </ul>
        </div>
      </div>
    {{--MAIN--}}
    <div class="hero" style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg); height:500px;">
        <div class="hero-overlay bg-black bg-opacity-80"></div>
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div>
              <h1 class="text-5xl w-96 text-white font-bold">Box Office News!</h1>
              <p class="py-6 w-2/4 text-white">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
              <button class="btn btn-primary">Get Started</button>
            </div>
          </div>
    </div>
    <div class="hero bg-slate-100">
        <div class="hero-content text-center mt-4">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Onze services</h1>
            <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
          </div>
        </div>
    </div>
    <div class="hero bg-slate-100">
        <div class="flex justify-center space-x-8">
            <div class="card w-96">
                <div class="flex justify-center mt-4">
                    <img src="images/service.png" alt="Shoes" class="w-36 h-36">
                </div>
                <div class="card-body text-center">
                    <h2 class="font-semibold text-2xl">Snelle service</h2>
                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="card w-96">
                <div class="flex justify-center mt-4">
                    <img src="images/money_back.png" alt="Shoes" class="w-36 h-36">
                </div>
                <div class="card-body text-center">
                    <h2 class="font-semibold text-2xl">Niet goed, geld terug</h2>
                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="card w-96">
                <div class="flex justify-center mt-4">
                    <img src="images/deal.png" alt="Shoes" class="w-36 h-36">
                </div>
                <div class="card-body text-center">
                    <h2 class="font-semibold text-2xl">Eerlijke prijs</h2>
                    <p class="text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hero bg-base-200 p-4">
        <div class="hero-content flex-col lg:flex-row-reverse">
          <img src="images/wie_zijn_wij.jpg" class="w-full max-w-sm rounded-lg shadow-2xl" />
          <div>
            <h1 class="text-5xl font-bold">Wie zijn wij?</h1>
            <p class="py-6 w-2/4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            <p class="py-6 w-2/4"> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
            </div>
        </div>
    </div>
</body>
</html>