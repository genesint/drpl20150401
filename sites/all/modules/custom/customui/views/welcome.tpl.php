<?php
$query = new EntityFieldQuery();
$query
    ->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'site_content')
    ->propertyCondition('status', 1)
    ->fieldCondition('field_carousel', 'value', '0');
$rResult = $query->execute();
$nids = array_keys($rResult['node']);
?>
<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-9 itcc-carousel">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $count = 0;
                foreach ($nids as $nid) {
                    $node = node_load($nid);
                    if (empty($node->field_site_content_carousel_imag)) continue;
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $count; ?>"
                        class="<?php echo ($count == 0) ? "active" : ""; ?>"></li>
                    <?php
                    $count++;
                }
                ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php
                $count = 0;
                foreach ($nids as $nid) {
                    $node = node_load($nid);
                    if (empty($node->field_site_content_carousel_imag)) continue;
                    $img = $node->field_site_content_carousel_imag['und'][0]['uri'];
                    $img = str_replace('public://', 'sites/default/files/', $img)
                    ?>
                    <div class="item <?php echo ($count == 0) ? "active" : ""; ?>">
                        <img class=""
                             src="<?php echo $img; ?>"
                             alt="No image">

                        <div class="container">
                            <div class="carousel-caption">
                                <h1><?php echo ucwords(strtolower($node->title)); ?></h1>

                                <p><?php echo $node->body['und'][0]['summary']; ?></p>

                                <p><a class="btn btn-lg btn-primary" href="#"
                                      role="button"><?php echo $node->field_button_text['und'][0]['value']; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $count++;
                }
                ?>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-2">

    </div>
</div>

<div class="row">

    <?php
    $query = new EntityFieldQuery();
    $query
        ->entityCondition('entity_type', 'node')
        ->entityCondition('bundle', 'site_content')
        ->propertyCondition('status', 1);
    $rResult = $query->execute();
    $nids = array_keys($rResult['node']);
    $list_size = floor(count($nids) / 3);
    ?>

    <div class="col-md-1"></div>
    <div class="col-md-3 itcc-services-column">
        <ul class="itcc-services">
            <li><h4>Our Services</h4></li>
            <?php
            for ($i = 0; $i < $list_size; $i++) {
                $node = node_load($nids[$i]);
                print "<li><a href='services?skip=1&nid=" . $nids[$i] . "'>" . ucwords(strtolower($node->title)) . "</a></li>";
            }
            for ($i = 0; $i < count($nids) - 3 * $list_size; $i++) {
                print "<li>&nbsp;</li>";
            }
            ?>
        </ul>
    </div>

    <div class="col-md-3 itcc-services-column">
        <ul class="itcc-services">
            <li><h4>&nbsp;</h4></li>
            <?php
            for ($i = $list_size; $i < 2 * $list_size; $i++) {
                $node = node_load($nids[$i]);
                print "<li><a href='services?skip=1&nid=" . $nids[$i] . "'>" . ucwords(strtolower($node->title)) . "</a></li>";
            }
            for ($i = 0; $i < count($nids) - 3 * $list_size; $i++) {
                print "<li>&nbsp;</li>";
            }
            ?>
        </ul>
    </div>

    <div class="col-md-3 itcc-services-column">
        <ul class="itcc-services">
            <li><h4>&nbsp;</h4></li>
            <?php
            for ($i = 2 * $list_size; $i < count($nids); $i++) {
                $node = node_load($nids[$i]);
                print "<li><a href='services?skip=1&nid=" . $nids[$i] . "'>" . ucwords(strtolower($node->title)) . "</a></li>";
            }
            ?>
        </ul>
    </div>
    <div class="col-md-2"></div>
</div>

