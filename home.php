<?php
/**
 *  The default home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

 get_header();

?>

<div class="hero-section loading">

<div class="loading-indicator">
    <img src="<?= get_template_directory_uri(); ?>/assets/images/svg/branding-symbol.svg" alt="Branding Loading">
</div>

<div class="upper-hero-grid">

    <div class="hero-details">
        <div class="heading-group">
            <span class="overline"></span>
            <h1 class="display-1"></h1>
            <p class="lead"></p>
            <a href="#" class="button outline black">Read Story</a>
        </div>
    </div>
    
    <div class="hero-preview">

        <div class="hero-preview-group group-1">

            <div class="main preview-circle-wrapper">
                <div class="preview-circle">
                    <div class="preview-wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/swim.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="secondary preview-circle-wrapper">
                <div class="preview-circle">
                    <div class="preview-wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/housing.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="tertiary preview-circle-wrapper">
                <div class="preview-circle">
                    <div class="preview-wrapper">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/panel.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="lower-hero-grid">
    <div class="preview-controller">
        <div class="hero-preview-controls">
            <ul>
                <li class="active" overline="Behold and Discover" heading="The New Sumisip" description="Standing tall and fat with white skin, this person has a harsh feel about them.
                    They have dark grey eyes and their closely shaved, frizzy, blonde hair has neat edging.
                    They usually wear immaculate, unique clothes that are form fitting."
                    href="www.facebook.com" mainPrev="./assets/images/featured/1.jpg"
                    secondaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/housing.jpg"
                    tertiaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/panel.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/swim.jpg" alt="Slide 1">
                </li>
                <li overline="Sumisip" heading="Wonders" description="Standing short and diminutive with caramel skin, this person has a suave feel about them.
                They have distrustful black eyes and their elbow-length, curly, dark brown hair is worn in a quiff.
                They usually wear retro clothes that are form fitting." href="www.google.com"
                    mainPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/wonder1.jpg" secondaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/wonder2.jpg"
                    tertiaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/wonder3.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/wonder1.jpg" alt="Slide 1">
                </li>
                <li overline="Sumisip" heading="Way of Life" description="Standing tall and gangly with golden-brown skin, this person has a boring feel about them.
                They have deep light brown eyes and their shoulder-length, thick, dark brown hair is wild.
                They usually wear unwashed, traditional clothes that are loose." href="www.upwork.com"
                    mainPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/wol1.jpg"
                    secondaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/wol3.jpg"
                    tertiaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/wol2.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/wol3.jpg" alt="Slide 1">
                </li>
                <li overline="Sumisip" heading="Cuisines" description="athletically built with tan skin, this woman has an honourable feel about her.
                She has cold dark yellow eyes and her short, lank, pale grey hair is complicatedly styled.
                She usually wears plain clothes that are loose and flowing." href="www.slack.com"
                    mainPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/d1.jpg" secondaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/d2.jpg"
                    tertiaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/d3.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/d1.jpg" alt="Slide 1">
                </li>
                <li overline="Sumisip" heading="Craftsmanship" description="tall, and diminutive with tan skin, this person has a suspicious feel about them.
                They have expressive pale yellow eyes and their very short, curly, red hair is buzz cut.
                They usually wear perfectly pressed, sensible clothes that are loose and flowing."
                    href="www.microsoft.com" mainPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/c1.jpg"
                    secondaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/c2.jpg"
                    tertiaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/c3.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/c2.jpg" alt="Slide 1">
                </li>
                <li overline="Sumisip" heading="History" description="heavily built with pink skin, this person has a stoic feel about them.
                They have deep dark grey eyes and their shoulder length, curly, red hair forms a large afro.
                They usually wear formal clothes that are poorly-fitting." href="www.apple.com"
                    mainPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/h1.jpg"
                    secondaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/h2.jpg"
                    tertiaryPrev="<?= get_template_directory_uri(); ?>/assets/images/hero/h3.jpg">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/hero/h1.jpg" alt="Slide 1">
                </li>

            </ul>
            <div class="indicators">
                <div class="prev-indicator"> <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="15.932" viewBox="0 0 16 15.932">
                        <defs>
                            <style>
                                .prev-indicator {
                                    fill: #484848;
                                }
                            </style>
                        </defs>
                        <path class="prev-indicator"
                            d="M.126,7.731l.253-.253a.429.429,0,0,1,.606,0l6.375,6.375V.429A.429.429,0,0,1,7.788,0h.357a.429.429,0,0,1,.429.429V13.853l6.375-6.375a.429.429,0,0,1,.606,0l.253.253a.429.429,0,0,1,0,.606L8.269,15.874a.429.429,0,0,1-.606,0L.126,8.337a.428.428,0,0,1,0-.606Z"
                            transform="translate(16) rotate(90)" />
                    </svg> Prev </div>
                <div class="number-indicator"> <span
                        id="hero-preview-number-indicator">1</span>/<span>6</span>
                </div>
                <div class="next-indicator">Next <svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="15.932" viewBox="0 0 16 15.932">
                        <defs>
                            <style>
                                .next-indicator {
                                    fill: #484848;
                                }
                            </style>
                        </defs>
                        <path class="next-indicator"
                            d="M.126,8.269l.252.253a.429.429,0,0,0,.606,0L7.359,2.147V15.571A.429.429,0,0,0,7.788,16h.357a.429.429,0,0,0,.429-.429V2.147l6.375,6.375a.429.429,0,0,0,.606,0l.252-.253a.429.429,0,0,0,0-.606L8.269.126a.429.429,0,0,0-.606,0L.126,7.663a.429.429,0,0,0,0,.606Z"
                            transform="translate(16) rotate(90)" />
                    </svg> </div>
            </div>
        </div>
    </div>
    <div class="hero-social">

    </div>
</div>

</div>

<section class="featured-section">
<div class="featured-video">

    <div class="preview">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path
                d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z" />
        </svg>
        <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/video-preview.png" alt="">
    </div>

    <video id="featured-video">
        <source src="<?= get_template_directory_uri(); ?>/assets/images/featured/video-1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

</div>
<div class="featured-articles-wrapper">

    <div class="featured-article">

        <div class="featured-article-gallery">
            <div class="fa-gallery-img active">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/1.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/2.jpg" alt="Article Image">
            </div>
        </div>

        <div class="featured-details">
            <h4>Featured Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos...
                <a href="#">Read More</a>
            </p>
        </div>

    </div>
    <div class="featured-article">

        <div class="featured-article-gallery">
            <div class="fa-gallery-img active">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/3.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/4.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/5.jpg" alt="Article Image">
            </div>
        </div>

        <div class="featured-details">
            <h4>Featured Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos...
                <a href="#">Read More</a>
            </p>
        </div>

    </div>
    <div class="featured-article">

        <div class="featured-article-gallery">
            <div class="fa-gallery-img active">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/6.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/7.jpg" alt="Article Image">
            </div>
        </div>

        <div class="featured-details">
            <h4>Featured Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos...
                <a href="#">Read More</a>
            </p>
        </div>

    </div>
    <div class="featured-article">

        <div class="featured-article-gallery">
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/8.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img active">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/9.jpg" alt="Article Image">
            </div>
        </div>

        <div class="featured-details">
            <h4>Featured Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos...
                <a href="#">Read More</a>
            </p>
        </div>

    </div>
    <div class="featured-article">

        <div class="featured-article-gallery">
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/10.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img active">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/11.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/12.jpg" alt="Article Image">
            </div>
        </div>

        <div class="featured-details">
            <h4>Featured Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos...
                <a href="#">Read More</a>
            </p>
        </div>

    </div>
    <div class="featured-article">

        <div class="featured-article-gallery">
            <div class="fa-gallery-img">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/13.jpg" alt="Article Image">
            </div>
            <div class="fa-gallery-img active">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/featured/14.jpg" alt="Article Image">
            </div>
        </div>

        <div class="featured-details">
            <h4>Featured Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos...
                <a href="#">Read More</a>
            </p>
        </div>
    </div>
</div>
</section>

<section class="history-section">
<div class="global-wrapper section-padding">
    <div class="display">
        <div class="display-preview">
            <div class="dp-photo active">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/1.jpg" alt="History">
            </div>
            <div class="dp-photo next">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/2.jpg" alt="History">
            </div>
            <div class="dp-photo">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/3.jpg" alt="History">
            </div>
            <div class="dp-photo">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/4.jpg" alt="History">
            </div>
            <div class="dp-photo">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/5.jpg" alt="History">
            </div>
            <div class="dp-photo">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/6.jpg" alt="History">
            </div>
        </div>
        <div class="display-details">

            <div class="heading-group">
                <span id="h-overline" class="overline">History</span>
                <h1 id="h-title">Gray Statues</h1>
            </div>

            <div class="paragraph-group">
                <p id="h-contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum consequatur,
                    vitae
                    molestiae quas
                    tenetur in accusantium repellat deserunt qui incidunt cupiditate corporis sit assumenda
                    consectetur. Exercitationem quod possimus unde neque!</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, architecto!</p>
            </div>

            <a id="h-link" href="#" class="button colored teal">Read Story</a>
        </div>
    </div>
    <div class="timeline">
        <div class="timeline-control-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="10.371" height="17.914"
                viewBox="0 0 10.371 17.914">
                <defs>
                    <style>
                        .a {
                            fill: none;
                            stroke: #0b928e;
                            stroke-miterlimit: 10;
                            stroke-width: 2px;
                        }
                    </style>
                </defs>
                <path class="a" d="M8.25,16.5,0,8.25,8.25,0" transform="translate(1.414 0.707)" />
            </svg>
        </div>
        <div class="timeline-body">
            <div class="timeline-block active" overline="History" title="Gray Statues" contents="Lorem20"
                link="https://www.facebook.com">
                <div class="indicator"> <span></span> </div>
                <span>1920</span>
            </div>
            <div class="timeline-block" overline="Dome" title="Museum and Ceiling" contents="Contents 2"
                link="https://www.google.com">
                <div class="indicator"> <span></span> </div>
                <span>1920</span>
            </div>
            <div class="timeline-block" overline="Places" title="Stonehenge" contents="Contens 3"
                link="https://www.facebook.com">
                <div class="indicator"> <span></span> </div>
                <span>1920</span>
            </div>
            <div class="timeline-block" overline="Rome" title="Coliseum Battle Arena" contents=""
                link="https://www.facebook.com">
                <div class="indicator"> <span></span> </div>
                <span>1920</span>
            </div>
            <div class="timeline-block" overline="Egypt" title="Sphinx and Dog" contents="Contents 5"
                link="https://www.facebook.com">
                <div class="indicator"> <span></span> </div>
                <span>1920</span>
            </div>
            <div class="timeline-block" overline="Taj Mahal" title="Floating Area" contents="Contents 6"
                link="https://www.facebook.com">
                <div class="indicator"> <span></span> </div>
                <span>1920</span>
            </div>
        </div>
        <div class="timeline-control-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="10.371" height="17.914"
                viewBox="0 0 10.371 17.914">
                <defs>
                    <style>
                        .a {
                            fill: none;
                            stroke: #0b928e;
                            stroke-miterlimit: 10;
                            stroke-width: 2px;
                        }
                    </style>
                </defs>
                <path class="a" d="M0,16.5,8.25,8.25,0,0" transform="translate(0.707 0.707)" />
            </svg>
        </div>
    </div>
</div>
</section>

<section class="programs-section bg-coal">
<div class="global-wrapper section-padding">
    <div class="section-heading-group">
        <h1>Sumisip Program</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page
            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.
        </p>
    </div>

    <div class="program-boxes">


        <div class="program-box bg-rosewood">

            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon" transform="translate(-1705 -2854)">
                        <rect id="Rectangle_499" data-name="Rectangle 499" width="64" height="64"
                            transform="translate(1705 2854)" fill="rgba(255,255,255,0)" />
                        <path id="fal_fa-heartbeat" data-name="fal fa-heartbeat"
                            d="M58.6,37.464a18.924,18.924,0,0,0-26.593-.012A18.683,18.683,0,0,0,18.716,32a18.689,18.689,0,0,0-13.3,5.464A17.434,17.434,0,0,0,4.226,61.471h15.1l3.738-8.817,7.114,15.522a2.015,2.015,0,0,0,3.613.074l6.214-12.206,2.763,5.428h17A17.448,17.448,0,0,0,58.6,37.464Zm-.775,20.077H45.246L41.8,50.763a2.014,2.014,0,0,0-3.576,0L32.106,62.785,24.83,46.908a2.019,2.019,0,0,0-3.676.049L16.666,57.542H6.189C5.038,55.749.863,47.386,8.477,40.019a14.7,14.7,0,0,1,10.239-4.089c4.238,0,6.814.774,13.29,7.036,6.876-6.656,9.314-7.036,13.29-7.036a14.647,14.647,0,0,1,10.227,4.089c7.626,7.38,3.438,15.743,2.3,17.523ZM33.594,82.519a2.026,2.026,0,0,1-2.8,0L13.615,65.4H8L27.993,85.318a6.058,6.058,0,0,0,8.414,0L56.011,65.4H50.447Z"
                            transform="translate(1705 2826)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="program-content">
                <h4>Health Program</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="#">Learn More</a>

        </div>

        <div class="program-box bg-honey">

            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon" transform="translate(-1705 -2854)">
                        <rect id="Rectangle_499" data-name="Rectangle 499" width="64" height="64"
                            transform="translate(1705 2854)" fill="rgba(255,255,255,0)" />
                        <path id="fal_fa-book-reader" data-name="fal fa-book-reader"
                            d="M57.489,24c-.087,0-.174,0-.257.006-6.225.355-17.564,1.625-25.23,5.946-7.666-4.321-19.006-5.591-25.23-5.946C6.688,24,6.6,24,6.514,24,3.964,24,0,25.8,0,30.278V52.534A6.322,6.322,0,0,0,6.043,58.8c4.3.226,15.07,1.135,22.125,4.684a4.727,4.727,0,0,0,1.833.48V64h.284c.011,0,.022,0,.033,0h3.368c.011,0,.022,0,.033,0H34v-.034a4.749,4.749,0,0,0,1.833-.48c7.055-3.549,17.824-4.456,22.125-4.684A6.323,6.323,0,0,0,64,52.534V30.278C64,25.8,60.036,24,57.489,24ZM30,59.919c-.011-.005-.022,0-.035-.009-7.449-3.746-18.054-4.806-23.712-5.1A2.325,2.325,0,0,1,4,52.534V30.278a1.871,1.871,0,0,1,.741-1.65A3.206,3.206,0,0,1,6.541,28c4.626.264,16.159,1.323,23.459,5.42v26.5Zm30-7.385a2.325,2.325,0,0,1-2.254,2.271c-5.659.3-16.264,1.357-23.72,5.109-.009.005-.018,0-.028.006v-26.5c7.3-4.1,18.833-5.156,23.439-5.419h.049c.025,0,2.511.061,2.511,2.276V52.534ZM32,24A12,12,0,1,0,20,12,12,12,0,0,0,32,24ZM32,4a8,8,0,1,1-8,8A8.009,8.009,0,0,1,32,4Z"
                            transform="translate(1705 2854)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="program-content">
                <h4>Educational Program</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="#">Learn More</a>

        </div>

        <div class="program-box bg-ocean">

            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="64" height="64" viewBox="0 0 64 64">
                    <defs>
                        <clipPath id="clip-path">
                            <rect width="64" height="46" fill="none" />
                        </clipPath>
                    </defs>
                    <g id="icon" transform="translate(-1705 -2854)">
                        <rect id="Rectangle_499" data-name="Rectangle 499" width="64" height="64"
                            transform="translate(1705 2854)" fill="rgba(255,255,255,0)" />
                        <g id="Repeat_Grid_1" data-name="Repeat Grid 1" transform="translate(1705 2863)"
                            clip-path="url(#clip-path)">
                            <g transform="translate(-1705 -2863)">
                                <path id="fal_fa-laptop-code" data-name="fal fa-laptop-code"
                                    d="M26.634,55.541l1.131-1.084a.745.745,0,0,0,0-1.084l-4.7-4.507,4.7-4.507a.745.745,0,0,0,0-1.084l-1.131-1.084a.825.825,0,0,0-1.131,0l-6.4,6.133a.745.745,0,0,0,0,1.084l6.4,6.133A.824.824,0,0,0,26.634,55.541Zm9.6-1.084,1.131,1.084a.825.825,0,0,0,1.131,0l6.4-6.133a.745.745,0,0,0,0-1.084l-6.4-6.133a.825.825,0,0,0-1.131,0l-1.131,1.084a.745.745,0,0,0,0,1.084l4.7,4.508-4.7,4.507a.744.744,0,0,0,0,1.084ZM62.4,64.2H57.6V38.133A6.278,6.278,0,0,0,51.2,32H12.8a6.278,6.278,0,0,0-6.4,6.133V64.2H1.6A1.567,1.567,0,0,0,0,65.733v4.6A7.847,7.847,0,0,0,8,78H56a7.847,7.847,0,0,0,8-7.667v-4.6A1.567,1.567,0,0,0,62.4,64.2ZM9.6,38.133a3.136,3.136,0,0,1,3.2-3.067H51.2a3.136,3.136,0,0,1,3.2,3.067V64.2H39.113a.828.828,0,0,0-.792.679A3.175,3.175,0,0,1,35.2,67.267H28.8a3.175,3.175,0,0,1-3.121-2.387.828.828,0,0,0-.792-.679H9.6Zm51.2,32.2a4.708,4.708,0,0,1-4.8,4.6H8a4.708,4.708,0,0,1-4.8-4.6V67.267H22.675A4.8,4.8,0,0,0,27.2,70.333h9.6a4.8,4.8,0,0,0,4.525-3.067H60.8Z"
                                    transform="translate(1705 2831)" fill="#fff" />
                            </g>
                        </g>
                    </g>
                </svg>

            </div>

            <div class="program-content">
                <h4>Web and App Program</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="#">Learn More</a>

        </div>

        <div class="program-box bg-plum">

            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon" transform="translate(-1708 -2857)">
                        <rect id="Rectangle_499" data-name="Rectangle 499" width="64" height="64"
                            transform="translate(1708 2857)" fill="rgba(255,255,255,0)" />
                        <path id="fal_fa-briefcase" data-name="fal fa-briefcase"
                            d="M58,43.786H44V34.946A2.973,2.973,0,0,0,41,32H23a2.973,2.973,0,0,0-3,2.946v8.839H6a5.947,5.947,0,0,0-6,5.893V81.107A5.947,5.947,0,0,0,6,87H58a5.947,5.947,0,0,0,6-5.893V49.679A5.947,5.947,0,0,0,58,43.786ZM24,35.929H40v7.857H24ZM60,81.107a1.985,1.985,0,0,1-2,1.964H6a1.985,1.985,0,0,1-2-1.964V63.429H24v4.911a2.974,2.974,0,0,0,3,2.946H37a2.974,2.974,0,0,0,3-2.946V63.429H60ZM28,67.357V63.429h8v3.929ZM60,59.5H4V49.679a1.985,1.985,0,0,1,2-1.964H58a1.985,1.985,0,0,1,2,1.964Z"
                            transform="translate(1708 2829)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="program-content">
                <h4>Career Program</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="#">Learn More</a>

        </div>

        <div class="program-box bg-teal">

            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64.001" viewBox="0 0 64 64.001">
                    <g id="icon" transform="translate(-1765 -2773)">
                        <rect id="Rectangle_499" data-name="Rectangle 499" width="64" height="64"
                            transform="translate(1765 2773)" fill="rgba(255,255,255,0)" />
                        <path id="fal_fa-wheat" data-name="fal fa-wheat"
                            d="M56.769,21.422a12.124,12.124,0,0,0-1.781-1.455,14.025,14.025,0,0,0,4.9-2.8c3.323-3.608,4.348-9.38,4.08-15.011A2.248,2.248,0,0,0,61.814.039C61.279.015,60.719,0,60.139,0c-4.289,0-9.624.8-13.221,4.144A13.077,13.077,0,0,0,43.985,8.89,11.919,11.919,0,0,0,42.65,7.256l-4.306-4.3a2,2,0,0,0-2.828,0L31.3,7.163a11.906,11.906,0,0,0-3.458,7.871l-.793-.791a2,2,0,0,0-2.828,0l-4.214,4.211a11.911,11.911,0,0,0-3.461,7.913l-.81-.81a2,2,0,0,0-2.828,0L8.7,29.768a12,12,0,0,0,0,16.975l2.87,2.869L.6,60.587a2,2,0,1,0,2.826,2.828L14.369,52.466l2.855,2.854a12,12,0,0,0,16.968,0L38.413,51.1a2,2,0,0,0,0-2.829l-.809-.809a11.908,11.908,0,0,0,7.9-3.458l4.221-4.219a2,2,0,0,0,0-2.829l-.791-.79A11.915,11.915,0,0,0,56.8,32.716L61.018,28.5a2,2,0,0,0,0-2.829l-4.249-4.246ZM49.64,7.074c2.7-2.508,7.1-3.06,10.37-3.074-.026,4.5-1.078,8.206-2.959,10.339-2.749,2.454-7.124,2.973-10.333,2.973h-.048c-.042-3.243.494-7.749,2.969-10.238ZM34.13,9.993l2.8-2.8,2.893,2.89A7.975,7.975,0,0,1,39.909,21.3c-.036.031-.083.042-.116.078l-2.8,2.8L34.13,21.308a8,8,0,0,1,0-11.315ZM22.839,21.284l2.8-2.8,2.893,2.891c1.7,1.7,4.219,6.651.244,11.02l-3.069,3.07L22.839,32.6a8,8,0,0,1,0-11.316ZM11.525,43.914a8,8,0,0,1,0-11.316l2.8-2.8,2.893,2.891a7.947,7.947,0,0,1,.219,11.05l-3.041,3.043-2.87-2.869Zm19.838,8.576a8,8,0,0,1-11.311,0L17.219,49.66l2.806-2.8a8,8,0,0,1,11.311,0l2.833,2.831-2.806,2.8ZM42.677,41.177a8,8,0,0,1-11.311,0l-2.833-2.831,2.806-2.8a8,8,0,0,1,11.311,0l2.833,2.831ZM53.968,29.885a8,8,0,0,1-11.311,0l-2.833-2.831,2.806-2.8a8,8,0,0,1,11.311,0l2.833,2.831-2.806,2.8Z"
                            transform="translate(1764.988 2773)" fill="#fff" />
                    </g>
                </svg>
            </div>

            <div class="program-content">
                <h4>Agricultural Program</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="#">Learn More</a>

        </div>

        <div class="program-box bg-iris">
            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon" transform="translate(-1733 -2821)">
                        <rect id="Rectangle_499" data-name="Rectangle 499" width="64" height="64"
                            transform="translate(1733 2821)" fill="rgba(255,255,255,0)" />
                        <path id="fal_fa-building" data-name="fal fa-building"
                            d="M23.412,13.286v4.967a1.477,1.477,0,0,1-1.463,1.49H17.071a1.477,1.477,0,0,1-1.463-1.49V13.286a1.477,1.477,0,0,1,1.463-1.49h4.877A1.477,1.477,0,0,1,23.412,13.286ZM37.556,11.8H32.679a1.477,1.477,0,0,0-1.463,1.49v4.967a1.477,1.477,0,0,0,1.463,1.49h4.877a1.477,1.477,0,0,0,1.463-1.49V13.286A1.477,1.477,0,0,0,37.556,11.8ZM21.948,23.716H17.071a1.477,1.477,0,0,0-1.463,1.49v4.967a1.477,1.477,0,0,0,1.463,1.49h4.877a1.477,1.477,0,0,0,1.463-1.49V25.206A1.477,1.477,0,0,0,21.948,23.716Zm15.608,0H32.679a1.477,1.477,0,0,0-1.463,1.49v4.967a1.477,1.477,0,0,0,1.463,1.49h4.877a1.477,1.477,0,0,0,1.463-1.49V25.206A1.477,1.477,0,0,0,37.556,23.716ZM21.948,35.636H17.071a1.477,1.477,0,0,0-1.463,1.49v4.967a1.477,1.477,0,0,0,1.463,1.49h4.877a1.477,1.477,0,0,0,1.463-1.49V37.126A1.477,1.477,0,0,0,21.948,35.636Zm15.608,0H32.679a1.477,1.477,0,0,0-1.463,1.49v4.967a1.477,1.477,0,0,0,1.463,1.49h4.877a1.477,1.477,0,0,0,1.463-1.49V37.126A1.477,1.477,0,0,0,37.556,35.636ZM54.627,61.09v2.483H0V61.09A1.477,1.477,0,0,1,1.463,59.6H3.9V2.98A2.954,2.954,0,0,1,6.828,0H47.8a2.954,2.954,0,0,1,2.926,2.98V59.6h2.439A1.477,1.477,0,0,1,54.627,61.09Zm-7.8-1.49V3.973H7.8V59.6H23.412V49.046a1.477,1.477,0,0,1,1.463-1.49h4.877a1.477,1.477,0,0,1,1.463,1.49V59.6Z"
                            transform="translate(1738 2821)" fill="#fff" />
                    </g>
                </svg>
            </div>
            <div class="program-content">
                <h4>Business Program</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="#">Learn More</a>
        </div>
    </div>
</div>
</section>

<section class="video-section">
<video id="autoplayVideo" controls muted="muted">
    <source src="<?= get_template_directory_uri(); ?>/assets/video/video.mp4" type="video/mp4">
</video>
</section>

<section class="news-section">
<div class="global-wrapper section-padding">
    <div class="section-heading-group">
        <h1>News and Article</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page
            when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
    </div>
    <div class="news-boxes">
        <div class="news-box">
            <div class="background-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/1.jpg">
            </div>
            <div class="news-content">
                <h4><a href="#">New island discovered</a></h4>
                <div class="news-extra-info">
                    <span class="date">Dec 9, 2019</span>
                    <div class="comment-wrapper">
                        <a href="#">
                            <i class="fa fa-comment"></i>
                            <span>20</span>
                        </a>
                    </div>
                    <span class="category">Tour Spot</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="./">Read More</a>
        </div>

        <div class="news-box">
            <div class="background-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/2.jpg">
            </div>
            <div class="news-content">
                <h4><a href="#">New island discovered</a></h4>
                <div class="news-extra-info">
                    <span class="date">Dec 9, 2019</span>
                    <div class="comment-wrapper">
                        <a href="#">
                            <i class="fa fa-comment"></i>
                            <span>20</span>
                        </a>
                    </div>
                    <span class="category">Tour Spot</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="./">Read More</a>
        </div>

        <div class="news-box">
            <div class="background-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/3.jpg">
            </div>
            <div class="news-content">
                <h4><a href="#">New island discovered</a></h4>
                <div class="news-extra-info">
                    <span class="date">Dec 9, 2019</span>
                    <div class="comment-wrapper">
                        <a href="#">
                            <i class="fa fa-comment"></i>
                            <span>20</span>
                        </a>
                    </div>
                    <span class="category">Tour Spot</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="./">Read More</a>
        </div>
        <div class="news-box">
            <div class="background-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/4.jpg">
            </div>
            <div class="news-content">
                <h4><a href="#">New island discovered</a></h4>
                <div class="news-extra-info">
                    <span class="date">Dec 9, 2019</span>
                    <div class="comment-wrapper">
                        <a href="#">
                            <i class="fa fa-comment"></i>
                            <span>20</span>
                        </a>
                    </div>
                    <span class="category">Tour Spot</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="./">Read More</a>
        </div>

        <div class="news-box">
            <div class="background-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/5.jpg">
            </div>
            <div class="news-content">
                <h4><a href="#">New island discovered</a></h4>
                <div class="news-extra-info">
                    <span class="date">Dec 9, 2019</span>
                    <div class="comment-wrapper">
                        <a href="#">
                            <i class="fa fa-comment"></i>
                            <span>20</span>
                        </a>
                    </div>
                    <span class="category">Tour Spot</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="./">Read More</a>
        </div>

        <div class="news-box">
            <div class="background-wrapper">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/history/6.jpg">
            </div>
            <div class="news-content">
                <h4><a href="#">New island discovered</a></h4>
                <div class="news-extra-info">
                    <span class="date">Dec 9, 2019</span>
                    <div class="comment-wrapper">
                        <a href="#">
                            <i class="fa fa-comment"></i>
                            <span>20</span>
                        </a>
                    </div>
                    <span class="category">Tour Spot</span>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus vitae molestiae suscipit
                    reprehenderit aliquid minima animi. Quasi, beatae nihil sunt neque ullam facilis cumque
                    sit
                    distinctio esse minus repellat error?</p>
            </div>
            <a href="./">Read More</a>
        </div>
    </div>
</div>
</section>

<?php 
    get_footer();
?>