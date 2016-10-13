<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if ($success = $this->session->flashdata('success')) { ?>
<div class="card green"><div class="card-content white-text"><p><i class="mdi-action-done"></i>
  <?php echo html_escape($success); ?>
</p></div></div>
<?php } ?>
<?php if ($error = $this->session->flashdata('error')) { ?>
<div class="card red"><div class="card-content white-text"><p><i class="mdi-alert-error"></i>
  <?php echo html_escape($error); ?>
</p></div></div>
<?php } ?>