<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Editatu Etxea</h2>
    <form action="{{ route('etxea.update', $etxea->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="helbidea">Etxearen Helbidea</label>
            <input type="text" name="helbidea" id="helbidea" class="form-control" value="{{ old('helbidea', $etxea->helbidea) }}" required>
        </div>

        <div class="form-group">
            <label for="logela_kopurua">Logela Kopurua</label>
            <input type="text" name="logela_kopurua" id="logela_kopurua" class="form-control" value="{{ old('logela_kopurua', $etxea->logela_kopurua) }}" required>
        </div>

        <div class="form-group">
            <label for="eraikuntza_urtea">Eraikuntza Urtea</label>
            <textarea name="eraikuntza_urtea" id="eraikuntza_urtea" class="form-control" required>{{ old('eraikuntza_urtea', $etxea->eraikuntza_urtea) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="/" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

