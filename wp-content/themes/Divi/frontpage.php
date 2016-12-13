<?php /* Template Name: front page */ ?>

<?php get_header(); ?>
<div class="container-full top-nav">
   <h2 class="top-nav-heading">
       Digital solutions & services designed to support<br> the New Zealand Education Sector.
   </h2>
</div>

<div class="container-full products">
    <div class="row">
        <div class="col-md-4">col-md-4</div>
        <div class="col-md-4">col-md-4</div>
        <div class="col-md-4">col-md-4</div>
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
    "Nullam eu sem ut mi sodales convallis. Nam non tincidunt nunc. Suspendisse potenti. Etiam in blandit nunc, sed auctor erat"
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
        margin-left: 20%;
        margin-right: 20%;
        color: #000;
    }
    .quote {
        margin-left: 20%;
        margin-right: 20%;
    }
    .long-text-heading {
        margin-left: 20%;
        margin-right: 20%;
        margin-bottom: 15px;
        color: #2a85be;
        padding-bottom: 1%;
    }
    .text-copy {
        background-color: lightgrey;
        padding:2%;
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
        .feature-heading {
            margin-left: 4%;
            margin-right: 1%;
            color: #2a85be;
            padding-bottom: 0.2%;
        }
        .feature-row {
            margin-left: 1%;
            margin-right: 1%;
        }
        .video {
            margin-top: 2%;
            margin-bottom: 2%;
            color: #000;
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
        .feature-heading {
            margin-left: 1.7%;
        }

    }


</style>
