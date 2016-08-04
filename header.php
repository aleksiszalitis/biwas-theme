<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
	
	    <title><?php wp_title( '|',true,'right'); ?> </title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
	<?php wp_head();?>
</head>

<body class="cbp-spmenu-push">

    <!-- MAIN HEADING-->
    <div class="for-full-back color-bg-one" id="main-sec">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1 class="pad-adjust"><i class="fa fa-plus faa-pulse animated"></i>Biwas</h1>
                </div>
            </div>
        </div>
    </div>
	    <!--END MAIN HEADING-->
<?php get_sidebar();?>