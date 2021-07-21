<!-- <script type="text/javascript" src="template/plugins/tinymce/js/jquery-3.2.1.min"></script> -->
<!-- <script type="text/javascript" src="template/plugins/tinymce/plugins/tinymce/tinymce.min.js"></script> -->
<!-- <script type="text/javascript" src="template/plugins/tinymce/init-tinymce.js"></script> -->

<script type="text/javascript" src="template/plugins/tinymce/js/tinymce/tinymce.min.js"></script>
<!-- <script>tinymce.init({ selector:'textarea' });</script> -->


<!-- <script type="text/javascript" src="template/plugins/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
function ajaxfilemanager(field_name, url, type, win) 
{
 var ajaxfilemanagerurl = "template/plugins/tinymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
 switch (type) {
  case "image":
   break;
  case "media":
   break;
  case "flash": 
   break;
  case "file":
   break;
  default:
   return false;
 }
  tinyMCE.activeEditor.windowManager.open(
  {
      url: "template/plugins/tinymce/jscripts/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php",
      width: 782,
      height: 440,
      inline : "yes",
      close_previous : "no"
  },
  {
      window : win,
      input : field_name
  });
          
 /*return false;   
 var fileBrowserWindow = new Array();
 fileBrowserWindow["file"] = ajaxfilemanagerurl;
 fileBrowserWindow["title"] = "Ajax File Manager";
 fileBrowserWindow["width"] = "782";
 fileBrowserWindow["height"] = "440";
 fileBrowserWindow["close_previous"] = "no";
 tinyMCE.openWindow(fileBrowserWindow, {
   window : win,
   input : field_name,
   resizable : "yes",
   inline : "yes",
   editor_id : tinyMCE.getWindowArg("editor_id")
 });
 
 return false;*/
}
</script> -->

<script type="text/javascript">
  tinymce.init({
  /* replace textarea having class .tinymce with tinymce editor */
  selector: "textarea.tinymce",
  
  /* theme of the editor */
  theme: "modern",
  skin: "lightgray",
  
  /* width and height of the editor */
  width: "100%",
  height: 300,
  
  /* display statusbar */
  statubar: true,
  
  /* plugin */
  plugins: [
    "advlist autolink link image lists charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "save table contextmenu directionality emoticons template paste textcolor"
  ],

  /* toolbar */
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
  
  /* style */
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
      {title: "Center", icon: "aligncenter", format: "aligncenter"},
      {title: "Right", icon: "alignright", format: "alignright"},
      {title: "Justify", icon: "alignjustify", format: "alignjustify"}
    ]}
  ]
});

</script>

<!-- 
<script type="text/javascript">
tinyMCE.init(
{

// General options
mode : "textareas",
elements : "ajaxfilemanager",
file_browser_callback : 'ajaxfilemanager',

theme : "advanced",
plugins : "safari,pagebreak,style,table,save,advhr,advimage,advlink,emotions,iespell,print,inlinepopups,insertdatetime,preview,media,searchreplace,contextmenu,paste,directionality,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount",

// Theme options
theme_advanced_buttons1 : "undo,redo,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull",
theme_advanced_buttons2 : "formatselect,fontselect,fontsizeselect,insertfile,insertimage",
theme_advanced_buttons3 : "sub,sup,search,replace,|,bullist,numlist,|,outdent,indent,emotions,iespell,media,advhr",
theme_advanced_buttons4 : "image,charmap,preview,forecolor,backcolor,hr,removeformat,link,unlink,anchor,cite,visualaid",
theme_advanced_buttons5 : "tablecontrols",

theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,
relative_urls : false,
remove_script_host : false,

// Example content CSS (should be your site CSS)
content_css : "css/content.css",

// Drop lists for link/image/media/template dialogs

// Replace values for the template plugin
template_replace_values : 
{
 username : "Some User",
 staffid : "991234"
}
});
</script>

 -->