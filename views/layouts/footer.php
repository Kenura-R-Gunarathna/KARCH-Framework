<footer class="footer">

    <div class="footer-bottom text-center py-5">

        <ul class="social-list list-unstyled pb-4 mb-0">

            <?php if (!empty(config("GITHUB_REPO"))) : ?>
                <li class="list-inline-item"><a href="<?php print(config("GITHUB_REPO")); ?>"><i class="fab fa-github fa-fw"></i></a></li>
            <?php endif ?>

            <?php if (!empty(config("TWITTER_URL"))) : ?>
                <li class="list-inline-item"><a href="<?php print(config("TWITTER_URL")); ?>"><i class="fab fa-twitter fa-fw"></i></a></li>
            <?php endif ?>

            <?php if (!empty(config("SLACK_URL"))) : ?>
                <li class="list-inline-item"><a href="<?php print(config("SLACK_URL")); ?>"><i class="fab fa-slack fa-fw"></i></a></li>
            <?php endif ?>

            <?php if (!empty(config("PATRION_URL"))) : ?>
                <li class="list-inline-item"><a href="<?php print(config("PATRION_URL")); ?>"><i class="fab fa-product-hunt fa-fw"></i></a></li>
            <?php endif ?>

            <?php if (!empty(config("FACEBOOK_URL"))) : ?>
                <li class="list-inline-item"><a href="<?php print(config("FACEBOOK_URL")); ?>"><i class="fab fa-facebook-f fa-fw"></i></a></li>
            <?php endif ?>

            <?php if (!empty(config("INSTAGRAM_URL"))) : ?>
                <li class="list-inline-item"><a href="<?php print(config("INSTAGRAM_URL")); ?>"><i class="fab fa-instagram fa-fw"></i></a></li>
            <?php endif ?>

        </ul><!--//social-list-->

        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for <a class="theme-link" href="<?php print(config('APP_AUTHOR_URL')) ?>" target="_blank"><?php print(config('APP_AUTHOR')) ?></a></small>

    </div>

</footer>