<?php

namespace App\Exports;

use App\Models\Lead;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;
class LeadExport implements FromCollection
{
    public  $request;


    public function __construct($request)
    {
        $this->request = $request;

    }
    public function headings():array{
    return [

    'id',
    'name_lead',
    'email',
    'phone',
   // 'seen',
    'profit amount',
    'state',
    'address',
    'arrive_date',
    'description',
    'services name',
    'sources name',
    'campaign name',
    'employee name',



   ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $leads = DB::table('leads')->get();


        $output = [];
        foreach ($leads as $record)
        {
            $service=DB::table('services')->where('id', $record->service_id)->first();
            $source=DB::table('sources')->where('id', $record->source_id)->first();
            $campaign=DB::table('campaigns')->where('id', $record->campaign_id)->first();
            $employee=DB::table('employees')->where('id', $record->employee_id)->first();


          $output[] = [
            //  $record->id,
              $record->name,
              $record->email,
              $record->phone,
            //  $record->seen,
              $record->profit_amount,
              $record->state,
              $record->address,
              $record->arrive_date,
              $record->description,
            //   $record->service_id,
            //   $record->source_id,
            //   $record->campaign_id,
            //   $record->employee_id,
              $employee->name,
              $service->name ,
              $source->name,
              $campaign->name,
          ];
        }

        return collect($output);

    }
// $leads = DB::table('leads')
//                   ->select('id','name','email','phone','seen','profit_amount','state',
//                   'address',DB::raw(' leads.arrive_date as date_arrive'),'employee_id','description',
//                   'service_id','source_id','campaign_id',

                  //) ->where([//'arrive_date',[$this->request->arrive_date1,$this->request->arrive_date2
                   // ['date_arrive','>=',$this->request->arrive_date1],
                    //['date_arrive','<',$this->request->arrive_date2],
                //     ['state','=',$this->request->state],
                //     ['source_id','=',$this->request->source_id]
                //   ])

                //   ->get()
                //   ->toArray();


}
