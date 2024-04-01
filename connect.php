 <?php
        $username = $_POST['username'];
        $email  = $_POST['email'];
        $num = $_POST['num'];
        $sub = $_POST['sub'];
        $msg = $_POST['msg'];

        // database connection
        $conn = new mysqli('localhost','root','','portfolio');
        if($conn->connect_error){
            die('connection failed : '.$conn->connect_error);
        }
        else{
            $stmt = $conn->prepare("insert into  contact(username,email,num,sub,msg)
            values(?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss",$username,$email,$num,$sub,$msg);
            $stmt->execute();
            echo"registration done ";
            $stmt->close();
            $conn->close();
        }



 /*
        $username = filter_input(INPUT_POST,'username');
        $email = filter_input(INPUT_POST,'email');
        $num = filter_input(INPUT_POST,'num');
        $sub = filter_input(INPUT_POST,'sub');
        $msg = filter_input(INPUT_POST,'msg');
        if(!empty($username)){
        if(!empty($email)){
        if(!empty($num)){
        if(!empty($sub)){
        if(!empty($msg)){
        
            $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="portfolio";

            //create connection
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
            if(mysqli_connect_error()){
                die('connect Error('.mysqli_connect_errno() .')'.mysqli_connect_error());
            }
            else{
                $sql = "INSERT INTO contact (username, email, num, sub, msg)
                 VALUES ('$username','$email','$num',' $sub',' $msg')";
                if($conn->querry($sql)){
                    echo"NEW RECORD IS INSERTED SUCCESSFULLY";
                }
                else{
                    echo"Error :".sql."<br>".conn->error;
                }
                $conn->close();
            }

        }
        else{
            echo"message should not be empty";
            die();
        }
        }
        else{
            echo"subject should not be empty";
            die();
        }
        }
        else{
            echo"number should not be empty";
            die();
        }
        }
        else{
            echo"email should not be empty";
            die();
        }

        }
        else{
            echo"Username should not be empty";
            die();
        }
*/ ?> 