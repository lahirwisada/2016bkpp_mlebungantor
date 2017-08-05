<?php
$detail_kegiatan = isset($detail_kegiatan) ? $detail_kegiatan : FALSE;
$header_title = isset($header_title) ? $header_title : '';
$active_modul = isset($active_modul) ? $active_modul : 'none';
$detail = isset($detail) ? $detail : FALSE;
$id_kegiatan = isset($id_kegiatan) ? $id_kegiatan : 0;
?>

<div class="row">
    <div class="col-md-12">

        <form id="frm-daftar-peserta-kegiatan" partclass="<?php echo $id_kegiatan; ?>" enctype="multipart/form-data" method="POST" class="form-horizontal">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Formulir <strong><?php echo $header_title; ?> <?php echo $detail_kegiatan->nama_kegiatan; ?> Tanggal Kegiatan <?php echo $detail_kegiatan->tgl_kegiatan; ?></strong></h3>
                </div>
                <div class="panel-body">
                    <p><?php echo load_partial("back_end/shared/attention_message"); ?></p>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Nama *</label>
                        <div class="col-md-6 col-xs-12">
                            <input type="hidden" name="id_kegiatan" id="txt-id_kegiatan" value="<?php echo $detail_kegiatan ? $detail_kegiatan->id_kegiatan : ""; ?>">
                            <select id="slc-peg" class="form-control select2-basic" name="id_pegawai">
                            </select>                           
                            <span class="help-block"></span>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn-primary btn pull-right">Submit</button>
                    <a href="<?php echo base_url("back_end/" . $active_modul . "/index")."/".($detail_kegiatan ? $detail_kegiatan->id_kegiatan : 0); ?>" class="btn-default btn">Batal / Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>