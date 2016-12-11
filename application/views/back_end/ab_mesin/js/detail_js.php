<?php
$id_mesin = isset($id_mesin) && $id_mesin ? $id_mesin : "";
$lokasi_mesin = isset($lokasi_mesin) ? $lokasi_mesin : FALSE;
?>

<script type="text/javascript">

    var formmesin = {
        data: {
            lokasi: null,
            
        },
        collectData: function () {
            var self = this;

            self.data.lokasi = $("#txt-lokasi").val();
            

            return self.data;
        }
    };

    $(document).ready(function () {

        $("#frm-ab_mesin").submit(function (e) {
            e.preventDefault();

            var data = formmesin.collectData();

            $.ajax({
                url: "<?php echo base_url('back_end/ab_mesin/detail'); ?>",
                data: data,
                method: 'POST',
                success: function (response, textStatus) {
                    window.location.href = "<?php echo base_url("back_end/ab_mesin/index"); ?>";
                },
                complete: function () {

                }
            });

            return false;
        });
    });
</script>