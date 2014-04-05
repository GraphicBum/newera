</div>
      <footer>

            <div class="row">
			<?php dynamic_sidebar( 'Footer-1' ); ?>
            <?php dynamic_sidebar( 'Footer-2' ); ?>
            <?php dynamic_sidebar( 'Footer-3' ); ?>
            <?php dynamic_sidebar( 'Footer-4' ); ?>
			<p>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); echo" <small>LLC</small>"; ?></p>
		</div>
          </footer>
</body>
</html>
<?php wp_footer();?>