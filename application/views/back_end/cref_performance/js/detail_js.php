<?php
$id_mesin = isset($id_mesin) && $id_mesin ? $id_mesin : "";
$lokasi_mesin = isset($lokasi_mesin) ? $lokasi_mesin : FALSE;
?>

<script type="text/javascript">

    var formmesin = {
        data: {
            performance_name: null,
            performance_start: null,
            performance_subtractor: null,
            performance_limit_warning: null,
            
            
        },
        collectData: function () {
            var self = this;

            self.data.performance_name = $("#txt-name").val();
            self.data.performance_start = $("#txt-start").val();
            self.data.performance_subtractor = $("#txt-subtractor").val();
            self.data.performance_limit_warning = $("#txt-limit").val();
            

            return self.data;
        }
    };

    $(document).ready(function () {

        $("#frm-ab_mesin").submit(function (e) {
            e.preventDefault();

            var data = formmesin.collectData();

            $.ajax({
                url: "<?php echo base_url('back_end/cref_performance/detail'); ?>",
                data: data,
                method: 'POST',
                success: function (response, textStatus) {
                    window.location.href = "<?php echo base_url("back_end/cref_performance/index"); ?>";
                },
                complete: function () {

                }
            });

            return false;
        });
    });
</script>