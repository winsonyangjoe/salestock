<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div class="section">
                        <h4 class="header"><i class="mdi-action-work"></i> Create Voucher</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <?php echo validation_errors(); ?>
                            <div class="card-panel">
                              <div class="row">
                                <?php echo form_open('', ['class' => "col s12"]); ?>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="name" name='name' type="text" value="<?php echo set_value('name'); ?>">
                                      <label for="name">Name Voucher</label>
                                    </div>                                  
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s6">
                                      <input placeholder="2015-01-01" id="date-demo1" name="date_from" type="text" class="">
                                      <label for="date_demo1" class="active">Date from</label>
                                    </div>
                                    <div class="input-field col s6">
                                      <input placeholder="2015-01-01" id="date-demo2" name="date_until" type="text" class="">
                                      <label for="date_demo2" class="active">Date until</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="quantity" name='quantity' type="tel">
                                      <label for="quantity">Quantity</label>
                                    </div>                                  
                                  </div>                                  
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <select id='role' name='type'>
                                        <option value=''></option>
                                        <option value='percentage'>Percentage</option>
                                        <option value='amount'>Amount</option>
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