<?php
$header_title = isset($header_title) ? $header_title : '';
$active_modul = isset($active_modul) ? $active_modul : 'none';
$detail = isset($detail) ? $detail : FALSE;
//var_dump($id_parent); exit();
//var_dump($detail->status_approval);exit();
?>

<div class="row">
    <div class="col-md-12">

        <form id="frm-cuti" enctype="multipart/form-data" method="POST" class="form-horizontal">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title"><strong><?php echo $header_title; ?></strong></h3>
                </div>
                <div class="panel-body">
                    <p><?php echo load_partial("back_end/shared/attention_message"); ?></p>
                </div>
                <div class="panel-body">
                   <input type="hidden" name="id_peg" id="txt-id_peg" class="form-control" value="<?php echo $detail ? $detail->id_peg : $id_peg; ?>"> 
                   <input type="hidden" name="id_skpd" id="txt-id_skpd" class="form-control" value="<?php echo $id_parent ?>"> 
                   <input type="hidden" name="status_approval" id="txt-status_approval" class="form-control" value="<?php echo $detail ? $detail->status_approval : ""; ?>"> 
                   <input type="hidden" name="id_list" id="txt-id_list" class="form-control" value="<?php echo $detail ? $detail->id_list : null ?>"> 
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Jenis Cuti *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <select id="slc-cuti" class="form-control select2-basic" name="id_cuti">
                            </select>
                            <span class="help-block">Pilih Cuti.<br />Masukkan kata kunci pada kotak inputan kemudian pilih Cuti yang dimaksud.</span>
                        </div>
                    </div>
                    
                   <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Tgl. Cuti *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                <input id="txt-tgl_cuti" type="text" name="tgl_cuti" class="form-control datepicker" value="<?php echo $detail ? $detail->tgl_cuti : ""; ?>">
                            </div>                                            
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Lama Cuti </label>
                        <div class="col-md-6 col-xs-12">
                            <input type="text" name="lama_cuti" id="txt-lama_cuti" class="form-control" value="<?php echo $detail ? $detail->lama_cuti : ""; ?>">                               
                            <span class="help-block"></span>
                        </div>
                    </div>
                    

                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn-primary btn pull-right">Submit</button>
                    <a href="<?php echo base_url("back_end/" . $active_modul . "/index"); ?>" class="btn-default btn">Batal / Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>