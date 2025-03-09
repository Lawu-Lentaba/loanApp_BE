<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeAuthController extends Controller
{
    public function login(Request $request)
    {
       $request->validate([
           'email' => 'required|string|email',
           'password' => 'required|string',
       ]);
       $credentials = request(['email', 'password']);

       $employee = Employee::query()->where('email',$request['email'])->first();
       if (!$employee) {
           return response()->json(['error' => 'Employee does not exist'], 401);
       }
       if(!Hash::check($request['password'], $employee->password)) {
           return  response()->json(['error' => 'Unauthorized'], 401);
       }

       return  response()->json([
           'employee' => $employee,
           'token' => $employee->api_token,
       ], 200);

    }

    public function register(Request $request){
        try {
            $inputs = $request->validate([
                'name'=>'required',
                'surname'=>'required',
                'cell_phone'=>'required',
                'email'=>'required',
                'employee_number'=>'required',
                'address'=>'required',
                'gender'=>'required',
                'nrc_number'=>'required',
                'password'=>'required|confirmed',
            ]);

            $employee=new Employee();
            $employee->name= $inputs['name'];
            $employee->surname = $inputs['surname'];
            $employee->cell_phone = $inputs['cell_phone'];
            $employee->email = $inputs['email'];
            $employee->address = $inputs['address'];
            $employee->employee_number = $inputs['employee_number'];
            $employee->gender= $inputs['gender'];
            $employee->nrc_number= $inputs['nrc_number'];
            $employee->password = Hash::make($inputs['password']);
            $token = $employee->createToken($inputs['employee_number'])->plainTextToken;
            $employee->save();
            return response()->json([
                'employee'=>$employee,
                'token'=>$token
            ],201);
        }catch (\Throwable $th){
            return response($th->getMessage());
        }
    }

    public function logout(Request $request){

    }
}
