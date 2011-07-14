<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
<article class="vcard block">
    <h4 class="fn">
        <a class="website" href="<?php  echo $website ?>">
            <span class="org"><?php  echo $name ?></span>
        </a>
    </h4>
    <p class="adr">
        <span class="street-address"><?php  echo $address ?></span>
        <br/>
        <?php  if ($address2 !="") : ?>
        <span class="extended-address"><?php  echo $address2 ?></span>
        <br/>
        <?php  endif; ?>
        <span class="locality"><?php  echo $city ?></span>, <span class="region"><?php  echo $state ?></span> &nbsp; <span class="postal-code"><?php  echo $zip ?></span>
    </p>
    <?php  if ($phone !="") : ?>
    <p class="tel">
        <?php  echo $phone ?>
    </p>
    <?php  endif; ?>
    <?php  if ($website !="") : ?>
    <p class="url">
        <a class="website" href="<?php  echo $website ?>" target="_blank"><?php  echo $website ?></a>
    </p>
    <?php  endif; ?>
    <a class="map" href="<?php  echo $controller->printGoogleMapUrl(); ?>" target="_blank">
        <?php  echo t('Map') ?>
    </a>
</article><!-- end vcard-->

