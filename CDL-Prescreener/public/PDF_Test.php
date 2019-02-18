<?php
$file = '../assets/PDFTemp/dummy.pdf';
$filename = 'dummy.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
header('Expires: 0');
header('Cache-Control: public, must-revalidate, max-age=0');
@readfile($file);