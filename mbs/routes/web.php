<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});
Route::get('/adCh', function () {
    return view('admin.adCh');
});
Route::get('/adCh-Ev1', function () {
    return view('admin.adCh-Ev1');
});
Route::get('/adCh-F', function () {
    return view('admin.adCh-F');
});
Route::get('/exC', function () {
    return view('exhibitor.exC');
});
Route::get('/index', function () {
    return view('index.index');
});

Route::get('/admin-booking', function () {
    return view('admin/admin_event');
});

Route::get('/admin-boothstatus', function () {
    return view('admin/admin_zone_status');
});

Route::get('/showimg', function () {
    return view('showimg');
});
Route::get('/showimg', 'MBSController@showimg_get');


//ตัวอย่างจองบูธ
Route::get('/rent', function () {
    return view('index/r1');
});

//หน้ายืนยัน
Route::get('/confirm', function () {
    return view('index/confirm');
});
//ผู้ประกอบการ
Route::get('/exhibitor', function () {
    return view('index/exhibitor');
});

//ผู้ประกอบการ
Route::get('/event', function () {
    return view('index/event');
});
//ผู้ประกอบการ
Route::get('/event1', function () {
    return view('index/ev1');
});

Route::get('/contract', function () {
    return view('index/contract');
});

////////////*EXHIBITOR*////////////////
//หน้าแรกของExhibitor
Route::get('/exhibitor-home', function () {
    return view('exhibitor/exH');
});

//หน้างานนิทรรศการของExhibitor
Route::get('/exhibitor-event', function () {
    return view('exhibitor/exEv');
});

//หน้าโปรไฟล์ของExhibitor
Route::get('/exhibitor-profile', function () {
    return view('exhibitor/exPro');
});

//หน้าโปรไฟล์ของExhibitor
Route::get('/exhibitor-contract', function () {
    return view('exhibitor/exC');
});

//หน้าประวัติการจองของExhibitor
Route::get('/exhibitor-history', function () {
    return view('exhibitor/exHi');
});

//หน้างานนิทรรศการของADMIN
Route::get('/admin-check', function () {
    return view('admin/adCh');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของADMIN

Route::get('/admin-check-event1', function () {
    return view('admin/adCh-Ev1');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของADMIN-ว่าง
Route::get('/admin-check-event1-Free', function () {
    return view('admin/adCh-F');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของADMIN-รอชำระเงิน
Route::get('/admin-check-event1-wait', function () {
    return view('admin/adCh-W');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของADMIN-ชำระเงินแล้ว
Route::get('/admin-check-event1-payment', function () {
    return view('admin/adCh-P');
});

//หน้าแรกของMEMBER
Route::get('/member-home', function () {
    return view('member/memH');
});

//หน้าแรกของMEMBER
Route::get('/member-check', function () {
    return view('member/memCh');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของMEMBER
Route::get('/member-check-event1', function () {
    return view('member/memCh-Ev1');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของMEMBER-ว่าง
Route::get('/member-check-event1-Free', function () {
    return view('member/memCh-F');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของMEMBER-รอชำระเงิน
Route::get('/member-check-event1-wait', function () {
    return view('member/memCh-W');
});

//หน้าตรวจสอบสถานะของงานิทรรศการของMEMBER-ชำระเงินแล้ว
Route::get('/member-check-event1-payment', function () {
    return view('member/memCh-P');
});

//หน้าโปรไฟล์ของExhibitor
Route::get('/member-contract', function () {
    return view('member/memC');
});


/////////////*MBS*/////////////////

//regrister 13/3/2018 proud
Route::get('/regrister', 'MBSController@addExhibitor_get');
Route::post('/regrister', 'MBSController@addExhibitor_post');

//login 13/3/2018 proud
Route::get('/login', 'MBSController@login_get');
Route::post('/login', 'MBSController@login_post');

//logout
Route::get('/logout', 'MBSController@logout_get');



//หน้าหลักADMIN 13/3/2018 proud
Route::get('/admin-home', 'MBSController@Admin_home_get');

//หน้าเพิ่มข้อมูลADMIN 13/3/2018 proud 


// Route::get('/admin-adduser', 'MBSController@addUser_get');
// Route::post('/admin-addadmin', 'MBSController@addAdmin_post');

//ตรวจสอบข้อมูลADMIN 13/3/2018 proud 
Route::get('/admin-admin-status', 'MBSController@AdminStatus_get');

//แก้ไขข้อมูลADMIN 13/3/2018 proud 
Route::any('/admin-update-admin', 'MBSController@edit_AdminStatus_post');
Route::any('/admin-edit-admin/{id}', 'MBSController@formupdate_Admin');

//ลบข้อมูลADMIN 13/3/2018 proud 
Route::get('/deleteadmin/{id}', 'MBSController@deleteAdmin_get');






//หน้าเพิ่มข้อมูลUSER 13/3/2018 proud 
// Route::get('/techer-adduser', 'MBSController@addUser_get');
// Route::post('/techer-adduser', 'MBSController@addUser_post');

// //หน้าเพิ่มข้อมูลUSER 15/3/2018 proud 
// Route::get('/student-adduser', 'MBSController@addUser_get');
// Route::post('/student-adduser', 'MBSController@addUser_post');



//ตรวจสอบข้อมูลUSER 13/3/2018 proud 
Route::get('/admin-user-status', 'MBSController@UserStatus_get');

//แก้ไขข้อมูลUSER 13/3/2018 proud 
Route::any('/admin-update-user', 'MBSController@edit_UsernStatus_post');
Route::any('/admin-edit-user/{id}', 'MBSController@formupdate_User');

//ลบข้อมูลUSER 13/3/2018 proud 
Route::get('/deleteuser/{id}', 'MBSController@deleteUser_get');




//หน้าเพิ่มข้อมูลEVENT 13/3/2018 proud 
Route::get('/admin-addevent', 'MBSController@Admin_event_get');
Route::post('/admin-addevent', 'MBSController@addevent_post');

//ตรวจสอบข้อมูลEVENT 13/3/2018 proud 
Route::get('/admin-event-status', 'MBSController@eventStatus_get');

//แก้ไขข้อมูลEVENT 13/3/2018 proud 
Route::any('/admin-update-event', 'MBSController@edit_EventStatus_post');
Route::any('/admin-edit-event/{id}', 'MBSController@formupdate_Event');

//ลบข้อมูลEVENT 13/3/2018 proud 
Route::get('/deleteevent/{id}', 'MBSController@deleteEvent_get');








//ตรวจสอบข้อมูลEXHIBITOR 14/3/2018 proud  
Route::get('/admin-exhibitor-status', 'MBSController@ExhibitorStatus_get');

//แก้ไขข้อมูลEXHIBITOR 14/3/2018 proud 
Route::any('/admin-update-exhibitor', 'MBSController@edit_ExhibitornStatus_post');
Route::any('/admin-edit-exhibitor/{id}', 'MBSController@formupdate_Exhibitor');

//ลบข้อมูลEXHIBITOR 14/3/2018 proud 
Route::get('/deleteexhibitor/{id}', 'MBSController@deleteExhibitor_get');




//หน้าเพิ่มข้อมูลZONE 14/3/2018 proud 
Route::get('/admin-addevent', 'MBSController@Admin_event_get');
Route::post('/admin-addevent', 'MBSController@addevent_post');

//ตรวจสอบข้อมูลZONE 14/3/2018 proud  
Route::get('/admin-event-status', 'MBSController@eventStatus_get');

//แก้ไขข้อมูลZONE 14/3/2018 proud  
Route::any('/admin-update-event', 'MBSController@edit_EventStatus_post');
Route::any('/admin-edit-event/{id}', 'MBSController@formupdate_Event');

//ลบข้อมูลZONE 14/3/2018 proud 
Route::get('/deleteevent/{id}', 'MBSController@deleteEvent_get');





//ตรวจสอบข้อมูลZONE 14/3/2018 proud  
Route::get('/admin-addzone', 'MBSController@Admin_zone_get');
Route::post('/admin-addzone', 'MBSController@Admin_zone_post');



Route::get('/admin-adduser', 'MBSController@addUser_get');
Route::post('/admin-adduser', 'MBSController@addAdmin_post');


Route::post('/techer-adduser', 'MBSController@addUser_post');

Route::post('/student-adduser', 'MBSController@addUser_post');

