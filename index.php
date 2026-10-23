<h1>My First PHP Page</h1>
<?php  
for ($x = 0; $x <= 100; $x++) {
 ?> <b> <?php echo "The number is: $x <br>";?></b> 
<?php
}?>

<div id="demo"></div>

<script>
    var x = 5;
    var y = 10;
    var z = x + y;
    document.getElementById("demo").innerHTML = z;
</script>
 