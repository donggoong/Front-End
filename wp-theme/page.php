<?php include 'sub-header.php' ?>
<!--페이지 제목 출력-->
<h2 class="sub-title"><?php the_title(); ?></h2>

<!--페이지 출력 시작-->
<section class="page-section">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <!--페이지 본문 출력-->
    <?php the_content(); ?>
    <?php endwhile;else : ?>
    <!--페이지가 없을 경우 출력될 내용-->
  <?php endif; ?>
</section>
<!--페이지 출력 끝-->
<?php include 'sub-footer.php' ?>