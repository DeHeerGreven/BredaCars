# Code Conventies

## Naam conventies

In dit project maak je gebruik van camelCase en Pascalcase.

PascalCase gebruik je voornamelijk bij het aanmaken van bijv. controllers:

``` command
php artisan make:controller ProductController
```
camelCase gebruik je bij het aanmaken van variabelen of functies.

Hier een voorbeeld van de variabelen in de ProductController

```php
    $request->validate([
        'first_name' => 'required',
        'infix' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'street' => 'required',
        'house_number' => 'required',
        'postal_code' => 'required',
        'city' => 'required',
        'phone_number' => 'required',
        'brand' => 'required',
        'model' => 'required',
        'description' => 'required',
        'appointment_type' => 'required',
        'appointment_date' => 'required'
        // Add other fields if needed
    ]);

// Maak een nieuwe afspraak aan
        $appointment = Appointment::create([
            'first_name' => $request->input('first_name'),
            'infix' => $request->input('infix'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'street' => $request->input('street'),
            'house_number' => $request->input('house_number'),
            'postal_code' => $request->input('postal_code'),
            'zipcode' => $request->input('zipcode'),
            'city' => $request->input('city'),
            'phone_number' => $request->input('phone_number'),
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'description' => $request->input('description'),
            'appointment_type' => $request->input('appointment_type'),
            'appointment_date' => $request->input('appointment_date'),

        ]);
        return view('appointments.succes');
```




## Verzorgde code

De code moet er verzorgd en uit zien. Er moeten geen lege regels staan in de code. 

Als je aan het einde van het project zit, controleer dan of er geen onnodige code of comments in de code zitten. Als dat wel zo is, verwijder dat dan.

## Op de hoogte brengen van commits

In dit project wordt iedereen op de hoogte gesteld wanneer iemand wijzigingen heeft gemaakt en commits heeft gepusht. Zo voorkomen we weinig merge conflicts.

## Front End en Backend
### Front End
In dit project, maak je gebruik van HTML. Voor de CSS gebruik je Talwind CSS.

Voor de 'interactie' op de website gebruik je Javascript.

### Backend
Voor de backend gebruik je, wat je misschien al kunt zien, Laravel.

Je gebruikt hierbij versie 10.
