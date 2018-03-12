<!-- TODO: Zorgen dat er geen lege periodes in de dropdown staan -->
<!-- TODO: Zorgen dat er geen lege tags in de dropdown staan -->

<div class="project-filter">

  <h4 class="project-filter__heading">Filter onderzoeksprojecten</h4>

  <div class="project-filter__button-holder">

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'debatcultuur') { ?>
      <a class="project-filter__button project-filter__button--active" href="?">Debatcultuur</a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--yellow" href="?thema=debatcultuur">Debatcultuur</a>
    <?php } ?>

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'bestuur-van-nederland') { ?>
      <a class="project-filter__button project-filter__button--active" href="?">Bestuur van Nederland</a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--orange" href="?thema=bestuur-van-nederland">Bestuur van Nederland</a>
    <?php } ?>

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'vernieuwing-editeren') { ?>
      <a class="project-filter__button project-filter__button--active" href="?">Vernieuwing editeren</a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--blue" href="?thema=vernieuwing-editeren">Vernieuwing editeren</a>
    <?php } ?>

    <?php if(isset($_GET['thema']) && $_GET['thema'] == 'circulation-of-impact') { ?>
      <a class="project-filter__button project-filter__button--active" href="?">Circulation of Impact</a>
    <?php } else { ?>
      <a class="project-filter__button project-filter__button--green" href="?thema=circulation-of-impact">Circulation of Impact</a>
    <?php } ?>

  </div>
  <!-- end .project-filter__button-holder -->

  <?php if(isset($_GET['thema'])) { ?>

    <?php
    $thema = get_term_by('slug', $_GET['thema'], 'thema');
    ?>

    <div class="project-filter__information">
      <?php the_field('thema_short_description', $thema); ?>
      <a href="<?= get_term_link($thema); ?>">Meer over dit thema</a>
    </div>
    <!-- end .project-filter__information -->

  <?php } ?>

  <div class="project-filter__select-holder">

    <?php
    $periods = get_terms(array(
      'taxonomy' => 'period',
      'hide_empty' => true,
    ));

    if(is_array($periods)) :
    ?>

      <div class="select-wrapper">

        <span></span>

        <select class="period">

          <?php if(isset($_GET['period'])) { ?>
            <option value="" disabled>Periode</option>
          <?php } else { ?>
            <option value="" selected disabled>Periode</option>
          <?php } ?>

          <?php foreach($periods as $period) : ?>

            <?php if(isset($_GET['period']) && $_GET['period'] == $period->slug) { ?>
              <option value="<?= $period->slug; ?>" selected><?= $period->name; ?></option>
            <?php } else { ?>
              <option value="<?= $period->slug; ?>"><?= $period->name; ?></option>
            <?php } ?>

          <?php endforeach; ?>

        </select>

      </div>
      <!-- end .select-wrapper -->

    <?php endif; ?>

    <?php
    $tags = get_terms(array(
      'taxonomy' => 'post_tag',
      'hide_empty' => true,
    ));

    if(is_array($tags)) :
    ?>

      <div class="select-wrapper">

        <span></span>

        <select class="tag">

          <?php if(isset($_GET['tag'])) { ?>
            <option value="" disabled>Tag</option>
          <?php } else { ?>
            <option value="" selected disabled>Tag</option>
          <?php } ?>

          <?php foreach($tags as $tag) : ?>

            <?php if(isset($_GET['tag']) && $_GET['tag'] == $tag->slug) { ?>
              <option value="<?= $tag->slug; ?>" selected><?= $tag->name; ?></option>
            <?php } else { ?>
              <option value="<?= $tag->slug; ?>"><?= $tag->name; ?></option>
            <?php } ?>

          <?php endforeach; ?>

        </select>

      </div>
      <!-- end .select-wrapper -->

    <?php endif; ?>

  </div>
  <!-- end .project-filter__select-holder -->

</div>
<!-- end .project-filter -->