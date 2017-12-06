<?php
  $paged = get_query_var('paged');
  $users = get_users( array(
    'fields' => array( 'ID','user_email' ),
    'role' => 'subscriber',
    'number' => $settings->per_page,
    'offset' => $paged ? ($paged - 1) * $settings->per_page : 0
  ) );
  $global_settings = FLBuilderModel::get_global_settings();
  $total_users = count_users();
  $total_users = $total_users['avail_roles']['subscriber'];
  $number = $settings->per_page;
  $pl_args = array(
     'base'     => add_query_arg('paged','%#%'),
     'format'   => '',
     'total'    => ceil($total_users / $number),
     'current'  => max(1, $paged),
     'prev_text' => __( $settings->prev_link_text,'fl-builder' ),
     'next_text' => __( $settings->next_link_text,'fl-builder' )
  );
?>
<?php if( 'yes' == $settings->show_pagination && 'top' == $settings->pagination_position || 'both' == $settings->pagination_position ): ?>
<div class="users-pagination">
  <?php
  if($total_users > $number){
    // for ".../page/n"
    if($GLOBALS['wp_rewrite']->using_permalinks())
      $pl_args['base'] = user_trailingslashit(trailingslashit(get_pagenum_link(1)).'page/%#%/', 'paged');

    echo paginate_links($pl_args);
    }
  ?>
</div>
<?php endif; ?>
<ul class="users-list">
  <?php
    foreach( $users as $user ):
    $user_meta = get_user_meta( $user->ID );
  ?>
    <li class="user-box">
      <?php if( 'box' == $settings->link_type ): ?>
          <a href="<?php echo trailingslashit( get_site_url() ) . 'profile/?email=' . $user->user_email ; ?>" title="Go to profile">
      <?php endif; ?>
      <figure class="user-avatar">
        <?php echo get_wp_user_avatar( $user->ID,'medium' ); ?>
      </figure>
      <<?php echo $settings->name_tag; ?> class="user-name"><?php echo $user_meta[ 'first_name' ][0] . ' ' . $user_meta[ 'last_name' ][0]; ?></<?php echo $settings->name_tag; ?>>
      <?php if( 'yes' == $settings->show_designation && '' != $user_meta['designation'][0] ): ?>
        <p class="user-designation">
          <?php echo __( $user_meta['designation'][0],'fl-builder' ); ?>
        </p>
      <?php endif; ?>
      <?php if( 'yes' == $settings->mem_content ): ?>
        <p class="user-desc">
          <?php echo wp_trim_words( apply_filters( 'the_content',$user_meta[ 'description' ][0] ), intval( $settings->trim_bio_count ) ); ?>
        </p>
      <?php endif; ?>
      <?php if( 'button' == $settings->link_type ): ?>
        <div class="user-button-wrapper <?php echo $settings->button_align; ?>">
          <a href="<?php echo trailingslashit( get_site_url() ) . 'profile/?email=' . $user->user_email ; ?>" title="go to profile" class="user-button">
            <span class="user-button-text"><?php echo $settings->button_text; ?></span>
          </a>
        </div>
      <?php endif; ?>
      <?php if( 'box' == $settings->link_type ): ?>
          </a>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
</ul>
<?php if( 'yes' == $settings->show_pagination && 'bottom' == $settings->pagination_position || 'both' == $settings->pagination_position ): ?>
<div class="users-pagination">
  <?php
  if($total_users > $number){
    // for ".../page/n"
    if($GLOBALS['wp_rewrite']->using_permalinks())
      $pl_args['base'] = user_trailingslashit(trailingslashit(get_pagenum_link(1)).'page/%#%/', 'paged');

    echo paginate_links($pl_args);
    }
  ?>
</div>
<?php endif; ?>
