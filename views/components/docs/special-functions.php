<article class="docs-article">

    <header class="docs-header">

        <h1 class="docs-heading">Special Functions <span class="docs-time">Last updated: <?php config('LAST_UPDATED'); ?></span></h1>

        <p>Using special functions you can control views, redirects and assets in below mentioned methods.</p>

    </header>

    <section class="docs-section" id="views">

        <h2 class="section-heading">Views</h2>

        <p>To view a html or php file. All the view file locations are given relative to the <code>Views</code> folder.</p>

        <p>eg:- <code>/index.html</code> or <code>index.html</code> ( for a file as <code>index.html</code> inside the views folder )</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/3d24a185247b4d00ad51bd9eb34934fe.js"></script>

    </section>

    <section class="docs-section" id="redirects">

        <h2 class="section-heading">Redirects</h2>

        <p>To redirect a web page insert</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/9d4cbccfefe5d4a7ef5506ab529f9b62.js"></script>

        <p>here you should insert the full url of the web page.</p>

    </section>

    <section class="docs-section" id="assets">

        <h2 class="section-heading">Assets</h2>

        <p>To load the assets like images, documents and videos for public view insert</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/8014a807841072c24d751db8d741249f.js"></script>

        <p>here you should insert the relative url of the files inside the <code>public</code> folder skiping <code>../public/</code> part of the relative url.</p>

    </section>

    <section class="docs-section" id="route">

        <h2 class="section-heading">Route</h2>

        <p>Return the <code>url</code> of a specific <code>route</code> in the website.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/570869aea642ad1ff5f3944183222c8a.js"></script>

    </section>

    <section class="docs-section" id="request">

        <h2 class="section-heading">Request</h2>

        <p>Return the <code>$_REQUEST</code> values of the website.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/2e9e5da4cd30326b8e9b8f174907e4ad.js"></script>

    </section>

    <section class="docs-section" id="config">

        <h2 class="section-heading">Config</h2>

        <p>Return the <code>$_ENV</code> values of the website inside the <code>.env</code> file.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/0818cf7ea41fbf0e59f80778a4db3f1f.js"></script>

    </section>

    <section class="docs-section" id="get">

        <h2 class="section-heading">Get</h2>

        <p>Return the <code>$_GET</code> request values of the website.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/ad4e23bd9129936aaa3ce1cbfea9f44d.js"></script>

    </section>

    <section class="docs-section" id="post">

        <h2 class="section-heading">Post</h2>

        <p>Return the <code>$_POST</code> request values of the website.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/a05d4cfa98e3ad6e4129ccbecfc7f715.js"></script>

    </section>

    <section class="docs-section" id="cookie">

        <h2 class="section-heading">Cookie</h2>

        <p>Return the <code>$_COOKIE</code> values of the website.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/8d3f5ac6f35b2db251eee4e428d170ee.js"></script>

    </section>

    <section class="docs-section" id="files">

        <h2 class="section-heading">Files</h2>

        <p>Return the <code>$_FILES</code> values of the website.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/a8baeeb1d79c0f6b52dc8f08e143db1b.js"></script>

    </section>

    <section class="docs-section" id="session">

        <h2 class="section-heading">Session</h2>

        <p>Return the <code>$_SESSION</code> values of the website stored in the web server.</p>

        <script src="https://gist.github.com/Kenura-R-Gunarathna/5983387fbea43f70b315fa8d3a340e43.js"></script>

    </section>

</article>