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
// $(document).ready(function () {
//     $('.delItemPro').click(function () {
//         // alert('ok');
//         var id = $(this).attr('data-id');
//         var link = $(this).attr('data-link');
//         var msg = $(this).attr('data-msg');
//         if (confirm(msg)){
//             $.ajaxSetup({
//                 headers: {
//                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                 }
//             });
//             $.ajax({
//                 rl: 'http://demo1.site/admin/product/delImg',
//                 type:'DELETE',
//                 dataType:'json',
//                 data:{id:id},
//                 success:function (data) {
//                     if (data == 'ok'){
//                         $('#'+id).slideUp(300,function () {
//                             $(this).remove();
//                         })
//                     }else {
//                         alert('Xóa không thành công');
//                     }
//                 }
//             });
//         }
//     });
// });
$(document).ready(function () {
    $('.delItemPro').click(function () {
        var id = $(this).attr('data-id');
        if (confirm('Bạn có muốn xóa' + id)){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'DELETE',
                url: 'http://demo1.site/admin/product/delete',
                data:{id:id},
                dataType:'json',
                success:function (data) {
                    console.log(data);
                    $('#'+id).slideUp(300,function () {
                        $(this).remove();
                    });
                }

            });
        }
    });
});

//Delete item product
$(document).ready(function () {
    $('.proDelItem').click(function () {
        var id = $(this).attr('data-id');
        if(confirm('Bạn có muốn xóa '+ id)){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'http://demo1.site/admin/product/deleteItem',
                type:'DELETE',
                data:{id:id},
                DataType:'json',
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
//end

//delete image post
$(document).ready(function () {
    $('.delItemPost').click(function () {
        var id = $(this).attr('data-id');
        if (confirm('Bạn có muốn xóa' + id)){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'DELETE',
                url: 'http://demo1.site/admin/post/delete',
                data:{id:id},
                dataType:'json',
                success:function (data) {
                    console.log(data);
                    $('#'+id).slideUp(300,function () {
                        $(this).remove();
                    });
                }

            });
        }
    });
});
//end

//delete item post
$(document).ready(function () {
    $('.DelPost').click(function () {
        var id = $(this).attr('data-id');
        if(confirm('Bạn có muốn xóa '+ id)){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'http://demo1.site/admin/post/deletePost',
                type:'DELETE',
                data:{id:id},
                DataType:'json',
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
//end