<!DOCTYPE html>
<html>
<head>
    <style>
        * {box-sizing: border-box;}

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #0a53be;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <a href="#" class="logo">Dashboard</a>
    <div class="header-right">
        <a class="active" href="<?php echo base_url('User/list') ?>">Users</a>
        <a href="<?php echo base_url('Admin/logout') ?>" style="background-color: #dc3545">Log out</a>
    </div>
</div>
