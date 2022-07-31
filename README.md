<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 CRUD Generator Sample</h1>
    <br>
</p>

<h2>1. Buat project terlebih dahulu dengan cara:</h2>
```composer create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic yii-crud-generator-sample```

yii-crud-generator-sample -> dapat diganti sesuai nama project kalian. Pastikan composer telah terinstall pada PC/Laptop.

Tunggu hingga proses instalasi selesai. Jika sudah selesai maka akan terbentuk database baru sesuai nama project kita.

<h2>2. Setting Database</h2>
Sesuaikan Setting database terlebih dahulu. Caranya: masuk kedalam folder config -> db.php

Pada tutorial kali ini, saya membuat database baru bernama: yiicrud
Berikut file db.php saya.

```
<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yiicrud',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
```

<h2>3. Setting Pretty URL</h2>
Setting pretty URL pada app Yii anda dengan cara masuk ke dalam folder config -> web.php
config buka file web.php, kemudian hilangkan remark pada bagian urlManager menjadi:

```
'urlManager' => [
	'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
    ],
],
```

<h2>4. Run Project</h2>
Masuklah kedalam folder project, kemudian ketikkan: php yii serve
Tunggu proses run project berjalan hingga muncul keterangan seperti berikut: Server started on http:localhost:8080/
Buka browser anda, dan akses URL berikut: http://localhost:8080/gii

<h2>5. Model Generator</h2>
Selanjutlah pilih menu model generator, atau akses ke alamat: http://localhost:8080/gii/model

Pada bagian Table Name, masukkan nama table yang ingin kita gunakan untuk app CRUD kita, pada tutorial ini saya menggunakan table name: member

Pastikan sudah ada table member pada database yang kalian gunakan, berikut SQL code saya:

```
CREATE TABLE `member` (
	`id_member` INT(5) NOT NULL AUTO_INCREMENT,
	`nama_lengkap` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	`no_handphone` VARCHAR(12) NULL DEFAULT NULL COLLATE 'utf8_general_ci',
	PRIMARY KEY (`id_member`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
```

https://prnt.sc/hSv9wuielb_c

https://prnt.sc/RuSO5e8RiqtM

Lanjutkan dengan klik Preview, dan lanjutkan dengan klik Generate dan tunggu hingga muncul keterangan seperti berikut: The code has been generated successfully.


<h2>6. CRUD Generator</h2>

Langkah selanjutnya, buka URL berikut: http://localhost:8080/gii/crud

Masukkan isian berikut:

Member Class: app\models\Member
Search Model Class: app\models\MemberSearch
Controller Class: app\controllers\MemberController

https://prnt.sc/zLiyYaFwgWlF

Lanjutkan dengan klik Preview dan lanjutkan dengan klik Generate, dan tunggu hingga muncul keterangan seperti berikut: The code has been generated successfully.

<h2>7. Final Step</h2>

Jika sudah selesai, akses pada URL http://localhost:8080/member/
Pada halaman ini, anda dapat create Member, Edit, dan Delete yang langsung terhubung pada Database.

Mudah bukan?!
