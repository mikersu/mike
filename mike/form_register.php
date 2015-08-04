
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
          <li><a href="layout.php">หน้าแรก</a></li>
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
            <li><a href="forget_pass.php">ลืมรหัสผ่าน</a></li>
            <li class="active"><a href="form_register.php">สมัครสมาชิก</a></li>
          </ul>
        </nav>
      </div>        
    </div>

  </div><!-- endcol-3 -->

  <div class="col-md-9" style="padding: 5px 10px;">

    <h3 class="title" style="margin-top: 10px;">สมัครสมาชิก</h3>
    <div class="separator-2"></div>

    
    <div class="col-md-7 col-md-offset-2">

      <div class="form-block center-block  light-gray-bg border-clear">
        <h4 class="title text-left" style="padding-left: 80px;" >แบบฟอร์มสมัครสมาชิก</h4>
        <form class="form-horizontal" role="form">
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">เลือกรูป<span class="text-danger small">&nbsp;*</span></label>
            
            <div class="col-sm-5" style="padding-top: 7px;">
              <img src="images/avatar.jpg" style="padding-left: 50px;">
              <input type="file"  id="" style="padding-top: 7px;" name="" onchange="$(this).parent().find('span').html($(this).val().replace('', ''))">    
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">รหัสนักศึกษา/รหัสบุคลากร<span class="text-danger small">&nbsp;*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" placeholder="ป้อนรหัสนศ.580xxxx" required>
              <i class="fa fa-pencil form-control-feedback"></i>
              <span class="text-danger small">* ใช้รหัสนักศึกษาในการเข้าสู่ระบบ</span>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputPassword" class="col-sm-4 control-label">รหัสผ่าน <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword" placeholder="ป้อนรหัสผ่าน" required>
              <i class="fa fa-lock form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputPassword" class="col-sm-4 control-label">ยืนยันรหัสผ่าน <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword" placeholder="ยืนยันรหัสผ่าน" required>
              <i class="fa fa-lock form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">คำนำหน้า <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <select name="reason" class="form-control">
                <option value="select">กรุณาเลือก</option>
                <option value="mr">นาย</option>
                <option value="ms">น.ส.</option>
                <option value="mrs">นาง</option>
              </select>             
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">ชื่อ <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" placeholder="รักสุขภาพ" required>
              <i class="fa fa-pencil form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputLastName" class="col-sm-4 control-label">นามสกุล <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputLastName" placeholder="สวยงามมาก" required>
              <i class="fa fa-pencil form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">เพศ <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <select name="reason" class="form-control">
                <option value="select">กรุณาเลือก</option>
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
              </select>             
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputfaculty" class="col-sm-4 control-label">คณะ/วิทยาลัย/หน่วยงาน <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputUserName" placeholder="สำนักงานสวัสดิการสุขภาพ" required>
              <i class="fa fa-user form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputEmail" class="col-sm-4 control-label">อีเมล์ <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail" placeholder="health@rsu.ac.th" required>
              <i class="fa fa-envelope form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">กรอกรหัสในรูปภาพ <span class="text-danger small">*</span></label>

            <div class="col-sm-5">
              <img src="images/captcha.png">
              <input type="text" class="form-control" id="inputsecurity" placeholder="" style="padding-top: 10px;" required>

            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4">
              <button type="submit" class="btn btn-group btn-primary btn-sm">สมัครสมาชิก</button>
              <button type="submit" class="btn btn-group btn-default btn-sm">ลบค่าทั้งหมด</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>


</div><!-- endcol-9 -->



</div><!-- endrow -->
</div>  


</div>
<!-- section end -->


<?php include_once 'inc_footer.php'; ?>