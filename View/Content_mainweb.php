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
                    <h2 class="form-title center">เลือกอาคารเรียน</h2> 
                    <div class="card-box">
                        <div class="card-box-sub">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination"><?php if ($_REQUEST["page"] == ""){$_REQUEST["page"] = 1;}
                                        $nextPage = $_REQUEST["page"] + 1;
                                        if($_REQUEST["page"] > 1){
                                        $prevPage = $_REQUEST["page"]-1;
                                        echo '<li class="page-item"><a class="page-link" href="mainweb.php?page='.$prevPage.'">ก่อนหน้า</a></li>';
                                    }
                                        echo '<li class="page-item"><a class="page-link" href="mainweb.php?page='.$_REQUEST["page"].'">'.$_REQUEST["page"].'</a></li>';
                                        echo '<li class="page-item"><a class="page-link" href="mainweb.php?page='.$nextPage.'">หน้าถัดไป</a></li>';
                                ?>
                                </ul>
                            </nav>
                            <div class="row">
                                <?php foreach($temp as $row):?>
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?=$row['Building_Picture'];?>" alt="<?=$row['Building_Name'];?>">
                                        <div class="card-body">
                                            <h4 class="card-title"><?=$row['Building_Name'];?></h4>
                                            <a href="classroom.php?Building=<?=$row['Building_ID'];?>" class="btn btn-primary btn-block">จองห้องเรียน</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination"><?php if ($_REQUEST["page"] == ""){$_REQUEST["page"] = 1;}
                                        $nextPage = $_REQUEST["page"] + 1;
                                        if($_REQUEST["page"] > 1){
                                        $prevPage = $_REQUEST["page"]-1;
                                        echo '<li class="page-item"><a class="page-link" href="mainweb.php?page='.$prevPage.'">ก่อนหน้า</a></li>';
                                        }
                                        echo '<li class="page-item"><a class="page-link" href="mainweb.php?page='.$_REQUEST["page"].'">'.$_REQUEST["page"].'</a></li>';
                                        echo '<li class="page-item"><a class="page-link" href="mainweb.php?page='.$nextPage.'">หน้าถัดไป</a></li>';
                                    ?>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div> <!-- end -->
            <div class="col-lg-1 col-md-1 col-sm-12"></div> <!-- end -->
        </div>
    </div>

<?php 
    // Include_once footer.php 
    include_once('Themes/footer.php');
?>