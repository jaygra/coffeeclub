<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <title>Coffee Club</title>
    </head>
  <body>
    @extends('layouts.app')
    @section('content')
    $coffees = [
            'Winter Seasonal - Bali Blue Krishna',
            'Finca Cual Bicicleta - Hondouras Mircrolot',
            'Suplicar Clemencia Dark Roast',
            'Daymaker Blend'
            ];
    return view('contents/home', compact('coffees') );

    <h1>Home of the Coffee Club</h1>
      <p>Welcome to the neighborhood coffee club. Here is a list of this week's coffee.</p>
      @foreach($coffees as $coffee)
        <ul>
            <li>{{ $coffee }}</li>
        </ul>
      @endforeach

    @endsection
  </body>
</html>
