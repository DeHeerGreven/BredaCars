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
    <div class="hero bg-slate-100">
        <div class="hero-content text-center mt-4">
          <div class="max-w-md">
            <h1 class="text-5xl font-bold">Maak een afspraak</h1>
            <p class="py-6">Maak hier op deze pagina een afpsraak</p>
          </div>
        </div>
    </div>
    <div class="bg-slate-100">
        <form action="{{route('appointments.store')}}" method="POST" class="p-12 mx-64">
            @csrf
            <div class="grid grid-cols-1 gap-10">
                <div class="card bg-white p-8">
                    <h1 class="text-2xl font-bold mb-4">Persoonlijke gegevens</h1>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
                            Voornaam
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="first_name" id="first_name" type="text" placeholder="Vul hier je voornaam in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="infix">
                            Tussenvoegsel
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="infix" id="infix" type="text" placeholder="Vul hier je tussenvoegsel in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
                            Achternaam
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="last_name" id="last_name" type="text" placeholder="Vul hier je achternaam in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="email" id="email" type="text" placeholder="Vul hier je e-mail in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="street">
                            Straatnaam
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="street" id="street" type="text" placeholder="Vul hier je straatnaam in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="house_number">
                            Huisnummer
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="house_number" id="house_number" type="text" placeholder="Vul hier je huisnummer in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="postal_code">
                            Postcode
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="postal_code" id="postal_code" type="text" placeholder="Vul hier je postocde in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                            Plaatsnaam
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="city" id="city" type="text" placeholder="Vul hier je plaatsnaam in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone_number">
                            Telefoonummer
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="phone_number" id="phone_number" type="text" placeholder="Vul hier je plaatsnaam in">
                    </div>
                </div>
                <div class="card bg-white p-8">
                    <h1 class="text-2xl font-bold mb-4">Gegevens van de auto/afspraak</h1>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="brand">
                            Merk
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="brand" id="brand" type="text" placeholder="Vul hier het merk van de auto in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="model">
                            Model
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="model" id="model" type="text" placeholder="Vul hier het model van de auto in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                            Beschrijving
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="description" id="description" type="text" placeholder="Vul hier de beschrijving in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="license_plate">
                            Kenteken
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="license_plate" id="license_plate" type="text" placeholder="Vul hier de beschrijving in">
                    </div>
                    <div class="mt-2">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="transaction">
                            Transactie
                        </label>
                        <select class="select select-bordered w-full max-w-xs" name="transaction" id="transaction">
                            <option>Schakel</option>
                            <option>Automaat</option>
                          </select>
                    </div>
                    <div class="mt-2">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fuel">
                            Brandstof
                        </label>
                        <select class="select select-bordered w-full max-w-xs" name="fuel" id="fuel">
                            <option>Benzine</option>
                            <option>Diesel</option>
                            <option>Elektrisch</option>
                          </select>
                    </div>
                    <div class="mt-2">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="color">
                            Kleur
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" required name="color" id="color" type="text" placeholder="Vul hier de beschrijving in">
                    </div>
                    <div class="">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="appointment_type">
                            Type afspraak
                        </label>
                        <select class="select select-bordered w-full max-w-xs" name="appointment_type" id="appointment_type">
                            <option>Reparatie</option>
                            <option>Keuring</option>
                          </select>
                    </div>
                    <div>
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-4" for="appointment_date">
                            Datum van de afspraak:
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="datetime-local" id="appointment_date" name="appointment_date">
                    </div>
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="mt-4 inline-block border-2 border-red-600 hover:bg-red-600 hover:text-white duration-200 text-black font-bold py-2 px-6 rounded-full">Afspraak maken</button>
                </div>
            </div>
        </form>
    </div>
    @include('components.footer')
</body>
</html>