<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3"><h2>About us</h2></div>
    <div class="col-md-6"></div>
    <div class="col-md-2"></div>
    </div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <?php
        global $base_url;
        $nid = 83;
        $node = node_load($nid);
        $uri = $base_url . "/sites/default/files/field/image/" . $node->field_image['und'][0]['filename'];
        ?>
        <img src="<?php echo $uri; ?>" width="100%"/>
    </div>
    <div class="col-md-6  itcc-body">
        <?php
        $nid = 81;
        $node = node_load($nid);
        $nodeview = node_view($node);
        print drupal_render($nodeview);
        ?>
        <?php
        $nid = 80;
        $node = node_load($nid);
        $nodeview = node_view($node);
        print drupal_render($nodeview);
        ?>

        <?php
        $nid = 82;
        $node = node_load($nid);
        $nodeview = node_view($node);
        print drupal_render($nodeview);
        ?>
    </div>
    <div class="col-md-2"></div>
</div>