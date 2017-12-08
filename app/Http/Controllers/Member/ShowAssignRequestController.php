<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\tickets;
use App\priority;
use App\status;
use Carbon\Carbon;
class ShowAssignRequestController extends Controller
{
    public function index_hn()
    {
       
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->get();
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_hn')->with([
            'indi_data' => $data
        ]);
    }
    
    public function new_hn(){
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->where('tickets.status_id','=',1)->get();
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_hn')->with([
            'indi_data' => $data
        ]);
    }


    public function inprogress_hn(){
        
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->where('tickets.status_id','=',2)->get();
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_hn')->with([
            'indi_data' => $data
        ]);
    }
        
    public function resolved_hn(){
         
        $id = Auth::user()->id; 
                
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->where('tickets.status_id','=',3)->get();
                
            return view('database_manager.list_request_congviecyeucau.member.show_member_hn')->with([
                'indi_data' => $data
            ]);
    }
        
        public function outofdate_hn(){
            //code here//code here
        $id = Auth::user()->id; 
        
        $curTime = Carbon::now();
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.deadline','<',$curTime)->where('tickets.status_id','<>',5)->where('tickets.status_id','<>',6)->get();
        
        return view('database_manager.list_request_congviecyeucau.member.show_member_hn')->with([
            'indi_data' => $data
        ]);
        }

    
        
    public function index_dn()
    {
   
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->get();
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_dn')->with([
            'indi_data' => $data
        ]);
    }

    public function new_dn(){
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->where('tickets.status_id','=',1)->get();
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_dn')->with([
            'indi_data' => $data
        ]);
    }


    public function inprogress_dn(){
        
        $id = Auth::user()->id; 
        
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->where('tickets.status_id','=',2)->get();
        
        return view('database_manager.list_request_congviecduocgiao.member.show_member_dn')->with([
            'indi_data' => $data
        ]);
    }
        
    public function resolved_dn(){
         
        $id = Auth::user()->id; 
                
        $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('b.id','=',$id)->where('tickets.status_id','=',3)->get();
                
            return view('database_manager.list_request_congviecyeucau.member.show_member_dn')->with([
                'indi_data' => $data
            ]);
    }
        
        public function outofdate_dn(){
            //code here
            $id = Auth::user()->id; 
            
            $curTime = Carbon::now();
            
            $data = tickets::join('priority','tickets.priority_id','=','priority.id')->join('users as a','tickets.created_by','=','a.id')->join('users as b','tickets.assigned_to_id','=','b.id')->join('status','tickets.status_id','=','status.id')->select('tickets.id as id','subject','priority.name_priority as priority','a.employee_name as employee_cre','b.employee_name as employee_assi','deadline','status.name_status as status')->where('a.id','=',$id)->where('tickets.deadline','<',$curTime)->where('tickets.status_id','<>',5)->where('tickets.status_id','<>',6)->get();
            
            return view('database_manager.list_request_congviecyeucau.member.show_member_dn')->with([
                'indi_data' => $data
            ]);
        }
}
