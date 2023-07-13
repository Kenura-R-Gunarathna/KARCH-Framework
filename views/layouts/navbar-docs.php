<header class="header fixed-top">
    <div class="branding docs-branding">
        <div class="container-fluid position-relative py-2">

            <div class="docs-logo-wrapper">
                <div class="site-logo">
                    <a class="navbar-brand" href="<?php route('/') ?>">
                        <img class="logo-icon me-2" src="<?php print(asset('images/favicon.png')) ?>" alt="<?php print(config('APP_NAME')) ?> Logo" width="50px">
                        <span class="logo-text"><?php print(config('APP_NAME')) ?> <!--span class="text-alt">Framework</span--></span>
                    </a>
                </div>
            </div>

            <div class="docs-top-utilities d-flex justify-content-end align-items-center">

                <!--div class="top-search-box d-none d-lg-flex">
                    <form class="search-form">
                        <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                        <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                    </form>
                </div-->

                <!-- social-list -->
                <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
                </ul>
                <a href="<?php print(config('GITHUB_REPO')) ?>" target="_blank" class="btn btn-primary d-none d-lg-flex">Download</a>
            </div>

        </div>
    </div>
</header>