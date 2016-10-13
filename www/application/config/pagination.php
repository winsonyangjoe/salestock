<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['per_page'] = 5;
$config['use_page_numbers'] = true;
$config['reuse_query_string'] = true;
$config['full_tag_open'] = '<ul class="pagination">';
$config['full_tag_close'] = '</ul>';
$config['next_tag_open'] = '<li class="waves-effect">';
$config['next_link'] = '<i class="mdi-navigation-chevron-right"></i>';
$config['next_tag_close'] = '</li>';
$config['prev_tag_open'] = '<li class="waves-effect">';
$config['prev_link'] = '<i class="mdi-navigation-chevron-left"></i>';
$config['prev_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="waves-effect active"><a href="javascript:void();">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li class="waves-effect">';
$config['num_tag_close'] = '</a></li>';