<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlongeMateriel;
use Illuminate\Support\Facades\Validator;

class PlongeMaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($plonge_id)
    {
        return PlongeMateriel::where('plonge_id', $plonge_id)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'plonge' => 'required',
            'materiel' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 200);
        }

        $plongeMat = new PlongeMateriel();
        $plongeMat->plonge_id = $request->plonge;
        $plongeMat->materiel_id = $request->materiel;
        $plongeMat->save();

        $response = [
            'success' => true,

            'message' => "centre register successfully"
        ];

        return response()->json($response, 200);
    }
}
