<?php

namespace App\Imports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Service;
use App\Models\Source;
use App\Models\Campaign;
use Carbon\Carbon;
use ErrorException;
use Illuminate\Support\Facades\DB;
class LeadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // $service=DB::table('services')->where('name', request()->service_id)->first();
        // $source=DB::table('sources')->where('name', request()->source_id)->first();
        // $campaign=DB::table('campaigns')->where('name', request()->campaign_id)->first();
        // $employee=DB::table('employees')->where('name', request()->employee_id)->first();

        return new Lead([
            'name' => $row[0],
            'email' => $row[1],
            'phone'=> $row[2],
            'seen'=>1,
            'profit_amount'=>0,// $row[3],
            'state'=> $row[3],
            'address'=> $row[4],
            'arrive_date'=>$this->tranDate($row[5]),//$row[6] ,//\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]),"1985-01-03"
            'description'=> $row[6],
            'employee_id'=>request()->employee_id,
            'service_id'=>request()->service_id,
            'source_id'=>request()->source_id,
            'campaign_id'=>0,

        ]);
        // protected $fillable=['name','email','phone','address','description','profit_amount','state',
        // 'arrive_date','service_id','source_id','campaign_id','seen','employee_id'];
    }
    private function tranDate($value,$format="Y-m-d"){
        try{

            return Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        }
        catch(ErrorException $e){
            return Carbon::createFromFormat($format,$value);
        }
    }
}
