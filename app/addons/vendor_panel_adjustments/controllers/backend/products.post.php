<?php

use Tygh\Registry;


if ($mode == 'add') {
    $tabs = Registry::get('navigation.tabs');

    $tabs['features'] = [
        'title' => __('features'),
        'js' => true
    ];
    $tabs['shippings'] = [
        'title' => __('shipping_properties'),
        'js' => true
    ];
    $tabs['dimensions'] = [
        'title' => __('dimensions'),
        'js' => true
    ];

    Registry::set('navigation.tabs', $tabs);

    if ($action == 'update_features') {
        if (defined('AJAX_REQUEST')) {
            $product_data = [
                'product_id' => empty($_REQUEST['product_id']) ? 'product_adding' : intval($_REQUEST['product_id']),
                'category_ids' => explode(',', $_REQUEST['category_ids'])
            ];
            [$product_features, $features_search] = fn_get_paginated_product_features(
                ['product_id' => $product_data['product_id']],
                $auth, $product_data
            );

            Tygh::$app['view']->assign('product_features', $product_features);
            Tygh::$app['view']->assign('features_search', $features_search);
        }
    }
}

