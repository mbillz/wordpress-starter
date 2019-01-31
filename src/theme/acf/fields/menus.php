<?php
if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'menus__fields',
    'title' => 'Menus',
    'style' => 'seamless',
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'menu-settings',
        ),
      ),
    ),
    'fields' => array(
      /**
       * Header
       */
      array(
        'key' => 'menus__header',
        'label' => 'Header',
        'type' => 'tab'
      ),
      array(
        'key' => 'menus__header__nav_items',
        'label' => 'Nav Items',
        'name' => 'header_nav_items',
        'type' => 'repeater',
        'layout' => 'row',
        'sub_fields' => array(
          array(
            'key' => 'menus__header__nav_items__type',
            'label' => 'Nav Item Type',
            'name' => 'nav_item_type',
            'type' => 'select',
            'choices' => array(
              'Page Link' => 'Page Link',
              'Custom Link' => 'Custom Link',
              'Scroll Link' => 'Scroll Link',
            ),
            'default_value' => array(
              'page Link' => 'Page Link',
            )
          ),
          array(
            'key' => 'menus__header__nav_items__label',
            'label' => 'Label',
            'name' => 'label',
            'type' => 'text',
          ),
          array(
            'key' => 'menus__header__nav_items__page_link',
            'label' => 'Page Link',
            'name' => 'page_link',
            'type' => 'post_object',
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'menus__header__nav_items__type',
                  'operator' => '==',
                  'value' => 'Page Link',
                ),
              ),
            ),
          ),
          array(
            'key' => 'menus__header__nav_items__custom_link',
            'label' => 'Custom Link',
            'name' => 'custom_link',
            'type' => 'text',
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'menus__header__nav_items__type',
                  'operator' => '==',
                  'value' => 'Custom Link',
                ),
              ),
            ),
          ),
          array(
            'key' => 'menus__header__nav_items__scroll_link_section',
            'label' => 'Scroll Link Section',
            'name' => 'scroll_link_section',
            'type' => 'text',
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'menus__header__nav_items__type',
                  'operator' => '==',
                  'value' => 'Scroll Link',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ));

endif;