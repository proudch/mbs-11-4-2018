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

/////////////*MBS*/////////////////

//หน้าลงทะเบียน

Route::get('/regrister', 'MBSController@addexhibitor_get');
Route::post('/regrister', 'MBSController@addexhibitor_post');

//หน้าเข้าสู่ระบบ
Route::get('/login', 'MBSController@login_get');
Route::post('/login', 'MBSController@login_post');

//logout
Route::get('/logout', 'MBSController@logout_get');
////////////*INDEX*////////////////

//หน้าแรกของบุคคลทั่วไป
Route::get('/index', function () {
    return view('index/index');
});

//หน้างานนิทรรศการของบุคคลทั่วไป
Route::get('/event', function () {
    return view('index/event');
});

//ตัวอย่างงานนิทรรศการ
// Route::get('/event1', function () {
//     return view('index/ev1');
// });
Route::get('/event1', 'MBSController@event_get');


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



////////////*ADMIN*////////////////
//หน้าแรกของADMIN
// Route::get('/admin-home', function () {
//     return view('admin/adH');
//     });
Route::get('/admin-home', 'MBSController@home_get');


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

//หน้าตเพิ่มข้อมูลงานิทรรศการของADMIN
// Route::get('/admin-addevent', function () {
//     return view('admin/addE');
// });

Route::get('/admin-addevent', 'MBSController@addevent_get');
Route::post('/admin-addevent', 'MBSController@addevent_post');
Route::any('/admin-eventstatus', 'MBSController@eventStatus_get');

 
Route::any('/admin-updateevent', 'MBSController@editevent_post');
Route::any('/admin-editevent/{id}', 'MBSController@formupdate_event');




//หน้าตเพิ่มข้อมูลงานิทรรศการของADMIN

Route::get('/admin-addmember', 'MBSController@addmember_get');
Route::post('/admin-addmember', 'MBSController@addmember_post');
Route::any('/admin-memberstatus', 'MBSController@memberStatus_get');

Route::any('/admin-updatemember', 'MBSController@editmember_post');
Route::any('/admin-editmember/{id}', 'MBSController@formupdate_member');

Route::get('/deletemember/{id}', 'MBSController@deletemember_get');


////////////*MEMBER*////////////////

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

//หน้าโปรไฟล์ของExhibitor
Route::get('/demo', function () {
    return view('demo');
});

//หน้าโปรไฟล์ของExhibitor
Route::get('/admin-zonebooth', function () {
    return view('admin.adZB');
});

//หน้าโปรไฟล์ของExhibitor
Route::get('/admin-addzone', function () {
    return view('admin.addZ');
});

//หน้าโปรไฟล์ของExhibitor
Route::get('/admin-addzonebooth', function () {
    return view('admin.addZ');
});