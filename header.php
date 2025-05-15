<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>> 

    <header class="main-header">
        <div class="container">
            <div class="header-menu">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-line.svg'); ?>" alt="BrainRocket" class="header-menu__logo"></a>
            </div>
        </div>
    </header>