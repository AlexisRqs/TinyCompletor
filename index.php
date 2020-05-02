<!--
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Autocomplete using PHP/MySQL and jQuery
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autocomplétion utilisant PHP/MySQL et jQuery</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="images/TinyCompletor.png" />
        </div><!-- header -->
        <h1 class="main_title">Autocomplétion utilisant PHP/MySQL et jQuery</h1>
        <div class="content">
            <form>
                <div class="label_div">Saisir un mot-clé :</div>
                <div class="input_container">
                    <input type="text" id="country_id" onkeyup="autocomplet()">
                    <ul id="country_list_id"></ul>
                </div>
            </form>
        </div><!-- content -->    
        <div class="footer">
            Réalisé par <a href="#">Alexis.R / Axel.C / Mael.C</a>
        </div><!-- footer -->
    </div><!-- container -->
</body>
</html>
