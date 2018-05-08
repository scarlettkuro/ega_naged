<?php
//$path = explode('/', $_SERVER['REQUEST_URI']);
///if ($path[1] == 'give') {
   // die(json_encode($path[2]));
//}
?>
<!DOCTYPE html>
<html>

<head>
    <title>ega naged</title>
    <style>
        body {
            width: 100%;
            height: 100%;
            background-color: #292929 ;
            margin: 0;
        }
        #text {
            width: 50vw;
            margin: 20vh auto;
            color: #B0B0B0;
        }
        #text i {
            color: #C0C040;
        }
        #text .popup {
            text-align: center;
            width: 100%;
        }
        #text a:link, #text a:visited, #text a:hover, #text a:active { 
            text-decoration: none;
            color:crimson; 
        }
    </style>
</head>

<body>
    <p id ="text"></p>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="sammy-0.7.6.min.js"></script>
    <script src="data.js"></script>
    <script src="main.js"></script>
</body>

</html>
