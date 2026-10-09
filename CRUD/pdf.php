<?php
include "db.php";
require "vendor/autoload.php";
$result = $conn -> query("select * from emp");
$pdf = new TCPDF();
$pdf-> AddPage();
$pdf ->setFont('times','I',12);

$html=' <table border="1" cellpadding="5">
     <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Department</td>
        <td>salary</td>
     
     </tr>
';

while($row = $result->fetch_assoc()){
    $html.='<tr>
      <td> '.$row['id'].'</td>
      <td> '.$row['name'].'</td>
      <td> '.$row['email'].'</td>
      <td> '.$row['department'].'</td>
      <td> '.$row['salary'].'</td>

    </tr>';
}
$html.='</table>';
$pdf->writehtml($html,true,false,true,false,' '  );
$pdf-> output('emp.pdf','D');

?>