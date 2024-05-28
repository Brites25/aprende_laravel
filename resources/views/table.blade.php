@extends('layouts.app')
<div class="container">
    <table class="table">
        {{-- Tabela nia tag loke no taka --}}
        <thead>
            {{-- Tabela nia ulun/header --}}
            <tr>
                <th scope="col">Numeru</th>
                <th scope="col">Naran</th>
                <th scope="col">NRE</th>
                <th scope="col">Hela fatin</th>
                <th scope="col">No.kontaktu</th>
            </tr>
        </thead>
        {{-- Tabela nia isin --}}
        <body>
            @foreach ($dadus as $item => $value)
            <tr>
                <th scope="row">{{ $item }}</th>
                <td>{{ $value['naran'] }}</td>
                <td>{{ $value['nre'] }}</td>
                <td>{{ $value['hela_fatin'] }}</td>
                <td>{{ $value['num_kontaktu'] }}</td>
            </tr>
            @endforeach
       
        </body>
    </table>
</div>