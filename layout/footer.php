<div class="container-fluid footer">
    <div class="row">
        <?php
        if($lang=='kh'){
            $contact="ទំនាក់ទំនងយើងខ្ញុំ";
            $career="វិជ្ជាជីវៈ";
            $media="ព័ត៌​មាន";
            $product="ផលិតផល";
            $copy_right="រក្សាសិទ្ធគ្រប់យ៉ាង © ២០១៨ នៃ​គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខ្មែរឃែភីថល ម.ក";
            $phone="០២៣ ២៣​ ៥៥​ ៩៩​/​០២៣ ២៣ ១៨ ៧៩/០២៣ ២៣ ០៧ ៥៦";
        }else{
            $contact="Contact";
            $career="Career";
            $media="Media";
            $product="Product";
            $copy_right="Copyright © 2018 of Khmer Capital Microfinance Institution PLC";
            $phone="023 23 55 99 / 023 23 18 79 / 023 23​ 07 56";
        }
        ?>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 img-footer">
                    <img src="<?php echo BASE_URL; ?>images/footer_style.png">
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 img-text">
                    <div style="">
                        <h6>
                            <a href="<?php echo BASE_URL.$lang.'/PRODUCT-AND-SERVICE/4/ALL' ?>"><?php echo $product;?></a> l 
                            <a href="<?php echo BASE_URL.$lang.'/MEDIA/12/ALL' ?>"><?php echo $media;?></a> l 
                            <a href="<?php echo BASE_URL.$lang.'/CAREER/13/ALL' ?>"><?php echo $career;?></a> l 
                            <a href="<?php echo BASE_URL.$lang.'/contact' ?>"><?php echo $contact;?></a>
                        </h6>
                    </div>
                    <p style="font-size: 14px;text-align:center;"><?php echo $copy_right; ?></p>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 img-contact">
                    <div>
                        <p style="text-align:center;padding:8px 0 0 0;"><i class="fa fa-volume-control-phone" aria-hidden="true"​ style="background-color:red;border-radius:5px;padding:5px;"></i> &nbsp;<?php echo $phone;?> </p>
                        <div style="margin-top:-13px;"><a href="https://www.facebook.com/khmercapital" target="_new" style="color:#97d700;"><i class="fa fa-facebook" aria-hidden="true"​ style="background-color:#1b6bb5;color:white;border-radius:5px;padding:5px 6px;"></i> &nbsp;www.facebook.com/khmercapital</a></div>
                        <!-- <a href="#"><i class="fa fa-youtube-square" aria-hidden="true" style="font-size: 25px;color: white;margin: 0 5px;"></i></a>
                        <a href="#"><i class="fa fa-globe" aria-hidden="true" style="font-size: 25px;color: white;margin: 0 5px;"></i></a> -->
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>
    </div>
</div>