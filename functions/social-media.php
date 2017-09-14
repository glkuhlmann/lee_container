<?php
/**
 * ACF Social Media
 *
 *
 *
 * @wordpress-plugin
 * Plugin Name:       Z: ACF Social Media
 * Description:       Adds custom ACF Social Media options
 * Version:           1.0.0
 * Author:            David Suker
 * Author URI:        http://davidsuker.com/
 */
 
 
 
 
if( function_exists('acf_add_local_field_group') ):
 	
 	if( function_exists('acf_add_options_page') ) {
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Social Media',
			'menu_title'	=> 'Social Media',
			'parent_slug'	=> 'options-general-settings',
		));
	}


acf_add_local_field_group(array (
	'key' => 'group_55df432149725',
	'title' => 'Social Media',
	'fields' => array (
		array (
			'key' => 'field_55df4329b87c9',
			'label' => 'Instructions',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Links should contain either "http://" or "https://". The best way to place a link is to go to the page and copy the directly from the address bar.',
			'esc_html' => 0,
		),
	),
	
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-social-media',
			),
		),
	),
	'menu_order' => -1,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));




acf_add_local_field_group(array (
	'key' => 'group_55df335c6ec7f',
	'title' => 'Social Media',
	'fields' => array (
		array (
			'key' => 'field_55df33655c93e',
			'label' => 'Social Media Links',
			'name' => 'social_media_links',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => 'social_media',
			),
			'min' => '',
			'max' => '',
			'layout' => 'table',
			'button_label' => 'Add Social Media',
			'sub_fields' => array (
				array (
					'key' => 'field_55df340096b91',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => 'icon_dropdown',
					),
					'choices' => array (
						'facebook' => 'a',
						'twitter' => 'b',
						'twitter-t' => 'x',
						'linkedin' => 'c',
						'instagram' => 'g',
						'google-plus' => 'f',
						'youtube-play' => 'd',
						'vimeo' => 'e',
						'pinterest' => 'i',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
				array (
					'key' => 'field_55df33805c93f',
					'label' => 'URL',
					'name' => 'url',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '80',
						'class' => '',
						'id' => 'input_fields',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-social-media',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;






function social_media_loop( $classes = '' ){
	if( have_rows('social_media_links','option') ):
	?>
		<ul class="social-media <?php echo $classes;?>">
		<?php
		while ( have_rows('social_media_links','option') ) : the_row();
			$field = get_sub_field_object('icon');
			$value = get_sub_field('icon');
			$label = $field['choices'][ $value ];
			/*
			print "<pre>";
			print_r($field['value']);
			print "</pre>";
			*/
			?>
			<li>
				<a target="_blank" href="<?php the_sub_field('url');?>">
					<i class="icon icon-<?php echo $field['value'];?>"></i>
				</a>
			</li>
		<?php
		endwhile;
		?>
		</ul>
	<?php
	else :
	    // no rows found
	endif;
}


function social_media_directory(){
	return dirname(__FILE__);
}



















