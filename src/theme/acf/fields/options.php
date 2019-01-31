<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'options__fields',
    'title' => 'Options',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options',
        ),
      ),
    ),
    'fields' => array(
      /**
       * Site Metadata
       */
      array(
        'key' => 'options__site_meta',
        'label' => 'Site Metadata',
        'type' => 'tab',
      ),
      array(
        'key' => 'options__site_meta__description',
        'label' => 'Meta Description',
        'name' => 'meta_description',
        'type' => 'textarea',
      ),
      array(
        'key' => 'options__site_meta__image',
        'label' => 'Meta Image',
        'name' => 'meta_image',
        'type' => 'image',
      ),
    ),
  ));

endif;