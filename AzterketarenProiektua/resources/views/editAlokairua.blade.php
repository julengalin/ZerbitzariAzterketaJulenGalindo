<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Editatu Alokairua</h2>
    <form action="{{ route('alokairua.update', $alokairua->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="alokatzaile_izena">Alokatzaile Izena</label>
            <input type="text" name="alokatzaile_izena" id="alokatzaile_izena" class="form-control" value="{{ old('alokatzaile_izena', $alokairua->alokatzaile_izena) }}" required>
        </div>

        <div class="form-group">
            <label for="etxea_id">Etxearen IDa</label>
            <input type="text" name="etxea_id" id="etxea_id" class="form-control" value="{{ old('etxea_id', $alokairua->etxea_id) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="/alokairua" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

