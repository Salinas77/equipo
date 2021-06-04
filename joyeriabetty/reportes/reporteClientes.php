<?php
require "fpdf.php";
class PDF extends FPDF{
  function Header()
{
    // Logo     el 83 define el tamaño el 10 es un tab, el 8 es lineas
    $this->Image('../img/logotipo.png',10,8,30);
   
}
}
//CREACION DE LA HOJA
$pdf = new PDF('L');
$pdf->setMargins(50,15);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'Joyeria Betty',0,1,'C');
$pdf->Cell(0,5,'Lista de clientes ',0,1,'C');


//CADENA DE CONEXION
$con = mysqli_connect("localhost","root","","joyeria_betty");
//salto de linea por cada registro encontrado en la tabla Ln();
  $pdf->Ln();

  
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

 
$consulta = "select id_cliente,nombre_completo,direccion,tel,email,fecha_nac,sexo from clientes";
 


$result = mysqli_query($con,$consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(20,5, "Id cliente",1,0,'C');
    $pdf->Cell(45,5, "Nombre completo",1,0,'C');
    $pdf->Cell(50,5, "Dirección",1,0,'C');
    $pdf->Cell(20,5, "Telefono",1,0,'C');
    $pdf->Cell(35,5, "Email",1,0,'C');
    $pdf->Cell(30,5, "Fecha de nacimiento",1,0,'C');
    $pdf->Cell(15,5, "Sexo",1,0,'C');
    
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    $pdf->Cell(20,5, $row['id_cliente'],1,0,'C');
    $pdf->Cell(45,5, $row['nombre_completo'],1,0,'C');
    $pdf->Cell(50,5, $row['direccion'],1,0,'C');
    $pdf->Cell(20,5, $row['tel'],1,0,'C');
    $pdf->Cell(35,5, $row['email'],1,0,'C');
    $pdf->Cell(30,5, $row['fecha_nac'],1,0,'C');
    $pdf->Cell(15,5, $row['sexo'],1,0,'C');
    
  

 
    $exec=mysqli_query($con,$consulta); 


  
  }  

  mysqli_close($con);
  session_start();
if(@$_SESSION['validada']=="SI"){
    $pdf->Output();
  }else{
    echo "<script>window.location='../index.php'</script>";
  }
?>