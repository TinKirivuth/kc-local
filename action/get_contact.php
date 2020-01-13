<div class="main-content-padding" style="padding-bottom:0px;">
    <?php 
        $type=16;
        $pk->get_content_banner($base_url,$type);
    ?>
    <?php
    if($lang=='kh'){
        $title="ទំនាក់ទំនងយើង";
        $question_title="ទំរង់បែបបទនៃសំណួរ";
        $compliant_title="ទំរង់បែបបទនៃប្រតិបត្តិ";
        $location="ទីស្នាក់ការកណ្តាល";
        $address="#155 (TK Royal One-In front of IFL), Russian Confederation Blvd, Sangkat Tuek Lák Ti I, Khan Toul Kork, Phnom Penh, Cambodia";
        $customer_title="សេវាបម្រើអតិថិជន";
        $contact="Tel: 023 23 55 99<br>Email: info@khmercapital.com.kh<br>Facebook: Khmer Capital Microfinance";
        $office_time_title="ម៉ោងធ្វើការ";
        $office_time="Monday - Friday<br>8:00 AM - 5:00 PM";
        $submit="ដាក់ស្នើរ";
    }else{
        $title="Contact Us";
        $title=strtoupper($title);
        $question_title="QUESTION FORM";
        $compliant_title="COMPLIANT FORM";
        $location="Head Office";
        $address="#155 (TK Royal One-In front of IFL), Russian Confederation Blvd, Sangkat Tuek Lák Ti I, Khan Toul Kork, Phnom Penh, Cambodia";
        $customer_title="Customer Service";
        $contact="Tel: 023 23 55 99<br>Email: info@khmercapital.com.kh<br>Facebook: Khmer Capital Microfinance";
        $office_time_title="Office Hour";
        $office_time="Monday - Friday<br>8:00 AM - 5:00 PM";
        $submit="Submit";
    }
    ?>
    <div class="row" style="margin: 0;padding: 0;overflow: hidden;">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12"> 
            <h2 style="padding:40px 0px 15px 0px;"><span><?php echo $title;?></span></h2>
            <label></label>
        </div> 
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
 
    <div class="row" style="margin: 0;padding: 0;overflow: hidden;background-color:red;background: url(<?php echo BASE_URL; ?>images/section011.jpg) no-repeat center;background-size: cover;">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
            <h4 style="margin:50px 0px 20px 0px;color:white;"><?php echo $question_title;?></h4>
            <form action="<?php echo BASE_URL;?>gmail_question.php" method="post" enctype="multipart/form-data" style="border:1px solid #eee;padding:35px 50px;border-radius:5px;">
                <div class="row"> 
                    <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12">
                        <input class="personal-form-control" autocomplete="off" type="text" name="txt_qname" id="txt_qname" placeholder="Your Name Here*" required>
                        <input class="personal-form-control" autocomplete="off" type="text" name="txt_qphone" id="txt_qphone" placeholder="Phone Number*" required>
                        <input class="personal-form-control" autocomplete="off" type="text" name="txt_qsubject" id="txt_qsubject" placeholder="Subject*" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12">
                        <input class="personal-form-control" autocomplete="off" type="email" name="txt_qemail" id="txt_qemail" placeholder="Email Address*" required>
                        <textarea class="personal-form-control" name="txt_qmessage" id="txt_qmessage" style="height:150px;" placeholder="You Message Here." required></textarea>
                        <!-- <button  class="btn btn-success pull-right btn-question" style="background-color:#97d700;outline:none;border:0px;">Submit</button> -->
                        <!-- <a href="#" class="btn btn-success pull-right btn-question" id="btn-question" style="background-color:#97d700;outline:none;border:0px;">Submit</a> -->
                        <input type="hidden" name="txt_current_url" id="txt_current_url" value="<?php echo BASE_URL.$lang.'/'.$id;?>">
                        <input class="btn btn-success pull-right" type="submit" name="submit" value="<?php echo $submit;?>" style="background-color:#97d700;outline:none;border:0px;">
                    </div>
                </div>  
            </form> 

            <h4 style="margin:50px 0px 20px 0px;color:white;"><?php echo $compliant_title;?></h4>
            <form  action="<?php echo BASE_URL;?>gmail_compliant.php" method="post" enctype="multipart/form-data" style="border:1px solid #eee;padding:35px 50px;border-radius:5px;">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12">
                        <input class="personal-form-control" autocomplete="off" type="text" name="txt_com_name" id="txt_com_name" placeholder="Your Name Here*" required>
                        <input class="personal-form-control" autocomplete="off" type="text" name="txt_com_phone" id="txt_com_phone" placeholder="Phone Number*" required>
                        <input class="personal-form-control" autocomplete="off" name="txt_com_subject" id="txt_com_subject" type="text" placeholder="Subject*" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12">
                        <input class="personal-form-control" autocomplete="off" name="txt_com_email" id="txt_com_email" type="email" placeholder="Email Address*" required>
                        <textarea class="personal-form-control" name="txt_com_message" id="txt_com_message" style="height:150px;" placeholder="You Message Here." required></textarea>
                        <input type="hidden" name="txt_current_url1" id="txt_current_url1" value="<?php echo BASE_URL.$lang.'/'.$id;?>">
                        <input class="btn btn-success pull-right" type="submit" name="submit" value="<?php echo $submit;?>" style="background-color:#97d700;outline:none;border:0px;">
                    </div>
                </div> 
            </form> 
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="color:white;margin-top:60px;margin-bottom:100px;">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h5 style="color:white;border-bottom:1px solid #ccc;padding-bottom:15px;"><?php echo $location;?></h3><hr>
                    <blockquote><?php echo $address;?></blockquote>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h5 style="color:white;border-bottom:1px solid #ccc;padding-bottom:15px;"><?php echo $customer_title;?></h5><hr>
                    <p><?php echo $contact; ?></p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <h5 style="color:white;border-bottom:1px solid #ccc;padding-bottom:15px;"><?php echo $office_time_title;?></h5><hr>
                    <p><?php echo $office_time; ?></p>
                </div>
            </div>
            
            <div class="fb-page" data-href="https://www.facebook.com/khmercapital/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
</div>