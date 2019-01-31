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
    /**
     * Social
     */
    array(
      'key' => 'menus__social',
      'label' => 'Social',
      'type' => 'tab',
    ),
    array(
      'key' => 'menus__social__facebook_url',
      'label' => 'Facebook URL',
      'name' => 'social_facebook_url',
      'type' => 'text',
    ),
    array(
      'key' => 'menus__social__twitter_url',
      'label' => 'Twitter URL',
      'name' => 'social_twitter_url',
      'type' => 'text',
    ),
    array(
      'key' => 'menus__social__instagram_url',
      'label' => 'Instagram URL',
      'name' => 'social_instagram_url',
      'type' => 'text',
    ),
  ));

endif;