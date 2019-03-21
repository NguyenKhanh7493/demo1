$(document).ready(function () {
    $(".updateCart").click(function () {
        var rowid = $(this).attr('id');
        var qty = $(this).parent().find(".qty-cart").val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url:'/cap-nhat/'+rowid+'/'+qty,
            type:'GET',
            cache:false,
            data:{"_token":token,"id":rowid,"qty":qty},
            success:function (data) {
                if (data == "oke"){
                    // window.location = "/gio-hang"
                }
            }
        });
    });
});

$(document).ready(function () {
    $(".delete-cart").click(function () {
        var rowID = $(this).attr('id');
        var token = $("input[name='_token']").val();
        if (confirm('bạn có muốn xóa')){
            $.ajax({
                url:'/xoa-san-pham',
                type:'delete',
                data:{"_token":token,id:rowID},
                success:function (data) {
                    $('tr#'+id).slideUp(300,function () {
                        $(this).remove();
                    });
                }
            });
        }
    })
});