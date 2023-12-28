<?php
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "matarat";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}

$conn = OpenCon();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    CloseCon($conn);
} else {
    $str_json = file_get_contents('php://input');
    if ($str_json) {
        $json = json_decode($str_json, JSON_OBJECT_AS_ARRAY);
        $age = $json["Age"];
        $gender = $json["Gender"];
        $expression = $json["Expression"];
        $stmt = $conn->prepare(
            "INSERT INTO ksnations (age,gender,expression) VALUES (?,?,?)"
        );
        $stmt->bind_param("iss", $age, $gender, $expression);
       
        $stmt->execute();
        if ($stmt) {
            print "Successfly\n";
            print_r($json);
        }else{
            echo "Something went Wrong";
        }
    } else {
        echo "No Data Setit";
    }
}
