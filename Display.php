<?php
$txt = $_POST['symp'];
$conn = mysqli_connect('localhost','root', '6015055','symptoms');
if(!$conn)
{
   die("Connection Error ".mysqli_error($conn));
}
foreach ($txt as $symp){ 
   if(strcmp($txt, "Fever") == 0)
   {
      $id = 1;
   }
   else if(strcmp($txt, "Headache") == 0)
   {
      $id = 2;
   }
   else if(strcmp($txt, "Fatigue") == 0)
   {
      $id = 3;
   }
   else if(strcmp($txt, "Sneezing") == 0)
   {
      $id = 4;
   }
   else if(strcmp($txt, "Cough") == 0)
   {
      $id = 5;
   }
   else if(strcmp($txt, "Soar Throat") == 0)
   {
      $id = 6;
   }
   else if(strcmp($txt, "Abdominal Pain") == 0)
   {
      $id = 7;
   }
   else if(strcmp($txt, "Vomiting") == 0)
   {
      $id = 8;
   }
   else if(strcmp($txt, "Nausea") == 0)
   {
      $id = 9;
   }
   else if(strcmp($txt, "Dehydration") == 0)
   {
      $id = 10;
   }
   else if(strcmp($txt, "Acidity") == 0)
   {
      $id = 11;
   }
   else if(strcmp($txt, "Bloating") == 0)
   {
      $id = 12;
   }
   else if(strcmp($txt, "Loss of Breath") == 0)
   {
      $id = 13;
   }
   else if(strcmp($txt, "Allergy") == 0)
   {
      $id = 14;
   }
   else if(strcmp($txt, "Insomnia") == 0)
   {
      $id = 15;
   }
}

$d=$disp='';

$d = "SELECT d_id FROM relation where s_id=$id";

$result1 = mysqli_query($conn, $d);

if(!$result1)
{
   die("Connection error ".mysqli_error($conn));
}
$row1 = mysqli_fetch_assoc($result1);
$disp = "SELECT name FROM disease where id=$row1['name']";

$result2 = mysqli_query($conn, $disp);
$row2 = mysqli_fetch_assoc($result2);
 echo $row2['name'];
 if (strcmp($row2['name'],"Common Cold"))
 {
   readfile("F:/HoH/Common_Cold.html");
 }
 else if (strcmp($row2['name'],"Dysentry"))
 {
   readfile("F:/HoH/Common_Cold.html");
 }
 else if (strcmp($row2['name'],"Indigestion"))
 {
   readfile("F:/HoH/Common_Cold.html");
 }
 else if (strcmp($row2['name'],"Asthma"))
 {
   readfile("F:/HoH/Common_Cold.html");
 }
}
}
?>