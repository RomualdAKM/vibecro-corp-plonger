<?php

namespace App\Http\Controllers;

use App\Models\Moniteur;
use Illuminate\Http\Request;
// use Image;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GetMoniteurResource;

class MoniteurController extends Controller
{

    public function get_moniteurs(){

        $moniteurs = Moniteur::all();

        // return response()->json([
        //     'moniteurs' => $moniteurs
        // ],200);

        return $moniteurs;
    }
    public function create_moniteur(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'bio' => 'required',
            'note' => 'required|max:5|min:0|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assurez-vous que l'image est valide
        ]);
    
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 200);
        }
    
        // Traitez l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $upload_path = public_path('images/moniteurs');
            $image->move($upload_path, $name);
        } else {
            $name = null;
        }
    
        // Créez une nouvelle instance de Moniteur et affectez les valeurs
        $moniteur = new Moniteur();
        $moniteur->nom = $request->nom;
        $moniteur->bio = $request->bio;
        $moniteur->note = $request->note;
        $moniteur->image = $name; // Associez le nom du fichier
    
        $moniteur->save();
    
        $response = [
            'success' => true,
            'message' => "Moniteur enregistré avec succès"
        ];
    
        return response()->json($response, 200);
    }
    

//    public function create_moniteur(Request $request){

//         $validator = Validator::make($request->all(), [
//             'nom' => 'required',
//             'bio' => 'required',
//             'note' => 'required',
//             'image' => 'required',
          
//         ]);

//         if ($validator->fails()) {
//             $response = [
//                 'success' => false,
//                 'message' => $validator->errors()
//             ];
//             return response()->json(
//                 $response,
//                 200
//             );
//         }    

//         $moniteur = new Moniteur();
//         $moniteur->nom = $request->nom;
//         $moniteur->bio = $request->bio;
//         $moniteur->note = $request->note;

//         $name = '';

//         if ($moniteur->image != $request->image) {
//             $strpos = strpos($request->image, ';');
//             $sub = substr($request->image, 0, $strpos);
//             $ex = explode('/', $sub)[1];
//             $name = time() . "." . $ex;
//             //$img = Image::make($request->image)->resize(200, 200);
//             $upload_path = public_path() . "/images/moniteurs/";
//             $image = $upload_path . $moniteur->image;
//             // $img->save($upload_path . $name);
//             if (file_exists($image)) {
//                 @unlink($image);
//             } else {
//                 $name = $moniteur->image;
//             }
//         }
       
//         $moniteur->image = $name;
//         $moniteur->save();

//         $response = [
//             'success' => true,
           
//             'message' => "Moniteur register successfully"
//         ];

//         return response()->json($response, 200);
//    }
}
