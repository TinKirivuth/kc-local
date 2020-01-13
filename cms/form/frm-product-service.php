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
            <span class="frm-title"><b>Register Product And Service</b></span>
            <i class="fa fa-times btn-close" title="Close"></i>
        </div>

        <div class="frm-body">

            <input type="hidden" name="txt_edit_id" id="txt_edit_id" value="0">
            <label style="width:25%;float: left;">ID<sup>*</sup></label>
            <input style="width:10%;float: left;" type="text" class="frm-control" name="txt_id" id="txt_id" value="0" readonly>
            <label></label>

            <label style="width: 25%;float: left;">Name KH <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_name_kh" id="txt_name_kh" placeholder="Enter Name KH">
            <label></label>

            <label style="width: 25%;float: left;">Name EN <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_name_en" id="txt_name_en" placeholder="Enter Name EN">
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

            <label style="width: 25%;float: left;">Content KH <sup>*</sup></label>
            <div style="width: 75%;float: left;">
                <textarea class="tinymce" name="txt_content_kh" id="txt_content_kh"></textarea>
            </div>
            <label></label>

            <label style="width: 25%;float: left;">Content EN <sup>*</sup></label>
            <div style="width: 75%;float: left;">
                <textarea class="tinymce" name="txt_content_en" id="txt_content_en"></textarea>
            </div>
            <label></label>

            <label style="width: 25%;float: left;">Term KH <sup>*</sup></label>
            <div style="width: 75%;float: left;">
                <textarea class="tinymce" name="txt_term_kh" id="txt_term_kh"></textarea>
            </div>
            <label></label>

            <label style="width: 25%;float: left;">Term EN <sup>*</sup></label>
            <div style="width: 75%;float: left;">
                <textarea class="tinymce" name="txt_term_en" id="txt_term_en"></textarea>
            </div>
            <label></label>

            <label style="width: 25%;float: left;">Document Requirement KH <sup>*</sup></label>
            <div style="width: 75%;float: left;">
                <textarea class="tinymce" name="txt_doc_require_kh" id="txt_doc_require_kh"></textarea>
            </div>
            <label></label>

            <label style="width: 25%;float: left;">Document Requirement EN <sup>*</sup></label>
            <div style="width: 75%;float: left;">
                <textarea class="tinymce" name="txt_doc_require_en" id="txt_doc_require_en"></textarea>
            </div>
            <label></label>

            <label style="width:25%;float: left;">Is Slide<sup>*</sup></label>
            <div style="width: 10%;float: left;">
                <select class="custom-select" name="txt_is_slide" id="txt_is_slide">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <label></label>

            <label style="width: 25%;float: left;">Slide Text KH <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_slide_text_kh" id="txt_slide_text_kh" placeholder="Enter Slide Text KH">
            <label></label>

            <label style="width: 25%;float: left;">Slide Text EN <sup>*</sup></label>
            <input style="width:75%;float: left;" type="text" class="frm-control" name="txt_slide_text_en" id="txt_slide_text_en" placeholder="Enter Slide Text EN">
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

            <label style="width: 25%;float: left;">Image Slide<sup>*</sup></label>
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

            <label>Loan Condition<sup>*</sup></label>
            <table class="table table-bordered table-responsive table-hover" style="width:100%;height:150px;">
                <thead>
                    <tr>
                        <th class="text-center">Min KHR</th>
                        <th class="text-center">Max KHR</th>
                        <th class="text-center">Min USD</th>
                        <th class="text-center">Max USD</th>
                        <th class="text-center">Min Month</th>
                        <th class="text-center">Max Month</th>
                        <th class="text-center">Min Rate</th>
                        <th class="text-center">Max Rate</th>
                        <th class="text-center">Rate Step</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" class="text-center" name="txt_min_khr" id="txt_min_khr" placeholder="Enter Minimum KHR" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_max_khr" id="txt_max_khr" placeholder="Enter Maximum KHR" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_min_usd" id="txt_min_usd" placeholder="Enter Minimum USD" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_max_usd" id="txt_max_usd" placeholder="Enter Maximum USD" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_min_month" id="txt_min_month" placeholder="Enter Minimum Month" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_max_month" id="txt_max_month" placeholder="Enter Maxunyn Month" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_min_rate" id="txt_min_rate" placeholder="Enter Minimum Rate" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_max_rate" id="txt_max_rate" placeholder="Enter Maximum Rate" required style="padding:10px 5px;"></td>
                        <td><input type="number" class="text-center" name="txt_rate_step" id="txt_rate_step" placeholder="Enter Rate Step" required style="padding:10px 5px;"></td>
                    </tr>
                </tbody>
            </table>

        
        </div>

        <div class="frm-footer">
            <a name="btn-post" id="btn-post" class="btn btn-success" style="color:white;width: 100%;"><i class="fas fa-database"></i>&nbsp;Save Data</a>
        </div>
    </form>


</div>