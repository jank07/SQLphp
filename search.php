<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userSearch = $_POST["usersearch"];
    
        try {
            require_once "includes/dbh.inc.php";
    
            $query = "SELECT * FROM comments WHERE username = :usersearch;";
    
            // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
    
            $stmt = $pdo->prepare($query);
    
            $stmt->bindParam(":usersearch", $userSearch);
    
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
            // $stmt->execute([$username, $pwd, $email]);
    
            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    else {
        header("Location: ../index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        
        <h3>Search results:</h3>

        <?php

        if(empty($result)) {
            echo "<div>";
            echo "<p>No results.</p>";
            echo "</div>";
        }
        else {
            foreach($result as $row) {
                echo "<div>";
                echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
                echo "<p>" .htmlspecialchars($row["comment_text"]) . "</p>";
                echo "<p>" .htmlspecialchars($row["created_at"]) . "</p>";
                echo "</div>";
            }
        }

        ?>

    </section>


</body>
</html>