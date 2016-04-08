<div class="entry-meta vcard">
  <div class="entry-author-avatar table-cell">
    <?php echo get_avatar( get_the_author_meta( 'ID' ), 48, null, null, array( 'class' => array( 'img-circle' ) ) ); ?>
  </div>
  <div class="table-cell">
    <p class="h4">
      <?php printf( get_the_author_link( get_the_author_meta( 'ID' ) ) ); ?>
    </p>
    <p class="posted-on">
      <?php printf( '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>' ); ?>
    </p>
  </div>
</div>
