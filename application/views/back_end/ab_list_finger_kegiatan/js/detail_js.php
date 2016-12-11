<?php
$id_kegiatan = isset($id_kegiatan) && $id_kegiatan ? $id_kegiatan : ""; 
$detail_kegiatan = isset($detail_kegiatan) ? $detail_kegiatan : FALSE;
?>

<script type="text/javascript">
    
    var formDetailPesertaKegiatan = {
        data: {
            id_peg: null,
            
            
        },
        collectData: function(){
            var self = this;
            
            self.data.id_peg = $("#slc-peg").val();
            
            
            return self.data;
        }
    };
    
    $(document).ready(function () {
        
        $("#frm-daftar-peserta-kegiatan").submit(function(e){
            e.preventDefault();
            
            var data = formDetailPesertaKegiatan.collectData();
            
            $.ajax({
                url: "<?php echo base_url('back_end/ab_list_finger_kegiatan/detail')."/".$id_kegiatan; ?>",
                data: data,
                method: 'POST',
                success: function(response, textStatus){
                    window.location.href = "<?php echo base_url("back_end/ab_list_finger_kegiatan/index")."/".($detail_kegiatan ? $detail_kegiatan->id_kegiatan: 0); ?>";
                }
            });
            
            return false;
        });
    });
</script>