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
    $this->Cell(90);
    // Title
    $this->Cell(30, 10, 'G-Transport Work Report', 0, 0, 'C');
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
    $w = array(10, 30, 24, 25, 30, 30, 25, 25, 25, 25, 15, 15);
    for ($i = 0; $i < count($header); $i++)
      $this->Cell($w[$i], 7, $header[$i], 1, 0, 'J', true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224, 235, 255);
    $this->SetTextColor(0);
    $this->SetFont('');

    // Data
    $fill = false;
    $sql = "SELECT * FROM work";
    $result = $db->query($sql);
    if ($result->rowCount() > 0) {
      $n = 1;
      while ($row = $result->fetch()) {
        $this->Cell($w[0], 9, $n, 'LR', 0, 'L', $fill);
        $this->Cell($w[1], 9, $row['ticket_no'], 'LR', 0, 'L', $fill);
        $this->Cell($w[2], 9, $row['date'], 'LR', 0, 'L', $fill);
        $this->Cell($w[3], 9, $row['start_time'], 'LR', 0, 'C', $fill);
        $this->Cell($w[4], 9, $row['start'], 'LR', 0, 'C', $fill);
        $this->Cell($w[5], 9, $row['destination'], 'LR', 0, 'C', $fill);
        $this->Cell($w[6], 9, $row['finish_time'], 'LR', 0, 'C', $fill);
        $this->Cell($w[7], 9, $row['speedometer_reading_start'], 'LR', 0, 'C', $fill);
        $this->Cell($w[8], 9, $row['speedometer_reading_finish'], 'LR', 0, 'C', $fill);
        $this->Cell($w[9], 9, $row['kilometer'], 'LR', 0, 'C', $fill);
        $this->Cell($w[10], 9, $row['fuel'], 'LR', 0, 'C', $fill);
        $this->Cell($w[11], 9, $row['oil'], 'LR', 0, 'C', $fill);
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

$pdf = new PDF('L', 'mm', 'A4');
// Column headings
$header = array('#', 'Ticket Number', 'Date', 'Start Time', 'Start', 'Destination', 'Finish Time', 'S.R.S', 'S.R.F', 'Kilometer', 'Fuel', 'Oil');

$pdf->AliasNbPages();
$pdf->SetFont('Arial', '', 11);
$pdf->AddPage();
$pdf->WorkReport($header, $db);
$pdf->Output('D', 'G-Transport_Work_Report-' . date("m/d/Y H:i:s") . '.pdf');
