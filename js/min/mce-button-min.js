!function(){tinymce.PluginManager.add("my_mce_button",function(n,t){n.addButton("my_mce_button",{text:!1,icon:"my-mce-icon",onclick:function(t){console.log(n.selection.getContent()),n.insertContent('<span style="color:red;">'+n.selection.getContent()+"</span>")}})})}();