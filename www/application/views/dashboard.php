<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <div class="section">
                        <h4 class="header"><i class="mdi-action-face-unlock"></i> Sales</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <p>
                                <a href="<?php echo site_url('sales'); ?>" class="btn waves-effect waves-light blue">List</a>
                                <a href="<?php echo site_url('sales/track'); ?>" class="btn waves-effect waves-light indigo">Track</a>
                            </p>
                          </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="section">
                        <h4 class="header"><i class="mdi-action-account-circle"></i> User</h4>
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <p>
                                <a href="<?php echo site_url('user'); ?>" class="btn waves-effect waves-light blue">List</a>
                                <a href="<?php echo site_url('user/create'); ?>" class="btn waves-effect waves-light teal">Create</a>
                            </p>
                          </div>
                        </div>
                    </div>

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->