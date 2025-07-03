<!DOCTYPE html>
<html>

<head>
	<meta charset="ISO-8859-1">
	<title>Sample of CST8238</title>
	
</head>

<body>
	
	
	<div id="content">
<?php
interface Employee {
    public function displayEmployeeInfo();
}

class Management implements Employee{
    /*initial variables*/
    public $sin;
    public $age;
    public $salary;
    
    
    function __construct($sin=0, $age=0, $salary=0){
        $this->sin = $sin;
        $this->age = $age;
        $this->salary = $salary;
    }
    
    function displayEmployeeInfo(){
        echo '<Strong>SIN</Strong>: '.$this->sin.', <Strong>Age</Strong>: '.$this->age.', <Strong>Salary</Strong>: '.$this->salary;
    }
    
}/* end of class */
/*************************************************/

class Manager extends Management{
    
    public $adminLevel;
    
    function __construct($sin=0, $age=0, $salary=0, $adminLevel= "Ab"){
        parent::__construct($sin,$age,$salary);
        $this->adminLevel = $adminLevel;
    }
    
    function displayEmployeeInfo(){
        parent::displayEmployeeInfo();
        echo ' , <Strong>Admin Level</Strong>: '.$this->adminLevel;
        echo '<br/><br/>';
    }
    
    
}/*  end of class */
/*************************************************/

class Development implements Employee{
    /*initial variables*/
    public $sin;
    public $age;
    public $salary;
    
    
    function __construct($sin=0, $age=0, $salary=0){
        $this->sin = $sin;
        $this->age = $age;
        $this->salary = $salary;
    }
    
    function displayEmployeeInfo(){
        echo '<Strong>SIN</Strong>: '.$this->sin.', <Strong>Age</Strong>: '.$this->age.', <Strong>Salary</Strong>: '.$this->salary;
    }
    
}/* end of class */

class ITSpecialist extends Development{
    
    public $projectName;
    
    function __construct($sin=0, $age=0, $salary=0, $projectName="A"){
        parent::__construct($sin,$age,$salary);
        $this->projectName = $projectName;
    }
    
    function displayEmployeeInfo(){
        parent::displayEmployeeInfo();
        echo ' , <Strong>Assigned Project</Strong>: '.$this->projectName;
        echo '<br/><br/>';
    }
    
}/*  end of class */

/* Use classes*/


$Manager1 = new Manager(123456789, 45, 110000, "MG-06");
$Manager2 = new Manager(987654321, 55, 120000, "MG-07");

$ITSpecialist1 = new ITSpecialist(567451234, 35, 100000, "T1SR");
$ITSpecialist2 = new ITSpecialist(234451234, 30, 90000, "HIMS");




/* call display functions */
echo"<h2><u>Manager</u></h2>";
//echo"<br/>";

$Manager1->displayEmployeeInfo();
$Manager2->displayEmployeeInfo();


echo"<br/><br/>";
echo"<h2><u>IT Specialist</u></h2>";
//echo"<br/>";

$ITSpecialist1->displayEmployeeInfo();
$ITSpecialist2->displayEmployeeInfo();


?>
</div>
	
	
</body>
</html>
