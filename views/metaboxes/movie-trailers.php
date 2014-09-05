
		<div id="wpml-trailers" class="wpml-trailers">

			<p><strong><?php _e( 'Find a trailer', 'wpmovielibrary-trailers' ); ?></strong></p>

			<div>
				<select id="wpml-trailer-source">
					<option value="youtube"><?php _e( 'YouTube', 'wpmovielibrary-trailers' ); ?></option>
					<option value="allocine"><?php _e( 'Allociné', 'wpmovielibrary-trailers' ); ?></option>
				</select>
				<a id="wpml-search-trailers" class="button" href="#" onclick="wpml_trailers.search(); return false;"><?php _e( 'Search', 'wpmovielibrary-trailers' ); ?></a>
				<a id="wpml-empty-trailers" class="button" href="#" onclick="wpml_trailers.empty(); return false;"><?php _e( 'Empty', 'wpmovielibrary-trailers' ); ?></a>
				<span class="spinner"></span>

				<a id="wpml-remove-trailer" class="button" href="#" onclick="wpml_trailers.remove(); return false;"><?php _e( 'Remove', 'wpmovielibrary-trailers' ); ?></a>
				
				<div id="wpml-trailers-movies-select"></div>

				<div id="wpml-trailer-frame"<?php echo $style ?>>
					<iframe src="<?php echo $url ?>" frameborder="0"></iframe>
					<p><?php _e( 'The above video will be used as the default trailer for this movie; to use an alternative trailer make your choice among the other videos below.', 'wpmovielibrary-trailers' ); ?> <a href="#" onclick="$('#wpml-trailer-details').slideToggle( 250 ); return false;"><?php _e( 'Show more &raquo;', 'wpmovielibrary-trailers' ); ?></a></p>
					<div id="wpml-trailer-details">
						<label for="wpml_trailer_url"><?php _e( 'Video URI', 'wpmovielibrary-trailers' ); ?> <input type="text" id="wpml_trailer_url" size="40" value="<?php echo $url ?>" /></label>
						<label for="wpml_trailer_page"><?php _e( 'Trailer Page', 'wpmovielibrary-trailers' ); ?> <input type="text" id="wpml_trailer_page" size="40" value="<?php echo $link ?>" /></label>
						<label for="wpml_trailer_code"><?php _e( 'Embed Code', 'wpmovielibrary-trailers' ); ?><br /><textarea rows="3" cols="40" id="wpml_trailer_code"><?php echo $code ?></textarea></label>
						<label for="wpml_trailer_shortcode"><?php _e( 'Shortcode', 'wpmovielibrary-trailers' ); ?><br /><input type="text" id="wpml_trailer_shortcode" size="40" value='<?php echo $shortcode ?>' /></label><br />
						<a href="http://wpmovielibrary.com/extensions/wpmovielibrary-trailers/movie_trailer/"><?php _e( 'Learn more about Shortcode', 'wpmovielibrary-trailers' ); ?></a>
					</div>
				</div>

				<div id="wpml-trailers-list"></div>

				<?php WPML_Utils::_nonce_field( 'remove-trailer' ) ?>
				<?php WPML_Utils::_nonce_field( 'search-trailer' ) ?>
				<input type="hidden" id="wpml_data_trailer" name="wpml_data[trailer]" value="<?php echo $trailer ?>" />
				<input type="hidden" id="wpml_data_trailer_data" name="wpml_data[trailer_data]" value='<?php echo $trailer_data_ ?>' />

				<div style="clear:both;"></div>

			</div>

		</div>
