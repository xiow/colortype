<article id="post-<?php the_ID() ?>" <?php post_class() ?>>
  <header class="entry-header">
    <div class="date"><div class="day"><?php the_time('j') ?></div><div class="month"><?php the_time('M') ?></div></div>
    <h2 class="title"><?php the_title() ?></h2>
    <div class="meta">
      Posted in <?php the_category(', ') ?>
      <?php if ( comments_open() && ! post_password_required() ) : ?>
        <a href="<?php comments_link(); ?>"><span class="comment-num"><?php comments_number('0', '1', '%'); ?></span>
      <?php endif; ?>
      </a>

    </div>
  </header>
  <section class="body">
    <?php the_excerpt(); ?>
  </section>
  <footer>
    <div class="tags"><?php the_tags('', '', '') ?><div style="clear: both"></div></div>
    <?php if ( comments_open() ) : ?>
      <?php comments_template(); ?>
    <?php endif; // End if comments_open() ?>
  </footer>
</article>
