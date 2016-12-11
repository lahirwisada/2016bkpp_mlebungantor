<?php
$id_diklat = isset($id_diklat) && $id_diklat ? $id_diklat : "";
$detail_diklat = isset($detail_diklat) ? $detail_diklat : FALSE;
?>

<script type="text/javascript">

    var formDetailKegiatan = {
        data: {
            nama_kegiatan: null,
            tgl_kegiatan: null,
            id_mesin: null,
            
        },
        collectData: function () {
            var self = this;

            self.data.id_mesin = $("#slc-mesin").val();
            self.data.nama_kegiatan = $("#txt-nama_kegiatan").val();
            self.data.tgl_kegiatan = $("#txt-tgl_kegiatan").val();
            

            return self.data;
        }
    };

    $(document).ready(function () {

        $("#frm-kegiatan").submit(function (e) {
            e.preventDefault();

            var data = formDetailKegiatan.collectData();

            $.ajax({
                url: "<?php echo base_url('back_end/kegiatan/detail'); ?>",
                data: data,
                method: 'POST',
                success: function (response, textStatus) {
                    window.location.href = "<?php echo base_url("back_end/kegiatan/index"); ?>";
                },
                complete: function () {

                }
            });

            return false;
        });
    });
</script>