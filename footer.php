</main><!-- Main Content open in header -->

<footer role="contentinfo">

  <div class="top-footer"></div>
  <!-- Area Widget -->
  <div class="container padding-footer">
    <div class="row position-relative">

      <div class="col-md-3 py-2 py-lg-0 footer-1">
        <?php dynamic_sidebar('footer-1');?>
      </div>
      <div class="col-md-3 py-2 py-lg-0 footer-2">
        <?php dynamic_sidebar('footer-2');?>
      </div>
      <div class="col-md-3 py-2 py-lg-0 footer-3">
        <?php dynamic_sidebar('footer-3');?>
      </div>
      <div class="col-md-3 py-2 py-lg-0  footer-4">
        <?php dynamic_sidebar('footer-4');?>
      </div>
    </div>
  </div>

  <!-- Credits -->
  <div class="credits">
    <div class="container">
      <div class="row py-2">
        <div class="col-md-4">
          <span>Copyright © <?php echo date('Y'); ?> Blubase S.p.A.</span>
        </div>
        <div class="col-md-4 text-left text-lg-center">
          <span>Privacy Policy | Cookie Policy</span>
        </div>
        <div class="col-md-4 text-left text-lg-right">
          <span>Powered By Saltonelweb</span>
        </div>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer();?>

</body>

</html>