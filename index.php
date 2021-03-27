<?php
$screen_maxlength=64;
$screen_value="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Virtual Keyboard </title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <div class="content">
        <div class="screen_panel">
            <form id="form" action="submit.php" method="post">
                <input type="text" name="screen" id="screen" maxlength="<?php echo $screen_maxlength; ?>" value="<?php echo $screen_value; ?>" <?php echo "readonly"; ?>>
                <input type="submit" id="submit_form" value="">
            </form>
        </div>
        <div class="keyboard_panel">
            <div class="row row1">
                <div class="key two_values" id="&#126; &#96;">
                    <p> &#126; </p>
                    <p> &#96; </p>
                </div>
                <div class="key two_values" id="&#33; &#49;">
                    <p> &#33; </p>
                    <p> &#49; </p>
                </div>
                <div class="key two_values" id="&#64; &#50;"> 
                    <p> &#64; </p>
                    <p> &#50; </p>
                </div>
                <div class="key two_values" id="&#35; &#51;"> 
                    <p> &#35; </p>
                    <p> &#51; </p>
                </div>
                <div class="key two_values" id="&#36; &#52;"> 
                    <p> &#36; </p>
                    <p> &#52; </p>
                </div>
                <div class="key two_values" id="&#37; &#53;"> 
                    <p> &#37; </p>
                    <p> &#53; </p>
                </div>
                <div class="key two_values" id="&#94; &#54;"> 
                    <p> &#94; </p>
                    <p> &#54; </p>
                </div>
                <div class="key two_values" id="&#38; &#55;">
                    <p> &#38; </p>
                    <p> &#55; </p>
                </div>
                <div class="key two_values" id="&#42; &#56;"> 
                    <p> &#42; </p>
                    <p> &#56; </p>
                </div>
                <div class="key two_values" id="&#40; &#57;">
                    <p> &#40; </p>
                    <p> &#57;  </p>
                </div>
                <div class="key two_values" id="&#41; &#48;">
                    <p> &#41; </p>
                    <p> &#48; </p>
                </div>
                <div class="key two_values" id="&#95; &#45;">
                    <p> &#95; </p>
                    <p> &#45; </p>
                </div>
                <div class="key two_values" id="&#43; &#61;">
                    <p> &#43; </p>
                    <p> &#61; </p>
                </div>
                <div class="special_key" id="backspace"> BACKSPACE </div>
            </div>
            <div class="row row2">
                <div class="special_key" id="tab"> TAB </div>
                <div class="key one_value" id="&#81;"> &#81; </div>
                <div class="key one_value" id="&#87;"> &#87; </div>
                <div class="key one_value" id="&#69;"> &#69; </div>
                <div class="key one_value" id="&#82;"> &#82; </div>
                <div class="key one_value" id="&#84;"> &#84; </div>
                <div class="key one_value" id="&#89;"> &#89; </div>
                <div class="key one_value" id="&#85;"> &#85; </div>
                <div class="key one_value" id="&#73;"> &#73; </div>
                <div class="key one_value" id="&#79;"> &#79; </div>
                <div class="key one_value" id="&#80;"> &#80; </div>
                <div class="key two_values" id="&#123; &#91;">
                    <p> &#123; </p>
                    <p> &#91; </p>
                </div>
                <div class="key two_values" id="&#125; &#93;">
                    <p> &#125; </p>
                    <p> &#93; </p>
                </div>
            </div>
            <div class="row row3">
                <div class="special_key" id="capslock">
                    <div id="capslock_text">
                        <p> CAPS </p>
                        <p> LOCK </p>
                    </div>
                    <input type="checkbox" name="caps" id="capslock_press">
                    <span id="capslock_checkbox"></span>
                </div>
                <div class="key one_value" id="&#65;"> &#65; </div>
                <div class="key one_value" id="&#83;"> &#83; </div>
                <div class="key one_value" id="&#68;"> &#68; </div>
                <div class="key one_value" id="&#70;"> &#70; </div>
                <div class="key one_value" id="&#71;"> &#71; </div>
                <div class="key one_value" id="&#72;"> &#72; </div>
                <div class="key one_value" id="&#74;"> &#74; </div>
                <div class="key one_value" id="&#75;"> &#75; </div>
                <div class="key one_value" id="&#76;"> &#76; </div>
                <div class="key two_values" id="&#58; &#59;">
                    <p> &#58; </p>
                    <p> &#59; </p>
                </div>
                <div class="key two_values" id="&#34; &#39;">
                    <p> &#34; </p>
                    <p> &#39; </p>
                </div>
                <div class="special_key" id="enter"> ENTER </div>
            </div>
            <div class="row row4">
                <div class="special_key" id="shift1"> SHIFT </div>
                <div class="key two_values" id="&#124; &#92;">
                    <p> &#124; </p>
                    <p> &#92; </p>
                </div>
                <div class="key one_value" id="&#90;"> &#90; </div>
                <div class="key one_value" id="&#88;"> &#88; </div>
                <div class="key one_value" id="&#67;"> &#67; </div>
                <div class="key one_value" id="&#86;"> &#86; </div>
                <div class="key one_value" id="&#66;"> &#66; </div>
                <div class="key one_value" id="&#78;"> &#78; </div>
                <div class="key one_value" id="&#77;"> &#77; </div>
                <div class="key two_values" id="&#60; &#44;">
                    <p> &#60; </p>
                    <p> &#44; </p>
                </div>
                <div class="key two_values" id="&#62; &#46;">
                    <p> &#62; </p>
                    <p> &#46; </p>
                </div>
                <div class="key two_values" id="&#63; &#47;">
                    <p> &#63; </p>
                    <p> &#47; </p>
                </div>
                <div class="special_key" id="shift2"> SHIFT </div>
            </div>
            <div class="row row5">
                <div class="special_key" id="space"> SPACEBAR </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JSFILE.js"></script>
</body>
</html>