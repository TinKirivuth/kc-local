  <?php include('layout/header.php'); ?>
  <!-- End Header -->

	<!-- Start Top Bar(Logo Bar) -->
	<?php include('layout/top_bar.php'); ?>
  <!-- End Top Bar -->

	<!-- Start Vitual Left Menu -->
  <?php include('layout/vitual_left_menu.php'); ?>
	<!-- End Vitual Left Menu -->

  <!-- Stat Main Content -->
  <div class="container-fluid main-content" style="">
  	  <div class="row" style="">
            <!-- Start Fixed Left Menu -->
      		<?php include('layout/left_menu.php'); ?>
            <!-- End Fixed Left Menu -->
      		<div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 content-wrap" style="">
    			<div class="">
                <!-- Start Top Navigation Bar -->
      			<?php include('layout/top_navbar.php'); ?>
                <!-- End Top Navigation Bar -->

                <!-- Start Content -->
                <?php include('layout/content.php'); ?>
                <!-- End Content -->
    			</div>
      		</div>
    	</div>
  </div>
  <!-- End Main Content -->

  <!-- Start Footer -->
  <!-- End Footer -->

	<!-- Start Bottom JS -->
	<?php include('layout/bottom_js.php'); ?>
  <!-- End Bottom JS -->

	<script>
		$(document).ready(function(){
            // Testing with double click
            body.on('dblclick', '.tbl-data tr', function(){
                var eThis = $(this);
                var id=eThis.find('td:eq(0)').text();
                var pop='<div class="popup-form"></div>';
                body.append(pop);
                $.ajax({
                    url:'form/'+frm[opt]+'.php',
                    type:'POST',
                    data:{},
                    cache:false,
                    success:function(data){
                        $('.popup-form').append(data);

                        // $.ajax({
                        //     url:'action/menu_item/get-menu-item-edit.php',
                        //     type:'POST',
                        //     data:{opt:opt,id:id},
                        //     cache:false,
                        //     dataType:'json',
                        //     success:function(data){
                        //         $('#txt_id').val(id);
                        //         $('#txt_edit_id').val(id);
                        //         $('#txt_od').val(data.od);
                        //         $('#txt_type_id').val(data.type);
                        //         $('#txt_photo1').val(data.icon);
                        //         $('.img-box1').css({'background-image':'url("upl-img/'+data.icon+'")'});
                        //         $('#txt_title_kh').val(data.title_kh);
                        //         $('#txt_title_en').val(data.title_en);
                        //         $('#txt_photo').val(data.image);
                        //         $('.img-box').css({'background-image':'url("upl-img/'+data.image+'")'});
                        //         $('#txt_is_disable').val(data.is_disable); 
                        //     }
                        // });					
                    }				
                });
            });


            //if you want to add alert popup event you login
                // alert_popup();

                // Clear Popup
                // setTimeout(function(){
                //     $('.popup').remove();
                //     return;
                // }, 4000);

                // alert popup
                // function alert_popup(){
                //     var popup='<div class="popup"></div>';
                //     body.append(popup);
                //     $.ajax({
                //         type:'POST',
                //         url:'form/check_alert.php',
                //         data:{},
                //         cache:false,
                //         success:function(data){
                //             $('.popup').append(data);
                //         }
                //     });
                // }

            
            
           
            // search data by click button search
            body.on('click', '#btn_find', function(){
                search_data();
            });

            // Search Data with Enter Key on text box search
            var input = document.getElementById("txt_find_text");
            input.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                    search_data();
                }
            });

            // Next Record Pagination
            //$('#btn_next').click(function(){
            body.on('click', '#btn_next', function(){
                next_page();
            });

            // Back Record Pagination
            // $('#btn_back').click(function(){
            body.on('click', '#btn_back', function(){
                back_page();
            });

            // body.on('click','.top-menu-bar .label-title',function(){
                //     var eThis=$(this);
                //     var opt=eThis.data('opt');
                //     alert(opt);
                // }); 

            // Get Form Listing Page
            body.on('click','.drop-down ul li',function(){
                var eThis=$(this);
                opt=eThis.data('opt');//get attribute data
                body.find('.drop-down ul li').css({'color':'#000'});
                eThis.css({'color':'red'});
                $('.content1').show();
                $('.top-menu-bar').show();
                $('.top-menu-bar .label-title').text(eThis.text());
                $('.top-menu-bar .label-title').data('opt',opt); //set attribute data
                $('.pager').show();
                body.find('input').attr({"autocomplete":"off"});
                $('#btn-add-new').show();
                con="id>0";
                if(opt==0){ //user
                    con="id>0";
                }else if(opt==1){ //menu
                    con="id>0";
                }else if(opt==2){ //permission
                    con="id>0";
                }else if(opt==3){ //company profile
                    con="tbl_company_profile.id>0";
                    $('#btn-add-new').hide();
                }else if(opt==4){ //management team
                    con="tbl_management_team.id>0";
                }else if(opt==5){ //product and service
                    con="tbl_product_service.id>0";
                    $('#btn-add-new').hide();
                }else if(opt==6){ //job opportunity
                    con="tbl_job_opportunity.id>0";
                }else if(opt==7){ //photo
                    con="tbl_photo_gallery.id>0";
                }else if(opt==8){ //public 
                    con="id>0";
                }else if(opt==9){ //news
                    con="tbl_news.id>0";
                }else if(opt==10){ //contact information
                    con="id>0";
                }else if(opt==11){ //content and banner
                    con="tbl_content_banner.id>0";
                    $('#btn-add-new').hide();
                }else if(opt==12){ //personal information
                    con="id>0";
                }else if(opt==13){ //Menu Items
                    con="id>0";
                    $('#btn-add-new').hide();
                }
                loading();
                // Get Data Listing Page
                $.ajax({
                    type:'POST',
                    url:'action/'+tbl[opt]+'.php',
                    // url:link_url,
                    data:{s:0,con:con,opt:opt,show_record:show_record.val()},
                    cache:false,
                    success:function(data){
                        $('.tbl-data').html(data);
                        $('.popup').remove();
                    }
                });

                // Count Data For Next Button Pagination
                $.ajax({
                    url:'action/countdata.php',
                    type:'POST',
                    data:{opt:opt,con:con},// variable for pagination
                    cache:false,
                    dataType:"json",
                    success:function(data){
                        tData.val(data.total-parseInt(show_record.val()));
                        sData.val(0);
                        total_record.val(data.total);//Total Record at listing page
                    }
                });

                //Filter Button Search
                $('#txt_filter').html(findOpt[opt]);
            });

            // change record number show
            // $('#my-select').change(function(){
            body.on('change', '#my-select', function(){
                change_display_record();
            });

            // Log Out
            $('.welcome-user').mouseover(function(){
                $('.logout').css({'visibility':'visible'});
            });

            $('.welcome-user').mouseout(function(){
                $('.logout').css({'visibility':'hidden'});
            });

    		// show vitual menu popup
    		body.on('click', '.btn-menu', function(){
                var pop='<div class="popup"></div>';
    			$('body').append(pop);
    			$('.left-menu').css({'left':'0px'});
            });

        	// close menu popup
        	body.on('click','.popup',function(){
        		$(this).remove();
        		$('.left-menu').css({'left':'-300px'});
        	});

            // Show Submenu
            body.on('click','.click-show',function(){
                var eThis=$(this);
                eThis.parent().find('.drop-down').toggle('slow');
            });

            // Add Popup Form
            body.on('click','#btn-add-new',function(){
                add_popup_form();
            });
 
            // Close Form Pupup
            body.on('click','.btn-close',function(){
                tinyMCE.remove();
                $('.popup-form').remove();
            });

            // Save Data
            body.on('click','#btn-post',function(){
                var eThis=$(this);
                post_data_to_server(eThis,body);
            });

            /*Edit Show Data*/
            body.on('click','.btn-edit',function(){
                var eThis=$(this);
                edit_data_to_server(eThis,body);
            });

            // Delete Data
            body.on('click', '.btn-delete', function(){
                var eThis=$(this);
                // disable_data(eThis,body);
                delete_data(eThis,body);
                // if(opt==0){ //user

                // }else if(opt==1){ //menu

                // }else if(opt==2){ //permission

                // }else if(opt==3){ //company profile
                    
                // }else if(opt==4){ //management team

                // }else if(opt==5){ //product and service

                // }else if(opt==6){ //job opportunity

                // }else if(opt==7){ //photo

                // }else if(opt==8){ //public holiday

                // }else if(opt==9){ //news

                // }else if(opt==10){ //contact information

                // }else if(opt==11){ //content and banner

                // }else if(opt==12){ //personal information

                // }else{
                //     return 0;
                // }
            });

            // Disable Data
            body.on('click', '.btn-disable', function(){
                var eThis=$(this);
                // disable_data(eThis,body);
                disable_data(eThis,body);
                // if(opt==0){ //user

                // }else if(opt==1){ //menu

                // }else if(opt==2){ //permission

                // }else if(opt==3){ //company profile
                    
                // }else if(opt==4){ //management team

                // }else if(opt==5){ //product and service

                // }else if(opt==6){ //job opportunity

                // }else if(opt==7){ //photo

                // }else if(opt==8){ //public holiday

                // }else if(opt==9){ //news

                // }else if(opt==10){ //contact information

                // }else if(opt==11){ //content and banner

                // }else if(opt==12){ //personal information

                // }else{
                //     return 0;
                // }
            });

            //upload image
            body.on('change','#txt_file',function(){
                var eThis=$(this);
                upload_image(eThis,body);
            });

            //upload image1
            body.on('change','#txt_file1',function(){
                var eThis=$(this);
                upload_image1(eThis,body);
            });

            //upload image2
            body.on('change','#txt_file2',function(){
                var eThis=$(this);
                upload_image2(eThis,body);
            });

            //upload image3
            body.on('change','#txt_file3',function(){
                var eThis=$(this);
                upload_image3(eThis,body);
            });

            //upload image4
            body.on('change','#txt_file4',function(){
                var eThis=$(this);
                upload_image4(eThis,body);
            });

            //upload image5
            body.on('change','#txt_file5',function(){
                var eThis=$(this);
                upload_image5(eThis,body);
            });

            //upload image6
            body.on('change','#txt_file6',function(){
                var eThis=$(this);
                upload_image6(eThis,body);
            });

            //upload image7
             body.on('change','#txt_file7',function(){
                var eThis=$(this);
                upload_image7(eThis,body);
            });

            //upload image8
             body.on('change','#txt_file8',function(){
                var eThis=$(this);
                upload_image8(eThis,body);
            });

            //upload image9
            body.on('change','#txt_file9',function(){
                var eThis=$(this);
                upload_image9(eThis,body);
            });

            //upload image10
            body.on('change','#txt_file10',function(){
                var eThis=$(this);
                upload_image10(eThis,body);
            });

            // clear image
            body.on('click','.clr-img',function(){
                $('.img-box').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo').val('');
            });

            // clear image1
            body.on('click','.clr-img1',function(){
                $('.img-box1').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo1').val('');
            });

            // clear image2
            body.on('click','.clr-img2',function(){
                $('.img-box2').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo2').val('');
            });

            // clear image3
            body.on('click','.clr-img3',function(){
                $('.img-box3').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo3').val('');
            });

            // clear image2
            body.on('click','.clr-img4',function(){
                $('.img-box4').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo4').val('');
            });
            
            // clear image5
            body.on('click','.clr-img5',function(){
                $('.img-box5').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo5').val('');
            });

            // clear image6
            body.on('click','.clr-img6',function(){
                $('.img-box6').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo6').val('');
            });

            // clear image7
            body.on('click','.clr-img7',function(){
                $('.img-box7').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo7').val('');
            });

            // clear image8
            body.on('click','.clr-img8',function(){
                $('.img-box8').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo8').val('');
            });

            // clear image9
            body.on('click','.clr-img9',function(){
                $('.img-box9').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo9').val('');
            });

            // clear image10
            body.on('click','.clr-img10',function(){
                $('.img-box10').css({'background-image':'url("images/download.jpg")'});
                $('#txt_photo10').val('');
            });

            // Show Multiple Upload File Form
            body.on('click','.multipleUpload',function(){
                show_multiple_upload();
            });

            // body.on('click','.btnUpload',function(e){
            //     multipleUpload(eThis,body);
            //     // e.preventDefault();
            //     // $.ajax({
            //     //     url: 'action/multipleUpload.php',
            //     //     type: 'post',
            //     //     data: new FormData(this),
            //     //     contentType: false,
            //     //     processData: false,
            //     //     success: function(result){
            //     //         // $('#output').html(result);
            //     //         alert(result);
            //     //     }
            //     // });
            // });
            body.on('change','#file',function(){
                var eThis=$(this);
                var frm = eThis.closest('form.multipleUpl');
                var frm_data = new FormData(frm[0]);
                var f=$('#txt')
                alert(11);
                // $.ajax({
                //     url:'action/multipleUpload.php',
                //     type:'POST',
                //     data:frm_data,
                //     contentType:false,
                //     cache:false,
                //     processData:false,
                //     dataType:"json",
                //     success:function(data){
                //         alert(data);
                //     }
                // });
            });
		});
    </script>
	</body>
</html>
