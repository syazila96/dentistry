<?php

session_start();
$id = $_SESSION['id'];

        include ("connect.php");
        if(isset($_POST['SUBMIT']))
        {
            $patient_id = $_POST['patient_id'] ;
            $dtldate = $_POST['treatment_date'];
            $tooth = $_POST['tooth_type'];
            $notes = $_POST['treatment_note'];
        	$gid = $_POST['hidGGid'];
        	$actneed = $_POST['optionatas'] ;
        	$gg_55 = $_POST['gg_55'] ;
            $gg_54 = $_POST['gg_54'] ;
            $gg_53 = $_POST['gg_53'] ;
            $gg_52 = $_POST['gg_52'] ;
            $gg_51 = $_POST['gg_51'] ;
            $gg_61 = $_POST['gg_61'] ;
            $gg_62 = $_POST['gg_62'] ;
            $gg_63 = $_POST['gg_63'] ;
            $gg_64 = $_POST['gg_64'] ;
            $gg_65 = $_POST['gg_65'] ;
            $gg_18 = $_POST['gg_18'] ;
            $gg_17 = $_POST['gg_17'] ;
            $gg_16 = $_POST['gg_16'] ;
            $gg_15 = $_POST['gg_15'] ;
            $gg_14 = $_POST['gg_14'] ;
            $gg_13 = $_POST['gg_13'] ;
            $gg_12 = $_POST['gg_12'] ;
            $gg_11 = $_POST['gg_11'] ;
            $gg_21 = $_POST['gg_21'] ;
            $gg_22 = $_POST['gg_22'] ;
            $gg_23 = $_POST['gg_23'] ;
            $gg_24 = $_POST['gg_24'] ;
            $gg_25 = $_POST['gg_25'] ;
            $gg_26 = $_POST['gg_26'] ;
            $gg_27 = $_POST['gg_27'] ;
            $gg_28 = $_POST['gg_28'] ;
            $gg_48 = $_POST['gg_48'] ;
            $gg_47 = $_POST['gg_47'] ;
            $gg_46 = $_POST['gg_46'] ;
            $gg_45 = $_POST['gg_45'] ;
            $gg_44 = $_POST['gg_44'] ;
            $gg_43 = $_POST['gg_43'] ;
            $gg_42 = $_POST['gg_42'] ;
            $gg_41 = $_POST['gg_41'] ;
            $gg_31 = $_POST['gg_31'] ;
            $gg_32 = $_POST['gg_32'] ;
            $gg_33 = $_POST['gg_33'] ;
            $gg_34 = $_POST['gg_34'] ;
            $gg_35 = $_POST['gg_35'] ;
            $gg_36 = $_POST['gg_36'] ;
            $gg_37 = $_POST['gg_37'] ;
            $gg_38 = $_POST['gg_38'] ;
            $gg_85 = $_POST['gg_85'] ;
            $gg_84 = $_POST['gg_84'] ;
            $gg_83 = $_POST['gg_83'] ;
            $gg_82 = $_POST['gg_82'] ;
            $gg_81 = $_POST['gg_81'] ;
            $gg_71 = $_POST['gg_71'] ;
            $gg_72 = $_POST['gg_72'] ;
            $gg_73 = $_POST['gg_73'] ;
            $gg_74 = $_POST['gg_74'] ;
            $gg_75 = $_POST['gg_75'] ;
        	
        	//Qry sellect dari treatment_record where patient_id = Session user 
        	// $gg_85 = $_row["gg_85"];
        	// $gg_86 = $_row[];

        /*	mysqli_query
		($conn, "INSERT INTO treatment_record (patient_id,gg_55,gg_54,gg_53,gg_52,gg_51,gg_61,gg_62,gg_63,gg_64,gg_65,gg_18,gg_17,gg_16,gg_15,gg_14,gg_13,gg_12,gg_11,gg_21,gg_22,gg_23,gg_24,gg_25,gg_26,gg_27,gg_28,gg_48,gg_47,gg_46,gg_45,gg_44,gg_43,gg_42,gg_41,gg_31,gg_32,gg_33,gg_34,gg_35,gg_36,gg_37,gg_38,gg_85,gg_84,gg_83,gg_82,gg_81,gg_71,gg_72,gg_73,gg_74,gg_75)
      	 VALUES ($patient_id,'$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed','$actneed')") or die ( mysqli_error($conn));  //36
      	 echo "<script>alert('The data successfully inserted');";
		 echo "window.location.href = 'dentalRecord.php';</script>";*/

         mysqli_query
        ($conn, "INSERT INTO treatment_record (patient_id,treatment_date,tooth_type,treatment_note,gg_55,gg_54,gg_53,gg_52,gg_51,gg_61,gg_62,gg_63,gg_64,gg_65,gg_18,gg_17,gg_16,gg_15,gg_14,gg_13,gg_12,gg_11,gg_21,gg_22,gg_23,gg_24,gg_25,gg_26,gg_27,gg_28,gg_48,gg_47,gg_46,gg_45,gg_44,gg_43,gg_42,gg_41,gg_31,gg_32,gg_33,gg_34,gg_35,gg_36,gg_37,gg_38,gg_85,gg_84,gg_83,gg_82,gg_81,gg_71,gg_72,gg_73,gg_74,gg_75)
         VALUES ($patient_id,'$dtldate','$tooth','$notes','$gg_55','$gg_54','$gg_53','$gg_52','$gg_51','$gg_61','$gg_62','$gg_63','$gg_64','$gg_65','$gg_18','$gg_17','$gg_16','$gg_15','$gg_14','$gg_13','$gg_12','$gg_11','$gg_21','$gg_22','$gg_23','$gg_24','$gg_25','$gg_26','$gg_27','$gg_28','$gg_48','$gg_47','$gg_46','$gg_45','$gg_44','$gg_43','$gg_42','$gg_41','$gg_31','$gg_32','$gg_33','$gg_34','$gg_35','$gg_36','$gg_37','$gg_38','$gg_85','$gg_84','$gg_83','$gg_82','$gg_81','$gg_71','$gg_72','$gg_73','$gg_74','$gg_75')") or die ( mysqli_error($conn));  //36
         echo "<script>alert('The data successfully inserted');";
         echo "window.location.href = 'dentalRecord.php?id=$id';</script>";

        }

          ?>