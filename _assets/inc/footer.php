
		<footer>

			<div class="inner">

				<img class="underline" src="/_assets/img/underline.png" alt="underline graphic">

				<div class="left">
					
					<img class="instagram" src="/_assets/img/instagram.png" alt="instagram icon">

					<p><a href="https://instagram.com/charliecoal/" target="_blank">Follow Us on Instagram</a></p>

				</div><!--left-->

			</div><!--inner-->

		</footer>


	<script>

	    $(function(){

	      var $container = $('#container');

	      $container.isotope({
	        itemSelector : '.item'
	      });

	      var $optionSets = $('#options .option-set'),
	          $optionLinks = $optionSets.find('a');

	      $optionLinks.click(function(){
	        var $this = $(this);
	        // don't proceed if already selected
	        if ( $this.hasClass('selected') ) {
	          return false;
	        }
	        var $optionSet = $this.parents('.option-set');
	        $optionSet.find('.selected').removeClass('selected');
	        $this.addClass('selected');

	        // make option object dynamically, i.e. { filter: '.my-filter-class' }
	        var options = {},
	            key = $optionSet.attr('data-option-key'),
	            value = $this.attr('data-option-value');
	        // parse 'false' as false boolean
	        value = value === 'false' ? false : value;
	        options[ key ] = value;
	        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	          // changes in layout modes need extra logic
	          changeLayoutMode( $this, options )
	        } else {
	          // otherwise, apply new options
	          $container.isotope( options );
	        }

	        return false;
	      });
	  	});

	</script>

	<script src="/_assets/js/smoothscroll.js"></script>

	</body>
</html>