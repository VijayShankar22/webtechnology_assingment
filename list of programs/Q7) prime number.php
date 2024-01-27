<!DOCTYPE html>
<html>

<body>
  <center>

    <h3>
     Prime Numbers<br>
    </h3>

    <form method="POST">
      Enter a number: <input type="text" name="num"> <input type="Submit" value="submit">
    </form>

  </center>

  <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $x = $_POST["num"];
        echo "<p>Prime numbers less than $x are: ";
        
        for ($i = 2; $i < $x; $i++) {
            $isPrime = true;
            
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
            
            if ($isPrime) {
                echo $i . " ";
            }
        }
        
        echo "</p>";
    }
    ?>
</body>

</html>
