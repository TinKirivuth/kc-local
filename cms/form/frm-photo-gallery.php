<?php
    // include('../db/database.php');
    // $pk=new Db;
?>
<div class="col-xl-7 col-lg-8 col-md-9 col-sm-11 col-11 frm-popup" style="margin-top: 0;">
    <form class="upl" method="post">
    <div class="head">
      <span class="frm-title"><b>Register Photo Gallery</b></span>
      <i class="fa fa-times btn-close" title="Close"></i>
    </div>
    <div class="frm-body">

      <input type="hidden" name="txt_edit_id" id="txt_edit_id" value="0">
      <label style="width:25%;float: left;">ID<sup>*</sup></label>
      <input style="width:10%;float: left;" type="text" class="frm-control" name="txt_id" id="txt_id" value="0" readonly>
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

      <label style="width: 25%;float: left;">Description KH <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_des_kh" id="txt_des_kh"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Description EN <sup>*</sup></label>
      <div style="width: 75%;float: left;">
          <textarea class="tinymce" name="txt_des_en" id="txt_des_en"></textarea>
      </div>
      <label></label>

      <label style="width: 25%;float: left;">Thumbnail<sup>*</sup></label>
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
      
      <label style="width: 25%;float: left;">More Photos<sup>*</sup></label>
      <div style="width: 75%;float: left;">
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box1">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img1" title="Clear"></i></label>
                    <input type="file" name="txt_file1" id="txt_file1" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo1" id="txt_photo1" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box2">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img2" title="Clear"></i></label>
                    <input type="file" name="txt_file2" id="txt_file2" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo2" id="txt_photo2" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box3">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img3" title="Clear"></i></label>
                    <input type="file" name="txt_file3" id="txt_file3" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo3" id="txt_photo3" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box4">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img4" title="Clear"></i></label>
                    <input type="file" name="txt_file4" id="txt_file4" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo4" id="txt_photo4" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box5">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img5" title="Clear"></i></label>
                    <input type="file" name="txt_file5" id="txt_file5" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo5" id="txt_photo5" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box6">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img6" title="Clear"></i></label>
                    <input type="file" name="txt_file6" id="txt_file6" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo6" id="txt_photo6" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box7">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img7" title="Clear"></i></label>
                    <input type="file" name="txt_file7" id="txt_file7" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo7" id="txt_photo7" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box8">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img8" title="Clear"></i></label>
                    <input type="file" name="txt_file8" id="txt_file8" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo8" id="txt_photo8" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box9">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img9" title="Clear"></i></label>
                    <input type="file" name="txt_file9" id="txt_file9" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo9" id="txt_photo9" class="form-control">
            </div>
            <div style="width: 100px;height: 100px;border: 1px solid #eee;float:left;margin-right:10px;margin-bottom:10px;">
                <div class="img-box10">
                    <label style="margin:0;padding:0;font-size:14px;"><i class="fa fa-times clr-img10" title="Clear"></i></label>
                    <input type="file" name="txt_file10" id="txt_file10" class="form-control" title="Please Select File">
                </div>
                <input type="hidden" name="txt_photo10" id="txt_photo10" class="form-control">
            </div>
      </div>
      <label></label>
    </div>
    <div class="frm-footer" style="">
      <a name="btn-post" id="btn-post" class="btn btn-success" style="color:white;width: 100%;"><i class="fas fa-database"></i>&nbsp;Save Data</a>
    </div>
    </form>
</div>