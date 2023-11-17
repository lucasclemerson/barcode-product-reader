<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Oliveira - <?=$title?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        *{
            font-family:  'Ubuntu', sans-serif;
            font-size: 18px;
        }
    </style>
</head>
<body class="w-full bg-indigo-200 flex items-center justify-center h-screen ">
    <?php require  ("admin/$page_name.php"); ?>
</body>
</html>



