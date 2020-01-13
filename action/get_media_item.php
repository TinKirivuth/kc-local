<div class="main-content-padding">
    <?php $pk->get_content_banner($base_url,$type);?>
    <!-- style="margin: 0;padding: 0;overflow: hidden;" -->
    <div class="row">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 content">
            <?php 
            if($type==10){
            	$pk->get_photo_detail($base_url,$id,$type,$item,$code,$lang);
        	}else if ($type==12){
            	$pk->get_news_detail($base_url,$id,$type,$item,$code,$lang);
        	}
            ?>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
</div>