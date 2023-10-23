<?php

namespace App\Http\Controllers;

use App\Models\Exploration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExplorationController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Exploration::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'name' => 'required',
            'location' => 'required',
            'date' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 200);
        }

        $exploration = new Exploration();
        $exploration->email = $request->email;
        $exploration->name = $request->name;
        $exploration->location = $request->location;
        $exploration->date = $request->date;
        $exploration->save();

        $response = [
            'success' => true,

            'message' => "centre register successfully"
        ];

        return response()->json($response, 200);
    }
}
