<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div class="section">
                        <h4 class="header"><i class="mdi-action-account-circle"></i> Create User</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <?php echo validation_errors(); ?>
                            <div class="card-panel">
                              <div class="row">
                                <?php echo form_open('', ['class' => 'col s12']); ?>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="name" name='name' type="text">
                                      <label for="name">Name</label>
                                    </div>                                  
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="email" name='email' type="email">
                                      <label for="email">Email</label>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="input-field col s12">
                                      <select id='role' name='role_id'>
                                        <option value=''></option>
                                        <?php foreach ($roles as $role) { ?>
                                        <option value='<?php echo html_escape($role['id']); ?>'><?php echo html_escape($role['name']); ?></option>
                                        <?php } ?>
                                      </select>
                                      <label for="role">Role</label>
                                    </div>
                                  </div>
                                  
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <button class="btn cyan waves-effect waves-light right" type="submit" name="submit" value='submit'>Submit
                                        <i class="mdi-content-send right"></i>
                                      </button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->