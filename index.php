<!DOCTYPE html>
<html long = "en">
  <head>
  <meta charest ="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class = "col-6  mx-auto mt-6">
    <form>
      <lebel class="w-150">
        First name
        <input type="text"class="form-control">
</lebel>
<lebel class="w-150">
        Last name
        <input type="text"class="form-control">
</lebel>
<lebel>
<button class="btn btn-primary mt-2 w-100 round-0">Submit</button>
</lebel>
</div></form><br>
<select>
<?php
$start = 7;
$end = 23;
for ($age =$start; $age<= $end; $age++){
echo"<option>$age</option>";

}
?>



</select>
  </body>
  </html> 
  


<?php 
echo"<br>";
for ($i=2; $i <= 9; $i++)
{

echo $i,".","Bangladesh","<br>";
}echo"<br>";
for($i =1; $i<=4;  $i++) {
    echo str_repeat("8",$i)."<br>";
}
for($i=4; $i >=1; $i--){
    echo str_repeat("8",$i)."<br>";
}
$num=4;
for($a = 1;$a <= 10 ;$a++){
    $result = $num * $a ;
    echo "$num * $a = $result <br>";
  }echo"<br>";
  $deposits = [100,100,600,700];
  $taka =[];
  $sum = 0;
  for ($i = 0; $i < count($deposits); $i++){
    $sum = $deposits[$i] + $sum;
    array_push($taka , $sum);
  }
  print_r($taka);
  echo"<br>";
  $num = 3;
  $fectorial =3;
  for($a =1; $a <= $num; $a++){
$fectorial *=$a;
  }
  echo $fectorial;
  echo"<br>";

$num=4;
for($a = 1;$a <= 2 ;$a++){
  for ($b=1; $b <= 10; $b++){
    $result = $num * $a ;
    echo "$num * $a = $result <br>";}
    echo "close<br>";
  }
  $user =[ 
    [
      'member'=>"1",
      'name'=> "labonno",
      'phone'=>"928827387",
    
    ],
    [
      'member'=>"2",
      'name'=>"renu",
    'phone'=>"098766533",
    ],
    [
    'member'=>"3",
    'name'=>"nuba",
    'phone'=>"09876564",
    ],
    
  ];
  foreach($user as $shaki){
  echo $shaki['name'] ."<br>";
  }?>