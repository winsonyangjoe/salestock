<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $pagination_html = $this->pagination->create_links(); ?>
<div class="row">
    <div class="col s12 m6 l6 left-align valign-wrapper" style='height: 63px;'>
        <div class="dataTables_info" role="status" aria-live="polite"><?php if ($this->pagination->get_total_rows() && isset($count) && $count && $this->pagination->cur_page) { ?>Showing <?php echo ($result_index = ($this->pagination->cur_page - 1) * $this->pagination->per_page + 1);?> to <?php echo $result_index + $count - 1; ?> of <?php echo html_escape($this->pagination->get_total_rows());?> entries<?php } ?></div>
    </div>
    <div class="col s12 m6 l6 right-align">
        <?php echo $pagination_html; ?>
    </div>
</div>