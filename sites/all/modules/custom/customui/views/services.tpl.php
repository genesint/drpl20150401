<?php
$query = new EntityFieldQuery();
$query
    ->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'site_content')
    ->propertyCondition('status', 1);
$rResult = $query->execute();
$nids = array_keys($rResult['node']);
?>
<div class="row">
    <div class="col-md-2">
        <ul class="nav  nav-stacked">
            <?php
            for ($i = 0; $i < count($nids); $i++) {
                $node=node_load($nids[$i]);
                print "<li role='presentation'><a href='services?nid=".$nids[$i]."'>".$node->title."</a></li>";
            }
            ?>
        </ul>
    </div>
    <div class="col-md-10"></div>
</div>