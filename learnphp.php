<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/sttyle.css" rel="stylesheet">
        <link href="css/all/bootstrap.css" rel="stylesheet">

    </head>
    <body class="container-fluid">
        
       <ul>

       <?php

$assosiative = [
             "Id" => "1" ,
             "name" => "Amira",
             "age" => 39
            ];


    echo $assosiative['name'];



foreach($assosiative as $asso=>$result){
    ?>

    <li><?php  echo $asso ." :  " . $result ; ?></li>
    <?php
   
}

echo '<br>' ;

$arrayx = [
    ["Id" => "1" , "Name" => "Alldd" , "Age" => 23] ,
    ["Id" => "1" , "Name" => "Alldd" , "Age" => 23] ,
    ["Id" => "1" , "Name" => "Alldd" , "Age" => 23]  
];

foreach($arrayx as $array){
  echo  '<h1>' . $array["Name"] . '</h1>'; 
}
?>

</ul>


    <table class="table">

        <thead>
            <tr>
                <th class="thhh"> Amira </th>
                <th class="thhh"> Amira </th>
                <th class="thhh"> Amira </th>
            </tr>
        </thead>
        
        <tbody>
            <tr>
                <td> Amira </td>
                <td> Amira </td>
                <td> Amira </td>
             </tr>
            <tr>
                <td> Amira </td>
                <td> Amira </td>
                <td> Amira </td>
            </tr>
            <tr>
                <td> Amira </td>
                <td> Amira </td>
                <td> Amira </td>
            </tr>
        </tbody>


        <tfoot>
            <tr>
                <td> Amira </td>
                <td> Amira </td>
                <td> Amira </td>
            </tr>
        </tfoot>
    </table>


    <table class="table">
  <thead>
    <tr>
      <th >#</th>
      <th >First</th>
      <th >Last</th>
      <th >Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otffto</td>
      <td>@mdo</td>
    </tr>
    <tr>
     <td>@mdo</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>@twitter</td>
      <td>@mdo</td>
      <td >Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<script src="js/bootstrap.js"></script>
</body> 
</html>