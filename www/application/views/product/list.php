<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div class="section">
                        <h4 class="header"><i class="mdi-action-work"></i> List Product</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <?php $this->load->view('success-error-message'); ?>
                            <div class="row">
                              <div class="col s12 m6 l6 valign-wrapper" style='height: 61px;'>
                                <a href="<?php echo site_url('product/create_product'); ?>" class="btn waves-effect waves-light blue">Create</a>
                              </div>
                            </div>
                            <table class="striped">
                              <thead>
                                <tr>
                                    <th data-field="id">Id</th>
                                    <th data-field="name">Name</th>
                                    <th data-field="name">Quantity</th>
                                    <th data-field="name">Price</th>
                                    <th data-field="action"></th>
                                </tr>
                              </thead>
                                <tbody>
                                <?php foreach ($roles as $role) { ?>
                                <tr>
                                  <td><?php echo html_escape($role['id']); ?></td>
                                  <td><?php echo html_escape($role['name']); ?></td>
                                  <td><?php echo html_escape($role['quantity']); ?></td>
                                  <td><?php echo html_escape($role['price']); ?></td>
                                  <td>
                                    <?php echo form_open('product/delete_product', ['style' => 'display:inline;']); ?>
                                      <input type='hidden' name='id' value='<?php echo html_escape($role['id']); ?>'>
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