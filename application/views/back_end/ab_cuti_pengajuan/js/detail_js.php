<?php
$id_cuti= isset($id_cuti) && $id_cuti ? $id_cuti : "";
//$lokasi_mesin = isset($lokasi_mesin) ? $lokasi_mesin : FALSE;
?>

<script type="text/javascript">

    var formcuti = {
        data: {
            id_peg: null,
            id_skpd: null,
            id_cuti: null,
            tgl_cuti: null,
            lama_cuti: null,
        },
        collectData: function () {
            var self = this;

            self.data.id_peg = $("#txt-id_peg").val();
            self.data.id_list = $("#txt-id_list").val();
            self.data.id_skpd = $("#txt-id_skpd").val();
            self.data.status_approval = $("#txt-status_approval").val();
            self.data.id_cuti = $("#slc-cuti").val();
            self.data.tgl_cuti = $("#txt-tgl_cuti").val();
            self.data.lama_cuti = $("#txt-lama_cuti").val();



            return self.data;
        }
    };

    $(document).ready(function () {

        $("#frm-cuti").submit(function (e) {
            e.preventDefault();

            var data = formcuti.collectData();
//            alert('aaaa');
            $.ajax({
                url: "<?php echo base_url('back_end/ab_cuti_pengajuan/insert'); ?>",
                data: data,
                method: 'POST',
                success: function (response, textStatus) {
                    alert(response);
                    window.location.href = "<?php echo base_url("back_end/ab_cuti_pengajuan/index"); ?>";
                },
                complete: function () {

                }
            });

            return false;
        });
    });
</script>