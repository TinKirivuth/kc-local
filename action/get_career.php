<div class="main-content-padding">
    
    <?php $pk->get_content_banner($base_url,$type);?>
    
    <div class="row">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 content">
        <?php 
            // $pk->get_content_title($base_url,$type);
            $pk->get_job_opportunity($base_url,$id,$type,$item,$lang);
        ?>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
    </div>
</div>

 