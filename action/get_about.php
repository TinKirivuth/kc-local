<div class="main-content-padding">
    <?php $pk->get_content_banner($base_url,$type);?>
    <!-- Content Start Here.. -->
    <div class="row">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 content">
            <?php
            if ($type==1){
                $pk->get_company_profile($base_url,$id,$item,$lang);
            }else if ($type==2){
                $pk->get_management_team($base_url,$id,$item,$lang);
            }
            ?>   
        </div> 
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>  
    </div>
</div>

 