

<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FIND A RIDE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <meta charset="utf-8">

    <meta name="description" content="The first carpooling company in Albania." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="css/styles.css" />

</head>


<body>
<?php
include 'navbar.php';
?>


<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-horizontal" action="searchCategory.php" method="post">
                    <fieldset>

                                                <!-- Form Name -->
                        <legend style= "color:red">FIND A RIDE</legend>



                        <button type="button" class="btn btn-default">Default</button>
                        <div class="form-group">
                            <label for="usr">Find A Ride :</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <?php
                        /*
                        if(isset($_POST["Search"])) {

                            require_once '../dbConnect.php';
                            $search="%".$_POST['pSearch']."%";
                            $sql = "SELECT p.Name AS Name, p.Preis AS Preis, p.Beschreibung AS Beschreibung, c.Name AS cName";
                            $sql .= " FROM [4yS4_DonaldGjeloshi_webshop].[dbo].[Produkt] AS p";
                            $sql .= " JOIN [4yS4_DonaldGjeloshi_webshop].[dbo].[Kategory] AS c";
                            $sql .= " ON p.ID_Kategory = c.ID_Kategory";
                            $sql .= " WHERE p.Name LIKE ?";
                            $sql .= " OR p.Beschreibung LIKE ?";
                            $sql .= " OR c.Name LIKE ?";



                            $sth = $dbh->prepare($sql);
                            $sth->bindParam(1, $search );
                            $sth->bindParam(2, $search);
                            $sth->bindParam(3, $search);

                            $sth->execute();
                            $result=$sth->fetchAll(PDO::FETCH_ASSOC);

                            echo "<h3>Results</h3>";

                            echo "<table class=\"table table-striped\">";
                            echo "<tr>";
                            echo "<th>Name</th>";
                            echo "<th>Price</th>";
                            echo "<th>Description</th>";
                            echo "<th>Category</th>";
                            echo "</tr>";

                            if(count($result) > 0) {
                                foreach($result as $row) {

                                    echo "<tr>";
                                    echo "<td>" . $row["Name"] . "</td>";
                                    echo "<td>" . $row["Preis"] . "</td>";
                                    echo "<td>" . $row["Beschreibung"] . "</td>";
                                    echo "<td>" . $row["cName"] . "</td>";
                                    echo "</tr>";

                                }
                            } else
                                echo "<h2>There is no Product with that name, category, price or description!</h2>";

                            echo "</table>";

                        }
                        */
                         ?>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
include 'footer.php';
?>

</body>
</html>