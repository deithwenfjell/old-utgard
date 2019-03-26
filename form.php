<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SHŠ In Articulo Mortis</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>


    <header>
        <div class="jumbotron">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <img class="img-responsive" id="logo" src="img/logo.png" alt="Logo">
                    </div>
                    <div class="col-sm-8">
                        <h1>In Articulo Mortis</h1>
                        <h3>Skupina historického šermu</h3>
                    </div>
                </div>
            </div>


        </div>

    </header>
    <div class="container-fluid">


        <nav class="navbar navbar-default" role="navigation">

            <div class="navbar-header" id="navigacia">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                    <span class = "sr-only">Navigácia</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>

                <a class="navbar-brand">Hlavné menu</a>
            </div>

            <div class="collapse navbar-collapse" id="example-navbar-collapse">

                <ul class="nav navbar-nav">
                    <li><a href="index.html">Domov</a></li>
                    <li><a href="contact.html">Kontakt</a></li>
                    <li><a href="about.html">O nás</a></li>
                    <li><a href="services.html">Galéria</a></li>
                    <li><a href="location.html">Kde nás nájdete</a></li>
                    <li class="active"><a href="form.php">Kontaktný formulár</a></li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="well">
            <div class="row">
                <form role="form-vertical" action="mail_handler.php" method="POST">
                    <div class="form-group">
                        <label for="text">Vaše meno:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Sem napíšte Vaše meno">
                    </div>

                    <div class="form-group">
                        <label for="radio">Pohlavie:</label> <br>
                        <input type="radio" name="gender" value="male" checked> Muž
                        <input type="radio" name="gender" value="female"> Žena<br>
                    </div>   
                    
                    <div class="form-group">
                        <label for="date">Dátum narodenia:</label>
                        <input type="date" class="form-control" name="date" id="date" required>
                    </div>                 
                    
                    <div class="form-group">
                        <label for="email">Váš e-mail:</label>
                        <input type="email" class="form-control" name´"email" id="email" placeholder="Sem napíšte Váš e-mail" required>
                    </div>

                    <div class="form-group">
                        <label for="text">Správa:</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Sem napíšte Vašu správu" rows="5"></textarea>
                    </div>


                    
                    <div class="checkbox">
                        <label><input type="checkbox" required> Súhlasím so spracovaním osobných údajov.</label>
                    </div>

                    <button type="submit" class="btn btn-default" onclick="alert('Správa sa spracuje...')">Odoslať</button>
                </form>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <footer>
        <div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
            <div class="container">
                <div class="navbar-text pull-right">
                    <h6>Copyright Deithwenfjell Industries</h6>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>