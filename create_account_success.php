<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_CREATE_ACCOUNT_SUCCESS);

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_CREATE_ACCOUNT_SUCCESS, '', 'SSL'));

  if (sizeof($navigation->snapshot) > 0) {
    $origin_href = tep_href_link($navigation->snapshot['page'], tep_array_to_string($navigation->snapshot['get'], array(tep_session_name())), $navigation->snapshot['mode']);
    $navigation->clear_snapshot();
  } else {
    $origin_href = tep_href_link(FILENAME_DEFAULT);
  }

  require(DIR_WS_INCLUDES . 'template_top.php');
?>
<div class="row">
  <div class="col-md-9">
    <h1><?php echo HEADING_TITLE; ?></h1>

    <div class="contentContainer">
      <div class="contentText">
        <?php echo TEXT_ACCOUNT_CREATED; ?>
      </div>

      <div class="buttonSet">
        <p><a href="<?php echo tep_href_link($origin_href, '', 'SSL');?>" class="btn btn-default btn-lg"><?php echo IMAGE_BUTTON_CONTINUE; ?></a></p>
      </div>
    </div>
  </div>
<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
