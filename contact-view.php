<html>
<head>
<title>contacto</title>
<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/dreampulse/computer-modern-web-font/master/fonts.css">
<style>
    * {
        box-sizing: border-box;
    }
    body {
        font-family: "Computer Modern Sans";
        width: 50%;
        background-image: url("https://media.giphy.com/media/QZhjFvKqW5DWqbXKaS/giphy.gif");
        background-size: cover;
        background-repeat: repeat-y;
        background-attachment: fixed;
        margin: 0 auto;
        margin-top: 20px;
        margin-bottom: 20px;
        cursor: url(http://cur.cursors-4u.net/cursors/cur-2/cur116.cur), auto !important;
    }
    header {
        font-family: "Computer Modern Serif";
        border-color:grey;
        border-style: solid;
        background-color: hotpink;
        padding: 30px;
        text-align: center;
        font-size: 35px;
        color: white;
        cursor: pointer;
    }
    .form-container {
        background-color: pink;
        border: #e2ddd2 1px solid;
        padding: 20px;
        border-radius: 2px;
    }
    .input-row {
        margin-bottom: 20px;
    }
    .input-row label {
        color: #75726c;
    }
    .input-field {
        width: 100%;
        border-radius: 2px;
        padding: 10px;
        border: #e0dfdf 1px solid;
        box-sizing: border-box;
        margin-top: 2px;
    }
    .span-field {
        font: Arial;
        font-size: small;
        text-decoration: none;
    }
    .btn-submit {
        padding: 10px 60px;
        background: #9e9a91;
        border: #8c8880 1px solid;
        color: #ffffff;
        font-size: 0.9em;
        border-radius: 2px;
        cursor: pointer;
    }
    .errorMessage {
        background-color: #e66262;
        border: #AA4502 1px solid;
        padding: 5px 10px;
        color: #FFFFFF;
        border-radius: 3px;
    }
    .successMessage {
        background-color: #9fd2a1;
        border: #91bf93 1px solid;
        padding: 5px 10px;
        color: #3d503d;
        border-radius: 3px;
        cursor: pointer;
        font-size: 0.9em;
    }
    .info {
        font-size: .8em;
        color: #e66262;
        letter-spacing: 2px;
        padding-left: 5px;
    }
</style>
</head>

<body>

    <marquee scrolldelay=10 scrollamount=10>
        <h3 style="color: ivory;">mosh traicionó a una perra policía.</h3>
    </marquee>

    <header>
        <div class="titulo"><h1> <a href="index.html" style="text-decoration: none; color: white; cursor:pointer;">traición</a></h1></div>
    </header>

    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">nombre</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>asunto</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>mensaje</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="mandar" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("requerido.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("requerido.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("requerido.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("requerido.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
</body>
</html>