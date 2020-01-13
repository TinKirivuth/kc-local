function calleditor(){
    tinymce.init({
        // replace textarea having class .tinymc with tinymce editor
        selector: "textarea.tinymce",

        // theme of the editor
        theme: "modern",
        skin: "lightgray",

        //width and height of the editor
        width: "100%",
        height: 30,

        //display statusbar
        statusbar: true,

        //plugin
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ], 

        // toolbar
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

        // style
        style_formats: [
            {title: "Headers", items: [
                {title: "Header 1", format: "h1"},
                {title: "Header 2", format: "h2"},
                {title: "Header 3", format: "h3"},
                {title: "Header 4", format: "h4"},
                {title: "Header 5", format: "h5"},
                {title: "Header 6", format: "h6"}
            ]},
            {title: "Inline", items: [
                {title: "Bold", icon: "bold", format: "bold"},
                {title: "Italic", icon: "italic", format: "italic"},
                {title: "Underline", icon: "underline", format: "underline"},
                {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
                {title: "Superscript", icon: "superscript", format: "superscript"},
                {title: "Subscript", icon: "subscript", format: "subscript"},
                {title: "Code", icon: "code", format: "code"}
            ]},
            {title: "Blocks", items: [
                {title: "Paragraph", format: "p"},
                {title: "Blockquote", format: "blockquote"},
                {title: "Div", format: "div"},
                {title: "Pre", format: "pre"}
            ]},
            {title: "Alignment", items: [
                {title: "Left", icon: "alignleft", format: "alignleft"},
                {title: "Center",icon: "aligncenter", format: "aligncenter"},
                {title: "Right", icon: "alignright", format: "alignright"},
                {title: "Justify", icon: "alignjustify", format: "alignjustify"}
            ]}
        ],
    });

    // From ReanWeb
	    // tinymce.init({
	    //     selector:"textarea",
	    //     theme: "modern",
	    //     width: "760",
	    //     height:"60",
	    //     relative_urls: false, 
	    //     remove_script_host: false,
	    //     file_browser_callback:function(field_name, url, type, win){
	    //     var filebrowser = "jquery/filebrowser.php";
	    //     filebrowser += (filebrowser.indexOf("?") < 0) ? "?type=" + type : "&type=" + type;
	    //     tinymce.activeEditor.windowManager.open({
	    //     title : "Insert Photo",
	    //     width : 560,
	    //     height : 500,
	    //     url : filebrowser
	    //     }, {
	    //     window : win,
	    //     input : field_name
	    //     });
	    //     return false;
	    //     }, 
	    //     plugins: [
	    //           "advlist autolink lists link image charmap print preview hr anchor pagebreak",
	    //           "searchreplace wordcount visualblocks visualchars code fullscreen",
	    //           "insertdatetime media nonbreaking save table contextmenu directionality",
	    //           "emoticons template paste textcolor colorpicker textpattern imagetools media code",
	    //     ],
	    //     menubar:true,toolbar1: "undo redo | insert | sizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",
	    //     toolbar2:"fontselect | fontsizeselect | forecolor media code",
	    // });
}   