<?php
    // Include_once header.php 
    include_once('Themes/header.php');
?>
    <!-- Section Content -->
    <div class="container-fluid"> <!-- Container -->
        <div class="row"> <!-- row -->
            <div class="col-lg-3 col-md-3 col-sm-12"></div> <!-- end -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-login">
                    <h2 class="form-title center">เข้าสู่ระบบ</h2>
                    <?php if($response == "401") { ?>
                    <div class="alert alert-danger" role="alert">กรุณากรอกชื่อผู้ใช้งาน</div>
                    <?php } else if ($response == "402") { ?>
                    <div class="alert alert-danger" role="alert">กรุณากรอกรหัสผ่าน</div>
                    <?php } else if ($response == "201") { ?>
                    <div class="alert alert-danger" role="alert">ชื่อผู้ใช้งานไม่ถูกต้อง!</div>
                    <?php } else if ($response == "202") { ?>
                    <div class="alert alert-danger" role="alert">รหัสผ่านไม่ถูกต้อง</div>
                    <?php } ?>   
                    <div class="card-box">
                        <div class="card-box-sub">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="Username">ชื่อผู้ใช้งาน</label>
                                    <input type="text" class="form-control" name="Username" aria-describedby="UsernameHelp" placeholder="กรอกชื่อผู้ใช้งาน">
                                    <small id="UsernameHelp" class="form-text text-muted">กรุณาเข้าสู่ระบบด้วยชื่อผู้ใช้งานที่สมัครไว้</small>
                                </div>
                                <div class="form-group">
                                    <label for="Password">รหัสผ่าน</label>
                                    <input type="password" class="form-control" name="Password" aria-describedby="PasswordHelp" placeholder="กรอกรหัสผ่าน">
                                    <small id="PasswordHelp" class="form-text text-muted">รหัสผ่านต้องไม่ต่ำกว่า 6 ตัวอักษร</small>
                                </div>
                                <button name="submit" id="submit" type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                            </form>
                        </div>
                    </div> <!-- end card-box -->
                </div> <!-- end form-login -->
            </div> <!-- end -->
            <div class="col-lg-3 col-md-3 col-sm-12"></div> <!-- end -->
        </div>
    </div>

<?php 
    // Include_once footer.php 
    include_once('Themes/footer.php');
?>