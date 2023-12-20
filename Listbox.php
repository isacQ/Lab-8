<html>
    <head>
       <title>List box</title>
    </head>
<body>
<?php
$item = $_GET['items'];
if(!is_array($item)){
    $item = array();
} 
?>
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
    <button onclick = "result('items')">Buy</button>
    </form>
     


<?php 
function result($item)
{   
    $description = join(' ', $item);
    echo "You got \"{$description}\" fruits";
}
?>
</body>
</html>