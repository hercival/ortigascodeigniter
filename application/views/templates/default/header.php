<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="The No. 1 and Pioneer Japanese Restaurant in the Philippines">
        <meta name="keywords" content="Japanese, Japan, Food, Restaurant, Philippines, Tokyo Tokyo, Tokyo, Tonkastsu, Bento, Sumo, Donburi, Tempura, Chicken Teriyaki, Pork Tonkatsu, Beef Misono, Eat All You Kanin, Ramen, California Maki, Fast Food, Fast Casual">
        <meta name="google" value="notranslate">
        <meta name="author" content="Digital Partners AsiaPacific, Inc.">

        <!-- Facebook Metatags --> 
        <meta property="og:title" content="Tokyo Tokyo Philippines">
        <meta property="og:description" content="The No. 1 and Pioneer Japanese Restaurant in the Philippines">
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://www.tokyotokyo.com.ph">
        <meta property="og:image" content="<?=base_url()?>includes/img/tokyo-share.jpg">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <title><?=config_item('site_title')?> <?=@$title?></title>

        <!-- Typekit for Proxima Nova -->
        <script src="<?=base_url()?>includes/js/vendor/ccj5tqf.js"></script>
        <!--<script>try{Typekit.load({ async: true });}catch(e){}</script>-->

        <!-- Bootstrap -->
        <link href="<?=base_url()?>includes/css/bootstrap.min.css" rel="stylesheet">

        <!-- Flickity -->
        <link href="<?=base_url()?>includes/css/flickity.css"rel="stylesheet">


        <link href="<?=base_url()?>includes/js/vendor/queryloader/css/queryLoader.css"rel="stylesheet">

        <!-- Roboto Font -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="<?=base_url()?>includes/css/styles.css" rel="stylesheet">
		<!-- additional Nov 27 by hercival-->
		<link rel="stylesheet" href="<?=base_url()?>assets/plugins/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" title="no title" charset="utf-8">
        

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicons -->
        <meta name="application-name" content="Tokyo Tokyo Philippines"/>
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="<?=base_url()?>includes/img/favicon/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="<?=base_url()?>includes/img/favicon/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="<?=base_url()?>includes/img/favicon/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="<?=base_url()?>includes/img/favicon/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="<?=base_url()?>includes/<?=base_url()?>includes/img/favicon/mstile-310x310.png" />

        <link rel="icon" type="image/png" href="<?=base_url()?>includes/img/favicon/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="<?=base_url()?>includes/img/favicon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="<?=base_url()?>includes/img/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?=base_url()?>includes/img/favicon/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="<?=base_url()?>includes/img/favicon/favicon-128.png" sizes="128x128" />

        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?=base_url()?>includes/img/favicon/apple-touch-icon-152x152.png" />

        <script type="text/javascript">
        function get_base_url(){
            return '<?=base_url()?>';
        }
        </script>
    </head>

<!-- #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function data-spy="scroll" data-target=".navbar-fixed-top" -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div class="loading-overlay">
    <div id="wrapper-loading">
        <img src="<?=base_url()?>includes/img/loader.gif">
    </div>
</div>

<!-- <div class="container-fluid" style="height:1px; overflow:hidden;"> -->
<div class="container-fluid" style="visibility:hidden;">
    <nav id="main-nav-container" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo -->
                    <a class="navbar-brand" href="<?=base_url()?>">
                        <picture>
                            <source media="(max-width: 768px)" srcset="<?=base_url()?>includes/img/logo-desktop.png" class="center-block">
                            <img src="<?=base_url()?>includes/img/logo-desktop.png" alt="Tokyo Tokyo" class="center-block">
                        </picture>
                    </a>
                </div>

                <!-- Main Navigation -->
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-center">
                        <?php 
                        if(isset($pages) && !empty($pages)):
                            foreach ($pages[1] as $p): 
                                $pid1 = $p['id'];

                                $url = get_menu_url($page, $p);
                                ?>

                                <?php if(isset($pages[2][$pid1]) && !empty($pages[2][$pid1])): ?>
                                    <li class="dropdown <?=$url=='#page-top' ? 'active ': '' ?>">
                                        <a href="<?=$url?>" class="page-scroll" data-toggle="dropdown"><?=$p['title']?><b class="caret hidden-xs"></b></a>
                                <?php else: ?>
                                    <li class="<?=$url=='#page-top' ? 'active ': '' ?>"><a href="<?=$url?>" class="page-scroll"><?=$p['title']?></a>
                                <?php endif; ?>

                                <?php if(isset($pages[2][$pid1]) && !empty($pages[2][$pid1])): ?>
                                    <ul class="dropdown-menu">
                                        <?php foreach($pages[2][$pid1] as $child_page): $pid2 = $child_page['id'];
                                            $url = get_menu_url($page, $child_page);
                                        ?>
                                        <?php if (isset($pages[3][$pid2]) && !empty($pages[3][$pid2])): ?>
                                            <li class="dropdown">
                                                <a href="<?=$url?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$child_page['title']?> 
                                                    <span style="font-size: 9px;" class="glyphicon glyphicon-play hidden-xs"></span></a>
                                                <ul class="dropdown-menu hidden">
                                                   <?php foreach($pages[3][$pid2] as $child_page2):
                                                            $url = get_menu_url($page, $child_page2);
                                                        ?> 
                                                        <li><a href="<?=$url?>" class="page-scroll"><?=$child_page2['title']?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                        <?php else: ?>
                                            <li><a href="<?=$url?>"><?=$child_page['title']?></a>
                                        <?php endif ?>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                </li>
                            <?php endforeach; 
                        endif; ?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right nav-social">
                        <li class="nav-social-fb"><a href="https://www.facebook.com/tokyotokyophilippines" title="Facebook" target="_blank"></a></li>
                        <li class="nav-social-tw"><a href="https://twitter.com/TokyoTokyoPHL" title="Twitter" target="_blank"></a></li>
                        <li class="nav-social-in"><a href="https://www.instagram.com/tokyotokyophilippines" title="Instagram" target="_blank"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

<!-- <div class="start-content" style="visibility:hidden;"> -->