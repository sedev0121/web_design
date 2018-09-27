<?php

define('PROJECT_DIRECTORY', dirname(__FILE__));
define('BASE_DIRECTORY', PROJECT_DIRECTORY );

require 'common/php/head.php';

// CHANGE ME !
$ID = 'kr_test_template_927';

KrConfig::init([
  'client' => 'maje',
  'page_type' => 'landing',
]);

// SET THIS VARIABLE TO 'TRUE' TO BUST THE CACHE OF SCSS FILES
$BUST_CACHE_FOR_SCSS = false;

// IN CASE YOU NEED TO CHANGE PATH TO IMAGES
// if(PROD()) $PATH_TO_IMAGES = 'LP/' . ID() . '/images/';

// ADD HERE YOUR CUSTOM JS FILES TO INCLUDE (relative paths)
$SCRIPTS[] = 'src/javascripts/script.js';

// ADD HERE YOUR CUSTOM CSS FILES TO INCLUDE (relative paths)
$STYLES[] = 'src/styles/_bootstrap-custom.scss';
$STYLES[] = 'common/styles/global.scss';
$STYLES[] = 'common/styles/global_' . KrConfig::$CLIENT . '.scss';
// $STYLES[] = 'common/styles/mobile_full_width.scss';
$STYLES[] = 'src/styles/style.scss';

load_words(
  'URL',
  '', // URL TO 'URL' CSV GOES HERE
  'data/_urls.php'
  );
load_words(
  'TXT',
  'https://docs.google.com/spreadsheets/d/e/2PACX-1vSw04z2SDch1u1J9C9Wmyr8uTlBmJvYUsHhQpZCi8_obpLJNG5g7nWRpKb6zx-OB9aIv56IZZkX6Sy0/pub?gid=0&single=true&output=csv', // URL TO 'TXT' CSV GOES HERE
  'data/_words.php'
  );
load_products(
  '', // URL TO 'PRODUCTS' CSV GOES HERE
  'data/_products.php'
  );

require 'common/php/header.php';

require 'src/templates.php';
?>

<div class="kr_content_wrapper" id="<?= ID() ?>" data-lang="<?= LANG() ?>" data-lang-short="<?= SHORT_LANG() ?>">
  <div class="container">

    <!-- YOUR HTML CODE GOES HERE -->
    <h1><?=word('TXT_TITLE') ?></h1>
    <p><?=word('TXT_TEXT_1') ?></p>

    <?php // require 'common/php/button_top.php'; ?>
  </div>
</div>

<?php require 'common/php/footer.php';
