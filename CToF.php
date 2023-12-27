<html>
<head>
<title>Temperature Conversion</title>
</head>
<body>
<?php
if (isset ( $_GET ['fahrenheit'] )) {
$fahrenheit = $_GET ['fahrenheit'];
} else {
$fahrenheit = null;
}
if (is_null ( $fahrenheit )) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
     Fahrenheit temperature: <input type="text" name="fahrenheit" /><br />
    <input type="submit" value="Convert to Celsius!" />
    </form>
    <?php
    } else {
    $celsius = ($fahrenheit - 32) * 5 / 9;
    printf ( "%.2fF is %.2fC", $fahrenheit, $celsius );
    }
    ?>
    
<?php
if (isset ( $_GET ['Celsius'] )) {
$Celsius = $_GET ['Celsius'];
} else {
$Celsius = null;
}
if (is_null ( $Celsius )) {
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
     Celcius temperature: <input type="text" name="Celsius" /><br />
    <input type="submit" value="Convert to Fahrenheit!" />
    </form>
    <?php
    } else {
        $Fahrenheit = ($Celsius * 9 / 5) + 32;
        printf ( "%.2fC is %.2fF", $Celsius, $Fahrenheit);
    }
    ?>
    </body>
    </html>