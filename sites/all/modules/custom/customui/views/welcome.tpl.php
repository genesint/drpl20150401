<?php
$nid = 57;
$node = node_load($nid);
$img = $node->field_site_content_carousel_imag['und'][0]['uri'];
$img = str_replace('public://', 'sites/default/files/', $img)
?>
<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-9">
        <div class="jumbotron">
            <h1>Living In-Touch with Reality</h1>
            <p class="lead">When the family foundations break down and the parenting responsibilities fall apart, there can neither be hope for the next generation nor prosperity for a healthy society.</p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Learn more</a></p>
        </div>

    </div>
    <div class="col-md-2">

    </div>
</div>