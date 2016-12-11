
<?php
$detail = isset($detail) ? $detail : FALSE;
?>
<script>

    var peg_cfp = {
        data: [],
        ajax: {
            url: "<?php echo base_url(); ?>back_end/ab_pegawai/get_like",
            placeholder: 'Pilih Pegawai',
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
                    obj.id = obj.id || obj.id_peg;
                    obj.text = obj.text || obj.nama_peg;
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

<?php if ($detail && $detail->id_peg != ""): ?>
        peg_cfp.data = [
            {
                id: '<?php echo $detail->id_peg ?>',
                text: '<?php echo $detail->nama_peg; ?>'
            }
        ];
<?php endif; ?>
    $(document).ready(function () {
        
//        alert("ahahahah");
        
        $("#slc-peg").select2(peg_cfp);
<?php if ($detail && $detail->id_peg != ""): ?>
            $("#slc-peg option").text("<?php echo $detail->nama_peg ?>").trigger("change");
            ;
<?php endif; ?>
    });
</script>