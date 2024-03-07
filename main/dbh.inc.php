<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $servername = "localhost";
    $username = "root";
    $dbpassword = '';


    try {

        $conn = new PDO("mysql:host=$servername;dbname=user_data", $username, $dbpassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $name = $_POST["User_name"];
        $email = $_POST["User_email"];
        $password = 'Dash@12';
        $dob = $_POST["User_Dob"];


        // $query = "Insert INTO users(NAME , EMAIL , PASSWORD , DOB) VALUES (:NAME , :EMAIL , :PASSWORD , :DOB);";
        // $query = "UPDATE users SET PASSWORD = :PASSWORD WHERE NAME = 'Sachin'; ";

        $statement = $conn->prepare($query);

        // $statement->bindParam(":NAME", $name);
        // $statement->bindParam(":EMAIL", $email);
        // $statement->bindParam(":PASSWORD", $password);
        // $statement->bindParam(":DOB", $dob);

        $statement->execute();

        $conn = null;
        $statement = null;

        header("location: ./index.php");


        die();


    } catch (PDOException $e) {

        echo "error occured" . $e->getMessage();
    }
} else {

    header("location: ./login.php");
}






























































































// $servername = "localhost";
// $username = "root";
// $password = '';



// if ($_SERVER["REQUEST_METHOD"] == "POST") {



//     try {



//         $conn = new PDO("mysql:host=$servername;dbname=user_data", $username, $password);

//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



//         $name = htmlspecialchars($_POST["User_name"]);
//         $email = htmlspecialchars($_POST["User_email"]);
//         $pass = htmlspecialchars($_POST["User_password"]);
//         $dob = htmlspecialchars($_POST["User_Dob"]);

//         $query = "INSERT INTO users(NAME , EMAIL , PASSWORD , DOB) VALUES (:NAME , :EMAIL , :PASS , :DOB);";

//         $stmt = $conn->prepare($query);

//         $stmt->bindParam(":NAME", $name);
//         $stmt->bindParam(":EMAIL", $email);
//         $stmt->bindParam(":PASS", $pass);
//         $stmt->bindParam(":DOB", $dob);

//         $stmt->execute();

//         $conn = null;
//         $stmt = null;


//         header("location: ./index.php");

//         die();


//     } catch (PDOException $e) {

//         echo "error occured" . $e->getMessage();
//     }


// } else {

//     header("Location: ./login.php");

// }
