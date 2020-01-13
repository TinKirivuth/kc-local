<?php
include('database.php');
// date_default_timezone_set('Asia/Phnom_Penh');
class Home extends Db{
	//opent conntection
	function __construct(){
		$this->connect();
    }

    // ************************************************************
    // **                  Get Home Page Content                 **
    // **                  ---------------------                 **
    // ************************************************************


    // Get Main Menu
    function get_main_menu($base_url,$lang){
        $con="is_disable=0";
        $od="id ASC";
        $limit="0,6";
        $post_data=$this->select_data($this->tbl[14],$con,$od,$limit);
        if($post_data != 0){
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['name_kh'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $title = $row['name_en'];
                    $name_link = $row['name_link_en'];
                }
                $i = $row['id'];
                if($i==0){?>
                    <li class="btn1" id="home" data-menu="<?php echo $i; ?>"><a href="<?php echo BASE_URL.$lang.'/'.$name_link; ?>"><?php echo $title;?></a></li>
                <?php
                }else if($i==16){?>
                    <li class="btn1" data-menu="<?php echo $i; ?>"><a href="<?php echo BASE_URL.$lang.'/'.$name_link; ?>"><?php echo $title;?></a></li>
                <?php
                }else{?>
                    <li class="btn1" data-menu="<?php echo $i; ?>">
                        <a href="#"><?php echo $title;?> <i style="font-size:14px;" class="fa fa-caret-down" aria-hidden="true"></i></a>
                    </li>
                <?php
                }
            }
        }
    }

    // Get Main Menu
    function get_main_menu_virtual($base_url,$lang){
        $con="is_disable=0";
        $od="id ASC";
        $limit="0,6";
        $post_data=$this->select_data($this->tbl[14],$con,$od,$limit);
        if($post_data != 0){
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['name_kh'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $title = $row['name_en'];
                    $name_link = $row['name_link_en'];
                }
                $i = $row['id'];
                if($i==0){?>
                    <li class="btn1" id="home" data-menu="<?php echo $i; ?>"><a href="<?php echo BASE_URL.$lang.'/'.$name_link; ?>"><?php echo $title;?></a></li>
                <?php
                }else if($i==16){?>
                    <li class="btn1" data-menu="<?php echo $i; ?>"><a href="<?php echo BASE_URL.$lang.'/'.$name_link; ?>"><?php echo $title;?></a></li>
                <?php
                }else{
                    if($i==2){ //get all menu from table product and service
                        $tb=$this->tbl[5];
                        $con1="is_disable=0 AND type=2";
                    }else{ // get all menu from table menu_item
                        $tb=$this->tbl[13];
                        $con1="is_disable=0 AND type=".$i."";
                    } 
                    $od1="id ASC";
                    $limit1="0,7";
                    $pdata=$this->select_data($tb,$con1,$od1,$limit1);
                    ?>
                    <li>
                        <a class="click-show" href="#" data-menu="<?php echo $i; ?>"><?php echo $title;?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <?php
                        if($pdata != 0){?>
                            <ul class="menu1-sub-item">
                                <?php
                                    foreach($pdata as $rw){
                                        if($lang=='kh'){
                                            if($i==2){
                                                $title = $rw['name_kh'];
                                                $name_link = $rw['name_link_kh'];
                                            }else{
                                                $title = $rw['title_kh'];
                                                $name_link = $rw['name_link_kh'];
                                            }
                                            $type_link = $rw['type_link_kh'];
                                        }else{
                                            if($i==2){
                                                $title = $rw['name_en'];
                                                $name_link = $rw['name_link_en'];
                                            }else{
                                                $title = $rw['title_en'];
                                                $name_link = $rw['name_link_en'];
                                            }
                                            $type_link = $rw['type_link_en'];
                                        }
                                        ?>
                                        <li><a href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $type_link;?>/<?php echo $rw['id'];?>/<?php echo $name_link;?>"><i class="fa fa-briefcase" aria-hidden="true"></i> &nbsp;<?php echo  $title;?></a></li>
                                    <?php
                                    }
                                ?>
                            </ul>
                        <?php
                        }
                        ?>
                    </li>
                <?php
                }
            }
        }
    }

    // Get Slide Menu
    function get_slide_image($base_url,$lang){
        $con="is_disable=0 AND is_slide=1";
        $od="od ASC";
        $limit="0,7";
		$post_data=$this->select_data($this->tbl[5],$con,$od,$limit);
		if($post_data != 0){
            $first = 0; //variable use for set up speed slide
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['name_kh'];
                    // $slide_text = substr($row['slide_text_kh'],0,100);
                    $slide_text = $row['slide_text_kh'];
                }else{
                    $title = $row['name_en'];
                    // $slide_text = substr($row['slide_text_en'],0,100);
                    $slide_text = $row['slide_text_en'];
                }
                $first = $first+1;
                if($first==1){
                ?>
                    <div class="carousel-item active" data-interval="10000">
                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo  $row['slide_image'];?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption slide-text">
                            <h1 class="animated slideInDown" style="animation-delay: 1s;"><?php echo $title;?></h1>
                            <p class="animated zoomIn" style="animation-delay: 2s;"><?php echo $slide_text;?></p>
                            <!-- <p class="animated zoomIn" style="animation-delay: 3s;"><a href="#">More.</a></p> -->
                        </div>
                    </div>
                <?php
                }else{
                ?>
                <!--  -->

                <div class="carousel-item" data-interval="5000">
                    <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo  $row['slide_image'];?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption slide-text">
                        <h1 class="animated slideInDown" style="animation-delay: 1s;"><?php echo $title;?></h1>
                        <p class="animated zoomIn" style="animation-delay: 2s;"><?php echo $slide_text;?></p>
                    </div>
                </div>
            <?php
                }
            }
        }
    }

    // Get Slide Menu
    function get_slide_menu($base_url,$lang){
        $con="is_disable=0 AND is_slide=1";
        $od="od ASC";
        $limit="0,4";
        $post_data=$this->select_data($this->tbl[5],$con,$od,$limit);
        if($post_data != 0){
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['name_kh'];
                    $name_link = $row['name_link_kh'];
                    $type_link = $row['type_link_kh'];
                    $readMore = "ស្វែងយល់បន្ថែម";
                }else{
                    $title = $row['name_en'];
                    $name_link = $row['name_link_en'];
                    $type_link = $row['type_link_en'];
                    $readMore = "Read More";
                }
                ?>
                <div data-color="<?php echo $row['bg_color']; ?>" class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 slide-menu">
                    <div class="middle">       
                        <h2><?php echo $title; ?></h2>
                        <a href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $type_link;?>/<?php echo $row['id'];?>/<?php echo $name_link;?>"><?php echo $readMore;?></a>
                    </div>
                </div>
            <?php
            }
        }
    }

    // Get Content Banner Image
    function get_content_banner($base_url,$type){
        $con="is_disable=0 AND type_id=".$type."";
        $post_data=$this->select_current_data($this->tbl[11],$con);
        if($post_data != 0){?>
            <div class="banner" style="background-image: url('<?php echo $base_url;?>cms/upl-img/<?php echo $post_data['image'];?>')">
                <!-- <img src=""> -->
            </div>
            <?php
        } 
    }

    // ************************************************************
    // **                   Get About Us Content                 **
    // **                   --------------------                 **
    // ************************************************************

    // Get Menu About
	function get_about($base_url,$lang){
        $con="is_disable=0 AND type=1";
        $od="od ASC";
        $limit="0,7";
        $post_data=$this->select_data($this->tbl[13],$con,$od,$limit);
        if($post_data != 0){?>
            <div class="m1"></div>
            <?php
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['title_kh'];
                    $type_link = $row['type_link_kh'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $title = $row['title_en'];
                    $type_link = $row['type_link_en'];
                    $name_link = $row['name_link_en'];
                }?>
               <div class="m1" data-menu="<?php echo $row['type'];?>" data-smenu="<?php echo $row['id'];?>">
                    <a href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $type_link;?>/<?php echo $row['id'];?>/<?php echo $name_link;?>">
                        <div class="img-box"><img src="<?php echo $base_url; ?>cms/upl-img/<?php echo  $row['icon'];?>"></div>
                        <h6><?php echo $title; ?></h6>
                    </a>
                </div>
            <?php
            }
            ?>
            <div class="m1"></div>
        <?php
		}
    }

    // Get Company Profile Content
    function get_company_profile($base_url,$id,$item,$lang){
        $con="is_disable=0";
        $od="od DESC";
        $limit="0,1";
        $post_data=$this->select_data($this->tbl[3],$con,$od,$limit);
        if($post_data != 0){
            foreach($post_data as $row){
                if($lang=='kh'){
                    $con_title = $row['con_title_kh'];
                    $con_des = $row['con_des_kh'];
                    $mis_title = $row['mis_title_kh'];
                    $mis_des = $row['mis_des_kh'];
                    $vi_title = $row['vi_title_kh'];
                    $vi_des = $row['vi_des_kh'];
                }else{
                    $con_title = $row['con_title_en'];
                    $con_des = $row['con_des_en'];
                    $mis_title = $row['mis_title_en'];
                    $mis_des = $row['mis_des_en'];
                    $vi_title = $row['vi_title_en'];
                    $vi_des = $row['vi_des_en'];
                }
                ?>
                <h2 class="navigate-title"><span><?php echo $con_title; ?></h2>
                <div class="comProfile"><p><?php echo $con_des; ?></p></div>

                <h2><span><?php echo $mis_title; ?></h2>
                <div class="comProfile"><p><?php echo $mis_des; ?></p></div>

                <h2><span><?php echo $vi_title; ?></h2>
                <div class="comProfile"><p><?php echo $vi_des; ?></p></div>
                <?php
            }
		}
    }

    // Get Management Team Content
    function get_management_team($base_url,$id,$item,$lang){
        if ($lang=='kh'){
            $id=trim($id);
            $id=str_replace("-"," ",$id);
            $item=trim($item);
            $item=str_replace("-"," ",$item);
        }else{
            $id=trim($id);
            $id=str_replace("-"," ",$id);
            $id=ucwords($id);
            $item=trim($item);
            $item=str_replace("-"," ",$item);
            $item=ucwords($item);
        }
        $con="is_disable=0";
        $od="od ASC";
        $limit="0,20";
		$post_data=$this->select_data($this->tbl[4],$con,$od,$limit);
        if($post_data != 0){?>
            <div><h2 class="navigate-title"><span><?php echo $id;?> > <?php echo $item; ?></span></h2></div>
            <?php
            foreach($post_data as $row){
                if($lang=='kh'){
                    $name = $row['name_kh'];
                    $position = $row['position_kh'];
                    $other = $row['other_kh'];
                }else{
                    $name = $row['name_en'];
                    $position = $row['position_en'];  
                    $other = $row['other_en'];   
                }
                $phone1 = $row['phone1'];
                $phone2 = $row['phone2'];
                $email = $row['email'];
                ?>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="mgt-team">
                            <h2><a href="#"><?php echo $name;?></a></h2>
                            <span class="position"><?php echo $position;?></span><br>
                            <span class="position"><?php echo $email;?></span> 
                        </div>
                    </div>
                </div>
                <!-- <hr style="border:1px solid #001a72;"> -->
            <?php
            }
		}
    }

    // ************************************************************
    // **             Get Product And Service Content            **
    // **             -------------------------------            **
    // ************************************************************

    // Get Menu Product and Service
    function get_product_service($base_url,$lang){
        $con="is_disable=0";
        $od="od ASC";
        $limit="0,7";
        $post_data=$this->select_data($this->tbl[5],$con,$od,$limit);
        if($post_data != 0){
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['name_kh'];
                    $type_link = $row['type_link_kh'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $title = $row['name_en'];
                    $type_link = $row['type_link_en'];
                    $name_link = $row['name_link_en'];
                }?>
                <div class="m1" data-menu="<?php echo $row['type'];?>" data-smenu="<?php echo $row['id'];?>">
                    <a href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $type_link;?>/<?php echo $row['id'];?>/<?php echo $name_link;?>">
                        <div class="img-box"><img src="<?php echo $base_url; ?>cms/upl-img/<?php echo  $row['icon'];?>"></div>
                        <h6><?php echo $title; ?></h6>
                    </a>
                </div>
            <?php
            }
        }
    }

    // Get Product and Service List
    function get_product_service_list($base_url,$lang){
        $con="is_disable=0";
        $od="od ASC";
        $limit="0,7";
        $post_data=$this->select_data($this->tbl[5],$con,$od,$limit);
        if($post_data != 0){?>
            <div class="table-service-menu">
                <ul>
                    <?php
                    foreach($post_data as $row){
                        $bgColor="#f5f5f5";
                        $color="#000";
                        if(isset($_GET['type'])){
                            if($_GET['type']==$row[0]){ $bgColor='#97d700';$color='#fff'; }
                        }
                        if($lang=='kh'){
                            $title = $row['name_kh'];
                            $type_link = $row['type_link_kh'];
                            $name_link = $row['name_link_kh'];
                        }else{
                            $title = $row['name_en'];
                            $type_link = $row['type_link_en'];
                            $name_link = $row['name_link_en'];
                        }
                    ?>
                    <li style="background-color:<?php echo $bgColor;?>">
                        <a data-Bg="<?php echo $bgColor;?>" href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $type_link;?>/<?php echo $row['id'];?>/<?php echo $name_link;?>" style="background-color: <?php echo $bgColor; ?>;color:<?php echo $color;?>">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp; <?php echo $title; ?>
                        </a>
                    </li>
                    <?php 
                    } 
                    ?>
                </ul>
            </div>
        <?php
        }
    }

    // Get Product and Service Detail
    function get_product_service_detial($base_url,$type,$lang){
        $con="is_disable=0 AND id=$type";
        $od="od ASC";
        $limit="0,7";
        $post_data=$this->select_data($this->tbl[5],$con,$od,$limit);
        if($post_data != 0){
            foreach($post_data as $row){
                if($lang=='kh'){
                    $name = $row['name_kh'];
                    $description = $row['des_kh'];
                    $content = $row['content_kh'];
                    $term = $row['term_con_kh'];
                    $document = $row['doc_require_kh'];
                    $type_link=$row['type_link_kh'];
                    $type_link=trim($type_link);
                    $type_link=str_replace("-"," ",$type_link);
                    // Fix value
                    $loan_calculate_title="គណនាប្រាក់កម្ចី";
                    $term_con_title="រយៈពេល និងលក្ខខ័ណ្ឌ";
                    $doc_require_title="ឯកសារដែលត្រូវការ";
                    $product_value="ចំនួនទឹកប្រាក់ដើម្បីខ្ចី";
                    $year="ក្នុងមួយឆ្នាំ";
                    $month="ខែ";
                    $pv_placeholder="បញ្ចូលចំនួនទឹកប្រាក់របស់អ្នកនៅទីនេះ!";
                    $interest_rate="អត្រា​ការ​ប្រាក់";
                    $tenure="រយៈពេល";
                    $cal_result='<span>សូមបញ្ចូលទឹកប្រាក់រវាង 1000$ ទៅ 500000$.</span><br><span class="result-cnt">ផ្អែកលើអ្វីដែលអ្នកបានបញ្ចូល, ការទូទាត់ប្រចាំខែរបស់អ្នកអាចជា $<span id="result">0</span></b></span>';
                }else{
                    $name = $row['name_en'];
                    $name = strtoupper($name);
                    $description = $row['des_en'];
                    $content = $row['content_en'];
                    $term = $row['term_con_en'];
                    $document = $row['doc_require_en'];
                    $type_link=$row['type_link_en'];
                    $type_link=trim($type_link);
                    $type_link=str_replace("-"," ",$type_link);
                    $type_link=strtoupper($type_link);
                    // Fix value
                    $loan_calculate_title="Loan Calculator";
                    $term_con_title="Term & Condition";
                    $doc_require_title="Document Requirement";
                    $product_value="Amount To Borrow";
                    $year="per year";
                    $month="months";
                    $pv_placeholder="Enter Your Amount Here!";
                    $interest_rate="Annual Interest Rate";
                    $tenure="Tenure";
                    $cal_result='<span>Please enter amount between 1000$ To 500000$.</span><br><span class="result-cnt">Based on what you entered, <b>your monthly payment could be $<span id="result">0</span></b></span>';
                }?> 
                <div><h2 class="navigate-title"><span><?php echo $type_link;?> > <?php echo $name; ?></span></h2></div>
                <div class="services-content">
                    <div><p><?php echo $description; ?></p></div>

                    <div><p><?php echo $content; ?></p></div>

                    <h2><span><?php echo $loan_calculate_title;?></span></h2>
                    <!-- <div style="padding:30px 0px 15px 0px;">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Fix Loan</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Installment Loan</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">..dfdfdfd</div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">..fgfg.</div>
                            </div>
                        </div> -->
                   
  




                    <div style="padding:30px 0px 15px 0px;">
                        <form>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <label for="pv"><?php echo $product_value;?> ($)</label>
                                    <input type="number" class="form-control" id="amount_borrow" placeholder="<?php echo $pv_placeholder;?>" value="" required style="color:gray !important;"> 
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <label><?php echo $interest_rate;?> (%)</label><br>
                                    <input type="range" id="interest" step="<?php echo $row['rate_step'];?>" min="<?php echo $row['min_rate'];?>" max="<?php echo $row['max_rate'];?>" value="1.00" style="margin: 10px 0px 15px 0px;width:100%;">
                                    <div><span id="interest-indecate">1.00</span> % <?php echo $year;?></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <label><?php echo $tenure;?></label><br>
                                    <input type="range" id="tenure" min="<?php echo $row['min_month'];?>" max="<?php echo $row['max_month'];?>" value="12" style="margin: 10px 0px 15px 0px;width:100%;">
                                    <div><span id="tenure-indecate"><?php echo $row['min_month']; ?></span> <?php echo $month;?></div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div style="padding:15px 0;"><?php echo $cal_result; ?></div> 

                    <h2><span><?php echo $term_con_title;?></span></h2>
                    <div style="padding:15px 0;"><p><?php echo $term; ?></p></div>

                    <h2><span><?php echo $doc_require_title;?></span></h2>
                    <div style="padding:15px 0;"><p><?php echo $document; ?></p></div>
                </div>
            <?php
            }
        }
    }

    // ************************************************************
    // **                 Get Media Menu And Content             **
    // **                 --------------------------             **
    // ************************************************************

    // Get Media Menu
    function get_media($base_url,$lang){
        $con="is_disable=0 AND type=3";
        $od="od ASC";
        $limit="0,7";
        $post_data=$this->select_data($this->tbl[13],$con,$od,$limit);
        if($post_data != 0){?>
            <div class="m1"></div>
            <?php
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['title_kh'];
                    $type_link = $row['type_link_kh'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $title = $row['title_en'];
                    $type_link = $row['type_link_en'];
                    $name_link = $row['name_link_en'];
                }?>
               	<div class="m1" data-menu="<?php echo $row['type'];?>" data-smenu="<?php echo $row['id'];?>">
                    <a href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $type_link;?>/<?php echo $row['id'];?>/<?php echo $name_link;?>">
                        <div class="img-box"><img src="<?php echo $base_url; ?>cms/upl-img/<?php echo  $row['icon'];?>"></div>
                        <h6><?php echo $title; ?></h6>
                    </a>
                </div>
            <?php
            }
            ?>
            <div class="m1"></div>
        <?php
        }
    }

   // Get Photo Gallery
    function get_photo_gallery($base_url,$id,$type,$item,$lang){
        // Get Content Banner
        $con1="is_disable=0 AND type_id=".$type."";
        $post_data1=$this->select_current_data($this->tbl[11],$con1);
        if ($post_data1!=0){
            if($lang=='kh'){
                $title = $post_data1['title_kh'];
                $des = $post_data1['description_kh'];
                $type_link = $post_data1['mm_link_kh'];
            }else{
                $title = $post_data1['title_en'];
                $title = strtoupper($title);
                $des = $post_data1['description_en'];
                $type_link = $post_data1['mm_link_en'];
                $type_link=trim($type_link);
                $type_link=str_replace("-"," ",$type_link);
                // $type_link=ucwords($type_link);
                $type_link=strtoupper($type_link);
            }?>
            <div class="content-item">
                <h2 class="navigate-title"><span><?php echo $type_link;?> > <?php echo $title; ?></span></h2>
                <div style="padding-top:20px;">
                    <p><?php echo $des;?> </p>
                </div>
            </div>    
        <?php
        }
        $con="is_disable=0";
        $od="od ASC";
        $limit="0,50";
        $post_data=$this->select_data($this->tbl[7],$con,$od,$limit);
        if($post_data != 0){?>
            <div class="row wrap-photo"><?php
                foreach($post_data as $row){
                    if($lang=='kh'){
                        $title = $row['title_kh'];
                        $des = $row['des_kh'];
                        $name_link = $row['name_link_kh'];
                        $image =$row['image'];
                        $readmore = "ព័ត៌មានលំអិត";
                    }else{
                        $title = $row['title_en'];
                        $des = $row['des_en']; 
                        $name_link = $row['name_link_en'];
                        $image = $row['image'];
                        $readmore = "Reading More";
                    }?>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 photo-item">
                        <div class="child-image">
                            <img class="img-item" src="<?php echo $base_url; ?>cms/upl-img/<?php echo $image;?>">
                        </div>
                        <div class="text text-center">
                            <h4><?php echo $title;?></h4>
                            <p><?php echo mb_substr($des,0,100, "utf-8")."...";?></p>
                            <a href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $id;?>/<?php echo $type;?>/<?php echo $item;?>/<?php echo $name_link;?>" class="view-more" title="Click me to view detail!">
                                <span><?php echo $readmore; ?></span><i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
    }

    // Get Photo Gallery Detial
    function get_photo_detail($base_url,$id,$type,$item,$code,$lang){
        if($lang=='kh'){
            $con="is_disable=0 AND name_link_kh='".$code."'";
            $item=trim($item);
            $item=str_replace("-"," ",$item);
            $id=trim($id);
            $id=str_replace("-"," ",$id);
        }else{
            $con="is_disable=0 AND name_link_en='".$code."'";
            $item=trim($item);
            $item=str_replace("-"," ",$item);
            $item=ucwords($item);
            $id=trim($id);
            $id=str_replace("-"," ",$id);
            $id=ucwords($id);
        }
        $od="od ASC";
        $limit="0,1";
        $post_data=$this->select_data($this->tbl[7],$con,$od,$limit);
        if($post_data != 0){?>
            <div><h2 class="navigate-title"><span><?php echo $id;?> > <?php echo $item;?></span></h2></div>
            <?php
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['title_kh'];
                    $description = $row['des_kh'];
                }else{
                    $title = $row['title_en'];
                    $description = $row['des_en'];
                }?>

                <div style="padding-top:30px;padding-bottom: 30px;">
                    <h4><?php echo $title;?></h4>
                    <p><?php echo $description;?></p>
                </div>





                <div class="gallery-container">
                    <div class="tz-gallery">
                        <div class="row row photo-detail">
                            <?php
                            if($row['image'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image1'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image1'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image1'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image2'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image2'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image2'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image3'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image3'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image3'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image4'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image4'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image4'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image5'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image5'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image5'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image6'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image6'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image6'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image7'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image7'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image7'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image8'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image8'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image8'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image9'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image9'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image9'];?>">
                                    </a>
                                </div>
                            <?php
                            }if ($row['image10'] != ""){?>
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 list-img">
                                    <a class="lightbox" href="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image10'];?>">
                                        <img src="<?php echo $base_url; ?>cms/upl-img/<?php echo $row['image10'];?>">
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>

                </div>

            <?php
            }
        }
    } 

    // Get Public Holiday
  	function get_public_holiday($base_url,$lang,$id,$item,$type){

        $con1="is_disable=0 AND type_id=".$type."";
        $post_data1=$this->select_current_data($this->tbl[11],$con1);
        if ($post_data1!=0){
            if($lang=='kh'){
                $title = $post_data1['title_kh'];
                $des = $post_data1['description_kh'];
                $type_link = $post_data1['mm_link_kh'];
            }else{
                $title = $post_data1['title_en'];
                $title = strtoupper($title);
                $des = $post_data1['description_en'];
                $type_link = $post_data1['mm_link_en'];
                $type_link=trim($type_link);
                $type_link=str_replace("-"," ",$type_link);
                $type_link=ucwords($type_link);
            }?>
            <div class="content-item">
                <h2 class="navigate-title"><span><?php echo $type_link ?> > <?php echo $title; ?></span></h2>
                <div style="padding-top:20px;">
                    <p><?php echo $des;?> </p>
                </div>
            </div>   
        <?php
        }
        $con="is_disable=0";
        $od="od ASC";
        $limit="0,100";
        $post_data=$this->select_data($this->tbl[8],$con,$od,$limit);
        if($post_data != 0){?>
            <div  style="width: 100%;padding-top:30px;">
                <table class="table table-responsive table-hover">
                    <?php 
                        if($lang=='kh'){?>
                            <tr  class="table-secondary"><th>កាលបរិច្ឆេទ</th><th> ប្រតិទិន​ឈប់​សម្រាក​​នៅ​ក្នុង​ព្រះរាជាណាចក្រ​កម្ពុជា សម្រាប់​ឆ្នាំ​ <?php echo date("Y");?></th></tr>
                        <?php
                        }else{?>
                            <tr  class="table-secondary"><th>Date</th><th> Public Holidays in Cambodia <?php echo date("Y");?></th></tr>
                        <?php
                        }
                    ?>
                    
                    <?php
                    foreach($post_data as $row){
                        if($lang=='kh'){
                            $date = $row['date_kh'];
                            $title = $row['title_kh'];
                        }else{
                            $date = $row['date_en'];
                            $title = $row['title_en'];
                        }
                        ?>
                        <tr>
                            <td><?php echo $date; ?></td>
                            <td><?php echo $title; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        <?php
        }
    }

    // Get News
    function get_news($base_url,$id,$type,$item,$lang){
        $con1="is_disable=0 AND type_id=".$type."";
        $post_data1=$this->select_current_data($this->tbl[11],$con1);
        if ($post_data1!=0){
            if($lang=='kh'){
                $title = $post_data1['title_kh'];
                $des = $post_data1['description_kh'];
                $type_link = $post_data1['mm_link_kh'];
            }else{
                $title = $post_data1['title_en'];
                $title = strtoupper($title);
                $des = $post_data1['description_en'];
                $type_link = $post_data1['mm_link_en'];
                $type_link=trim($type_link);
                $type_link=str_replace("-"," ",$type_link);
                $type_link=ucwords($type_link);
            }?>
            <div class="content-item">
                <h2 class="navigate-title"><span><?php echo $type_link ?> > <?php echo $title; ?></span></h2>
                <div style="padding-top:20px;">
                    <p><?php echo $des;?> </p>
                </div>
            </div>   
        <?php
        }
        $con="is_disable=0";
        $od="od DESC";
        $limit="0,20";
        $post_data=$this->select_data($this->tbl[9],$con,$od,$limit);
        if($post_data != 0){
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['title_kh'];
                    $description = $row['des_kh'];
                    $created_at = "កាលបរិច្ឆេទ: ".date_format(date_create($row['created_at']),"Y/m/d");
                    // $type_link = $row['type_link_kh'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $title = $row['title_en'];
                    $description = $row['des_en'];
                    $created_at = "Publish Date: ".date_format(date_create($row['created_at']),"Y/m/d");
                    // $type_link = $row['type_link_en'];
                    $name_link = $row['name_link_en'];
                }?>
                <div class="content-item">
                    <hr style="margin-top:20px;margin-bottom:20px;">
                    <a title="Click me to show detail!" href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $id;?>/<?php echo $type;?>/<?php echo $item;?>/<?php echo $name_link;?>"><h5><?php echo $title; ?></h5></a>
                    <div> 
                        <img class="img-tumnail" src="<?php echo $base_url;?>/cms/upl-img/<?php echo $row['image'];?>">
                        <p>  <?php echo mb_substr($description,0,150)."..."; ?> 
                        <h5 style="color: #6e9c03;"><?php echo $created_at; ?></h5></p>
                    </div>
                    
                </div>
            <?php
            }
        }
    }

    // Get News Detail
    function get_news_detail($base_url,$id,$type,$item,$code,$lang){
        if($lang=='kh'){
            $con="is_disable=0 AND name_link_kh='".$code."'";
            $item=trim($item);
            $item=str_replace("-"," ",$item);
            $id=trim($id);
            $id=str_replace("-"," ",$id);
        }else{
            $con="is_disable=0 AND name_link_en='".$code."'";
            $item=trim($item);
            $item=str_replace("-"," ",$item);
            $item=ucwords($item);
            $id=trim($id);
            $id=str_replace("-"," ",$id);
            $id=ucwords($id);
        }
        // $con="is_disable=0 AND name_link_en='".$code."'";
        $od="od ASC";
        $limit="0,1";
        $post_data=$this->select_data($this->tbl[9],$con,$od,$limit);
        if($post_data != 0){?>
            <div>
                <h2 class="navigate-title"><span><?php echo $id;?> > <?php echo $item;?></span></h2>
            </div>
            <?php
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['title_kh'];
                    $description = $row['des_kh'];
                }else{
                    $title = $row['title_en'];
                    $description = $row['des_en'];
                }?>
                <div style="padding-top:30px;">
                    <h5><span><?php echo $title; ?></span></h5>
                    <p><?php echo $description; ?></p>
                </div>
            <?php
            }
        }
    }

    // ************************************************************
    // **               Get Career Menu And Content              **
    // **               ---------------------------              **
    // ************************************************************

    // Get Career Menu
	function get_career($base_url,$lang){
        $con="is_disable=0 AND type=4";
        $od="od ASC";
        $limit="0,7";
        $post_data=$this->select_data($this->tbl[13],$con,$od,$limit);
        if($post_data != 0){
            echo '<div class="m1"></div>';
            foreach($post_data as $row){
                if($lang=='kh'){
                    $title = $row['title_kh'];
                    $type_link = $row['type_link_kh'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $title = $row['title_en'];
                    $type_link = $row['type_link_en'];
                    $name_link = $row['name_link_en'];
                }
                ?>
                <div class="m1" data-menu="<?php echo $row['type'];?>" data-smenu="<?php echo $row['id'];?>">
                    <a href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $type_link;?>/<?php echo $row['id'];?>/<?php echo $name_link;?>">
                        <div class="img-box"><img src="<?php echo $base_url; ?>cms/upl-img/<?php echo  $row['icon'];?>"></div>
                        <h6><?php echo $title; ?></h6>
                    </a>
                </div>
            <?php
            }
            echo '<div class="m1"></div>';
		}
    }

    // Get Job Opportunity
    function get_job_opportunity($base_url,$id,$type,$item,$lang){
        if($type==13){ // Job Opportunity
            $type_id=0;
        }else if($type==14){ // Internship
            $type_id=1;
        }else if($type==15){ // Volunteer
            $type_id=2;
        }
        // Get Content Banner
        $con1="is_disable=0 AND type_id=".$type."";
        $post_data1=$this->select_current_data($this->tbl[11],$con1);
        if ($post_data1!=0){
            if($lang=='kh'){
                $title = $post_data1['title_kh'];
                $des = $post_data1['description_kh'];
                $type_link = $post_data1['mm_link_kh'];
            }else{
                $title = $post_data1['title_en'];
                $title = strtoupper($title);
                $des = $post_data1['description_en'];
                $type_link = $post_data1['mm_link_en'];
                $type_link=trim($type_link);
                $type_link=str_replace("-"," ",$type_link);
                // $type_link=ucwords($type_link);
                $type_link=strtoupper($type_link);
            }?>
            <div class="content-item">
                <h2 class="navigate-title"><span><?php echo $type_link;?> > <?php echo $title; ?></span></h2>
                <div style="padding-top:20px;">
                    <p><?php echo $des;?> </p>
                </div>
            </div>    
        <?php
        }
        $con="is_disable=0 AND type_id=".$type_id."";
        $od="od DESC";
        $limit="0,20";
        $post_data=$this->select_data($this->tbl[6],$con,$od,$limit);
        if($post_data != 0){?>
        <div class="wrap-job">
        <?php
            foreach($post_data as $row){
                if($lang=='kh'){
                    $position = $row['position_kh'];
                    $description = $row['des_kh'];
                    $close_date = "កាលបរិច្ឆេទឈប់ទទួលពាក្យ: ".$row['close_date'];
                    $name_link = $row['name_link_kh'];
                }else{
                    $position = $row['position_en'];
                    $description = $row['des_en'];
                    $close_date = "Closing Date: ".$row['close_date'];
                    $name_link = $row['name_link_en'];
                }?>
                <div class="content-item">
                    <hr style="margin-top:20px;margin-bottom:20px;">
                    <a title="Click me to show detail!" href="<?php echo $base_url; ?><?php echo $lang;?>/<?php echo $id;?>/<?php echo $type;?>/<?php echo $item;?>/<?php echo $name_link;?>"><h5><?php echo $position; ?></h5></a>
                    <p><?php echo $description; ?></p>
                    <h5  style="color: #6e9c03;"><?php echo $close_date;?></h5>
                </div>
            <?php
            }
            ?>
            </div>
            
            <!-- <div class="text-center" style="margin: 50px 0;">
                <a class="btn btn-success" id="btn-more">More.</a>
            </div> -->
            <?php
        }
    }

    // Get Job Opportunity Detail
    function get_job_opportunity_detail($base_url,$id,$type,$item,$code,$lang){
        
        if($lang=='kh'){
            $con="is_disable=0 AND name_link_kh='".$code."'";
            $item=trim($item);
            $item=str_replace("-"," ",$item);
            $id=trim($id);
            $id=str_replace("-"," ",$id);
        }else{
            $con="is_disable=0 AND name_link_en='".$code."'";
            $item=trim($item);
            $item=str_replace("-"," ",$item);
            $item=ucwords($item);
            $id=trim($id);
            $id=str_replace("-"," ",$id);
            $id=ucwords($id);
        }
        // $con="is_disable=0 AND name_link_en='".$code."'";
        $od="od ASC";
        $limit="0,1";
        $post_data=$this->select_data($this->tbl[6],$con,$od,$limit);
        if($post_data != 0){?>
            <div><h2 class="navigate-title"><span><?php echo $id;?> > <?php echo $item;?></span></h2></div>
            <?php
            foreach($post_data as $row){
                if($lang=='kh'){
                    $position = $row['position_kh'];
                    $description = $row['des_kh'];
                    $duties = $row['duties_and_respon_kh'];
                    $skill = $row['skill_and_specification_kh'];
                    $how_to_apply = $row['how_to_apply_kh'];
                    $location = $row['location_kh'];
                    $location_title = "ទីតាំង";
                }else{
                    $position = $row['position_en'];
                    $description = $row['des_en'];
                    $duties = $row['duties_and_respon_en'];
                    $skill = $row['skill_and_specification_en'];
                    $how_to_apply = $row['how_to_apply_en'];
                    $location = $row['location_en'];
                    $location_title = "Location";
                }?>
                <div style="padding-top:40px;">
                    <h4><?php echo $position; ?></h4>
                    <p><?php echo $description;?></p>
                </div>
                
                <div><?php echo $duties;?></div><hr>

                <div><?php echo $skill;?></div><hr>

                <div><?php echo $how_to_apply;?></div><hr>

                <div>
                    <h5 style="padding:20px 0;"><?php echo $location_title;?></h5>
                    <p><?php  echo $location;?></p>
                </div><hr>

                <div style="padding:50px 0;">
                    <div class="fb-comments" data-href="<?php echo $base_url; ?><?php echo $id;?>/<?php echo $type;?>/<?php echo $item;?>/<?php echo $row['name_link_en'];?>" data-numposts="5"></div>
                </div>
                <hr>

                <div>        
                    <h5 style="padding:15px 0;">Submit Your CV</h5>                                                             
                    <form action="<?php echo BASE_URL;?>gmail_job.php" method="POST" enctype="multipart/form-data" style="padding:30px 20px;border:2px solid #ccc;border-radius:5px;">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <input class="form-control" type="file" name="txt_file" id="txt_file" required style="height:52px;padding-top:10px;"> 
                                <!-- <input type="text" name="txt_photo" id="txt_photo" class="form-control"> -->
                                <br>
                                <span>*** Only PDF file is accepted. And the maximum is 10MB.</span> 
                                <input type="hidden" name="txt_current_url" id="txt_current_url" value="<?php echo BASE_URL.$lang.'/'.$id.'/'.$type.'/'.$item.'/'.$code;?>">    
                            </div>

                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                <input class="form-control" autocomplete="off" name="txt_email" id="txt_email" type="email" placeholder="Email Address*" required style="margin-bottom:15px;">
                                <textarea class="form-control" name="txt_message" id="txt_message" style="height:150px;" placeholder="You Message Here." required></textarea>
                                <br>
                                <input class="btn btn-success pull-right" type="submit" name="submit" value="Submit" style="background-color:#97d700;outline:none;border:0px;">
                            </div>
                        </div>
                    </form>
                </div>
 
            <?php
            }
        }
    }

    // ************************************************************
    // **                 Get Contact Page Content               **
    // **                 ------------------------               **
    // ************************************************************
}
?>
