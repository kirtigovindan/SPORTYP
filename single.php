<?php
include "theme/header.php";
include "theme/body.php";

?>
                       
                  <div class="align-center">
                  <div style="margin-top:0 px "> 
                  <div bg= dark>
 
                          
                          <center>
                            <div class="container">
                                <div class="card card-register mx-auto mt-5">
                                  <div class="card-header bg-dark"></div>
                                  <div class="card-body">
                                          
                             
                              
                              
                            
                              <div style="margin: 10% 10%;margin-top:-10px;margin-bottom: 30px ">   
                                        <div class="table-responsive">
                                          <table class="table table-bordered" width="100%" cellspacing="0">
                                                          <thead>
                                                              <tr>
                                                                  <th>RETURNING AN EQUIPMENT</th> 
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
              <div class="card text-light bg-dark	 o-hidden h-100">
                <div class="card-body" >
                  <div class="card-body-icon" color=#343a40>
                     
                  </div>
                  <div class="mr-10">  [  ENTER THE DETAIL  ]</div>
                  <div class="mr-10"> *******************************************</div>
                </div>

                          <html>
  <head>
    <title>STUDENTS DETAILS</title>
</head>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label for="t3">[ROLL NUMBER]</label><br>
<input type="number" id="t3" name="t3"><br><br>
<input type="submit" value="submit"><br>
</form>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $n1=$_POST["t3"];
  $status="RETURNED";
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
    
        $q="insert into verify(rollno,status,returned_date,returned_time) values('$n1','$status','$date','$time')";
        if(mysqli_query($con,$q)){
          $my=mysqli_insert_id($con);
          echo(" DATA INSERTED <SAVED>");
          
        }

          
   
        }
          
      }




 


?>











                            
                              </table>
                            </div>
                          </div>

                
       <center>
        </div>
</div>
</div>
     
</center>
<br>
   

<center>
<?php
include "theme/footer.php";
?>
