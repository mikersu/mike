
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
            <li class="active"><a href="login.php">เข้าสู่ระบบ</a></li>
            <li><a href="forget_pass.php">ลืมรหัสผ่าน</a></li>
            <li><a href="form_register.php">สมัครสมาชิก</a></li>
          </ul>
        </nav>
      </div>        
    </div>

  </div><!-- endcol-3 -->

  <div class="col-md-9" style="padding: 5px 10px;">

    <h3 class="title" style="margin-top: 10px;">เข้าสู่ระบบ</h3>
    <div class="separator-2"></div>
    <div class="col-md-5 col-md-offset-3">
      <div class="content_detail">
        <form class="login-form margin-clear " style="padding-top: 50px; padding-bottom: 40px;">
          <div class="form-group has-feedback">
            <label class="control-label">Username</label>
            <input type="text" class="form-control" placeholder="">
            <i class="fa fa-user form-control-feedback"></i>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label">Password</label>
            <input type="password" class="form-control" placeholder="">
            <i class="fa fa-lock form-control-feedback"></i>
          </div>
          <button type="submit" class="btn btn-warning btn-lg">ลืมรหัสผ่าน</button>
          <button type="submit" class="btn btn-success btn-lg">เข้าสู่ระบบ</button>
        </form>
      </div>
    </div>

  </div><!-- endcol-9 -->



</div><!-- endrow -->
</div>  


</div>
<!-- section end -->


<?php include_once 'inc_footer.php'; ?>