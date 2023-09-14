<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;

class PersonController extends Controller
{
     function getAllPersons(){
        $data = array();  
        $result = Person::all();
        $data = [ 
            "data"=>$result,
            "message" => "Person Found Successfully",
            "status_code" => 200 
        ];    
        return $data;  
     }

     function getPerson($id){
        $data = array();  
        $result = Person::find($id);
        if($result){
            $data = [ 
                "data"=>$result,
                "message" => "Person Found Successfully",
                "status_code" => 200 
            ];
        }else{
            $data = [
                "message" => "Person with Id Not FOund",
                "status_code" => 404
            ];
        }  
        return $data;
    }
    

    function createPerson(Request $req){
        $data = array();
        $rules = array(
            "name" => "required|min:10|max:100"
        );
        $validator = validator::make($req->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 401);
        }else{
            $person = new Person;
            $person->name=$req->name;
            $person->dateAdded=date("Y-m-d H:i:s");
            $result = $person->save();
            if($result){
                $data = [
                    "message" => "Person Created Successfully",
                    "status_code" => 201
                ];
            }else{
                $data = [
                    "message" => "Failed, Person Not Created",
                    "status_code" => 501
                ];
            }     
            return $data;
        }
    }

    function updatePerson(Request $req, $id){
        $data = array();
        $rules = array(
            "name" => "required|min:10|max:100"
        );
        $validator = validator::make($req->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 401);
        }else{
            $person = Person::find($id);
            $person->name=$req->name;
            $person->dateAdded=date("Y-m-d H:i:s");
            $result = $person->save();
            if($result){
                $data = [ 
                    "message" => "Person Updated Successfully",
                    "status_code" => 200
                ];
            }else{
                $data = [
                    "message" => "Failed, Person Not Updated",
                    "status_code" => 501
                ];
            }  
            return $data;
        }
    }

    function deletePerson($id){
        $data = array();
        $person = Person::find($id);
        if($person){
            $result = $person->delete();
            if($result){
                $data = [ 
                    "message" => "Person Deleted Successfully",
                    "status_code" => 200 
                ];
            }else{
                $data = [
                    "message" => "Failed, Person Not Deleted",
                    "status_code" => 404
                ];
            }        
        }else{
            $data = [
                "message" => "Error Ocurred",
                "status_code" => 501
            ];
        }  
        return $data;
    }


   
}
