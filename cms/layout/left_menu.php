<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12" style="" id="menu-fix">
    <div class="" style="" id="menu-fix1">
        <div class="" style="" id="menu-fix-title">
            <b style="">YOUR ACTION HERE..!</b>
        </div>
        <div class="" id="menu-fix-list">
          	<ul>
                <!-- For Admin Role -->
                <?php
                if ($userRole==1){  
                ?>
                <!-- <li data-opt="-1" data-color="red" class="show-drop-down">
                    <a title="Home" class="click-show"><i class="fas fa-text-width"></i>&nbsp;&nbsp;ADMINISTRATOR</a>
                    <div class="drop-down" style="">
                        <ul>
                            <li data-opt="0" data-slug="user" class="drop-down-item"><i style="" class="fa fa-user-plus" aria-hidden="true"></i> &nbsp;User</li>

                            <li data-opt="1" data-slug="menu" class="drop-down-item"><i style="" class="fa fa-cogs" aria-hidden="true"></i> &nbsp;Menu</li>

                            <li data-opt="2" data-slug="permission" class="drop-down-item"><i style="" class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;Permission</li>
                        </ul>
                    </div>
                </li> -->
                
                <li data-opt="-1" data-color="yellow" class="show-drop-down">
                  	<a title="Toturail" class="click-show"><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;ABOUT US</a>
                    <div class="drop-down" style="">
                        <ul>
                            <li data-opt="3" data-slug="company-profile" class="drop-down-item"><i style="" class="fa fa-university" aria-hidden="true"></i> &nbsp;Company Profile</li>

                            <li data-opt="4" data-slug="management-team" class="drop-down-item"><i style="" class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;Management Team</li>

                            <li data-opt="5" data-slug="product-and-service" class="drop-down-item"><i style="" class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;Products & Services</li>
                        </ul>
                    </div>
                </li>

                <li data-opt="-1" data-color="yellow" class="show-drop-down">
                  	<a title="Toturail" class="click-show"><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;CAREER & MEDIA</a>
                    <div class="drop-down" style="">
                        <ul>
                            <li data-opt="6" data-slug="job-opportunity" class="drop-down-item"><i style=";" class="fa fa-university" aria-hidden="true"></i> &nbsp;Job Opportunity</li>

                            <li data-opt="7" data-slug="photo-gallery" class="drop-down-item"><i style="" class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;Photo Gallery</li>

                            <li data-opt="8" data-slug="public-holiday" class="drop-down-item"><i style="" class="fa fa-cart-arrow-down" aria-hidden="true"></i> &nbsp;Public Holiday</li>

                            <li data-opt="9" data-slug="news" class="drop-down-item"><i style="" class="fa fa-id-card" aria-hidden="true"></i> &nbsp;News</li>
                        </ul>
                    </div>
                </li>

                <li data-opt="-1" data-color="green" class="show-drop-down">
                  	<a title="Lesson Videos" class="click-show"><i class="fas fa-tasks"></i>&nbsp;&nbsp;OTHER OPERATION</a>
                    <div class="drop-down" style="">
                        <ul>
                            <!-- <li data-opt="10" data-slug="contact-information" class="drop-down-item"><i style="" class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Contact Information</li> -->

                            <li data-opt="11" data-slug="content-banner" class="drop-down-item"><i style="" class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Content And Banners</li>

                            <!-- <li data-opt="12" data-slug="personal-information" class="drop-down-item"><i style="" class="fa fa-outdent" aria-hidden="true"></i>&nbsp;Personal Inforamtion</li> -->

                            <li data-opt="13" data-slug="menu-item" class="drop-down-item"><i style="" class="fa fa-outdent" aria-hidden="true"></i>&nbsp;Menu Items</li>
                        </ul>
                    </div>
                </li>
                <!-- For User Role -->
                <?php
                }else{
                ?>
                <li data-opt="-1" data-color="yellow" class="show-drop-down">
                    <a title="Toturail" class="click-show"><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;ABOUT US</a>
                    <div class="drop-down" style="">
                        <ul>
                            <li data-opt="3" data-slug="company-profile" class="drop-down-item"><i style="" class="fa fa-university" aria-hidden="true"></i> &nbsp;Company Profile</li>

                            <li data-opt="4" data-slug="management-team" class="drop-down-item"><i style="" class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;Management Team</li>

                            <li data-opt="5" data-slug="product-and-service" class="drop-down-item"><i style="" class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;Products & Services</li>
                        </ul>
                    </div>
                </li>

                <li data-opt="-1" data-color="yellow" class="show-drop-down">
                    <a title="Toturail" class="click-show"><i class="fas fa-angle-double-right"></i>&nbsp;&nbsp;CAREER & MEDIA</a>
                    <div class="drop-down" style="">
                        <ul>
                            <li data-opt="6" data-slug="job-opportunity" class="drop-down-item"><i style="" class="fa fa-university" aria-hidden="true"></i> &nbsp;Job Opportunity</li>
 
                            <li data-opt="7" data-slug="photo-gallery" class="drop-down-item"><i style="" class="fa fa-sitemap" aria-hidden="true"></i> &nbsp;Photo Gallery</li>

                            <li data-opt="8" data-slug="public-holiday" class="drop-down-item"><i style="" class="fa fa-cart-arrow-down" aria-hidden="true"></i> &nbsp;Public Holiday</li>

                            <li data-opt="9" data-slug="news" class="drop-down-item"><i style="" class="fa fa-id-card" aria-hidden="true"></i> &nbsp;News</li>
                        </ul>
                    </div>
                </li>

                <li data-opt="-1" data-color="green" class="show-drop-down">
                    <a title="Lesson Videos" class="click-show"><i class="fas fa-tasks"></i>&nbsp;&nbsp;OTHER OPERATION</a>
                    <div class="drop-down" style="">
                        <ul>
                            <!-- <li data-opt="10" data-slug="contact-information" class="drop-down-item"><i style="" class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Contact Information</li> -->

                            <li data-opt="11" data-slug="content-banner" class="drop-down-item"><i style="" class="fa fa-id-card" aria-hidden="true"></i>&nbsp;Content And Banners</li>

                            <!-- <li data-opt="12" data-slug="personal-information" class="drop-down-item"><i style="" class="fa fa-outdent" aria-hidden="true"></i>&nbsp;Personal Inforamtion</li> -->
                        </ul>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>
