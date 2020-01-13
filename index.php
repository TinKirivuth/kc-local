<?php session_start();?>
<?php include('languages/config.php'); ?>
<!-- Start header Section -->
<?php include (BASE_PATH.'layout/header.php'); ?>
<!-- End header Section -->
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5ddbcc4943be710e1d1efa56/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!-- Start Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1609776879104409&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End Facebook -->
<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
<span id="top"></span>

<a href="#top" id="myBtn"><i class="fa fa-angle-up"></i></a>
<div class="container-fluid slide-wrap">
    <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        if($id=='home'){?>
            <!-- Start Menu Section -->
            <?php include (BASE_PATH.'layout/menu_bar.php'); ?>
            <!-- End Menu Section -->
            <div id="navbar"></div><!--For Scroll Change Background-->
            <div class="main-content">
                <div class="content-data"><?php include (BASE_PATH.'layout/slide.php');?></div>
                <!-- Footer Section -->
                <?php include (BASE_PATH.'layout/footer.php'); ?>
                <!-- End Footer Section -->
            </div>
            <!-- ============================================================================== -->
        <?php
        }else if($id=='contact' || $id=='ទំនាក់ទំនងយើង'){?>
            <!-- Start Menu Section -->
            <?php include (BASE_PATH.'layout/menu_bar.php'); ?>
            <!-- End Menu Section -->
            <div id="navbar"></div><!--For Scroll Change Background-->
            <div class="main-content">
                <div class="content-data"><?php include (BASE_PATH.'action/get_contact.php'); ?></div>
                <!-- Footer Section -->
                <?php include (BASE_PATH.'layout/footer.php'); ?>
                <!-- End Footer Section -->
            </div>
            <!-- ============================================================================= -->
        <?php
        }else{
            // ===============================================================================
            if(isset($_GET['type']) && isset($_GET['item'])){
                $type=$_GET['type'];
                $item=$_GET['item'];
                if ($type==1 || $type==2){ // Get About Page Content
                    // include (BASE_PATH.'action/get_about.php');
                    ?>
                        <!-- Start Menu Section -->
                        <?php include (BASE_PATH.'layout/menu_bar.php'); ?>
                        <!-- End Menu Section -->
                        <div id="navbar"></div><!--For Scroll Change Background-->
                        <div class="main-content">
                            <div class="content-data">
                                <?php include (BASE_PATH.'action/get_about.php'); ?>
                            </div>
                            <!-- Footer Section -->
                            <?php include (BASE_PATH.'layout/footer.php'); ?>
                            <!-- End Footer Section -->
                        </div>
                    <?php
                }else if($type==3 || $type==4 || $type==5 || $type==6 || $type==7 || $type==8 || $type==9){ // Is Business Loan Page
                    // include (BASE_PATH.'action/get_product_service.php');
                    ?>
                        <!-- Start Menu Section -->
                        <?php include (BASE_PATH.'layout/menu_bar.php'); ?>
                        <!-- End Menu Section -->
                        <div id="navbar"></div><!--For Scroll Change Background-->
                        <div class="main-content">
                            <div class="content-data">
                                <?php include (BASE_PATH.'action/get_product_service.php'); ?>
                            </div>
                            <!-- Footer Section -->
                            <?php include (BASE_PATH.'layout/footer.php'); ?>
                            <!-- End Footer Section -->
                        </div>
                    <?php
                }else if($type==10 || $type==11 || $type==12){ // Get Media Page Content
                ?>
                <!-- =================================================================== -->
                    <!-- Start Menu Section -->
                    <?php include (BASE_PATH.'layout/menu_bar.php'); ?>
                    <!-- End Menu Section -->
                    <div id="navbar"></div><!--For Scroll Change Background-->
                    <div class="main-content">
                        <div class="content-data">
                            <?php 
                                if(isset($_GET['code'])){
                                    $code=$_GET['code']; 
                                    if($code==''){
                                        include (BASE_PATH.'action/get_media.php');
                                    }else{ // Get item detail
                                        include (BASE_PATH.'action/get_media_item.php');
                                    }
                                }else{
                                    include (BASE_PATH.'action/get_media.php');
                                }
                            ?>
                        </div>
                        <!-- Footer Section -->
                        <?php include (BASE_PATH.'layout/footer.php'); ?>
                        <!-- End Footer Section -->
                    </div>
                <?php
                }else if($type==13 || $type==14 || $type==15){ // Get Career Page Content
                    ?>
                    <!-- ================================================================ -->
                    <!-- Start Menu Section -->
                    <?php include (BASE_PATH.'layout/menu_bar.php'); ?>
                    <!-- End Menu Section -->
                    <div id="navbar"></div><!--For Scroll Change Background-->
                    <div class="main-content">
                        <div class="content-data">
                            <?php 
                                if(isset($_GET['code'])){
                                    $code=$_GET['code'];
                                    if($code==''){
                                        include (BASE_PATH.'action/get_career.php');
                                    }else{ // Get item detail
                                        include (BASE_PATH.'action/get_career_item.php');
                                    }
                                }else{
                                    include (BASE_PATH.'action/get_career.php');
                                }
                            ?>
                        </div>
                        <!-- Footer Section -->
                        <?php include (BASE_PATH.'layout/footer.php'); ?>
                        <!-- End Footer Section -->
                    </div>
                    <?php
                }else{
                    echo "Page Not Found.";
                }
            }else{ // Get Home Page Content
                echo "Page Not Found.";
            } 
            // =======================================================================
        }
    }else{?>
        <!-- ========================================================================= -->
        <!-- Start Menu Section -->
        <?php include (BASE_PATH.'layout/menu_bar.php'); ?>
        <!-- End Menu Section -->
        <div id="navbar"></div><!--For Scroll Change Background-->
        <div class="main-content">
            <div class="content-data"><?php include (BASE_PATH.'layout/slide.php');?></div>
            <!-- Footer Section -->
            <?php include (BASE_PATH.'layout/footer.php'); ?>
            <!-- End Footer Section -->
        </div>
        <!-- ========================================================================== -->
    <?php
    }
    ?>
</div>
<!-- This text box use to get BASE_URL in php and past this value to ajx when mouseover -->
<input type="hidden" id="txt_url" name="txt_url" value="<?php echo $base_url;?>">
<input type="hidden" id="txt_lang" name="txt_lang" value="<?php echo $lang;?>">


<!-- Start Bottom Js -->
<?php include (BASE_PATH.'layout/bottom_js.php'); ?>
<!-- End Bottom Js -->
<script> 
$(document).ready(function () {
    
    check_main_menu_color();
    
    function check_main_menu_color(){
        var is_home = $('#txt_is_home');
        if(is_home.val()==1){
            $('.menu ul li a').css({'color':'#fff'});
        }
        else{
            $('.menu ul li a').css({'color':'#001a72'});
        }
    }

    // body.on('mouseover','.table-service-menu ul li a',function(){
        //     eThis=$(this);
        //     var bg = eThis.data('Bg');
        //     // alert(bg);
        //     eThis.css({'background-color':'#97d700'});
        // });
        // body.on('mouseout','.table-service-menu ul li a',function(){
        //     eThis=$(this);
        //     var bg = eThis.data('Bg');
        //     // alert(bg);
        //     // if(bg!='#97d700'){
        //         eThis.css({'background-color':'#f5f5f5'});
        //     // }else{
        //     // // eThis.css({'background-color':'#97d700'});
        //     // }
        // });
    
    // Mouseover on main menu
    body.on('mouseover','.btn1',function(){
        lang = $('#txt_lang').val();
        base_url = $('#txt_url').val();
        eThis=$(this);
        main_menu=eThis.data('menu');//get attribute data
        $('.sub').hide();
        $('.menu-table').hide();
        $('.menu-table1').hide();
        $('.menu-table2').hide();
        $('.menu-table3').hide();
        if (main_menu==1) { // Get About
            $('.sub').show();
            $('.menu-table').show();
        }else if (main_menu==2) { // Get Product and Service
            $('.sub').show();
            $('.menu-table1').show();
        }else if (main_menu==3) { // Get Media
            $('.sub').show();
            $('.menu-table2').show();
        }else if (main_menu==4) { // Get Career
            $('.sub').show();
            $('.menu-table3').show();
        }

        // // Get Menu From Database
        // $.ajax({
        //     type:'POST',
        //     url:''+base_url+'action/get_menu.php',
        //     data:{main_menu:main_menu,base_url:base_url,lang:lang},
        //     cache:false,
        //     success:function(data){
        //         $('.menu-table').html(data);
        //     }
        // });
        
    });

    // Mouseout on main menu
    body.on('mouseout','.btn1',function(){
        $('.sub').hide();
    });

    // Mouseover on submenu when screen is big
    body.on('mouseover','.sub',function(){
        $('#box').show();
        $('.sub').show();
    });
    
    // Mouseout on submenu when screen is big
    body.on('mouseout','.sub',function(){
        $('#box').hide();
        $('.sub').hide();
    });
   
    // show menu list when click menu toggle button when screen is small
    body.on('click','#btn-menu1',function(){
        $('#btn-close').show();
        $('.virtual-menu-row').show("slow");
        $(this).hide();
    });

    // click show dropdown menu when screen is small
    body.on('click','.click-show',function(){
        var eThis=$(this);
        eThis.parent().find('.menu1-sub-item').toggle("slow");
    });

    // button close menu list when screen is small
    body.on('click','#btn-close',function(){
        $('#btn-menu1').show();
        $('.virtual-menu-row').hide("slow");
        $(this).hide();
        $(".drop-down-list").hide();
    });    

    // Over Photo Gallery Item
    body.on('mouseover','.image-item',function(){
        var eThis=$(this);
        eThis.find('.img-wrap').css({'padding':'35px 25px'});
        eThis.find('.img-title').css({'font-size':'22px'});
        eThis.find('.img-readmore').css({'font-size':'28px','font-weight':'bold'});
        eThis.find('.fa').css({'font-size':'20px'});
        eThis.find('.image-content').show();  
    });

    body.on('mouseout','.image-item',function(){
        var eThis=$(this);
        eThis.find('.image-content').hide();
        eThis.find('.img-wrap').css({'padding':'15px 25px'});
        eThis.find('.img-title').css({'font-size':'28px'});
        eThis.find('.img-readmore').css({'font-size':'20px'});
    });

    // Change Value Interest
    body.on('change', '#interest', function(){
        var eThis=$(this);
        $('#interest-indecate').html(eThis.val());
        cal_loan_amount();
    });

    // Change value Tenure
    body.on('change', '#tenure', function(){
        var eThis=$(this);
        $('#tenure-indecate').html(eThis.val());
        cal_loan_amount();
    });

    // Check about borrow
    body.on('keyup', '#amount_borrow', function(){
        var eThis=$(this);
        cal_loan_amount();
    });

    var ammount;
    var interest;
    var tenure;
    function cal_loan_amount(){
        let min = 1000;
        let max = 500000;
        ammount = $('#amount_borrow');
        interest = $('#interest');
        tenure = $('#tenure');

        var principle_permonth = ammount.val()/tenure.val();
        var interest_permonth = ((interest.val()/tenure.val()) * ammount.val())/100;
        var total_permonth = principle_permonth + interest_permonth;

        if(ammount.val() < min || ammount.val() > max){
            ammount.css('border', '1px solid red');
        }else{
            ammount.css('border', '1px solid #ccc');
            $('#result').html(Math.round(total_permonth));
        }
    }
    
});
</script>
</body>
</html>
