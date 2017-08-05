<?php
$header_title = isset($header_title) ? $header_title : '';
$message_error = isset($message_error) ? $message_error : '';
$records = isset($records) ? $records : FALSE;
$field_id = isset($field_id) ? $field_id : FALSE;
$paging_set = isset($paging_set) ? $paging_set : FALSE;
$active_modul = isset($active_modul) ? $active_modul : 'none';
$next_list_number = isset($next_list_number) ? $next_list_number : 1;
?>
<div class="row">
    <div class="col-md-12">

        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading ui-draggable-handle">                                
                <h3 class="panel-title"><?php echo $header_title; ?></h3>
            </div>
            <div class="panel-body">

                
                <div class="block">
                    <div class="dataTables_wrapper no-footer">
                        <div class="table-responsive">
                            <table class="table no-footer" id="DataTables_Table_0">
                                <thead>
                                    <tr role="row">
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Tanggal Absen
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                        <th>
                                            Lokasi
                                        </th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($records != FALSE): ?>
                                        <?php foreach ($records as $key => $record): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $next_list_number; ?>
                                                </td>
                                                <td>
                                                    <?php echo beautify_str($record->nama_peg) ?>
                                                </td>
                                                <td>
                                                    <?php echo show_date_with_format($record->date_attend,"d-m-Y H:i:s","Y-m-d H:i:s") ?>
                                                </td>
                                                <td>
                                                    <?php echo beautify_str($record->nama_status) ?>
                                                </td>
                                                <td>
                                                    <?php echo beautify_str($record->lokasi_mesin) ?>
                                                </td>
                                                <td>
                                                    <div class="btn-group btn-group-sm">
                                                        <a class="clsApprove btn btn-default" href="javascript:void(0);" rel="<?php echo base_url("back_end/" . $active_modul . "/approve") . "/" . $record->id; ?>">Approv</a>
                                                        <a class="clsReject btn btn-default " href="javascript:void(0);" rel="<?php echo base_url("back_end/" . $active_modul . "/reject") . "/" . $record->id; ?>">REJECT</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $next_list_number++; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5"> Kosong / Data tidak ditemukan. </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <?php /** <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries</div> */ ?>
                            <?php
                            echo $paging_set;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>