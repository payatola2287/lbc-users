<?php

class LBCUSettings{

  public static function get_settings(){
    $settings = array(
      'general_tab' => array(
        'title' => __( 'General','fl-builder' ),
        'sections' => array(
          'general-section' => array(
            'fields' => array(
              'name_tag' => array(
                'label' => __( 'HTML Heading tag','fl-builder' ),
                'type' => 'select',
                'options' => array(
                  'h1' => 'H1',
                  'h2' => 'H2',
                  'h3' => 'H3',
                  'h4' => 'H4',
                  'h5' => 'H5',
                  'h6' => 'H6',
                ),
                'default' =>'h3'
              ),
              'per_page' => array(
                'label' => __( 'Number of members to display','fl-builder' ),
                'type' => 'text',
                'default' => '9'
              ),
              'mem_content' => array(
                'label' => __( 'Display bio','fl-builder' ),
                'type' => 'select',
                'options' => array(
                  'yes' => __( 'Yes','fl-builder' ),
                  'no' => __( 'No','fl-builder' )
                ),
                'toggle' => array(
                  'yes' => array(
                    'sections' => array( 'content-style-section','content-typo-section' )
                  )
                )
              ),
              'link_type' => array(
                'label' => __( 'Link Type' ,'fl-builder' ),
                'type' => 'select',
                'options' => array(
                  'none' => __( 'None','fl-builder' ),
                  'button' => __( 'Button','fl-builder' ),
                  'box' => __( 'Box','fl-builder' )
                ),
                'toggle' => array(
                  'button' => array(
                    'sections' => array(
                      'button-styling',
                      'button-section',
                      'button-typography'
                    ),
                    'fields' => array(
                      'med_button_font_size',
                      'med_button_alignment',
                      'sm_button_font_size',
                      'sm_button_alignment'
                    )
                  )
                )
              ),
              'column_count' => array(
                'label' => __( 'Number of Columns','fl-builder' ),
                'type' => 'select',
                'options' => array(
                  '1' => __( 'One Column','fl-builder' ),
                  '2' => __( 'Two Column','fl-builder' ),
                  '3' => __( 'Three Column','fl-builder' ),
                  '4' => __( 'Four Column','fl-builder' ),
                  '5' => __( 'Five Column','fl-builder' ),
                  '6' => __( 'Six Column','fl-builder' ),
                ),
                'default' => '3'
              ),
              'show_pagination' => array(
                'label' => __( 'Display pagination','fl-builder' ),
                'type' => 'select',
                'options' => array(
                  'yes' => __( 'Yes','fl-builder' ),
                  'no' => __( 'No','fl-builder' )
                ),
                'default' => 'yes',
                'toggle' => array(
                  'yes' => array(
                    'tabs' => array( 'pagination-tab' )
                  )
                )
              )
            )
          ),
          'button-section' => array(
            'title' => __( 'Button','fl-builder' ),
            'fields' => array(
              'button_text' => array(
                'label' => __( 'Button Text','fl-builder' ),
                'type' => 'text',
                'default' => __( 'Go to profile','fl-builder' )
              )
            )
          )
        )
      ),
      'style-tab' => array(
        'title' => __( 'Style','fl-builder' ),
        'sections' => array(
          'name-style-section' => array(
            'title' => __( 'Name','fl-builder' ),
            'fields' => array(
              'name_margin' => array(
                'type' => 'text',
                'label' => __( 'Margin' ,'fl-builder' ),
                'default' => '0 0 10px'
              ),
              'name_color' => array(
                'type' => 'color',
                'label' => __( 'Text Color','fl-builder' ),
                'default' => "000",
                'show_reset' => true,
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.user-name',
                  'property' => 'color'
                )
              )
            )
          ),
          'border-section' => array(
            'title' => __( 'Border','fl-builder' ),
            'fields' => array(
              'border_type' => array(
                'type' => 'select',
                'label' => __( 'Border Type','fl-builder' ),
                'options' => array(
                  'none' => __( 'None','fl-builder' ),
                  'solid' => __( 'Solid','fl-builder' ),
                  'dotted' => __( 'Dotted','fl-builder' ),
                  'dashed' => __( 'Dashed' ,'fl-builder' )
                ),
                'default' => 'none'
              ),
              'border_color' => array(
                'type' => 'color',
                'show_reset' => true,
                'default' => 'ededed',
                'label' => __( 'Border Color','fl-builder' )
              ),
              'border_width' => array(
                'type' => 'text',
                'label' => __( 'Border Width','fl-builder' ),
                'default' => '1px'
              ),
            )
          ),
          'content-style-section' => array(
            'title' => __( 'Content','fl-builder' ),
            'fields' => array(
              'content_padding' => array(
                'type' => 'text',
                'label' => __( 'Content Padding','fl-builder' ),
                'default' => '10px 10px 10px 10px'
              ),
              'content_text_alignment' => array(
                'type' => 'select',
                'label' => __( 'Text Alignment','fl-builder' ),
                'options' => array(
                  'left' => __( 'Left','fl-builder' ),
                  'right' => __( 'Right','fl-builder' ),
                  'center' => __( 'Center','fl-builder' )
                )
              ),
              'content_margins' => array(
                'type' => 'text',
                'label' => __( 'Margins','fl-builder' ),
                'default' => '0px'
              )
            )
          ),
          'box-styling-section' => array(
            'title' => __( 'Box Styling','fl-builder' ),
              'fields' => array(
                'text_align' => array(
                  'label' => __( 'Text Align','fl-builder' ),
                  'type' => 'select',
                  'options' => array(
                    'left' => __( 'Left','fl-builder' ),
                    'center' => __( 'Center','fl-builder' ),
                    'right' => __( 'Right','fl-builder' )
                  )
                ),
                'box_padding' => array(
                  'label' => __( 'Box Padding','fl-builder' ),
                  'type' => 'text',
                  'default' => '10px 10px'
                ),
                'background_color' => array(
                  'label' => __( 'Background Color','fl-builder' ),
                  'type' => 'color',
                  'default' => "fff",
                  'show_reset' => true,
                  'preview' => array(
                    'type' => 'css',
                    'selector' => '.user-box',
                    'property' => 'background-color'
                  )
                ),
                'background_hover_color' => array(
                  'label' => __( 'Background Hover Color','fl-builder' ),
                  'type' => 'color',
                  'default' => "edd",
                  'show_reset' => true
                ),
                'margins' => array(
                  'label' => __( 'Space between boxes','fl-builder' ),
                  'type' => 'text',
                  'default' => '0px 15px',
                )
              )
          ),


        'button-styling' => array(
          'title' => __( 'Button','fl-builder' ),
          'fields' => array(
            'button_paddings' => array(
              'type' => 'text',
              'default' => '10px 25px',
              'label' => __( 'Padding','fl-builder' )
            ),
            'button_margins' => array(
              'type' => 'text',
              'default' => '10px 0 5px',
              'label' => __( 'Margin','fl-builder' )
            ),
            'button_roundness' => array(
              'type' => 'text',
              'default' => '5px',
              'label' => __( 'Button Radius','fl-builder' )
            ),
            'button_background_color' => array(
              'type' => 'color',
              'default' => '333',
              'show_reset' => true,
              'label' => __( 'Background Color','fl-builder' ),
              'preview'=> array(
                'type' => 'css',
                'selector' => '.user-button',
                'property' => 'background-color'
              )
            ),
            'button_background_hover_color' => array(
              'type' => 'color',
              'default' => '444',
              'show_reset' => true,
              'label' => __( 'Background Hover Color','fl-builder' )
            ),
            'button_text_color' => array(
              'type' => 'color',
              'default' => 'fff',
              'show_reset' => true,
              'label' => __( 'Text Color','fl-builder' )
            ),
            'button_text_hover_color' => array(
              'type' => 'color',
              'default' => 'fefefe',
              'show_reset' => true,
              'label' => __( 'Text Hover Color','fl-builder' )
            ),
            'button_align' => array(
              'type' => 'select',
              'label' => 'Alignment',
              'options' => array(
                'left' => __( 'Left','fl-buidler' ),
                'right' => __( 'Right','fl-builder' ),
                'center' => __( 'Center','fl-builder' )
              ),
              'default' => 'left'
            )
          )
        ),
        ),
      ),
      'typo-tab' => array(
        'title' => __( 'Typography','fl-builder' ),
        'sections' => array(
          'name-typo-section' => array(
            'title' => __( 'Name' ),
            'fields' => array(
              'name_font_fam' => array(
                'type' =>   'font',
                'label' => __( 'Font','fl-builder' ),
                'default'       => array(
                    'family'        => 'Default'
                ),
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.user-name',
                  'property' =>'font-family'
                )
              ),
              'name_font_size' => array(
                'type' => 'text',
                'label' => __( 'Font Size','fl-builder' ),
                'default' => '22px'
              ),
              'name_text_line_height' => array(
                'type' => 'text',
                'label' => __( 'Line Height','fl-builder' ),
                'default' => '1'
              )
            )
          ),
          'content-typo-section' => array(
            'title' => __( 'Description','fl-builder' ),
            'fields' => array(
              'content_font_fam' => array(
                'type' =>   'font',
                'label' => __( 'Font','fl-builder' ),
                'default'       => array(
                    'family'        => 'Default'
                )
              ),
              'content_font_size' => array(
                'type' => 'text',
                'label' => __( 'Font Size','fl-builder' ),
                'default' => '16px'
              ),
              'content_text_line_height' => array(
                'type' => 'text',
                'label' => __( 'Line Height','fl-builder' )
              )
            )
          ),
          'button-typography' => array(
            'title' => __( 'Button','fl-builder' ),
            'fields' => array(
              'button_font_fam' => array(
                'type' =>   'font',
                'label' => __( 'Font','fl-builder' ),
                'default'       => array(
                    'family'        => 'Default'
                )
              ),
              'button_font_size' => array(
                'type' => 'text',
                'label' => __( 'Font Size','fl-builder' ),
                'default' => '16px'
              ),
              'button_text_line_height' => array(
                'type' => 'text',
                'label' => __( 'Line Height','fl-builder' )
              )
            )
          ),
          'pagination-typo-section' => array(
            'title' => __( 'Pagination','fl-builder' ),
            'fields' => array(
              'pagination_font_fam' => array(
                'type' => 'font',
                'default' => 'Default',
                'label' => __( 'Font','fl-builder' )
              ),
              'pagination_font_size' => array(
                'type' => 'text',
                'default' => '16px',
                'label' => __( 'Font size' )
              ),
              'pagination_line_height' => array(
                'type' => 'text',
                'default' => '1.3',
                'label' => __( 'Line Height','fl-builder' )
              )
            )
          )
        )
      ),
      'responsive-tab' => array(
        'title' => __( 'Responsive','fl-builder' ),
        'sections' => array(
          'med-resp-section' => array(
            'title' => __( 'Tablet','fl-builder' ),
            'fields' => array(
              'med_name_font_size' => array(
                'type' => 'text',
                'label' => __( 'Name Font Size','fl-builder' ),
                'default' => ''
              ),
              'med_name_line_height' => array(
                'type' => 'text',
                'label' => __( 'Name Line Height','fl-builder' ),
                'default' => ''
              ),
              'med_content_font_size' => array(
                'type' => 'text',
                'label' => __( 'Description Font Size','fl-builder' ),
                'default' => ''
              ),
              'med_content_line_height' => array(
                'type' => 'text',
                'label' => __( 'Description Line Height','fl-builder' ),
                'default' => ''
              ),
              'med_button_font_size' => array(
                'type' => 'text',
                'label' => __( 'Button Font Size','fl-builder' ),
                'default' => ''
              ),
              'med_button_alignment' => array(
                'type' => 'select',
                'label' => __( 'Button Alignment','fl-builder' ),
                'options' => array(
                  'left' => __( 'Left','fl-builder' ),
                  'right' => __( 'Right','fl-builder' ),
                  'center' => __( 'Center','fl-buidler' )
                ),
                'default' => 'center'
              ),
            )
          ),
          'sm-resp-section' => array(
            'title' => __( 'Phone','fl-builder' ),
            'fields' => array(
              'sm_name_font_size' => array(
                'type' => 'text',
                'label' => __( 'Name Font Size','fl-builder' ),
                'default' => ''
              ),
              'sm_name_line_height' => array(
                'type' => 'text',
                'label' => __( 'Name Line Height','fl-builder' ),
                'default' => ''
              ),
              'sm_content_font_size' => array(
                'type' => 'text',
                'label' => __( 'Description Font Size','fl-builder' ),
                'default' => ''
              ),
              'sm_content_line_height' => array(
                'type' => 'text',
                'label' => __( 'Description Line Height','fl-builder' ),
                'default' => ''
              ),
              'sm_button_font_size' => array(
                'type' => 'text',
                'label' => __( 'Button Font Size','fl-builder' ),
                'default' => ''
              ),
              'sm_button_alignment' => array(
                'type' => 'select',
                'label' => __( 'Button Alignment','fl-builder' ),
                'options' => array(
                  'left' => __( 'Left','fl-builder' ),
                  'right' => __( 'Right','fl-builder' ),
                  'center' => __( 'Center','fl-buidler' )
                ),
                'default' => 'center'
              ),
            )
          )
        )
      ),
      'pagination-tab' => array(
        'title' => __( 'Pagination','fl-builder' ),
        'sections' => array(
          'pagination-general-section' => array(
            'title' => __( 'General','fl-builder' ),
            'fields' => array(
              'pagination_position' => array(
                'type' => 'select',
                'label' => __( 'Position','fl-builder' ),
                'options' => array(
                  'top' => __( 'Top','fl-builder' ),
                  'bottom' => __( 'Bottom','fl-builder' ),
                  'both' => __( 'Top & Bottom','fl-builder' )
                ),
                'default' => 'bottom'
              ),
              'pagination_alignment' => array(
                'type' => 'select',
                'label' => __( 'Alignment','fl-builder' ),
                'options' => array(
                  'left' => __( 'Left','fl-builder' ),
                  'right' => __( 'Right','fl-builder' ),
                  'center' => __( 'Center','fl-builder' )
                ),
                'default' => 'left'
              ),
              'next_link_text' => array(
                'type' => 'text',
                'label' => __( 'Next page text','fl-builder' ),
                'default' => 'Next »'
              ),
              'prev_link_text' => array(
                'type' => 'text',
                'label' => __( 'Previous page text','fl-builder' ),
                'default' => '« Previous'
              )
            )
          ),
          'pagination-styling-section' => array(
            'title' => __( 'Style','fl-builder' ),
            'fields' => array(
              'pagination_active_page_bg_color' => array(
                'type' => 'color',
                'default' => 'fff',
                'show_reset' => true,
                'label' => __( 'Active page background color','fl-builder'),
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.page-numbers.current',
                  'property' => 'background-color'
                )
              ),
              'pagination_bg_color' => array(
                'type' => 'color',
                'default' => 'fff',
                'show_reset' => true,
                'label' => __( 'Background color','fl-builder'),
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.page-numbers',
                  'property' => 'background-color'
                )
              ),
              'pagination_bg_hover_color' => array(
                'type' => 'color',
                'default' => 'fff',
                'show_reset' => true,
                'label' => __( 'Background hover color','fl-builder')
              ),
              'pagination_active_page_text_color' => array(
                'type' => 'color',
                'default' => '333',
                'show_reset' => true,
                'label' => __( 'Active page text color','fl-builder'),
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.page-numbers.current',
                  'property' => 'color'
                )
              ),
              'pagination_text_color' => array(
                'type' => 'color',
                'default' => '333',
                'show_reset' => true,
                'label' => __( 'Page text color','fl-builder'),
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.page-numbers',
                  'property' => 'color'
                )
              ),
              'pagination_text_hover_color' => array(
                'type' => 'color',
                'default' => '444',
                'show_reset' => true,
                'label' => __( 'Page text hover color','fl-builder')
              ),
            )
          ),
          'pagination-border-styling-section' => array(
            'title' => __( 'Border','fl-builder' ),
            'fields' => array(
              'pagination_active_border_type' => array(
                'type' => 'select',
                'options' => array(
                  'none' => __( 'None','fl-builder' ),
                  'solid' => __( 'Solid','fl-builder' ),
                  'dotted' => __( 'Dotted','fl-builder' ),
                  'dashed' => __( 'Dashed','fl-builder' )
                ),
                'default' => 'none',
                'label' => __( 'Border Type','fl-builder' )
              ),
              'pagination_active_border_width' => array(
                'type' => 'text',
                'default' => '1px',
                'label' => __( 'Border Width','fl-builder' )
              ),
              'pagination_active_border_radius' => array(
                'type' => 'text',
                'default' => '4px',
                'label' => __( 'Border Roundness','fl-builder' )
              ),
              'pagination_active_border_color' => array(
                'type' => 'color',
                'default' => '333',
                'show_reset' => true,
                'label' => __( 'Border color','fl-builder'),
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.page-numbers',
                  'property' => 'border-color'
                )
              ),

              'pagination_border_type' => array(
                'type' => 'select',
                'options' => array(
                  'none' => __( 'None','fl-builder' ),
                  'solid' => __( 'Solid','fl-builder' ),
                  'dotted' => __( 'Dotted','fl-builder' ),
                  'dashed' => __( 'Dashed','fl-builder' )
                ),
                'default' => 'none',
                'label' => __( 'Border Type','fl-builder' )
              ),
              'pagination_border_width' => array(
                'type' => 'text',
                'default' => '1px',
                'label' => __( 'Border Width','fl-builder' )
              ),
              'pagination_border_radius' => array(
                'type' => 'text',
                'default' => '4px',
                'label' => __( 'Border Roundness','fl-builder' )
              ),
              'pagination_border_color' => array(
                'type' => 'color',
                'default' => '333',
                'show_reset' => true,
                'label' => __( 'Border color','fl-builder'),
                'preview' => array(
                  'type' => 'css',
                  'selector' => '.page-numbers',
                  'property' => 'border-color'
                )
              ),
            ),

          ),
          'pagination-margins-paddings-styling-section' => array(
            'title' => __( 'Margins & Paddings','fl-builder' ),
            'fields' => array(
              'pagination_margin' => array(
                'type' => 'text',
                'default' => '0px',
                'label' => __( 'Pagination Margins','fl-builder' )
              ),
              'pagination_padding' => array(
                'type' => 'text',
                'default' => '0px',
                'label' => __( 'Pagination Paddings','fl-builder' )
              ),
              'pagination_item_margin' => array(
                'type' => 'text',
                'default' => '0 5px',
                'label' => __( 'Pagination item margins','fl-builder' ),
                'description' => __( 'Margin of each pagination navigation item','fl-builder' )
              ),
              'pagination_item_padding' => array(
                'type' => 'text',
                'default' => '5px',
                'label' => __( 'Pagination item paddings','fl-buidler' ),
                'description' => __( 'Padding of each pagination navigation item','fl-builder' )
              )
            )
          )
        )
      )
    );
    return $settings;
  }
}
