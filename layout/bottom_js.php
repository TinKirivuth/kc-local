<!-- Start Image Gallery -->
<script src="<?php echo BASE_URL; ?>js/img-gallery/baguetteBox.min.js"></script>
<!-- End Image Gallery -->



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo BASE_URL; ?>js/jquery-3.2.1.min.js"></script>
<!-- if not work you can try use this line
<script src="js/popper.min.js"></script> -->
<!-- bootstrap_4.3.0 -->
<script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>js/myshare1.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Start Chnage backgrou Color Slide Menu
        $('.slide-menu').mouseover(function(){
            var eThis=$(this);
            color=eThis.data('color');
            eThis.css({'background-color':color});
        });

        $('.slide-menu').mouseout(function(){
            var eThis=$(this);
            eThis.css({'background-color':'rgba(10,63,165,0)'});
        });
        // End Change Color Slide Menu

        //====== Start Scroll Path=========
        window.onscroll = function() {
            myFunction();
        }

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;
        function myFunction() {
            if (window.pageYOffset > sticky) {
                document.getElementById("myBtn").style.display = "block"; // For Go To Top Button
                $('.wrap-menu').css({'background':'#001a72'});
                $('.menu .img-logo').attr({'src':'<?php echo BASE_URL; ?>images/logo1.png'});
                $('.menu ul li a').css({'color':'#fff'});
            } else {
                document.getElementById("myBtn").style.display = "none"; // For Go To Top Button
                $('.wrap-menu').css({'background':'transparent'});
                $('.menu .img-logo').attr({'src':'<?php echo BASE_URL; ?>images/logo.png'});
                // Check Color For Main Menu Is Located Home Page
                var is_home = $('#txt_is_home')
                if(is_home.val()==1){
                    $('.menu ul li a').css({'color':'#fff'});
                }else{
                    $('.menu ul li a').css({'color':'#001a72'});
                }
            }
        }
        // End Scroll Section
    });
</script>
<!-- Start Image Gallery Style -->
<script>
    baguetteBox.run('.tz-gallery');
</script>
<!-- End Image Gallery Style -->

