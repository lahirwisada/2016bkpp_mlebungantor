<?php
$header_title = isset($header_title) ? $header_title : '';
$active_modul = isset($active_modul) ? $active_modul : 'none';
$detail = isset($detail) ? $detail : FALSE;
$id_diklat = isset($nama_mesin) ? $nama_mesin : 0;
//var_dump($detail);
?>

<div class="row">
    <div class="col-md-12">

        <form id="frm-kegiatan" enctype="multipart/form-data" method="POST" class="form-horizontal">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Formulir <strong><?php echo $header_title; ?></strong></h3>
                </div>
                <div class="panel-body">
                    <p><?php echo load_partial("back_end/shared/attention_message"); ?></p>
                </div>
                <div class="panel-body">
                    

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nama Kegiatan *</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="text" name="nama_kegiatan" id="txt-nama_kegiatan" class="form-control" value="<?php echo $detail ? $detail->nama_kegiatan : ""; ?>">                               
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Tgl. Kegiatan *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                <input id="txt-tgl_kegiatan" type="text" name="tgl_kegiatan" class="form-control datepicker" value="<?php echo $detail ? $detail->tgl_kegiatan : ""; ?>">
                            </div>                                            
                            <span class="help-block"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Lokasi Mesin *</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <select id="slc-mesin" class="form-control select2-basic" name="id_mesin">
                            </select>
                            <span class="help-block">Pilih Golongan Saat ini.<br />Masukkan kata kunci pada kotak inputan kemudian pilih Golongan yang dimaksud.</span>
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