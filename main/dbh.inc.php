<?php




// if ($_SERVER["REQUEST_METHOD"] == "POST") {



//     $servername = "localhost";
//     $username = "root";
//     $dbpassword = '';


//     try {

//         $conn = new PDO("mysql:host=$servername;dbname=user_data", $username, $dbpassword);

//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//         $name = $_POST["User_name"];
//         $email = $_POST["User_email"];
//         $password = 'Dash@12';
//         $dob = $_POST["User_Dob"];


//         // $query = "Insert INTO users(NAME , EMAIL , PASSWORD , DOB) VALUES (:NAME , :EMAIL , :PASSWORD , :DOB);";
//         // $query = "UPDATE users SET PASSWORD = :PASSWORD WHERE NAME = 'Sachin'; ";

//         $statement = $conn->prepare($query);

//         // $statement->bindParam(":NAME", $name);
//         // $statement->bindParam(":EMAIL", $email);
//         // $statement->bindParam(":PASSWORD", $password);
//         // $statement->bindParam(":DOB", $dob);

//         $statement->execute();

//         $conn = null;
//         $statement = null;

//         header("location: ./index.php");


//         die();


//     } catch (PDOException $e) {

//         echo "error occured" . $e->getMessage();
//     }
// } else {

//     header("location: ./login.php");
// }












$servername = "localhost";
$username = "root";
$password = "";



try {

    $database = new PDO("mysql: host=$servername; dbname=shopping_website", $username, $password);

    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $name = "Men's Blue Mickey Graphic Printed Oversized Hoodies";
    // $price = 3499;
    // $discount = 51  ;
    // $category = "men, hoodie , sweatshirt, wintercollection";
    // $discription = "4.3";
    // $front_img = "https://images.bewakoof.com/t1080/men-s-blue-mickey-graphic-printed-oversized-hoodies-628324-1703651026-1.jpg";
    // $other_img = "https://images.bewakoof.com/original/men-s-blue-mickey-graphic-printed-oversized-hoodies-628324-1703651031-2.jpg , https://images.bewakoof.com/t96/men-s-blue-mickey-graphic-printed-oversized-hoodies-628324-1703651042-4.jpg , https://images.bewakoof.com/t96/men-s-blue-mickey-graphic-printed-oversized-hoodies-628324-1703651042-4.jpg , https://images.bewakoof.com/t96/men-s-blue-mickey-graphic-printed-oversized-hoodies-628324-1703651052-6.jpg";



    // $insertquery = "insert into products(NAME , PRICE , DISCOUNT ,DISCRIPTION , FRONT_IMG , OTHER_IMG , CATEGORY) VALUES (:NAME , :PRICE , :DISCOUNT , :DISCRIPTION , :FRONT_IMG , :OTHER_IMG , :CATEGORY );";


    // $finalquery = $database->prepare($insertquery);


    // $finalquery->bindParam(":NAME" , $name);
    // $finalquery->bindParam(":PRICE" , $price);
    // $finalquery->bindParam(":DISCOUNT" , $discount);
    // $finalquery->bindParam(":DISCRIPTION" , $discription);
    // $finalquery->bindParam(":FRONT_IMG" , $front_img);
    // $finalquery->bindParam(":OTHER_IMG" , $other_img);
    // $finalquery->bindParam(":CATEGORY" , $category);




    $selectquery = "SELECT * FROM products;";

    $finalquery = $database->prepare($selectquery);

    
    $finalquery->execute();

    $Result = $finalquery->fetchAll(PDO::FETCH_ASSOC);

    
    $database = null;
    $finalquery = null;


    
} catch (PDOException $err) {

    echo "Request failed " . $err->getMessage();
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
