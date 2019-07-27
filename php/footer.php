<!-- JS begin -->

<!-- jQuery  -->
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- MAGNIFIC POPUP -->
<script src='js/jquery.magnific-popup.min.js'></script>

<!-- PORTFOLIO SCRIPTS -->
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>

<!-- COUNTER -->
<script src="js/jquery.countTo.js"></script>

<!-- APPEAR -->
<script src="js/jquery.appear.js"></script>

<!-- GOOLE MAP -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>

<script src="js/gmap3.min.js"></script>

<!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]-->

<!-- FORMS VALIDATION	-->
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact-form-validation.min.js"></script>


<!-- ONE PAGE NAV -->
<script src="js/jquery.nav.js"></script>
<script>


    $(document).ready(function() {
        //ONE PAGE NAV	---------------------------------------------------------------------------
        var top_offset = $('header').height() - 1;  // get height of fixed navbar
        $( "#float2" ).mouseover(function(e) {
            $(this).addClass("hidden");
            $("#float").removeClass("hidden");
            $("#float").css("right","-1px");
 
        });
        $("#float").mouseleave( function(){
            $(this).css("right","-205px");
            $("#float2").removeClass("hidden");
        });

        $('.owl-carousel').owlCarousel({
            loop:true,
            autoplay:3000,
            items : 5,
            itemsDesktop : [1199, 4], //5 items between 1000px and 901px
            itemsDesktopSmall : [768, 3], // betweem 900px and 601px
            itemsTablet: [480, 2], //2 items between 600 and 0
            itemsMobile : true, // itemsMobile disabled - inherit from itemsTablet option
            pagination : false,
            paginationNumbers: false,
        });
  
        $('#nav-onepage').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 700,
            scrollOffset: top_offset,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function() {
                //I get fired when the animation is starting
            },
            end: function() {
                //I get fired when the animation is ending
            },
            scrollChange: function($currentListItem) {
                //I get fired when you enter a section and I pass the list item of the section
            }
        });
        //mail de formulario de contacto
        $('#contact-form').submit(function(e){
            e.preventDefault();
            if ($(this).valid())
            {
                $.ajax({
                    url : 'php/send-contact-form.php',
                    data : $('#contact-form').serialize(),
                    type: 'POST',
                    dataType: 'json',
                    success: function(response){
                        if (response=='sucesss'){
                            $('#contactSuccess').removeClass('hidden');
                        }else{
                            $('#contactError').removeClass('hidden');
                            $('#contactError').append(response);
                        }
                    }
                });
            }
            return false;
        })

    });//END document.ready
</script>

<!-- MAIN SCRIPT -->
<script src="js/main.js"></script>

<!-- FLEX SLIDER SCRIPTS  -->
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/flex-slider.js"></script>

<!-- JS end -->