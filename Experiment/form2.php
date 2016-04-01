<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$navn = $email = $url = $kommentar = $gender = "";

$navnErr = $emailErr = $urlErr = $kommentarErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["navn"]))
        $navnErr = "Error navn!";
    else
        $navn = test_input($_POST["navn"]);

    if (empty($_POST["email"]))
        $emailErr = "Error email!";
    else
        $email = test_input($_POST["email"]);


    if (empty($_POST["url"]))
        $urlErr = "Error url!";
    else
        $url = test_input($_POST["url"]);

    if (empty($_POST["kommentar"]))
        $kommentarErr = "Error kommentar!";
    else
    $kommentar = test_input($_POST["kommentar"]);

    if (empty($_POST["gender"]))
        $genderErr = "Error gender!";
    else
    $gender = test_input($_POST["gender"]);
}

?>

<h1>PHP-validering av data</h1>
<form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
<p>Navn: <input name="navn" type="text" value="<?php echo $navn; ?>">
<span class="Feilmelding"><?php echo $navnErr; ?> </span>
</p>
    <p>Email: <input name="email" type="text" value="<?php echo $email; ?>"></p>
    <span class="Feilmelding"><?php echo $emailErr; ?> </span>

    <p>URL: <input name="url" type="text" value="<?php echo $url; ?>"></p>
    <span class="Feilmelding"><?php echo $urlErr; ?> </span>

    <p>Kommentar: <br/>
        <textarea name="kommentar"  rows="4" cols="30"><?php echo $kommentar; ?></textarea>
        <span class="Feilmelding"><?php echo $kommentarErr; ?> </span>
    </p>
    <p>Kjønn:
        <input type="radio" name="gender"  value="mann"> Mann
        <input type="radio" name="gender" value="kvinne"> Kvinne <br/>
        <span class="Feilmelding"><?php echo $genderErr; ?> </span>
    </p>
    <p>
        <input type="submit" value="Send inn">
    </p>
</form>