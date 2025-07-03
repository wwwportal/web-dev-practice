<html>
<head>
    <title>Objects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/boostrap.min.js"></script>
</head>
<body style="background-color: #f5ecd9;">

<?php

    include_once "Header.php";
    echo "<div style='margin: 50px 50px 200px 50px'>";


    interface Employee {

        public function displayEmployeeInfo();

    }

    class Management implements Employee {

        protected $sin;
        protected $age;
        protected $salary;

        function __construct($sin, $age, $salary) {
            $this->sin = $sin;
            $this->age = $age;
            $this->salary = $salary;
        }
        
        function displayEmployeeInfo(){
            echo '<Strong>SIN</Strong>: '.$this->sin.', <Strong>Age</Strong: '.$this->age.', <Strong>Salary</Strong>: '.$this->salary;
        }

    }

    class Manager extends Management {

        private $adminLevel;

        function __construct($sin, $age, $salary, $adminLevel) {
            parent:: __construct($sin, $age, $salary);
            $this->adminLevel = $adminLevel;
        }

        function displayEmployeeInfo(){
            parent:: displayEmployeeInfo();
            echo ', <Strong>Admin Level</Strong>: '.$this->adminLevel;
        }

    }

    class Development implements Employee {

        protected $sin;
        protected $age;
        protected $salary;

        function __construct($sin, $age, $salary) {
            $this->sin = $sin;
            $this->age = $age;
            $this->salary = $salary;
        }

        function displayEmployeeInfo() {
            echo '<Strong>SIN</Strong>: '.$this->sin.', <Strong>Age</Strong: '.$this->age.', <Strong>Salary</Strong>: '.$this->salary;
        }
    }

    class ITSpecialist extends Development {

        private $projectAssigned;

        function _construct($sin, $age, $salary, $projectAssigned) {
            parent:: _construct($sin,$age,$salary);
            $this->projectAssigned = $projectAssigned;
        }

        function displayEmployeeInfo(){
            parent:: displayEmployeeInfo();
            echo ', <Strong>Project Assigned</Strong>: '.$this->projectAssigned;
        }

    }

    $Manager1 = new Manager(123456789, 45, 110000, 'MG-06');
    $Manager2 = new Manager(987654321, 55, 120000, 'MG-07');

    echo "<h2><u>Manager</u></h2>";
    echo "<br>";
    $Manager1->displayEmployeeInfo();
    echo "<br><br/>";
    $Manager2->displayEmployeeInfo();

    $Specialist1 = new ITSpecialist(567451234, 35, 100000, "T1SR");
    $Specialist2 = new ITSpecialist(124451234, 30, 90000, "HIMS");

    echo "<br><br>";
    echo "<h2><u>IT Specialist</u></h2>";
    echo "<br>";
    $Specialist1->displayEmployeeInfo();
    echo "<br><br/>";
    $Specialist2->displayEmployeeInfo();

    echo "</div>";
    include_once "Footer.php";

?>
</body>
</html>
