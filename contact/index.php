<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>NyeTek - Contact</title>
    <link href="../css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="../css/starter-template.css" rel="stylesheet">
    <link href="../css/contact.css" rel="stylesheet" />
    <link href="../css/alertify.min.css" rel="stylesheet" />
    <link href="../css/themes/default.min.css" rel="stylesheet" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <script src="../js/alertify.js" type="text/javascript"></script>
    <script src="../js/contact.js" type="text/javascript"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><span>NYE</span>TEK</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../index.html" target="_self" title="Home">HOME</a></li>
                    <li class="active"><a href="./index.php" target="_self" title="Contact">CONTACT</a></li>
                    <li><a href="./portfolio/index.html" target="_self" title="Portfolio">PORTFOLIO</a></li>
                    <li><a href="resume/Andrew_Nystrom_Resume.pdf" target="_blank" title="Resume of Andrew Nystrom">RESUME</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-purple-bar">&nbsp;</div>
    </nav>

    <div class="pg-wrap">
        <div class="container">
            <h1>Contact <span>Me!</span></h1>
            <p>Send me a message if you like what you see :)</p>
            <form action="mail.php" method="post" onSubmit=" return Validate();">
                <div class="form-group">
                    <label for="user-email">What's your email address?</label>
                    <input type="email" name="user-email" class="form-control" id="user-email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="user-name">What's your name?</label>
                    <input type="text" name="user-name" class="form-control" id="user-name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="user-message">Message</label>
                    <textarea class="form-control" name="user-message" id="user-message" placeholder="What would you like to say?"></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="REDACTED"></div>
                <button type="submit" name="user-submit" id="user-submit" class="btn btn-default submit-button">SUBMIT</button>
            </form>
        </div>
    </div>
    <div class="footer">&nbsp;</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>