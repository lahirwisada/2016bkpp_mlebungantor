<?php
$id_mesin = isset($id_mesin) && $id_mesin ? $id_mesin : "";
$lokasi_mesin = isset($lokasi_mesin) ? $lokasi_mesin : FALSE;
?>

<script type="text/javascript">

    var formpegawai = {
        data: {
            id_peg: null,
            nama_peg: null,
            
        },
        collectData: function () {
            var self = this;

            self.data.id_peg = $("#txt-id_peg").val();
            self.data.nama_peg = $("#txt-nama_peg").val();
            

            return self.data;
        }
    };

    $(document).ready(function () {

        $("#frm-pegawai").submit(function (e) {
            e.preventDefault();

            var data = formpegawai.collectData();

            $.ajax({
                url: "<?php echo base_url('back_end/ab_pegawai/detail'); ?>",
                data: data,
                method: 'POST',
                success: function (response, textStatus) {
                    window.location.href = "<?php echo base_url("back_end/ab_pegawai/index"); ?>";
                },
                complete: function () {

                }
            });

            return false;
        });
    });
</script>