<?php
/* Advanced Custom Fields Import */
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_opcoes-da-pagina-inicial-secao-sobre',
		'title' => 'Opções da Página Inicial - Seção Sobre',
		'fields' => array (
			array (
				'key' => 'field_561fc1a1a3872',
				'label' => 'Título da seção',
				'name' => 'home_about',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561faf5e6d1a7',
				'label' => 'Botão na Esquerda - Título',
				'name' => 'home_left_btn',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561fb2016d1a8',
				'label' => 'Botão na Esquerda - Link',
				'name' => 'home_left_btn_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561fb22e6d1a9',
				'label' => 'Botão na Direita - Título',
				'name' => 'home_right_btn',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_561fb26c6d1aa',
				'label' => 'Botão na Direita - Link',
				'name' => 'home_right_btn_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'home-carlos-matuck.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
 /*
 * Field of the ACF plugin
 */
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_evento-opcoes',
		'title' => 'Eventos - Opções',
		'fields' => array (
			array (
				'key' => 'field_555cb4b5a3fad',
				'label' => 'Data do evento',
				'name' => 'agenda_data',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_555cb4fca3fae',
				'label' => 'Hora',
				'name' => 'agenda_hora',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_555cb529a3faf',
				'label' => 'Local',
				'name' => 'agenda_local',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 1,
				'formatting' => 'br',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'evento',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>
