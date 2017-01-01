
<?php
$detail = isset($detail) ? $detail : FALSE;
?>
<script>

    var cuti_cfg = {
        data: [],
        ajax: {
            url: "<?php echo base_url(); ?>back_end/ab_jenis_cuti/get_like",
            placeholder: 'Pilih cuti',
            dataType: 'json',
            delay: 250,
            method: 'post',
            width: '100%',
            data: function (params) {
                return {
                    keyword: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, params) {

                var data = $.map(data, function (obj) {
                    obj.id = obj.id || obj.id_cuti;
                    obj.text = obj.text || obj.nama_cuti;
                    return obj;
                });
                params.page = params.page || 1;
                return {
                    results: data
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 2
    };

<?php if ($detail && $detail->id_cuti != ""): ?>
        cuti_cfg.data = [
            {
                id: '<?php echo $detail->id_cuti ?>',
                text: '<?php echo $detail->nama_cuti; ?>'
            }
        ];
<?php endif; ?>
    $(document).ready(function () {
        
//        alert("ahahahah");
        
        $("#slc-cuti").select2(cuti_cfg);
<?php if ($detail && $detail->id_cuti != ""): ?>
            $("#slc-cuti option").text("<?php echo $detail->nama_cuti ?>").trigger("change");
            ;
<?php endif; ?>
    });
</script>