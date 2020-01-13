<div class="main-content-padding">
  <!-- style="height: 140px;" -->

    <?php $pk->get_content_banner($base_url,$type);?>

    <!-- style="margin: 0;padding: 0;overflow: hidden;" -->
    <div class="row">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 content">
        
          <?php
              if($type==10){ 
                $pk->get_photo_gallery($base_url,$id,$type,$item,$lang);
              }else if($type==11){
                $pk->get_public_holiday($base_url,$lang,$id,$item,$type);
              }else if($type==12){
                $pk->get_news($base_url,$id,$type,$item,$lang);
              }
          ?>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
</div>
