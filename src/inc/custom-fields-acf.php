<?php
/**
 * Custom Fields for ACF Pro
 *
 * @package Moonbase
 */

add_action(
	'acf/include_fields',
	function() {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		acf_add_local_field_group(
			array(
				'key'                   => 'group_64f5a52497b64',
				'title'                 => 'Home Hero',
				'fields'                => array(
					array(
						'key'               => 'field_64f5a59c04b48',
						'label'             => 'Heading',
						'name'              => 'heading',
						'aria-label'        => '',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'    => 0,
						'default_value'     => '',
						'maxlength'         => 180,
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_64f5a7482e0b0',
						'label'             => 'Subheading',
						'name'              => 'subheading',
						'aria-label'        => '',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'    => 0,
						'default_value'     => '',
						'maxlength'         => 180,
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'                => 'field_64f5a5be04b49',
						'label'              => 'Text',
						'name'               => 'text',
						'aria-label'         => '',
						'type'               => 'textarea',
						'instructions'       => '',
						'required'           => 0,
						'conditional_logic'  => 0,
						'wrapper'            => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'     => 0,
						'default_value'      => '',
						'acfe_textarea_code' => 0,
						'maxlength'          => '',
						'rows'               => 6,
						'placeholder'        => '',
						'new_lines'          => 'wpautop',
					),
					array(
						'key'               => 'field_64f6d4f6ffdb1',
						'label'             => 'Featured Image',
						'name'              => 'image',
						'aria-label'        => '',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'    => 0,
						'uploader'          => '',
						'return_format'     => 'array',
						'acfe_thumbnail'    => 1,
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => 'jpg,JPEG,png,gif,png',
						'preview_size'      => 'medium',
						'library'           => 'all',
					),
					array(
						'key'               => 'field_64f6d4b3ffdb0',
						'label'             => 'Button',
						'name'              => 'link',
						'aria-label'        => '',
						'type'              => 'link',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'    => 0,
						'return_format'     => 'array',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'page_type',
							'operator' => '==',
							'value'    => 'front_page',
						),
					),
					array(
						array(
							'param'    => 'page_template',
							'operator' => '==',
							'value'    => 'page-templates/custom-home.php',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'left',
				'instruction_placement' => 'label',
				'hide_on_screen'        => array(
					0  => 'permalink',
					1  => 'block_editor',
					2  => 'the_content',
					3  => 'excerpt',
					4  => 'discussion',
					5  => 'comments',
					6  => 'revisions',
					7  => 'slug',
					8  => 'author',
					9  => 'format',
					10 => 'page_attributes',
					11 => 'featured_image',
					12 => 'categories',
					13 => 'tags',
					14 => 'send-trackbacks',
				),
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
				'acfe_display_title'    => 'Introduction',
				'acfe_autosync'         => '',
				'acfe_form'             => 0,
				'acfe_meta'             => '',
				'acfe_note'             => '',
			) 
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_64f9afcc6769d',
				'title'                 => 'Page Hero',
				'fields'                => array(
					array(
						'key'               => 'field_64f9afcc68f14',
						'label'             => 'Heading',
						'name'              => 'heading',
						'aria-label'        => '',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'    => 0,
						'default_value'     => '',
						'maxlength'         => 180,
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_64f9afcc68f1c',
						'label'             => 'Subheading',
						'name'              => 'subheading',
						'aria-label'        => '',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'    => 0,
						'default_value'     => '',
						'maxlength'         => 180,
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
					),
					array(
						'key'               => 'field_64f9afcc68f22',
						'label'             => 'Featured Image',
						'name'              => 'image',
						'aria-label'        => '',
						'type'              => 'image',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'    => 0,
						'uploader'          => '',
						'return_format'     => 'array',
						'acfe_thumbnail'    => 1,
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => 'jpg,JPEG,png,gif,png',
						'preview_size'      => 'medium',
						'library'           => 'all',
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'page',
						),
						array(
							'param'    => 'page_type',
							'operator' => '!=',
							'value'    => 'front_page',
						),
						array(
							'param'    => 'page_template',
							'operator' => '!=',
							'value'    => 'page-templates/custom-home.php',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'default',
				'label_placement'       => 'left',
				'instruction_placement' => 'label',
				'hide_on_screen'        => array(
					0  => 'block_editor',
					1  => 'excerpt',
					2  => 'discussion',
					3  => 'comments',
					4  => 'revisions',
					5  => 'author',
					6  => 'format',
					7  => 'featured_image',
					8  => 'categories',
					9  => 'tags',
					10 => 'send-trackbacks',
				),
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
				'acfe_display_title'    => 'Introduction',
				'acfe_autosync'         => '',
				'acfe_form'             => 0,
				'acfe_meta'             => '',
				'acfe_note'             => '',
			) 
		);

		acf_add_local_field_group(
			array(
				'key'                   => 'group_64f5a01b8c2e7',
				'title'                 => 'Page Sections',
				'fields'                => array(
					array(
						'key'                              => 'field_64f5a01b159a5',
						'label'                            => 'Sections',
						'name'                             => 'section',
						'aria-label'                       => '',
						'type'                             => 'flexible_content',
						'instructions'                     => 'Add or edit additional content section on this page.',
						'required'                         => 0,
						'conditional_logic'                => 0,
						'wrapper'                          => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'acfe_save_meta'                   => 0,
						'acfe_flexible_advanced'           => 1,
						'acfe_flexible_stylised_button'    => 1,
						'acfe_flexible_layouts_templates'  => 0,
						'acfe_flexible_layouts_placeholder' => 0,
						'acfe_flexible_layouts_thumbnails' => 0,
						'acfe_flexible_layouts_settings'   => 0,
						'acfe_flexible_async'              => array(),
						'acfe_flexible_add_actions'        => array(
							0 => 'title',
						),
						'acfe_flexible_remove_button'      => array(
							0 => 'duplicate',
						),
						'acfe_flexible_layouts_state'      => 'user',
						'acfe_flexible_modal_edit'         => array(
							'acfe_flexible_modal_edit_enabled' => '0',
							'acfe_flexible_modal_edit_size'    => 'large',
						),
						'acfe_flexible_modal'              => array(
							'acfe_flexible_modal_enabled' => '0',
							'acfe_flexible_modal_title'   => false,
							'acfe_flexible_modal_size'    => 'full',
							'acfe_flexible_modal_col'     => '4',
							'acfe_flexible_modal_categories' => false,
						),
						'layouts'                          => array(
							'layout_64f99a2cf762d' => array(
								'key'                     => 'layout_64f99a2cf762d',
								'name'                    => 'section-logos',
								'label'                   => 'Logo Block',
								'display'                 => 'row',
								'sub_fields'              => array(
									array(
										'key'            => 'field_64f99a55f762f',
										'label'          => '',
										'name'           => 'logos',
										'aria-label'     => '',
										'type'           => 'repeater',
										'instructions'   => 'Add logos below that will all appear in your logo block.',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '50',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'acfe_repeater_stylised_button' => 0,
										'layout'         => 'block',
										'min'            => 0,
										'max'            => 12,
										'collapsed'      => '',
										'button_label'   => 'Add another logo',
										'rows_per_page'  => 20,
										'sub_fields'     => array(
											array(
												'key'      => 'field_64f99a8bf7630',
												'label'    => 'Logo',
												'name'     => 'logo-file',
												'aria-label' => '',
												'type'     => 'image_aspect_ratio_crop',
												'instructions' => '',
												'required' => 0,
												'conditional_logic' => 0,
												'wrapper'  => array(
													'width' => '',
													'class' => '',
													'id' => '',
												),
												'acfe_save_meta' => 0,
												'crop_type' => 'free_crop',
												'return_format' => 'array',
												'preview_size' => 'medium',
												'library'  => 'uploadedTo',
												'min_width' => '',
												'min_height' => '',
												'min_size' => '',
												'max_width' => '',
												'max_height' => '',
												'max_size' => '',
												'mime_types' => '',
												'parent_repeater' => 'field_64f99a55f762f',
											),
										),
									),
								),
								'min'                     => '',
								'max'                     => '1',
								'acfe_flexible_render_template' => false,
								'acfe_flexible_render_style' => false,
								'acfe_flexible_render_script' => false,
								'acfe_flexible_thumbnail' => false,
								'acfe_flexible_settings'  => false,
								'acfe_flexible_settings_size' => 'medium',
								'acfe_flexible_modal_edit_size' => false,
								'acfe_flexible_category'  => false,
							),
							'layout_64f5a0465a085' => array(
								'key'                     => 'layout_64f5a0465a085',
								'name'                    => 'section-text',
								'label'                   => 'Text Only',
								'display'                 => 'row',
								'sub_fields'              => array(
									array(
										'key'          => 'field_64f5aefe4efb9',
										'label'        => 'Content',
										'name'         => '',
										'aria-label'   => '',
										'type'         => 'tab',
										'instructions' => '',
										'required'     => 0,
										'conditional_logic' => 0,
										'wrapper'      => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'placement'    => 'left',
										'endpoint'     => 0,
									),
									array(
										'key'            => 'field_64f5a195f883b',
										'label'          => 'Heading',
										'name'           => 'heading',
										'aria-label'     => '',
										'type'           => 'text',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_64f5a1f2f883c',
													'operator' => '==contains',
													'value'    => 'show_heading',
												),
											),
										),
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'default_value'  => '',
										'maxlength'      => 200,
										'placeholder'    => '',
										'prepend'        => '',
										'append'         => '',
									),
									array(
										'key'            => 'field_64f5a2e8f883d',
										'label'          => 'Subheading',
										'name'           => 'subheading',
										'aria-label'     => '',
										'type'           => 'text',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_64f5a1f2f883c',
													'operator' => '==contains',
													'value'    => 'show_subheading',
												),
											),
										),
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'default_value'  => '',
										'maxlength'      => 200,
										'placeholder'    => '',
										'prepend'        => '',
										'append'         => '',
									),
									array(
										'key'            => 'field_64f5a392fcbe7',
										'label'          => 'Text',
										'name'           => 'text',
										'aria-label'     => '',
										'type'           => 'textarea',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'default_value'  => '',
										'acfe_textarea_code' => 0,
										'maxlength'      => '',
										'rows'           => '',
										'placeholder'    => '',
										'new_lines'      => 'wpautop',
									),
									array(
										'key'            => 'field_64f5a3ce70fb3',
										'label'          => 'Call to Action Link',
										'name'           => 'cta_link',
										'aria-label'     => '',
										'type'           => 'link',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_64f5a1f2f883c',
													'operator' => '==contains',
													'value'    => 'show_cta',
												),
											),
										),
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'return_format'  => 'array',
									),
									array(
										'key'          => 'field_64f5afec6b7d9',
										'label'        => 'Settings',
										'name'         => '',
										'aria-label'   => '',
										'type'         => 'tab',
										'instructions' => '',
										'required'     => 0,
										'conditional_logic' => 0,
										'wrapper'      => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'placement'    => 'left',
										'endpoint'     => 0,
									),
									array(
										'key'            => 'field_64f5a1f2f883c',
										'label'          => 'Visibility',
										'name'           => 'visibility',
										'aria-label'     => '',
										'type'           => 'checkbox',
										'instructions'   => 'Select the components you\'d like to show on this content block.',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'choices'        => array(
											'show_heading' => 'Show Heading',
											'show_subheading' => 'Show Subheading',
											'show_cta'     => 'Show Call to Action',
										),
										'default_value'  => array(),
										'return_format'  => 'value',
										'allow_custom'   => 0,
										'layout'         => 'horizontal',
										'toggle'         => 0,
										'save_custom'    => 0,
										'custom_choice_button_text' => 'Add new choice',
									),
									array(
										'key'            => 'field_64f5b0b8a0a5b',
										'label'          => 'Display Options',
										'name'           => 'display_options',
										'aria-label'     => '',
										'type'           => 'checkbox',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'choices'        => array(
											'full_width'  => 'Full Width',
											'hide_mobile' => 'Hide on Mobile',
										),
										'default_value'  => array(),
										'return_format'  => 'value',
										'allow_custom'   => 0,
										'layout'         => 'horizontal',
										'toggle'         => 0,
										'save_custom'    => 0,
										'custom_choice_button_text' => 'Add new choice',
									),
									array(
										'key'            => 'field_64f5b13c8974e',
										'label'          => 'Style',
										'name'           => 'style',
										'aria-label'     => '',
										'type'           => 'radio',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '40',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'choices'        => array(
											'white'  => 'White background',
											'black'  => 'Black background',
											'purple' => 'Purple background',
										),
										'default_value'  => 'white',
										'return_format'  => 'array',
										'allow_null'     => 0,
										'other_choice'   => 0,
										'layout'         => 'vertical',
										'save_other_choice' => 0,
									),
								),
								'min'                     => '',
								'max'                     => '',
								'acfe_flexible_render_template' => false,
								'acfe_flexible_render_style' => false,
								'acfe_flexible_render_script' => false,
								'acfe_flexible_thumbnail' => false,
								'acfe_flexible_settings'  => false,
								'acfe_flexible_settings_size' => 'medium',
								'acfe_flexible_modal_edit_size' => false,
								'acfe_flexible_category'  => false,
							),
							'layout_64f9a6cd13417' => array(
								'key'                     => 'layout_64f9a6cd13417',
								'name'                    => 'section-text-wimage',
								'label'                   => 'Text with Image',
								'display'                 => 'row',
								'sub_fields'              => array(
									array(
										'key'          => 'field_64f9a6cd13418',
										'label'        => 'Content',
										'name'         => '',
										'aria-label'   => '',
										'type'         => 'tab',
										'instructions' => '',
										'required'     => 0,
										'conditional_logic' => 0,
										'wrapper'      => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'placement'    => 'left',
										'endpoint'     => 0,
									),
									array(
										'key'            => 'field_64f9a6cd13419',
										'label'          => 'Heading',
										'name'           => 'heading',
										'aria-label'     => '',
										'type'           => 'text',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_64f9a6cd1341e',
													'operator' => '==contains',
													'value'    => 'show_heading',
												),
											),
										),
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'default_value'  => '',
										'maxlength'      => 200,
										'placeholder'    => '',
										'prepend'        => '',
										'append'         => '',
									),
									array(
										'key'            => 'field_64f9a6cd1341a',
										'label'          => 'Subheading',
										'name'           => 'subheading',
										'aria-label'     => '',
										'type'           => 'text',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_64f9a6cd1341e',
													'operator' => '==contains',
													'value'    => 'show_subheading',
												),
											),
										),
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'default_value'  => '',
										'maxlength'      => 200,
										'placeholder'    => '',
										'prepend'        => '',
										'append'         => '',
									),
									array(
										'key'            => 'field_64f9a6cd1341b',
										'label'          => 'Text',
										'name'           => 'text',
										'aria-label'     => '',
										'type'           => 'textarea',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'default_value'  => '',
										'acfe_textarea_code' => 0,
										'maxlength'      => '',
										'rows'           => '',
										'placeholder'    => '',
										'new_lines'      => 'wpautop',
									),
									array(
										'key'            => 'field_64f9a6cd1341c',
										'label'          => 'Call to Action Link',
										'name'           => 'cta_link',
										'aria-label'     => '',
										'type'           => 'link',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_64f9a6cd1341e',
													'operator' => '==contains',
													'value'    => 'show_cta',
												),
											),
										),
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'return_format'  => 'array',
									),
									array(
										'key'            => 'field_64f9a6f049434',
										'label'          => 'Image',
										'name'           => 'image',
										'aria-label'     => '',
										'type'           => 'image_aspect_ratio_crop',
										'instructions'   => 'Add an image to this content block. Change the position in the options panel.',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'crop_type'      => 'free_crop',
										'return_format'  => 'array',
										'preview_size'   => 'medium',
										'library'        => 'all',
										'min_width'      => '',
										'min_height'     => '',
										'min_size'       => '',
										'max_width'      => '',
										'max_height'     => '',
										'max_size'       => '',
										'mime_types'     => '',
									),
									array(
										'key'          => 'field_64f9a6cd1341d',
										'label'        => 'Settings',
										'name'         => '',
										'aria-label'   => '',
										'type'         => 'tab',
										'instructions' => '',
										'required'     => 0,
										'conditional_logic' => 0,
										'wrapper'      => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'placement'    => 'left',
										'endpoint'     => 0,
									),
									array(
										'key'            => 'field_64f9a6cd1341e',
										'label'          => 'Visibility',
										'name'           => 'visibility',
										'aria-label'     => '',
										'type'           => 'checkbox',
										'instructions'   => 'Select the components you\'d like to show on this content block.',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'choices'        => array(
											'show_heading' => 'Show Heading',
											'show_subheading' => 'Show Subheading',
											'show_cta'     => 'Show Call to Action',
										),
										'default_value'  => array(),
										'return_format'  => 'value',
										'allow_custom'   => 0,
										'layout'         => 'horizontal',
										'toggle'         => 0,
										'save_custom'    => 0,
										'custom_choice_button_text' => 'Add new choice',
									),
									array(
										'key'            => 'field_64f9a6cd1341f',
										'label'          => 'Display Options',
										'name'           => 'display_options',
										'aria-label'     => '',
										'type'           => 'checkbox',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'choices'        => array(
											'full_width'  => 'Full Width',
											'hide_mobile' => 'Hide on Mobile',
										),
										'default_value'  => array(),
										'return_format'  => 'value',
										'allow_custom'   => 0,
										'layout'         => 'horizontal',
										'toggle'         => 0,
										'save_custom'    => 0,
										'custom_choice_button_text' => 'Add new choice',
									),
									array(
										'key'            => 'field_64f9a73d49435',
										'label'          => 'Image Alignment',
										'name'           => 'image_alignment',
										'aria-label'     => '',
										'type'           => 'radio',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'choices'        => array(
											'image_left'  => 'Image on Left',
											'image_right' => 'Image on Right',
										),
										'default_value'  => 'image_right',
										'return_format'  => 'array',
										'allow_null'     => 0,
										'other_choice'   => 0,
										'layout'         => 'horizontal',
										'save_other_choice' => 0,
									),
									array(
										'key'            => 'field_64f9a6cd13420',
										'label'          => 'Style',
										'name'           => 'style',
										'aria-label'     => '',
										'type'           => 'radio',
										'instructions'   => '',
										'required'       => 0,
										'conditional_logic' => 0,
										'wrapper'        => array(
											'width' => '40',
											'class' => '',
											'id'    => '',
										),
										'acfe_save_meta' => 0,
										'choices'        => array(
											'white'  => 'White background',
											'black'  => 'Black background',
											'purple' => 'Purple background',
										),
										'default_value'  => 'white',
										'return_format'  => 'array',
										'allow_null'     => 0,
										'other_choice'   => 0,
										'layout'         => 'vertical',
										'save_other_choice' => 0,
									),
								),
								'min'                     => '',
								'max'                     => '',
								'acfe_flexible_render_template' => false,
								'acfe_flexible_render_style' => false,
								'acfe_flexible_render_script' => false,
								'acfe_flexible_thumbnail' => false,
								'acfe_flexible_settings'  => false,
								'acfe_flexible_settings_size' => 'medium',
								'acfe_flexible_modal_edit_size' => false,
								'acfe_flexible_category'  => false,
							),
						),
						'min'                              => '',
						'max'                              => '',
						'button_label'                     => 'Add a new section',
						'acfe_flexible_hide_empty_message' => false,
						'acfe_flexible_empty_message'      => '',
						'acfe_flexible_layouts_previews'   => false,
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'page',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'above_field',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
				'acfe_display_title'    => 'Content Sections',
				'acfe_autosync'         => '',
				'acfe_form'             => 0,
				'acfe_meta'             => '',
				'acfe_note'             => '',
			) 
		);
	} 
);

