<!doctype html>
<html lang="en">

<head>
    <title>My Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>

    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <div>
            <h1 style="text-align:center; margin-top: 150px; color:rgb(201, 103, 6);">My Calculator</h1>
        </div>
        <div class="card" style="text-align:center; margin:auto; background-color:rgb(255, 255, 255); max-width:450px;">
            <div class="card-body">
                <form method="get">
                    <input type="number" name="num1" class="rounded" style="max-width:130px" placeholder="<?php if (isset($_GET['submit'])) {
                                            echo $_GET['num1'];
                                        } else {
                                            echo "Enter Number";
                                        } ?>">
                    <select name="operator">
                        <option value="Add" selected>+</option>
                        <option value="Subtract">-</option>
                        <option value="Multiply">x</option>
                        <option value="Divide">/</option>
                    </select>
                    <input type="number" name="num2" class="rounded" style="max-width:130px" placeholder="<?php if (isset($_GET['submit'])) {
                                            echo $_GET['num2'];
                                        } else {
                                            echo "Enter Number";
                                        } ?>">
                    <button type="submit" name="submit" value="submit" class="rounded"
                        style="color:white; background-color:rgb(201, 103, 6);">Calculate</button>
                </form>
                <br>
                <p style="padding-right:20px;">
                    <?php
                    if (isset($_GET['submit'])) {
                        $num1 = $_GET['num1'];
                        $num2 = $_GET['num2'];
                        $operator = $_GET['operator'];

                        if ($num1 != null && $num2 != null) {
                            if ($operator == "Add") {
                                echo  "The result is " . ($num1 + $num2);
                            } elseif ($operator == "Subtract") {
                                echo "The result is " . ($num1 - $num2);
                            } elseif ($operator == "Multiply") {
                                echo "The result is " . ($num1 * $num2);
                            } elseif ($operator == "Divide") {
                                if ($num2 != 0) {
                                    echo "The result is " . ($num1 / $num2);
                                } else {
                                    echo "Can not divide by zero";
                                }
                            }
                        } else {
                            echo "Please enter both numbers";
                        }
                    }
                    ?>
                </p>
            </div>
            <div>
                <p style="color:rgb(201, 103, 6); font-size:10px;">Created by Thanasis Kouskouras for PHP training!</p>
            </div>
        </div>


    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>