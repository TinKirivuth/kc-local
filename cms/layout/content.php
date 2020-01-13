<!-- Content Start Here -->
<div class="content1">
    <!-- background-image:url('images/angkorwat.jpg'); background-repeat: no-repeat, repeat;background-size: cover; -->
    <div class="content-wrap-data">
        <table class="tbl-responsive tbl-data" style="">
            <!-- Content Start -->
        </table>
    </div>

    <!-- Start Pagination -->
    <div class="pager" style="">
        <a href="#" id="btn_back" name="btn_back" style="">❮</a>

        <a href="#" id="btn_next" name="btn_next" style="">❯</a>


        <center>
            <span style="">Total: <b class=""><input type="text" name="txt_total_record" id="txt_total_record" value="0" style="" readonly></b> Record</span> &nbsp;

            <select class="" name="my-select" id="my-select" class="my-select" style="">
                <option value="15">15</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </center>
    </div>
    <!-- End Pagination -->

    <!-- Start Get User Login Info And Insert Into Textbox Control -->
    <input type="hidden" name="txt_s" id="txt_s" value="0" style="">
    <input type="hidden" name="txt_total_data" id="txt_total_data" value="0" style="">
    <input type="hidden" name="txtUserID" id="txtUserID" value="<?php echo $userID; ?>">
    <input type="hidden" name="txtUserName" id="txtUserName" value="<?php echo $userName; ?>">
    <input type="hidden" name="txtUserPhoto" id="txtUserPhoto" value="<?php echo $userPhoto; ?>">
    <input type="hidden" name="txtUserRole" id="txtUserRole" value="<?php echo $userRole; ?>">
    <input type="hidden" name="txtUserIsActive" id="txtUserIsActive" value="<?php echo $userIsActive; ?>">
    <input type="hidden" name="txtUserIsDisable" id="txtUserIsDisable" value="<?php echo $userIsDisable; ?>">
    <!-- End Get User Login Info -->
</div>
<!-- End Content -->
