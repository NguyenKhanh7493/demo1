//AJAX NÀY SỬ DỤNG ĐƯỢC.....,THÊM SỰ KIỆN ONCLICK LÀ ĐC
// function deleteAjax(id) {
//     if (confirm('bạn có muốn xóa không '+id+'?')){
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         $.ajax({
//             type: 'DELETE',
//             url: 'http://demo1.site/admin/user/delete',
//             data: {id:id},
//             dataType: 'json',
//             success:function (data) {
//                 console.log(data);
//                     $('tr#'+id).remove();
//                 // $(this).closest('tr').remove();
//             }
//         });
//     }
// }
//END
$(document).ready(function () {
    $('.delItem').click(function () {
        var id = $(this).attr('data-id');
        if (confirm('bạn có muốn xóa ' + id)){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'DELETE',
                url: 'http://demo1.site/admin/user/delete',
                data:{id:id},
                dataType: 'json',
                success:function (data) {
                    console.log(data);
                    // $('tr#'+id).remove();//xóa ok rồi
                    $('tr#'+id).slideUp(300,function () {
                        $(this).remove();
                    });
                }
            });
        }
    });
});
// $('.delItem').on('click',function () {
//
//     var id = $(this).attr('data-id');
//     if (confirm('bạn có muốn xóa ' + id)){
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//         $.ajax({
//             type: 'DELETE',
//             url: 'http://demo1.site/admin/user/delete',
//             data:{id:id},
//             dataType: 'json',
//             success:function (data) {
//                 console.log(data);
//                 $('tr#'+id).remove();
//             }
//         });
//     }
// });


$(document).ready(function () {
    $('.delCate').click(function () {
        var id = $(this).attr('data-id');
        if (confirm('Bạn có muốn xóa' + id)){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'DELETE',
                url: 'http://demo1.site/admin/cates/delete',
                data:{id:id},
                dataType:'json',
                success:function (data) {
                    console.log(data);
                    $('tr#'+id).slideUp(300,function () {
                        $(this).remove();
                    });
                }

            });
        }
    });
});