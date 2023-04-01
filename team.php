
<?php

include "theme/header.php";
include "theme/body.php";

?>
                       
                  <div class="align-center">
                  <div style="margin-top:0 px ">  
                          
                          <center>
                            <div class="container">
                                <div class="card card-register mx-auto mt-5">
                                  <div class="card-header bg-primary"></div>
                                  <div class="card-body">
                                          
                             
                              
                              
                            
                              <div style="margin: 10% 10%;margin-top:-10px;margin-bottom: 30px ">   
                                        <div class="table-responsive">
                                          <table class="table table-bordered" width="100%" cellspacing="0">
                                                          <thead>
                                                              <tr>
                                                                  <th>OBTAINING AN EQUIPMENT</th> 
                                                                  <th>[ STUDENT DETAILS ]</th> 
                                                              </tr>
                                                          </thead>
                                                          
                          
                          
                          
                          
                          
                                                        
                                         
                                                        </table>
                                                      </div>
                                                    </div>
                          
                                          
                                 <center>
                                  </div>
                          
                          </div>
                          </div>
                               
                  
                          <div class="col-xl-3 col-sm-1 mb-1" >
              <div class="card text-light bg-primary o-hidden h-100">
                <div class="card-body" >
                  <div class="card-body-icon" color=#00FFFF>
                     
                  </div>
                  <div class="mr-10">  [  ENTER YOUR DETAILS  ]</div>
                  <div class="mr-10"> *******************************************************************</div>
                </div>




<html>
  <head>
    <title>STUDENTS DETAILS</title>
</head>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="t1">[NAME]</label></br>
<input type="text" id="t1" name="t1"><br>
<label for="t2">[DEPARTMENT]</label><br>
<input type="text" id="t2" name="t2"><br>
<label for="t3">[ROLL NUMBER]</label><br>
<input type="number" id="t3" name="t3"><br>
<label for="t4">[EQUIPMENT] </label><br>
<input type="text" id="t4" name="t4"><br>
<label for="t5">[QUANTITY] </label><br>
<input type="number" id="t5" name="t5"><br></br>
<input type="submit" value="submit" bg="danger"><br>
</form>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $n1=$_POST["t1"];
  $n2=$_POST["t2"];
  $n3=$_POST["t3"];
  $n4=$_POST["t4"];
  $n5=$_POST["t5"];
  $status="OBTAINED";
  $date=date("y-m-d");
  $time=date("h:i:sa");
  
 
  $sn="localhost";
  $un="root";
  $pwd="5181";
  $db="sports_management_system";
  $con=mysqli_connect($sn,$un,$pwd,$db);

    

  if (!$con) {
    # code...
      die('server not connected'); }
  
  else{
    
    $q="insert into detail(name,department,rollno,equipment,quantity,status,obtained_date,obtained_time) values('$n1','$n2','$n3','$n4','$n5','$status','$date','$time')";
    if(mysqli_query($con,$q)){
      $my=mysqli_insert_id($con);
      echo(" DATA INSERTED <SAVED>");}
    else{
      echo"NO DATA INSERTED";
    }
    mysqli_close($con);
  
}

} 


?>
    
   
           
</center>
<br>
   

<center>
<?php
include "theme/footer.php";
?>
</center>