<html>
    <head>
       <title>List box</title>
    </head>
<body>

<script>
    function moveElements()
    {
        var Fruits =document.getElementById("available");
        var items = document.getElementById("selected");

        for(var i=0; i<Fruits.options.length; i++)
        {
            var option = Fruits.options[i];

            if(option.selected)
            {
                items.add(new Option(option.text, option.value));

                Fruits.remove(i);
                i--;
            }
        }
    }
</script>
    Select Items:<br />
    <select id="available" multiple>

    <option value="Apple">Apple</option>
    <option value="Banana">Banana</option>
    <option value="Orange">Orange</option>
    <option value="Mango">Mango</option>
    <option value="Grape">Grape</option>
    <option value="Melon">Melon</option>
    </select><br />

    <button onclick = "moveElements()">Add Fruit</button><br />


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <select name="items[]" id="selected" multiple></select><br />
    <input type="submit" name="s" value="Get" />
    </form>
    <?php
    if(array_key_exists('s',$_GET))
    {
        $description = join(' ', $_GET['items']);
        echo "You got \"{$description}\"";
    }
    ?>
</body>
</html>