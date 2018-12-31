<script src="{!! url('public/admin') !!}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{!! url('public/admin/assets') !!}/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{!! url('public/admin/assets') !!}/js/myscript.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{!! url('public/admin') !!}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="{!! url('public/admin/assets') !!}/js/jquery.slimscroll.js"></script>
<!--Morris JavaScript -->
<script src="{!! url('public/admin') !!}/plugins/bower_components/raphael/raphael-min.js"></script>
<script src="{!! url('public/admin') !!}/plugins/bower_components/morrisjs/morris.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="{!! url('public/admin') !!}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--check-->
<script src="{!! url('public/admin/') !!}/plugins/bower_components/switchery/dist/switchery.min.js"></script>
<script src="{!! url('public/admin/') !!}/plugins/bower_components/icheck/icheck.min.js"></script>
<script src="{!! url('public/admin/') !!}/plugins/bower_components/icheck/icheck.init.js"></script>
<script src="{!! url('public/admin/') !!}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script src="{!! url('public/admin/') !!}/plugins/plugin-soanthao/ckeditor/ckeditor.js"></script>
<script src="{!! url('public/admin/') !!}/plugins/plugin-soanthao/ckfinder/ckfinder.js"></script>
<script src="{!! url('public/admin/') !!}/plugins/plugin-soanthao/func_ckfinder.js"></script>

<script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function() {
        new Switchery($(this)[0], $(this).data());

    });
</script>
<!-- jQuery peity -->
<script src="{!! url('public/admin') !!}/plugins/bower_components/peity/jquery.peity.min.js"></script>
<script src="{!! url('public/admin') !!}/plugins/bower_components/peity/jquery.peity.init.js"></script>
<!--Wave Effects -->
<script src="{!! url('public/admin/assets') !!}/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{!! url('public/admin/assets') !!}/js/custom.min.js"></script>
<script src="{!! url('public/admin/assets') !!}/js/validator.js"></script>
<script src="{!! url('public/admin/assets') !!}/js/dashboard1.js"></script>
<script src="{!! url('public/admin') !!}/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
<script src="{!! url('public/admin') !!}/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>
<script>
    $(document).ready(function(){
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove:  'Supprimer',
                error:   'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element){
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element){
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element){
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e){
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
</script>
<!--Style Switcher -->
<script src="{!! url('public/admin') !!}/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
<script type="text/javascript">
    $('div.my-alert').delay(7000).slideUp();
</script>
<script>
    $("#addImg").click(function () {
        $('#showInput').append('<div class="form-group"><div class="white-box"><h3 class="box-title"></h3><input type="file" id="input-file-disable-remove" name="images[]" class="dropify" data-show-remove="true"/></div></div>');
    });
    $("#addIntro").click(function () {
        $('#introHtmlChild').append('<div class="row"><div class="col-lg-4"><div class="form-group"><input type="text" class="form-control" name="titleIntro[]" placeholder="Tiêu đề"></div></div><div class="col-lg-8"><div class="form-group"><input type="text" class="form-control" name="textIntro[]" placeholder="Đoạn giới thiệu"></div></div></div>');
    });
    $('#delIntro').click(function(){
        var div = $('#introHtmlChild').children('div:last-child');
        div.slideUp(function(){
            $(this).remove();
        });

    });
    $('#introHtml').find("a.clearI").click(function () {
        console.log('ok');
        $(this ).parent().slideUp(600,function (){
            $(this).remove();
        });
    });

</script>