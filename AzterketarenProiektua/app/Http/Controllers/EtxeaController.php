<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtxeaController extends Controller
{
    public function show()
    {
        // GET ALL
        $etxeak = \App\Models\Etxea::all();
        return view('etxea-list', ['etxeas' => $etxeak]);
    }

    public function edit($id)
    {
        $etxea = \App\Models\Etxea::findOrFail($id);

        return view('edit', compact('etxea'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'helbidea' => 'required|max:255',
            'logela_kopurua' => 'required|max:255',
            'eraikuntza_urtea' => 'required|max:255',
        ]);

        $etxea = \App\Models\Etxea::findOrFail($id);
        $etxea->update($data);

        return redirect('/')->with('success', 'Etxearen datuak aldatuta!');
    }

}
