<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quatriemesection;
use Illuminate\Support\Facades\Validator;

class QuatriemesectionController extends Controller
{
    public function get_contenu4(){

        $contenu = Quatriemesection::all();

        return response()->json(['contenu' => $contenu], 200);
    }


    public function update_vfr4(Request $request,$id){

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',        
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

        $contenu = Quatriemesection::find($id);
        //dd( $contenu);
        $contenu->titre = $request->titre;
        $contenu->description = $request->description;
        $contenu->langue = "fr";
        $contenu->save();

        $response = [
            'success' => true,
            'message' => "customer update successfully"
        ];
        return response()->json(
            $response,
            200
        );

    }
    public function update_ven4(Request $request,$id){

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',        
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

        $contenu = Quatriemesection::find($id);
        //dd( $contenu);
        $contenu->titre = $request->titre;
        $contenu->description = $request->description;
        $contenu->langue = "en";

        $contenu->save();

        $response = [
            'success' => true,
            'message' => "customer update successfully"
        ];
        return response()->json(
            $response,
            200
        );

    }
}
