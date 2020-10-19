<?php
//コードを追加する際は誰がどこを触ったのかコメントアウトの入力をお願いします。
// 徳追加しました、テーマに機能を追加
function digital_letter_setup() {
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'digital_letter_setup' );

// やまぐち入力しました（9/20)

function digital_letter_init() {
    register_post_type('event',[ //itemsという投稿タイプを追加(英語)
        "labels" => [
            "name" => "行事画像"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 10,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-universal-access
        ",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
       
   // add_action('init', 'new_post_type');処理がひとまとめなので徳がコメントアウト9/21
    register_post_type('new_info',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "新着情報"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 15,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-star-filled",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    //みー追加しました（9/21）
    register_post_type('notice',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "お知らせ"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 20,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-bell",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    //みー追加しました②（9/21）
    register_post_type('roseclass',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "ミッキー"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 25,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-carrot",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    register_post_type('sakuraclass',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "ラビー"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 30,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-carrot",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    register_post_type('sunflowerclass',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "ドナルド"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 30,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-carrot",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    register_post_type('lilyclass',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "シープ"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 35,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-carrot",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    register_post_type('violetclass',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "バンビ１歳"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 40,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-carrot",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    register_post_type('valleyclass',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "バンビ０歳"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 45,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-carrot",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    register_post_type('menu',[ //portfolioという投稿タイプを追加(英語)
        "labels" => [
            "name" => "今月の献立表"//管理画面に表示される名前
        ],
        "public" => true,//公開を許可
        "has_archive" => true,//アーカイブの作成を許可
        "hierarchical" => true,//継承を持たせる
        "menu_position" => 50,//メニューバーに表示される場所。
        "menu_icon" => "dashicons-food",//dashicon
        "show_in_rest" =>true,//新エディタ対応
    ]);
    
}
add_action( 'init', 'digital_letter_init' );

// やまぐち入力しました（9/20）ここまで
 
//徳門追加しましたimg読み込みのため
function digital_letter_scripts(){
    wp_enqueue_style('theme-style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','digital_letter_scripts');

?>
