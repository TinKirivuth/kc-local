<!-- Slide Section -->
<div class="">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
            <?php
                 if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    if($id=='home'){ // Get Home Page Content
                        $pk->get_slide_image($base_url,$lang);
                    }
                }else{
                    $pk->get_slide_image($base_url,$lang);
                }
            ?> 
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<input type="hidden" id="txt_is_home" name="txt_is_home" value="1">
<div class="container-fluid sub-menu-slide">
    <div class="row slide-menu-wrap1">
        <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            if($id=='home'){ // Get Home Page Content
                $pk->get_slide_menu($base_url,$lang);
            }
        }else{
            $pk->get_slide_menu($base_url,$lang);
        }
        ?>
    </div>
</div>
<!-- End Slide Section -->