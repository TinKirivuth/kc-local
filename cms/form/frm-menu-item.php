<?php
    include('../db/database.php');
    $pk=new Db;
?>
<div class="col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11 frm-popup" style="margin-top: 0;">
    <form class="upl" method="post">
    <div class="head">
      <span class="frm-title"><b>Register Menu Items</b></span>
      <i class="fa fa-times btn-close" title="Close"></i>
    </div>
    <div class="frm-body">

      <input type="hidden" name="txt_edit_id" id="txt_edit_id" value="0">
      <label style="width:25%;float: left;">ID<sup>*</sup></label>
      <input style="width:10%;float: left;" type="text" class="frm-control" name="txt_id" id="txt_id" value="0" readonly>
      <label></label>

      <label style="width: 25%;float: left;">Type Of<sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <select class="custom-select" name="txt_type_id" id="txt_type_id">
            <?php  
                $t=14;
                $c="tbl_type.id!=0 AND tbl_type.id!=5";
                $o="id ASC";
                $l="0,20";
                $d="name_en";
                $pk->get_data_to_select($t,$c,$o,$l,$d); 
            ?>
          </select>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Title KH <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <input style="width:100%;float: left;" type="text" class="frm-control" name="txt_title_kh" id="txt_title_kh" placeholder="Enter Title KH">
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Title EN <sup>*</sup></label>
      <div style="width: 75%;float: left;">
      <input style="width:100%;float: left;" type="text" class="frm-control" name="txt_title_en" id="txt_title_en" placeholder="Enter Title EN">
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Image Banner<sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <div style="border: 1px solid rgba(197,214,222,.7);float: left;font-size: 12px;">
              <div style="width: 350px;height: 160px;border-bottom: 1px solid #eee;">
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
     
      <label style="width: 25%;float: left;">Image Icon<sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <div style="border: 1px solid rgba(197,214,222,.7);float: left;font-size: 12px;">
              <div style="width: 90px;height: 80px;border-bottom: 1px solid #eee;">
                  <div class="img-box1">
                      <input type="file" name="txt_file1" id="txt_file1" class="form-control" title="Please Select File">
                  </div>
                  <input type="hidden" name="txt_photo1" id="txt_photo1" class="form-control">
                  <label></label>
              </div>
              <div style="width: 100px;padding: 5px;background-color: #eee;">
                  <span>
                      Click To Start
                      <br><i>.jpg or .png type</i>
                  </span>
              </div> 
              <span class="btn btn-secondary btn-sm clr-img1" style="margin: 5px;">Clear</span>
          </div> 
      </div>
      <label></label>

      <label style="width:25%;float: left;">Data Order<sup>*</sup></label>
      <input style="width:10%;float: left;" type="text" class="frm-control" name="txt_od" id="txt_od">
      <label></label>

      <label style="width: 25%;float: left;">Is Disable <sup>*</sup></label>
      <div style="width: 10%;float: left;">
          <select class="custom-select" name="txt_is_disable" id="txt_is_disable">
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
      </div>
      <label></label>
      
    </div>
    <div class="frm-footer" style="">
      <a name="btn-post" id="btn-post" class="btn btn-success" style="color:white;width: 100%;"><i class="fas fa-database"></i>&nbsp;Save Data</a>
    </div>
    </form>
</div>