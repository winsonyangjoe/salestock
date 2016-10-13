<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div class="section">
                        <style>
                        .sort-button:hover {
                            background-color: #f2f2f2;
                            cursor: pointer;
                        }

                        .sort-button > a {
                            display: block;
                            color: #000;
                        }
                        </style>
                        <h4 class="header"><i class="mdi-action-account-circle"></i> User</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <?php $this->load->view('success-error-message'); ?>
                            <div class="row">
                              <div class="col s12 m6 l6 valign-wrapper" style='height: 61px;'>
                                <a href="<?php echo site_url('user/create'); ?>" class="btn waves-effect waves-light blue">Create</a>
                              </div>
                              <div class="col s12 m6 l6">
                                <div id="data-table-simple_filter" class="dataTables_filter">
                                  <?php echo form_open(); ?>
                                  <div class="row">
                                    <div class="col s6 m8 l9">
                                      <input type="search" class="" name='search' placeholder="Search" aria-controls="data-table-simple">
                                    </div>
                                    <div class="col s6 m4 l3 valign-wrapper" style="height: 61px;">
                                      <button type='submit' name='submit' value='search' class="btn waves-effect waves-light teal">Search</button>
                                    </div>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <?php echo $meta_table = $this->load->view('meta-table', ['count' => count($users)], true); ?>
                            <table class="striped">
                              <thead>
                                <tr>
                                    <th data-field="id" class='sort-button'>
                                        <a href='<?php echo current_url_appended_params(['order' => generate_order_token(toggle_order('id', $order))]); ?>'>
                                            Id
                                            <?php $this->load->view('sort-arrows', ['field' => 'id', 'order' => $order]); ?>
                                        </a>
                                    </th>
                                    <th data-field="name" class='sort-button'>
                                        <a href='<?php echo current_url_appended_params(['order' => generate_order_token(toggle_order('name', $order))]); ?>'>
                                            Name
                                            <?php $this->load->view('sort-arrows', ['field' => 'name', 'order' => $order]); ?>
                                        </a>
                                    </th>
                                    <th data-field="email" class='sort-button'>
                                        <a href='<?php echo current_url_appended_params(['order' => generate_order_token(toggle_order('email', $order))]); ?>'>
                                            Email
                                            <?php $this->load->view('sort-arrows', ['field' => 'email', 'order' => $order]); ?>
                                        </a>
                                    </th>
                                    <th data-field="action"></th>
                                </tr>
                              </thead>
                                <tbody>
                                <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td><?php echo html_escape($user['id']); ?></td>
                                    <td><?php echo html_escape($user['name']); ?></td>
                                    <td><?php echo html_escape($user['email']); ?></td>
                                    <td><a href="<?php echo site_url('user/edit/' . $user['id']); ?>" class="btn waves-effect waves-light blue">Edit</a></td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            </table>
                            <?php echo $meta_table; ?>
                          </div>
                        </div>
                    </div>

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->