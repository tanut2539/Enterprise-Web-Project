<?php
    // Include_once header.php 
    include_once('Themes/header.php');
?>
    <!-- Section Content -->
    <div class="container-fluid"> <!-- Container -->
        <div class="row"> <!-- row -->
            <div class="col-lg-3 col-md-2 col-sm-12"></div> <!-- end -->
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="form-choose">
                    <h2 class="form-title center">ระบุรายละเอียดการจองห้องเรียน</h2> 
                    <div class="card-box">
                        <div class="card-box-sub">
                            <h2 class="form-title center">ห้องเรียน <?=$_REQUEST['Building'];?>-<?=$_REQUEST['Class_No'];?></h2>
                            <form action="" method="post">
                                <?php foreach($temp as $row):?>
                                <div class="form-group">
                                    <label for="teacher">ชื่ออาจารย์ผู้สอน</label>
                                    <input type="text" name="Name" style="display:none;" value="<?=$row['Firstname'];?> <?=$row['Lastname'];?>">
                                    <input type="text" name="Username" style="display:none;" value="<?=$row['Username'];?>">
                                    <input type="text" class="form-control" value="<?=$row['Firstname'];?> <?=$row['Lastname'];?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="teacher">อีเมล</label>
                                    <input type="text" name="Email" style="display:none;" value="<?=$row['Email'];?>">
                                    <input type="text" class="form-control" value="<?=$row['Email'];?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="teacher">เลือกวันที่จอง</label>
                                    <input class="form-control" id="date" name="dateList" placeholder="วัน ปี-เดือน-วัน (2017-12-30)" type="text"/>
                                </div>
                                <?php endforeach;?>
                                <div class="form-group">
                                    <label for="teacher">วิชาที่ทำการสอน</label>
                                    <input type="text" name="Course" class="form-control" placeholder="กรอกรหัสวิชา" required>
                                </div>
                                <?php foreach($time as $rows):?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="teacher">เวลาจอง(เริ่มต้น)</label>
                                        <input type="text" name="STime" style="display:none;" class="form-control" value="<?=$rows['STime'];?>">
                                        <input type="text" class="form-control" value="<?=$rows['STime'];?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="teacher">เวลาจอง(สิ้นสุด)</label>
                                        <input type="text" name="ETime" style="display:none;" class="form-control" value="<?=$rows['ETime'];?>">
                                        <input type="text" class="form-control" value="<?=$rows['ETime'];?>" disabled>
                                    </div>
                                </div>
                                <?php endforeach;?>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">เหตุผลในการจอง</label>
                                    <textarea class="form-control" name="Details" rows="3"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success btn-block">จองห้องเรียน</button>
                            </form>
                        </div>
                    </div>
                    <div class="span"><a href="javascript:history.back()" class="btn btn-primary">กลับไปยังก่อนหน้า</a></div>
                </div>
            </div> <!-- end -->
            <div class="col-lg-3 col-md-2 col-sm-12"></div> <!-- end -->
        </div>
    </div>
<?php 
    // Include_once footer.php 
    include_once('Themes/footer.php');
?>