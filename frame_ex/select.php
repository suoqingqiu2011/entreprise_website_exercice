<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .content{
            width: 100%;
            text-align: center;
            margin-top: 50px;
        }
        .cate{
            width: 150px;
            height: 30px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="content">
    <select class="cate" name="cate" id="cate">
        <option value="0">水果</option>
        <option value="1">电子商品</option>
        <option value="2">服装</option>
    </select>
    <select class="cate" name="attr" id="attr">

    </select>
</div>
</body>
<script src="../js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        getDataForAjax();
    });
    $("#cate").change(function () {
        getDataForAjax();
    });


    function getDataForAjax() {
        cate_id = $('#cate').val();
        $.ajax({
            type:"post",
            url:"data.php",
            dataType:'json',
            data:{
                cate_id:cate_id
            },
            success:function (data) {
                console.log(data);
                $('#attr').empty();
                for(var i = 0;i < data.length;i++){
                    $('#attr').append("<option value=" + data[i]['id'] + ">"
                        + data[i]['name'] + "</option>");
                }
            }
        });
    }

</script>
</html>