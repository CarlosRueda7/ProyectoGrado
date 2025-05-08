<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DispositivoController extends Controller
{
    /**
     * Muestra la vista de los dispositivos del usuario autenticado.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dispositivos');
    }

    /**
     * Obtiene los dispositivos del usuario autenticado en formato JSON.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDispositivos()
    {
        $dispositivos = Auth::user()->dispositivos()->get();
        return response()->json(['success' => true, 'dispositivos' => $dispositivos]);
    }

    /**
     * Guarda un nuevo dispositivo para el usuario autenticado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $rules = [
            'id_dispositivo' => 'required|string|max:255|unique:dispositivos',
            'planta_seleccionada' => 'required|string|max:255',
            'nombre_planta' => 'required|string|max:255',
        ];

        $messages = [
            'id_dispositivo.unique' => 'Este ID de dispositivo ya está registrado, intenta con otro.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => 'Error de validación', 'errors' => $validator->errors()], 422);
        }

        try {
            $dispositivo = Auth::user()->dispositivos()->create([
                'id_dispositivo' => $request->id_dispositivo,
                'planta_seleccionada' => $request->planta_seleccionada,
                'nombre_planta' => $request->nombre_planta,
            ]);

            if ($dispositivo) {
                return response()->json(['success' => true, 'message' => 'Dispositivo guardado correctamente']);
            } else {
                return response()->json(['success' => false, 'message' => 'Error al guardar el dispositivo (problema interno)']);
            }
        } catch (\Exception $e) {
            \Log::error('Error al guardar dispositivo: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error al guardar el dispositivo (excepción)', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Muestra los detalles de un dispositivo específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dispositivo = Dispositivo::findOrFail($id);
        $planta = $dispositivo->planta_seleccionada;

        $vista = '';
        switch ($planta) {
            case 'aloeOpcion':
                $vista = 'aloeOpcion';
                break;
            case 'coleoOpcion':
                $vista = 'coleoOpcion';
                break;
            case 'coronaOpcion':
                $vista = 'coronaOpcion';
                break;
            case 'crotonOpcion':
                $vista = 'crotonOpcion';
                break;
            case 'suegraOpcion':
                $vista = 'suegraOpcion';
                break;
            default:
                return redirect()->route('catalogo')->with('error', 'Vista de detalles no encontrada para esta planta.');
        }

        return view($vista, compact('dispositivo'));
    }

    public function destroy(Dispositivo $dispositivo)
    {
        if (Auth::user()->id !== $dispositivo->user_id) {
            return response()->json(['success' => false, 'message' => 'No estás autorizado para eliminar este dispositivo.'], 403);
        }

        try {
            $dispositivo->delete();
            return response()->json(['success' => true, 'message' => 'Dispositivo eliminado correctamente']);
        } catch (\Exception $e) {
            \Log::error('Error al eliminar dispositivo: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' => 'Error al eliminar el dispositivo (excepción)', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Muestra el formulario para crear un nuevo dispositivo (opcional).
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dispositivo.create');
    }

    public function mostrarDetalles(string $id): View
    {
        $dispositivo = Dispositivo::findOrFail($id);
        $planta = $dispositivo->planta_seleccionada;

        $vista = '';
        switch ($planta) {
            case 'aloeOpcion':
                $vista = 'aloeOpcion';
                break;
            case 'coleoOpcion':
                $vista = 'coleoOpcion';
                break;
            case 'coronaOpcion':
                $vista = 'coronaOpcion';
                break;
            case 'crotonOpcion':
                $vista = 'crotonOpcion';
                break;
            case 'suegraOpcion':
                $vista = 'suegraOpcion';
                break;
            default:
                abort(404, 'Vista de detalles no encontrada para esta planta.');
        }

        return view($vista, compact('dispositivo'));
    }
}