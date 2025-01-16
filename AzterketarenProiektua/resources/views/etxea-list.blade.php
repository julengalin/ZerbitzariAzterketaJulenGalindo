@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Etxeen Lista</div>
                <!-- Table -->
                <table class="table">
                    <tr>
                        <th>Helbidea</th>
                        <th>Logela Kopurua</th>
                        <th>Eraikuntza Urtea</th>
                    </tr>
                    @foreach($etxeas as $etxea)
                    <tr>
                        <td>{{ $etxea->helbidea }}</td>
                        <td>{{ $etxea->logela_kopurua }}</td>
                        <td>{{ $etxea->eraikuntza_urtea }}</td>
                        <td><a href="{{ route('etxea.edit', $etxea->id) }}" class="btn btn-primary">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
                <a href="/alokairua" class="btn btn-primary">Alokairuak ikusi</a>
            </div>
        </div>
    </div>
</div>
@endsection