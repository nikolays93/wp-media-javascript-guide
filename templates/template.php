<div class="wrap">
	<h2>WordPress Media Backbone Guide</h2>
	<?php require( 'menu.php' ); ?>
	<?php require( '../sections/' . WPMT::get_current_section() . '/index.php' ); ?>
	<div class="entry-template">
		<h3>Title</h3>
		<p>Content</p>
		<div class="example">
			<h3>Example: title</h3>
			<h4>Live Example <a class="add-new-h2" target="_blank" href="<?php echo WPMT::get_example_url( WPMT::get_current_section(), 1 ) ?>">open in a new window</a></h4>
			<iframe class="iframe-interactive-demo" src="<?php echo WPMT::get_example_url( WPMT::get_current_section(), 1 ) ?>"></iframe>
			<h4>Markup</h4>
			<pre><code class="language-html"><?php wpmt()->the_section_example_markup( WPMT::get_current_section(), 1 ) ?></code></pre>
			<h4>Javascript</h4>
			<pre><code class="language-javascript"><?php wpmt()->the_section_example_javascript( WPMT::get_current_section(), 1 ) ?></code></pre>
		</div>
	</div>
</div>