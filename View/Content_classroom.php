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
                    <h2 class="form-title center">เลือกห้องเรียน</h2> 
                    <div class="card-box">
                        <div class="card-box-sub">
                            <div class="center">
                                <table class="table table-responsive-xl table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <?php date_default_timezone_set('Asia/Bangkok'); ?>
                                            <th scope="col" colspan="5"><span class="card-title">วันที่ <?=date("d-m-Y");?></span></th>
                                        </tr>
                                        <tr>
                                            <th scope="col"><span class="card-title">ห้องเรียน</span></th>
                                            <th scope="col"><span class="card-title">8:40 - 11:00</span></th>
                                            <th scope="col"><span class="card-title">11:00 - 13:50</span></th>
                                            <th scope="col"><span class="card-title">12:40 - 14:00</span></th>
                                            <th scope="col"><span class="card-title">14:00 - 16:30</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($temp as $row):?>
                                        <tr>
                                            <th class="table-secondary" scope="row"><span class="card-message"><?=$row['Class_Building'];?>-<?=$row['Class_No'];?></span></th>
                                            <?php if ($row['Time1'] == 0) { ?><td class="table-success"><a href="booking.php?Building=<?=$row['Class_Building'];?>&Class_No=<?=$row['Class_No'];?>&Time=1" class="btn btn-block" style="text-decoration: none;color:#333;"><span class="card-message">ว่าง</span></a></td><?php } else { ?><td class='table-danger'><a class='btn btn-block'><span class='card-message'>ไม่ว่าง</span></a></td><?php } ?>
                                            <?php if ($row['Time2'] == 0) { ?><td class="table-success"><a href="booking.php?Building=<?=$row['Class_Building'];?>&Class_No=<?=$row['Class_No'];?>&Time=2" class="btn btn-block" style="text-decoration: none;color:#333;"><span class="card-message">ว่าง</span></a></td><?php } else { ?><td class='table-danger'><a class='btn btn-block'><span class='card-message'>ไม่ว่าง</span></a></td><?php } ?>
                                            <?php if ($row['Time3'] == 0) { ?><td class="table-success"><a href="booking.php?Building=<?=$row['Class_Building'];?>&Class_No=<?=$row['Class_No'];?>&Time=3" class="btn btn-block" style="text-decoration: none;color:#333;"><span class="card-message">ว่าง</span></a></td><?php } else { ?><td class='table-danger'><a class='btn btn-block'><span class='card-message'>ไม่ว่าง</span></a></td><?php } ?>
                                            <?php if ($row['Time4'] == 0) { ?><td class="table-success"><a href="booking.php?Building=<?=$row['Class_Building'];?>&Class_No=<?=$row['Class_No'];?>&Time=4" class="btn btn-block" style="text-decoration: none;color:#333;"><span class="card-message">ว่าง</span></a></td><?php } else { ?><td class='table-danger'><a class='btn btn-block'><span class='card-message'>ไม่ว่าง</span></a></td><?php } ?>
                                        </tr>
                                        <?php endforeach;?>
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