<?php
require ('fpdf.php');
class PDF extends FPDF {
	// Page header
	var $searchRequest = null;
	var $searchRequestDetails = null;
	var$userContact = null;
	var $userReply = null;
	var $searchArticle = null;
	function fillObjects($searchRequest, $searchRequestDetails, $userContact, $userReply, $searchArticle){
		$this->searchRequest = $searchRequest;
		$this->searchRequestDetails = $searchRequestDetails;
		$this->searchArticle = $searchArticle;
		$this->userContact = $userContact;
		$this->userReply = $userReply;
	}
	function Header() {
		// Logo
		// $this->Image('logo.png',10,6,30);
		// Arial bold 15
		$this->SetFont ( 'Arial', 'B', 15 );
		// Move to the right
		$this->Cell ( 40 );
		// Title
		$this->Cell ( 100, 10, 'Zoekopdracht: '.$this->searchRequest->id, 1, 1, 'C' );
		// Line break
		$this->Ln(10);
	}
	
	function printHeader($headerTitle){
		$this->SetFont ( 'Arial', 'B', 14 );
		$this->SetFillColor(200,220,255);
		// Title
		$this->Cell (0, 6, $headerTitle, 0, 1, 'L',true );
		// Line break
		$this->Ln ( 4 );
	}
	
	function printTextArea($label,$value){
		
	}
	
	function printLabelValu($label,$value){
		
	}
	
	// Page footer
	function Footer() {
		// Position at 1.5 cm from bottom
		$this->SetY ( - 15 );
		// Arial italic 8
		$this->SetFont ( 'Arial', 'I', 8 );
		// Page number
		$this->Cell ( 0, 10, 'Page ' . $this->PageNo () . '/{nb}', 0, 0, 'C' );
	}
}

//Instanciation of inherited class
// $pdf = new PDF();
// $pdf->AliasNbPages();
// $pdf->AddPage();
// $pdf->SetFont('Times','',12);
// for($i=1;$i<=40;$i++)
// $pdf->Cell(0,10,'Printing line number '.$i,0,1);
// $pdf->Output();
?>
