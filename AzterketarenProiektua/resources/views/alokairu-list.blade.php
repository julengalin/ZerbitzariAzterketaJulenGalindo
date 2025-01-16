@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Alokailuen Lista</div>
                    <!-- Table -->
                    <table class="table">
                        <tr>
                            <th>Alokatzaile izena</th>
                            <th>Etxearen IDa</th>
                        </tr>
                        @foreach($alokairuas as $alokairua)
                        <tr>
                            <td>{{ $alokairua->alokatzaile_izena }}</td>
                            <td>{{ $alokairua->etxea_id }}</td>
                            <td><a href="{{ route('alokairua.edit', $alokairua->id) }}" class="btn btn-primary">Edit</a></td>
                            <td>
                        <form action="{{ route('alokairua.delete', $alokairua->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this alokairua?')">X</button>
                        </form>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                    <a href="/" class="btn btn-primary">Etxeak ikusi</a>
                </div>
            </div>
        </div>
</div>
    @endsection
