<?php
    private $HOST = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DB_NAME = "bus_management_system";
    private $Bus_route = "bus_route";
    private $Ticket = "ticket";
    private $Bus_model = "bus_model";
    private $driver = "driver";
    private $pass = "pass";
    
    public $conn;

    public function connect() {
        $this->conn = mysqli_connect($this->HOST, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);  

        return $this->conn; 
    }

    public function add_bus_route($bus_name,$from ,$to) {

        $this->connect();

        $query = "INSERT INTO $this->Bus_route(bus_name,from,to) VALUES('$from','$to','$bus_name');";
    
        $res = mysqli_query($this->conn, $query);

        return $res;        
    }


    public function delete_bus_route($id) {

        $this->connect();

        $query = "DELETE FROM $this->Bus_route WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }

    public function fetch_route_Data(){
        $this->connect();

        $query = "SELECT * FROM Bus_route;";

        $res = mysqli_query($this->conn, $query);

        return $res;   
    }
    
    public function update_route($id, $bus_name, $from, $to) {
        $this->connect();

        $query = "UPDATE bus_route SET bus_name=$bus_name, from =$from, to = $to WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }


    public function add_bus_ticket($name,$from,$to,$price,$time) {

        $this->connect();

        $query = "INSERT INTO $this->Ticket(name,from,to,price,time) VALUES('$name','$from','$to','$price','$time');";
    
        $res = mysqli_query($this->conn, $query);

        return $res;        
    }

    public function delete_bus_ticket($id) {

        $this->connect();

        $query = "DELETE FROM $this->Ticket WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }

    public function fetch_ticket_Data(){
        $this->connect();

        $query = "SELECT * FROM Ticket;";

        $res = mysqli_query($this->conn, $query);

        return $res;   
    }

    public function update_ticket($id, $name, $from, $to,$price,$time) {
        $this->connect();

        $query = "UPDATE Ticket SET bus_name=$bus_name, from =$from, to = $to, price = $price,time=$time WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }
    
    public function add_bus_model($model_name) {

        $this->connect();

        $query = "INSERT INTO $this->Bus_model(model_name) VALUES('$model_name',);";
    
        $res = mysqli_query($this->conn, $query);

        return $res;        
    }

    public function delete_bus_model($id) {

        $this->connect();

        $query = "DELETE FROM $this->Ticket WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }

    public function fetch_model_Data(){
        $this->connect();

        $query = "SELECT * FROM Ticket;";

        $res = mysqli_query($this->conn, $query);

        return $res;   
    }

    public function update_model($name) {
        $this->connect();

        $query = "UPDATE bus_model SET bus_model=$bus_model WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }
    
    public function add_bus_pass($name,$s_date,$e_date) {

        $this->connect();

        $query = "INSERT INTO $this->pass(name,s_date,e_date) VALUES('$name','$s_date','$e_date');";
    
        $res = mysqli_query($this->conn, $query);

        return $res;        
    }

    public function delete_bus_pass($id) {

        $this->connect();

        $query = "DELETE FROM $this->pass WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }

    public function fetch_pass_Data(){
        $this->connect();

        $query = "SELECT * FROM pass;";

        $res = mysqli_query($this->conn, $query);

        return $res;   
    }

    public function update_pass($name,$s_date,$e_date) {
        $this->connect();

        $query = "UPDATE pass SET name=$name,s_date=$s_date,e_date=$e_date WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }

    public function add_bus_driver($name,$age) {

        $this->connect();

        $query = "INSERT INTO $this->driver(name,age) VALUES('$name','$age');";
    
        $res = mysqli_query($this->conn, $query);

        return $res;        
    }

    public function delete_bus_driver($id) {

        $this->connect();

        $query = "DELETE FROM $this->driver WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }

    public function fetch_driver_Data(){
        $this->connect();

        $query = "SELECT * FROM driver;";

        $res = mysqli_query($this->conn, $query);

        return $res;   
    }

    public function update_driver($name,$age) {
        $this->connect();

        $query = "UPDATE driver SET name=$name,age=$age  WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;  
    }


?>