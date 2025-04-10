<?php
add_action( 'cmb2_init', 'mymag_add_metabox' );
function mymag_add_metabox() {

	$prefix = '_mymag_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'services',
		'title'        => __( 'Services', 'mymag' ),
		'object_types' => array( 'page'),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$service = $cmb->add_field( array(
		'name' => __( 'service', 'mymag' ),
		'id' => $prefix . 'service',
		'type' => 'group',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'title', 'mymag' ),
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $service, array(
		'name' => __( 'icon', 'mymag' ),
		'id' => $prefix . 'icon',
		'type' => 'text',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'content', 'mymag' ),
		'id' => $prefix . 'content',
		'type' => 'textarea',
	) );

}