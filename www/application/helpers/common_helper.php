<?php defined('BASEPATH') OR exit('No direct script access allowed');

function generate_order_token($order) {
    return (isset($order['field']) ? trim($order['field']) : '') .
        (isset($order['sort']) && in_array(trim(strtolower($order['sort'])), ['asc', 'desc']) ? '-' . trim(strtolower($order['sort'])) : '');
}

function parse_order_token($str) {
    if (!trim($str)) {
        return null;
    }

    $tmp = explode('-', $str);
    if (!$tmp) {
        return null;
    }

    $to_return = [];
    if (count($tmp) >= 1) {
        $to_return['field'] = $tmp[0];
    }

    $sort = trim(strtolower($tmp[1]));
    if (in_array($sort, ['asc', 'desc'])) {
        $to_return['sort'] = $sort;
    }

    return $to_return;
}

function toggle_order($field, $order) {
    if (!$order || !isset($order['field']) || $order['field'] != $field) {
        return ['field' => $field, 'sort' => 'asc'];
    }

    if (isset($order['sort']) && 'asc' == trim(strtolower($order['sort']))) {
        $order['sort'] = 'desc';
        return $order;
    }

    return null;
}

function current_url_appended_params($params) {
    $current_url = current_url();
    $query = parse_url($current_url, PHP_URL_QUERY);
    return $current_url . (trim($query) ? '&' : '?') . http_build_query($params);
}