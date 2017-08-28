<?php include"footer.php"; ?>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="<?=JS?>jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=JS?>bootstrap.min.js"></script>
    <script src="<?=JS?>responsive-slider.min.js"></script>
    <!-- WOw Core JavaScript -->
    <script src="<?=JS?>wow.min.js"></script>
    <!-- Script   -->
    <script>
      $('.carousel').carousel({
          interval: 5000 //changes the speed
      })
      wow = new WOW({}).init();
      $(document).ready(function(){
          $('.ir-arriba').click(function(){
            $('body, html').animate({scrollTop: '0px'}, 300);
           
          });
          $(window).scroll(function(){if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(300);
            if(!$('nav.navbar').hasClass('navbar-fixed-top')){
              //console.log('si ');
              $('nav.navbar').addClass('navbar-fixed-top');//menu fixed-top durante el scrollDown
            }
          }
          else
          {
            if($('nav.navbar').hasClass('navbar-fixed-top')){
              //console.log('no ');
              $('nav.navbar').removeClass('navbar-fixed-top');//menu en reposo
            }
            $('.ir-arriba').slideUp(300);
          }
        });

          $(".spec").click(function(event) {
            if($(this).hasClass('collapsed')){
              console.log('no ');
              $(this).find('.icon-spec').html("-");
            }
            else{
             console.log('si');
              $(this).find('.icon-spec').html("+");
           }
          });
      });
    </script>
</body>
</html>