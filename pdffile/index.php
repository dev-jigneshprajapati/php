<?php

echo "user can convert his html content to pdf file using this demo in php.";


//include('dompdf_helper.php');

// page info here, db calls, etc.     
$html = '<div style="position:relative;height:220px;margin-top:50px;">
        <div style="opacity:0.5;position:absolute;left:50px;top:-30px;width:300px;height:150px;background-color:#40B3DF"></div>
        <div style="opacity:0.3;position:absolute;left:120px;top:20px;width:100px;height:170px;background-color:#73AD21"></div>
        <div style="margin-top:30px;width:360px;height:130px;padding:20px;border-radius:10px;border:10px solid #EE872A;font-size:120%;">
	<h1>CSS = Styles and Colors</h1>
	<div style="letter-spacing:12px;font-size:15px;position:relative;left:25px;top:10px;">Manipulate Text</div>
	<div style="color:#40B3DF;letter-spacing:12px;font-size:15px;position:relative;left:25px;top:20px;">Colors,
	<span style="background-color:#B4009E;color:#ffffff;">&nbsp;Boxes</span></div>
	</div>
</div>';

echo $html;
$filename= time().".pdf";
pdf_create($html, $filename);

function pdf_create($html, $filename='', $stream=TRUE) 
{
    require_once("dompdf/dompdf_config.inc.php");

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    if ($stream) {
        
        $file = file_put_contents($filename, $dompdf->output()); 
        if($file)
        {   echo "success!";
            $dompdf->stream($filename);
        }else{
            echo "error";
        }
        
    } else {
        return $dompdf->output();
    }
}
?>
