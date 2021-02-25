    <footer>

                  <p style="padding: 20px; text-decoration: bold;"><b>Tool By :</b> Aqil Da Fortress
                  </footer>
                </p>
                <style type="text/css">

                  #persen b{

                    margin-left: 10px;
                    /* margin-right: 50%;*/

                  }
                  #persen span{

                    float:right;
                  }
                  #persen hr{
                    height: 4px;
                    color: #f3f5f0
                  }
                  #persen i{
                    padding-left: 20px;
                    color:darkgreen;
                  }

                </style>

              
            </footer>
    <!-- </div>
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracket/intro"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracket/intro"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div> --><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
   
              

    <script src="<?= site_url('vendor/lib/jquery/jquery.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/jquery/jquery.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/bootstrap/bootstrap.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/moment/moment.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/jquery-ui/jquery-ui.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/jquery-switchbutton/jquery.switchButton.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/peity/jquery.peity.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/chartist/chartist.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/jquery.sparkline.bower/jquery.sparkline.min.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/d3/d3.js') ?>"></script>
    <script src="<?= site_url('vendor/lib/rickshaw/rickshaw.min.js') ?>"></script>


    <script src="<?= site_url('vendor/js/bracket.js') ?>"></script>
    <script src="<?= site_url('vendor/js/ResizeSensor.js') ?>"></script>
    <script src="<?= site_url('vendor/js/dashboard.js') ?>"></script>
    
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>
