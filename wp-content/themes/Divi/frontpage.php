<?php /* Template Name: front page */ ?>

<?php get_header(); ?>
<div class="container-full top-nav">
   <h2 class="top-nav-heading">
       Digital solutions & services designed to support<br> the New Zealand Education Sector.
   </h2>
</div>

<div class="container-full products">
    <div class="row">
        <div class="col-md-3 product">
            <a href="http://www.n4l.co.nz/pond/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Pond.png" alt="Pond" class="center-block">
            </a>
                <p class="product-text"> laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis</p>
        </div>
        <div class="col-md-3 product">
            <a href="http://www.n4l.co.nz/managed-network/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Managed-Network.png" alt="Managed Network" class="center-block">
            </a>
            <p class="product-text"> adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam</p>
        </div>
        <div class="col-md-3 product">
            <a href="http://www.n4l.co.nz/tahi/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Tahi-Colour.png" alt="Tahi" class="center-block">
            </a>
            <p class="product-text">  Duis aute irure dolor in reprehenderit in voluptate velits</p>
        </div>
        <div class="col-md-3 product">
            <img src="http://placehold.it/160x70" alt="placeholder" class="center-block">
            <p class="product-text">  Duis aute irure dolor in reprehenderit in voluptate velits</p>
        </div>

    </div>
</div>


<div class="container-full text-copy">
    <h2 class="long-text-heading">The N4L Story</h2>
    <p class="long-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio digdsnissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.<br>
        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>

    <p class="long-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent lupdstatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.<br>
        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>


</div>

<div class="container-full mid-nav">
    <h2 class="mid-nav-heading">
        Digital solutions & services designed to support<br> the New Zealand Education Sector.
    </h2>
</div>

<div class="container-full quote">
    <div class="row quotes">
        <div class="col-xs-6">

   <blockquote>elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  </blockquote>
            <p class="quote-name"> Helen Robinson<p/>
            <p class="quote-title"> Chair</p>

        </div>
        <div class="col-xs-6"></div>
    </div>
</div>




<?php get_footer(); ?>

<style>
    .top-nav {
        height:250px;
        background-size: cover;
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/Web-Images-Blue.jpg');
    }
    .mid-nav {
        height:250px;
        background-size: cover;
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/Web-Images-Yellow.jpg');
    }
    .top-nav-heading {
        margin-left: 500px;
        padding-top: 80px;
        color: white;
    }
    .mid-nav-heading {
        margin-left: 600px;
        padding-top: 80px;
        color: white;
    }

    .long-text {
        margin-left: 10%;
        margin-right: 10%;
        color: #000;
    }
    .products {
        margin-left: 15%;
        margin-right: 15%;
        color: #000;
        margin-top: 2%;
        margin-bottom: 1%;
    }
    .product {
        margin-top: 2%;
        margin-bottom: 2%;

    }
    .center-block {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .product-text {
        margin-top: 15%;
        margin-bottom: 5%;
        margin-left: 10%;
        margin-right: 15%;
        text-align: center;
    }
    .quote {
        font-weight: bold;
        padding-top: 1%;
        padding-bottom: 1%;
        background-color: #e1e1e1;
    }
    .quotes {
        margin-left: 15%;
        margin-right: 15%;
    }
    .quote-name {
      margin-left: 5%;
        color: #000;
    }
    .quote-title {
        margin-left: 5%;
        color:#000;
    }
    .long-text-heading {
        margin-left: 10%;
        margin-right: 10%;
        margin-bottom: 15px;
        color: #2a85be;
        padding-bottom: 1%;
    }
    .text-copy {
        background-color: lightgrey;
        padding:2%;
    }
    blockquote {

        border: 0px solid #000;
        -moz-border-radius:10px;
        border-radius:10px;
        color: #000;
        line-height: 25px;
    }

    blockquote p {
        margin:0;
        padding:0;
        font-weight: bold;
    }
    blockquote:before {
        content:'\201C';
        color:#33a8e5;
        font-size:40px;
        line-height:14px;
        vertical-align:middle;
        font-weight:bold;
    }
    blockquote:after {
        content:'\201C';
        color:#33a8e5;
        font-size:40px;
        line-height:14px;
        vertical-align:middle;
        font-weight:bold;
    }


    /*==========  Mobile First Method  ==========*/

    /* Custom, iPhone Retina */
    @media only screen and (min-width : 320px) {
        .top-nav {
            height: 90px;
        }
        .top-nav-heading {
            font-size: 20px;
            color: white;
            padding-bottom: 0px;
            margin-left: 4%;
            margin-right: 0%;
            padding-top: 20px;
        }

        .long-text {
            margin-left: 1%;
            margin-right: 1%;
        }
        .long-text-heading {
            margin-left: 1%;
            margin-right: 1%;
            color: #2a85be;
            padding-bottom: 0.2%;
        }


    }

    /* Extra Small Devices, Phones */
    @media only screen and (min-width : 480px) {
        .top-nav {
            height: 150px;
        }

    }

    /* Small Devices, Tablets */
    @media only screen and (min-width : 768px) {
        .top-nav {
            height: 150px;
        }

        .top-nav-heading {
            font-size: 30px;
            color: white;
            padding-bottom: 0px;
            margin-left: 4%;
            margin-right: 0%;
            padding-top: 20px;
        }

        .long-text{
            -webkit-column-count: 2; /* Chrome, Safari, Opera */
            -moz-column-count: 2; /* Firefox */
            column-count: 2;
        }

    }

    /* Medium Devices, Desktops */
    @media only screen and (min-width : 992px) {
        .top-nav {
            height: 200px;
        }
        .long-text{
            -webkit-column-count: 2; /* Chrome, Safari, Opera */
            -moz-column-count: 2; /* Firefox */
            column-count: 2;
            margin-right: 15%;
            margin-left: 15%;
        }
        .long-text-heading {
            margin-left: 15%;
            margin-right: 15%;
        }
        .top-nav-heading {
            margin-left: 300px;
            padding-top: 80px;
            color: white;
        }

    }

    /* Large Devices, Wide Screens */
    @media only screen and (min-width : 1200px) {
        .top-nav {
            height: 250px;
        }
        .long-text{
            -webkit-column-count: 2; /* Chrome, Safari, Opera */
            -moz-column-count: 2; /* Firefox */
            column-count: 2;
        }


    }


</style>
