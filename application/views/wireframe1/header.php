
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php if(isset($title)) echo $title;?></title>
        <meta name="description" content="<?php if(isset($meta_desc)) echo $meta_desc;?>">
        <meta name="robots" content="index, follow">
        <meta name="googlebot" content="follow">
        <meta name="canonical" content="<?=base_url(uri_string())?>">

        <link rel="stylesheet" href="<?=base_url('/public/vendor/glightbox/css/glightbox.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('/public/vendor/nouislider/nouislider.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('/public/vendor/choices.js/public/assets/styles/choices.min.css')?>">
        <link rel="stylesheet" href="<?=base_url('/public/vendor/swiper/swiper-bundle.min.css')?>">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
        <link rel="stylesheet" href="<?=base_url('/public/css/style.pink.css" id="theme-stylesheet')?>">
        <link rel="stylesheet" href="<?=base_url('/public/css/custom.css')?>">
        <link rel="shortcut icon" href="<?=base_url('/public/img/favicon/favicon.ico')?>">

        <link rel="apple-touch-icon" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">
        <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('/public/img/favicon/apple-touch-icon.png')?>">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
        <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
        <!-- Schema Markup -->
        <?php if(isset($schema)) echo $schema;?>
        <!-- End Schema Markup -->

        <?php
            $this->load->model('migration_seo', 'seo');

            $ga = $this->seo->read_ga();
            $ga = ($ga) ? $ga->ga_code : '';

            $gsc = $this->seo->read_gsc();
            $gsc = ($gsc) ? $gsc->gsc_code : '';
            $gsc = str_replace('google-site-verification=','',$gsc);

            $gtag = $this->seo->read_gtag();
            $gtag = ($gtag) ? $gtag->gtag_code : '';
        ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$ga?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?=$ga?>');
        </script>

        <!-- Google Search Console -->
        <meta name="google-site-verification" content="<?=$gsc?>" />

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?=$gtag?>');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=<?=$gtag?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="page-holder">
    

