<?php
$form["body"]['#access'] = 0;
$form['actions']["preview"]['#access'] = 0;
?>

<div class="row">
    <div class="col-md-9"><h2>Submit an inquiry</h2></div>
    <div class="col-md-3"></div>
</div>

<div class="row">
    <div class="col-md-4">
        <?php print drupal_render($form['field_phone']); ?>
    </div>
    <div class="col-md-8"></div>
</div>


<div class="row">
    <div class="col-md-4">
        <?php print drupal_render($form['field_e_mail']); ?>
    </div>
    <div class="col-md-8"> </div>
</div>

<div class="row">
    <div class="col-md-6">
        <?php print drupal_render_children($form); ?>
    </div>
    <div class="col-md-6"></div>
</div>