
<?php include_once 'inc_header.php'; ?>

<!-- banner start -->
<!-- ================ -->
<div class="container" >
  <div class="row" >
    <!-- slideshow start -->
    <!-- ================ -->
    <div class="images-img">

      <img src="images/br.png" class="img-responsive">

    </div>
    <!-- slideshow end -->
    <div class="link-group">
      <div class="head">
        <ol class="breadcrumb" style="padding-left: 10px;">
          <li><a href="login.php">เข้าสู่ระบบ</a></li>
        </ol>
      </div>
      <div class="link-page">
        <ol class="breadcrumb">
          <li><a href="index.php">หน้าแรก</a></li>
          <li class="active"><a href="javascript:void(0)">เข้าสู่ระบบ</a></li>
        </ol>
      </div>
    </div>
    
  </div>
</div>
<!-- banner end -->

<!-- section start -->
<!-- ================ -->

<div class="container" style="background-color: #FCFCFC;">
  <div class="row">

   <div class="col-md-3">

    <div class="sidebar" style="padding: 5px 10px;">
      <div class="block clearfix">
        <h3 class="title">Menu</h3>
        <div class="separator-2"></div>
        <nav>
          <ul class="nav nav-pills nav-stacked">
            <li><a href="login.php">เข้าสู่ระบบ</a></li>
            <li class="active"><a href="forget_pass.php">ลืมรหัสผ่าน</a></li>
            <li><a href="form_register.php">สมัครสมาชิก</a></li>
          </ul>
        </nav>
      </div>        
    </div>

  </div><!-- endcol-3 -->

  <div class="col-md-9" style="padding: 5px 10px;">

    <h3 class="title" style="margin-top: 10px;">ลืมรหัสผ่าน</h3>
    <div class="separator-2"></div>
    <div class="col-md-offset-2 col-md-7">
    <div class="form-block center-block  light-gray-bg border-clear">
        <h4 class="title text-left" style="text-align: right;" >แบบฟอร์มสมัครสมาชิก ?</h4>
        <form class="form-horizontal" role="form">
          <div class="form-group has-feedback">
          <h5 class="title text-left">กรุณาป้อนอีเมล์ที่ลงทะเบียนไว้กับระบบ</h5>
            <label for="inputEmail" class="col-md-offset-1 col-sm-1 control-label">อีเมล์ <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail" placeholder="health@rsu.ac.th" required>
              <i class="fa fa-envelope form-control-feedback"></i>
            </div><br><br><br>
          <h5 class="title text-left">ระบบจะทำการส่งรหัสผ่านใหม่ไปยังอีเมล์ที่ลงทะเบียนไว้กับระบบ</h5>
          <h5 class="title text-left">กรุณาตรวจสอบอีเมล์ของท่านหลังจากทำรายการเสร็จเรียบร้อยแล้ว</h5>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4">
              <button type="submit" class="btn btn-group btn-primary btn-sm">ส่งรหัสผ่าน</button>
              <button type="submit" class="btn btn-group btn-default btn-sm">เข้าสู่ระบบ</button>
            </div>
          </div>
        </form>
      </div>


  </div><!-- endcol-9 -->



</div><!-- endrow -->
</div>  


</div>
<!-- section end -->


<?php include_once 'inc_footer.php'; ?>