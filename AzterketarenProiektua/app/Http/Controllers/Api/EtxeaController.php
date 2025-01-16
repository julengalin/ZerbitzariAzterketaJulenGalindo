<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etxea;

class EtxeaController extends Controller
{
    public function index()
    {
        $etxeas = Etxea::get();
        return response()->json($etxeas);
    }

    public function show($id)
    {
        $etxea = Etxea::find($id);

        if (!$etxea) {
            return response()->json(['message' => 'Etxea not found'], 404);
        }

        return response()->json($etxea);
    }

    // Eliminar un personaje
    public function destroy($id)
    {
        $etxea = Etxea::find($id);

        if (!$etxea) {
            return response()->json(['message' => 'Etxea not found'], 404);
        }

        $etxea->delete();

        return response()->json(['message' => 'Etxea deleted successfully']);
    }
}
