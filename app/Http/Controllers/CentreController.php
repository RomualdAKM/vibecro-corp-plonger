<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use Illuminate\Http\Request;
use App\Http\Resources\GetCentreResource;
use Illuminate\Support\Facades\Validator;

class CentreController extends Controller
{

    public function get_centres(){
        $centres = Centre::all();
       //dd($centres);
        // return response()->json([
        //     'centres' => $centres
        // ],200);
        return $centres;
    }
    public function create_centre(Request $request){
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'lieu' => 'required',
            'statut' => 'required',
            'responsable' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'description' => 'required',
            'titre' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
          
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json(
                $response,
                200
            );
        }    

        $centre = new Centre();
        $centre->nom = $request->nom;
        $centre->lieu = $request->lieu;
        $centre->statut = $request->statut;
        $centre->responsable = $request->responsable;
        $centre->contact = $request->contact;
        $centre->email = $request->email;
        $centre->description = $request->description;
        $centre->titre = $request->titre;
        $centre->facebook = $request->facebook;
        $centre->twitter = $request->twitter;
        $centre->instagram = $request->instagram;
        $centre->save();

        $response = [
            'success' => true,
           
            'message' => "centre register successfully"
        ];

        return response()->json($response, 200);
    }
}
