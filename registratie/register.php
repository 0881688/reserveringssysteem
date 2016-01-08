
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Registreer</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    <script type='text/javascript' src='../registratie/scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='../registratie/scripts/fg_captcha_validator.js'></script>
</head>
<body>
<div class='container'>
<form class="form-horizontal" action='register2.php' method='post'>
    <fieldset >
        <legend>Register</legend>
        <input type="radio" name='geslacht' value="dhr"> dhr.
        <input type="radio" name='geslacht' value="mvr"> mvr.<br>

        <label>Voornaam*:</label><br>
        <input type='text' name='voornaam' maxlength="50" /><br>

        <label>Achternaam*:</label><br>
        <input type='text' name='achternaam' maxlength="50" /><br>

        <label>Geboortedatum*:</label><br>
        <input type='date' name='geboortedatum' maxlength="50" /><br>

        <label>Telefoon nummer*:</label><br>
        <input type='text' name='telefoonnummer' maxlength="10" /><br>

        <label>Email Adres*:</label><br>
        <input type='text' name='emailadres' placeholder='example@example.nl' id='email' maxlength="50" /><br>

        <div class='container'>
            <input type='submit' name='Submit' value='Submit' />
        </div>

    </fieldset>
</form>

</body>
</html>

