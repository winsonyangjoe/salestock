<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div class="section">
                        <h4 class="header"><i class="mdi-action-work"></i> Create Product</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <?php echo validation_errors(); ?>
                            <div class="card-panel">
                              <div class="row">
                                <?php echo form_open_multipart('', ['class' => "col s12"]); ?>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="name" name='name' type="text" value="<?php echo set_value('name'); ?>">
                                      <label for="name">Name Product</label>
                                    </div>                                  
                                  </div>
                                  <div class="row">
                                    <div class="file-field input-field">
                                      <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="userfile">
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="sku" name='sku' type="text" value="<?php echo set_value('sku'); ?>">
                                      <label for="sku">SKU number</label>
                                    </div>                                  
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="meta" name='meta' type="text">
                                      <label for="meta">Meta data</label>
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
                                      <input id="price" name='price' type="tel">
                                      <label for="price">Price</label>
                                    </div>                                  
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                      <label for="description">Description</label>
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