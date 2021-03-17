<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo (isset($titolo)) ?  '<title>' . $titolo . '</title>' : '<title>' . 'templete' . '</title>'  ?>
    <title></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('public/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('public/vendor/fontawesome-free/css/css.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('public/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <?php if (isset($styles)) : ?>

        <?php foreach ($styles as $stl) : ?>

            <link href="<?php echo base_url('public/' . $stl); ?>" rel="stylesheet">
        <?php endforeach; ?>
    <?php endif; ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">