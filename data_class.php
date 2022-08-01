<?php
include("db.php");

// session_start();
class data extends db
{

    function __construct()
    {
        // echo " constructor ";
        // echo "</br></br>";
    }



    function adminLogin($t1, $t2)
    {

        $q = "SELECT * FROM `admin` WHERE EMAIL='$t1' and PASSWORD='$t2'";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowCount();
        // header("location: index.php?msg=Invalid User");
        if ($result > 0) {

            foreach ($recordSet->fetchAll() as $row) {
                $logid = $row['id'];
                $_SESSION["adminid"] = $logid;
                header("location: admin_dashboard.php");
            }
        } else {
            header("location: index.php?msg=Invalid User");
        }
    }
    function userLogin($t1, $t2)
    {
        $q = "SELECT * FROM `user data` WHERE EMAIL='$t1' and PASSWORD='$t2'";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowCount();
        // header("location: index.php?msg=Invalid User");
        if ($result > 0) {

            foreach ($recordSet->fetchAll() as $row) {
                $logid = $row['id'];
                // $_SESSION["adminid"] = $logid;
                header("location: user_dashboard.php?userlogid=$logid");
            }
        } else {
            header("location: index.php?msg=Invalid User");
        }
    }

    function userdetail($id){
        $q="SELECT * FROM `user data` where id ='$id'";
        $data=$this->connection->query($q);
        return $data;
    }


    function addnewuser($addname, $addpassword, $addemail, $type)
    {
        // echo "Login to data class done";
        $this->addname = $addname;
        $this->addpassword = $addpassword;
        $this->addemail = $addemail;
        $this->type = $type;

        $q = "INSERT INTO `user data`(`id`, `Name`, `Email`, `Password`, `type`) VALUES ('','$addname','$addemail','$addpassword','$type')";

        if ($this->connection->exec($q)) {
            header("Location:admin_dashboard.php?msg=New User Added Sucessfully");
            // echo "Added Sucessfully";
        } else {
            header("Location:admin_dashboard.php?msg=Register Fail");
        }
    }

    function addbook($bookpic, $bookname, $bookdetail, $bookauthor, $bookpublication, $bookbranch, $bookprice, $bookquantity)
    {
        $this->bookpic = $bookpic;
        $this->bookname = $bookname;
        $this->bookdetail = $bookdetail;
        $this->bookauthor = $bookauthor;
        $this->bookpublication = $bookpublication;
        $this->bookbranch = $bookbranch;
        $this->bookprice = $bookprice;
        $this->bookquantity = $bookquantity;


        $q = "INSERT INTO `book`(`id`, `pic`, `name`, `detail`, `author`, `publication`, `branch`, `price`, `quantity`, `availability`, `rent`) VALUES ('','$bookpic','$bookname','$bookdetail','$bookauthor','$bookpublication','$bookbranch','$bookprice','$bookquantity','$bookquantity','0')";

        if ($this->connection->exec($q)) {
            header("Location:admin_dashboard.php?msg=Book Added Sucessfully");
            // echo "Book Added Sucessfully";
        } else {
            header("Location:admin_dashboard.php?msg=Failed to add Book");
            // echo "Failed to add book";
        }
    }


    function userdata()
    {
        $q = "SELECT * FROM `user data`";
        $query = $this->connection->query($q);
        // $num=mysqli_num_rows($query);
        // echo $num;
        return $query;
    }

    function bookdata()
    {
        $q = "SELECT * FROM book";
        $query = $this->connection->query($q);
        return $query;
    }


    function getbookissue()
    {
        $q = "SELECT * FROM BOOK where availability!=0";    
        $query = $this->connection->query($q);
        return $query;
    }

    function issuedata(){
        $q = "SELECT * FROM `issue book`";
        $query = $this->connection->query($q);
        return $query;
    }

    function issuebook($book, $selectuser, $days, $getdate, $returnDate)
    {
        $this->book = $book;
        $this->selectuser = $selectuser;
        $this->days = $days;
        $this->getdate = $getdate;
        $this->returnDate = $returnDate;


        $q = "SELECT * FROM book where name='$book'";
        $recordbook = $this->connection->query($q);

        $q = "SELECT * FROM `user data` WHERE Name='$selectuser'";
        $recorduser = $this->connection->query($q);
        $result = $recorduser->rowCount();

        if ($result > 0) {

            foreach ($recorduser->fetchAll() as $row) {
                $userid = $row['id'];
                $usertype = $row['type'];

                // header("location: admin_service_dashboard.php?logid=$logid");
            }
            foreach ($recordbook->fetchAll() as $row) {
                $bookid = $row['id'];
                // $bookname = $row['name'];

                $newbookava = $row['availability'] - 1;
                $newbookrent = $row['rent'] + 10;
            }


            $q = "UPDATE book SET availability='$newbookava', rent='$newbookrent' where id='$bookid'";
            if ($this->connection->query($q)) {

                $q = "INSERT INTO `issue book`(`userid`, `username`, `bookname`, `usertype`, `issuedays`, `issuedate`, `returndate`, `fine`) VALUES ('$userid','$selectuser','$book','$usertype','$days','$getdate','$returnDate','0')";

                if ($this->connection->exec($q)) {
                    // header("Location:admin_service_dashboard.php?msg=done");
                    echo "Book Issued Sucessfully";
                }
                 else {
                    // header("Location:admin_service_dashboard.php?msg=fail");
                    echo "Failed to issue the book";
                }
            }
        }
         else {
            // header("location: index.php?msg=Invalid Credentials");
            echo "Invalid Data Entered";
        }
    }

    function getissuebook($userloginid) {

        $newfine="";
        $issuereturn="";

        $q="SELECT * FROM `issue book` where userid='$userloginid'";
        $recordSetss=$this->connection->query($q);


        foreach($recordSetss->fetchAll() as $row) {
            $issuereturn=$row['returndate'];
            $fine=$row['fine'];
            $newfine= $fine;

            
                //  $newbookrent=$row['bookrent']+1;
        }


        $getdate= date("d/m/Y");
        if($issuereturn<$getdate){
            $q="UPDATE `issue book` SET fine='$newfine' where userid='$userloginid'";

            if($this->connection->exec($q)) {
                $q="SELECT * FROM `issue book` where userid='$userloginid' ";
                $data=$this->connection->query($q);
                return $data;
            }
            else{
                $q="SELECT * FROM `issue book` where userid='$userloginid' ";
                $data=$this->connection->query($q);
                return $data;  
            }

        }
        else{
            $q="SELECT * FROM `issue book` where userid='$userloginid'";
            $data=$this->connection->query($q);
            return $data;

        }

    }

    function returnbook($id){
        $fine="";
        $bookava="";
        $issuebook="";
        $bookrentel="";

        $q="SELECT * FROM `issue book` where id='$id'";
        $recordSet=$this->connection->query($q);    

        foreach($recordSet->fetchAll() as $row) {
            $userid=$row['userid'];
            $issuebook=$row['bookname'];
            $fine=$row['fine'];

        }
        if($fine==0){

        $q="SELECT * FROM book where name='$issuebook'";
        $recordSet=$this->connection->query($q);   

        foreach($recordSet->fetchAll() as $row) {
            $bookava=$row['availability']+1;
            $bookrentel=$row['rent']-1;
        }
        $q="UPDATE book SET availability='$bookava', rent='$bookrentel' where name='$issuebook'";
        $this->connection->exec($q);

        $q="DELETE from `issue book` where id=$id and bookname='$issuebook' and fine='0' ";
        if($this->connection->exec($q)){
    
            header("Location:user_dashboard.php");
         }
        //  else{
        //     header("Location:otheruser_dashboard.php?msg=fail");
        //  }
        }
        // if($fine!=0){
        //     header("Location:otheruser_dashboard.php?userlogid=$userid&msg=fine");
        // }
       

    }


    function requestbook($userid,$bookid){

        $q="SELECT * FROM book where id='$bookid'";
        $recordSetss=$this->connection->query($q);

        $q="SELECT * FROM  `user data` where id='$userid'";
        $recordSet=$this->connection->query($q);

        foreach($recordSet->fetchAll() as $row) {
            $username=$row['Name'];
            $usertype=$row['type'];
        }

        foreach($recordSetss->fetchAll() as $row) {
            $bookname=$row['name'];
        }
            
        $days=0;

        if($usertype=="student"){
            $days=7;
        }
        if($usertype=="teacher"){
            $days=21;
        }


        $q="INSERT INTO requestbook (id,userid,bookid,username,usertype,bookname,issuedays)VALUES('','$userid', '$bookid', '$username', '$usertype', '$bookname', '$days')";

        if($this->connection->exec($q)) {
            // header("Location:user_dashboard.php?userlogid=$userid");
            echo "Book Requested Sucessfully";
        }

        else {
            // header("Location:otheruser_dashboard.php?msg=fail");
            echo "Error";
        }

    }



    function requestbookdata(){
        $q="SELECT * FROM requestbook ";
        $data=$this->connection->query($q);
        return $data;
    }
}
