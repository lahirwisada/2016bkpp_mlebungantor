<script type="text/javascript">
    $(document).ready(function () {
        
        $(".clsHapusPegawai").click(function () {
            var url = $(this).attr('rel');

            modalConfirm({
                id: 'message-box-confirm',
                title: 'Mohon Perhatian',
                msg: 'Maaf aksi yang anda pilih belum diimplementasikan.',
                onOk: function () {
                    return false;
                }
            });
            
            return false;
        });
        $(".clsApprove").click(function () {
//             alert('test');
//             
            var url = $(this).attr('rel');

            $.post(url, {approve: 1}, function (result) {
                
                    alert(result);
                    location.reload();
                    // reload the user data
                
            }, 'json');

//            return true;
        });
        $(".clsReject").click(function () {
//             alert('test');
//             
            var url = $(this).attr('rel');

            $.post(url, {approve: 1}, function (result) {
                
                    alert(result);
                    location.reload();
                    // reload the user data
                
            }, 'json');

//            return true;
        });
    });
</script>