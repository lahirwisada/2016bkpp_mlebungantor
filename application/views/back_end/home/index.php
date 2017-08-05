<?php
$header_title = isset($header_title) ? $header_title : '';
?>
<div class="row">
    <div class="col-md-12">

        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading ui-draggable-handle">                                
                <h3 class="panel-title"><?php echo $header_title; ?></h3>
            </div>
            <div class="panel-body">
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="col-md-12 clearfix">
            <h4 class="pull-left" style="margin: 0 0 20px;">Pendapatan</h4>
            <!--                        <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">this week</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">previous week</a>
                                    </div>-->
        </div>
        <div class="col-md-12">
            <div id="plot-pendapatan" style="height:250px;"></div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="col-md-12 clearfix">
            <h4 class="pull-left" style="margin: 0 0 20px;">Pendaftaran Penghuni</h4>
            <!--                        <div class="btn-group pull-right">
                                        <a href="javascript:;" class="btn btn-default btn-sm active">2012</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2011</a>
                                        <a href="javascript:;" class="btn btn-default btn-sm ">2010</a>
                                    </div>-->
        </div>
        <div class="col-md-12">
            <div id="plot-penghuni" style="height:250px;"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">

        <!-- START SALES & EVENTS BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Sales & Event</h3>
                    <span>Event "Purchase Button"</span>
                </div>
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                        </ul>                                        
                    </li>                                        
                </ul>
            </div>
            <div class="panel-body padding-0">
                <div class="chart-holder" id="dashboard-line-1" style="height: 200px;"></div>
            </div>
        </div>
        <!-- END SALES & EVENTS BLOCK -->

    </div>
    <div class="col-md-4">

        <!-- START USERS ACTIVITY BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Users Activity</h3>
                    <span>Users vs returning</span>
                </div>                                    
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                        </ul>                                        
                    </li>                                        
                </ul>                                    
            </div>                                
            <div class="panel-body padding-0">
                <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
            </div>                                    
        </div>
        <!-- END USERS ACTIVITY BLOCK -->

    </div>


    <div class="col-md-4">

        <!-- START PROJECTS BLOCK -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title-box">
                    <h3>Diklat</h3>
                    <span>Diklat Saat ini</span>
                </div>                                    
                <ul class="panel-controls" style="margin-top: 2px;">
                    <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                        <ul class="dropdown-menu">
                            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                        </ul>                                        
                    </li>                                        
                </ul>
            </div>
            <div class="panel-body panel-body-table">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50%">Diklat</th>
                                <th width="20%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Diklat PIM III</strong></td>
                                <td><span class="label label-info">Perencanaan</span></td>
                            </tr>
                            <tr>
                                <td><strong>Diklat PBJ</strong></td>
                                <td><span class="label label-success">Evaluasi</span></td>
                            </tr>                                                
                            <tr>
                                <td><strong>Prajab PNS Gol III</strong></td>
                                <td><span class="label label-info">Perencanaan</span></td>
                            </tr>
                            <tr>
                                <td><strong>TOT PKT</strong></td>
                                <td><span class="label label-success">Evaluasi</span></td>
                            </tr>
                            <tr>
                                <td><strong>Sertifikasi</strong></td>
                                <td><span class="label label-warning">Pelaksanaan</span></td>
                            </tr>                                                
                            <tr>
                                <td><strong>UKS</strong></td>
                                <td><span class="label label-success">Evaluasi</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- END PROJECTS BLOCK -->

    </div>
</div>
