<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{

    public function index()
    {
        try {
            $clients = Client::all();
            return response()->json(['clients' => $clients], 200);
        }catch (\Throwable $th) {
            return response()->json(['error_messge'=>$th->getMessage()],404);
        }
    }

    public function create()
    {
        try
        {
            $userData = Validator::make(request()->all(),[
                'password' =>'required|confirmed',
                'names'=>'required',
                'surname' => 'required',
                'nrc_number'=>'required',
                'cell_phone'=>'required',
                'email'=>'nullable',
                'gender'=>'required',
                'address'=>'required',
            ]);

            if($userData->fails()){
                return response()->json(['errors'=>$userData->errors()],422);
            }
            $validatedUserDate = $userData->validated();

            $newClient = new Client();
            $newClient->name=$validatedUserDate['names'];
            $newClient->surname=$validatedUserDate['surname'];
            $newClient->cell_phone= $validatedUserDate['cell_phone'];
            $newClient->email=$validatedUserDate['email'];
            $newClient->address=$validatedUserDate['address'];
            $newClient->gender=$validatedUserDate['gender'];
            $newClient->password= Hash::make($validatedUserDate['password']);
            $newClient->save();

        }catch (\Throwable $th)
        {
            return response()->json(['error_message'=>$th->getMessage()]);
        }
    }

    public function show(Request $request)
    {
        try {
            $inputs = $request->validate([
                'id'=>'required'
            ]);
            $client = Client::find($inputs['id']);
            if(!$client){
                return response()->json(['error_message'=>'Client not found'],404);
            }
            return response()->json(['client' => $client], 200);

        }catch (\Throwable $th) {
            return response()->json(['error_message'=>$th->getMessage()],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        try {
            $inputs = $request->validate([
                'id'=>'required',
                'password' =>'required',
                'names'=>'required',
                'surname' => 'required',
                'nrc_number'=>'required',
                'cell_phone'=>'required',
                'email'=>'nullable',
                'gender'=>'required',
                'address'=>'required',
            ]);

            $client= Client::find($inputs['id']);
            if(!$client){
                return response()->json(['error_message'=>'Client not found'],404);
            }
            $client->name=$inputs['names'];
            $client->surname=$inputs['surname'];
            $client->cell_phone=$inputs['cell_phone'];
            $client->email=$inputs['email'];
            $client->address=$inputs['address'];
            $client->gender=$inputs['gender'];
            $client->save();
            return response()->json(['client' => $client], 200);


        }catch (\Throwable $th) {
            return response()->json(['error_message'=>$th->getMessage()],404);
        }
    }


    public function destroy(Request $request)
    {
        try {
            $inputs = $request->validate([
                'id'=>'required'
            ]);
            $client= Client::find($inputs['id']);
            if (!$client){
                return response()->json(['error_message'=>'Client not found'],404);
            }
            $client->delete();
            return response()->json(['message' => 'deleted successfully'], 200);

        }catch (\Throwable $th) {
            return response()->json(['error_message'=>$th->getMessage()],404);
        }
    }

    public function updatePassword(Request $request)
    {
        try {
            $inputs = $request->validate([
                'id'=>'required',
                'password' =>'required',
            ]);

            $client = Client::find($inputs['id']);
            if(!$client){
                return response()->json(['error_message'=>'Client not found']);
            }
            $client->password = Hash::make($inputs['password']);
            $client->save();
            return response()->json(['client' => $client], 200);

        }catch(\Throwable $th){
            return response()->json(['error_message'=>$th->getMessage()],404);
        }
    }
}
