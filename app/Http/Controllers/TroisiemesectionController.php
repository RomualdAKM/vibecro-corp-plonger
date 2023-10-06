<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Troisiemesection;
use Illuminate\Support\Facades\Validator;


class TroisiemesectionController extends Controller
{
    public function get_contenu3(){

        $contenu = Troisiemesection::all();

        return response()->json(['contenu' => $contenu], 200);
    }


    public function update_vfr3(Request $request,$id){

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',        
            'titrelment1' => 'required',        
            'titrelment2' => 'required',        
            'titrelment3' => 'required',        
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

        $contenu = Troisiemesection::find($id);
        //dd( $contenu);
        $contenu->titre = $request->titre;
        $contenu->description = $request->description;
        $contenu->titrelment1 = $request->titrelment1;
        $contenu->titrelment2 = $request->titrelment2;
        $contenu->titrelment3 = $request->titrelment3;
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
    public function update_ven3(Request $request,$id){

        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',        
            'titrelment1' => 'required',        
            'titrelment2' => 'required',        
            'titrelment3' => 'required',        
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

        $contenu = Troisiemesection::find($id);
        //dd( $contenu);
        $contenu->titre = $request->titre;
        $contenu->description = $request->description;
        $contenu->titrelment1 = $request->titrelment1;
        $contenu->titrelment2 = $request->titrelment2;
        $contenu->titrelment3 = $request->titrelment3;
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
