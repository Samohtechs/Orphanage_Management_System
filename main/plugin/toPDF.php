<?php

    require_once('../fpdf184/fpdf.php');

    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
            global $title;
            // Arial bold 15
            $this->SetFont('Arial','B',16);
            // Calculate width of title and position
            $w = $this->GetStringWidth($title)+6;
            $this->SetX((210-$w)/2);
            // Colors of text
            $this->SetTextColor(220,50,50);
            // Thickness of frame (1 mm)
            $this->SetLineWidth(1);
            // Title
            $this->Cell($w, 9, $title, 1, 1, 'C');
            // Line break
            $this->Ln(25);
        }

        function UserProfile($image_url) {
            $this->image($image_url, 95, 22, 25);
            $this->Ln(15);
        }

        function ChapterTitle($title_label)
        {
            // Arial 12
            $this->SetFont('Arial', 'B', 12);;
            // Title
            $this->Cell(0, 6, $title_label, 0, 1, 'C');
            // Line break
            $this->Ln(2);
        }

        function ChapterSubTitle($label)
        {
            // Arial 12
            $this->SetFont('Arial','B',12);
            // Title
            $this->Cell(0, 6, $label, 0, 1, 'C');
            // Line break
            $this->Ln(7);
        }

        function ChapterBody($file)
        {
            // Read text file
            $txt = file_get_contents($file);
            // Times 12
            $this->SetFont('Times','',12);
            // Output justified text
            $this->MultiCell(0, 5, $txt, 0, 'C');
            // Line break
            $this->Ln(20);
            // Mention in italics
            $this->SetFont('','I');
            $this->Cell(0, 5, '(end of document)', 0, 1, 'R');
        }

        function PrintChapter($num, $img_url, $title, $subtitle, $file)
        {
            $this->AddPage();
            $this->UserProfile($img_url);
            $this->ChapterTitle($title);
            $this->ChapterSubTitle($subtitle);
            $this->ChapterBody($file);
        }

        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Text color in gray
            $this->SetTextColor(128);
            // Page number
            $this->Cell(0, 10, 'This is a computer generated report.', 0, 0, 'C');
            $this->Ln(5);
            $this->Cell(0, 10, 'www.ocis.co.tz', 0, 0, 'C', false, 'http://localhost/StudentRecordMgmt_PHP/studntreport/');
            $this->Cell(0, 10, 'Page '.$this->PageNo().' of {nb}', 0, 0, 'R');
        }
        
    }

    // Instanciation of inherited class
    $pdf = new PDF();
    $title = "CHAKUWAMA ORPHANAGE CARE CENTER";
    $pdf->AliasNbPages();
    $pdf->SetTitle($title);
    $pdf->SetAuthor('COCC IS');
    $pdf->PrintChapter(1, '../../uploads/chakuwama_orphanage_care_center562488cb280c4e96422f00a192489747.png.jpg','INFORMATIOM REPORT FOR', 'CHILD NAME', 'rhoby.txt');
    $pdf->Output();

?>