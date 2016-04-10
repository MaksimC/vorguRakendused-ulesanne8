<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ulesanne 8 - Style selector</title>
</head>

<body>

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="styleSelector" style="background-color: burlywood; width: 30%">

    <fieldset id="textStyles">
        <legend>Text Settings:</legend>
        <textarea name="userText" id="userText" cols="20" rows="4"></textarea> <br><br>
        <input type="color" class="colorInput" name="textColor" value="#ff0000"> Text Color <br><br>
        <input type="color" class="colorInput" name="backColor" value="#80ffff"> Background color <br><br>
        <br><br>
    </fieldset> <br>

    <fieldset id="borderLane">
        <legend>Borderlane Settings:</legend>
        <select name="borderType">
            <option value="dotted">dotted</option>
            <option value="dashed">dashed</option>
            <option value="solid">solid</option>
            <option value="double">double</option>
            <option value="groove">groove</option>
            <option value="ridge">ridge</option>
            <option value="inset">inset</option>
            <option value="outset">outset</option>
        </select> Borderlane style<br><br>
        <input  type="number" class="numberInput" name="borderWeight" value="5" min="0" max="20" step="1"> Borderlane weight (0 - 20 px) <br><br>
        <input  type="number" class="numberInput" name="borderRadius" value="10" max="100" step="1"> Bordelane radius (0 - 100 px) <br><br>
        <input  type="color" class="colorInput" name="borderColor" value="#000040"> Borderlane color <br><br>
    </fieldset> <br>

    <input type="submit" id="button" value="Submit">

</form>

<div>
    <?php
    // define variables and set to empty values
    $userTextText = $textColor = $backColor = $borderType = $borderWeight = $borderRadius = $borderColor = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $userText = test_input($_GET["userText"]);
        $textColor = test_input($_GET["textColor"]);
        $backColor = test_input($_GET["backColor"]);
        $borderType = test_input($_GET["borderType"]);
        $borderWeight = test_input($_GET["borderWeight"]);
        $borderRadius = test_input($_GET["borderRadius"]);
        $borderColor = test_input($_GET["borderColor"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    echo "<h2>Your Input:</h2>";
    if($userText !=''){
        echo "<p style='color: $textColor; background-color: $backColor; border-style: $borderType;
        border-width: $borderWeight px; border-radius: $borderRadius %; border-color: $borderColor' >".$userText."</p>";
        echo "<br>";
    };

    ?>
</div>

</body>

</html>