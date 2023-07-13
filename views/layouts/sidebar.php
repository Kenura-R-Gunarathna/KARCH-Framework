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
                <a class="nav-link scrollto" href="<?php print(route('docs?page=introduction')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>
                    Introduction
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php print(route('docs?page=installation')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-arrow-down"></i></span>
                    Installation
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php print(route('docs?page=routes')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-box"></i></span>
                    Routes
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php print(route('docs?page=controllers')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-cogs"></i></span>
                    Controllers
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions')) ?>">
                    <span class="theme-icon-holder me-2">
                        <svg width="20px" viewBox="-5 0 54 54" fill="#1271ff" xmlns="http://www.w3.org/2000/svg">
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="invisible_box" data-name="invisible box">
                                    <rect width="48" height="48" fill="none" />
                                </g>
                                <g id="Q3_icons" data-name="Q3 icons">
                                    <g>
                                        <path d="M24,25.9a14.7,14.7,0,0,1,3.5-9.6,2,2,0,0,0-3-2.6A18.2,18.2,0,0,0,20,25.9a18.4,18.4,0,0,0,4.5,12.5A2.2,2.2,0,0,0,26,39a2.4,2.4,0,0,0,1.4-.5,2.2,2.2,0,0,0,.1-2.9A14.2,14.2,0,0,1,24,25.9Z" />
                                        <path d="M41.5,13.7a2,2,0,0,0-3,2.6A14.7,14.7,0,0,1,42,25.9a14.2,14.2,0,0,1-3.5,9.7,2.2,2.2,0,0,0,.1,2.9A2.4,2.4,0,0,0,40,39a2.2,2.2,0,0,0,1.5-.6A18.4,18.4,0,0,0,46,25.9,18.2,18.2,0,0,0,41.5,13.7Z" />
                                        <path d="M38.7,30.9,35.4,26l3.3-4.9a2,2,0,1,0-3.4-2.2L33,22.4l-2.3-3.5a2,2,0,1,0-3.4,2.2L30.6,26l-3.3,4.9a2.1,2.1,0,0,0,.6,2.8A2,2,0,0,0,29,34a2.1,2.1,0,0,0,1.7-.9L33,29.6l2.3,3.5A2.1,2.1,0,0,0,37,34a2,2,0,0,0,1.1-.3A2.1,2.1,0,0,0,38.7,30.9Z" />
                                        <path d="M18,15H15.8l.5-3.5A3.9,3.9,0,0,1,20.2,8H22a2,2,0,0,0,0-4H20.2a8.1,8.1,0,0,0-7.9,6.9L11.7,15H9a2,2,0,0,0,0,4h2.2L8.7,36.5A3.9,3.9,0,0,1,4.8,40H4a2,2,0,0,0,0,4h.8a8.1,8.1,0,0,0,7.9-6.9L15.2,19H18a2,2,0,0,0,0-4Z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    Special Functions
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#views')) ?>">Views</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#redirects')) ?>">Redirects</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#assets')) ?>">Assets</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#route')) ?>">Route</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#request')) ?>">Request</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#config')) ?>">Config</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#get')) ?>">Get</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#post')) ?>">Post</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#cookie')) ?>">Cookie</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#files')) ?>">Files</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=special-functions#session')) ?>">Session</a></li>

            <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-tablet-alt"></i></span>
                    Requests
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests#env-data')) ?>">ENV Data</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests#all-request')) ?>">All Request</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests#get-request')) ?>">GET Request</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests#post-request')) ?>">POST Request</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests#file-request')) ?>">File Request</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests#session-request')) ?>">Session Request</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=requests#cookie-request')) ?>">Cookie Request</a></li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php print(route('docs?page=database-queries')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-book-reader"></i></span>
                    Database Queries
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=database-queries#records-selection')) ?>">Records selection</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=database-queries#mass-records-insert')) ?>">Mass records insert</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=database-queries#single-record-insert')) ?>">Single record insert</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=database-queries#update-records')) ?>">Update records</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=database-queries#delete-records')) ?>">Delete records</a></li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php print(route('docs?page=migrations')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>
                    Migrations
                </a>
            </li>

            <li class="nav-item section-title mt-3">
                <a class="nav-link scrollto" href="<?php print(route('docs?page=error-handling')) ?>">
                    <span class="theme-icon-holder me-2"><i class="fas fa-lightbulb"></i></span>
                    Error Handling
                </a>
            </li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=error-handling#view-the-404-error')) ?>">View the 404 error</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=error-handling#view-the-405-error')) ?>">View the 405 error</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="<?php print(route('docs?page=error-handling#view-the-500-error')) ?>">View the 500 error</a></li>
        </ul>

    </nav><!--//docs-nav-->
</div><!--//docs-sidebar-->