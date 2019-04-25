<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="card" style="width: 50%;">
        <?php thachpham_thumbnail('thumbnail'); ?>
  <div class="card-body">
    <h5 class="card-title">     
            <?php thachpham_entry_header(); ?>
            <?php thachpham_entry_meta() ?>
        </h5>
    <p class="card-text">
                <?php thachpham_entry_content(); ?>
                <?php ( is_single() ? thachpham_entry_tag() : '' ); ?>      
        </p>
    
  </div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
                <?php thachpham_thumbnail('thumbnail'); ?>
        </div>
        <header class="entry-header">
                <?php thachpham_entry_header(); ?>
                <?php thachpham_entry_meta() ?>
        </header>
        <div class="entry-content">
                <?php thachpham_entry_content(); ?>
                <?php ( is_single() ? thachpham_entry_tag() : '' ); ?>          
        </div>
</article>