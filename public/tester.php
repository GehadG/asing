<?php

use DomPDF\Dompdf\ph;

$font = Font::load('../font');
$font->parse();  // for getFontWeight() to work this call must be done first!
echo $font->getFontName() .'<br>';
echo $font->getFontSubfamily() .'<br>';
echo $font->getFontSubfamilyID() .'<br>';
echo $font->getFontFullName() .'<br>';
echo $font->getFontVersion() .'<br>';
echo $font->getFontWeight() .'<br>';
echo $font->getFontPostscriptName() .'<br>';
