<?php
/*
//Меняем обертку для вывода
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', create_function('', 'echo "<div id=\"shop\">";'), 10);
add_action('woocommerce_after_main_content', create_function('', 'echo "</div>";'), 10);
//Удаляем хлебные крошки
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
//Удаляем табы в одиночном товаре
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20, 2);
add_action( 'woocommerce_single_product_summary', 'woocommerce_product_description_panel', 20 );
//Удаляем отзывы о товаре
remove_action( 'woocommerce_product_tabs', 'woocommerce_product_reviews_tab', 30 );
remove_action( 'woocommerce_product_tab_panels', 'woocommerce_product_reviews_panel', 30 );
//Удаляем встроенный сайдбар Woo
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
?>
<?
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
*/
?>
