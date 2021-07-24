<?php

session_start();

require_once 'inc/fpdf182/fpdf.php';
require_once 'setting/db.php';

class PDF extends FPDF
{
  // Page header
  function Header()
  {
    // Move to the right
    $this->Cell(5);
    // Add generated date
    $this->Cell(30, 10, date("m/d/Y H:i:s"), 0, 0, 'C');
    // Arial bold 15
    $this->SetFont('Arial', 'B', 15);
    // Move to the right
    $this->Cell(120);
    // Title
    $this->Cell(30, 10, 'G-Transport Maintenance Report', 0, 0, 'R');
    // Line break
    $this->Ln(13);
  }

  // Page footer
  function Footer()
  {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial', 'I', 8);
    // Page number
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
  }

  // Work Report table
  function WorkReport($header, $db)
  {
    // Colors, line width and bold font
    $this->SetFillColor(23, 162, 184, 1);
    $this->SetTextColor(255);
    $this->SetDrawColor(255);
    $this->SetLineWidth(.1);
    $this->SetFont('', 'B');
    // Header
    $w = array(15, 25, 25, 25, 45, 25, 25);
    for ($i = 0; $i < count($header); $i++)
      $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224, 235, 255);
    $this->SetTextColor(0);
    $this->SetFont('');

    // Data
    $fill = false;
    $sql = "SELECT * FROM maintenance";
    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
      $n = 1;
      while ($row = $result->fetch()) {
        $this->Cell($w[0], 9, $n, 'LR', 0, 'L', $fill);
        $this->Cell($w[1], 9, $row['Rq_no'], 'LR', 0, 'L', $fill);
        $this->Cell($w[2], 9, $row['date'], 'LR', 0, 'C', $fill);
        $this->Cell($w[3], 9, $row['job_no'], 'LR', 0, 'C', $fill);
        $this->Cell($w[4], 9, $row['section'], 'LR', 0, 'C', $fill);
        $this->Cell($w[5], 9, $row['Amount'], 'LR', 0, 'R', $fill);
        $this->Cell($w[6], 9, $row['vehicle_no'], 'LR', 0, 'C', $fill);
        $this->Ln();
        $fill = !$fill;
        $n++;
      }
      // Free result set
      unset($result);
    }
    // Closing line
    $this->Cell(array_sum($w), 0, '', 'T');
  }
}

$pdf = new PDF();
// Column headings
$header = array('#', 'RQ_No.', 'Date', 'Job No.', 'Section', 'Amount', 'Vehicle No.');

$pdf->AliasNbPages();
$pdf->SetFont('Arial', '', 11);
$pdf->AddPage();
$pdf->WorkReport($header, $db);
$pdf->Output('D', 'G-Transport_maintenance_Report-' . date("m/d/Y H:i:s") . '.pdf');
