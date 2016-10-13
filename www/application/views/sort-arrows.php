<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (isset($order['field']) && isset($field) && $field == $order['field'] && isset($order['sort'])) { ?>
    <?php if ('asc' == $order['sort']) {?><i class="mdi-hardware-keyboard-arrow-up"></i>
    <?php } else if ('desc' == $order['sort']) {?><i class="mdi-hardware-keyboard-arrow-down"></i><?php } ?>
<?php } ?>