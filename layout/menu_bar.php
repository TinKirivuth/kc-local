  <!-- Start Menu Section -->
  <div class="container-fluid wrap-menu" style="position: fixed;top:0;">
    <div class="row" style="padding: 0;margin: 0;">
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
      <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 top-menu">
        <div class="menu" style="">
          <img class="img-logo" src="<?php echo BASE_URL; ?>images/logo.png" style="">
          <ul> 
              <?php $pk->get_main_menu($base_url,$lang);?>
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
  <div class="container-fluid sub">
    <div class="row" style="margin: 0;padding: 0;">
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
      <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12" style="padding: 0;margin: 0;">
        <div class="row menu-table"><?php $pk->get_about($base_url,$lang); ?></div>
        <div class="row menu-table1"><?php $pk->get_product_service($base_url,$lang); ?></div>
        <div class="row menu-table2"><?php $pk->get_media($base_url,$lang); ?></div>
        <div class="row menu-table3"><?php $pk->get_career($base_url,$lang); ?></div>
      </div>
      <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
  </div>
  <!-- End Menu Section --> 

  <!-- Small Menu -->
  <div class="container-fluid wrap-menu1">
    <div class="row menu1-row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="menu1">
          <img src="<?php echo BASE_URL; ?>images/logo1.png" class="logo1">
          <a id="btn-menu1" title="Menu" style=""><i class="fa fa-bars" aria-hidden="true" style="font-size:22px;color:white;"></i></a>
          <a id="btn-close" title="Menu" style="display:none;"><i class="fa fa-times" aria-hidden="true" style="font-size:22px;color:white;"></i></a>
        </div>
      </div>
    </div>
    <div class="row virtual-menu-row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="wrap-virtual-menu">
            <ul>
              <?php $pk->get_main_menu_virtual($base_url,$lang);?>
              <li>
                <a href="<?php echo BASE_URL.'kh/'.$id.'/'.$type.'/'.$item.'/'.$code; ?>"><img src="<?php echo BASE_URL; ?>images/kh.png"></a>
                <a href="<?php echo BASE_URL.'en/'.$id.'/'.$type.'/'.$item.'/'.$code; ?>"><img src="<?php echo BASE_URL; ?>images/en.png"></a>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </div>
  <!-- End Small Menu -->