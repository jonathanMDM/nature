<?php
    /**
     * Template Name: beliko
     */
    get_header(); ?>

<main class="main main-front-page">
    <section class="hero-front">
        <div class="swiper-hero-front">
            <div class="swiper-wrapper">
                <?php
                $banners = get_field('banners');
                if ($banners) {
                    foreach ($banners as $banner) :
                        $background_image = $banner['background']['url'];
                        $texts = $banner['textos'];
                        $button_banner = $texts['boton'];
                ?>
                <div class="swiper-slide overlay" style="background-image: url(<?php echo esc_url($background_image); ?>);">
                    <?php if ($banner['llevara_texto'] === true) : ?>
                    <div class="hero-front__wrapper max-width">
                        <div class="hero-front__content">
                            <div  class="hero-front__texts container<?php
                                                                        if ($texts['orientacion_del_texto'] == 'Derecha') {
                                                                            echo   'hero-front__texts--left';
                                                                        } elseif ($texts['orientacion_del_texto'] == 'Izquierda') {
                                                                            echo 'hero-front__texts--right';
                                                                        }; ?>">
                                <h2 class="hero-front__h2 titulo-slider"><?php echo esc_html($texts['titulo']); ?></h2>
                                <p class="p hero-front__p description"><?php echo esc_html($texts['descripcion']); ?></p>
                                <?php if ($button_banner) : ?>
                                <a href="<?php echo $button_banner['url']; ?>">
                                    <button
                                        class="hero-front__button button button-primary"><?php echo esc_html($button_banner['texto_btn']); ?></button>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php
                    endforeach;
                }
                ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="hero-front__content-controls max-width">
                <div class="hero-front__controls">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- session 2 -->
    <section>
        <?php
        $sess2 = get_field('se2');
        $video_file  = isset($sess2['video']) ? $sess2['video'] : '';
        ?>
        <div class="backg" style="background-image: url(<?php echo esc_url('background_image'); ?>);">
            <h2 ><?php echo esc_html($sess2['titulo']); ?></h2>
            <h2 ><?php echo esc_html($sess2['sub_titulo']); ?></h2>
        </div>

        <?php if ($video_file): ?>
            <div class="video-container">
                <video width="560" height="315" controls>
                    <source src="<?php echo esc_url($video_file); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        <?php endif; ?>

</section>


    <?php get_footer();