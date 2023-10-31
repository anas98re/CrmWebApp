<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Service;
use App\Models\Source;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class BaseController
{
    public function sendResponse($result, $message,$code=200){ // fun sends theResponse to user with result and massage
       $response = [


        'status' => true,
        'data' => $result, //the date that comes from the database is stored  in result variable
        'message' =>$message,
        'code'=>$code
        //succes is Key and true is  value
       ] ;


       return response()->json( $response, $code); // 200 is http protocol // send data to user as json

    }

    public function sendMessage($message,$code=200){
        $response = [
            'status' => true,
            'message' =>$message,
            'code'=>$code
            //succes is Key and true is  value
           ] ;
           return response()->json( $response, $code); 
    }

    public function sendError($errorMessage=[], $code = 404){
        $response = [
         'status' => false,
         'message' =>$errorMessage,
         'code'=>$code
        ];
        return response()->json($response, $code);
    }

    public function search($model,$searchField,$searchValue){
        $collection=new Collection() ;

        for ($i=0; $i <count($searchField) ; $i++) { 
            $value=$model->where($searchField[$i],'LIKE','%'.$searchValue.'%')->get();
            $collection->splice($collection->count(),0,$value);
        }
        return $collection;
    }
}
