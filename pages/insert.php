<body> 
    <main>
        <style>
            body {
                color: aliceblue;
                background-color: #213643;
                text-align: center;
            }
            main{
                border-style: dashed;
                border-color: aliceblue;
                margin-left: 100px;
                margin-right: 100px;
            }
            
            a:link{
                color: beige;
            }
            a:visited {
                color: purple;
            }
            a:hover {
                color: antiquewhite;
            }
            p {
                font-size: 18px;
            }
            p:last-of-type {
                font-size: 14px;
            }
        </style>

        <?php

            include "../databases/connect.php";

            $firstname=' ';
            $email=' ';

            $lastname=$_POST['lastname'];
            $event=$_POST['event'];
            $tel=$_POST['phone'];
            $persons=$_POST['no'];

            if(isset($_POST['firstname'])){
                $firstname=$_POST['firstname'];
            }
            if(isset($_POST['email'])){
                $email=$_POST['email'];
            }

            $sql="INSERT INTO BOOKINGS(LAST_NAME, FIRST_NAME, EVENT_SELECTION, EMAIL, TEL, PERSONS) VALUES('$lastname', '$firstname', '$event', '$email', '$tel', '$persons');";

            if($conn->query($sql)===TRUE){
                echo "<br><h2>You booked your seat successfully!<h2>";
                echo "<br>";
            } else {
                echo "ERROR: " . $sql . "<br>" . $conn->error;
            }
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p>".$_FILES['file1']['type']."<br></p>";
                $fileToMove = $_FILES['file1']['tmp_name'];
                $destination = "../uploads/".$_FILES["file1"]["name"];
                echo "<p>FILE: ".$fileToMove."<br>DESTINATION: ".$destination."<br></p>"; 
                if (move_uploaded_file($fileToMove,$destination)) {
                    echo "<p>File was successfully sent to server<br></p>";
                }
                else {
                    echo "<p>there was a problem uploading coupon or no coupon provided<br></p>";
                }
            }
            echo "<h1><br><a href=index.html#form>BACK TO MAIN PAGE</a><h1>";    
            echo "<br>";


        ?>
    </main>
</body>