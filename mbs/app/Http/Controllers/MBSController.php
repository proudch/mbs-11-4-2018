<?php

namespace App\Http\Controllers;

//Model

//ผู้ใช้งาน
use App\admin; 
use App\user_data; 
use App\exhibitor; 
use App\authen; 
use App\department; 
use App\major; 


//งานนิทรรศการ
use App\event; 
use App\booth; 
use App\zone; 
use App\document; 
use App\eventImage; 
use App\plan; 


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use Input;
use Session;
use Storage;
use DB;
class MBSController extends Controller
{

           //เข้าสู่หน้าลงทะเบียน 13/03/2018 proud
 public function Admin_home_get()
 {  
    /*แสดงหน้าเพิ่มข้อมูลEvent*/
        //return redirect('addmember');     วิ่งวนไปที่อยู่นั้น
        return view('admin/admin_home'); //วื่งไปหน้านั้น
    }

           //เข้าสู่หน้าลงทะเบียน 13/03/2018 proud
    public function addExhibitor_get()
    {  
        /*แสดงหน้าเพิ่มข้อมูลEvent*/
        //return redirect('addmember');     วิ่งวนไปที่อยู่นั้น
        return view('regrister'); //วื่งไปหน้านั้น
    }


        //Exhibitor สมัครสมาชิก 13/03/2018 proud
    public function addExhibitor_post(Request $request)
    {
        $ex = new exhibitor();
        
        //Post Data
        $ex->name = $request->name;
        $ex->lname = $request->lname;
        $ex->tel = $request->tel;
        $ex->email = $request->email;
        $ex->username = $request->username;
        $ex->password = $request->password;
        $ex->company = $request->company;
        $ex->address = $request->address;
         $ex->role = "Exhibitor"; //ประกาศค่าให้เป็น exhibitor เลย
         $ex->is_enable ='n';

         $ex->save();
         $ex->touch();        

         return redirect('login');       

     }


    //ตรวจสอบสถานะUser 14/3/2018 proud
     public function ExhibitorStatus_get()
     {  
         $exs = exhibitor::all();


            // return view('admin.adH', compact('aus','evs'));    
         return view('admin/admin_exhibitor_status', compact('exs'));  
     }

    //แก้ไขUser 14/3/2018 proud
     public function edit_ExhibitornStatus_post(Request $request)
     {  

        $ex =  exhibitor::where('id','=',$request->id)->first();
        

        
        //Post Data
        $ex->name = $request->name;
        $ex->lname = $request->lname;
        $ex->tel = $request->tel;
        $ex->email = $request->email;
        $ex->username = $request->username;
        $ex->password = $request->password;
        $ex->company = $request->company;
        $ex->address = $request->address;
         $ex->role = "EXHIBITOR"; //ประกาศค่าให้เป็น exhibitor เลย
         $ex->is_enable  = $request->is_enable;

         $ex->save();
         $ex->touch();        

         return view('admin/admin_home');
     }

    //อัพเดต User 14/3/2018 proud
     public function formupdate_Exhibitor($id)
     {  

      $ex = exhibitor::where('id',$id)->first();
      return view('admin.admin_edit_exhibitor', compact('ex'));
      
  }

     //ลบUser 14/03/2018 proud
  public function deleteExhibitor_get($id)
  {

    DB::beginTransaction();


    $ex = exhibitor::where('id',$id)->first();  
    $ex->delete();

    DB::commit();

    $exs = admin::all();
        // return view('admin/admin_exhibitor_status', compact('exs'));   
         // return view('admin/admin_home', compact('exs'));   
    return redirect('admin-exhibitor-status');

}




     //เข้าสู่หน้าlogin
public function login_get()
{  
    /*แสดงหน้าเพิ่มข้อมูลEvent*/
        //return redirect('addmember');     วิ่งวนไปที่อยู่นั้น
        return view('login'); //วื่งไปหน้านั้น
    }


    public function login_post(Request $request)
    {
        // echo "test"; echo "<br/>";
        // echo $request->username; echo "<br/>";
        // echo $request->password; echo "<br/>";
        // exit(0);

        //n = 0
        //y = 1

        if ( $lg = admin::where('username',$request->username)->where('password',$request->password)->where('is_enable','y')->first()) {

             Session::put('username',$request->username); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที
            Session::put('role',$request->role); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที


            $lg->role == "ADMIN";

            return redirect('admin-home');
        }

        else if ( $lg = user_data::where('username',$request->username)->where('password',$request->password)->where('is_enable','y')->first()) {

            Session::put('username',$request->username); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที
            Session::put('role',$request->role); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที


            $lg->role == "USER";

            return redirect('member-home');
        }

        else if ( $lg = exhibitor::where('username',$request->username)->where('password',$request->password)->where('is_enable','y')->first()) {

            Session::put('username',$request->username); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที
            Session::put('role',$request->role); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที


            $lg->role == "EXHIBITOR";

            return redirect('exhibitor-home');
        }
        else {
            return redirect('login');

            alert("Hello! I am an alert box!");

        }


       // $lg = admin::where('username',$request->username)->where('password',$request->password)->where('is_enable','y')->first(); //ให้login ได้ 
       // $lg = user_data::where('username',$request->username)->where('password',$request->password)->where('is_enable','y')->first(); //ให้login ได้ 
       // $lg = exhibitor::where('username',$request->username)->where('password',$request->password)->where('is_enable','y')->first(); //ให้login ได้ 
       //  // var_dump($a);   
       //  // exit(0);     

       //  Session::put('username',$request->username); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที
       //  Session::put('role',$request->role); //;ตัวแปรข้ามหน้าจอ ลอยอยู่บน broswer ประมาณ 20 นาที

       //  if ($lg->role == "USER") {

       //      return redirect('member-home');
       //  }

       //  else if ($lg->role == "EXHIBITOR") {

       //      return redirect('exhibitor-home');
       //  }

       //  else if ($lg->role == "ADMIN") {

       //      return redirect('admin-home');
       //  }

       //  else {return redirect('login');}



    }

    public  function logout_get(Request $request)
    {
        $request->session()->forget('username');
        $request->session()->forget('role');

        return redirect('login');

    }



 	//เพิ่มข้อมูลADMIN 13/3/2018 proud
    public function addUser_get()
    {  
            //$type = 'admin';
        $type = 'student';
         return view('admin/admin_add_user',compact('type')); //วื่งไปหน้านั้น
     }


	//เพิ่มข้อมูลADMIN 13/3/2018 proud
     public function addAdmin_post(Request $request)
     {



        //$m = new member();
        $am = new admin();  //เก็บค่าใน admins
        
        //Post Data
        $am->status = $request->rad_status;
        $am->name = $request->name;
        $am->lname = $request->lname;
        $am->username = $request->username;
        $am->password = $request->password;
        $am->tel = $request->tel;
        $am->email = $request->email;
        $am->role = $request->role;
        $am->is_enable ='y';


        $am->save();
        $am->touch();        

        return view('admin/admin_home');
    }



	//ตรวจสอบสถานะADMIN 13/3/2018 proud
    public function AdminStatus_get()
    {  
     $ams = admin::all();


            // return view('admin.adH', compact('aus','evs'));    
     return view('admin/admin_admin_status', compact('ams'));  
 }

	//แก้ไขADMIN 13/3/2018 proud
 public function edit_AdminStatus_post(Request $request)
 {  

    $am =  admin::where('id','=',$request->id)->first();

    $am->status = $request->rad_status;
    $am->name = $request->name;
    $am->lname = $request->lname;
    $am->username = $request->username;
    $am->password = $request->password;
    $am->tel = $request->tel;
    $am->email = $request->email;
    $am->role = $request->role;
    $am->is_enable ='y';


    $am->save();
    $am->touch();           



    return view('admin/admin_home');
}

	//อัพเดต ADMIN 13/3/2018 proud
public function formupdate_Admin($id)
{  

  $am = admin::where('id',$id)->first();
  return view('admin.admin_edit_admin', compact('am'));

}

     //เเพิ่มข้อมูลงาน
public function deleteAdmin_get($id)
{

    DB::beginTransaction();


    $am = admin::where('id',$id)->first();  
    $am->delete();

    DB::commit();

    $ams = admin::all();
        // return view('admin/admin_admin_status', compact('ams'));    
    return redirect('admin-admin-status');
}








	//เพิ่มข้อมูลUser 13/3/2018 proud
public function addUser_post(Request $request)
{
        //$m = new member();
        $us = new user_data();  //เก็บค่าใน user_data
        
        //Post Data
        $us->status = $request->rad_status ;
        $us->name = $request->name;
        $us->lname = $request->lname;
        $us->username = $request->username;
        $us->password = $request->password;
        $us->tel = $request->tel;
        $us->email = $request->email;
        $us->major_id = $request->major_id;
        $us->studentID = $request->studentID;
        $us->lv = $request->lv;
        $us->dep_id = $request->dep_id;
        $us->role = $request->role;
        $us->is_enable ='y';

            //user_datas 13/3/2018 proud



        $us->save();
        $us->touch();        

        return view('admin/admin_home');
    }

	//ตรวจสอบสถานะUser 13/3/2018 proud
    public function UserStatus_get()
    {  
     $uses = user_data::all();


            // return view('admin.adH', compact('aus','evs'));    
     return view('admin/admin_user_status', compact('uses'));  
 }

	//แก้ไขUser 13/3/2018 proud
 public function edit_UsernStatus_post(Request $request)
 {  

    $us =  user_data::where('id','=',$request->id)->first();



        //Post Data
    $us->status = $request->rad_status;
    $us->name = $request->name;
    $us->lname = $request->lname;
    $us->username = $request->username;
    $us->password = $request->password;
    $us->tel = $request->tel;
    $us->email = $request->email;
    $us->major_id = $request->major_id;
    $us->studentID = $request->studentID;
    $us->lv = $request->lv;
    $us->dep_id = $request->dep_id;
    $us->role = $request->role;
    $us->is_enable ='y';

            //user_datas 13/3/2018 proud



    $us->save();
    $us->touch();        

    return view('admin/admin_home');
}

	//อัพเดต User 13/3/2018 proud
public function formupdate_User($id)
{  

  $us = user_data::where('id',$id)->first();
  return view('admin/admin_edit_user', compact('us'));

}

     //ลบUser
public function deleteUser_get($id)
{

    DB::beginTransaction();


    $us = user_data::where('id',$id)->first();  
    $us->delete();

    DB::commit();

    $uses = admin::all();
        // return view('admin/admin_user_status', compact('uses')); 
    return redirect('admin-admin-status');   

}





    //Event 13/3/2018 proud

public function Admin_event_get()
{  


         return view('admin/admin_add_event'); //วื่งไปหน้านั้น
     }




    //ตรวจสอบสถานะEvent 13/3/2018 proud
    public function eventStatus_get(Request $request)
    {  
     $evs = event::all();


            // return view('admin.adH', compact('aus','evs'));    
     return view('admin/admin_event_status', compact('evs'));  
 }

        //แก้ไขEvent 13/3/2018 proud
 public function edit_EventStatus_post(Request $request)
 {  

    $ev =  event::where('id','=',$request->id)->first();



        //Post Data
    $ev->ev_name = $request->ev_name;
    $ev->ev_caption = $request->ev_caption;
    $ev->ev_dateS = $request->ev_dateS;
    $ev->ev_dateF = $request->ev_dateF;
    $ev->ev_dateRS = $request->ev_dateRS;
    $ev->ev_dateRF = $request->ev_dateRF;


    $ev->save();
    $ev->touch();        

    return view('admin/admin_home');
}

    //อัพเดต User 13/3/2018 proud
public function formupdate_Event($id)
{  

   $ev = event::where('id',$id)->first();
   return view('admin/admin_edit_event', compact('ev'));

}

     //ลบUser
public function deleteEvent_get($id)
{

    DB::beginTransaction();


    $ev = event::where('id',$id)->first();  
    $ev->delete();

    DB::commit();

    $evs = event::all();
        // return view('admin/admin_event_status', compact('evs'));  
    return redirect('admin-admin-status');  

}


    //Event 13/3/2018 proud

public function Admin_zone_get()
{  


         return view('admin/admin_add_zone'); //วื่งไปหน้านั้น
     }


        //แก้ไขEvent 13/3/2018 proud
        public function Admin_zone_post(Request $request)
        {  
        //var_dump($request->result);exit(0);

            foreach ($request->result as $res) {

                $zo = new zone();
                $zo->name = $request->zname;
                $zo->name = $res;


                $zo->touch();
                $zo->save();
            }

            $z = zone::where('name',$request->zname)->first();
            $zid = $z->id;
            $zname = $request->zname;


                $bt = new booth();
                $bt->name = $resB;
                $bt->zoneid = $zid;
            //boothAmount_zz1_bb1
            //$bt->size = Input::get('boothSize_'.$zname.'_'.$resB);
            //$name = $request->input('products.0.name');
                $bt->size = Input::get('boothAmount_'.$bt->id);
                $bt->price = Input::get('boothSize_'.$bt->id);
             //$bt->price = $request->boothAmount_;
             //$bt->size = $request->boothSize_;
                // echo $bt->price; exit(0);
                // echo $bt->size; exit(0);


                $bt->touch();
                $bt->save();
            }




        public function upload_file($path, $file)
        {
            if (Input::hasFile($file)) {
        //if ($request->hasFile('upload_file')) {

                $file_input = Input::file($file);
                $file_name = $file_input->getClientOriginalName();
                $file_extension = $file_input->getClientOriginalExtension();            
            //$file->move($path , $file_name.'.'.$file_extension);
            $file_input->move( public_path($path), $file_name);    //OK

            echo 'Uploaded';            
        }
        else {
            echo 'Not Uploaded';
        } 
    }

//27/3/2018 PROUD
    public function addevent_post(Request $request)
    {

        $ev = new event();  //เก็บค่าใน events
        
        //Post Data
        $ev->ev_name = $request->ev_name;
        $ev->ev_caption = $request->ev_caption;
        $ev->ev_dateS = $request->ev_dateS;
        $ev->ev_dateF = $request->ev_dateF;
        $ev->ev_dateRS = $request->ev_dateRS;
        $ev->ev_dateRF = $request->ev_dateRF;

        $img_path ="";
        $doc_path ="";
        $plan_path ="";

        $img_file_name ="";
        $doc_file_name ="";
        $plan_file_name ="";

        if (Input::hasFile('image')) {
            $file_input = Input::file('image');
            $img_path = '/../../_mbs/_image/';

            
            $img_file_name = $file_input->getClientOriginalName();
            $file_extension = $file_input->getClientOriginalExtension();            
            //$file->move($path , $file_name.'.'.$file_extension);
            $file_input->move(public_path($img_path), $img_file_name);    //OK

            // $this->upload_file(public_path($img_path), 'image');

        }

        $img = new eventImage();
        $img->name = $request->image;

        // $zo->file = '/../../_file_upload/coffe.jpg';
        $img->file = $img_path.$img_file_name;
        $img->description = "รูปภาพของงานนิทรรศการ";


        $img->touch();
        $img->save();

        $img_dummy = $img->id;
       // $doc_first = document::where('name',$doc_dummy->name)
       //             ->where('description',$doc_dummy->description)->first();


        if (Input::hasFile('document')) {
            $file_input = Input::file('document');
            $doc_path = '/../../_mbs/_document/';




            $doc_file_name = $file_input->getClientOriginalName();
            $file_extension = $file_input->getClientOriginalExtension();            
                    //$file->move($path , $file_name.'.'.$file_extension);
                    $file_input->move(public_path($doc_path), $doc_file_name);    //OK


        // Post Data
                    $doc = new document();
                    $doc->name = $request->document;

            // $zo->file = '/../../_file_upload/coffe.jpg';
                    $doc->file = $doc_path.$doc_file_name;
                    $doc->description = "เอกสารของงานนิทรรศการ";


                    $doc->touch();
                    $doc->save();

                    $doc_dummy = $doc->id;

       // $doc_first = document::where('name',$doc_dummy->name)
       //             ->where('description',$doc_dummy->description)->first();
                }


                if (Input::hasFile('plan')) {
                    $file_input = Input::file('plan');
                    $plan_path = '/../../_mbs/_plan/';



                    
                    $plan_file_name = $file_input->getClientOriginalName();
                    $file_extension = $file_input->getClientOriginalExtension();            
                    //$file->move($path , $file_name.'.'.$file_extension);
                    $file_input->move(public_path($plan_path), $plan_file_name);    //OK


        // Post Data
                    $pl = new plan();
                    $pl->name = $request->plan;

            // $zo->file = '/../../_file_upload/coffe.jpg';
                    $pl ->file = $plan_path.$plan_file_name;
                    $pl ->description = "รูปแปลนของงานนิทรรศการ";
              // $img->extention = $request->;


                    $pl->touch();
                    $pl->save();

                    $pl_dummy = $pl->id;

      // $pl_first = plan::where('name',$pl_dummy->name)
      //              ->where('description',$pl_dummy->description)->first();
                }
        // $ev->document_id = $img_first;
        // $ev->image_id = $doc_first;
        // $ev->plan_id = $pl_first;

        $ev->document_id = $doc_dummy;
        $ev->image_id = $img_dummy;
        // $ev->plan_id = $pl_dummy; 
        $ev->plan_id = 3;       
        $ev->booth_id = 4;
        $ev->zone_id = 5;

        $ev->save();
        $ev->touch();  


                return redirect('admin-addevent');
            }



       


  //ทดสอบโชว์ภาพ
    public function showimg_get(Request $request)
    {  
     $imgs = eventImage::all();
     $docs = document::all();

            // return view('admin.adH', compact('aus','evs'));    
     return view('showimg', compact('imgs', 'docs'));  
 }

  }