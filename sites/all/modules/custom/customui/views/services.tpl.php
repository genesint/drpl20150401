<?php
$query = new EntityFieldQuery();
$query
    ->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'site_content')
    ->propertyCondition('status', 1);
$rResult = $query->execute();
$nids = array_keys($rResult['node']);
$default=63;
$nid = empty($_GET['nid']) ? $default : $_GET['nid'];
?>
<form class="form-horizontal">
    <div class="form-group">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <select id="itcc-services" class="form-control" onchange="load();">
                <?php
                for ($i = 0; $i < count($nids); $i++) {
                    $node = node_load($nids[$i]);
                    if ($nid == $nids[$i]) {
                        print "<option value='" . $nids[$i] . "' selected='selected'>" . $node->title . "</option>";
                    } else {
                        print "<option value='" . $nids[$i] . "'>" . $node->title . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-2"></div>
    </div>
</form>


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-9  itcc-body">
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
<script>
    function load() {
        var nid = jQuery("#itcc-services").val();
        window.location.href = "services?nid=" + nid;
    }
</script>