<?php
// สร้าง Application instance.
$facebook = new facebook(array(
    'appId'  => '414830161885886', // appid ที่ได้จาก facebook
    'secret' => '52377fb41e97b22b385d6563a354313d', // app secret ที่ได้จาก facebook
    'cookie' => true, // อนุญาตใช้งาน cookie
));
// appId และ secret ดูวิธีการได้มาจาก 
// http://www.ninenik.com/สร้าง_comment_ด้วย_social_plugins_ใน_facebook_api_อย่างง่ายดาย-291.html


// ตรวจสอบสถานะการ login
$session = $facebook->getSession();

// สร้างตัวแปรสำหรับเก็บข้อมูลของสมาชิกเมื่อได้ทำการ login แล้ว
$me = null;

// ถ้ามีการ login ดึงข้อมูลสมาชิกที่ login มาเก็บที่ตัวแปร $me เป็น array
if ($session) {
    try {
        $uid = $facebook->getUser();
        $me = $facebook->api('/me');
    } catch (FacebookApiException $e) {
        error_log($e);
    }
}


if($me){ // กรณีเงื่อน login อยู่
    // เก็บค่า url ไว้ในตัวแปร $logoutUrl สำหรับ logout กรณีที่ได้ทำการ login อยู่
    $logoutUrl = $facebook->getLogoutUrl();
}else{  // กรณีเงื่อนไข logout
    // เก็บค่า url ไว้ในตัวแปร $loginUrl สำหรับ login กรณีที่ยังไม่ได้ login
    $loginUrl = $facebook->getLoginUrl();
}
?>