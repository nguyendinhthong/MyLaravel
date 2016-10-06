<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Gogojungle.co.jp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
/*        Page laypout*/
        .wrapper {
            display: flex;
            height: auto;
        }
        .wrapper1 {
            width: 80%;
            display: block;
        }
        .left-banner {
            width: 10%;
            height: inherit;
            background-color: grey;
        }
        .right-banner {
            width: 10%;
            height: inherit;
            background-color: grey;
        }
    </style>
    <style>
        .header-cointainer {
            height: auto;
        }
        .middle-banner {
            height: 50px;
            background-color: grey;
        }
        .page-container {
            height: 400px;
        }
        .footer-cointainer {
            background-color: #444444;
            height: auto;
            padding: 10px 10px 10px 10px;
        }
        .footer-cointainer {
            background-color: #444444;
            height: auto;
            padding: 10px 10px 10px 10px;
        }
    </style>
    <style>
        .header-cointainer li {
            display: block;
            float: left;
            font-family: "Meiryo UI"
        }
        .header-cointainer ul {
            margin-bottom: 0px;
        }
        
        
        /*.header-cointainer layout*/
        .top-menu {
            display: flex;
            background-color: #313131;
            height: auto;
            float: right;
            width: 100%;
            border-bottom: 1px solid #313131;
            font-weight: normal;
            padding: 2px 2px 2px 6px
        }
        .middle-menu {
            display: flex;
            background-color: #ffffff;
            height: auto;
            border-bottom: 1px solid #ffffff;
            font-weight: normal;
            padding: 10px 10px 10px 10px;
            vertical-align: middle;
        }
        .main-menu {
            background-color: #f5f5f5;
            padding: 10px 10px 10px 10px;
            font-weight: normal;
            width: 100%;
        }
        
        /*Top menu layout*/
        #account {
            width: 100%;
            padding: 10px 2px 10px 2px
        }
        #account ul {
                float: right;
                padding: 1px 10px 1px 10px;
        }
        #account a {
            font-size: 14px;
            text-align: left;
            color: #ffffff;
            padding: 1px 10px 1px 10px;
        }
                
        /*Middle menu layout*/
        .common-search {
            height: 40px;
            width: 500px;
        }
        .search-form {
            height: inherit;
            width: inherit;
        }
        .search-input {
            height: inherit;
            width: 80%;
/*            border-right-color: white;*/
        }
        
        /*Main menu layout*/
        .main-menu  ul {
            display: flex;
            width: 100%;
            padding: 0;
        }
        .main-menu  li {
            text-align: center;
        }
        .main-menu a {
            color: #414141;
            font-weight: bold;
            padding: 10px 10px 10px 10px;
        }
    </style>
    <style>
        .footer-cointainer .notice {
            padding: 0 0 10px 0;
            display: block;
            color: #ffffff;
            overflow: hidden;
        }
            .footer-cointainer .notice .f_c{
                float: left;
                width: auto;
            }
            .footer-cointainer .notice li {
                display: block;
                font-family: "Meiryo UI";
                padding: 0px 50px 0px 0px;
            }
            .footer-cointainer .notice a {
                font-size: 14px;
                text-align: left;
                color: #ffffff;
                padding: 1px 10px 1px 10px;
            }
        
        .footer-cointainer .detail {
            color: rgb(217,217,217);
            font: "Meiryo UI";
            margin: 20px 20px 20px 20px;
        }
        
        .footer-cointainer .agency {
            display: block;
            margin: 18px 0 0 0;
            overflow: hidden;
        }
            .footer-cointainer .agency ul {
                position: relative;
                float: left;
                display: block;
            }   
            .footer-cointainer .agency li {
                display: block;
                float: left;
            }
        
        .footer-cointainer .cc {
            padding: 10px 0;
            text-align: center;
            color: #ffffff;
            clear: both;
        }
    </style>
</head>