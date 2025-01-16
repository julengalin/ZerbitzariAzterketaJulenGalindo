<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlokairuaController extends Controller
{
    public function show()
    {
        // GET ALL
        $etxeak = \App\Models\Alokairua::all();
        return view('alokairu-list', ['alokairuas' => $etxeak]);
    }

    public function edit($id)
    {
        $alokairua = \App\Models\Alokairua::findOrFail($id);

        return view('editAlokairua', compact('alokairua'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'alokatzaile_izena' => 'required|max:255',
            'etxea_id' => 'required|max:255',
        ]);

        $alokairua = \App\Models\Alokairua::findOrFail($id);
        $alokairua->update($data);

        return redirect('/alokairua')->with('success', 'Alokailuaren datuak aldatuta!');
    }
    public function destroy($id)
    {
        $alokairua = \App\Models\Alokairua::find($id);

        if (!$alokairua) {
            return response()->json(['message' => 'Alokairu not found'], 404);
        }

        $alokairua->delete();

        return redirect('/alokairua')->with('success', 'Alokailua Ezabatuta!');
    }
}
