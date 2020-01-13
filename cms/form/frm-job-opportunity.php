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
      <span class="frm-title"><b>Post Job Opportunities</b></span>
      <i class="fa fa-times btn-close" title="Close"></i>
    </div>
    <div class="frm-body">

      <input type="hidden" name="txt_edit_id" id="txt_edit_id" value="0">
      <label style="width:25%;float: left;">ID<sup>*</sup></label>
      <input style="width:10%;float: left;" type="text" class="frm-control" name="txt_id" id="txt_id" value="0" readonly>
      <label></label>

      <label style="width: 25%;float: left;">Position KH <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_position_kh" id="txt_position_kh" placeholder="Enter Position KH">
      <label></label>

      <label style="width: 25%;float: left;">Position EN <sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_position_en" id="txt_position_en" placeholder="Enter Position EN">
      <label></label>

      <label style="width: 25%;float: left;">Description KH <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" id="txt_des_kh" name="txt_des_kh"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Description EN <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" id="txt_des_en" name="txt_des_en"></textarea>
      </div>
      <label></label>

      <label style="width:25%;float: left;">Location KH<sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_location_kh" id="txt_location_kh" placeholder="Enter Location EN">
      <label></label>

      <label style="width:25%;float: left;">Location EN<sup>*</sup></label>
      <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_location_en" id="txt_location_en" placeholder="Enter Location EN">
      <label></label>

      <label style="width: 25%;float: left;">Duties KH <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_duties_and_respon_kh" id="txt_duties_and_respon_kh"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Duties EN <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_duties_and_respon_en" id="txt_duties_and_respon_en"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Skill KH <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_skill_and_specification_kh" id="txt_skill_and_specification_kh"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Skill EN <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_skill_and_specification_en" id="txt_skill_and_specification_en"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">How To Apply KH <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_how_to_apply_kh" id="txt_how_to_apply_kh"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">How To Apply EN <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_how_to_apply_en" id="txt_how_to_apply_en"></textarea>
      </div>
      <label></label>

      <label style="width:25%;float: left;">Type Of Job<sup>*</sup></label>
      <div style="width: 20%;float: left;">
          <select class="custom-select" name="txt_type_id" id="txt_type_id">
            <option value="0">Job Opportunity</option>
            <option value="1">Internship</option>
            <option value="2">Volunteer</option>
          </select>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Post Date <sup>*</sup></label>
      <input style="width:20%;float: left;" type="date" class="frm-control" name="txt_post_date" id="txt_post_date">
      <label></label>

      <label style="width: 25%;float: left;">Close Date <sup>*</sup></label>
      <input style="width:20%;float: left;" type="date" class="frm-control" name="txt_close_date" id="txt_close_date">
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