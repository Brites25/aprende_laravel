@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Par Impar</title>
</head>

<body>

    <div class="container d-flex justify-content-center" style="margin-top: 20%">
        <div class="card">
            <div class="card-header">
                Defini Numeru Par Impar
            </div>
            <div class="card-body">
                @livewire('par-impar')
            </div>
        </div>

    </div>

</body>

</html>
