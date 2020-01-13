// ************************************************************
// **               General Function Home Page               **
// **               --------------------------               **
// ************************************************************


// =====Function Loading=======
function loading(){
    var popup='<div class="popup"><div style="margin: auto;width: 200px;margin-top:10%;font-size: 200px;color: white;"><img src="images/loading1.gif"></div></div>';
    body.append(popup);
}

// Search Data
function search_data(){
    // var findOpt=$('#txt_filter').val();
    var findText=$('#txt_find_text').val();
    // con=""+findOpt+" like '"+findText+"%'";

    if (opt==0){ //user
        con="";
    }else if(opt==1){ //menu
        con="";
    }else if(opt==2){ //permission
        con="";
    }else if(opt==3){ //company profile
        con="tbl_company_profile.con_title_kh like '%"+findText+"%' OR tbl_company_profile.con_title_en like '%"+findText+"%' OR tbl_company_profile.con_des_kh like '%"+findText+"%' OR tbl_company_profile.con_des_en like '%"+findText+"%' OR tbl_company_profile.mis_title_kh like '%"+findText+"%' OR tbl_company_profile.mis_title_en like '%"+findText+"%' OR tbl_company_profile.mis_des_kh like '%"+findText+"%' OR tbl_company_profile.mis_des_en like '%"+findText+"%' OR tbl_company_profile.vi_title_kh like '%"+findText+"%' OR tbl_company_profile.vi_title_en like '%"+findText+"%' OR tbl_company_profile.vi_des_kh like '%"+findText+"%' OR tbl_company_profile.vi_des_en like '%"+findText+"%'";
    }else if(opt==4){ //management team
        con="tbl_management_team.name_kh like '%"+findText+"%' OR tbl_management_team.name_en like '%"+findText+"%' OR tbl_management_team.position_kh like '%"+findText+"%' OR tbl_management_team.position_en like '%"+findText+"%'";
    }else if(opt==5){ //product and service
        con="tbl_product_service.name_kh like '%"+findText+"%' OR tbl_product_service.name_en like '%"+findText+"%' OR tbl_product_service.des_kh like '%"+findText+"%' OR tbl_product_service.des_en like '%"+findText+"%' OR tbl_product_service.content_kh like '%"+findText+"%' OR tbl_product_service.content_en like '%"+findText+"%' OR tbl_product_service.type_link_kh like '%"+findText+"%' OR tbl_product_service.type_link_en like '%"+findText+"%'";
    }else if(opt==6){ //job opportunity
        con="tbl_job_opportunity.position_kh like '%"+findText+"%' OR tbl_job_opportunity.position_en like '%"+findText+"%' OR tbl_job_opportunity.des_kh like '%"+findText+"%' OR tbl_job_opportunity.des_en like '%"+findText+"%' OR tbl_job_opportunity.location_kh like '%"+findText+"%' OR tbl_job_opportunity.location_en like '%"+findText+"%' OR tbl_job_opportunity.post_date like '%"+findText+"%' OR tbl_job_opportunity.close_date like '%"+findText+"%'";
    }else if(opt==7){ //photo
        con="tbl_photo_gallery.title_kh like '%"+findText+"%' OR tbl_photo_gallery.title_en like '%"+findText+"%' OR tbl_photo_gallery.des_kh like '%"+findText+"%' OR tbl_photo_gallery.title_en like '%"+findText+"%' OR tbl_photo_gallery.created_at like '%"+findText+"%'";
    }else if(opt==8){ //public 
        con="tbl_public_holiday.date_kh like '%"+findText+"%' OR tbl_public_holiday.date_en like '%"+findText+"%' OR tbl_public_holiday.title_kh like '%"+findText+"%' OR tbl_public_holiday.title_en like '%"+findText+"%'";
    }else if(opt==9){ //news
        con="tbl_news.title_kh like '%"+findText+"%' OR tbl_news.title_en like '%"+findText+"%' OR tbl_news.des_kh like '%"+findText+"%' OR tbl_news.des_en like '%"+findText+"%' OR tbl_news.created_at like '%"+findText+"%'";
    }else if(opt==10){ //contact information
        con="tbl_treasury_consolidate_list.lastName like '%"+findText+"%'";
    }else if(opt==11){ //content and banner
        con="tbl_content_banner.title_kh like '%"+findText+"%' OR tbl_content_banner.title_en like '%"+findText+"%' OR tbl_content_banner.description_kh like '%"+findText+"%' OR tbl_content_banner.description_en like '%"+findText+"%' OR tbl_content_banner.created_at like '%"+findText+"%'";
    }else if(opt==12){ //personal information
        con="tbl_treasury_consolidate_list.lastName like '%"+findText+"%'";
    }else if(opt==13){ //menu item
        con="tbl_menu_item.title_kh like '"+findText+"%' OR tbl_menu_item.title_en like '"+findText+"%'";
    }else if(opt==14){ // type
        con="tbl_treasury_consolidate_list.lastName like '"+findText+"%'";
    }


    loading();
    $.ajax({
        type:'POST',
        url:'action/'+tbl[opt]+'.php',
        data:{s:0,con:con,opt:opt,show_record:show_record.val()},
        cache:false,
        success:function(data){
            $('.tbl-data').html(data);
            $('.popup').remove();
        }
    });

    // count data after find
    $.ajax({
        type:'POST',
        url:'action/countdata.php',
        data:{opt:opt,con:con},// variable for pagination
        cache:false,
        dataType:"json",
        success:function(data){
            tData.val(data.total-parseInt(show_record.val()));
            sData.val(0);
            total_record.val(data.total);//Total Record at listing page
        }
    });
}

// Multiple Upload

// function multipleUpload(eThis,body){
//     var frm = eThis.closest('form.multipleUpl');
//     var frm_data = new FormData(frm[0]);
//     $.ajax({
//         url:'action/multipleUpload.php',
//         type:'POST',
//         data:frm_data,
//         contentType:false,
//         cache:false,
//         processData:false,
//         dataType:"json",
//         success:function(data){
//             alert(data);
//         }
//     });
// }
// Upload Image
function upload_image(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box').css({'background-image':'url("upl-img/'+data.photoName+'")'});
            $('#txt_photo').val(data.photoName);
        }
    });
}

// Upload Image1
function upload_image1(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl1.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box1').css({'background-image':'url("upl-img/'+data.photoName1+'")'});
            $('#txt_photo1').val(data.photoName1);
        }
    });
}

// Upload Image2
function upload_image2(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl2.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box2').css({'background-image':'url("upl-img/'+data.photoName2+'")'});
            $('#txt_photo2').val(data.photoName2);
        }
    });
}

// Upload Image3
function upload_image3(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl3.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box3').css({'background-image':'url("upl-img/'+data.photoName3+'")'});
            $('#txt_photo3').val(data.photoName3);
        }
    });
}

// Upload Image4
function upload_image4(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl4.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box4').css({'background-image':'url("upl-img/'+data.photoName4+'")'});
            $('#txt_photo4').val(data.photoName4);
        }
    });
}

// Upload Image5
function upload_image5(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl5.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box5').css({'background-image':'url("upl-img/'+data.photoName5+'")'});
            $('#txt_photo5').val(data.photoName5);
        }
    });
}

// Upload Image6
function upload_image6(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl6.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box6').css({'background-image':'url("upl-img/'+data.photoName6+'")'});
            $('#txt_photo6').val(data.photoName6);
        }
    });
}

// Upload Image7
function upload_image7(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl7.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box7').css({'background-image':'url("upl-img/'+data.photoName7+'")'});
            $('#txt_photo7').val(data.photoName7);
        }
    });
}

// Upload Image8
function upload_image8(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl8.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box8').css({'background-image':'url("upl-img/'+data.photoName8+'")'});
            $('#txt_photo8').val(data.photoName8);
        }
    });
}

// Upload Image9
function upload_image9(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl9.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box9').css({'background-image':'url("upl-img/'+data.photoName9+'")'});
            $('#txt_photo9').val(data.photoName9);
        }
    });
}

// Upload Image10
function upload_image10(eThis,body){
    var frm = eThis.closest('form.upl');
    var frm_data = new FormData(frm[0]);
    $.ajax({
        url:'action/upl10.php',
        type:'POST',
        data:frm_data,
        contentType:false,
        cache:false,
        processData:false,
        dataType:"json",
        success:function(data){
            $('.img-box10').css({'background-image':'url("upl-img/'+data.photoName10+'")'});
            $('#txt_photo10').val(data.photoName10);
        }
    });
}
 
// Add Popup Form
function add_popup_form(){
    var popup='<div class="popup-form"></div>';
    body.append(popup);
    $.ajax({
        type:'POST',
        url:'form/'+frm[opt]+'.php',
        data:{opt:opt},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            // Get AutoID
            $.ajax({
                type:'POST',
                url:'action/get-auto-id.php',
                data:{opt:opt},
                cache:false,
                dataType:'json',
                success:function(data){
                    $('#txt_id').val(data.id);
                    $('#txt_od').val(data.id);
                }
            });
            body.find('input').attr({"autocomplete":"off"});
            // Call Text Editor
            tinyMCE.remove();
            calleditor();
            // End Call Text Editor
        }
    });
}

// Show Popup Form Multiple Upload File
function show_multiple_upload(){
    var popup='<div class="popup-form"></div>';
    body.append(popup);
    $.ajax({
        type:'POST',
        url:'form/frm-multiple-upload.php',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
        }
    });
}


// ************************************************************ 
// **               Working Pagination with DB               **
// **               --------------------------               **
// ************************************************************


// Next Page
function next_page(){
    if(tData.val()<=0){
        alert('No record next..!');
        return;
    }
    tData.val(parseInt(tData.val())-parseInt(show_record.val()));
    sData.val(parseInt(sData.val())+parseInt(show_record.val()));
    loading();
    $.ajax({
        url:'action/'+tbl[opt]+'.php',
        type:'POST',
        data:{s:sData.val(),con:con,opt:opt,show_record:show_record.val()},
        cache:false,
        success:function(data){
            $('.tbl-data').html(data);
            $('.popup').remove();
        }
    });
}

// Next Page
function back_page(){
    if(sData.val()<=0){
        alert('No record back..!');
        return;
    }
    tData.val(parseInt(tData.val())+parseInt(show_record.val()));
    sData.val(parseInt(sData.val())-parseInt(show_record.val()));
    loading();
    $.ajax({
        url:'action/'+tbl[opt]+'.php',
        type:'POST',
        data:{s:sData.val(),con:con,opt:opt,show_record:show_record.val()},
        cache:false,
        success:function(data){
            $('.tbl-data').html(data);
            $('.popup').remove();
        }
    });
}

// Change Display Record
function change_display_record(){
    tData.val(parseInt(total_record.val())-parseInt(show_record.val()));
    loading();
    $.ajax({
        url:'action/'+tbl[opt]+'.php',
        type:'POST',
        data:{s:0,con:con,opt:opt,show_record:show_record.val()},
        cache:false,
        success:function(data){
            $('.tbl-data').html(data);
            $('.popup').remove();
        }
    });
}


// ************************************************************
// **               Working Crud With Database               **
// **               --------------------------               **
// ************************************************************

// ==== Delete Company Profile ====
function delete_data(eThis,body){
    // var tr=eThis.parents('tr');
    // ind=tr.index();
    // var id=tr.find('td:eq(0)').text();
    // loading();
    // $.ajax({
    //     url:'action/delete-data.php',
    //     type:'POST',
    //     data:{opt:opt,id:id},
    //     cache:false,
    //     dataType:'json',
    //     success:function(data){
    //         $('.popup').remove();
    //         // alert(data.message);
    //     }
    // });	
}

// Disable Data
function disable_data(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    loading();
    $.ajax({
        url:'action/disable-data.php',
        type:'POST',
        data:{opt:opt,id:id},
        cache:false,
        dataType:'json',
        success:function(data){
            $('.popup').remove();
        }
    });	
}

// Post Data To Server
function post_data_to_server(eThis,body){
    if(opt==0){ //user

    }else if(opt==1){ //menu

    }else if(opt==2){ //permission

    }else if(opt==3){ //company profile
        save_company_profile(eThis,body);
    }else if(opt==4){ //management team
        save_management_team(eThis,body); 
    }else if(opt==5){ //product and service
        save_product_service(eThis,body); 
    }else if(opt==6){ //job opportunity
        save_job_opportunity(eThis,body);
    }else if(opt==7){ //photo
        save_photo_gallery(eThis,body);
    }else if(opt==8){ //public holiday
        save_public_holiday(eThis,body);
    }else if(opt==9){ //news
        save_news(eThis,body);
    }else if(opt==10){ //contact information

    }else if(opt==11){ //content and banner
        save_content_banner(eThis,body);
    }else if(opt==12){ //personal information

    }else if(opt==13){ //Menu Item
        save_menu_item(eThis,body);
    }else{
        return 0;
    }
}

// Edit Data To Server
function edit_data_to_server(eThis,body){
    if(opt==0){ //user

    }else if(opt==1){ //menu

    }else if(opt==2){ //permission

    }else if(opt==3){ //company profile
        get_edit_company_data(eThis,body);
    }else if(opt==4){ //management team
        get_edit_management_team(eThis,body);
    }else if(opt==5){ //product and service
        get_edit_product_service(eThis,body);
    }else if(opt==6){ //job opportunity
        get_edit_job_opportunity(eThis,body);
    }else if(opt==7){ //photo gallery
        get_edit_photo_gallery(eThis,body);
    }else if(opt==8){ //public holiday
        get_edit_public_holiday(eThis,body);
    }else if(opt==9){ //news
        get_edit_news(eThis,body);
    }else if(opt==10){ //contact information

    }else if(opt==11){ //content and banner
        get_edit_content_banner(eThis,body);
    }else if(opt==12){ //personal information

    }else if(opt==13){
        get_edit_menu_item(eThis,body);
    }else{
        return 0;
    }
}

// ==== Save Company Profile =====
function save_company_profile(eThis,body) {
    tinyMCE.triggerSave();
    var imgBox=$('.img-box');
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var txt_od=$('#txt_od'); 
    var txt_con_title_kh=$('#txt_con_title_kh');
    var txt_con_title_en=$('#txt_con_title_en');
    var txt_con_des_kh=$('#txt_con_des_kh');
    var txt_con_des_en=$('#txt_con_des_en');
    var txt_mis_title_kh=$('#txt_mis_title_kh');
    var txt_mis_title_en=$('#txt_mis_title_en');
    var txt_mis_des_kh=$('#txt_mis_des_kh');
    var txt_mis_des_en=$('#txt_mis_des_en');
    var txt_vi_title_kh=$('#txt_vi_title_kh');
    var txt_vi_title_en=$('#txt_vi_title_en');
    var txt_vi_des_kh=$('#txt_vi_des_kh');
    var txt_vi_des_en=$('#txt_vi_des_en');
    var txt_photo=$('#txt_photo');
    var txt_is_disable=$('#txt_is_disable option:selected').val();
    var txt_is_disable_text=$('#txt_is_disable option:selected').html();

    if(txt_con_title_kh.val()==''){
      alert('Please Enter Content..!');
      txt_con_title_kh.focus();
      return;
    }

    if(txt_con_title_en.val()==''){
      alert('Please Enter Content Title EN..!');
      txt_con_title_en.focus();
      return;
    }

    $.ajax({
        type:'POST',
        url:'action/company_profile/save-company-profile.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            txt_od:txt_od.val(),
            txt_con_title_kh:txt_con_title_kh.val(),
            txt_con_title_en:txt_con_title_en.val(),
            txt_con_des_kh:txt_con_des_kh.val(),
            txt_con_des_en:txt_con_des_en.val(),
            txt_mis_title_kh:txt_mis_title_kh.val(),
            txt_mis_title_en:txt_mis_title_en.val(),
            txt_mis_des_kh:txt_mis_des_kh.val(),
            txt_mis_des_en:txt_mis_des_en.val(),
            txt_vi_title_kh:txt_vi_title_kh.val(),
            txt_vi_title_en:txt_vi_title_en.val(),
            txt_vi_des_kh:txt_vi_des_kh.val(),
            txt_vi_des_en:txt_vi_des_en.val(),
            txt_photo:txt_photo.val(),
            txt_is_disable:txt_is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
          if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(txt_con_title_kh.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2)').text(txt_con_title_en.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(txt_mis_title_kh.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(4)').text(txt_mis_title_en.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(5)').text(txt_is_disable_text);
                body.find('.popup-form').remove();
          }else{ // save data    
                alert(data.message);
                var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.con_title_kh+'</td> <td>'+data.con_title_en+'</td> <td>'+data.mis_title_kh+'</td> <td>'+data.mis_title_en+'</td> <td class="text-center">'+txt_is_disable_text+'</td><td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                $('.tbl-data').find('tr:eq(0)').after(tr);
                tinyMCE.remove();
                id.val(data.id+1);
                txt_od.val(data.id+1);
                txt_con_title_kh.val('');
                txt_con_title_en.val('');
                txt_con_des_kh.val('');
                txt_con_des_en.val('');
                txt_mis_title_kh.val('');
                txt_mis_title_en.val('');
                txt_mis_des_kh.val('');
                txt_mis_des_en.val('');
                txt_vi_title_kh.val('');
                txt_vi_title_en.val('');
                txt_vi_des_kh.val('');
                txt_vi_des_en.val('');
                txt_photo.val('');
                imgBox.css({'background-image': 'url("images/download.jpg")'});
                calleditor();
                
          }
        }
    });
}

// ==== Get Edit Company Profile =====
function get_edit_company_data(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
                $.ajax({
                    url:'action/company_profile/get-company-profile-edit.php',
                    type:'POST',
                    data:{opt:opt,id:id},
                    cache:false,
                    dataType:'json',
                    success:function(data){
                        tinyMCE.remove();
                        $('#txt_od').val(data.od);
                        $('#txt_id').val(id);
                        $('#txt_edit_id').val(id);
                        $('#txt_photo').val(data.image);
                        $('.img-box').css({'background-image':'url("upl-img/'+data.image+'")'});
                        $('#txt_con_title_kh').val(data.con_title_kh);
                        $('#txt_con_title_en').val(data.con_title_en);
                        $('#txt_con_des_kh').val(data.con_des_kh);
                        $('#txt_con_des_en').val(data.con_des_en);
                        $('#txt_mis_title_kh').val(data.mis_title_kh);
                        $('#txt_mis_title_en').val(data.mis_title_en);
                        $('#txt_mis_des_kh').val(data.mis_des_kh);
                        $('#txt_mis_des_en').val(data.mis_des_en);
                        $('#txt_vi_title_kh').val(data.vi_title_kh);
                        $('#txt_vi_title_en').val(data.vi_title_en);
                        $('#txt_vi_des_kh').val(data.vi_des_kh);
                        $('#txt_vi_des_en').val(data.vi_des_en);
                        $('#txt_is_disable').val(data.is_disable); 
                        calleditor();
                    }
                });					  
        }				
    });
}

// ==== Save Management Team =====
function save_management_team(eThis,body){
    tinyMCE.triggerSave();
    var imgBox=$('.img-box');
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var txt_od=$('#txt_od');
    var name_kh=$('#txt_name_kh');
    var name_en=$('#txt_name_en');
    var position_kh=$('#txt_position_kh');
    var position_en=$('#txt_position_en');
    var email=$('#txt_email');
    var phone1=$('#txt_phone1');
    var phone2=$('#txt_phone2');
    var other_kh=$('#txt_other_kh');
    var other_en=$('#txt_other_en');
    var photo=$('#txt_photo');
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();

    if(name_kh.val()==''){
        alert('Please Enter Name KH..!');
        name_kh.focus();
        return;
    }

    if(name_en.val()==''){
        alert('Please Enter Name EN..!');
        name_en.focus();
        return;
    }
    
    if(position_kh.val()==''){
        alert('Please Enter Position KH..!');
        position_kh.focus();
        return;
    }

    if(position_en.val()==''){
        alert('Please Enter Position EN..!');
        position_en.focus();
        return;
    }

    $.ajax({
        type:'POST',
        url:'action/management_team/save-management-team.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            txt_od:txt_od.val(),
            name_kh:name_kh.val(),
            name_en:name_en.val(),
            position_kh:position_kh.val(),
            position_en:position_en.val(),
            email:email.val(),
            phone1:phone1.val(),
            phone2:phone2.val(),
            other_kh:other_kh.val(),
            other_en:other_en.val(),
            photo:photo.val(),
            is_disable:is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
          if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(name_kh.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2)').text(name_en.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(position_kh.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(4)').text(position_en.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(5)').text(is_disable_text);
                body.find('.popup-form').remove();
          }else{ // save data       
                alert(data.message);
                var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.name_kh+'</td> <td>'+data.name_en+'</td> <td>'+data.position_kh+'</td> <td>'+data.position_en+'</td> <td class="text-center">'+is_disable_text+'</td><td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                $('.tbl-data').find('tr:eq(0)').after(tr);
                tinyMCE.remove();
                id.val(data.id+1);
                txt_od.val(data.id+1);
                name_kh.val('');
                name_en.val('');
                position_kh.val('');
                position_en.val('');
                email.val('');
                phone1.val('');
                phone2.val('');
                other_kh.val('');
                other_en.val('');
                photo.val('');
                imgBox.css({'background-image': 'url("images/download.jpg")'});
                calleditor();  
          }
        }
    });
}

// ===== Get Edit Management Team =====
function get_edit_management_team(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
                $.ajax({
                    url:'action/management_team/get-management-team-edit.php',
                    type:'POST',
                    data:{opt:opt,id:id},
                    cache:false,
                    dataType:'json',
                    success:function(data){
                        tinyMCE.remove();
                        $('#txt_od').val(data.od);
                        $('#txt_id').val(id);
                        $('#txt_edit_id').val(id);
                        $('#txt_photo').val(data.image);
                        $('.img-box').css({'background-image':'url("upl-img/'+data.image+'")'});
                        $('#txt_name_kh').val(data.name_kh);
                        $('#txt_name_en').val(data.name_en);
                        $('#txt_position_kh').val(data.position_kh);
                        $('#txt_position_en').val(data.position_en);
                        $('#txt_email').val(data.email);
                        $('#txt_phone1').val(data.phone1);
                        $('#txt_phone2').val(data.phone2);
                        $('#txt_other_kh').val(data.other_kh);
                        $('#txt_other_en').val(data.other_en);
                        $('#txt_is_disable').val(data.is_disable); 
                        calleditor();
                    }
                });					
        }				
    });
}

// ===== Save Product and Service =====
function save_product_service(eThis,body){
    tinyMCE.triggerSave();
    var imgBox=$('.img-box');
    var imgBox1=$('.img-box1');
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var od=$('#txt_od');
    var name_kh=$('#txt_name_kh');
    var name_en=$('#txt_name_en');
    var des_kh=$('#txt_des_kh');
    var des_en=$('#txt_des_en');
    var content_kh=$('#txt_content_kh');
    var content_en=$('#txt_content_en');
    var term_kh=$('#txt_term_kh');
    var term_en=$('#txt_term_en');
    var doc_require_kh=$('#txt_doc_require_kh');
    var doc_require_en=$('#txt_doc_require_en');
    var is_slide=$('#txt_is_slide');
    var slide_text_kh=$('#txt_slide_text_kh');
    var slide_text_en=$('#txt_slide_text_en');
    var photo=$('#txt_photo');
    var photo1=$('#txt_photo1');
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();

    var min_khr=$('#txt_min_khr');
    var max_khr=$('#txt_max_khr');
    var min_usd=$('#txt_min_usd');
    var max_usd=$('#txt_max_usd');
    var min_month=$('#txt_min_month');
    var max_month=$('#txt_max_month');
    var min_rate=$('#txt_min_rate');
    var max_rate=$('#txt_max_rate');
    var rate_step=$('#txt_rate_step');

    if(name_kh.val()==''){
        alert('Please Enter Name KH..!');
        name_kh.focus();
        return;
    }

    if(name_en.val()==''){
        alert('Please Enter Name EN..!');
        name_en.focus();
        return;
    }
    
    if(des_kh.val()==''){
        alert('Please Enter Description KH..!');
        des_kh.focus();
        return;
    }

    if(des_en.val()==''){
        alert('Please Enter Description EN..!');
        des_en.focus();
        return;
    }

    if(content_kh.val()==''){
        alert('Please Enter Content KH..!');
        content_kh.focus();
        return;
    }

    if(content_en.val()==''){
        alert('Please Enter Content EN..!');
        content_en.focus();
        return;
    }
    
    if(term_kh.val()==''){
        alert('Please Enter Term KH..!');
        term_kh.focus();
        return;
    }

    if(term_en.val()==''){
        alert('Please Enter Term EN..!');
        term_en.focus();
        return;
    }

    if(doc_require_kh.val()==''){
        alert('Please Enter Document Require KH..!');
        doc_require_kh.focus();
        return;
    }

    if(doc_require_en.val()==''){
        alert('Please Enter Document Require EN..!');
        doc_require_en.focus();
        return;
    }

    $.ajax({
        type:'POST',
        url:'action/product_service/save-product-service.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            od:od.val(),
            photo1:photo1.val(),
            name_kh:name_kh.val(),
            name_en:name_en.val(),
            des_kh:des_kh.val(),
            des_en:des_en.val(),
            content_kh:content_kh.val(),
            content_en:content_en.val(),
            term_kh:term_kh.val(),
            term_en:term_en.val(),
            doc_require_kh:doc_require_kh.val(),
            doc_require_en:doc_require_en.val(),
            is_slide:is_slide.val(),
            slide_text_kh:slide_text_kh.val(),
            slide_text_en:slide_text_en.val(),
            photo:photo.val(),
            is_disable:is_disable,
            min_khr:min_khr.val(),
            max_khr:max_khr.val(),
            min_usd:min_usd.val(),
            max_usd:max_usd.val(),
            min_month:min_month.val(),
            max_month:max_month.val(),
            min_rate:min_rate.val(),
            max_rate:max_rate.val(),
            rate_step:rate_step.val()
        },
        cache:false,
        dataType:"json",
        success:function(data){
            if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(name_en.val());        
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2) input').val(photo1.val());
				$('.tbl-data').find('tr:eq('+ind+') td:eq(2) img').attr("src","upl-img/"+photo1.val()+"");
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(data.created_at);
                $('.tbl-data').find('tr:eq('+ind+') td:eq(4)').text(is_disable_text);
                body.find('.popup-form').remove();
            }else{ // save data       
                if(data.dpl==1){
                    alert("Douplicate Name.");
                    return;
                }else{
                    alert(data.message);
                    var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.name_en+'</td> <td><img src="upl-img/'+data.icon+'" width="50" height="50"><input type="hidden" value="'+data.icon+'"></input></td> <td class="text-center">'+data.created_at+'</td> <td class="text-center">'+data.is_disable+'</td> <td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                    $('.tbl-data').find('tr:eq(0)').after(tr);
                    tinyMCE.remove();
                    id.val(data.id+1);
                    od.val(data.id+1);
                    name_kh.val('');
                    name_en.val('');
                    des_kh.val('');
                    des_en.val('');
                    content_kh.val('');
                    content_en.val('');
                    term_kh.val('');
                    term_en.val('');
                    doc_require_kh.val('');
                    doc_require_en.val('');
                    slide_text_kh.val('');
                    slide_text_en.val('');
                    photo.val('');
                    photo1.val('');
                    imgBox.css({'background-image': 'url("images/download.jpg")'});
                    imgBox1.css({'background-image': 'url("images/download.jpg")'});


                    min_khr.val(0);
                    max_khr.val(0);
                    min_usd.val(0);
                    max_usd.val(0);
                    min_month.val(0);
                    max_month.val(0);
                    min_rate.val(0);
                    max_rate.val(0);
                    rate_step.val(0.1);


                    calleditor();
                }
                  
            }
        }
    });
}

// ==== Get Edit Product and Service =====
function get_edit_product_service(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            $.ajax({
                url:'action/product_service/get-product-service-edit.php',
                type:'POST',
                data:{opt:opt,id:id},
                cache:false,
                dataType:'json',
                success:function(data){
                    tinyMCE.remove();
                    $('#txt_id').val(id);
                    $('#txt_edit_id').val(id);
                    $('#txt_od').val(data.od);
                    $('#txt_photo1').val(data.icon);
                    $('.img-box1').css({'background-image':'url("upl-img/'+data.icon+'")'});
                    $('#txt_name_kh').val(data.name_kh);
                    $('#txt_name_en').val(data.name_en);
                    $('#txt_des_kh').val(data.des_kh);
                    $('#txt_des_en').val(data.des_en);
                    $('#txt_content_kh').val(data.content_kh);
                    $('#txt_content_en').val(data.content_en);
                    $('#txt_term_kh').val(data.term_con_kh);
                    $('#txt_term_en').val(data.term_con_en);
                    $('#txt_doc_require_kh').val(data.doc_require_kh);
                    $('#txt_doc_require_en').val(data.doc_require_en);
                    $('#txt_is_slide').val(data.is_slide);
                    $('#txt_slide_text_kh').val(data.slide_text_kh);
                    $('#txt_slide_text_en').val(data.slide_text_en);
                    $('#txt_photo').val(data.slide_image);
                    $('.img-box').css({'background-image':'url("upl-img/'+data.slide_image+'")'});
                    $('#txt_is_disable').val(data.is_disable);
                    
                    
                    $('#txt_min_khr').val(data.min_khr);
                    $('#txt_max_khr').val(data.max_khr);
                    $('#txt_min_usd').val(data.min_usd);
                    $('#txt_max_usd').val(data.max_usd);
                    $('#txt_min_month').val(data.min_month);
                    $('#txt_max_month').val(data.max_month);
                    $('#txt_min_rate').val(data.min_rate);
                    $('#txt_max_rate').val(data.max_rate);
                    $('#txt_rate_step').val(data.rate_step);


                    calleditor();
                }
            });					
        }				
    });
}

// ==== Save Job Opportunity =====
function save_job_opportunity(eThis,body){
    tinyMCE.triggerSave();
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var od=$('#txt_od');
    var position_kh=$('#txt_position_kh');
    var position_en=$('#txt_position_en');
    var des_kh=$('#txt_des_kh');
    var des_en=$('#txt_des_en');
    var location_kh=$('#txt_location_kh');
    var location_en=$('#txt_location_en');
    var duties_and_respon_kh=$('#txt_duties_and_respon_kh');
    var duties_and_respon_en=$('#txt_duties_and_respon_en');
    var skill_and_specification_kh=$('#txt_skill_and_specification_kh');
    var skill_and_specification_en=$('#txt_skill_and_specification_en');
    var how_to_apply_kh=$('#txt_how_to_apply_kh');
    var how_to_apply_en=$('#txt_how_to_apply_en');
    var post_date=$('#txt_post_date');
    var close_date=$('#txt_close_date');
    var type_id=$('#txt_type_id option:selected').val();
    var type_id_text=$('#txt_type_id option:selected').html();
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();
 
    if(position_kh.val()==''){
        alert('Please Position KH..!');
        position_kh.focus();
        return;
    }

    if(position_en.val()==''){
        alert('Please Position EN..!');
        position_en.focus();
        return;
    }
    
    if(des_kh.val()==''){
        alert('Please Enter Description KH..!');
        des_kh.focus();
        return;
    }

    if(des_en.val()==''){
        alert('Please Enter Description EN..!');
        des_en.focus();
        return;
    }

    if(location_kh.val()==''){
        alert('Please Location KH..!');
        location_kh.focus();
        return;
    }

    if(location_en.val()==''){
        alert('Please Enter Location EN..!');
        location_en.focus();
        return;
    }
    
    if(duties_and_respon_kh.val()==''){
        alert('Please Enter Duties KH..!');
        duties_and_respon_kh.focus();
        return;
    }

    if(duties_and_respon_en.val()==''){
        alert('Please Enter Duties EN..!');
        duties_and_respon_en.focus();
        return;
    }

    if(skill_and_specification_kh.val()==''){
        alert('Please Enter Skill KH..!');
        skill_and_specification_kh.focus();
        return;
    }

    if(skill_and_specification_en.val()==''){
        alert('Please Enter Skill EN..!');
        skill_and_specification_en.focus();
        return;
    }
    
    if(how_to_apply_kh.val()==''){
        alert('Please Enter How To Apply KH..!');
        how_to_apply_kh.focus();
        return;
    }

    if(how_to_apply_en.val()==''){
        alert('Please Enter How To Apply EN..!');
        how_to_apply_en.focus();
        return;
    }

    if(post_date.val()==''){
        alert('Please Enter Post Date..!');
        post_date.focus();
        return;
    }

    if(close_date.val()==''){
        alert('Please Enter Close Date..!');
        close_date.focus();
        return;
    }

    $.ajax({
        type:'POST',
        url:'action/job_opportunity/save-job-opportunity.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            od:od.val(),
            position_kh:position_kh.val(),
            position_en:position_en.val(),
            des_kh:des_kh.val(),
            des_en:des_en.val(),
            location_kh:location_kh.val(),
            location_en:location_en.val(),
            duties_and_respon_kh:duties_and_respon_kh.val(),
            duties_and_respon_en:duties_and_respon_en.val(),
            skill_and_specification_kh:skill_and_specification_kh.val(),
            skill_and_specification_en:skill_and_specification_en.val(),
            how_to_apply_kh:how_to_apply_kh.val(),
            how_to_apply_en:how_to_apply_en.val(),
            post_date:post_date.val(),
            close_date:close_date.val(),
            type_id:type_id,
            is_disable:is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
            if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(position_en.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2)').text(post_date.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(close_date.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(4)').text(is_disable_text);
                body.find('.popup-form').remove();
            }else{ // save data     
                if(data.dpl==1){
                    alert("Douplicate Position.");
                }else{  
                    alert(data.message);
                    var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.position_en+'</td> <td class="text-center">'+data.post_date+'</td> <td class="text-center">'+data.close_date+'</td> <td class="text-center">'+data.is_disable+'</td> <td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                    $('.tbl-data').find('tr:eq(0)').after(tr);
                    tinyMCE.remove();
                    id.val(data.id+1);
                    od.val(data.id+1);
                    position_kh.val('');
                    position_en.val('');
                    des_kh.val('');
                    des_en.val('');
                    location_kh.val('');
                    location_en.val('');
                    duties_and_respon_kh.val('');
                    duties_and_respon_en.val('');
                    skill_and_specification_kh.val('');
                    skill_and_specification_en.val('');
                    how_to_apply_kh.val('');
                    how_to_apply_en.val('');
                    post_date.val('');
                    close_date.val('');
                    calleditor(); 
                } 
            }
        }
    });
}

// ==== Get Edit Job Opportunity =====
function get_edit_job_opportunity(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            $.ajax({
                url:'action/job_opportunity/get-job-opportunity-edit.php',
                type:'POST',
                data:{opt:opt,id:id},
                cache:false,
                dataType:'json',
                success:function(data){
                    tinyMCE.remove();
                    $('#txt_id').val(id);
                    $('#txt_edit_id').val(id);
                    $('#txt_od').val(data.od);
                    $('#txt_position_kh').val(data.position_kh);
                    $('#txt_position_en').val(data.position_en);
                    $('#txt_des_kh').val(data.des_kh);
                    $('#txt_des_en').val(data.des_en);
                    $('#txt_location_kh').val(data.location_kh);
                    $('#txt_location_en').val(data.location_en);
                    $('#txt_duties_and_respon_kh').val(data.duties_and_respon_kh);
                    $('#txt_duties_and_respon_en').val(data.duties_and_respon_en);
                    $('#txt_skill_and_specification_kh').val(data.skill_and_specification_kh);
                    $('#txt_skill_and_specification_en').val(data.skill_and_specification_en);
                    $('#txt_how_to_apply_kh').val(data.how_to_apply_kh);
                    $('#txt_how_to_apply_en').val(data.how_to_apply_en);
                    $('#txt_post_date').val(data.post_date);
                    $('#txt_close_date').val(data.close_date);
                    $('#txt_type_id').val(data.type_id);
                    $('#txt_is_disable').val(data.is_disable); 
                    calleditor();
                }
            });					
        }				
    });
}

// Save Photo Gallery
function save_photo_gallery(eThis,body){
    tinyMCE.triggerSave();
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var od=$('#txt_od');
    var title_kh=$('#txt_title_kh');
    var title_en=$('#txt_title_en');
    var des_kh=$('#txt_des_kh');
    var des_en=$('#txt_des_en');
    var imgBox=$('.img-box');
    var imgBox1=$('.img-box1');
    var imgBox2=$('.img-box2');
    var imgBox3=$('.img-box3');
    var imgBox4=$('.img-box4');
    var imgBox5=$('.img-box5');
    var imgBox6=$('.img-box6');
    var imgBox7=$('.img-box7');
    var imgBox8=$('.img-box8');
    var imgBox9=$('.img-box9');
    var imgBox10=$('.img-box10');
    var photo=$('#txt_photo');
    var photo1=$('#txt_photo1');
    var photo2=$('#txt_photo2');
    var photo3=$('#txt_photo3');
    var photo4=$('#txt_photo4');
    var photo5=$('#txt_photo5');
    var photo6=$('#txt_photo6');
    var photo7=$('#txt_photo7');
    var photo8=$('#txt_photo8');
    var photo9=$('#txt_photo9');
    var photo10=$('#txt_photo10');
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();

    if(title_kh.val()==''){
        alert('Please Enter Title KH..!');
        title_kh.focus();
        return;
    }

    if(title_en.val()==''){
        alert('Please Enter Title EN..!');
        title_en.focus();
        return;
    }

    if(des_kh.val()==''){
        alert('Please Enter Description KH..!');
        des_kh.focus();
        return;
    }

    if(des_en.val()==''){
        alert('Please Enter Description EN..!');
        des_en.focus();
        return;
    }
    
    if(photo.val()==''){
        alert('Thumbnail is Blank..!');
        photo.focus();
        return;
    }
 
    $.ajax({
        type:'POST',
        url:'action/photo_gallery/save-photo-gallery.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            od:od.val(),
            title_kh:title_kh.val(),
            title_en:title_en.val(),
            des_kh:des_kh.val(),
            des_en:des_en.val(),
            photo:photo.val(),
            photo1:photo1.val(),
            photo2:photo2.val(),
            photo3:photo3.val(),
            photo4:photo4.val(),
            photo5:photo5.val(),
            photo6:photo6.val(),
            photo7:photo7.val(),
            photo8:photo8.val(),
            photo9:photo9.val(),
            photo10:photo10.val(),  
            is_disable:is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
            if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(title_en.val()); 
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2)').text(is_disable_text);        
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(data.created_at);
                body.find('.popup-form').remove();
            }else{ // save data       
                if(data.dpl==1){
                    alert("Douplicate Title.");
                    return;
                }else{
                    alert(data.message);
                    var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.title_en+'</td> <td class="text-center">'+is_disable_text+'</td> <td class="text-center">'+data.created_at+'</td><td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                    $('.tbl-data').find('tr:eq(0)').after(tr);
                    tinyMCE.remove();
                    id.val(data.id+1);
                    od.val(data.id+1);
                    title_kh.val('');
                    title_en.val('');
                    des_kh.val('');
                    des_en.val('');
                    photo.val('');
                    photo1.val('');
                    photo2.val('');
                    photo3.val('');
                    photo4.val('');
                    photo5.val('');
                    photo6.val('');
                    photo7.val('');
                    photo8.val('');
                    photo9.val('');
                    photo10.val('');
                    imgBox.css({'background-image': 'url("images/download.jpg")'});
                    imgBox1.css({'background-image': 'url("images/download.jpg")'});
                    imgBox2.css({'background-image': 'url("images/download.jpg")'});
                    imgBox3.css({'background-image': 'url("images/download.jpg")'});
                    imgBox4.css({'background-image': 'url("images/download.jpg")'});
                    imgBox5.css({'background-image': 'url("images/download.jpg")'});
                    imgBox6.css({'background-image': 'url("images/download.jpg")'});
                    imgBox7.css({'background-image': 'url("images/download.jpg")'});
                    imgBox8.css({'background-image': 'url("images/download.jpg")'});
                    imgBox9.css({'background-image': 'url("images/download.jpg")'});
                    imgBox10.css({'background-image': 'url("images/download.jpg")'});
                    calleditor(); 
                }
                  
            }
        }
    });
}

// Get Edit Photo Gallery
function get_edit_photo_gallery(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            $.ajax({
                url:'action/photo_gallery/get-photo-gallery-edit.php',
                type:'POST',
                data:{opt:opt,id:id},
                cache:false,
                dataType:'json',
                success:function(data){
                    tinyMCE.remove();
                    $('#txt_id').val(id);
                    $('#txt_edit_id').val(id);
                    $('#txt_od').val(data.od);
                    $('#txt_title_kh').val(data.title_kh);
                    $('#txt_title_en').val(data.title_en);
                    $('#txt_des_kh').val(data.des_kh);
                    $('#txt_des_en').val(data.des_en);
                    $('#txt_photo').val(data.image);
                    $('#txt_photo1').val(data.image1);
                    $('#txt_photo2').val(data.image2);
                    $('#txt_photo3').val(data.image3);
                    $('#txt_photo4').val(data.image4);
                    $('#txt_photo5').val(data.image5);
                    $('#txt_photo6').val(data.image6);
                    $('#txt_photo7').val(data.image7);
                    $('#txt_photo8').val(data.image8);
                    $('#txt_photo9').val(data.image9);
                    $('#txt_photo10').val(data.image10);
                    $('.img-box').css({'background-image':'url("upl-img/'+data.image+'")'});
                    $('.img-box1').css({'background-image':'url("upl-img/'+data.image1+'")'});
                    $('.img-box2').css({'background-image':'url("upl-img/'+data.image2+'")'});
                    $('.img-box3').css({'background-image':'url("upl-img/'+data.image3+'")'});
                    $('.img-box4').css({'background-image':'url("upl-img/'+data.image4+'")'});
                    $('.img-box5').css({'background-image':'url("upl-img/'+data.image5+'")'});
                    $('.img-box6').css({'background-image':'url("upl-img/'+data.image6+'")'});
                    $('.img-box7').css({'background-image':'url("upl-img/'+data.image7+'")'});
                    $('.img-box8').css({'background-image':'url("upl-img/'+data.image8+'")'});
                    $('.img-box9').css({'background-image':'url("upl-img/'+data.image9+'")'});
                    $('.img-box10').css({'background-image':'url("upl-img/'+data.image10+'")'});
                    $('#txt_is_disable').val(data.is_disable); 
                    calleditor();
                }
            });					
        }				
    });
}

// Save Public Holiday
function save_public_holiday(eThis,body){
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var od=$('#txt_od');
    var date_kh=$('#txt_date_kh');
    var date_en=$('#txt_date_en');
    var title_kh=$('#txt_title_kh');
    var title_en=$('#txt_title_en');
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();
 
    if(date_kh.val()==''){
        alert('Please Enter Date KH..!');
        date_kh.focus();
        return;
    }

    if(date_en.val()==''){
        alert('Please Enter Date EN..!');
        date_en.focus();
        return;
    }

    if(title_kh.val()==''){
        alert('Please Enter Title KH..!');
        title_kh.focus();
        return;
    }

    if(title_en.val()==''){
        alert('Please Enter Title EN..!');
        title_en.focus();
        return;
    }
    

    $.ajax({
        type:'POST',
        url:'action/public_holiday/save-public-holiday.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            od:od.val(),
            date_kh:date_kh.val(),
            date_en:date_en.val(),
            title_kh:title_kh.val(),
            title_en:title_en.val(),
            is_disable:is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
            if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').val(date_en.val());
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2)').val(title_en.val()); 
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(is_disable_text);     
                $('.tbl-data').find('tr:eq('+ind+') td:eq(4)').val(data.created_at);
                body.find('.popup-form').remove();
            }else{ // save data       
                if(data.dpl==1){
                    alert("Data Was Douplicate.");
                    return;
                }else{
                    alert(data.message);
                    var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.date_en+'</td> <td>'+data.title_en+'</td> <td>'+is_disable_text+'</td> <td class="text-center">'+data.created_at+'</td><td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                    $('.tbl-data').find('tr:eq(0)').after(tr);
                    id.val(data.id+1);
                    od.val(data.id+1);
                    date_kh.val('');
                    date_en.val('');
                    title_kh.val('');
                    title_en.val('');
                }
                  
            }
        }
    });
}

// Get Edit Public Holiday
function get_edit_public_holiday(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            $.ajax({
                url:'action/public_holiday/get_public_holiday_edit.php',
                type:'POST',
                data:{opt:opt,id:id},
                cache:false,
                dataType:'json',
                success:function(data){
                    $('#txt_id').val(id);
                    $('#txt_edit_id').val(id);
                    $('#txt_od').val(data.od);
                    $('#txt_date_kh').val(data.date_kh);
                    $('#txt_date_en').val(data.date_en);
                    $('#txt_title_kh').val(data.title_kh);
                    $('#txt_title_en').val(data.title_en);
                    $('#txt_is_disable').val(data.is_disable); 
                }
            });					
        }				
    });
}

// ===== Save News =====
function save_news(eThis,body){
    tinyMCE.triggerSave();
    var imgBox=$('.img-box');
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var od=$('#txt_od');
    var title_kh=$('#txt_title_kh');
    var title_en=$('#txt_title_en');
    var des_kh=$('#txt_des_kh');
    var des_en=$('#txt_des_en');
    var photo=$('#txt_photo');
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();
 
    if(title_kh.val()==''){
        alert('Please Enter Title KH..!');
        title_kh.focus();
        return;
    }

    if(title_en.val()==''){
        alert('Please Enter Title EN..!');
        title_en.focus();
        return;
    }
    
    if(des_kh.val()==''){
        alert('Please Enter Description KH..!');
        des_kh.focus();
        return;
    }

    if(des_en.val()==''){
        alert('Please Enter Description EN..!');
        des_en.focus();
        return;
    }

    $.ajax({
        type:'POST',
        url:'action/news/save-news.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            od:od.val(),
            title_kh:title_kh.val(),
            title_en:title_en.val(),
            des_kh:des_kh.val(),
            des_en:des_en.val(),
            photo:photo.val(),
            is_disable:is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
            if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(title_en.val());        
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2)').text(is_disable_text);
                $('.tbl-data').find('tr:eq('+ind+') td:eq(4)').text(data.created_at);
                body.find('.popup-form').remove();
            }else{ // save data       
                if(data.dpl==1){
                    alert("Douplicate Title.");
                    return;
                }else{
                    alert(data.message);
                    var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.title_en+'</td> <td class="text-center">'+is_disable_text+'</td> <td class="text-center">'+data.num_of_view+'</td> <td class="text-center">'+data.created_at+'</td><td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                    $('.tbl-data').find('tr:eq(0)').after(tr);
                    tinyMCE.remove();
                    id.val(data.id+1);
                    od.val(data.id+1);
                    title_kh.val('');
                    title_en.val('');
                    des_kh.val('');
                    des_en.val('');
                    photo.val('');
                    imgBox.css({'background-image': 'url("images/download.jpg")'});
                    calleditor();
                }
                  
            }
        }
    });
}

// ==== Get Edit News =====
function get_edit_news(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            $.ajax({
                url:'action/news/get-news-edit.php',
                type:'POST',
                data:{opt:opt,id:id},
                cache:false,
                dataType:'json',
                success:function(data){
                    tinyMCE.remove();
                    $('#txt_id').val(id);
                    $('#txt_edit_id').val(id);
                    $('#txt_od').val(data.od);
                    $('#txt_title_kh').val(data.title_kh);
                    $('#txt_title_en').val(data.title_en);
                    $('#txt_des_kh').val(data.des_kh);
                    $('#txt_des_en').val(data.des_en);
                    $('#txt_photo').val(data.image);
                    $('.img-box').css({'background-image':'url("upl-img/'+data.image+'")'});
                    $('#txt_is_disable').val(data.is_disable); 
                    calleditor();	
                }
            });				
        }				
    });
}

// ===== Save Content Banner =====
function save_content_banner(eThis,body){
    tinyMCE.triggerSave();
    var imgBox=$('.img-box');
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var od=$('#txt_od');
    var title_kh=$('#txt_title_kh');
    var title_en=$('#txt_title_en');
    var des_kh=$('#txt_des_kh');
    var des_en=$('#txt_des_en');
    var photo=$('#txt_photo');
    var mm_id=$('#txt_type_menu option:selected').val();
    var mm_id_text=$('#txt_type_menu option:selected').html();
    var type_id=$('#txt_type_id option:selected').val();
    var type_text=$('#txt_type_id option:selected').html();
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();
 
    if(type_id==-1){
        alert('Please Select Type..!');
        type_id.focus();
        return;
    }

    if(title_kh.val()==''){
        alert('Please Enter Title KH..!');
        title_kh.focus();
        return;
    }

    if(title_en.val()==''){
        alert('Please Enter Title EN..!');
        title_en.focus();
        return;
    }
    
    if(des_kh.val()==''){
        alert('Please Enter Description KH..!');
        des_kh.focus();
        return;
    }

    if(des_en.val()==''){
        alert('Please Enter Description EN..!');
        des_en.focus();
        return;
    }

    $.ajax({
        type:'POST',
        url:'action/content_banner/save-content-banner.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            od:od.val(),
            mm_id:mm_id,
            type_id:type_id,
            title_kh:title_kh.val(),
            title_en:title_en.val(),
            des_kh:des_kh.val(),
            des_en:des_en.val(),
            photo:photo.val(),
            is_disable:is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
            if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(title_kh.val()); 
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2)').text(title_en.val());     
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(data.created_at);
                body.find('.popup-form').remove();
            }else{ // save data       
                if(data.dpl==1){
                    alert("Data Was Douplicate.");
                    return;
                }else{
                    alert(data.message);
                    var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+title_kh.val()+'</td> <td>'+title_en.val()+'</td> <td class="text-center">'+data.created_at+'</td><td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Disable" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                    $('.tbl-data').find('tr:eq(0)').after(tr);
                    tinyMCE.remove();
                    id.val(data.id+1);
                    od.val(data.id+1);
                    title_kh.val('');
                    title_en.val('');
                    des_kh.val('');
                    des_en.val('');
                    photo.val('');
                    imgBox.css({'background-image': 'url("images/download.jpg")'});
                    calleditor();
                }
                  
            }
        }
    });
}

// ==== Get Edit Content Banner =====
function get_edit_content_banner(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            $.ajax({
                url:'action/content_banner/get-content-banner-edit.php',
                type:'POST',
                data:{opt:opt,id:id},
                cache:false,
                dataType:'json',
                success:function(data){
                    tinyMCE.remove();
                    $('#txt_id').val(id);
                    $('#txt_edit_id').val(id);
                    $('#txt_type_menu').val(data.mm_id);
                    $('#txt_type_id').val(data.type_id);
                    $('#txt_od').val(data.od);
                    $('#txt_title_kh').val(data.title_kh);
                    $('#txt_title_en').val(data.title_en);
                    $('#txt_des_kh').val(data.des_kh);
                    $('#txt_des_en').val(data.des_en);
                    $('#txt_photo').val(data.image);
                    $('.img-box').css({'background-image':'url("upl-img/'+data.image+'")'});
                    $('#txt_is_disable').val(data.is_disable); 
                    calleditor();
                }
            }); 					
        }				
    });
}

// ===== Save Menu Item =====
function save_menu_item(eThis,body){
    var imgBox=$('.img-box');
    var imgBox1=$('.img-box1');
    var edit_id=$('#txt_edit_id');
    var id=$('#txt_id');
    var od=$('#txt_od');
    var title_kh=$('#txt_title_kh');
    var title_en=$('#txt_title_en');
    var photo=$('#txt_photo');
    var photo1=$('#txt_photo1');
    var type=$('#txt_type_id option:selected').val();
    var type_text=$('#txt_type_id option:selected').html();
    var is_disable=$('#txt_is_disable option:selected').val();
    var is_disable_text=$('#txt_is_disable option:selected').html();
 
    if(type==-1){
        alert('Please Select Type..!');
        type.focus();
        return;
    }

    if(title_kh.val()==''){
        alert('Please Enter Title KH..!');
        title_kh.focus();
        return;
    }

    if(title_en.val()==''){
        alert('Please Enter Title EN..!');
        title_en.focus();
        return;
    }
    
    if(photo.val()==''){
        alert('Image Banner is Blank..!');
        photo.focus();
        return;
    }

    if(photo1.val()==''){
        alert('Image Icon is Blank..!');
        photo1.focus();
        return;
    }

    $.ajax({
        type:'POST',
        url:'action/menu_item/save-menu-item.php',
        data:{
            opt:opt,
            id:edit_id.val(),
            type:type,
            od:od.val(),
            title_kh:title_kh.val(),
            title_en:title_en.val(),
            photo:photo.val(),
            photo1:photo1.val(),  
            is_disable:is_disable
        },
        cache:false,
        dataType:"json",
        success:function(data){
            if(data.id=='edit'){ // edit data
                $('.tbl-data').find('tr:eq('+ind+') td:eq(1)').text(title_en.val());        
                $('.tbl-data').find('tr:eq('+ind+') td:eq(2) input').val(photo1.val());
				$('.tbl-data').find('tr:eq('+ind+') td:eq(2) img').attr("src","upl-img/"+photo1.val()+"");
                $('.tbl-data').find('tr:eq('+ind+') td:eq(3)').text(data.created_at);
                body.find('.popup-form').remove();
            }else{ // save data       
                if(data.dpl==1){
                    alert("Douplicate Title.");
                    return;
                }else{
                    alert(data.message);
                    var tr='<tr> <td class="text-center">'+id.val()+'</td> <td>'+data.title_en+'</td> <td class="text-center"><img src="upl-img/'+data.icon+'" width="50" height="50"><input type="hidden" value="'+data.icon+'"></input></td> <td class="text-center">'+data.created_at+'</td><td class="text-center"><a href="#" class="btn-edit" title="View" style="color: white;font-size: 20px;"><i class="fas fa-eye"></i></a> &nbsp;&nbsp;<a href="#" class="btn-disable" title="Delete" style="color: white;font-size: 18px;"><i class="fas fa-trash-alt"></i></a></td></tr>';
                    $('.tbl-data').find('tr:eq(0)').after(tr);
                    id.val(data.id+1);
                    od.val(data.id+1);
                    title_kh.val('');
                    title_en.val('');
                    photo1.val('');
                    photo.val('');
                    imgBox1.css({'background-image': 'url("images/download.jpg")'});
                    imgBox.css({'background-image': 'url("images/download.jpg")'});
                }
                  
            }
        }
    });
}

// ==== Get Edit Menu Item =====
function get_edit_menu_item(eThis,body){
    var tr=eThis.parents('tr');
    ind=tr.index();
    var id=tr.find('td:eq(0)').text();
    var pop='<div class="popup-form"></div>';
    body.append(pop);
    $.ajax({
        url:'form/'+frm[opt]+'.php',
        type:'POST',
        data:{},
        cache:false,
        success:function(data){
            $('.popup-form').append(data);
            $.ajax({
                url:'action/menu_item/get-menu-item-edit.php',
                type:'POST',
                data:{opt:opt,id:id},
                cache:false,
                dataType:'json',
                success:function(data){
                    $('#txt_id').val(id);
                    $('#txt_edit_id').val(id);
                    $('#txt_od').val(data.od);
                    $('#txt_type_id').val(data.type);
                    $('#txt_photo1').val(data.icon);
                    $('.img-box1').css({'background-image':'url("upl-img/'+data.icon+'")'});
                    $('#txt_title_kh').val(data.title_kh);
                    $('#txt_title_en').val(data.title_en);
                    $('#txt_photo').val(data.image);
                    $('.img-box').css({'background-image':'url("upl-img/'+data.image+'")'});
                    $('#txt_is_disable').val(data.is_disable); 
                }
            });					
        }				
    });
}

