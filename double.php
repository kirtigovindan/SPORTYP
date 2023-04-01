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
                                  <div class="card-header bg-danger"></div>
                                  <div class="card-body">
                                          
                             
                              
                              
                            
                              <div style="margin: 10% 10%;margin-top:-10px;margin-bottom: 30px ">   
                                        <div class="table-responsive">
                                          <table class="table table-bordered" width="100%" cellspacing="30%">
                                                          <thead>
                                                              <tr>
                                                                  <th>RECORDS</th> 
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

                               
                  
                          <div class="col-xl-5 col-sm-1 mb-1" >
              <div class="card text-light bg-danger	 o-hidden h-100">
                <div class="card-body" >
                  <div class="card-body-icon" color=#dc3545
>
                     
                  </div>
                  <div class="mr-10">  [  RECORDS  ]</div>
                  <div class="mr-10"> *******************************************************************</div>
                </div>
  <?php
   $sn="localhost";
   $un="root";
   $pwd="5181";
   $db="sports_management_system";
   $con=mysqli_connect($sn,$un,$pwd,$db);

   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = 'select * from  detail t1 inner join verify t2 on t1.rollno=t2.rollno';
   $retval = mysqli_query( $con,$sql );
   if(mysqli_num_rows($retval)>0){
      //output data of each row
      while($row=mysqli_fetch_assoc($retval)){
                   
                          
                          
                          
                          
        echo"NAME :".$row["name"]."<br>"."DEPARTMENT :".$row["department"]."<br>"."ROLL NO. :".$row["rollno"]."<br>"."EQUIPMENT :".$row["equipment"]."<br>"."QUANTITY :".$row["quantity"]."<br>"."OBTAINED DATE :".$row["obtained_date"]."<br>"."OBTAINED TIME :".$row["obtained_time"]."<br>"."RETURNED DATE :".$row["returned_date"]."<br>"."OBTAINED TIME :".$row["returned_time"]."<br>"."<br>";
        echo"-------------------------------------------------------------------------";
      }



   }else{
    echo"FAILED";
   }

   
   mysqli_close($con);
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























