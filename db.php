    <?php
    class db{
        protected $connection;
        function setconnection(){
            try {
                $this->connection=new PDO("mysql:host=localhost;dbname=library management","root","");
                    // echo "Connection to the database is sucessfull";
                } 
                catch (PDOException $e){
                echo "Error";
            }
        }
    }
?>
