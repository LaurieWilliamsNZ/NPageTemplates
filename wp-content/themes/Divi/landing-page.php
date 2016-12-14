<?php /* Template Name: Landing Page */ ?>

<?php get_header(); ?>
<div class="container-full top-nav">
   <h2 class="top-nav-heading">
       EAP is = A nice easy to understand statement <br>about what sits here.
   </h2>
</div>

<div class="container-full video">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"><script src="//fast.wistia.com/embed/medias/olxfhpl966.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_olxfhpl966 videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div></div>
        <div class="col-md-4"></div>
    </div>
</div>


<div class="container-full features">
    <h2 class="feature-heading">Features and More</h2>
    <div class="row feature-row">
        <div class="col-md-6">
            <h4>Heading One</h4>
            <p> Cras pharetra venenatis ipsum, sit amet elementum felis dapibus id. Sed lobortis sollicitudin neque, ac mattis felis auctor vel. Cras sagittis felis quis nibh ultrices finibus</p>
        </div>
        <div class="col-md-6 feature">
            <h4>Heading One</h4>
            <p> Nam pulvinar lorem velit, sed volutpat nibh iaculis sit amet. Proin lacinia mollis rhoncus. Aliquam finibus, felis at eleifend pulvinar, leo massa ornare enim, sit amet volutpat justo augue vitae dui. Nullam varius, neque non congue bibendum, felis ante scelerisque quam, at ullamcorper massa lorem ac nunc. Ut gravida fermentum tortor eu vestibulum.</p>
        </div>
        <div class="col-md-6 feature">
            <h4>Heading Two</h4>
            <p> Pellentesque tincidunt libero eu ornare euismod. Sed pretium bibendum posuere. Suspendisse eleifend arcu eu pulvinar lobortis. Suspendisse ut leo maximus, commodo purus at, pretium enim.</p>
        </div>
        <div class="col-md-6 feature">
            <h4>Heading Three</h4>
            <p> Donec magna quam, commodo ac lobortis rutrum, eleifend non tortor. Nulla quis ornare orci. Duis porta mi et luctus imperdiet. Cras ultricies varius nulla eu fringilla. Maecenas nec bibendum libero, a volutpat sem. Vestibulum vel auctor ex. Sed porta orci nisl, ac porttitor nunc tristique convallis.</p>
        </div>
        <div class="col-md-6 feature">
            <h4>Heading Four</h4>
            <p>  Morbi dictum feugiat ligula, id feugiat ipsum feugiat vitae. Suspendisse suscipit lectus erat, et pretium dolor fringilla sit amet. Donec iaculis nisi sollicitudin metus sollicitudin tincidunt. Morbi varius </p>
        </div>
        <div class="col-md-6 feature">
            <h4>Heading Five</h4>
            <p> Quisque molestie tortor sit amet vehicula pharetra. Mauris eget ultrices nisl. Quisque volutpat diam nibh, sed viverra mi finibus sed. In hac habitasse platea dictumst. Pellentesque tincidunt urna vel nunc auctor, vel efficitur dui mattis.</p>
        </div>
    </div>

</div>

<div class="container-full text-copy">
    <h2 class="long-text-heading">More Copy</h2>
    <p class="long-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.<br>
        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>

    <p class="long-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.<br>
        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>


</div>




<?php get_footer(); ?>

<style>
    .top-nav {
        height:250px;
        background-size: cover;
        background-image: url('<?php echo get_template_directory_uri(); ?>/images/Web-Images-Mint.jpg');
    }
    .top-nav-heading {
        margin-left: 500px;
        padding-top: 80px;
        color: white;
    }

    .long-text {
        margin-left: 15%;
        margin-right: 15%;
        color: #000;
    }
    .long-text-heading {
        margin-left: 15%;
        margin-right: 15%;
        margin-bottom: 15px;
        color: #2a85be;
        padding-bottom: 1%;
    }
    .feature-heading {
        margin-left: 15%;
        margin-right: 15%;
        margin-bottom: 15px;
        color: #2a85be;
        padding-bottom: 1%;
    }
    .feature-row {
        margin-left: 15%;
        margin-right: 15%;
    }
    .text-copy {
        background-color: lightgrey;
        padding:2%;
    }
    .features {
        background-color: #f1f1f1;
        padding:2%;
    }
    .feature {
        margin-bottom: 25px;
    }
    .video {
        margin-top: 2%;
        margin-bottom: 2%;
        color: #000;
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
        .feature-row {
            margin-left: 15%;
            margin-right: 15%;
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
            margin-left: 15%;
            margin-right: 15%;
        }
        .long-text-heading {
            margin-left: 15%;
            margin-right: 15%;
        }
        .feature-heading {
            margin-left: 16%;
        }
        .feature-row {
            margin-left: 15%;
            margin-right: 15%;
        }

    }


</style>
