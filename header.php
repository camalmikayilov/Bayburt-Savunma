<style>
    .dropdown-menu{
        background-color: #16232c;
        padding: 5px;
    }

    .page_header .btn {
    padding: 10px 5px;
}

/* Dropdown */
.dropdown-toggle::after {
    color: #ffffff;
    margin-left: 0;
}

.dropdown-menu{
    min-width: 3rem;
}

.icon-box h5 {
    margin-top: 0px;
    margin-bottom: 12px;
}

.sf-menu a {
    padding: 5px 0;
}

@media screen and (min-width:1200px) {
            .mobileNavsCenter{
                display: flex!important;
    flex-direction: row!important;
    align-content: center!important;
    flex-wrap: nowrap!important;
            }

        }


</style>
<div class="header_absolute ds ">
    <header class="page_header ms justify-nav-end  ds   cover-background">
        <div class="container">
            <div class="row align-items-center mobileNavsCenter">
                <div class="col-xl-2 col-lg-3 col-md-4 col-4">
                    <a href="./index.php" rel="home" class="logo logo_image_and_text baysav-footer-logo">
                        <img src="./assets/images/baysav.png" alt="Arma">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-6 col-6 text-sm-center">
                    <div class="nav-wrap">
                        <!-- main nav start -->
                        <nav class="top-nav">
                            <ul id="menu-main-menu" class="sf-menu nav">
                                <li id="menu-item-2494" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2494">
                                    <a href="/"><?= $lang['menuitem1'] ?></a>
                                </li>
                                <li id="menu-item-2494" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2494">
                                    <a href="/hakkimizda"><?= $lang['menuitem2'] ?></a>
                                </li>
                                <li id="menu-item-1011" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1011">
                                    <a href="/faaliyet"><?= $lang['menuitem3'] ?></a>
                                </li>
                                <!-- <li id="menu-item-1185"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1185">
												<a title="" href="./hizmetler.html">Hizmetler</a>
											</li> -->
                                <li id="menu-item-1177" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1177">
                                    <a title="" href="/iletishim"><?= $lang['menuitem4'] ?></a>
                                </li>
                            </ul>
                            
                        </nav>
                    </div>
                </div>
                <div class="dropdown col-xl-2 col-lg-1 col-md-2 col-2">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <?=$language1?>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?=$language2?>
                                        </div>
                                    </div>
            </div>
        </div>
    </header>
</div>