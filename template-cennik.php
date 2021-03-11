<?php
/**
 * Template Name: Cennik
 */

use function App\Helper\filter_html_text;
use function \App\ACFExt\format_target_attr;

$fields = get_fields();
$naglowek = $fields['naglowek'];
$sekcja1 = $fields['sekcja1'];
?>

<div class="section section-top">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php if( ! empty( $naglowek['naglowek'])): ?>
          <h1><?php echo filter_html_text( $naglowek['naglowek']); ?></h1>
        <?php endif; ?>          
      </div>
      <div class="col-lg-8">
        <ul class="nav nav-pills nav-fill mb-4">
          <li class="nav-item">
              <a href="#" class="nav-link" data-toogle-plan="month"><?php _e( 'Plan miesięczny', 'sage' ); ?></a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active" data-toogle-plan="year"><?php _e( 'Plan roczny', 'sage' ); ?> 
              <?php if( ! empty( $naglowek['rabat_dla_planu_rocznego'])): ?>
                <span class="ml-1 badge badge-pill badge-light"><?php echo filter_html_text( $naglowek['rabat_dla_planu_rocznego']); ?></span>
              <?php endif; ?>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <?php $plany = get_field( 'plany', 'options'); ?>
    <?php if( ! empty( $plany)): ?>
    <div class="plans mt-4" data-plan-option="year">
          <div class="row justify-content-between">
            <?php foreach( $plany as $plan): ?>
              <div class="col-xl-5">
                <?php if( $plan['popularny']): ?>
                  <div class="plan plan-popular">
                    <span class="badge badge-pill"><?php _e( 'Popularny', 'sage' ); ?></span>
                <?php else: ?>
                  <div class="plan">
                <?php endif; ?>
                  <p class="plan-subtitle">
                    <?php echo filter_html_text( trim( $plan['nazwa'])); ?>
                  </p>

                  <div data-plan="month">
                    <div class="plan-price">
                      <p class="h2"><?php echo filter_html_text( trim( $plan['cena_miesiac']['cena'])); ?></p>
                      <?php if( ! empty( trim( $plan['cena_miesiac']['opis']))): ?>
                        <div class="price-info"><?php echo filter_html_text( $plan['cena_miesiac']['opis']); ?></div>
                      <?php endif; ?>
                    </div>
                  </div>

                  <div data-plan="year">
                    <div class="plan-price" data-plan="year">
                      <p class="h2"><?php echo filter_html_text( trim( $plan['cena_rok']['cena'])); ?></p>
                      <?php if( ! empty( trim( $plan['cena_rok']['opis']))): ?>
                        <div class="price-info"><?php echo filter_html_text( $plan['cena_rok']['opis']); ?></div>
                      <?php endif; ?>
                    </div>
                  </div>

                  <?php if( ! empty( $plan['przycisk'])): ?>
                    <a class="btn <?= ( $plan['popularny']) ? 'btn-primary' : 'btn-outline-black' ?> w-100 mb-2" href="<?php echo esc_url( $plan['przycisk']['url']); ?>"<?php echo format_target_attr( $plan['przycisk']['target']); ?>>
                      <?php echo filter_html_text( $plan['przycisk']['title']); ?>
                    </a>
                  <?php endif; ?>

                  <?php $lista = $plan['lista']; ?>
                  <?php if( ! empty( $lista)): ?>
                    <div class="plan-list">
                      <?php foreach( $lista as $elem): ?>
                      <div>
                        <div><?php include( get_theme_file_path( "/templates/partials/svg/check-icon.php" ) ); ?></div>
                        <div><?php echo esc_attr( $elem['tekst']); ?></div>

                        <?php $tooltip = filter_html_text( trim( $elem['tooltip'])); ?>
                        <?php if( ! empty( trim( $elem['tooltip']))): ?>
                          <div class="info">
                            <a href="#" data-toggle="tooltip" title="<?php echo $tooltip; ?>">
                              <?php include( get_theme_file_path( "/templates/partials/svg/info-icon.php" ) ); ?>
                            </a>
                          </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                  <?php endif; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
    </div>
    <?php endif; ?>

    <div class="box-cta mt-6">
      <div class="row align-items-center">
        <div class="offset-2 col-12 col-sm-14 offset-sm-1 offset-lg-1 col-lg-8">
          <?php if( ! empty( $sekcja1['naglowek1'])): ?>
            <p class="plan-subtitle"><?php echo filter_html_text( $sekcja1['naglowek1']); ?></p>
          <?php endif; ?>
          <?php if( ! empty( $sekcja1['naglowek2'])): ?>
            <h2 class="font-size-md"><?php echo filter_html_text( $sekcja1['naglowek2']); ?></h2>
          <?php endif; ?>
          <?php if( ! empty( $sekcja1['opis'])): ?>
            <p class="mb-0"><?php echo filter_html_text( $sekcja1['opis']); ?></p>
          <?php endif; ?>
        </div>
        <div class="mt-4 mt-lg-0 offset-2 col-12 col-sm-14 offset-sm-1 col-lg-5 offset-xl-2 col-xl-4">
          <?php if( ! empty( $sekcja1['przycisk1'])): ?>
            <a href="<?php echo esc_url( $sekcja1['przycisk1']['url']); ?>" class="btn btn-primary w-100"><?php echo filter_html_text( $sekcja1['przycisk1']['title']); ?></a>
          <?php endif; ?>
          <?php if( ! empty( $sekcja1['przycisk2'])): ?>
          <a href="<?php echo esc_url( $sekcja1['przycisk2']['url']); ?>" class="w-100 justify-content-center btn btn-link btn-more-sm"><?php echo filter_html_text( $sekcja1['przycisk2']['title']); ?>
            <div>
              <?php include( get_theme_file_path( "/templates/partials/svg/read-more.php" ) ); ?>
            </div>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>

  </div>
</div>

<?php $porownanie = get_field( 'porownanie_planow', 'options'); ?>
<?php $przyciski = get_field( 'porownanie_planow_przyciski', 'options'); ?>
<?php if( ! empty( $porownanie)): ?>
  <?php $naglowek = get_field( 'porownanie_planow_naglowek', 'options'); ?>
<div class="section section-overflow comprasion">
  <div class="container">
    <h2 class="mb-5"><?php echo filter_html_text( $naglowek); ?></h2>
    <div class="c-table">

      <div class="c-table-row">
        <div class="c-table-col-head">
          <div></div>
        </div>
        <div class="c-table-col-plans">
          <div class="c-table-row">
            <div class="c-table-col-plan">
              <div class="h3">Basic</div>
            </div>
            <div class="c-table-col-plan">
              <div class="h3">Pro</div>
            </div>
            <div class="c-table-col-plan">
              <div class="h3">Business</div>
            </div>
            <div class="c-table-col-plan">
              <div class="h3">Enterprise</div>
            </div>
          </div>
        </div>
      </div>

      <?php foreach( $porownanie as $row): ?>

        <?php if( $row['styl'] === 'naglowek'): ?>
          <div class="c-table-set-row"><?php echo filter_html_text( $row['funkcjonalnosc']); ?></div>
          <?php continue; ?>
        <?php endif; ?>
        
        <?php $wyjasnienie = filter_html_text( $row['wyjasnienie']); ?>

      <?php $class = ( $row['styl'] === 'wiersze') ? ' description-long ' : ' description-short '; ?>
      <div class="c-table-row c-table-body<?php echo esc_attr( $class); ?> last">
        <div class="c-table-col-head">
          <div><?php echo filter_html_text( $row['funkcjonalnosc']); ?>
            <?php if(!empty($wyjasnienie)) : ?>
            <div class="ml-auto" data-toggle="tooltip" title="<?=$wyjasnienie?>"><?php include( get_theme_file_path( "/templates/partials/svg/info-icon.php" ) ); ?></div>
            <?php endif; ?>
          </div>
        </div>

        <div class="c-table-col-plans">
          <div class="c-table-row">
            <div class="c-table-col-plan">
              <div>
                <div class="c-table-col-plan-head">
                  <div class="plan-name">Basic</div>
                  <?php if( ! $row['plan_basic']['ukryj_znaczek']): ?>
                    <?php if( $row['plan_basic']['dostepna']): ?>
                      <div class="marker true">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/check-icon.php" ) ); ?></div>
                      </div>
                    <?php else: ?>
                      <div class="marker false">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/false-icon.php" ) ); ?></div>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <?php if( !empty( trim( $row['plan_basic']['opis']))): ?>
                  <div class="c-table-col-plan-desc"><?php echo filter_html_text( $row['plan_basic']['opis']); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="c-table-col-plan">
              <div>
                <div class="c-table-col-plan-head">
                <div class="plan-name">Pro</div>
                  <?php if( ! $row['plan_pro']['ukryj_znaczek']): ?>
                    <?php if( $row['plan_pro']['dostepna']): ?>
                      <div class="marker true">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/check-icon.php" ) ); ?></div>
                      </div>
                    <?php else: ?>
                      <div class="marker false">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/false-icon.php" ) ); ?></div>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <?php if( !empty( trim( $row['plan_pro']['opis']))): ?>
                    <div class="c-table-col-plan-desc"><?php echo filter_html_text( $row['plan_pro']['opis']); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="c-table-col-plan">
              <div>
                <div class="c-table-col-plan-head">
                  <div class="plan-name">Business</div>
                  <?php if( ! $row['plan_business']['ukryj_znaczek']): ?>
                    <?php if( $row['plan_business']['dostepna']): ?>
                      <div class="marker true">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/check-icon.php" ) ); ?></div>
                      </div>
                    <?php else: ?>
                      <div class="marker false">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/false-icon.php" ) ); ?></div>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <?php if( !empty( trim( $row['plan_business']['opis']))): ?>
                  <div class="c-table-col-plan-desc"><?php echo filter_html_text( $row['plan_business']['opis']); ?></div>
                <?php endif; ?>
              </div>
            </div>
            <div class="c-table-col-plan">
              <div>
                <div class="c-table-col-plan-head">
                  <div class="plan-name">Enterprise</div>
                  <?php if( ! $row['plan_enterprise']['ukryj_znaczek']): ?>
                    <?php if( $row['plan_enterprise']['dostepna']): ?>
                      <div class="marker true">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/check-icon.php" ) ); ?></div>
                      </div>
                    <?php else: ?>
                      <div class="marker false">
                        <div class="marker-icon"><?php include( get_theme_file_path( "/templates/partials/svg/false-icon.php" ) ); ?></div>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <?php if( !empty( trim( $row['plan_enterprise']['opis']))): ?>
                      <div class="c-table-col-plan-desc"><?php echo filter_html_text( $row['plan_enterprise']['opis']); ?></div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>



      <div class="c-table-row actions mt-lg-6 last">
        <div class="c-table-col-head">
          <div>Wybierz plan dla siebie</div>
        </div>

        <div class="c-table-col-plans c-table-col-plans-action">
          <div class="c-table-row">

            <div class="c-table-col-plan">
              <?php $przycisk = $przyciski['plan_basic']['przycisk']; ?>
              <?php $wyrozniony = $przyciski['plan_basic']['wyrozniony']; ?>
              <?php if( ! empty( $przycisk)): ?>
                <div class="plan-name">Basic</div>
                <div>
                  <a href="<?php echo esc_url( $przycisk['url']); ?>" class="btn <?= $wyrozniony ? 'btn-primary' : 'btn-outline-black' ?>"<?php echo format_target_attr( $przycisk['target']); ?>>
                    <?php echo filter_html_text( $przycisk['title']); ?>
                  </a>
                </div>
              <?php endif; ?>
            </div>

            <div class="c-table-col-plan">
              <?php $przycisk = $przyciski['plan_pro']['przycisk']; ?>
              <?php $wyrozniony = $przyciski['plan_pro']['wyrozniony']; ?>
              <?php if( ! empty( $przycisk)): ?>
                <div class="plan-name">Pro</div>
                <div>
                  <a href="<?php echo esc_url( $przycisk['url']); ?>" class="btn <?= $wyrozniony ? 'btn-primary' : 'btn-outline-black' ?>"<?php echo format_target_attr( $przycisk['target']); ?>>
                    <?php echo filter_html_text( $przycisk['title']); ?>
                  </a>
                </div>
              <?php endif; ?>
            </div>

            <div class="c-table-col-plan">
              <?php $przycisk = $przyciski['plan_business']['przycisk']; ?>
              <?php $wyrozniony = $przyciski['plan_business']['wyrozniony']; ?>
              <?php if( ! empty( $przycisk)): ?>
                <div class="plan-name">Business</div>
                <div>
                  <a href="<?php echo esc_url( $przycisk['url']); ?>" class="btn <?= $wyrozniony ? 'btn-primary' : 'btn-outline-black' ?>"<?php echo format_target_attr( $przycisk['target']); ?>>
                    <?php echo filter_html_text( $przycisk['title']); ?>
                  </a>
                </div>
              <?php endif; ?>
            </div>

            <div class="c-table-col-plan">
              <?php $przycisk = $przyciski['plan_enterprise']['przycisk']; ?>
              <?php $wyrozniony = $przyciski['plan_enterprise']['wyrozniony']; ?>
              <?php if( ! empty( $przycisk)): ?>
                <div class="plan-name">Enterprise</div>
                <div>
                  <a href="<?php echo esc_url( $przycisk['url']); ?>" class="btn <?= $wyrozniony ? 'btn-primary' : 'btn-outline-black' ?>"<?php echo format_target_attr( $przycisk['target']); ?>>
                    <?php echo filter_html_text( $przycisk['title']); ?>
                  </a>
                </div>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php endif; ?>

  <div class="section section-bg section-bg-light-b">
    <div class="container">
      <?php include( get_theme_file_path( "/templates/partials/pomoc.php" ) ); ?>
    </div>
  </div>

<?php include( get_theme_file_path( "/templates/components/start-meeting.php" ) ); ?>
