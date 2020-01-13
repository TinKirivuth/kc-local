<script src="jquery/jquery-3.2.1.min.js"></script>
<!-- Start Text Editor -->
<script src="jquery/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="jquery/tinymce/js/tinymce/init-tinymce.js"></script>
<!-- End Text Editor -->
<!-- start personal js -->
<script src="jquery/myshare1.js"></script>
<script src="jquery/master5.js"></script>
<!-- end personal js -->
<script>
    function calleditor(){
        tinymce.init({
            selector:"textarea",
            font_formats: 'Khmer OS Content=Khmer OS Content,arial,sans-serif;Cambria=Cambria;Times New Roman=Times New Roman;Arial=arial,helvetica,sans-serif;Arial Black=Arial Black;Courier New=courier new,courier,monospace;AkrutiKndPadmini=Akpdmi-n',
            theme: "modern",
            width: "760",
            height:"100",
            relative_urls: false, 
            remove_script_host: false,
            file_browser_callback:function(field_name, url, type, win){
                var filebrowser = "jquery/filebrowser.php";
                filebrowser += (filebrowser.indexOf("?") < 0) ? "?type=" + type : "&type=" + type;
                tinymce.activeEditor.windowManager.open({
                    title : "Insert Photo",
                    width : 560,
                    height : 500,
                    url : filebrowser
                    }, {
                    window : win,
                    input : field_name
                });
            return false;
            },
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern imagetools media code",	
            ],
            menubar:true,toolbar1: "undo redo | insert | sizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",
            toolbar2:"fontselect | fontsizeselect | forecolor media code",
        });
    }  
</script>
 