<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Jotain</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Blogi</h4>
            <ol class="list-unstyled">
              <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Sosiaaliset media</h4>
            <ol class="list-unstyled">
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->