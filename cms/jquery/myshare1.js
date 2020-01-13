var body=$('body');
var ind;
var opt;
var con;
var link_url;//use for listing pag when click menu
var sData=$('#txt_s');
var tData=$('#txt_total_data');
var total_record=$('#txt_total_record');
var show_record=$('#my-select');
var userID=$('#txtUserID').val();
var userName=$('#txtUserName').val();
var userPhoto=$('#txtUserPhoto').val();
var userRole=$('#txtUserRole').val();
var userIsActive=$('#txtUserIsActive').val();
var userIsDisable=$('#txtUserIsDisable').val();
var frm=['frm-user','frm-menu','frm-permission','frm-company-profile','frm-management-team','frm-product-service','frm-job-opportunity','frm-photo-gallery','frm-public-holiday','frm-news','','frm-content-banner','','frm-menu-item'];
var tbl=['get-user','get-menu','ger-permission','get-company-profile','get-management-team','get-product-service','get-job-opportunity','get-photo-gallery','get-public-holiday','get-news','','get-content-banner','','get-menu-item'];
//search variable
var findOpt="";
//=======
// If you want to filter by somthing you can enable this option
// var findOpt=['','','','<option>Content Title</option> <option>Mission</option> <option>Vision</option>'];
