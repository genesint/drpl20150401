<?php
global $base_url;
$query = new EntityFieldQuery();
$query
    ->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'site_content')
    ->propertyCondition('status', 1);
$rResult = $query->execute();
$nids = array_keys($rResult['node']);
$default = 63;
$nid = empty($_GET['nid']) ? $default : $_GET['nid'];
?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3"><h2>Services</h2></div>
    <div class="col-md-6"></div>
    <div class="col-md-2"></div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <?php
        $query = new EntityFieldQuery();
        $query
            ->entityCondition('entity_type', 'node')
            ->entityCondition('bundle', 'site_content')
            ->propertyCondition('status', 1);
        $rResult = $query->execute();
        $nids = array_keys($rResult['node']);
        $list_size = count($nids);

        for ($i = 0; $i < $list_size; $i++) {
            $node = node_load($nids[$i]);
            print "<li><a href='services?skip=1&nid=" . $nids[$i] . "'>" . ucwords(strtolower($node->title)) . "</a></li>";
        }
        ?>
    </div>
    <div class="col-md-6  itcc-body">
        <h4>
            <?php
            $node = node_load($nid);
            print ucwords(strtolower($node->title));
            ?>
        </h4>
        <?php
        $node = node_load($nid);
        if (!empty($node->body)) {
            print $node->body['und']['0']['value'];
        } else {
            print "No content available";
        }
        ?>
    </div>
    <div class="col-md-2"></div>
</div>
