<!DOCTYPE html>

  <?php include('../../header.php'); ?>
  <body id="learn-page">

    <?php include('../../sidebar.php'); ?>

    <!-- content sections -->
    <div class="column-span">
      <section>
          <p id="backlink"><a href="../#demos">< Back to Demos</a></p>
          <h2>Flocking</h2>
          <p>Demonstration of <a href="http://www.red3d.com/cwr/">Craig Reynolds' "Flocking" behavior</a>.<br>
 (Rules: Cohesion, Separation, Alignment.)<br>
 From <a href="http://natureofcode.com">natureofcode.com</a>.
 </p>

          <div id="exampleDisplay">
            <iframe id="exampleFrame" src="../example.html" ></iframe>
            <div class="edit_space">
              <button id="runButton" class="edit_button">run</button>
              <button id="resetButton" class="reset_button">reset</button>
            </div>
            <div id="exampleEditor"></div>
          </div>

          <p><a style="border-bottom:none !important;" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target=_blank><img src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" style="width:88px"/></a></p>
      </section>

      <?php include('../../footer.php'); ?>
    </div><!-- end column-span -->

    <!-- outside of column for footer to go across both -->

    <p class="clearfix"> &nbsp; </p>

    <object type="image/svg+xml" data="../../img/thick-asterisk-alone.svg" id="asterisk-design-element">
         *<!-- to do: add fallback image in CSS -->
    </object>

    <?php include('../../end.php'); ?>

    <script src="../../js/vendor/ace-nc/ace.js"></script>
    <script src="../../js/examples.js"></script>
    <script>
      $(document).ready( function () {
          examples.init('../demos_src/01_Hello_P5/04_flocking.js');
      });
    </script>
  </body>
</html>