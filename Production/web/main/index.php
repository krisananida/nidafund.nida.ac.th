<?php
session_start();

$hiddenname = 'token-' . mt_rand();
$token = random_bytes(32);

$_SESSION['receiptrequest'] = $token;
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>กองทุนนิด้าพัฒนา</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="img-responsive" src="img/logo.png" alt="NIDA"> สถาบันบัณฑิตพัฒนบริหารศาสตร์</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">วัตถุประสงค์การระดมทุน</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">ขั้นตอนการบริจาค</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#billrequest">ขอใบเสร็จรับเงิน</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">ติดต่อเรา</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h2 class="mt-2">เมื่อการ "ให้" ยิ่งใหญ่กว่าการ "รับ"</h2>
            <h1 class="mt-2">
              <strong>
                ขอเชิญร่วมเป็นหนึ่งในความภาคภูมิใจ<br>
                ด้วยการบริจาคเงินสมทบ
              </strong>
            </h1>
            <h2 class="mt-2">"กองทุนนิด้าพัฒนา"</h2>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mt-5">
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="#billrequest">ขอใบเสร็จรับเงิน</a>
            </p>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2 class="section-heading text-white">วัตถุประสงค์การระดมทุน</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">
              เพื่อระดมทุนสนับสนุนการพัฒนาสถาบันในด้านต่างๆ สู่การเป็นสถาบันอุดมศึกษาระดับสากล (ตามปรัชญาของสถาบันที่ว่า “สร้างปัญญาเพื่อการเปลี่ยนแปลง” หรือ “WISDOM for Change” )  และเพื่อส่งเสริมการวิจัย การเรียนและการสอนของสถาบันเพื่อให้เป็นไปอย่างมีประสิทธิภาพและประสิทธิผลสูงสุด โดยผู้บริจาคสามารถนำใบเสร็จหักลดหย่อนภาษีได้ 2 เท่า
            </p>
            <!-- <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">ขั้นตอนการบริจาค</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-dollar-sign text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">1. โอนเงินผ่านธนาคาร</h3>
              <p class="text-muted mb-0">
                ผู้บริจาคสามารถโอนเงินผ่านเคาน์เตอร์ธนาคาร หรือ Mobile Banking ตามธนาคารและเลขที่บัญชีดังนี้
              </p>
              <p>...</p>
              <p class="text-muted mb-0">
                <li>ธนาคารกรุงเทพ จำกัด สาขาสถาบันบัณฑิตพัฒนบริหารศาสตร์ ชื่อบัญชี สพบ.กองทุนนิด้าพัฒนา
                  <br>เลขที่บัญชี 944-001349-9
              </p>
              <p class="text-muted mb-0">
                <li>ธนาคารกสิกรไทย จำกัด สาขาคลองจั่น ชื่อบัญชี สพบ.กองทุนนิด้าพัฒนา
                  <br>เลขที่บัญชี 040-2-58265-2
              </p>
              <p class="text-muted mb-0">
                <li>ธนาคารไทยพาณิชย์ จำกัด สาขาคลองจั่น ชื่อบัญชี สพบ.กองทุนนิด้าพัฒนา
                  <br>เลขที่บัญชี 113-223414-9
              </p>
              <p class="text-muted mb-0">
                <li>ธนาคารกรุงไทย จำกัด สาขาเทสโก้โลตัสบางกะปิ ชื่อบัญชี สพบ.กองทุนนิด้าพัฒนา
                  <br>เลขที่บัญชี 185-0-33379-3
              </p>
              <p class="text-muted mb-0">
                <li>ธนาคารกรุงศรีอยุธยา จำกัด สาขาบางกะปิ ชื่อบัญชี สพบ.กองทุนนิด้าพัฒนา
                  <br>เลขที่บัญชี 035-1-71793-7
              </p>
              <p class="text-muted mb-0">
                <li>ธนาคารทหารไทย จำกัด สาขาถนนสุขาภิบาล 3 ชื่อบัญชี สพบ.กองทุนนิด้าพัฒนา
                  <br>เลขที่บัญชี 144-2-17219-1
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">2. ขอใบเสร็จรับเงิน</h3>
              <p class="text-muted mb-0">หลังจากโอนเงินผ่านธนาคารแล้ว หากผู้บริจาคมีความประสงค์จะขอใบเสร็จทางไปรษณีย์เพื่อใช้สำหรับลดหย่อนภาษี </p>
              <p class="text-muted mb-0">
                <li>ให้ส่งหลักฐานการโอนเงิน พร้อมระบุชื่อ-นามสกุลของผู้ที่จะให้ออกใบเสร็จรับเงิน ที่อยู่ในการจัดส่งใบเสร็จทางไปรษณีย์ เบอร์โทรศัพท์ที่สามารถติดต่อได้ไปยัง  Line ID : nidafund  หรือ  email : nidafund@nida.ac.th
              </p>
              <p class="text-muted mb-0">
                <li>หรือ คลิกที่ "แบบฟอร์มขอใบเสร็จรับเงิน" กรอกข้อมูลพร้อมแนบไฟล์หลักฐานการโอนเงิน
              </p>
              <p class="text-muted mb-0">
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#billrequest">แบบฟอร์มขอใบเสร็จรับเงิน</a>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">3. รอรับใบเสร็จรับเงิน</h3>
              <p class="text-muted mb-0">หลังจากสถาบันตรวจสอบรายละเอียดและหลักฐานการบริจาคแล้ว สถาบันจะจัดส่งใบเสร็จรับเงินทางไปรษณีย์แบบลงทะเบียน ไปยังที่อยู่ตามที่ท่านระบุไว้ ภายหลังจากที่ได้รับข้อมูลประมาณ 2-10 วันทำการ</p>
            <!--
              <p class="text-muted mb-0">...</p>
              <p class="text-muted mb-0">หากไม่ได้รับใบเสร็จรับเงิน กรุณาติดต่อกลับที่ ... โทร...</p>
            -->
            </div>
          </div>
          <!--
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
        -->
        </div>
      </div>
    </section>


    <section class="bg-light" id="billrequest">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto ">
            <h2 class="section-heading text-center">แบบฟอร์มขอใบเสร็จรับเงิน</h2>
            <hr class="my-4">
            <div class="container">
              <form id="reqform">
                <p class="text-center">กรุณากรอกรายละเอียดการบริจาคพร้อมแนบไฟล์หลักฐานการโอนเงิน แล้วคลิกที่ปุ่มส่งข้อมูลด้านล่าง</p>

                <!-- ข้อมูลส่วนตัวผู้บริจาค -->
                <div class="border p-2 bg-primary text-white">
                  <h4>ข้อมูลส่วนตัวผู้บริจาค</h4>
                </div>
                <div class="border p-3">
                  <!--
                  <div class="form-group">
                    <label for="donatorprefixname">คำนำหน้าชื่อ :</label>
                    <select id="donatorprefixid" class="form-control" name="donatorprefixid">
                      <option value="01">นาย</option>
                      <option value="02">นาง</option>
                      <option value="03">นางสาว</option>
                    </select>
                  </div>
                  -->
                  <div class="form-group">
                    <label for="fname">ชื่อ : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <br>
                    <input type="radio" class="radio" id="prefixid01" name="prefixid" value="01"> นาย
                    <input type="radio" class="radio" id="prefixid02" name="prefixid" value="02"> นาง
                    <input type="radio" class="radio" id="prefixid03" name="prefixid" value="03"> นางสาว
                    <input type="radio" class="radio" id="prefixid99" name="prefixid" value="99"> อื่นๆ
                    <input type="text" class="form-control" id="prefixname" placeholder="ระบุคำนำหน้าชื่อ" name="prefixname" maxlength="50">
                    <br>
                    <input type="text" class="form-control" id="fname" placeholder="ระบุชื่อ" name="fname" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="lname">นามสกุล : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="lname" placeholder="ระบุนามสกุล" name="lname" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="idcard">เลขบัตรประชาชน:</label>
                    <input type="text" class="form-control" id="idcard" placeholder="ระบุเลขบัตรประชาชน" name="idcard" maxlength="13">
                  </div>
                  <div class="form-group">
                    <label for="email">Email : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="email" class="form-control" id="email" placeholder="ระบุ email address" name="email" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="phone">โทรศัพท์ (บ้าน) :</label>
                    <input type="text" class="form-control" id="phone" placeholder="ระบุหมายเลขโทรศัพท์ (บ้าน)" name="phone" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="mobile">โทรศัพท์ (มือถือ) : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="mobile" placeholder="ระบุหมายเลขโทรศัพท์ (มือถือ)" name="mobile" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="address">ที่อยู่ : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="address" placeholder="ระบุที่อยู่จัดส่งใบเสร็จ" name="address" maxlength="100">
                  </div>
                  <div class="form-group">
                    <label for="subdistrict">แขวง/ตำบล : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="subdistrict" placeholder="ระบุ แขวง/ตำบล" name="subdistrict" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="district">เขต/อำเภอ : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="district" placeholder="ระบุ เขต/อำเภอ" name="district" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="province">จังหวัด : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <select id="province" class="form-control" name="province">
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="postalcode">รหัสไปรษณีย์ : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="postalcode" placeholder="ระบุรหัสไปรษณีย์" name="postalcode" maxlength="10">
                  </div>
                  <div class="form-group">
                    <label for="amount">จำนวนเงินบริจาค (บาท) : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="number" class="form-control" id="amount" placeholder="ระบุจำนวนเงินบริจาค (บาท)" name="amount">
                  </div>
                  <div class="form-group">
                    <label for="evidence">หลักฐานการชำระเงิน (Pay-in/Slip) : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="file" class="form-control-file" accept="image/*,application/pdf" id="evidence" name="evidence">
                  </div>
                </div>
                <hr>

                <!-- ข้อมูลในการออกใบเสร็จรับเงิน -->
                <div class="border p-3 bg-primary text-white">
                  <h3>ข้อมูลในการออกใบเสร็จรับเงิน</h3>
                </div>
                <div class="form-group border p-3">
                  <input type="radio" id="receiptaddresstype01" name="receiptaddresstype" value="01"> ใช้ข้อมูลเดียวกับข้อมูลส่วนตัวผู้บริจาค
                  <br>
                  <input type="radio" id="receiptaddresstype02" name="receiptaddresstype" value="02"> ใช้ข้อมูลใหม่ ออกใบเสร็จรับเงินในนาม
                </div>
                <div id="receiptinfo" class="border p-3">
                  <div class="form-group">
                    <input type="radio" class="radio" id="receiptnametype01" name="receiptnametype" value="01"> บุคคลธรรมดา
                      <p class="from-group ml-4 mt-2">
                        <label for="receiptfname">ชื่อ : <i class="fas fa-asterisk" style="color:red"></i></label>
                        <br>
                        <input type="radio" class="radio" id="receiptprefixid01" name="receiptprefixid" value="01"> นาย
                        <input type="radio" class="radio" id="receiptprefixid02" name="receiptprefixid" value="02"> นาง
                        <input type="radio" class="radio" id="receiptprefixid03" name="receiptprefixid" value="03"> นางสาว
                        <input type="radio" class="radio" id="receiptprefixid99" name="receiptprefixid" value="99"> อื่นๆ
                        <input type="text" class="form-control" id="receiptprefixname" placeholder="ระบุคำนำหน้าชื่อ" name="receiptprefixname" maxlength="50">
                        <br>
                        <input type="text" class="form-control" id="receiptfname" placeholder="ระบุชื่อ" name="receiptfname" maxlength="50">
                        <label for="receiptlname">นามสกุล : <i class="fas fa-asterisk" style="color:red"></i></label>
                        <input type="text" class="form-control" id="receiptlname" placeholder="ระบุนามสกุล" name="receiptlname" maxlength="50">
                      </p>
                      <input type="radio" class="radio" id="receiptnametype02" name="receiptnametype" value="02"> นิติบุคคล
                      <p class="from-group ml-4 mt-2">
                        <label for="receiptcorgname">ชื่อนิติบุคคล : <i class="fas fa-asterisk" style="color:red"></i></label>
                        <input type="text" class="form-control" id="receiptorgname" placeholder="ระบุชื่อนิติบุคคล" name="receiptorgname" maxlength="50">
                      </p>
                  </div>
                  <div class="form-group">
                    <label for="receiptemail">Email : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="email" class="form-control" id="receiptemail" placeholder="ระบุ email address" name="receiptemail" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="receiptphone">โทรศัพท์ (บ้าน):</label>
                    <input type="text" class="form-control" id="receiptphone" placeholder="ระบุหมายเลขโทรศัพท์ (บ้าน)" name="receiptphone" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="receiptmobile">โทรศัพท์ (มือถือ) : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="receiptmobile" placeholder="ระบุหมายเลขโทรศัพท์ (มือถือ)" name="receiptmobile" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="receitpaddress">ที่อยู่ : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="receiptaddress" placeholder="ระบุที่อยู่จัดส่งใบเสร็จ" name="receiptaddress" maxlength="100">
                  </div>
                  <div class="form-group">
                    <label for="receiptsubdistrict">แขวง/ตำบล : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="receiptsubdistrict" placeholder="ระบุ แขวง/ตำบล" name="receiptsubdistrict" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="receiptdistrict">เขต/อำเภอ : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="receiptdistrict" placeholder="ระบุ เขต/อำเภอ" name="receiptdistrict" maxlength="50">
                  </div>
                  <div class="form-group">
                    <label for="receiptprovince">จังหวัด : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <select id="receiptprovince" class="form-control" name="receiptprovince">
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="receiptpostalcode">รหัสไปรษณีย์ : <i class="fas fa-asterisk" style="color:red"></i></label>
                    <input type="text" class="form-control" id="receiptpostalcode" placeholder="ระบุรหัสไปรษณีย์" name="receiptpostalcode" maxlength="10">
                  </div>
                </div>
                <hr>
                <div class="border p-3 bg-primary text-white">
                  <h4>เงื่อนไขการบริจาค:</h4>
                </div>
                <div class="border p-3">
                  <li>สถาบันจะทำการออกใบเสร็จรับเงิน หลังจากที่ได้ทำการตรวจสอบเอกสารหลักฐานการโอนเงินบริจาคเรียบร้อยแล้ว ดังนั้น การลงวันที่ในใบเสร็จรับเงินจะลงวันที่หลังจากวันที่ผู้บริจาคโอนเงินแล้วประมาณ 2-10 วันทำการ จากนั้นสถาบันจะดำเนินการจัดส่งใบเสร็จให้กับผู้บริจาคภายใน 2-3 สัปดาห์ <br>
                  <li>หากไม่ได้รับใบเสร็จรับเงิน ผู้บริจาคสามารถติดต่อสอบถามได้ที่ กองทุนนิด้าพัฒนา กลุ่มงานสื่อสารองค์การและกิจกรรมเพื่อสังคม โทร. 027273453, 027273289  หรือ line ID : nidafund หรือ email: nidafund@nida.ac.th
                </div>
                <div class="form-group m-3">
                  <div class="text-center">
                    <a class="btn btn-warning btn-xl" onclick="validateData()">ส่งข้อมูลบริจาค</a
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">กลุ่มงานสื่อสารองค์การและกิจกรรมเพื่อสังคม</h2>
            <hr class="my-4">
            <p class="mb-5">ชั้น G อาคารนวมินทราธิราช สถาบันบัณฑิตพัฒนบริหารศาสตร์ 118 ถนนเสรีไทย แขวงคลองจั่น เขตบางกะปิ กรุงเทพฯ 10240</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p><a href="tel:027273453">0-2727-3453, <a href="tel:027273289">0-2727-3289</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <p><a href= "http://line.me/ti/p/~nidafund" target="_blank"><img src= "http://biz.line.naver.jp/line_business/img/btn/addfriends_en.png" alt= "Add Friend" width= "100" border= "0" />
            <p>Line ID : nidafund</p></a></p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:nidafund@nida.ac.th">nidafund@nida.ac.th</a>
            </p>
          </div>
          <!--
          <div class="col-lg-4 mr-auto text-center">
            <p>
                <img class="img-responsive" src="img/line-c.png" alt="NIDA"></img>
            </p>
          </div>
          -->
        </div>
      </div>
    </section>


    <!-- Modal -->


    <div id="modalConfirm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmModalLongTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                  <h4 class="modal-title">ยืนยันการขอใบเสร็จรับเงิน</h4>
                </div>
                <div class="modal-body">
                  โปรดตรวจสอบข้อมูลในการออกใบเสร็จรับเงิน
                  <div id="valid_name"></div>
                  <div id="valid_address"></div>
                  <div id="valid_subdistrict"></div>
                  <div id="valid_district"></div>
                  <div id="valid_province"></div>
                  <div id="valid_postalcode"></div>
                  <div id="valid_phone"></div>
                  <div id="valid_mobile"></div>
                  <div id="valid_email"></div>
                <!--
                  <div id="valid_district"></div>
                  <div id="valid_province"></div>
                  <div id="valid_postalcode"></div>
                -->
                  <div id="valid_amount"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnConfirm" class="btn btn-default">ยืนยัน</button>
                    <button type="button" id="btnCancel" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modalSuccess" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                     <h4 class="modal-title">ขอบคุณที่ร่วมบริจาค</h4>
                </div>
                <div class="modal-body">
                  <p id="receivename"></p>
                  <p>สถาบันได้รับเอกสารของท่านเรียบร้อยแล้ว และจะดำเนินการออกใบเสร็จรับเงิน พร้อมจัดส่งเอกสารทางไปรษณีย์ตามที่อยู่ที่ท่านแจ้งไว้</p>
                  <p>ขอขอบคุณสำหรับความอนุเคราะห์ร่วมบริจาค</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                </div>
            </div>
        </div>
    </div>


  <!-- // Modal -->




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script src="js/script.js"></script>
  </body>

</html>
