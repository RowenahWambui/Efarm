<?php
    class eFarm{
        var $mysqli;
        
        //launch connection with the database
        function getConnection($mysqli){
            $this->mysqli = $mysqli;
            //var_dump($this->mysqli);
            
            
        }
        
        //has no arguments because it is not being used
        function __construct() {
            ;
        }
        //function to query the crop diseases table
        //disease id variable will hold the idnum of the disease since it may keep on changing
        //regionid finds the region that has been selected
        //retrieves information about the crop disease
      //get staff
function cropDisease($regionid){
//    $diseasequery = mysqli_query($this->mysqli,"SELECT * FROM cropdiseases WHERE regionid='$regionid'");
//
//    if (mysqli_num_rows($diseasequery) > 0) {
//        $row = mysqli_fetch_assoc($diseasequery);
//    } else {
//        $row['regionid'] = 0;
//    }
//
//    return $row;
    
    //var_dump($this->mysqli);
    $disease = array();
    $result = mysqli_query($this->mysqli, "SELECT * FROM cropdiseases WHERE regionid='$regionid'");
                if(!$result){
                die("Database query failed: " .mysqli_error());
                    }

                    //var_dump($result);
                while($row = mysqli_fetch_assoc($result)){
                //r_dump($result);
                $temp = array();
                $temp['diseaseid'] = $row["diseaseid"];
                $temp['disease_name'] = $row["disease_name"];
                array_push($disease, $temp);
                //return $row["diseaseid"]." ".$row["disease_name"]."<br/>";
                //return $disease;
                }
                return $disease;


}
  function diseaseInfo($diseaseid){
           
          // $info=array();
           $inforesult = mysqli_query($this->mysqli, "SELECT textinfo FROM disease_info WHERE diseaseid = '$diseaseid'");
           
           
                if (mysqli_num_rows($inforesult) > 0) {
                $row = mysqli_fetch_assoc($inforesult);
                $result = $row['textinfo'];
                } else {
                $result = 0;
                }
                return $result;
           
//           if (!$inforesult){
//               die("Query has failed: " .mysqli_error($this->mysqli));
//                  }
//               while ($row = mysqli_fetch_array($inforesult)) {
//               $mytemp = array();
//               $mytemp['variety_id'] = $row['variety_id'];
//               //$mytemp['seedling_id'] = $row['seedling_id'];
//               $mytemp['variety_name'] = $row['variety_name'];
//               array_push($seedling, $mytemp);               
//               
//               }
//               return $seedling;
            
           }
       
       function cropSeedling($regionid,$seedlingid){
           
           $seedling=array();
           $seedresult = mysqli_query($this->mysqli, "SELECT * FROM variety WHERE region_id = '$regionid' AND seedling_id = '$seedlingid'");
           
           
           if (!$seedresult){
               die("Query has failed: " .mysqli_error($this->mysqli));
                  }
               while ($row = mysqli_fetch_assoc($seedresult)) {
               $mytemp = array();
               $mytemp['variety_id'] = $row['variety_id'];
               //$mytemp['seedling_id'] = $row['seedling_id'];
               $mytemp['variety_name'] = $row['variety_name'];
               array_push($seedling, $mytemp);               
               
               }
               return $seedling;
            
           }
            function varietyInfo($varietyid){
           
          // $info=array();
           $inforesult = mysqli_query($this->mysqli, "SELECT var_info FROM variety_info WHERE variety_id = '$varietyid'");
           
           
                if (mysqli_num_rows($inforesult) > 0) {
                $row = mysqli_fetch_assoc($inforesult);
                $result = $row['var_info'];
                } else {
                $result = 0;
                }
                return $result;
            
           }
           
         
           function cropfertilizer($regionid){
               $fertilizer=array();
           $result = mysqli_query($this->mysqli, "SELECT * FROM fertilizer WHERE regionid = '$regionid'");
             
           if (!$result){
               die("Query has failed: " .mysqli_error($this->mysqli));
                  }
               while ($row = mysqli_fetch_assoc($result)) {
               $mytemp = array();
               $mytemp['fertilizer_id'] = $row['fertilizer_id'];
               //$mytemp['seedling_id'] = $row['seedling_id'];
               $mytemp['fertilizer_name'] = $row['fertilizer_name'];
               array_push($fertilizer, $mytemp);               
               
               }
               return $fertilizer;
           }
             function fertilizerInfo($fertilizerid){
           
           //$info=array();
           $inforesult = mysqli_query($this->mysqli, "SELECT fertilizer_info FROM fertilizerinfo WHERE fertilizer_id = '$fertilizerid'");
           
            if (mysqli_num_rows($inforesult) > 0) {
                $row = mysqli_fetch_assoc($inforesult);
                $result = $row['fertilizer_info'];
                } else {
                $result = 0;
                }
                return $result;
           
//           if (!$inforesult){
//               die("Query has failed: " .mysqli_error($this->mysqli));
//                  }
//               while ($row = mysqli_fetch_array($inforesult)) {
//               $mytemp = array();
//               $mytemp['variety_id'] = $row['variety_id'];
//               //$mytemp['seedling_id'] = $row['seedling_id'];
//               $mytemp['variety_name'] = $row['variety_name'];
//               array_push($seedling, $mytemp);               
//               
//               }
//               return $seedling;
            
           }
        
       }
        
    

?>