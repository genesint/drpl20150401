<?php
# fetch carousel items
$query = new EntityFieldQuery();
$query
    ->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'carousel_item')
    ->propertyCondition('status', 1);
$rResult = $query->execute();
$nids = array_keys($rResult['node']);
# fetch marketing items
$query = new EntityFieldQuery();
$query
    ->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'marketing_snippet')
    ->propertyCondition('status', 1);
$rResult = $query->execute();
$nids_m = array_keys($rResult['node']);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        for ($i = 0; $i < count($nids); $i++) {
            if ($i == 0) {
                ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
            <?php
            } else {
                ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
            <?php
            }
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        for ($i = 0; $i < count($nids); $i++) {
            $node = node_load($nids[$i]);
            $carousel_image_url = str_replace("public://", "sites/default/files/", $node->field_carousel_image['und'][0]['uri']);
            if ($i == 0) {
                ?>
                <div class="item active">
                    <img src="<?php echo $carousel_image_url; ?>"
                         alt="First slide">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?php echo $node->title; ?></h1>

                            <p><?php echo $node->body['und'][0]['summary']; ?></p>

                            <p><a class="btn btn-lg btn-primary" href="node/<?php echo $node->nid; ?>"
                                  role="button"><?php echo $node->field_button_text['und'][0]['value']; ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                ?>
                <div class="item">
                    <img src="<?php echo $carousel_image_url; ?>"
                         alt="First slide">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?php echo $node->title; ?></h1>

                            <p><?php echo $node->body['und'][0]['summary']; ?></p>

                            <p><a class="btn btn-lg btn-primary" href="node/<?php echo $node->nid; ?>"
                                  role="button"><?php echo $node->field_button_text['und'][0]['value']; ?></a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">social links go here</div>
    <div class="col-lg-2"></div>
</div>
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">

        <?php
        for ($i = 0; $i < count($nids_m); $i++) {
            $node = node_load($nids_m[$i]);
            $marketing_image_url = str_replace("public://", "sites/default/files/", $node->field_marketing_image['und'][0]['uri']);
            ?>
            <div class="col-lg-4">
                <img class="img-circle"
                     src="<?php echo $marketing_image_url; ?>"
                     alt="Generic placeholder image" style="width: 140px; height: 140px;">

                <h2><?php echo $node->title; ?></h2>

                <p><?php echo $node->body['und'][0]['summary']; ?></p>

                <p><a class="btn btn-default" href="node/<?php echo $node->nid; ?>" role="button">View details »</a></p>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- /.row -->


    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>

        <p>© 2014 In-Touch Counseling Company .<a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>

</div>