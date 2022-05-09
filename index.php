<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR FREE</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <form method="GET" action="">
                            <label for="">Numero 1</label>
                            <input type="number" name="number1" class="form-control" placeholder="ingrese el primer numero" aria-label="Disabled input example" required> <br>
                            <label for="">Numero 2</label>
                            <input type="number" name="number2" class="form-control" placeholder="ingrese el segundo numero" aria-label="Disabled input example" require> <br>
                            <label for="">Escoja la operacion</label>
                            <select name="opcion" id="" class="form-control">
                                <option value="suma">+</option>
                                <option value="resta">-</option>
                                <option value="mult">*</option>
                                <option value="divi">/</option>   
                            </select> <br>
                            <button  type="button submit" class="btn btn-outline-dark"> Result</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2 offset-md-5">
            <?php 
            $operation = $_GET['opcion'];
            $num1 =$_GET['number1'];
            $num2 =$_GET['number2'];
            $res = $num1 + $num2;
            $res1 = $num1 - $num2;
            $res2 = $num1 * $num2;
            $res3 = $num1 / $num2;

            if ($operation == 'suma'){
                print ("La suma de: ".$num1." + ".$num2." = ".$res."");
            }else if($operation == 'resta'){
                print ("La resta de: ".$num1." - ".$num2." = ".$res1."");
            }else if ($operation == 'mult'){
                print ("La multiplicacion de: ".$num1." * ".$num2." = ".$res2."");
            }else if ($operation == 'divi'){
                print ("La division de: ".$num1." / ".$num2." = ".$res3."");
            }
            ?>

        </div>
    </div>
</body>
</html>

