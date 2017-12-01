<?php
  $global_settings = FLBuilderModel::get_global_settings();
  $margins = explode( ' ', $settings->margins );
  if( 1 == count( $margins ) ){
    $side_margins = $margins[0];
  }elseif( 2 == count( $margins ) || 3 == count( $margins ) ){
    $side_margins = $margins[1];
  }elseif( 4 == count( $margins ) ){
    $left_margin = $margins[1];
    $right_margin = $margins[3];
  }
?>
.fl-node-<?php echo $id; ?> .users-list{
  <?php
    if( count( $margins ) < 4 ){
      ?>
        margin-left: -<?php echo $side_margins; ?>;
        margin-right: -<?php echo $side_margins; ?>;
      <?php
    }elseif( count( $margins ) == 4 ){
      ?>
        margin-left: -<?php echo $left_margin; ?>;
        margin-right: -<?php echo $right_margin; ?>;
      <?php
    }
  ?>

}
.fl-node-<?php echo $id; ?> .user-box{
  width: 100%;
  <?php if( 'none' != $settings->border_type ): ?>
    border: <?php echo $settings->border_width; ?> <?php echo $settings->border_type; ?> #<?php echo $settings->border_color; ?>;
  <?php endif; ?>
  padding: <?php echo $settings->box_padding; ?>;
  background-color: #<?php echo $settings->background_color; ?>;
  margin: <?php echo $settings->margins; ?>;
  -webkit-transition: background 0.2s linear;
    -o-transition: background 0.2s linear;
    transition: background 0.2s linear;
}
.fl-node-<?php echo $id; ?> .user-box:hover{
  background-color: #<?php echo $settings->background_hover_color; ?>;
}
.fl-node-<?php echo $id; ?> .user-name{
  text-align: <?php echo $settings->text_align; ?>;
  margin: <?php echo $settings->name_margin; ?>;
  <?php if( 'Default' != $settings->name_font_fam['family'] ): ?>
    font-family: <?php echo $settings->name_font_fam['family']; ?>;
  <?php endif; ?>
  <?php if( 'Default' != $settings->name_font_fam['weight'] ): ?>
    font-weight: <?php echo $settings->name_font_fam['weight']; ?>;
  <?php endif; ?>
  font-size: <?php echo ( $settings->sm_name_font_size == '' ) ? ( $settings->med_name_font_size == '' ) ? $settings->name_font_size : $settings->med_name_font_size : $settings->sm_name_font_size; ?>;
  line-height: <?php echo ( $settings->name_text_line_height == '' ) ? 1.3:$settings->name_text_line_height ; ?>;
  color: #<?php echo $settings->name_color; ?>;
}
.fl-node-<?php echo $id; ?> .user-button{
  background-color: #<?php echo $settings->button_background_color; ?>;
  font-size: <?php echo ( $settings->sm_button_font_size == '' ) ? ( $settings->med_button_font_size == '' ) ? $settings->button_font_size : $settings->med_button_font_size : $settings->sm_button_font_size; ?>;
  <?php if( 'Default' != $settings->button_font_fam['family'] ): ?>
    font-family: <?php echo $settings->button_font_fam['family']; ?>;
  <?php endif; ?>
  <?php if( 'Default' != $settings->button_font_fam['weight'] ): ?>
    font-weight: <?php echo $settings->button_font_fam['weight']; ?>;
  <?php endif; ?>
  line-height: <?php echo ( $settings->button_text_line_height == '' ) ? 1.5:$settings->button_text_line_height ; ?>;
  color: #<?php echo $settings->button_text_color; ?>;
  padding: <?php echo $settings->button_paddings; ?>;
  margin: <?php echo $settings->button_margins; ?>;
  border-radius: <?php echo $settings->button_roundness; ?>;
}
.fl-node-<?php echo $id; ?> .user-button:hover{
  background-color: #<?php echo $settings->button_background_hover_color; ?>;
  color: #<?php echo $settings->button_text_hover_color; ?>;
}
.fl-node-<?php echo $id; ?> .users-pagination{
  text-align: <?php echo $settings->pagination_alignment; ?>;
}
.fl-node-<?php echo $id; ?> .page-numbers{
  display: inline-block;
  text-decoration: none;
  padding: <?php echo $settings->pagination_item_padding; ?>;
  margin: <?php echo $settings->pagination_item_margin; ?>;
  background-color: #<?php echo $settings->pagination_bg_color; ?>;
  color: #<?php echo $settings->pagination_text_color; ?>;
  -webkit-transition: color 0.3s linear, background 0.3s ease-in;
-o-transition: color 0.3s linear, background 0.3s ease-in;
transition: color 0.3s linear, background 0.3s ease-in;
  border-type: <?php echo $settings->pagination_border_type; ?>;
  border-width: <?php echo $settings->pagination_border_width; ?>;
  border-color: <?php echo $settings->pagination_border_color; ?>;
  border-radius: <?php echo $settings->pagination_border_radius; ?>;
  <?php if( 'Default' != $settings->pagination_font_fam['family'] ): ?>
    font-family: <?php echo $settings->pagination_font_fam['family']; ?>;
  <?php endif; ?>
  <?php if( 'Default' != $settings->pagination_font_fam['weight'] ): ?>
    font-weight: <?php echo $settings->pagination_font_fam['weight']; ?>;
  <?php endif; ?>
  font-size: <?php echo $settings->pagination_font_size; ?>;
  line-height: <?php echo $settings->pagination_line_height; ?>;
}
.fl-node-<?php echo $id; ?> .page-numbers:hover{
  background-color: #<?php echo $settings->pagination_bg_hover_color; ?>;
  color: #<?php echo $settings->pagination_text_hover_color; ?>;
}
.fl-node-<?php echo $id; ?> .page-numbers.current{
  background-color: #<?php echo $settings->pagination_active_page_bg_color; ?>;
  color: #<?php echo $settings->pagination_active_page_text_color; ?>;
  border-type: <?php echo $settings->pagination_active_border_type; ?>;
  border-width: <?php echo $settings->pagination_active_border_width; ?>;
  border-color: <?php echo $settings->pagination_active_border_color; ?>;
  border-radius: <?php echo $settings->pagination_active_border_radius; ?>;
}

@media screen and (min-width:<?php echo $global_settings->responsive_breakpoint; ?>px){
  .fl-node-<?php echo $id; ?> .user-name{
    font-size: <?php echo ($settings->med_name_font_size == '' ) ? $settings->name_font_size : $settings->med_name_font_size ; ?>;
  }
  .fl-node-<?php echo $id; ?> .user-button{
    font-size: <?php echo ( $settings->med_button_font_size == '' ) ? $settings->button_font_size : $settings->med_button_font_size; ?>;
  }
  .fl-node-<?php echo $id; ?> .user-box{
    <?php if( count( $margins ) == 1 ): ?>
      width: <?php echo 100 / intval( $settings->column_count ); ?>%;
    <?php elseif( count( $margins ) < 4 && count( $margins ) > 1 ): ?>
      width: calc( <?php echo 100 / intval( $settings->column_count ); ?>% - ( <?php echo $side_margins; ?> * 2 ) );
    <?php endif; ?>
  }
}
@media screen and (min-width:<?php echo $global_settings->medium_breakpoint; ?>px){
  .fl-node-<?php echo $id; ?> .user-name{
    font-size: <?php echo $settings->name_font_size; ?>;
  }
  .fl-node-<?php echo $id; ?> .user-button{
    font-size: <?php echo $settings->button_font_size; ?>;
  }

}
