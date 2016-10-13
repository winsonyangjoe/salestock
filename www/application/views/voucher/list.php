<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div class="section">
                        <h4 class="header"><i class="mdi-action-work"></i> List Voucher</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <?php $this->load->view('success-error-message'); ?>
                            <div class="row">
                              <div class="col s12 m6 l6 valign-wrapper" style='height: 61px;'>
                                <a href="<?php echo site_url('voucher/create_product'); ?>" class="btn waves-effect waves-light blue">Create</a>
                              </div>
                            </div>
                            <table class="striped">
                              <thead>
                                <tr>
                                    <th data-field="id">Id</th>
                                    <th data-field="name">Name</th>
                                    <th data-field="name">Date from</th>
                                    <th data-field="name">Date until</th>
                                    <th data-field="name">Quantity</th>
                                    <th data-field="name">Type</th>
                                    <th data-field="action"></th>
                                </tr>
                              </thead>
                                <tbody>
                                <?php foreach ($voucher as $voucher) { ?>
                                <tr>
                                  <td><?php echo html_escape($voucher['id']); ?></td>
                                  <td><?php echo html_escape($voucher['name']); ?></td>
                                  <td><?php echo html_escape($voucher['date_from']); ?></td>
                                  <td><?php echo html_escape($voucher['date_until']); ?></td>
                                  <td><?php echo html_escape($voucher['quantity']); ?></td>
                                  <td><?php echo html_escape($voucher['type']); ?></td>
                                  <td>
                                    <?php echo form_open('voucher/delete_voucher', ['style' => 'display:inline;']); ?>
                                      <input type='hidden' name='id' value='<?php echo html_escape($voucher['id']); ?>'>
                                      <button type='submit' class="btn-floating waves-effect waves-light red" onclick="return 'delete' == prompt('Type delete to confirm');"><i class="mdi-content-clear"></i></button>
                                    </form>
                                  </td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->