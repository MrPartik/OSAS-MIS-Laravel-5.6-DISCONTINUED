@extends('Layout.Admin')
@section('title')
    <title> Admin - Accreditation Requirement</title>
@endsection
@section('content')
        <section id="container">
        <aside>
            <div id="sidebar" class="nav-collapse">
                @include('Layout.AdminSideNav',['Title' => 'Accreditation Requirement'])
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
                                            @foreach ($list as $row)
                                                <tr>
                                                    <td>{{ $row->OrgAccrDetail_CODE }}</td>                                                  
                                                    <td>{{ $row->OrgAccrDetail_NAME }}</td>                                                  
                                                    <td>{{ $row->OrgAccrDetail_DESC }}</td>
                                                    @if($row->OrgAccrDetail_DISPLAY_STAT == 'Active')
                                                        <td style='width:180px'>
                                                            <center>
                                                                <a class='btn btn-success edit' href='javascript:;'><i class='fa fa-edit'></i></a>
                                                                <a class='btn btn-danger delete' href='javascript:;'><i class='fa fa-rotate-right'></i></a>	
                                                            </center>
                                                        </td>                                                      
                                                    @else
                                                        <td style='width:180px'>
                                                            <center>
                                                                <a class='btn btn-info retrieve' href='javascript:;'><i class='fa fa-rotate-left'></i></a>	
                                                            </center>
                                                        </td>
                                                    @endif
                                                          
                                                    
                                                    
                                              </tr>
                                            @endforeach                                                                                   
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
                        @include('Messages.Messages')
                        <a id="add-without-image" class="btn btn-info  btn-sm" href="javascript:;">Imageless</a>

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
                {!! Form::open(['action' => 'Admin_AccreditationRequirement@store','method' => 'post' ]) !!}
                    <div class="modal-body">
                        {{Form::label('title','Accreditation Requirement Name')}}
                        {{Form::text('txtname','',['class' => 'form-control', 'placeholder' => 'ex. Organization Name' ])}}
                        {{Form::label('title','Accreditation Requirement Description')}}
                        {{Form::textarea('txtdesc','',['style' => 'margin: 0px 202.5px 0px 0px;resize:none','rows' => '6','class' => 'form-control', 'placeholder' => 'ex. Every organization must have unique name' ])}}
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" id="close" type="button">Close</button>
                        {{Form::Submit('Save',['class' => 'btn btn-success' ])}}
                    </div>
                
                {!! Form::close() !!}
                
                
<!--
                <form method="post" id="form-data" action="{{URL::to('/Admin/Insert_AccreditationRequirement')}}">
                    <div class="modal-body">
                            {{csrf_field()}}                        
                            <fieldset>
                                <div class="row" style="padding-left:15px;padding-top:10px">
                                    <div class="col-lg-6">
                                        Accreditation Requirement Name <input type="text" class="form-control"  placeholder="ex. Organization Name" name='txtreqname' id="txtreqname">
                                    </div>
                                    <div class="col-lg-8 " style="padding-top:10px">
                                        Accreditation Requirement Description<textarea class="form-control" placeholder="ex. Every organization must have unique name" rows="6" style="margin: 0px 202.5px 0px 0px;resize:none" name="txtreqdesc" id="txtreqdesc"></textarea>
                                    </div>
                                </div>                        
                            </fieldset>                            
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" id="close" type="button">Close</button>
                        <button class="btn btn-success " id="submit-data" type="submit">Save</button>
                    </div>
                </form>
-->
            </div>
        </div>
    </div>
    @include('Layout.DefaultFooterLinks')    
    <script src="{{asset('Admin/AccreditationRequirement.js')}}"></script>
    <script>
        
        jQuery(document).ready(function() {
            EditableTable.init();
                        
        });

    </script>
@endsection