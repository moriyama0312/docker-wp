<?php
/*【カスタム投稿設定】================================================ */
add_action( 'init', 'init_test' );
function init_test(){
    $labels = array(
        'name' => _x('TEST', 'post type general name'),
        'singular_name' => _x('TEST', 'post type singular name'),
        'all_items' => 'TEST一覧',
        'add_new' => _x('新規登録', 'TEST'),
        'add_new_item' => __('TESTを登録'),
        'edit_item' => __('TESTを編集'),
        'new_item' => __('新しいTEST'),
        'view_item' => __('TESTページを表示'),
        'search_items' => __('TESTを探す'),
        'not_found' =>  __('TESTはありません'),
        'not_found_in_trash' => __('ゴミ箱にTESTはありません'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
		'show_in_rest' => true,
		'rest_base' => 'tests',
        'supports' =>  array('title','custom_field'),
        'has_archive' => true
    );
    register_post_type('test',$args);
}
?>