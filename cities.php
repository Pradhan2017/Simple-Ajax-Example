<?php
 $state=$_GET['state'];
 $c1=array('patna','Muzaffapur','Arrah','Nalanda district','Chhapra');
 $c2=array('Bhopal','Indore','Jabalpur','Gwalior','Ujjain');
 $c3=array('Kanpur','Agra','Lucknow','Jhansi','Allahabad');

 if($state=="Bihar")
 {
    foreach($c1 as $c)
      echo "<option>$c</option>";
 }
 else if($state=="Madhya Pradesh")
 {
   foreach($c2 as $c)
     echo "<option>$c</option>";
 }
 else if($state=="Uttar Pradesh")
 {
   foreach($c3 as $c)
     echo "<option>$c</option>";
 }
 else
    echo "<option>First Select State</option>";

 ?>
