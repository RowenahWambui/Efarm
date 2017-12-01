<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'conn.php';
include 'eFarmclass_2_1.php';
error_reporting(0);
 
$farm = new eFarm();
$farm->getConnection($mysqli);

//
if (isset($_GET)){
    $text = $_GET['text'];
    $phoneNumber = $_POST["phoneNumber"];
    
    
}else {
    
    $text = "";
}
$input = array();
$input  = explode("*", $text);
$level = count($input);

if ($text == ""){
    
    $response = "CON Welcome to eFarm. Select a Region.\n"
            . "1. North Eastern \n"
            . "2. Rift Valley \n"
            . "3. Eastern \n"
            . "4. Central \n"
            . "5. Coast \n"
            . "6. Western \n"
            . "7. Nyanza \n"
            . "8. Nairobi \n";
}
else {
    switch ($input[0]){
        case '1':// North Eastern
            if (empty($input[1])){
                $response = "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                //find the region you entered at the first phase of the menu.
                //then find the diseases in that region             
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                        //echo 'oooooooooooo';
                        $disease = $farm->cropDisease($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                          foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1'://Maize Seeds
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                           $response ="CON\n";
                            
                        foreach ($seedling as $seedling){
                            $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[3])){
                            $varietyid = $input[3];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2'://Bean Seeds
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":"  .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[3])){
                            $varietyid = $input[3];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                            case '3'://Peas
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
       
                    break;
//                    
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
            
        break;
    case '2'://Rift Valley
        if (empty($input[1])){
                $response =  "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                
//               
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                     
                        $disease = $farm->cropDisease($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                            foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about\n"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1'://Maize Seeds
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2'://Bean Seeds
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .  ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                          case '3'://Peas
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
                
                            
                        
       
                    break;
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
        break;
          case '3'://Eastern
        if (empty($input[1])){
                $response =  "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                
//               
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                        //echo 'oooooooooooo';
                        $disease = $farm->cropDisease($regionid);
                        //var_dump($disease);
                       // echo 'jjjjjjjjjjjjjjj';
                        //$diseasename = $farm->diseaseName($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                            foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about\n"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2'://Bean Seeds
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .  ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[3])){
                            $varietyid = $input[3];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                          case '3':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
                
                            
                        
       
                    break;
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
        break;
          case '4'://Central
        if (empty($input[1])){
                $response =  "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                
//               
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                        //echo 'oooooooooooo';
                        $disease = $farm->cropDisease($regionid);
                        //var_dump($disease);
                       // echo 'jjjjjjjjjjjjjjj';
                        //$diseasename = $farm->diseaseName($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                            foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about\n"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .  ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                          case '3':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
                
                            
                        
       
                    break;
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
        break;
          case '5'://Coast
        if (empty($input[1])){
                $response =  "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                
//               
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                        //echo 'oooooooooooo';
                        $disease = $farm->cropDisease($regionid);
                        //var_dump($disease);
                       // echo 'jjjjjjjjjjjjjjj';
                        //$diseasename = $farm->diseaseName($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                            foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about\n"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .  ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                          case '3':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
                
                            
                        
       
                    break;
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
        break;
          case '6'://Western
        if (empty($input[1])){
                $response =  "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                
//               
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                        //echo 'oooooooooooo';
                        $disease = $farm->cropDisease($regionid);
                        //var_dump($disease);
                       // echo 'jjjjjjjjjjjjjjj';
                        //$diseasename = $farm->diseaseName($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                            foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about\n"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .  ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                          case '3':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
                
                            
                        
       
                    break;
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
        break;
         case '7'://Nyanza
        if (empty($input[1])){
                $response =  "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                
                
//               
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                      
                        $disease = $farm->cropDisease($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                            foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about\n"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .  ":" .$seedling['variety_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                          case '3':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
                
                            
                        
       
                    break;
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
        break;
         case '8'://Nairobi
        if (empty($input[1])){
                $response = "CON Please Select an option\n"
                              ."1. Crop Diseases\n"
                              . "2. Crop Seedlings\n";
                             // . "0. Exit\n"
                
                
//               
         }else if(!empty ($input[1])){
                switch ($input[1]){
                    case '1':// Crop Diseases
                        //getting the region that was selected at the first phase to match with the regionid in the database
                        //check whiich region id this is by looking at which switch case you are in and what number the case
                        //is in the first menu 
                        $regionid = $input[0];
                        
                        $disease = $farm->cropDisease($regionid);
                        
                        if(empty($input[2])){
                            $response = "CON \n";
                                      
                            foreach ($disease as $disease){
                                $response.= $disease['diseaseid']. ":" . $disease['disease_name']. "\n";
                            }
                        }else if(!empty ($input[2])){
                            $diseaseid = $input[2];
                            $info = $farm->diseaseInfo($diseaseid);
                            $response = "END " . $info;
                        }
                        
                    break;
                    
                    case '2':// Crop Seedlings
            if (empty($input[2])){
                $response = "CON Please select the crop you want information about\n"
                              . " 1. maize\n"
                              . "2. Beans\n"
                              . "3. Peas";
            }elseif (!empty ($input[2])) {
                switch ($input[2]){
                    case '1':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    
                    case '2':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .  ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        break;
                            case '3':
                        $regionid =$input[0];
                        $seedlingid = $input[2];
                        $seedling = $farm->cropSeedling($regionid, $seedlingid);
                        
                        if(empty($input[3])){
                            $response ="CON\n";
                            
                            foreach ($seedling as $seedling){
                                $response.= $seedling['variety_id']. ":" .$seedling['variety_name']. "\n";
                            }
                        }
                        else if(!empty ($input[2])){
                            $varietyid = $input[2];
                            $info = $farm->varietyInfo($varietyid);
                            $response = "END " . $info;
                        }
                        
                        break;
                    default :
                        $response = "The END";
                        break;
                        
                }
                
                            
                        }
                
                            
                        
       
                    break;
                
                    default :
                        $response = "END Finally";
                    break;
                }
            }
        break;
    
    
    
    default :
        $response = "END Thank you for using our services";
        break;
    } 
}
echo $response;
