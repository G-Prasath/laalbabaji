<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php require_once("./_templates/head.php") ?>

<body>

    <!--====================  header area ====================-->
    <?php require_once("./_templates/header.php") ?>
    <!--====================  End of header area  ====================-->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area--bg-two bg-overlay-black-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <h3 class="breadcrumb-title text-white">Gallery</h3>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Gallery</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div class="site-wrapper-reveal">
        <!-- ================ Image Gallery ==============  -->
        <div class="gallery-area section-space--pb_120 section-space--pt_90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center">
                            <h3 class="section-title center-style">Image Gallery</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $imgDir = "./assets/images/imgGallery";
                    foreach (scandir($imgDir) as $image): ?>
                        <?php if ($image != '.' && $image != '..'): ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <!-- Single Gallery Start  -->
                                <div class="single-gallery-wrap" style="width: 100%;">
                                    <a href="<?php echo "$imgDir/$image"; ?>" class="img-popup">
                                        <img src="<?php echo "$imgDir/$image"; ?>" class="img-fluid " alt="Gallery Image">
                                    </a>
                                </div><!-- Single Gallery End -->
                            </div>
                        <?php endif ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


        <!-- ======================= Vide Gallery ======================  -->
        <div class="gallery-area section-space--pb_120 section-space--pt_90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center">
                            <h3 class="section-title center-style">Video Gallery</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $videoLink = array("LKUj43gltvc", "2fRE5stuIqQ", "oRWu9x1MurU", "DVoeddPi74w", "SeXLZX-uXho", "q5X80E1EqhI", "9-dOLwsEfso", "nlQgwzC_aEM", "za5GhZoWC58", "E1xcOE7Qff8", "COzfa7Jzw00", "fWhLvTXn_4Q", "yZARG-zj9KQ", "ORJ2TtRsYsg", "zZrftx76-IM", "X1IWMCicWPQ");
                    foreach ($videoLink as $url): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div>
                                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $url; ?>"
                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- ======================= Audio Gallery ======================  -->

        <div class="about-video-area section-space--pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="section-title--two  center-style mb-0 mt-30">Audio Gallery</h3>
                        </div>
                    </div>
                </div>
                <div class="about-video-box justify-content-center">
                    <div class="col-lg-12 ml-auto mr-auto">
                        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/6m4pmtXw5vs"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!--========== Footer Area Start ==========-->
    <?php require_once('./_templates/footer.php') ?>
    <!--==========// Footer Area End ==========-->

    <!-- ================ JS Files =================  -->
    <?php require_once('./_templates/foot.php') ?>


</body>

</html>