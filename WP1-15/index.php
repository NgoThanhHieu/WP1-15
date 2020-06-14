<?php
$submit = filter_input(INPUT_POST, 'submit');
$dough = filter_input(INPUT_POST, 'dough');

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    if(isset($submit)) { ?>
 
        <h2>Potvrzení objednávky</h2>
        <p>Děkujeme za vaši objednávku, kterou vám odvezeme co nejdříve.</p>
        <p>Objednal jste si pizzu s: </p>
        <p><?= $dough ?> těsto</p>
        <h3>Ingredience</h3>
        
        <ul>
        <?php
        $ingredients = $_POST['ingredients'];
        foreach ($ingredients as $item) { ?>
            <li><?= $item; ?></li>
        <?php }
 
        ?>
        </ul>       

        

        <?php
        }   else { ?>
            
            <form action="index.php" method="post">
        <h2>Typ těsta</h2>
        <input type="radio" name="dough" id="normal" value="Normální">
        <label for="normal">Normální</label></br>
        
        <input type="radio" name="dough" id="glutenfree" value="Glutenfree">
        <label for="glutenfree">Bezlepkové</label></br>
        
        <h2>Ingredience</h2>
                
        <input type="checkbox" name="ingredients[]" id="ham" value="Šunka">
        <label for="ham">Šunka</label></br>
        
        <input type="checkbox" name="ingredients[]" id="cheese" value="Sýr">
        <label for="cheese">Sýr</label></br>              
        
        <input type="checkbox" name="ingredients[]" id="fefe" value="Feferonky">
        <label for="fefe">Feferonky</label></br>

        <input type="checkbox" name="ingredients[]" id="tomato" value="Rajče">
        <label for="tomato">Rajče</label></br>
        
        <input type="checkbox" name="ingredients[]" id="mushrom" value="Houby">
        <label for="mushrom">Houby</label></br>        
        
        <input type="checkbox" name="ingredients[]" id="pine" value="Ananas">
        <label for="pine">Ananas</label></br>       
        
        <input type="checkbox" name="ingredients[]" id="salami" value="Salám">
        <label for="salami">Salám</label></br>

        <input type="checkbox" name="ingredients[]" id="sea" value="Mořský plody">
        <label for="sea">Mořský plody</label></br>        
        
        <input type="checkbox" name="ingredients[]" id="chick" value="Kuře">
        <label for="chick">Kuře</label></br>       
        
        <input type="checkbox" name="ingredients[]" id="corn" value="Kukuřice">
        <label for="corn">Kukuřice</label></br>

        <input type="submit" name="submit" value="Odeslat" value="">
    </form>
      <?php  } 
    ?>
    

</body>
</html>