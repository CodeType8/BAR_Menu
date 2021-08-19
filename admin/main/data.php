<?php
$servername = "localhost";
$username = "codetype";
$password = "jj2640";
$table = "bar";

// 초기화
$conn = new mysqli($servername, $username, $password, $table);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM item ORDER BY id ASC";
$list = mysqli_query($conn, $query);

if (isset($_POST["upload_data"])) {
    $basetype = $_POST['basetype'];
    if ($basetype == "Select") {
        echo "Base Type value required";
        exit;
    }
    $title = $_POST['title'];
    if ($title == "") {
        echo "Title value required";
        exit;
    }
    $detail = $_POST['detail'];
    if ($detail == "") {
        echo "Detail value required";
        exit;
    }
    $remark = $_POST['remark'];

    $check_aws_query = "SELECT * FROM item WHERE (title = '$title') AND (basetype = '$basetype') ORDER BY id ASC";
    $check_aws_result = mysqli_query($conn, $check_aws_query);
    $check_aws_data = mysqli_fetch_array($check_aws_result);

    if ($check_aws_data[0]) {
        echo "Data already exist";

        exit;
    }
    $addsql = "INSERT INTO item (basetype, title, detail, remark) VALUES ('$basetype', '$title', '$detail', '$remark')";

    if (mysqli_query($conn, $addsql)) {
        echo "New FILE record created successfully<br>";
        header("Location: index.php");
    } else {
        echo "Error: " . $addsql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST["submit_del"])) {
    $c_id = $_POST['c_id'];

    $check_query = "SELECT * FROM item WHERE (id = '$c_id')";
    $check_result = mysqli_query($conn, $check_query);
    $check_data = mysqli_fetch_array($check_result);

    if ($check_data[0]) {
        $sql_file = "DELETE FROM item WHERE (id = '$c_id')";

        if (mysqli_query($conn, $sql_file)) {
            echo "FILE Record deleted successfully";
            header("Location: index.php");
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    } else {
        echo "Data not exist";
    }
}
if (isset($_POST["import_data"])) {
    $filetype = $_POST['file_type'];
    $file = $_FILES["file_data"]["tmp_name"];
    if ($file == "") {
        echo '<script>alert("Please choose the File");</script>';
        exit();
    }

    $i = 0;
    $file_open = fopen($file, "r");
    $data = array();
    $data2 = array();
    while (($data[$i] = fgetcsv($file_open)) !== false) {
        $count = 0;
        foreach ($data[$i] as &$val) {
            $data[$i][$count] = $val;
            $count += 1;
        }
        $title = $data[$i][0];
        #echo $title;
        $basetype = $data[$i][1];
        #echo $basetype;
        $detail = $data[$i][2];
        #echo $detail;
        $remark = $data[$i][3];
        #echo $remark;

        $check_aws_query = "SELECT * FROM item WHERE (title = '$title') AND (basetype = '$basetype') ORDER BY id ASC";
        $check_aws_result = mysqli_query($conn, $check_aws_query);
        $check_aws_data = mysqli_fetch_array($check_aws_result);

        if ($check_aws_data[0]) {
            echo "(" . $title . ") Data already exist<br>";
        } else {
            $addsql = "INSERT INTO item (basetype, title, detail, remark) VALUES ('$basetype', '$title', '$detail', '$remark')";
            if (mysqli_query($conn, $addsql)) {
                echo  "(" . $title . ") New record created successfully<br>";
                header("Location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
                print_r($data2);
            }
            $i++;
        }
        //unset($data);
    }
    mysqli_close($conn);
}