	<?php
    $category = $_POST['cate_id'];

    //得到分类ID，查询数据库，得到分类下有哪些子分类，在这里只是伪数据。
    $data = [
        [
            ['id' => 1,'name' => '苹果'],
            ['id' => 2,'name' => '香蕉'],
            ['id' => 3,'name' => '橘子'],
            ['id' => 4,'name' => '梨'],
        ],
        [
            ['id' => 1,'name' => '手机'],
            ['id' => 2,'name' => '电脑'],
            ['id' => 3,'name' => '平板'],
            ['id' => 4,'name' => '手表'],
        ],
        [
            ['id' => 1,'name' => '上衣'],
            ['id' => 2,'name' => '裤子'],
            ['id' => 3,'name' => '鞋子'],
        ],
    ];

    //进行json转换，返回数据。
    echo json_encode($data[$category]);
?>	