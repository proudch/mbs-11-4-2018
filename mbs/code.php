<?php

namespace App\Http\Controllers;



// model
use App\event; 
use App\authen; 



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Input;
use Session;

class MBSController extends Controller
{

    
    public function login_post(Request $request)
    {
        // echo "test"; echo "<br/>";
        // echo $request->username; echo "<br/>";
        // echo $request->password; echo "<br/>";
        // exit(0);


        $a = authen::where('username',$request->username)->where('password',$request->password)->where('is_enable','y')->first(); //ให้login ได้ 
        // var_dump($a);   
        // exit(0);     

        Session::put('username',$request->username); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที
        Session::put('m_status',$request->m_status); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที

        if ($a->m_status == "user") {

            return redirect('member-home');
        }

        else if ($a->m_status == "exhibitor") {

            return redirect('exhibitor-home');
        }

        else if ($a->m_status == "admin") {

            return redirect('admin-home');
        }

        else {return redirect('login');}


       
    }

    public  function logout_get(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('m_status');

        return redirect('login');

    }




       public function addevent_get()
    {  
    	/*แสดงหน้าเพิ่มข้อมูลEvent*/
        //return redirect('addmember');     วิ่งวนไปที่อยู่นั้น
        return view('admin.addE'); //วื่งไปหน้านั้น
    }


        public function addevent_post(Request $request)
    {
        $ev = new event();
        
        //Post Data
        $ev->ev_name = $request->ev_name;
        $ev->ev_caption = $request->ev_caption;
        $ev->ev_dateS = $request->ev_dateS;
        $ev->ev_dateF = $request->ev_dateF;
        $ev->ev_dateRS = $request->ev_dateRS;
        $ev->ev_dateRF = $request->ev_dateRF;
        $ev->ev_productT = $request->ev_productT;
        $ev->booths_size = $request->booths_size;
        $ev->ev_file = $request->ev_file;
        $ev->ev_image = $request->ev_image;
        $ev->ev_plan = $request->ev_plan;        


        $ev->save();
        $ev->touch();        

        return redirect('admin-home');
    }



        public function event_get()
    {
        
          
            return view('ำอำืะ'); //วื่งไปหน้านั้น

        }


       public function addexhibitor_get()
    {  
        /*แสดงหน้าเพิ่มข้อมูลEvent*/
        //return redirect('addmember');     วิ่งวนไปที่อยู่นั้น
        return view('reg'); //วื่งไปหน้านั้น
    }

    // ทดลอง
       public function addexhibitor_test_get()
    {  
        /*แสดงหน้าเพิ่มข้อมูลEvent*/
        //return redirect('addmember');     วิ่งวนไปที่อยู่นั้น
        return view('demo'); //วื่งไปหน้านั้น
    }


        public function addexhibitor_post(Request $request)
    {
        $au = new authen();
        
        //Post Data
         $au->name = $request->name;
         $au->lname = $request->lname;
         $au->major = $request->major;
         $au->tel = $request->tel;
         $au->email = $request->email;
         $au->username = $request->username;
         $au->password = $request->password;
         $au->company = $request->company;
         $au->address = $request->address;
         $au->m_status = "exhibitor"; //ประกาศค่าให้เป็น exhibitor เลย

         $au->save();
         $au->touch();        

        return redirect('login');       

    }

        // ทดลอง
        public function addexhibitor_test_post(Request $request) 
    {
        $m = new authen();
        
        //Post Data
        
        $m->m_name = $request->m_name;
         $m->m_lname = $request->m_lname;
         $m->m_major = $request->m_major;
         $m->m_studentID = $request->m_studentID;
         $m->username = $request->username;
         $m->password = $request->password;
         $m->m_lv = $request->m_lv;
         $m->m_tel = $request->m_tel;
         $m->m_email = $request->m_email;
         $m->m_dep = $request->m_dep;
        // $m->m_status = $request->m_status;
         $m->m_status = "exhibitor"; //ประกาศค่าให้เป็น exhibitor เลย

         $m->m_image = $request->m_image;
        $m->m_company = $request->m_company;
         $m->m_company_address = $request->m_company_address;


        $m->save();
        $m->touch();        

        return redirect('index');
    }


       public function addmember_get()
    {  
        /*แสดงหน้าเพิ่มข้อมูลEvent*/
        //return redirect('addmember');     วิ่งวนไปที่อยู่นั้น
        return view('admin.addM'); //วื่งไปหน้านั้น
    }


        public function addmember_post(Request $request)
    {
        //$m = new member();
        $m = new authen();  //ทดลอง column authen
        
        //Post Data
         $m->m_name = $request->m_name;
         $m->m_lname = $request->m_lname;
         $m->m_major = $request->m_major;
         $m->m_studentID = $request->m_studentID;
         $m->username = $request->username;
         $m->password = $request->password;
         $m->m_lv = $request->m_lv;
         $m->m_tel = $request->m_tel;
         $m->m_email = $request->m_email;
         $m->m_dep = $request->m_dep;
         $m->m_status = $request->m_status;
         $m->m_image = $request->m_image;
         $m->is_enable ="y";


        $m->save();
        $m->touch();        

        return redirect('admin-home');
    }





}
