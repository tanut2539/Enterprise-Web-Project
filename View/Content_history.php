<?php
    // Include_once header.php 
    include_once('Themes/header.php');
?>
    <!-- Section Content -->
    <div class="container-fluid"> <!-- Container -->
        <div class="row"> <!-- row -->
            <div class="col-lg-1 col-md-1 col-sm-12"></div> <!-- end -->
            <div class="col-lg-10 col-md-10 col-sm-12">
                <div class="form-choose">
                    <h2 class="form-title center">ประวัติการจองห้องเรียน</h2> 
                    <div class="card-box">
                        <div class="card-box-sub">
                            <div class="center">
                                <table class="table table-responsive-xl table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"><span class="card-title">ลำดับ</span></th>
                                            <th scope="col"><span class="card-title">ห้องเรียน</span></th>
                                            <th scope="col"><span class="card-title">วิชาที่จอง</span></th>
                                            <th scope="col"><span class="card-title">รายละเอียดการจอง</span></th>
                                            <th scope="col"><span class="card-title">วันที่จอง</span></th>
                                            <th scope="col"><span class="card-title">เวลาที่จอง</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $num = (int)1; foreach($temp as $row):?>
                                        <tr>
                                            <th class="table-secondary" scope="row"><span class="card-message"><?php print_r(($num));?></span></th>
                                            <td><?=$row['Booking_Building'];?>-<?=$row['Booking_Classroom'];?></td>
                                            <td><?=$row['Booking_Course'];?></td>
                                            <td><?=$row['Booking_Details'];?></td>
                                            <td><?=$row['Booking_Date'];?></td>
                                            <td><?=$row['Booking_TimeStamp'];?></td>
                                        </tr>
                                        <?php $num++; endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="span"><a href="javascript:history.back()" class="btn btn-primary">กลับไปยังก่อนหน้า</a></div>
                </div>
            </div> <!-- end -->
            <div class="col-lg-1 col-md-1 col-sm-12"></div> <!-- end -->
        </div>
    </div>
<?php 
    // Include_once footer.php 
    include_once('Themes/footer.php');
?>