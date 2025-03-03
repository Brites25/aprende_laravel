@extends('base')

@section('titulu')
    Aumenta Dadus
@endsection

@section('konteudu')
<div class="container" style="margin-top: 3%">
    <div class="card">
        <div class="card-header">
            Aumenta Dadus
        </div>
        <div class="card-body">

            <form action="{{ route('identidade.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="naran">Naran</label>
                    <input type="text"  name='naran' class="form-control mt-2 mb-2" placeholder="Hatama Naran">
                    @error('naran')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                   
                </div>

                <div class="form-group">
                    <label for="naran">NRE</label>
                    <input type="number"  name='nre' class="form-control mt-2 mb-2" placeholder="Hatama NRE">
                    @error('nre')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                   
                </div>
                
                <div class="form-group">
                    <label for="hela-fatin">Hela-Fatin</label>
                    <input type="text" name='hela_fatin' class="form-control mt-2 mb-2" placeholder="Hatama Hela-Fatin">
                    @error('hela_fatin')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="hela-fatin">Num Kontaktu</label>
                    <input type="number" name='num_kontaktu' class="form-control mt-2 mb-2" placeholder="Num Kontaktu">
                    @error('num_kontaktu')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button class="btn btn-primary mt-2" type="submit">Aumenta</button>
            </form>

        </div>
    </div>

</div>
@endsection