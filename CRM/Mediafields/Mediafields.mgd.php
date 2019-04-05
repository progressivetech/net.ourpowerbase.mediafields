<?php

// Create our custom group and fields
return array(
  0 => array(		
    'entity' => 'ContactType',
    'name' => 'mediafields_contact',
    'update' => 'never',
    'params' => array(
      'version' => 3,
      'name' => 'mediafields_contact',
      'label' => 'Media Contact',
      'parent_id' => '1',
      'is_active' => '1',
    ),
  ),
  1 => array(		
    'entity' => 'ContactType',
    'name' => 'mediafields_outlet',
    'update' => 'never',
    'params' => array(
      'version' => 3,
      'name' => 'mediafields_outlet',
      'label' => 'Media Outlet',
      'parent_id' => '3',
      'is_active' => '1',
    ),
  ),
  2 => array(
    'entity' => 'CustomGroup',
    'name' => 'mediafields_contact_info',
    'update' => 'never',
    'params' => array (
      'version' => 3,
      'is_active' => 1,
      'name' => 'mediafields_contact_info',
      'title' => 'Media Contact Info',
      'extends' => 'Individual',
      'extends_entity_column_value' => 'mediafields_contact',
      'style' => 'inline',
      'collapse_display' => '0',
      'is_active' => '1',
      'is_multiple' => '0',
      'collapse_adv_display' => '0',
      'is_reserved' => '0',
      'is_public' => '1',
      'api.custom_field.create' => array(
         array(
           'custom_group_id' => '$value.id',
           'label' => 'Media Type',
           'name' => 'mediafields_contact_type',
           'data_type' => 'String',
           'html_type' => 'CheckBox',
           'is_required' => '0',
           'is_searchable' => '1',
           'is_search_range' => '0',
           'weight' => '10',
           'is_active' => '1',
           'is_view' => '0',
           'text_length' => '255',
           'note_columns' => '60',
           'note_rows' => '4',
           'in_selector' => '0'
         ),
         array(
           'custom_group_id' => '$value.id',
           'label' => 'Beat',
           'name' => 'mediafields_beat',
           'data_type' => 'String',
           'html_type' => 'CheckBox',
           'is_required' => '0',
           'is_searchable' => '1',
           'is_search_range' => '0',
           'weight' => '20',
           'is_active' => '1',
           'is_view' => '0',
           'text_length' => '255',
           'note_columns' => '60',
           'note_rows' => '4',
           'in_selector' => '0'
         ),
      )
    )
  ),
  3 => array(
    'entity' => 'CustomGroup',
    'name' => 'mediafields_outlet_info',
    'update' => 'never',
    'params' => array (
      'version' => 3,
      'is_active' => 1,
      'name' => 'mediafields_outlet_info',
      'title' => 'Media Outlet Info',
      'extends' => 'Organization',
      'extends_entity_column_value' => 'mediafields_outlet',
      'style' => 'inline',
      'collapse_display' => '0',
      'is_active' => '1',
      'is_multiple' => '0',
      'collapse_adv_display' => '0',
      'is_reserved' => '0',
      'is_public' => '1',
      'api.custom_field.create' => array(
        array(
          'custom_group_id' => '$value.id',
          'label' => 'Media Outlet Type',
          'name' => 'mediafields_outlet_type',
          'data_type' => 'String',
          'html_type' => 'CheckBox',
          'is_required' => '0',
          'is_searchable' => '1',
          'is_search_range' => '0',
          'weight' => '10',
          'is_active' => '1',
          'is_view' => '0',
          'text_length' => '255',
          'note_columns' => '60',
          'note_rows' => '4',
          'in_selector' => '0'
        ),
      )
    )
  ),
  4 => array(
    'entity' => 'OptionGroup',
    'name' => 'mediafields_beat_values',
    'update' => 'never',
    'params' => array (
      'version' => 3,
      'name' => 'mediafields_beat_values',
      'title' => 'Media Beats',
      'is_reserved' => '1',
      'is_active' => '1',
      'is_locked' => '0',
      'api.option_value.create' => array(
        array(
          'option_group_id' => '$value.id',
          'label' => 'Economic Development',
          'name' => 'mediafields_economic_development',
          'value' => '1',
          'is_default' => '0',
          'weight' => '10',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Employment',
          'name' => 'mediafields_employment',
          'value' => '2',
          'is_default' => '0',
          'weight' => '20',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Environment',
          'name' => 'mediafields_environment',
          'value' => '3',
          'is_default' => '0',
          'weight' => '30',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Health',
          'name' => 'mediafields_health',
          'value' => '4',
          'is_default' => '0',
          'weight' => '40',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Human Interest',
          'name' => 'mediafields_human_interest',
          'value' => '5',
          'is_default' => '0',
          'weight' => '50',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Immigration',
          'name' => 'mediafields_immigration',
          'value' => '6',
          'is_default' => '0',
          'weight' => '60',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
      ),
    ),
  ),
  5 => array(
    'entity' => 'OptionGroup',
    'name' => 'mediafields_type_values',
    'update' => 'never',
    'params' => array (
      'version' => 3,
      'name' => 'mediafields_type_values',
      'title' => 'Media Types',
      'is_reserved' => '1',
      'is_active' => '1',
      'is_locked' => '0',
      'api.option_value.create' => array(
        array(
          'option_group_id' => '$value.id',
          'label' => 'Blog',
          'name' => 'mediafields_blog',
          'value' => '1',
          'is_default' => '0',
          'weight' => '10',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Magazine',
          'name' => 'mediafields_magazine',
          'value' => '2',
          'is_default' => '0',
          'weight' => '20',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Newspaper',
          'name' => 'mediafields_newspaper',
          'value' => '3',
          'is_default' => '0',
          'weight' => '30',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Online',
          'name' => 'mediafields_online',
          'value' => '40',
          'is_default' => '0',
          'weight' => '40',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Photography',
          'name' => 'mediafields_photography',
          'value' => '5',
          'is_default' => '0',
          'weight' => '50',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Radio',
          'name' => 'mediafields_radio',
          'value' => '6',
          'is_default' => '0',
          'weight' => '60',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'TV',
          'name' => 'mediafields_tv',
          'value' => '7',
          'is_default' => '0',
          'weight' => '70',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
        array(
          'option_group_id' => '$value.id',
          'label' => 'Weekly',
          'name' => 'mediafields_weekly',
          'value' => '8',
          'is_default' => '0',
          'weight' => '80',
          'is_optgroup' => '0',
          'is_reserved' => '0',
          'is_active' => '1'
        ),
      ),
    ),
  ),
);
