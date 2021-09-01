<?php

/**
 * Adds Imagerec-plugin widget.
 */
class Imagerec_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'imagerect_widget', // Base ID
			esc_html__( 'Imagerec Plugin', 'ir_domain' ), // Name
			array( 'description' => esc_html__( 'Imagerec Widget', 'tp_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

        ?>
            <div class="content">
				<span class="loading"></span>
			</div>
            <input type="file" value="Upload Image" name="file" id="image-file">
			<button onclick="doupload()" name="submit">Upload File</button>
		<?php

		echo $args['after_widget'];
	}
} // class Foo_Widget