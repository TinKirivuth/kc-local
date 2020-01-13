<div class="main-content-padding">
  <!-- style="height: 140px;" -->
    
    <?php $pk->get_content_banner($base_url,$type);?>
    
    <!-- Content Start Here.. -->
    <!-- margin: 0;padding: 0;overflow: hidden; -->
    <div class="row">
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>
        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 content">
          <!-- padding:0 10px; -->
          <div class="row">
              <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                  <?php echo $pk->get_product_service_detial($base_url,$type,$lang);?>
              </div>
             
              <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                  <div class="table-service">
                      <?php echo $pk->get_product_service_list($base_url,$lang); ?>
                  </div>
              </div>
          </div>
        </div>

        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>
    </div>
    <!-- End Content Here... -->
</div>


