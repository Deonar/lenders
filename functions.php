<?php
/**
 * Enqueue scripts and styles.
 */
//Off admin bar
show_admin_bar( false );

function lenders_scripts() {
    //Style
    wp_enqueue_style( 'googleFont', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600&display=swap&subset=cyrillic');
    wp_enqueue_style( 'popup', get_template_directory_uri() .  '/assets/libs/popup/magnific-popup.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() .  '/assets/libs/animate/animate.min.css');
    wp_enqueue_style( 'slick-css', get_template_directory_uri() .  '/assets/libs/slick/slick.css');
    wp_enqueue_style( 'jquery-ui-theme-css', get_template_directory_uri() .  '/assets/libs/jquery-ui/jquery-ui.theme.min.css');
    wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() .  '/assets/libs/jquery-ui/jquery-ui.min.css');
   
    wp_enqueue_style( 'selectize-css', get_template_directory_uri() .  '/assets/libs/selectize/css/selectize.css');
    wp_enqueue_style( 'datepicker-css', get_template_directory_uri() .  '/assets/libs/datepicker/css/datepicker.min.css');
    
    wp_enqueue_style( 'main', get_template_directory_uri() .  '/assets/css/main.min.css' );
    
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );


    //Scripts//
    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js');
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/libs/slick/slick.min.js');
    wp_enqueue_script( 'selectize', get_template_directory_uri() . '/assets/libs/selectize/js/standalone/selectize.min.js');
    wp_enqueue_script( 'scrollbar', get_template_directory_uri() . '/assets/libs/scrollbar/scrollbar.js'); 

   
    wp_enqueue_script( 'jquery-mask', get_template_directory_uri() . '/assets/libs/jquery-mask/jquery.mask.min.js');
    wp_enqueue_script( 'popup-js', get_template_directory_uri() . '/assets/libs/popup/jquery.magnific-popup.min.js');

    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/libs/jquery-ui/jquery-ui.min.js');
    wp_enqueue_script( 'jquery-ui-touch', get_template_directory_uri() . '/assets/libs/jquery-ui/jquery.ui.touch.min.js');   
    //Datepicker
    wp_enqueue_script( 'datepicker-js', get_template_directory_uri() . '/assets/libs/datepicker/js/datepicker.min.js' );

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/common.js');

     wp_localize_script('main-js', 'ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));

}

add_action( 'wp_enqueue_scripts', 'lenders_scripts' );

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'main-menu' => 'Основное меню',
    'sub-menu' => 'Подменю',
) );


/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews() {

/* ------------ Настройки -------------- */
$meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
$who_count      = 0;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
$exclude_bots   = 0;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

global $user_ID, $post;
    if(is_singular()) {
        $id = (int)$post->ID;
        static $post_views = false;
        if($post_views) return true; // чтобы 1 раз за поток
        $post_views = (int)get_post_meta($id,$meta_key, true);
        $should_count = false;
        switch( (int)$who_count ) {
            case 0: $should_count = true;
                break;
            case 1:
                if( (int)$user_ID == 0 )
                    $should_count = true;
                break;
            case 2:
                if( (int)$user_ID > 0 )
                    $should_count = true;
                break;
        }
        if( (int)$exclude_bots==1 && $should_count ){
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
            if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
                $should_count = false;
        }

        if($should_count)
            if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
    }
    return true;
}

/**
* Custom fields
*/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Основные настройки сайта',
        'menu_title'    => 'Основные настройки сайта',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

add_action( 'init', 'cp_change_post_object' );

function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Вопросы и ответы';
        $labels->singular_name = 'Вопросы и ответы';
        $labels->add_new = 'Добавить';
        $labels->add_new_item = 'Добавить';
        $labels->edit_item = 'Редактировать';
        $labels->new_item = 'Вопросы и ответы';
        $labels->view_item = 'Посмотреть';
        $labels->search_items = 'Найти';
        $labels->not_found = 'Не найдено';
        $labels->not_found_in_trash = 'Не найдено в корзине';
        $labels->all_items = 'Вопросы и ответы';
        $labels->menu_name = 'Вопросы и ответы';
        $labels->name_admin_bar = 'Вопросы и ответы';
    $get_post_type->menu_icon = 'dashicons-admin-comments';
}

// Search City
add_action('wp_ajax_searchCity', 'searchCity');
add_action('wp_ajax_nopriv_searchCity', 'searchCity');

function searchCity(){

    global $wpdb;

    if ($_POST['cities']) {
        $cities = $_POST['cities'];
    }

    $respons = $wpdb->get_results( 
        "SELECT cities.name AS cityName, regions.name AS regionName FROM cities INNER JOIN regions ON cities.region_id = regions.id WHERE cities.name LIKE '" . $cities . "%'  ORDER BY cities.population DESC LIMIT 10", 'ARRAY_A'
     );

    foreach($respons as $item){
        echo "\n<li class='selectCity__item' data-city='".$item["cityName"]."' data-region='".$item["regionName"]."'>".$item["cityName"]." ( ".$item["regionName"]." )</li>";
    }

    die();

}

// Search Region
add_action('wp_ajax_searchRegions', 'searchRegions');
add_action('wp_ajax_nopriv_searchRegions', 'searchRegions');

function searchRegions(){

    global $wpdb;

    if ($_POST['regions']) {
        $regions = $_POST['regions'];
    }

    $respons = $wpdb->get_results( 
        "SELECT name FROM regions WHERE name LIKE '" . $regions . "%' ORDER BY population DESC LIMIT 10", 'ARRAY_A'
     );

    foreach($respons as $item){
        echo "\n<li class='ajax-search__item' data-region='".$item["name"]."'>".$item["name"]."</li>";
    }

    die();

}

// Search City
add_action('wp_ajax_searchCityForm', 'searchCityForm');
add_action('wp_ajax_nopriv_searchCityForm', 'searchCityForm');

function searchCityForm(){

    global $wpdb;

    if ($_POST['cities'] && $_POST['region']) {
        $cities = $_POST['cities'];
        $region = $_POST['region'];
        $respons = $wpdb->get_results( 
            "SELECT cities.name AS cityName, regions.name AS regionName FROM cities INNER JOIN regions ON cities.region_id = regions.id WHERE regions.name = '" . $region . "' AND cities.name LIKE '" . $cities . "%'  ORDER BY cities.population DESC LIMIT 10", 'ARRAY_A'
         );
    } elseif ($_POST['cities']) {
        $cities = $_POST['cities'];
        $respons = $wpdb->get_results( 
        "SELECT cities.name AS cityName, regions.name AS regionName FROM cities INNER JOIN regions ON cities.region_id = regions.id WHERE cities.name LIKE '" . $cities . "%'  ORDER BY cities.population DESC LIMIT 10", 'ARRAY_A'
        );
    }
    foreach($respons as $item){
        echo "\n<li class='selectCity__item' data-city='".$item["cityName"]."' data-region='".$item["regionName"]."'>".$item["cityName"]." ( ".$item["regionName"]." )</li>";
    }

    die();
}




function make_query($url)
{
    $cURLConnection = curl_init($url);

    curl_setopt($cURLConnection, CURLOPT_URL, $url);
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($cURLConnection);

    curl_close($cURLConnection);

    return $resp;
}
function isLess($name, $prev_value, $new_value)
{
    $obj = (object)[];

    if ($prev_value < $new_value) {
        $isMore = true;
    } else {
        $isMore = false;
    }

    $obj->name = $name;
    $obj->new_value = $new_value;
    $obj->isMore = $isMore;

    return $obj;
}
function getPaperStatus()
{
    $result = [];

    $names = ['EUR', 'USD'];
    $url = 'https://www.cbr-xml-daily.ru/daily_json.js';
    $jsonArrayResponse = json_decode(make_query($url));
    foreach ($names as $key => $value) {
        foreach ($jsonArrayResponse->Valute as $one_k => $one_v) {
            if ($one_k === $value) {
                array_push($result, isLess($one_v->CharCode, $one_v->Previous,  $one_v->Value));
            }
        }
    }
    $btcURL = 'https://apirone.com/api/v1/ticker?currency=btc';
    $btcJsonResponse = json_decode(make_query($btcURL));
    $RUB_LAST_PRICE = $btcJsonResponse->RUB->last;
    array_push($result, isLess('BTC', getPrevValue(1), $RUB_LAST_PRICE));
    updateValue(1, $RUB_LAST_PRICE);

    return $result;
}
function getPrevValue($id){
    global $wpdb;
    return $wpdb->get_results(
        "SELECT * FROM curses prev_curs WHERE id = " . $id );
}
function updateValue($id, $new_value)
{
    global $wpdb;
    return $wpdb->get_results(
        "UPDATE curses SET prev_curs=" . $new_value . " WHERE id = " . $id
    );
}


function jsonDecode($json, $assoc = false)
{
    $ret = json_decode($json, $assoc);
    if ($error = json_last_error())
    {
        $errorReference = [
            JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded.',
            JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON.',
            JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded.',
            JSON_ERROR_SYNTAX => 'Syntax error.',
            JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded.',
            JSON_ERROR_RECURSION => 'One or more recursive references in the value to be encoded.',
            JSON_ERROR_INF_OR_NAN => 'One or more NAN or INF values in the value to be encoded.',
            JSON_ERROR_UNSUPPORTED_TYPE => 'A value of a type that cannot be encoded was given.',
        ];
        $errStr = isset($errorReference[$error]) ? $errorReference[$error] : "Unknown error ($error)";
        echo $errStr;
        throw new \Exception("JSON decode error ($error): $errStr");
    }
    return $ret;
}

// Orders //
add_action('wp_ajax_submitOrder', 'submitOrder');
add_action('wp_ajax_nopriv_submitOrder', 'submitOrder');

function submitOrder()
{

    if (!wp_verify_nonce($_POST['security'], 'submitOrder')){
        wp_die();
    }

    $excludeExtraFields = ['action'];
    $requestData = $_POST;
    foreach ($requestData as $key => $value){
        if (!in_array($key, $excludeExtraFields)){
            $replaceWrongCodeStyle = str_replace('-', '_', $key);
        };
    }


//    var_dump($_POST['client-phone']);


    // $dqew = json_decode($_POST['mainObj'], true);
   
    // echo 'test';
    // var_dump($_POST['mainObj']);
    // echo "string1";
    // var_dump(json_decode($_POST['mainObj'], true));
    // echo "string2";

    // if(wp_verify_nonce( $_POST['checkField'], 'orderCreate')) {


    //     // Создаем массив
    //     $post_data = array(
    //         'post_title'    => "Заявка - " . $addressIndex,
    //         'post_type'     => 'orders',
    //         'post_content'  => '',
    //         'post_status'   => 'publish',
    //         'post_author'   => 1,
    //     );
        
    //     // Вставляем данные в БД
    //     $post_id = wp_insert_post(wp_slash($post_data));

    //     if( is_wp_error($post_id) ){
    //         echo $post_id->get_error_message();
    //     }
    //     else {

    //         $is_updated_field = update_field('order-sum', $addressIndex, $post_id);

    //         if($is_updated_field) {
    //             echo "Заявка принята. Значения полей сохранены.";
    //         }
    //         else {
    //             echo "Заявка принята. Значения полей НЕ сохранены :(";
    //         }

            
    //     }
    // }
    // else {
    //     die('Проверка не пройдена.');
    // }

    // die();
}