<?php 
session_start();
include 'db_con.php';
    $output='';
    $sql = "SELECT * FROM project_work where id = '".$_POST["id"]."'";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {
         // echo" <option>".$row['description']."</option>";
          echo '
           <div class="col-sm-12 col-xs-12 book-info mrg-tp-65 pdg-l-r-0">
                <div class="col-sm-6 col-xs-6">
                    <div class="thumbnail" style="width:100%">
                                    <img class="img-responsive"  src="../dashboard/'.$row['cover_pics'].'" alt="">
              </div>
                </div>
                <div class="col-sm-6 col-xs-6 pdg-l-0">
            <p style="float:left">'.$row['school_name'].'</p>
              <p style="float:right">'.$row['faculty_name'].'</p>
              <p style="text-align:center">'.$row['department_name'].'</p>
              <p style="text-align:center">'.$row['course_title'].'</p>
              <p style="text-align:center">'.$row['course_code'].'</p>
                </div>
                <div class="col-sm-12 col-xs-12 book-options pdg-l-r-0">
                    <div class="col-sm-6 col-xs-6 pdg-r-0">
                        <a href="" id="btn-buybook" style="font-size:10px;" class="form-control btn-smartshelf btn-light text-center">N'.$row['price'].'</a>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <button id="btn-downloadbook" style="font-size:10px;" book="'.$row['course_material'].'" price="'.$row['price'].'"  email="'.$_SESSION['email'].'" class="form-control btn-smartshelf btn-dark text-center">DOWNLOAD</button>
                    </div>
                    <br><br><br>
                    <div class="col-sm-12 col-xs-12 book-preview-wrapper">
                    <p class="book-preview-text"><b>PREVIEW</b></p>
                    <div class="col-sm-4 col-xs-4 pdg-l-r-0">
                        <img src="assets/img/book-cover.jpg" alt="" class="book-preview-thumbnail">
                    </div>
                    <div class="col-sm-4 col-xs-4 pdg-l-r-0">
                        <img src="assets/img/book-cover.jpg" alt="" class="book-preview-thumbnail">
                    </div>
                    <div class="col-sm-4 col-xs-4 pdg-l-r-0">
                        <img src="assets/img/book-cover.jpg" alt="" class="book-preview-thumbnail">
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 book-rating-wrapper">
                    <p class="text-left pull-left">
                        <b>RATE THIS BOOK</b><br/>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star" aria-hidden="true"></i></span>
                        <span><i class="fa fa-star-half-full" aria-hidden="true"></i></span>
                    </p>
                    <p class="text-right pull-right">
                        <b>Downloads:</b><br/>
                        5k
                    </p>
                </div>
                <div class="col-sm-12 col-xs-12 book-review-wrapper">
                    <h5><b>REVIEW</b></h5>
                    <div class="user-review" style="padding:10px;">
                        <span><img src="assets/img/profile-pic-2.jpg" width="50" alt="" class="user-rewiew-pic pull-left"></span>
                        <span class="pull-right reply-review">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </span>
                        <span>
                            <p class="user-review-name"><b>Tinubu</b></p>
                            <a class="date-reviewed">2017-09-07</a>
                        </span>
                    </div>
                    <div class="user-review" style="padding:10px;">
                        <span><img src="assets/img/profile-pic-2.jpg" alt="" width="50" class="user-rewiew-pic pull-left"></span>
                        <span class="pull-right reply-review">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </span>
                        <span>
                            <p class="user-review-name"><b>Tinubu</b></p>
                            <a class="date-reviewed">2017-09-07</a>
                        </span>
                    </div>
                    <div class="user-review" style="padding:10px;">
                        <span><img src="assets/img/profile-pic-2.jpg" alt="" width="50" class="user-rewiew-pic pull-left"></span>
                        <span class="pull-right reply-review">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </span>
                        <span>
                            <p class="user-review-name"><b>Tinubu</b></p>
                            <a class="date-reviewed">2017-09-07</a>
                        </span>
                    </div>
                </div>
            </div>
    </div>
          '; 
    }
?>
