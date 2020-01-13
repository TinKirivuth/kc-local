  <!-- Start Menu Section -->
  <div class="container-fluid wrap-menu" style="position: fixed;top:0;">
    <div class="row" style="padding: 0;margin: 0;">
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
      <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 top-menu">
        <div class="menu" style="">
          <img class="img-logo" src="<?php echo BASE_URL; ?>images/logo.png" style="">
          <ul style=""> 
              <?php 
                  $pk->get_main_menu($base_url,$lang);
              ?>
            <!-- <li class="btn1" data-menu="0"><a href="<?php// echo BASE_URL.$lang.'/home'; ?>">HOME</a></li>
            <li class="btn1" data-menu="1"><a href="#">ABOUT US <i style="font-size:14px;" class="fa fa-caret-down" aria-hidden="true"></i></a></li>
            <li class="btn1" data-menu="2"><a href="#">PRODUCTS & SERVICES <i style="font-size:14px;" class="fa fa-caret-down" aria-hidden="true"></i></a></li>
            <li class="btn1" data-menu="3"><a href="#">MEDIA <i style="font-size:14px;" class="fa fa-caret-down" aria-hidden="true"></i></a></li>
            <li class="btn1" data-menu="4"><a href="#">CAREER <i style="font-size:14px;" class="fa fa-caret-down" aria-hidden="true"></i></a></li>
            <li class="btn1" data-menu="16"><a href="<?php// echo BASE_URL.$lang.'/contact' ?>">CONTACT</a></li> -->
          </ul> 
        </div>
      </div> 
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
        <div class="img-lang">
            <?php 
                $id="";
                $type="";
                $item="";
                $code="";
                if (isset($_GET['id'])){
                    $id=$_GET['id'];
                    // $pk->get_id_link($lang,$id);
                    if (isset($_GET['type'])){
                        $type=$_GET['type'];
                        if (isset($_GET['item'])){
                            $item=$_GET['item'];
                            if (isset($_GET['code'])){
                                $code=$_GET['code'];
                            }
                        }
                    }
                }if ($id==''){
                  $id='home';
                }
            ?>
            <a href="<?php echo BASE_URL.'kh/'.$id.'/'.$type.'/'.$item.'/'.$code; ?>"><img src="<?php echo BASE_URL; ?>images/kh.png"></a>
            <a href="<?php echo BASE_URL.'en/'.$id.'/'.$type.'/'.$item.'/'.$code; ?>"><img src="<?php echo BASE_URL; ?>images/en.png"></a>
        </div>
      </div>
    </div>
  </div>

  <!-- =====Menu Table===== -->
  <div class="container-fluid sub" style="">
    <div class="row" style="margin: 0;padding: 0;">
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
      <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12" style="padding: 0;margin: 0;">
        <div style="" class="row menu-table">
          <!-- <div class="m1"><div class="img-box"><img src="images/products/busloan.png" style=""></div><h6 class="" style="">Business Loan</h6></div><div class="m1"><div class="img-box"><img src="images/products/smeloan.png" style=""></div><h6 class="" style="">SME Loan</h6></div><div class="m1"><div class="img-box"><img src="images/products/consumerloan.png" style=""></div><h6 class="" style="">Consumer Loan</h6></div><div class="m1"><div class="img-box"><img src="images/products/housingloan.png" style=""></div><h6 class="" style="">Housing Loan</h6></div><div class="m1"><div class="img-box"><img src="images/products/personalloan.png" style=""></div><h6 class="" style="">Personal Loan</h6></div><div class="m1"><div class="img-box"><img src="images/products/studentloan.png" style=""></div><h6 class="" style="">Student Loan</h6></div><div class="m1"><div class="img-box"><img src="images/products/condoloan.png" style=""></div><h6 class="" style="">Condo Loan</h6></div> -->
        </div>
      </div>
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
  </div>
  <!-- End Menu Section --> 

  <!-- Small Menu -->
  <div class="container-fluid wrap-menu1">
    <div class="row" style="padding: 0;margin: 0;">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="menu1" style="">
          <img src="<?php echo BASE_URL; ?>images/logo1.png" class="logo1">
          <a id="btn-menu1" title="Menu" style=""><img src="<?php echo BASE_URL; ?>images/menu-btn-white.png" style=""></a>
          <a id="btn-close" title="Menu" style="display:none;"><i class="fa fa-times" aria-hidden="true" style="font-size:22px;color:white;margin-top:10px;"></i></a>
          <div id="menu1-list" style="display: none;">
            <ul>
              <li class="drop-down">
                <a class="click-show" href="#">ABOUT US</a>
                <i style="float:right;margin-top:10px;margin-right:15px;font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
                <div class="drop-down-list" style="display:none;">
                  <ul>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; COMPANY PROFILE</a></li>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; MANAGEMENT TEAM</a></li>
                  </ul>
                </div>
              </li>
              <li class="drop-down" style="">
                <a class="click-show" href="#">PRODUCTS & SERVICES</a>
                <i style="float:right;margin-top:10px;margin-right:15px;font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
                <div class="drop-down-list" style="display:none;">
                  <ul>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp;BUSINESS LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-tasks" aria-hidden="true"></i> &nbsp;SME LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-users" aria-hidden="true"></i> &nbsp;CONSUMER LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;HOUSING LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-money" aria-hidden="true"></i> &nbsp;PERSONAL LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> &nbsp;STUDENT LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-building-o" aria-hidden="true"></i> &nbsp;CONDO LOAN</a></li>
                  </ul>
                </div>
              </li>
              <li class="drop-down" style="">
                <a class="click-show" href="#">MEDIA</a>
                <i style="float:right;margin-top:10px;margin-right:15px;font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
                <div class="drop-down-list" style="display:none;">
                  <ul>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; BUSINESS LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; SME LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; CONSUMER LOAN</a></li>
                  </ul>
                </div>
              </li>
              <li class="drop-down">
                <a class="click-show" href="#">CAREER</a>
                <i style="float:right;margin-top:10px;margin-right:15px;font-weight:bold;" class="fa fa-angle-down" aria-hidden="true"></i>
                <div class="drop-down-list" style="display:none;">
                  <ul>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; JOB OPPORTUNITY</a></li>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; SME LOAN</a></li>
                    <li><a class="" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp; CONSUMER LOAN</a></li>
                  </ul>
                </div>
              </li>
              <li class="item" data-menu="16"><a href="<?php echo BASE_URL.$lang.'/contact' ?>">CONTACT</a></li>
              <li class="item">
                  <a href="<?php echo BASE_URL.'kh/'.$id.$type.$item.$code; ?>"><img src="<?php echo BASE_URL; ?>images/kh.png" style="width: 22px;height: 22px;border-radius: 50%;"></a>
                  <a href="<?php echo BASE_URL.'en/'.$id.$type.$item.$code; ?>"><img src="<?php echo BASE_URL; ?>images/en.png" style="width: 22px;height: 22px;border-radius: 50%;"></a>
              </li>
            </ul>
           </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Small Menu -->