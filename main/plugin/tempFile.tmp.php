<!-- <?php
    // require pdf functionality from fpdf library
    // require('../fpdf184/fpdf.php');

    // $x = 'Hello World!' . date('y-m-d');

    // $initial_counter = 0;
    // $initial_counter = $initial_counter + 1;

    // $pdf = new FPDF();
    // $pdf->AddPage();
    // $pdf->SetFont('Arial','B',16);
    // $pdf->Cell(40, 40, $x, 1, 2, 'C');
    // $pdf->Cell(40, 40, $x, 1, 0, 'C', false, 'www.samohtechs.com');
    // // $pdf->Cell(40, 10, $x);
    // $pdf->Output('../saves/', date('y-m-d').$initial_counter.'OCIS.pdf');


    // class PDF extends FPDF
    // {
    //     protected $col = 0; // Current column
    //     protected $y0;      // Ordinate of column start

    //     function Header()
    //     {
    //         // Page header
    //         global $title;

    //         $this->SetFont('Arial','B',15);
    //         $w = $this->GetStringWidth($title)+6;
    //         $this->SetX((210-$w)/2);
    //         // $this->SetDrawColor(0,80,180);
    //         $this->SetFillColor(255,255,255);
    //         $this->SetTextColor(0,0,0);
    //         $this->SetLineWidth(1);
    //         $this->Cell($w,9,$title,0,1,'C',true);
    //         $this->Ln(10);
    //         // Save ordinate
    //         $this->y0 = $this->GetY();
    //     }

    //     function Footer()
    //     {
    //         // Page footer
    //         $this->SetY(-15);
    //         $this->SetFont('Arial','I',8);
    //         $this->SetTextColor(128);
    //         $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
    //     }

    //     function SetCol($col)
    //     {
    //         // Set position at a given column
    //         $this->col = $col;
    //         $x = 10+$col*65;
    //         $this->SetLeftMargin($x);
    //         $this->SetX($x);
    //     }

    //     function AcceptPageBreak()
    //     {
    //         // Method accepting or not automatic page break
    //         if($this->col<2)
    //         {
    //             // Go to next column
    //             $this->SetCol($this->col+1);
    //             // Set ordinate to top
    //             $this->SetY($this->y0);
    //             // Keep on page
    //             return false;
    //         }
    //         else
    //         {
    //             // Go back to first column
    //             $this->SetCol(0);
    //             // Page break
    //             return true;
    //         }
    //     }

    //     function ChapterTitle($num, $label)
    //     {
    //         // Title
    //         $this->SetFont('Arial','',12);
    //         $this->SetFillColor(200,220,255);
    //         $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
    //         $this->Ln(4);
    //         // Save ordinate
    //         $this->y0 = $this->GetY();
    //     }

    //     function ChapterBody($file)
    //     {
    //         // Read text file
    //         $txt = 'My Text'; // file_get_contents($file);
    //         // Font
    //         $this->SetFont('Times','',12);
    //         // Output text in a 6 cm width column
    //         $this->MultiCell(60,5,$txt);
    //         $this->Ln();
    //         // Mention
    //         $this->SetFont('','I');
    //         $this->Cell(0,5,'(end of excerpt)');
    //         // Go back to first column
    //         $this->SetCol(0);
    //     }

    //     function PrintChapter($num, $title, $file)
    //     {
    //         // Add chapter
    //         $this->AddPage();
    //         $this->ChapterTitle($num,$title);
    //         $this->ChapterBody($file);
    //     }
    // }

    // $pdf = new PDF();
    // $title = 'ORPHANAGE CARE INFORMATION SYSTEM';
    // $pdf->SetTitle($title);
    // $pdf->SetAuthor('Jules Verne');
    // $pdf->PrintChapter(1,"childname","body");
    // $pdf->PrintChapter(2,'THE PROS AND CONS','20k_c2.txt');
    // $pdf->Output();
    ?> -->
