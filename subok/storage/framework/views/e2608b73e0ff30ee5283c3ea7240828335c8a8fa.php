<?php $__env->startSection('title'); ?>
    <title> Admin - Accreditation Requirement</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <section id="container">
        <aside>
            <div id="sidebar" class="nav-collapse">
                <?php echo $__env->make('Layout.AdminSideNav',['Title' => 'Accreditation Requirement'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="adv-table editable-table ">
                                    <div class="clearfix">
                                        <div class="btn-group">
                                            <button id="editable-sample_new" class="btn btn-success add" data-toggle="modal" href="#Add">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                        </div>
                                        <div class="btn-group pull-right">
                                            <button class="btn btn-default " id="btnprint">Print <i class="fa fa-print"></i></button>
                                        </div>
                                    </div>
                                    <div class="space15"></div>
                                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                        <thead>
                                            <tr>
                                                <th>Requirement Code</th>
                                                <th>Requirement Name</th>
                                                <th>Requirement Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr >
                                                  <td><?php echo e($row); ?></td>
                                                  <td><?php echo e($row); ?></td>
                                                  <td><?php echo e($row); ?></td>
                                                  <td><?php echo e($row); ?></td>
                                              </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Requirement Code</th>
                                                <th>Requirement Name</th>
                                                <th>Requirement Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->
        <!--right sidebar start-->
        <div class="right-sidebar">
            <div class="right-stat-bar">
                <ul class="right-side-accordion">
                    <li class="widget-collapsible">
                        <ul class="widget-container">
                            <li>
                                <div class="prog-row side-mini-stat clearfix">

                                    <div class="side-mini-graph">
                                        <div class="target-sell">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--right sidebar end-->

    </section>
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Accreditation Requirement</h4>
                </div>
                <div class="modal-body">
                    <form method="post" id="form-data" action="/Admin/AccreditationRequirement">
                        <?php echo e(csrf_field()); ?>

                        <fieldset>
                            <div class="row" style="padding-left:15px;padding-top:10px">
                                <div class="col-lg-6">
                                    Accreditation Requirement Name <input type="text" class="form-control"  placeholder="ex. Organization Name" id="txtreqname">
                                </div>
                                <div class="col-lg-8 " style="padding-top:10px">
                                    Accreditation Requirement Description<textarea class="form-control" placeholder="ex. Every organization must have unique name" rows="6" style="margin: 0px 202.5px 0px 0px;resize:none" id="txtreqdesc"></textarea>
                                </div>
                            </div>                        
                        </fieldset>                            
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" id="close" type="button">Close</button>
                    <button class="btn btn-success " id="submit-data" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/Admin/AccreditationRequirement.js"></script>
    <script>
        jQuery(document).ready(function() {
            EditableTable.init();
        });

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.Admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>