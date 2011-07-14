<?php  
$list = Loader::helper('lists/states_provinces');
$stateOptions = $list->getStates();
?>

<h1>
    <span><?php  echo t('Address Vcard:') ?></span>
</h1>

<div>
    <?php  echo $form->label('name', t('Location Name'))?>
</div>
<?php  echo $form->text('name', $name, array('style'=>'width:290px'))?>
<br/>

<div>
    <?php  echo $form->label('address', t('Address'))?>
</div>
<?php  echo $form->text('address', $address, array('style'=>'width:290px'))?>
<br/>

<div>
    <?php  echo $form->label('address2', t('Address 2'))?>
</div>
<?php  echo $form->text('address2', $address2, array('style'=>'width:290px'))?>
<br/>

<div>
    <?php  echo $form->label('city', t('City'))?>
</div>
<?php  echo $form->text('city', $city, array('style'=>'width:290px'))?>
<br/>

<div>
    <?php  echo $form->label('state', t('State'))?>
</div>
<?php  echo $form->select('state', $stateOptions, $state, array('style'=>'width:100px'))?>
<br/>

<div>
    <?php  echo $form->label('zip', t('Zip'))?>
</div>
<?php  echo $form->text('zip', $zip, array('style'=>'width:290px'))?>
<br/>

<div>
    <?php  echo $form->label('phone', t('Phone'))?>
</div>
<?php  echo $form->text('phone', $phone, array('style'=>'width:290px'))?>
<br/>

<div>
    <?php  echo $form->label('website', t('Website'))?>
</div>
<?php  echo $form->text('website', $website, array('style'=>'width:290px'))?>
<br/>

<br class="clear">

