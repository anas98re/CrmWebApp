<?php

namespace App\Http\Controllers;

use App\Constants;
use App\Models\Campaign;
use App\Models\Employee;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\leaves;
use App\Models\Service;
use App\Models\Source;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function __construct()
    {
        $Service = Service::find(1);
        return view('home', compact('Service'));
    }

    public function getPagehomeByAdEmployee()
    {
        return view('homeByAdEmployee');
    }
    public function getPagehomeBySalesEmployee()
    {
        return view('homeBySalesEmployee');
    }


    public function index()
    {

        if (Auth::user()->role == Constants::AD_EMPLOYEE_ID) {
            return view('homeByAdEmployee');
        } elseif (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return view('homeBySalesEmployee');
        } else {


            $employeesNames[] = null;

            $Services = Service::all()->count();
            $leads = Lead::all()->count();
            $campigns = Campaign::all()->count();


            //THE_NUMBER_OF_LEADS_WHO_BUY
            $THE_NUMBER_OF_LEADS_WHO_BUY = Lead::where('state', 'Deal')->get()->count();
            if ($leads == 0) {
                $Percentage_of_customers_who_bought = 0;
            } else {
                $value88 = ($THE_NUMBER_OF_LEADS_WHO_BUY / $leads) * 100;
                $Percentage_of_customers_who_bought = number_format($value88, 1, '.', '');
            }

            /************************************************************************/
            //NAMES OF EMPLOYEES WHO HAVE CUSTOMERS WHO HAVE BOUGHT
            $employees = DB::table('leads')->where('leads.state', 'Deal')
                ->Join('employees', 'employees.id', '=', 'leads.employee_id')->get();
            foreach ($employees as $employee) {
                if (!in_array($employee->name, $employeesNames))
                    $employeesNames[] = $employee->name;
            }

            /************************************************************************/


            /************************************************************************/
            $facebook = DB::table('sources')->where('sources.name', 'Facebook')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();

            $Instagram = DB::table('sources')->where('sources.name', 'Instagram')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();

            $Telegram = DB::table('sources')->where('sources.name', 'Telegram')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();

            $WhatsApp = DB::table('sources')->where('sources.name', 'WhatsApp')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();

            $Tiktok = DB::table('sources')->where('sources.name', 'Tiktok')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();

            $Twitter = DB::table('sources')->where('sources.name', 'Twitter')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();

            $Gmail = DB::table('sources')->where('sources.name', 'Gmail')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();

            $Other = DB::table('sources')->where('sources.name', 'Other')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')->count();
            $statusarray = ["asd", "dsf"];

            /************************************************************************/

            /************************************************************************/

            $facebookDela = DB::table('sources')->where('sources.name', 'Facebook')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();

            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $facebookPercent = 0;
            } else {
                $value1 = ($facebookDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $facebookPercent = number_format($value1, 1, '.', '');
            }


            $facebookDela = 0;
            $InstagramkDela = DB::table('sources')->where('sources.name', 'Instagram')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();

            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $InstagramPercent = 0;
            } else {
                $value2 = ($InstagramkDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $InstagramPercent = number_format($value2, 1, '.', '');
            }



            $TelegramDela = DB::table('sources')->where('sources.name', 'Telegram')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();
            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $TelegramPercent = 0;
            } else {
                $value3 = ($TelegramDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $TelegramPercent = number_format($value3, 1, '.', '');
            }


            $WhatsAppDela = DB::table('sources')->where('sources.name', 'WhatsApp')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();
            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $WhatsAppPercent = 0;
            } else {
                $value4 = ($WhatsAppDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $WhatsAppPercent = number_format($value4, 1, '.', '');
            }


            $TwitterDela = DB::table('sources')->where('sources.name', 'Twitter')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();
            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $TwitterPercent = 0;
            } else {
                $value5 = ($TwitterDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $TwitterPercent = number_format($value5, 1, '.', '');
            }


            $TiktokDela = DB::table('sources')->where('sources.name', 'Tiktok')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();
            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $TiktokPercent = 0;
            } else {
                $value6 = ($TiktokDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $TiktokPercent = number_format($value6, 1, '.', '');
            }

            $GmailDela = DB::table('sources')->where('sources.name', 'Gmail')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();
            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $GmailPercent = 0;
            } else {
                $value17 = ($GmailDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $GmailPercent = number_format($value17, 1, '.', '');
            }

            $OtherDela = DB::table('sources')->where('sources.name', 'Other')
                ->Join('leads', 'leads.source_id', '=', 'sources.id')
                ->where('state', 'Deal')->count();
            if ($THE_NUMBER_OF_LEADS_WHO_BUY == 0) {
                $OtherPercent = 0;
            } else {
                $value16 = ($OtherDela / $THE_NUMBER_OF_LEADS_WHO_BUY) * 100;
                $OtherPercent = number_format($value16, 1, '.', '');
            }

            /************************************************************************/

            /************************************************************************/
            $ordered = Lead::select('employee_id')
                ->selectRaw('count(employee_id) as qty')
                ->groupBy('employee_id')
                ->orderBy('qty', 'DESC')
                ->take(3)->get();

            if ($leads == null) {
                $a[] = 0;
            } else {
                for ($i = 0; $i < $ordered->count(); $i++) {
                    $a[] = $ordered[$i]->employee_id;
                }
            }

            $r = Employee::whereIn('id', $a)->get();

            foreach ($r as $r) {
                $b[] = $r->name;
                $z[] = $r->id;
            }

            switch ($ordered->count()) {
                case (0):
                    $TheFirstEmployeeWhoBringTheMostLeads = '-';
                    $TheSecondWhoBringTheMostLeads = '-';
                    $TheThirdEmployeeWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstEmployee = 0;
                    $NumberLeadsBySecondEmployee = 0;
                    $NumberLeadsByThirdEmployee = 0;
                    break;
                case (1):
                    $r = Employee::where('id', $a[0])->first();
                    $TheFirstEmployeeWhoBringTheMostLeads = $r->name;
                    $TheSecondWhoBringTheMostLeads = '-';
                    $TheThirdEmployeeWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstEmployee = Lead::where('employee_id', $a[0])->count();
                    $NumberLeadsBySecondEmployee = 0;
                    $NumberLeadsByThirdEmployee = 0;
                    break;
                case (2):
                    $r = Employee::where('id', $a[0])->first();
                    $r1 = Employee::where('id', $a[1])->first();
                    $TheFirstEmployeeWhoBringTheMostLeads = $r->name;
                    $TheSecondWhoBringTheMostLeads = $r1->name;
                    $TheThirdEmployeeWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstEmployee = Lead::where('employee_id', $a[0])->count();
                    $NumberLeadsBySecondEmployee = Lead::where('employee_id', $a[1])->count();
                    $NumberLeadsByThirdEmployee = 0;
                    break;
                default:
                    $r = Employee::where('id', $a[0])->first();
                    $r1 = Employee::where('id', $a[1])->first();
                    $r2 = Employee::where('id', $a[2])->first();
                    $TheFirstEmployeeWhoBringTheMostLeads = $r->name;
                    $TheSecondWhoBringTheMostLeads = $r1->name;
                    $TheThirdEmployeeWhoBringTheMostLeads = $r2->name;

                    $NumberLeadsByFirstEmployee = Lead::where('employee_id', $a[0])->count();
                    $NumberLeadsBySecondEmployee = Lead::where('employee_id', $a[1])->count();
                    $NumberLeadsByThirdEmployee = Lead::where('employee_id', $a[2])->count();
                    break;
            }

            /************************************************************************/
            $ordered1 = Lead::select('source_id')
                ->selectRaw('count(employee_id) as qty')
                ->groupBy('source_id')
                ->orderBy('qty', 'DESC')
                ->take(3)->get();
            // $c[] = 0;

            if ($leads == null) {
                $c[] = 0;
            } else {
                for ($v = 0; $v < $ordered1->count(); $v++) {
                    $c[] = $ordered1[$v]->source_id;
                }
            }

            switch ($ordered1->count()) {
                case (0):
                    $THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = 0;
                    $THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = 0;
                    $THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = 0;
                    break;
                case (1):
                    $d = Source::where('id', $c[0])->first();
                    $THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = $d->name;
                    $THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = '-';
                    $THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = '-';
                    break;
                case (2):
                    $d = Source::where('id', $c[0])->first();
                    $d1 = Source::where('id', $c[1])->first();
                    $THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = $d->name;
                    $THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = $d1->name;
                    $THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = '-';
                    break;
                default:
                    $d = Source::where('id', $c[0])->first();
                    $d1 = Source::where('id', $c[1])->first();
                    $d2 = Source::where('id', $c[2])->first();
                    $THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = $d->name;
                    $THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = $d1->name;
                    $THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS = $d2->name;
                    break;
            }


            /************************************************************************/
            $ordered2 = Lead::select('campaign_id')
                ->selectRaw('count(campaign_id) as qty')
                ->groupBy('campaign_id')
                ->orderBy('qty', 'DESC')
                ->take(5)->get();

            if ($leads == null) {
                $p[] = 0;
            } else {
                for ($j = 0; $j < $ordered2->count(); $j++) {
                    $p[] = $ordered2[$j]->campaign_id;
                }
            }

            switch ($ordered2->count()) {
                case (0):
                    $TheFirstCampaignWhoBringTheMostLeads = '-';
                    $TheSecondCampaignWhoBringTheMostLeads = '-';
                    $TheThirdCampaignWhoBringTheMostLeads = '-';
                    $TheFourthCampaignWhoBringTheMostLeads = '-';
                    $TheFifthCampaignWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstCampaign = 0;
                    $NumberLeadsBySecondCampaign = 0;
                    $NumberLeadsByThirdCampaign = 0;
                    $NumberLeadsByFourthCampaign = 0;
                    $NumberLeadsByFifthCampaign = 0;

                    $NumberLeadsByFirstCampaignWithDeal = 0;
                    $NumberLeadsBySecondCampaignWithDeal = 0;
                    $NumberLeadsByThirdCampaignWithDeal = 0;
                    $NumberLeadsByFourthCampaignWithDeal = 0;
                    $NumberLeadsByFifthCampaignWithDeal = 0;
                    break;

                case (1):
                    $tt = Campaign::where('id', $p[0])->first();
                    $TheFirstCampaignWhoBringTheMostLeads = $tt->name;
                    $TheSecondCampaignWhoBringTheMostLeads = '-';
                    $TheThirdCampaignWhoBringTheMostLeads = '-';
                    $TheFourthCampaignWhoBringTheMostLeads = '-';
                    $TheFifthCampaignWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstCampaign = Lead::where('campaign_id', $p[0])->count();
                    $NumberLeadsBySecondCampaign = 0;
                    $NumberLeadsByThirdCampaign = 0;
                    $NumberLeadsByFourthCampaign = 0;
                    $NumberLeadsByFifthCampaign = 0;


                    $NumberLeadsByFirstCampaignWithDeal = Lead::where('campaign_id', $p[0])->where('state', 'Deal')->count();
                    $NumberLeadsBySecondCampaignWithDeal = 0;
                    $NumberLeadsByThirdCampaignWithDeal = 0;
                    $NumberLeadsByFourthCampaignWithDeal = 0;
                    $NumberLeadsByFifthCampaignWithDeal = 0;

                    break;

                case (2):
                    $tt1 = Campaign::where('id', $p[0])->first();
                    $tt2 = Campaign::where('id', $p[1])->first();
                    $TheFirstCampaignWhoBringTheMostLeads = $tt1->name;
                    $TheSecondCampaignWhoBringTheMostLeads = $tt2->name;
                    $TheThirdCampaignWhoBringTheMostLeads = '-';
                    $TheFourthCampaignWhoBringTheMostLeads = '-';
                    $TheFifthCampaignWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstCampaign = Lead::where('campaign_id', $p[0])->count();
                    $NumberLeadsBySecondCampaign = Lead::where('campaign_id', $p[1])->count();
                    $NumberLeadsByThirdCampaign = 0;
                    $NumberLeadsByFourthCampaign = 0;
                    $NumberLeadsByFifthCampaign = 0;


                    $NumberLeadsByFirstCampaignWithDeal = Lead::where('campaign_id', $p[0])->where('state', 'Deal')->count();
                    $NumberLeadsBySecondCampaignWithDeal = Lead::where('campaign_id', $p[1])->where('state', 'Deal')->count();
                    $NumberLeadsByThirdCampaignWithDeal = 0;
                    $NumberLeadsByFourthCampaignWithDeal = 0;
                    $NumberLeadsByFifthCampaignWithDeal = 0;

                    break;

                case (3):
                    $tt1 = Campaign::where('id', $p[0])->first();
                    $tt2 = Campaign::where('id', $p[1])->first();
                    $tt3 = Campaign::where('id', $p[2])->first();
                    $TheFirstCampaignWhoBringTheMostLeads = $tt1->name;
                    $TheSecondCampaignWhoBringTheMostLeads = $tt2->name;
                    $TheThirdCampaignWhoBringTheMostLeads = $tt3->name;
                    $TheFourthCampaignWhoBringTheMostLeads = '-';
                    $TheFifthCampaignWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstCampaign = Lead::where('campaign_id', $p[0])->count();
                    $NumberLeadsBySecondCampaign = Lead::where('campaign_id', $p[1])->count();
                    $NumberLeadsByThirdCampaign = Lead::where('campaign_id', $p[2])->count();
                    $NumberLeadsByFourthCampaign = 0;
                    $NumberLeadsByFifthCampaign = 0;


                    $NumberLeadsByFirstCampaignWithDeal = Lead::where('campaign_id', $p[0])->where('state', 'Deal')->count();
                    $NumberLeadsBySecondCampaignWithDeal = Lead::where('campaign_id', $p[1])->where('state', 'Deal')->count();
                    $NumberLeadsByThirdCampaignWithDeal = Lead::where('campaign_id', $p[2])->where('state', 'Deal')->count();
                    $NumberLeadsByFourthCampaignWithDeal = 0;
                    $NumberLeadsByFifthCampaignWithDeal = 0;

                    break;

                case (4):
                    $tt1 = Campaign::where('id', $p[0])->first();
                    $tt2 = Campaign::where('id', $p[1])->first();
                    $tt3 = Campaign::where('id', $p[2])->first();
                    $tt4 = Campaign::where('id', $p[3])->first();
                    $TheFirstCampaignWhoBringTheMostLeads = $tt1->name;
                    $TheSecondCampaignWhoBringTheMostLeads = $tt2->name;
                    $TheThirdCampaignWhoBringTheMostLeads = $tt3->name;
                    $TheFourthCampaignWhoBringTheMostLeads = $tt4->name;
                    $TheFifthCampaignWhoBringTheMostLeads = '-';

                    $NumberLeadsByFirstCampaign = Lead::where('campaign_id', $p[0])->count();
                    $NumberLeadsBySecondCampaign = Lead::where('campaign_id', $p[1])->count();
                    $NumberLeadsByThirdCampaign = Lead::where('campaign_id', $p[2])->count();
                    $NumberLeadsByFourthCampaign = Lead::where('campaign_id', $p[3])->count();
                    $NumberLeadsByFifthCampaign = 0;


                    $NumberLeadsByFirstCampaignWithDeal = Lead::where('campaign_id', $p[0])->where('state', 'Deal')->count();
                    $NumberLeadsBySecondCampaignWithDeal = Lead::where('campaign_id', $p[1])->where('state', 'Deal')->count();
                    $NumberLeadsByThirdCampaignWithDeal = Lead::where('campaign_id', $p[2])->where('state', 'Deal')->count();
                    $NumberLeadsByFourthCampaignWithDeal = Lead::where('campaign_id', $p[3])->where('state', 'Deal')->count();
                    $NumberLeadsByFifthCampaignWithDeal = 0;

                    break;

                default:
                    $tt1 = Campaign::where('id', $p[0])->first();
                    $tt2 = Campaign::where('id', $p[1])->first();
                    $tt3 = Campaign::where('id', $p[2])->first();
                    $tt4 = Campaign::where('id', $p[3])->first();
                    $tt5 = Campaign::where('id', $p[4])->first();
                    $TheFirstCampaignWhoBringTheMostLeads = $tt1->name;
                    $TheSecondCampaignWhoBringTheMostLeads = $tt2->name;
                    $TheThirdCampaignWhoBringTheMostLeads = $tt3->name;
                    $TheFourthCampaignWhoBringTheMostLeads = $tt4->name;
                    $TheFifthCampaignWhoBringTheMostLeads = $tt5->name;

                    $NumberLeadsByFirstCampaign = Lead::where('campaign_id', $p[0])->count();
                    $NumberLeadsBySecondCampaign = Lead::where('campaign_id', $p[1])->count();
                    $NumberLeadsByThirdCampaign = Lead::where('campaign_id', $p[2])->count();
                    $NumberLeadsByFourthCampaign = Lead::where('campaign_id', $p[3])->count();
                    $NumberLeadsByFifthCampaign = Lead::where('campaign_id', $p[4])->count();


                    $NumberLeadsByFirstCampaignWithDeal = Lead::where('campaign_id', $p[0])->where('state', 'Deal')->count();
                    $NumberLeadsBySecondCampaignWithDeal = Lead::where('campaign_id', $p[1])->where('state', 'Deal')->count();
                    $NumberLeadsByThirdCampaignWithDeal = Lead::where('campaign_id', $p[2])->where('state', 'Deal')->count();
                    $NumberLeadsByFourthCampaignWithDeal = Lead::where('campaign_id', $p[3])->where('state', 'Deal')->count();
                    $NumberLeadsByFifthCampaignWithDeal = Lead::where('campaign_id', $p[4])->where('state', 'Deal')->count();

                    break;
            }

            ///////////////////////////////////
            if ($NumberLeadsByFirstCampaign == 0) {
                $PercentLeadsDealByFirstCampaign = 0;
            } else {
                $value7 = ($NumberLeadsByFirstCampaignWithDeal / $NumberLeadsByFirstCampaign) * 100;
                $PercentLeadsDealByFirstCampaign = number_format($value7, 1, '.', '');
            }

            ///////////////////////////////////
            if ($NumberLeadsBySecondCampaign == 0) {
                $PercentLeadsDealBySecondCampaign = 0;
            } else {
                $value8 = ($NumberLeadsBySecondCampaignWithDeal / $NumberLeadsBySecondCampaign) * 100;
                $PercentLeadsDealBySecondCampaign = number_format($value8, 1, '.', '');
            }

            ///////////////////////////////////
            if ($NumberLeadsByThirdCampaign == 0) {
                $PercentLeadsDealByThirdCampaign = 0;
            } else {
                $value9 = ($NumberLeadsByThirdCampaignWithDeal / $NumberLeadsByThirdCampaign) * 100;
                $PercentLeadsDealByThirdCampaign = number_format($value9, 1, '.', '');
            }

            ///////////////////////////////////
            if ($NumberLeadsByFourthCampaign == 0) {
                $PercentLeadsDealByFourthCampaign = 0;
            } else {
                $value10 = ($NumberLeadsByFourthCampaignWithDeal / $NumberLeadsByFourthCampaign) * 100;
                $PercentLeadsDealByFourthCampaign = number_format($value10, 1, '.', '');
            }

            ///////////////////////////////////
            if ($NumberLeadsByFifthCampaign == 0) {
                $PercentLeadsDealByFifthCampaign = 0;
            } else {
                $value11 = ($NumberLeadsByFifthCampaignWithDeal / $NumberLeadsByFifthCampaign) * 100;
                $PercentLeadsDealByFifthCampaign = number_format($value11, 1, '.', '');
            }

            /************************************************************************/
            $CampaignsActive = Campaign::where('state', 'active')->count();


            /************************************************************************/

            $ordered3 = Lead::select('service_id')
                ->selectRaw('count(service_id) as qty')
                ->groupBy('service_id')
                ->orderBy('qty', 'DESC')
                ->take(3)->get();

            if ($leads == null) {
                $x[] = 0;
            } else {
                for ($n = 0; $n < $ordered3->count(); $n++) {
                    $x[] = $ordered3[$n]->service_id;
                }
            }

            switch ($ordered3->count()) {
                case (0):
                    $TheFirstServiceWhoBringTheMostLeads = '-';
                    $TheSecondServiceWhoBringTheMostLeads = '-';
                    $TheThirdServiceWhoBringTheMostLeads = '-';
                    break;
                case (1):
                    $y = Service::where('id', $x[0])->first();
                    $TheFirstServiceWhoBringTheMostLeads = $y->name;
                    $TheSecondServiceWhoBringTheMostLeads = '-';
                    $TheThirdServiceWhoBringTheMostLeads = '-';
                    break;
                case (2):
                    $y = Service::where('id', $x[0])->first();
                    $y1 = Service::where('id', $x[1])->first();
                    $TheFirstServiceWhoBringTheMostLeads = $y->name;
                    $TheSecondServiceWhoBringTheMostLeads = $y1->name;
                    $TheThirdServiceWhoBringTheMostLeads = '-';
                    break;
                default:
                    $y = Service::where('id', $x[0])->first();
                    $y1 = Service::where('id', $x[1])->first();
                    $y2 = Service::where('id', $x[2])->first();
                    $TheFirstServiceWhoBringTheMostLeads = $y->name;
                    $TheSecondServiceWhoBringTheMostLeads = $y1->name;
                    $TheThirdServiceWhoBringTheMostLeads = $y2->name;
                    break;
            }


            /************************************************************************/
            $THE_LAST_TEN_LEADS_CAME = Lead::orderBy('arrive_date', 'DESC')
                ->take(10)->get();

            if ($leads == null) {
                $xx[] = 0;
            } else {
                for ($m = 0; $m < $THE_LAST_TEN_LEADS_CAME->count(); $m++) {
                    $xx[] = $THE_LAST_TEN_LEADS_CAME[$m]->arrive_date;
                }
            }

            $yy = Lead::whereIn('arrive_date', $xx)->orderBy('arrive_date', 'DESC')->get();

            switch ($yy->count()) {
                case (0):
                    $THE_LAST_LEAD_CAME = '-';
                    $THE_2LAST_LEAD_CAME = '-';
                    $THE_3LAST_LEAD_CAME = '-';
                    $THE_4LAST_LEAD_CAME = '-';
                    $THE_5LAST_LEAD_CAME = '-';
                    break;
                case (1):
                    $THE_LAST_LEAD_CAME = $yy[0]->name;
                    $THE_2LAST_LEAD_CAME = '-';
                    $THE_3LAST_LEAD_CAME = '-';
                    $THE_4LAST_LEAD_CAME = '-';
                    $THE_5LAST_LEAD_CAME = '-';
                    break;
                case (2):
                    $THE_LAST_LEAD_CAME = $yy[0]->name;
                    $THE_2LAST_LEAD_CAME = $yy[1]->name;
                    $THE_3LAST_LEAD_CAME = '-';
                    $THE_4LAST_LEAD_CAME = '-';
                    $THE_5LAST_LEAD_CAME = '-';
                    break;
                case (3):
                    $THE_LAST_LEAD_CAME = $yy[0]->name;
                    $THE_2LAST_LEAD_CAME = $yy[1]->name;
                    $THE_3LAST_LEAD_CAME = $yy[2]->name;
                    $THE_4LAST_LEAD_CAME = '-';
                    $THE_5LAST_LEAD_CAME = '-';
                    break;
                case (4):
                    $THE_LAST_LEAD_CAME = $yy[0]->name;
                    $THE_2LAST_LEAD_CAME = $yy[1]->name;
                    $THE_3LAST_LEAD_CAME = $yy[2]->name;
                    $THE_4LAST_LEAD_CAME = $yy[3]->name;
                    $THE_5LAST_LEAD_CAME = '-';
                    break;
                default:
                    $THE_LAST_LEAD_CAME = $yy[0]->name;
                    $THE_2LAST_LEAD_CAME = $yy[1]->name;
                    $THE_3LAST_LEAD_CAME = $yy[2]->name;
                    $THE_4LAST_LEAD_CAME = $yy[3]->name;
                    $THE_5LAST_LEAD_CAME = $yy[4]->name;
                    break;
            }

            /************************************************************************/


            return view('home', compact(
                'Services',
                'THE_NUMBER_OF_LEADS_WHO_BUY',
                'campigns',
                'leads',
                'employeesNames',
                'statusarray',
                'facebook',
                'Instagram',
                'WhatsApp',
                'Tiktok',
                'Twitter',
                'Gmail',
                'Other',
                'Telegram',
                'facebookPercent',
                'InstagramPercent',
                'TelegramPercent',
                'OtherPercent',
                'WhatsAppPercent',
                'TwitterPercent',
                'TiktokPercent',
                'GmailPercent',
                'TheFirstEmployeeWhoBringTheMostLeads',
                'TheSecondWhoBringTheMostLeads',
                'TheThirdEmployeeWhoBringTheMostLeads',
                'Percentage_of_customers_who_bought',
                'THE_First_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS',
                'CampaignsActive',
                'THE_Second_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS',
                'THE_Third_MOST_POPULAR_SOCIAL_MEDIA_FOR_LEADS',
                'NumberLeadsByFirstEmployee',
                'NumberLeadsBySecondEmployee',
                'NumberLeadsByThirdEmployee',
                'TheFirstCampaignWhoBringTheMostLeads',
                'NumberLeadsByFirstCampaign',
                'PercentLeadsDealByFirstCampaign',
                'TheSecondCampaignWhoBringTheMostLeads',
                'NumberLeadsBySecondCampaign',
                'PercentLeadsDealBySecondCampaign',
                'TheThirdCampaignWhoBringTheMostLeads',
                'NumberLeadsByThirdCampaign',
                'PercentLeadsDealByThirdCampaign',
                'TheFourthCampaignWhoBringTheMostLeads',
                'NumberLeadsByFourthCampaign',
                'PercentLeadsDealByFourthCampaign',
                'TheFifthCampaignWhoBringTheMostLeads',
                'NumberLeadsByFifthCampaign',
                'PercentLeadsDealByFifthCampaign',
                'TheFirstServiceWhoBringTheMostLeads',
                'TheSecondServiceWhoBringTheMostLeads',
                'TheThirdServiceWhoBringTheMostLeads',
                'THE_LAST_LEAD_CAME',
                'THE_2LAST_LEAD_CAME',
                'THE_3LAST_LEAD_CAME',
                'THE_4LAST_LEAD_CAME',
                'THE_5LAST_LEAD_CAME'
            ));
        }
    }

    public function FilterLeadsBySourceAndByDeals($req, $req1)
    {
        // $Leads=Lead::where()
        $source = Source::where('name', $req)->first();

        $leads = DB::table('sources')->where('sources.id', $source->id)
            ->join('leads', 'leads.source_id', '=', 'sources.id')
            ->where('state', $req1)->get();
        return view('FilterLeadsBySourceAndByDeals', compact('leads', 'req'));
    }

    public function THE_LAST_TEN_LEADS_CAME()
    {
        $THE_LAST_TEN_LEADS_CAME = Lead::orderBy('arrive_date', 'DESC')
            ->take(10)->get();
        return view('THE_LAST_TEN_LEADS_CAME', compact('THE_LAST_TEN_LEADS_CAME'));
    }
}
