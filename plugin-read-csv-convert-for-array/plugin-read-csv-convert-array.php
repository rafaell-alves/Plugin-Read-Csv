<?php
/*
    Plugin Name: Plugin Read Csv And Convert To Array
    Author : Rafael Luis Alves
    Description: Plugin read csv and transform to array
    Version:1.0
*/

if(!defined('ABSPATH')){
    exit("ACESSO NEGADO");
}

define("DIRETORIO_RAIZ_TOP_AUTORES",plugin_dir_path(__FILE__ ));
require_once(DIRETORIO_RAIZ_TOP_AUTORES.'shortcodes/plugin-read-csv-convert-array-shortcode.php');

add_action('the_content','csv_read_function_code');