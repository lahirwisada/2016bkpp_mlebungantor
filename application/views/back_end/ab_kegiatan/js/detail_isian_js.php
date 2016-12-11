
<?php
$detail = isset($detail) ? $detail : FALSE;
?>
<script>

    var mesin_cfg = {
        data: [],
        ajax: {
            url: "<?php echo base_url(); ?>back_end/ab_mesin/get_like",
            placeholder: 'Pilih Mesin',
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
                    obj.id = obj.id || obj.id_mesin;
                    obj.text = obj.text || obj.lokasi_mesin;
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

<?php if ($detail && $detail->id_mesin != ""): ?>
        mesin_cfg.data = [
            {
                id: '<?php echo $detail->id_mesin ?>',
                text: '<?php echo $detail->lokasi_mesin; ?>'
            }
        ];
<?php endif; ?>
    $(document).ready(function () {
        
//        alert("ahahahah");
        
        $("#slc-mesin").select2(mesin_cfg);
<?php if ($detail && $detail->id_mesin != ""): ?>
            $("#slc-mesin option").text("<?php echo $detail->lokasi_mesin ?>").trigger("change");
            ;
<?php endif; ?>
    });
</script>