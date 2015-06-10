<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <?php
        $nid = 27;
        $node = node_load($nid);
        $nodeview = node_view($node);
        print drupal_render($nodeview);
        ?>
    </div>
    <div class="col-md-2"></div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <?php
        $nid = 28;
        $node = node_load($nid);
        $nodeview = node_view($node);
        print drupal_render($nodeview);
        ?>
    </div>
    <div class="col-md-2"></div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <?php
        $nid = 26;
        $node = node_load($nid);
        $nodeview = node_view($node);
        print drupal_render($nodeview);
        ?>
    </div>
    <div class="col-md-2"></div>
</div>
