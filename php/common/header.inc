<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <script charset="utf-8" src="../kindeditor-min.js"></script>
    <link rel="stylesheet" href="../themes/default/default.css">
    <link rel="stylesheet" href="../plugins/code/prettify.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/docs.min.css">
    <style type="text/css">
        body{
            background: url("../images/mooning.png") repeat scroll 0 0 #E5E5E5;
            overflow-x: hidden;
        }
        .fill_block{
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 1px 8px 1.5px rgba(0,0,0,0.35), 0 20px 70px 8px rgba(0, 0, 0, 0.25);
            display: table;
            width: 100%;
            padding: 20px;
            margin-top: 25px;
        }
        .bs-docs-masthead{
            margin-top: 20px;
            margin-bottom: 10px;
            border-radius: 10px;
            padding-bottom: 30px;
            padding-top: 30px;
        }
        .panel-body{
            padding:0 !important;
        }
    </style>
    <script>
        KindEditor.ready(function(K)
        {
            var editor1 = K.create('textarea[name="gGuide"]',
                {
                    readonlyMode : true,

                    cssPath : '../plugins/code/prettify.css',
                    uploadJson : '../php/upload_json.php',
                    fileManagerJson : '../php/file_manager_json.php',
                    allowFileManager : true,
                    afterCreate : function()
                    {
                        var self = this;
                        K.ctrl(document, 13, function()
                        {
                            self.sync();
                            K('form[name=addForm]')[0].submit();
                        });
                        K.ctrl(self.edit.doc, 13, function()
                        {
                            self.sync();
                            K('form[name=addForm]')[0].submit();
                        });
                    }
                });
            prettyPrint();

            // 设置成只读状态
            K('input[name=submit]').click(function()
            {
                editor1.readonly();
            });
            // 取消只读状态
            K('input[name=modify]').click(function()
            {
                editor1.readonly(false);
            });
        });
    </script>
</head>