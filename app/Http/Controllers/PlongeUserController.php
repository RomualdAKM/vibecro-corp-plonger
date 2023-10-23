<?php

namespace App\Http\Controllers;

use App\Models\PlongeUser;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorePlongeUserRequest;
use App\Http\Requests\UpdatePlongeUserRequest;
use App\Models\User;

class PlongeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $users = [];
        $plonge_users = PlongeUser::where('plonge_id', $id)->get();
        foreach ($plonge_users as $plonge_user) {
            $users[] = User::find($plonge_user->user_id);
        }
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlongeUserRequest $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'plonge_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json(
                $response,
                400
            );
        }

        $PlongeUser = new PlongeUser();
        $PlongeUser->user_id = $request->user_id;
        $PlongeUser->plonge_id = $request->plonge_id;
        $PlongeUser->save();

        $response = [
            'success' => true,
            'message' => "PlongeUser registered successfully"
        ];

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(PlongeUser $PlongeUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlongeUser $PlongeUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlongeUserRequest $request, PlongeUser $PlongeUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlongeUser $PlongeUser)
    {
        //
    }
}
