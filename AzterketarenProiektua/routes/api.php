<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EtxeaController;

// Rutas para la API de personajes
Route::get('/etxeas', [EtxeaController::class, 'index']); // Obtener todos los personajes
Route::get('/etxeas/{id}', [EtxeaController::class, 'show']); // Obtener un personaje por ID
Route::delete('/etxeas/{id}', [EtxeaController::class, 'destroy']); // Eliminar un personaje

