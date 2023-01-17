<footer class="footer">
  <div class="footer__block block no-margin-bottom">
    <div class="container-fluid text-center">
      <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      <p class="no-margin-bottom">M&copy; Mashal Welfare Trust</a>.</p>
      <!-- <a target="_blank" href="https://templateshub.net"> -->
    </div>
  </div>
</footer>
</div>
</div>
<!-- JavaScript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- <script src="vendor/jquery.cookie/jquery.cookie.js"> </script> -->
<!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<!-- <script src="js/charts-home.js"></script> -->
<script src="js/front.js"></script>
<script>
  $(document).ready(function() {
    $(window).on('hashchange', function() {
      hashValueChange();
    });

    $('.sidebar_menu a').click(function(e) {
      activateLink($(this));
      // get url for clicked a tag
      var url = $(this).attr('href');
      // show loader
      $('.page-content').html("<div style='position:relative; height:400px; width:1000px; text-align:center;'><img style='position:absolute; top:0; bottom:0; margin:auto' src='../assets/img/loader.gif' /></div>");
      // make an ajax call and get html of child container
      window.location.hash = url.slice(0, url.indexOf('.php'));

      $.ajax({
        url: url,
        success: function(result) {

          $(".page-content").html(result);
        }
      });
      e.preventDefault();


    });
    
    function activateLink(anchor) {
      $('.sidebar_menu li').removeClass('active');
      // add active class to current clicked li item
      $(anchor).parent().addClass('active');
    }

    function hashValueChange() {

      var urlHash = window.location.hash.replace('#', '');
      if (!urlHash) {
        urlHash = 'home_profile';
      }

      urlHash = urlHash + '.php';

      // The .each() method is unnecessary here:
      $(".sidebar_menu a").each(function() {
        if ($(this).attr('href') === urlHash) {
          activateLink($(this))
        }
      });

      $('.page-content').html("<div style='position:relative; height:400px; width:1000px; text-align:center;'><img style='position:absolute; top:0; bottom:0; margin:auto' src='../assets/img/loader.gif' /></div>");
      // make an ajax call and get html of child container
      $.ajax({
        url: urlHash,
        success: function(result) {

          $(".page-content").html(result);
        }
      });
    }
    hashValueChange();

  });
  // $(document).ready(function(){
  //   alert('hello');
  // });
</script>

</body>

</html>