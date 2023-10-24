<?php

namespace App\Http\Controllers;

use App\Models\ForSaleMat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ForSaleMatController extends Controller
{
    public function index()
    {
        return ForSaleMat::all();
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

        // Traitez l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $upload_path = public_path('images/materiels');
            $image->move($upload_path, $name);
        } else {
            $name = null;
        }

        $forSaleMat = new ForSaleMat();
        $forSaleMat->email = $request->email;
        $forSaleMat->name = $request->name;
        $forSaleMat->material = $request->material;
        $forSaleMat->price = $request->price;
        $forSaleMat->image = $name; // Associez le nom du fichier
        $forSaleMat->save();

        $response = [
            'success' => true,

            'message' => "centre register successfully"
        ];

        return response()->json($response, 200);
    }
}
