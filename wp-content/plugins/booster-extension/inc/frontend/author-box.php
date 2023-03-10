<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * Author Box
 *
 * @package Booster Extension
 */
if (!function_exists('booster_extension_authorbox_display')):
    function booster_extension_authorbox_display()
    {
        $twp_be_settings = get_option('twp_be_options_settings');
        $twp_be_show_author_box = esc_html($twp_be_settings['twp_be_show_author_box']);
        if ($twp_be_show_author_box) {
            $author_img = get_avatar(get_the_author_meta('ID'), 400, '', '', array('class' => 'avatar-img'));
            $author_name = esc_html(get_the_author_meta('display_name'));
            $author_user_url = esc_url(get_the_author_meta('user_url'));
            $author_description = esc_html(get_the_author_meta('description'));
            $author_email = esc_html(get_the_author_meta('user_email'));
            $author_post_url = esc_url(get_author_posts_url(get_the_author_meta('ID')));
            $twp_be_show_author_email = esc_html($twp_be_settings['twp_be_show_author_email']);
            $twp_be_show_author_url = esc_html($twp_be_settings['twp_be_show_author_url']);
            $twp_be_show_author_title = esc_html($twp_be_settings['twp_be_show_author_title']);
            $twp_be_show_author_role = esc_html($twp_be_settings['twp_be_show_author_role']);
            $twp_be_show_author_alignmrnt = esc_html($twp_be_settings['twp_be_show_author_alignmrnt']);
            $twp_be_show_author_image_layout = esc_html($twp_be_settings['twp_be_show_author_image_layout']);
            $user_data = get_userdata(get_the_author_meta('ID'));
            $user_role = $user_data->roles[0];
            $twp_user_metabox_facebook = get_the_author_meta('twp_user_metabox_facebook', get_the_author_meta('ID'));
            $twp_user_metabox_twitter = get_the_author_meta('twp_user_metabox_twitter', get_the_author_meta('ID'));
            $twp_user_metabox_instagram = get_the_author_meta('twp_user_metabox_instagram', get_the_author_meta('ID'));
            $twp_user_metabox_pinterest = get_the_author_meta('twp_user_metabox_pinterest', get_the_author_meta('ID'));
            $twp_user_metabox_linkedin = get_the_author_meta('twp_user_metabox_linkedin', get_the_author_meta('ID'));
            $twp_user_metabox_youtube = get_the_author_meta('twp_user_metabox_youtube', get_the_author_meta('ID'));
            $twp_user_metabox_vimeo = get_the_author_meta('twp_user_metabox_vimeo', get_the_author_meta('ID'));
            $twp_user_metabox_whatsapp = get_the_author_meta('twp_user_metabox_whatsapp', get_the_author_meta('ID'));
            $twp_user_metabox_github = get_the_author_meta('twp_user_metabox_github', get_the_author_meta('ID'));
            $twp_user_metabox_wordpress = get_the_author_meta('twp_user_metabox_wordpress', get_the_author_meta('ID'));
            $twp_user_metabox_foursquare = get_the_author_meta('twp_user_metabox_foursquare', get_the_author_meta('ID'));
            $twp_user_metabox_vk = get_the_author_meta('twp_user_metabox_vk', get_the_author_meta('ID'));
            $twp_user_metabox_twitch = get_the_author_meta('twp_user_metabox_twitch', get_the_author_meta('ID'));
            $twp_user_metabox_tumblr = get_the_author_meta('twp_user_metabox_tumblr', get_the_author_meta('ID'));
            $twp_user_metabox_snapchat = get_the_author_meta('twp_user_metabox_snapchat', get_the_author_meta('ID'));
            $twp_user_metabox_skype = get_the_author_meta('twp_user_metabox_skype', get_the_author_meta('ID'));
            $twp_user_metabox_reddit = get_the_author_meta('twp_user_metabox_reddit', get_the_author_meta('ID'));
            $twp_user_metabox_stackoverflow = get_the_author_meta('twp_user_metabox_stackoverflow', get_the_author_meta('ID'));
            $twp_user_metabox_xing = get_the_author_meta('twp_user_metabox_xing', get_the_author_meta('ID'));
            $twp_user_metabox_delicious = get_the_author_meta('twp_user_metabox_delicious', get_the_author_meta('ID'));
            $twp_user_metabox_soundcloud = get_the_author_meta('twp_user_metabox_soundcloud', get_the_author_meta('ID'));
            $twp_user_metabox_behance = get_the_author_meta('twp_user_metabox_behance', get_the_author_meta('ID'));
            $twp_user_metabox_steam = get_the_author_meta('twp_user_metabox_steam', get_the_author_meta('ID'));
            $twp_user_metabox_dribbble = get_the_author_meta('twp_user_metabox_dribbble', get_the_author_meta('ID'));
            $twp_user_metabox_blogger = get_the_author_meta('twp_user_metabox_blogger', get_the_author_meta('ID'));
            $twp_user_metabox_flickr = get_the_author_meta('twp_user_metabox_flickr', get_the_author_meta('ID'));
            $twp_user_metabox_spotify = get_the_author_meta('twp_user_metabox_spotify', get_the_author_meta('ID'));
            $twp_user_metabox_rss = get_the_author_meta('twp_user_metabox_rss', get_the_author_meta('ID'));
            $be_user_avatar = get_the_author_meta( 'be_user_avatar', get_the_author_meta('ID') ); ?>

            <div class="booster-block booster-author-block">
                <div class="be-author-details <?php if (!empty($twp_be_show_author_image_layout)) {
                    echo esc_attr('layout-' . $twp_be_show_author_image_layout);
                }
                if (!empty($twp_be_show_author_alignmrnt)) {
                    echo esc_attr(' align-' . $twp_be_show_author_alignmrnt);
                } ?>">
                    <div class="be-author-wrapper">
                        <div class="booster-row">
                            <?php if ($twp_be_show_author_alignmrnt == '' || $twp_be_show_author_alignmrnt == 'left' || $twp_be_show_author_alignmrnt == 'center') { ?>
                                <div class="booster-column booster-column-two booster-column-mobile">
                                    <div class="be-author-image">
                                        <?php if( $be_user_avatar ){ ?>
                                
                                            <img src="<?php echo esc_url( $be_user_avatar ); ?>">
                                        
                                        <?php
                                        }else{
                                            echo wp_kses_post($author_img);
                                        } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="booster-column booster-column-eight booster-column-mobile">
                                <div class="author-details">
                                    <?php if ($twp_be_show_author_title) { ?>
                                        <header class="twp-plugin-title twp-author-title">
                                            <h2><?php echo esc_html($twp_be_show_author_title); ?></h2>
                                        </header>
                                    <?php } ?>
                                    <h4 class="be-author-meta be-author-name">
                                        <a href="<?php echo esc_url($author_post_url); ?>">
                                            <?php echo esc_html($author_name); ?>
                                        </a>
                                    </h4>
                                    <?php if ($author_description) { ?>
                                        <div class="be-author-meta be-author-description"><?php echo esc_html($author_description); ?></div>
                                    <?php } ?>
                                    <?php if ($author_email && $twp_be_show_author_email) { ?>
                                        <div class="be-author-meta be-author-email">
                                            <a href="mailto: <?php echo esc_html($author_email); ?>">
                                                <?php booster_extension_the_theme_svg('envelope'); ?><?php echo esc_html($author_email); ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php if ($author_user_url && $twp_be_show_author_url) { ?>
                                        <div class="be-author-meta be-author-url">
                                            <a href="<?php echo esc_url($author_user_url); ?>" target="_blank">
                                                <?php booster_extension_the_theme_svg('sphere'); ?><?php echo esc_url($author_user_url); ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <?php if ($user_role && $twp_be_show_author_role) { ?>
                                        <div class="be-author-meta be-author-role">
                                            <span class="booster-svg-icon booster-svg-user"><?php booster_extension_the_theme_svg('user'); ?></span><?php echo esc_html($user_role); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="be-author-profiles">
                                    <?php if ($twp_user_metabox_facebook) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_facebook); ?>">
                                            <?php booster_extension_the_theme_svg('facebook'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_twitter) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_twitter); ?>">
                                            <?php booster_extension_the_theme_svg('twitter'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_instagram) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_instagram); ?>">
                                            <?php booster_extension_the_theme_svg('Instagram'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_pinterest) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_pinterest); ?>">
                                            <?php booster_extension_the_theme_svg('Pinterest'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_linkedin) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_linkedin); ?>">
                                            <?php booster_extension_the_theme_svg('Linkedin'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_youtube) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_youtube); ?>">
                                            <?php booster_extension_the_theme_svg('Youtube'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_vimeo) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_vimeo); ?>">
                                            <?php booster_extension_the_theme_svg('Vimeo'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_whatsapp) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_whatsapp); ?>">
                                            <?php booster_extension_the_theme_svg('Whatsapp'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_github) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_github); ?>">
                                            <?php booster_extension_the_theme_svg('Github'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_wordpress) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_wordpress); ?>">
                                            <?php booster_extension_the_theme_svg('Wordpress'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_foursquare) { ?>
                                        <a target="_blank"
                                           href="<?php echo esc_url($twp_user_metabox_foursquare); ?>">
                                            <?php booster_extension_the_theme_svg('Foursquare'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_vk) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_vk); ?>">
                                            <?php booster_extension_the_theme_svg('vk'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_twitch) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_twitch); ?>">
                                            <?php booster_extension_the_theme_svg('twitch'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_tumblr) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_tumblr); ?>">
                                            <?php booster_extension_the_theme_svg('tumblr'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_snapchat) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_snapchat); ?>">
                                            <?php booster_extension_the_theme_svg('snapchat'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_skype) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_skype); ?>">
                                            <?php booster_extension_the_theme_svg('skype'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_reddit) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_reddit); ?>">
                                            <?php booster_extension_the_theme_svg('reddit'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_stackoverflow) { ?>
                                        <a target="_blank"
                                           href="<?php echo esc_url($twp_user_metabox_stackoverflow); ?>">
                                            <?php booster_extension_the_theme_svg('stackoverflow'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_xing) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_xing); ?>">
                                            <?php booster_extension_the_theme_svg('xing'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_delicious) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_delicious); ?>">
                                            <?php booster_extension_the_theme_svg('delicious'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_soundcloud) { ?>
                                        <a target="_blank"
                                           href="<?php echo esc_url($twp_user_metabox_soundcloud); ?>">
                                            <?php booster_extension_the_theme_svg('soundcloud'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_behance) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_behance); ?>">
                                            <?php booster_extension_the_theme_svg('behance'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_steam) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_steam); ?>">
                                            <?php booster_extension_the_theme_svg('steam'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_dribbble) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_dribbble); ?>">
                                            <?php booster_extension_the_theme_svg('dribble'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_blogger) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_blogger); ?>">
                                            <?php booster_extension_the_theme_svg('blogger'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_flickr) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_flickr); ?>">
                                            <?php booster_extension_the_theme_svg('flicker'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_spotify) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_spotify); ?>">
                                            <?php booster_extension_the_theme_svg('spotify'); ?>
                                        </a>
                                    <?php } ?>
                                    <?php if ($twp_user_metabox_rss) { ?>
                                        <a target="_blank" href="<?php echo esc_url($twp_user_metabox_rss); ?>">
                                            <?php booster_extension_the_theme_svg('rss'); ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if ($twp_be_show_author_alignmrnt == 'right') { ?>
                                <div class="booster-column booster-column-two booster-column-mobile">
                                    <div class="be-author-image">
                                        <?php echo wp_kses_post($author_img); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
    }
endif;
booster_extension_authorbox_display();
