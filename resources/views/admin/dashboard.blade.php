@extends('base')

@section('titulu')
    Dashboard
@endsection

@section('konteudu')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            @livewire('search-component')
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection