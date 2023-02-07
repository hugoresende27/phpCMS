<!doctype html>

<html lang="en">
<head>
    <title>
        GBI <?= $pageTitle ?? "Staff Area" ?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?=url_for('/stylesheets/staff.css')?>" />
</head>

<body>

<header>
    <h1>GBI Staff Area</h1>
</header>

<navigation>
    <ul>
        <li><a href="<?=WWW_ROOT?>/staff/index.php">Menu</a></li>
    </ul>
</navigation>