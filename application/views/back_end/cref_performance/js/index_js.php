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
        $(".clsDownload").click(function () {
//             alert('test');
//             
            var url = $(this).attr('rel');

            $.post(url, {approve: 1}, function (result) {
                if (result.success){
                    
                alert(result.msg);
                location.reload();
            }else{
                alert(result.msg);
                location.reload();
            }
                // reload the user data

            }, 'json');

//            return true;
        });
        $(".clsUpload").click(function () {
//             alert('test');
//             
            var url = $(this).attr('rel');
            modalConfirm({
                id: 'message-box-confirm',
                title: 'Mohon Perhatian',
                msg: 'Maaf aksi yang anda pilih belum diimplementasikan.',
                onOk: function () {
                    return false;
                }
            });
//            $.post(url, {approve: 1}, function (result) {
//
//                alert(result);
//                location.reload();
//                // reload the user data
//
//            }, 'json');

//            return true;
        });
    });
</script>