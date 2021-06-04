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
$pdf = new PDF('P', 'mm','Letter');
$pdf->setMargins(40,20);
$pdf->AliasNbPages();
$pdf->AddPage();

//TITULO
$pdf->SetTextColor(0x00,0x00,0x00);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(0,5,'Joyeria Betty',0,1,'C');
$pdf->Cell(0,5,'Lista de productos ',0,1,'C');


//CADENA DE CONEXION
$con = mysqli_connect("localhost","root","","joyeria_betty");
//salto de linea por cada registro encontrado en la tabla Ln();
  $pdf->Ln();

  
  $pdf->Ln();
  
  //1 indica borde, 0 no hace salto de linea, c es centrado

 
$consulta = "select id_producto,nombre,existencia,precio_com,precio_ven,categoria from productos";
 


$result = mysqli_query($con,$consulta);
$pdf->Ln();
    //aqui agregue las cabeceras de las tablas
    $pdf->Cell(20,5, "Id producto",1,0,'C');
    $pdf->Cell(25,5, "Nombre",1,0,'C');
    $pdf->Cell(20,5, "Existencia",1,0,'C');
    $pdf->Cell(20,5, "Precio compra",1,0,'C');
    $pdf->Cell(25,5, "Precio venta",1,0,'C');
    $pdf->Cell(20,5, "Categoría",1,0,'C');
  
    
while($row = mysqli_fetch_array($result)){ 
    $pdf->Ln();
    $pdf->Cell(20,5, $row['id_producto'],1,0,'C');
    $pdf->Cell(25,5, $row['nombre'],1,0,'C');
    $pdf->Cell(20,5, $row['existencia'],1,0,'C');
    $pdf->Cell(20,5, $row['precio_com'],1,0,'C');
    $pdf->Cell(25,5, $row['precio_ven'],1,0,'C');
    $pdf->Cell(20,5, $row['categoria'],1,0,'C');
    
    
  

 
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