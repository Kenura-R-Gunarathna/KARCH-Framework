<div id="docs-sidebar" class="docs-sidebar">
    <div class="top-search-box d-lg-none p-3">
        <form class="search-form">
            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <nav id="docs-nav" class="docs-nav navbar">
        <ul class="section-items list-unstyled nav flex-column pb-3">

            <li class="nav-item section-title">
                <a class="nav-link scrollto" href="<?php route('docs?page=introduction'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>
                    Introduction
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=installation'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-arrow-down"></i></span>
                    Installation
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=routes'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-box"></i></span>
                    Routes
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=controllers'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-cogs"></i></span>
                    Controllers
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=views-redirects-assets'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-tools"></i></span>
                    Views, Redirects, Assets
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=views-redirects-assets#views'); ?>">Views</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=views-redirects-assets#redirects'); ?>">Redirects</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=views-redirects-assets#assets'); ?>">Assets</a></li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=assets'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-laptop-code"></i></span>
                    Assets
                </a>
            </li>

            <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="<?php route('docs?page=requests'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-tablet-alt"></i></span>
                    Requests
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=requests#env-data'); ?>">ENV Data</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=requests#all-requests'); ?>">All Requests</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=requests#get-requests'); ?>">GET Requests</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=requests#post-requests'); ?>">POST Requests</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=requests#file-requests'); ?>">File Requests</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=requests#session-requests'); ?>">Session Requests</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=requests#cookie-requests'); ?>">Cookie Requests</a></li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=database-queries'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-book-reader"></i></span>
                    Database Queries
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="#records-selection">Records selection</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="#mass-records-insert">Mass records insert</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="#single-record-insert">Single record insert</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="#update-records">Update records</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="#delete-records">Delete records</a></li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=migrations'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>
                    Migrations
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php route('docs?page=error-handling'); ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>
                    Error Handling
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=error-handling#view-the-404-error'); ?>">View the 404 error</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=error-handling#view-the-405-error'); ?>">View the 405 error</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php route('docs?page=error-handling#view-the-500-error'); ?>">View the 500 error</a></li>
        </ul>

    </nav><!--//docs-nav-->
</div><!--//docs-sidebar-->