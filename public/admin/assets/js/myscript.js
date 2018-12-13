// $(document).ready(function () {
//    $("a#delItem").on('click',function () {
//        alert(1111);
//    })
// });

// $(document).on('click','#delItem',function (e) {
//     alert(111);
// });
function deleteAjax(id) {
    if (confirm('bạn có muốn xóa không '+id+'?')){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'http://demo1.site/admin/user/delete',
            data: {id:id},
            dataType: 'json',
            success:function (data) {
                console.log(data);
                    $('tr#'+id).remove();
                // $(this).closest('tr').remove();
            }
        });
    }
}
// function deleteAjax(id) {
//     var popup = confirm("ok" +id);
//     var csrf_token = $('meta[name="csrf-token"]').attr('content');
//     if (popup == true){
//         $.ajax({
//             url:"http://demo1.site/admin/user/delete" + '/' + id,
//             type:"POST",
//             data:{'_method':'DELETE','_token':csrf_token},
//             succsess:function (data) {
//                 table.ajax.reload();
//                 console.log(data);
//             },
//             error:function () {
//                 alert("ko được");
//             }
//         });
//     }
// }