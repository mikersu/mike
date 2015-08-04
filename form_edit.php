
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
          <li><a href="form_edit.php">สมาชิก</a></li>
        </ol>
      </div>
      <div class="link-page">
        <ol class="breadcrumb">
          <li><a href="index.php">หน้าแรก</a></li>
          <li class="active"><a href="javascript:void(0)">สมาชิก</a></li>
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
            <li class="active"><a href="form_edit.php">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="logout.php">ออกจากระบบ</a></li>
          </ul>
        </nav>
      </div>        
    </div>

  </div><!-- endcol-3 -->

  <div class="col-md-9" style="padding: 5px 10px;">

    <h3 class="title" style="margin-top: 10px;">แก้ไขข้อมูลสมาชิก</h3>
    <div class="separator-2"></div>

    
    <div class="col-md-7 col-md-offset-2">

      <div class="form-block center-block  light-gray-bg border-clear">
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
              <input type="text" class="form-control" id="inputName" placeholder="5502457" required>
              <i class="fa fa-pencil form-control-feedback"></i>
              <span class="text-danger small">* ใช้รหัสนักศึกษาในการเข้าสู่ระบบ</span>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputPassword" class="col-sm-4 control-label">รหัสผ่าน <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword" placeholder="123456789" required>
              <i class="fa fa-lock form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputPassword" class="col-sm-4 control-label">ยืนยันรหัสผ่าน <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword" placeholder="123456789" required>
              <i class="fa fa-lock form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">คำนำหน้า <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <select name="reason" class="form-control">
                <option value="mr" >นาย</option>
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
                <option value="male">ชาย</option>
                <option value="female">หญิง</option>
              </select>             
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputfaculty" class="col-sm-4 control-label">คณะ/วิทยาลัย/หน่วยงาน <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputUserName" placeholder="วิทยาลัยวิศวกรรมสาสตร์" required>
              <i class="fa fa-user form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputEmail" class="col-sm-4 control-label">อีเมล์ <span class="text-danger small">*</span></label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="inputEmail" placeholder="test.p55@rsu.ac.th" required>
              <i class="fa fa-envelope form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="inputName" class="col-sm-4 control-label">กรอกรหัสในรูปภาพ <span class="text-danger small">*</span></label>

            <div class="col-sm-5">
              <img src="images/captcha.png">
              <input type="text" class="form-control" id="inputsecurity" placeholder="ZWVP4H" style="padding-top: 10px;" required>

            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4">
              <button type="submit" class="btn btn-group btn-primary btn-sm">บันทึกข้อมูล</button>
              <button type="submit" class="btn btn-group btn-default btn-sm">ยกเลิก</button>
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