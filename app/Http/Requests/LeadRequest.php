<?php

namespace App\Http\Requests;

use App\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class LeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (Auth::user()->role == Constants::ADMIN_ID) {
        return [
            'name'=>'required|unique:   ,name|string|min:3|max:20',
            'email'=>'required|unique:leads,email|email',
            'phone'=>'required|unique:leads,phone|min:8|max:15',

            // 'profit_amount'=>'required',
            'state'=>'required',
            'address'=>'required',
            // 'arrive_date'=>'required|date',
            // 'description'=>'required|string|max:1000',
            'service_id'=>'required|integer',
            'source_id'=>'required|integer',
            'campaign_id'=>'required|integer',
            'employee_id'=>'required|integer'
        ];}
        if (Auth::user()->role == Constants::SALES_EMPLOYEE_ID) {
            return [
                'name'=>'required|unique:leads,name|string|max:20',
            'email'=>'required|unique:leads,email|email',
            'phone'=>'required|unique:leads,phone|min:8|max:15',
            // 'profit_amount'=>'required',
            'state'=>'required',
            'address'=>'required',
            // 'arrive_date'=>'required|date',
            // 'description'=>'required|string|max:1000',
            'service_id'=>'required|integer',
            'source_id'=>'required|integer',
            'campaign_id'=>'required|integer',
            // 'employee_id'=>'required|integer'
            ];}
    }

    public function messages()
    {


        if (App::getLocale() == 'en') {
            return [
                'name.required' => 'الاسم مطلوب',
                'name.string' => 'يجب أن يكون الاسم سلسلة احرف حصراً',
                'name.max' =>  'الحد الأعلى للاسم 20 حرف',
                'name.min' =>  'الحد الأدنى للاسم 3 احرف',
                'phone.min' => 'الحد الأدنى لرقم الهاتف 8',
                'phone.max' =>   'الحد الأعلى لرقم الهاتف 15',
                'point.numeric' => 'يجب أن تكون العلامة رقم صحيح',
                'name.unique'=>'الاسم موجود من قبل, لا يجب أن يتكرر',
                'email.unique'=>'الايميل موجود من قبل, لا يجب أن يتكرر',
                'email.email'=>'يجب أن يكون بصيغة الايميل',
                'phone.unique'=>'رقم الموبايل موجود من قبل, لا يجب أن يتكرر',
                'email.required' => 'الايميل مطلوب',
                'email.email' => 'يجب أن يكون البريد الالكتروني بصيغة بريد التكروني',
                // 'arrive_date.date' => 'يجب ان تكون تاريخ',
                // 'profit_amount.required' => 'profit_amount مطلوبة',
                'state.required' => 'state is required',
                'role.in' => 'role must be 1 or 2 or 3',
                'phone.required' => 'رقم الهاتف مطلوب',
                'phone.integer' => 'رقم الهاتف يجب ان يكوم ارقام حصراً',
                // 'description.required' => 'description is required',
                // 'description.string' => 'description must be string',
                // 'description.max' => 'الوصف يجب ان يكون 100 حرف على الاكثر',
            ];
        }
    }

// كود خوارزمية بيركيلي :
// import java.rmi.*;
// import java.rmi.server.*;
// import java.util.*;

// public class TimeServerImpl extends UnicastRemoteObject implements TimeServer {
//   private Map<String, Long> timeMap;

//   public TimeServerImpl() throws RemoteException {
//     super();
//     timeMap = new HashMap<String, Long>();
//   }

//   public long getTime() throws RemoteException {
//     return System.currentTimeMillis();
//   }

//   public void setTime(String client, long time) throws RemoteException {
//     timeMap.put(client, time);
//   }

//   public long getAverageTime() throws RemoteException {
//     long sum = 0;
//     for (long time : timeMap.values()) {
//       sum += time;
//     }
//     return sum / timeMap.size();
//   }
// }

// public interface TimeServer extends Remote {
//   public long getTime() throws RemoteException;
//   public void setTime(String client, long time) throws RemoteException;
//   public long getAverageTime() throws RemoteException;
// }

// public class Client {
//   public static void main(String[] args) {
//     try {
//       TimeServer server = (  ) Naming.lookup("//localhost/TimeServer");
//       long localTime = System.currentTimeMillis();
//       long serverTime = server.getTime();
//       long offset = serverTime - localTime;
//       server.setTime("client1", localTime + offset);
//       long averageTime = server.getAverageTime();
//       long newTime = averageTime + offset;
//       System.out.println("Local time: " + localTime);
//       System.out.println("Server time: " + serverTime);
//       System.out.println("Offset: " + offset);
//       System.out.println("Average time: " + averageTime);
//       System.out.println("New time: " + newTime);
//     } catch (Exception e) {
//       System.err.println("Client exception: " + e.toString());
//       e.printStackTrace();
//     }
//   }
// }

// public class Server {
//   public static void main(String[] args) {
//     try {
//       TimeServerImpl server = new TimeServerImpl();
//       Naming.rebind("//localhost/TimeServer", server);
//       System.out.println("TimeServer bound in registry");
//     } catch (Exception e) {
//       System.err.println("Server exception: " + e.toString());
//       e.printStackTrace();
//     }
//   }
// }
// }
