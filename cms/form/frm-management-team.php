<?php
    // include('../db/database.php');
    // $pk=new Db;
    // $opt=4;
    // $con="id>0 AND status=1";
    // $od="name";
    // $limit="0,500";
?>
<div class="col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11 frm-popup" style="margin-top: 0;">
    <form class="upl" method="post">
    <div class="head">
      <span class="frm-title"><b>Register Management Team</b></span>
      <i class="fa fa-times btn-close" title="Close"></i>
    </div>
    <div class="frm-body">

      <input type="hidden" name="txt_edit_id" id="txt_edit_id" value="0">
      <label style="width:25%;float: left;">ID<sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_id" id="txt_id" value="0" readonly>
      <label></label>

      <label style="width: 25%;float: left;">Name KH <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_name_kh" id="txt_name_kh" placeholder="Enter Name KH">
      <label></label>

      <label style="width: 25%;float: left;">Name EN <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_name_en" id="txt_name_en" placeholder="Enter Name EN">
      <label></label>

      <label style="width: 25%;float: left;">Position KH <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_position_kh" id="txt_position_kh" placeholder="Enter Position KH">
      <label></label>

      <label style="width: 25%;float: left;">Position EN <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_position_en" id="txt_position_en" placeholder="Enter Position KH">
      <label></label>

      <label style="width: 25%;float: left;">Email <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_email" id="txt_email" placeholder="Enter Email">
      <label></label>

      <label style="width: 25%;float: left;">Phone 1 <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_phone1" id="txt_phone1" placeholder="Enter Phone 1">
      <label></label>

      <label style="width: 25%;float: left;">Phone 2 <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_phone2" id="txt_phone2" placeholder="Enter Phone 2">
      <label></label>

      <label style="width: 25%;float: left;">Text KH<sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_other_kh" id="txt_other_kh"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Text EN<sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_other_en" id="txt_other_en"></textarea>
      </div>
      <label></label>

      <label style="width:25%;float: left;">Data Order<sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_od" id="txt_od">
      <label></label>

      <label style="width: 25%;float: left;">Is Disable <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <select class="custom-select" name="txt_is_disable" id="txt_is_disable">
            <option value="0">No</option>
            <option value="1">Yes</option>
            
          </select>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Photo<sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <div style="border: 1px solid rgba(197,214,222,.7);float: left;font-size: 12px;">
              <div style="width: 220px;height: 110px;border-bottom: 1px solid #eee;">
                  <div class="img-box">
                      <input type="file" name="txt_file" id="txt_file" class="form-control" title="Please Select File">
                  </div>
                  <input type="hidden" name="txt_photo" id="txt_photo" class="form-control">
                  <label></label>
              </div>
              <div style="padding: 5px;background-color: #eee;">
                  <span>
                      Click To Start
                      <br><i>Image dimesion must be free with <br>.jpg or .png type</i>
                  </span>
              </div>
              <span class="btn btn-secondary btn-sm clr-img" style="margin: 5px;">Clear</span>
          </div> 
      </div>
      <label></label>
     

    </div>
    <div class="frm-footer" style="">
      <a name="btn-post" id="btn-post" class="btn btn-success" style="color:white;width: 100%;"><i class="fas fa-database"></i>&nbsp;Save Data</a>
    </div>
    </form>
</div>