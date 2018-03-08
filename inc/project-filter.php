<div class="project-filter">

  <h4 class="project-filter__heading">Filter onderzoeksprojecten</h4>

  <div class="project-filter__button-holder">
    <a class="project-filter__button project-filter__button--yellow" href="?thema=debatcultuur#content">Debatcultuur</a>
    <a class="project-filter__button project-filter__button--orange" href="?thema=bestuur-van-nederland#content">Bestuur van Nederland</a>
    <a class="project-filter__button project-filter__button--blue" href="?thema=vernieuwing-editeren#content">Vernieuwing editeren</a>
    <a class="project-filter__button project-filter__button--green" href="?thema=circulation-of-impact#content">Circulation of Impact</a>
  </div>
  <!-- end .project-filter__button-holder -->

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