@extends('base')

@section('titulu')
    Edit Dadus
@endsection

@section('konteudu')
<div class="container" style="margin-top: 3%">
    <div class="card">
        <div class="card-header">
            Edit Dadus
        </div>
        <div class="card-body">

            <form action="{{ route('identidade.update', $dadus) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text"  name='naran' class="form-control mt-2 mb-2" placeholder="Hatama Naran" value="{{ $dadus->naran }}">
                    @error('naran')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                   
                </div>

                <div class="form-group">
                    <label for="hela-fatin">NRE</label>
                    <input type="text" name='nre' class="form-control mt-2 mb-2" placeholder="Hatama nre" value="{{ $dadus->nre }}">
                    @error('nre')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                
                <div class="form-group">
                    <label for="hela-fatin">Hela-Fatin</label>
                    <input type="text" name='hela_fatin' class="form-control mt-2 mb-2" placeholder="Hatama Hela-Fatin" value="{{ $dadus->hela_fatin }}">
                    @error('hela_fatin')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="hela-fatin">Num Kontaktu</label>
                    <input type="number" name='num_kontaktu' class="form-control mt-2 mb-2" placeholder="Hatama Num kontaktu" value="{{ $dadus->num_kontaktu }}">
                    @error('num_kontaktu')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button class="btn btn-primary mt-2" type="submit">Edit</button>
            </form>

        </div>
    </div>

</div>
@endsection