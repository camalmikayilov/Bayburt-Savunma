<script src="assets/js/check.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', () => {
    checkSuccess();
});


function checkSuccess() {
    <?php
    if ($_GET['success'] == '1') {
        echo 'swal({
                        title: "' . $lang['formItem13'] . '",
                        icon: "success",
                        button: "' . $lang['alertClose'] . '",
                      });';
    }
    if ($_GET['error'] == '1') {
        echo 'swal("' . $lang['formItem11'] . '", "", "error");';
    }
    if ($_GET['error'] == '2') {
        echo 'swal("' . $lang['formItem9'] . '", "", "error");';
    }
    if ($_GET['error'] == '3') {
        echo 'swal("' . $lang['formItem10'] . '", "", "error");';
    }
    ?>
}
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
    .s-pb-xl-80>[class*=container] {
    padding-bottom: 50px;
}

.s-pt-xl-100>[class*=container] {
    padding-top: 50px;
}


.footer-text p{
    line-height: 2rem;
}
</style>


<footer class="page_footer  ds s-pt-60 s-pb-40 c-gutter-150       s-pt-xl-100 s-pb-xl-80    ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div id="mwt_bloginfo-6" class="widget widget_bloginfo baysav-footer-logo" style="padding-left: 4.3rem;"> <img
                                    src="./assets/images/baysav.png" alt="Logo">
                            </div>
                            <div id="custom_html-8" class="widget_text widget widget_custom_html">
                                <div class="textwidget custom-html-widget footer-text">
                                    <p><?= $lang['footerText'] ?></p>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div id="custom_html-5" class="widget_text widget widget_custom_html">
                                <h3 class="widget-title"><?= $lang['menuitem4'] ?></h3>
                                <div class="textwidget custom-html-widget">
                                    <div class="media side-icon-box">
                                        <div class="icon-styled color-main fs-14">
                                            <i class="fa fa-phone" aria-hidden="true" style="margin-top: 1rem;"></i>
                                        </div>
                                        <p x-ms-format-detection="none" class="media-body"> 0 (312) 219 44 20<span>0
                                                (312) 219 44 21</span></p>
                                    </div>
                                    <div class="media side-icon-box">
                                        <div class="icon-styled color-main fs-14">
                                            <i class="fa fa-envelope" aria-hidden="true" style="margin-top: 6px;"></i>
                                        </div>
                                        <p class="media-body">
                                            <a href="mailto:info@baysav.com">info@baysav.com </a>
                                        </p>
                                    </div>
                                    <div class="media side-icon-box">
                                        <div class="icon-styled color-main fs-14">
                                            <i class="fa fa-map-marker" aria-hidden="true" style="margin-top:5px;"></i>
                                        </div>
                                        <p class="media-body">Mustafa Kemal Mah. 2131. Cad. 32 Sitesi No: 32/8 <?= $lang['footChan'] ?> /
                                            ANKARA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div id="mwt_theme_posts-3" class="widget widget_popular_entries">
                                <h3 class="widget-title">Son Haberler</h3>
                                <ul id="recent_posts_64d96b392d468" class="list-unstyled">
                                    <li
                                        class="media post-7 post type-post status-publish format-standard has-post-thumbnail hentry category-news">
                                        <a href="https://webdesign-finder.com/arma/ready-for-a-safe-fun-driving/"
                                            class="media-left">
                                            <img width="150" height="150"
                                                src="https://webdesign-finder.com/arma/wp-content/uploads/2019/04/01-3-150x150.jpg"
                                                class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                                decoding="async" loading="lazy"
                                                srcset="https://webdesign-finder.com/arma/wp-content/uploads/2019/04/01-3-150x150.jpg 150w, https://webdesign-finder.com/arma/wp-content/uploads/2019/04/01-3-800x800.jpg 800w, https://webdesign-finder.com/arma/wp-content/uploads/2019/04/01-3-300x300.jpg 300w, https://webdesign-finder.com/arma/wp-content/uploads/2019/04/01-3-100x100.jpg 100w, https://webdesign-finder.com/arma/wp-content/uploads/2019/04/01-3-700x700.jpg 700w"
                                                sizes="(max-width: 150px) 100vw, 150px" /> </a>
                                        <div class="media-body">
                                            <h4 class="title"><a
                                                    href="https://webdesign-finder.com/arma/ready-for-a-safe-fun-driving/">Arma
                                                    recognized as a LinkedIn Top Company</a></h4>
                                            <p class="item-meta">
                                                <span class="widget-post-date">
                                                    October 13, 2022 </span>
                                            </p>
                                        </div>
                                    </li>
                                    <li
                                        class="media post-296 post type-post status-publish format-gallery hentry category-carousel category-uncategorized post_format-post-format-gallery">
                                        <div class="media-body">
                                            <h4 class="title"><a
                                                    href="https://webdesign-finder.com/arma/post-with-carousel/">Arma
                                                    funds robotics grants for 100 schools</a></h4>
                                            <p class="item-meta">
                                                <span class="widget-post-date">
                                                    September 6, 2022 </span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </footer>
            <section class="page_copyright  ds s-pt-10 s-pb-10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 text-center">
                            <p>
                                <span class="copyright-year">Copyright © 2023  <a href="https://www.butagrup.com.tr/"
                                    target="_blank">Buta Grup</a> All Rights Reserved.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            