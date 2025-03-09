<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\Console\Input\Input;

class EmployeeController extends Controller
{
    use HasFactory,Notifiable, HasApiTokens;
    public function index()
    {
        try {
             $employee=Employee::all();
             return response()->json(['employee'=>$employee],200);
        }catch(\Throwable $th){
            return response($th->getMessage());
        }
    }


    public function create(Request $request)
    {
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


    public function show(Request $request)
    {
        try {
            $inputs = $request->validate([
                'id' => 'required',
            ]);
            $employee = Employee::find($inputs['id']);
            return response()->json(['employee'=>$employee],200);

        }catch ( \Throwable $th){
            return response()->json(['error_message'=>$th->getMessage()],500);
        }
    }


    public function edit(Employee $employee)
    {
        try {
            $inputs = request()->validate([
                'id'=>'required',
                'name'=>'required',
                'surname'=>'required',
                'cell_phone'=>'required',
                'email'=>'required',
                'employee_number'=>'required',
                'address'=>'required',
                'gender'=>'required',
                'nrc_number'=>'required',
                'password'=>'required',
            ]);

            $employee = Employee::find($inputs['id']);
            $employee->name= $inputs['name'];
            $employee->surname = $inputs['surname'];
            $employee->cell_phone = $inputs['cell_phone'];
            $employee->email = $inputs['email'];
            $employee->address = $inputs['address'];
            $employee->employee_number = $inputs['employee_number'];
            $employee->gender= $inputs['gender'];
            $employee->nrc_number= $inputs['nrc_number'];
            $employee->password = Hash::make($inputs['password']);
            $employee->save();

            return response()->json(['employee'=>$employee],201);

        }catch(\Throwable $th){
            return response($th->getMessage());
        }
    }


    public function update(Request $request, Employee $employee)
    {
        try {
            $inputs = $request->validate([
                'id'=>'required',
                'name'=>'required',
                'surname'=>'required',
                'cell_phone'=>'required',
                'email'=>'required',
                'employee_number'=>'required',
                'address'=>'required',
                'gender'=>'required',
                'nrc_number'=>'required',
            ]);

            $employee = Employee::find($inputs['id']);
            $employee->name= $inputs['name'];
            $employee->surname = $inputs['surname'];
            $employee->cell_phone = $inputs['cell_phone'];
            $employee->email = $inputs['email'];
            $employee->address = $inputs['address'];
            $employee->employee_number = $inputs['employee_number'];
            $employee->gender= $inputs['gender'];
            $employee->nrc_number= $inputs['nrc_number'];
            $employee->save();
            return response()->json(['employee'=>$employee],201);

        }catch(\Throwable $th){
            return response($th->getMessage());
        }
    }

    public function destroy(Employee $employee): Application|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse|\Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            $inputs = request()->validate([
                'id'=>'required',
            ]);

            $employee = Employee::find($inputs['id']);
            if(!$employee){
                return response('Employee not found',404);
            }
            $employee->delete();
            return response()->json(['employee'=>'Employee has been deleted'],201);

        }catch( \Throwable $th){
            return response($th->getMessage());
        }
    }
    public final function passwordUpdate(Request $request){
        try{
            $inputs = $request->validate([
                'id'=>'required',
                'password'=>'required',
            ]);
            $employee = Employee::find($inputs['id']);
            $employee->password = Hash::make($inputs['password']);
        }catch( \Throwable $th){
            return response($th->getMessage());
        }
    }
}
