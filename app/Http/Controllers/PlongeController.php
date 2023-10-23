<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use App\Models\Plonge;
// use Image;
use Illuminate\Http\Request;
use App\Http\Resources\GetPlongeResource;
use Illuminate\Support\Facades\Validator;

class PlongeController extends Controller
{

    public function get_plonges()
    {
        $plonges = Plonge::orderBy('id', 'desc')->get();

        // return response()->json([
        //     'plonges' => $plonges
        // ],200);

        return $plonges;
    }

    public function get_plonge_first()
    {
        $plonge = Plonge::orderBy('id', 'desc')->with('moniteur')->with('centre')->first();
        return $plonge;
    }

    // public function create_plonge(Request $request){
    //     $validator = Validator::make($request->all(), [
    //         // 'lieu' => 'required',
    //         'duree' => 'required',
    //         'prix' => 'required',
    //         'nb_places' => 'required',
    //         'description' => 'required',
    //         'image' => 'required',
    //         'statut' => 'required',
    //         'profondeur' => 'required',
    //         'temps' => 'required',
    //         'pallier' => 'required',
    //         'moniteur_id' => 'required',
    //         'centre_id' => 'required',

    //     ]);

    //     if ($validator->fails()) {
    //         $response = [
    //             'success' => false,
    //             'message' => $validator->errors()
    //         ];
    //         return response()->json(
    //             $response,
    //             200
    //         );
    //     }    
    //     $centre = Centre::where('id', $request->centre_id)->first();

    //     $lieu_centre = $centre->lieu;

    //     $plonge = new Plonge();
    //     $plonge->lieu =  $lieu_centre;
    //     $plonge->duree = $request->duree;
    //     $plonge->prix = $request->prix;
    //     $plonge->nb_places = $request->nb_places;
    //     $plonge->description = $request->description;
    //     $plonge->statut = $request->statut;
    //     $plonge->profondeur = $request->profondeur;
    //     $plonge->temps = $request->temps;
    //     $plonge->pallier = $request->pallier;
    //     $plonge->moniteur_id = $request->moniteur_id;
    //     $plonge->centre_id = $request->centre_id;

    //     $name = '';

    //     if ($plonge->image != $request->image) {
    //         $strpos = strpos($request->image, ';');
    //         $sub = substr($request->image, 0, $strpos);
    //         $ex = explode('/', $sub)[1];
    //         $name = time() . "." . $ex;

    //         $upload_path = public_path() . "/images/plonges/";
    //         $image = $upload_path . $plonge->image;

    //         if (file_exists($image)) {
    //             @unlink($image);
    //         } else {
    //             $name = $plonge->image;
    //         }
    //     }

    //     $plonge->image = $name;
    //     $plonge->save();

    //     $response = [
    //         'success' => true,

    //         'message' => "Plonge register successfully"
    //     ];

    //     return response()->json($response, 200);
    // }

    public function create_plonge(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'duree' => 'required',
            'prix' => 'required',
            'nb_places' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assurez-vous que l'image est valide
            'statut' => 'required',
            'profondeur' => 'required',
            'temps' => 'required',
            'pallier' => 'required',
            'moniteur_id' => 'required',
            'centre_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 200);
        }

        // Obtenez le centre associé
        $centre = Centre::find($request->centre_id);
        if (!$centre) {
            $response = [
                'success' => false,
                'message' => 'Centre not found'
            ];
            return response()->json($response, 404);
        }

        // Obtenez le lieu du centre
        $lieu_centre = $centre->lieu;

        // Traitez l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $upload_path = public_path('images/plonges');
            $image->move($upload_path, $name);
        } else {
            $name = null;
        }

        // Créez une nouvelle instance de Plonge et affectez les valeurs
        $plonge = new Plonge();
        $plonge->lieu = $lieu_centre;
        $plonge->duree = $request->duree;
        $plonge->prix = $request->prix;
        $plonge->nb_places = $request->nb_places;
        $plonge->description = $request->description;
        $plonge->statut = $request->statut;
        $plonge->profondeur = $request->profondeur;
        $plonge->temps = $request->temps;
        $plonge->pallier = $request->pallier;
        $plonge->moniteur_id = $request->moniteur_id;
        $plonge->centre_id = $request->centre_id;
        $plonge->image = $name; // Associez le nom du fichier

        $plonge->save();

        $response = [
            'success' => true,
            'message' => "Plonge registered successfully"
        ];

        return response()->json($response, 200);
    }


    public function get_plonges_centre($id)
    {
        $plonges = Plonge::where('centre_id', $id)
            ->with('moniteur')
            ->with('centre')
            ->orderBy('id', 'desc')->first();

        return $plonges;
    }
}
