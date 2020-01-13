<?php
    // include('../db/database.php');
    // $pk=new Db;
    // $opt=4;
    // $con="id>0 AND status=1";
    // $od="name";
    // $limit="0,500";
?>
<div class="col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11" style="margin-top: 0;margin:auto;">
    <div class="frm-popup">
        <form class="upl" method="post">
            <div class="head">
            <span class="frm-title"><b>Register Public Holiday</b></span>
            <i class="fa fa-times btn-close" title="Close"></i>
            </div>
            <div class="frm-body">

            <input type="hidden" name="txt_edit_id" id="txt_edit_id" value="0">
            <label style="width:25%;float: left;">ID<sup>*</sup></label>
            <input style="width:10%;float: left;" type="text" class="frm-control" name="txt_id" id="txt_id" value="0" readonly>
            <label></label>

            <label style="width: 25%;float: left;">Date KH <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_date_kh" id="txt_date_kh" placeholder="Enter Date KH">
            <label></label>

            <label style="width: 25%;float: left;">Date EN <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_date_en" id="txt_date_en" placeholder="Enter Date EN">
            <label></label>

            <label style="width: 25%;float: left;">Title KH <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_title_kh" id="txt_title_kh" placeholder="Enter Title KH">
            <label></label>

            <label style="width: 25%;float: left;">Title EN <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_title_en" id="txt_title_en" placeholder="Enter Title EN">
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
</div>