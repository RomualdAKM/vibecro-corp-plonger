<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GetMaterielResource;

class MaterielController extends Controller
{

    public function get_materiels(){
        $materiels = Materiel::orderBy('id','desc')->get();

        return GetMaterielResource::collection($materiels);
    }


    public function create_materiel(Request $request){
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required',
          
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

        $moniteur = new Materiel();
        $moniteur->nom = $request->nom;
        $moniteur->description = $request->description;
        $moniteur->prix = $request->prix;

        $name = '';

        if ($moniteur->image != $request->image) {
            $strpos = strpos($request->image, ';');
            $sub = substr($request->image, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            //$img = Image::make($request->image)->resize(200, 200);
            $upload_path = public_path() . "/images/moniteurs/";
            $image = $upload_path . $moniteur->image;
            // $img->save($upload_path . $name);
            if (file_exists($image)) {
                @unlink($image);
            } else {
                $name = $moniteur->image;
            }
        }
       
        $moniteur->image = $name;
        $moniteur->save();

        $response = [
            'success' => true,
           
            'message' => "Materiel register successfully"
        ];

        return response()->json($response, 200);

    }
}
