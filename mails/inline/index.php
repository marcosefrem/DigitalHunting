<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Emails HTML</title>
  
  <style type="text/css" media="screen">
	/* -- import Roboto Font ---------------------------- */
	@import "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";/* -- You can use this tables in Bootstrap (v3) projects. -- *//* -- Box model ------------------------------- */*,*:after,*:before {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}/* -- Demo style ------------------------------- */html,body {position: relative;min-height: 100%;height: 100%;}html {position: relative;overflow-x: hidden;margin: 16px;padding: 0;min-height: 100%;font-size: 62.5%;}body {font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;font-style: normal;font-weight: 300;font-size: 1.4rem;line-height: 2rem;letter-spacing: 0.01rem;color: #212121;background-color: #f5f5f5;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;text-rendering: optimizeLegibility;}#demo {margin: 20px auto;max-width: 960px;}#demo h1 {font-size: 2.4rem;line-height: 3.2rem;letter-spacing: 0;font-weight: 300;color: #212121;text-transform: inherit;margin-bottom: 1rem;text-align: center;}#demo h2 {font-size: 1.5rem;line-height: 2.8rem;letter-spacing: 0.01rem;font-weight: 400;color: #212121;text-align: center;}.shadow-z-1 {-webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);-moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);}/* -- Material Design Table style -------------- */.table {width: 100%;max-width: 100%;margin-bottom: 2rem;background-color: #ffffff;}.table > thead > tr,.table > tbody > tr,.table > tfoot > tr {-webkit-transition: all 0.3s ease;-o-transition: all 0.3s ease;transition: all 0.3s ease;}.table > thead > tr > th,.table > tbody > tr > th,.table > tfoot > tr > th,.table > thead > tr > td,.table > tbody > tr > td,.table > tfoot > tr > td {text-align: left;padding: 1.6rem;vertical-align: top;border-top: 0;-webkit-transition: all 0.3s ease;-o-transition: all 0.3s ease;transition: all 0.3s ease;}.table > thead > tr > th {font-weight: 400;color: #757575;vertical-align: bottom;border-bottom: 1px solid rgba(0, 0, 0, 0.12);}.table > caption + thead > tr:first-child > th,.table > colgroup + thead > tr:first-child > th,.table > thead:first-child > tr:first-child > th,.table > caption + thead > tr:first-child > td,.table > colgroup + thead > tr:first-child > td,.table > thead:first-child > tr:first-child > td {border-top: 0;}.table > tbody + tbody {border-top: 1px solid rgba(0, 0, 0, 0.12);}.table .table {background-color: #ffffff;}.table .no-border {border: 0;}.table-condensed > thead > tr > th,.table-condensed > tbody > tr > th,.table-condensed > tfoot > tr > th,.table-condensed > thead > tr > td,.table-condensed > tbody > tr > td,.table-condensed > tfoot > tr > td {padding: 0.8rem;}.table-bordered {border: 0;}.table-bordered > thead > tr > th,.table-bordered > tbody > tr > th,.table-bordered > tfoot > tr > th,.table-bordered > thead > tr > td,.table-bordered > tbody > tr > td,.table-bordered > tfoot > tr > td {border: 0;border-bottom: 1px solid #e0e0e0;}.table-bordered > thead > tr > th,.table-bordered > thead > tr > td {border-bottom-width: 2px;}.table-striped > tbody > tr:nth-child(odd) > td,.table-striped > tbody > tr:nth-child(odd) > th {background-color: #f5f5f5;}.table-hover > tbody > tr:hover > td,.table-hover > tbody > tr:hover > th {background-color: rgba(0, 0, 0, 0.12);}@media screen and (max-width: 768px) {.table-responsive-vertical > .table {margin-bottom: 0;background-color: transparent;}.table-responsive-vertical > .table > thead,.table-responsive-vertical > .table > tfoot {display: none;}.table-responsive-vertical > .table > tbody {display: block;}.table-responsive-vertical > .table > tbody > tr {display: block;border: 1px solid #e0e0e0;border-radius: 2px;margin-bottom: 1.6rem;}.table-responsive-vertical > .table > tbody > tr > td {background-color: #ffffff;display: block;vertical-align: middle;text-align: right;}.table-responsive-vertical > .table > tbody > tr > td[data-title]:before {content: attr(data-title);float: left;font-size: inherit;font-weight: 400;color: #757575;}.table-responsive-vertical.shadow-z-1 {-webkit-box-shadow: none;-moz-box-shadow: none;box-shadow: none;}.table-responsive-vertical.shadow-z-1 > .table > tbody > tr {border: none;-webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);-moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);}.table-responsive-vertical > .table-bordered {border: 0;}.table-responsive-vertical > .table-bordered > tbody > tr > td {border: 0;border-bottom: 1px solid #e0e0e0;}.table-responsive-vertical > .table-bordered > tbody > tr > td:last-child {border-bottom: 0;}.table-responsive-vertical > .table-striped > tbody > tr > td,.table-responsive-vertical > .table-striped > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical > .table-striped > tbody > tr > td:nth-child(odd) {background-color: #f5f5f5;}.table-responsive-vertical > .table-hover > tbody > tr:hover > td,.table-responsive-vertical > .table-hover > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical > .table-hover > tbody > tr > td:hover {background-color: rgba(0, 0, 0, 0.12);}}.table-striped.table-mc-red > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-red > tbody > tr:nth-child(odd) > th {background-color: #fde0dc;}.table-hover.table-mc-red > tbody > tr:hover > td,.table-hover.table-mc-red > tbody > tr:hover > th {background-color: #f9bdbb;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-red > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-red > tbody > tr > td:nth-child(odd) {background-color: #fde0dc;}.table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-red > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-red > tbody > tr > td:hover {background-color: #f9bdbb;}}.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-pink > tbody > tr:nth-child(odd) > th {background-color: #fce4ec;}.table-hover.table-mc-pink > tbody > tr:hover > td,.table-hover.table-mc-pink > tbody > tr:hover > th {background-color: #f8bbd0;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-pink > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-pink > tbody > tr > td:nth-child(odd) {background-color: #fce4ec;}.table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-pink > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-pink > tbody > tr > td:hover {background-color: #f8bbd0;}}.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-purple > tbody > tr:nth-child(odd) > th {background-color: #f3e5f5;}.table-hover.table-mc-purple > tbody > tr:hover > td,.table-hover.table-mc-purple > tbody > tr:hover > th {background-color: #e1bee7;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-purple > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-purple > tbody > tr > td:nth-child(odd) {background-color: #f3e5f5;}.table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-purple > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-purple > tbody > tr > td:hover {background-color: #e1bee7;}}.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) > th {background-color: #ede7f6;}.table-hover.table-mc-deep-purple > tbody > tr:hover > td,.table-hover.table-mc-deep-purple > tbody > tr:hover > th {background-color: #d1c4e9;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-deep-purple > tbody > tr > td:nth-child(odd) {background-color: #ede7f6;}.table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-deep-purple > tbody > tr > td:hover {background-color: #d1c4e9;}}.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-indigo > tbody > tr:nth-child(odd) > th {background-color: #e8eaf6;}.table-hover.table-mc-indigo > tbody > tr:hover > td,.table-hover.table-mc-indigo > tbody > tr:hover > th {background-color: #c5cae9;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-indigo > tbody > tr > td:nth-child(odd) {background-color: #e8eaf6;}.table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-indigo > tbody > tr > td:hover {background-color: #c5cae9;}}.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-blue > tbody > tr:nth-child(odd) > th {background-color: #e7e9fd;}.table-hover.table-mc-blue > tbody > tr:hover > td,.table-hover.table-mc-blue > tbody > tr:hover > th {background-color: #d0d9ff;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-blue > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-blue > tbody > tr > td:nth-child(odd) {background-color: #e7e9fd;}.table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-blue > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-blue > tbody > tr > td:hover {background-color: #d0d9ff;}}.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) > th {background-color: #e1f5fe;}.table-hover.table-mc-light-blue > tbody > tr:hover > td,.table-hover.table-mc-light-blue > tbody > tr:hover > th {background-color: #b3e5fc;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-light-blue > tbody > tr > td:nth-child(odd) {background-color: #e1f5fe;}.table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-light-blue > tbody > tr > td:hover {background-color: #b3e5fc;}}.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-cyan > tbody > tr:nth-child(odd) > th {background-color: #e0f7fa;}.table-hover.table-mc-cyan > tbody > tr:hover > td,.table-hover.table-mc-cyan > tbody > tr:hover > th {background-color: #b2ebf2;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-cyan > tbody > tr > td:nth-child(odd) {background-color: #e0f7fa;}.table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-cyan > tbody > tr > td:hover {background-color: #b2ebf2;}}.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-teal > tbody > tr:nth-child(odd) > th {background-color: #e0f2f1;}.table-hover.table-mc-teal > tbody > tr:hover > td,.table-hover.table-mc-teal > tbody > tr:hover > th {background-color: #b2dfdb;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-teal > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-teal > tbody > tr > td:nth-child(odd) {background-color: #e0f2f1;}.table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-teal > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-teal > tbody > tr > td:hover {background-color: #b2dfdb;}}.table-striped.table-mc-green > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-green > tbody > tr:nth-child(odd) > th {background-color: #d0f8ce;}.table-hover.table-mc-green > tbody > tr:hover > td,.table-hover.table-mc-green > tbody > tr:hover > th {background-color: #a3e9a4;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-green > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-green > tbody > tr > td:nth-child(odd) {background-color: #d0f8ce;}.table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-green > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-green > tbody > tr > td:hover {background-color: #a3e9a4;}}.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-light-green > tbody > tr:nth-child(odd) > th {background-color: #f1f8e9;}.table-hover.table-mc-light-green > tbody > tr:hover > td,.table-hover.table-mc-light-green > tbody > tr:hover > th {background-color: #dcedc8;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-light-green > tbody > tr > td:nth-child(odd) {background-color: #f1f8e9;}.table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-light-green > tbody > tr > td:hover {background-color: #dcedc8;}}.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-lime > tbody > tr:nth-child(odd) > th {background-color: #f9fbe7;}.table-hover.table-mc-lime > tbody > tr:hover > td,.table-hover.table-mc-lime > tbody > tr:hover > th {background-color: #f0f4c3;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-lime > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-lime > tbody > tr > td:nth-child(odd) {background-color: #f9fbe7;}.table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-lime > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-lime > tbody > tr > td:hover {background-color: #f0f4c3;}}.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-yellow > tbody > tr:nth-child(odd) > th {background-color: #fffde7;}.table-hover.table-mc-yellow > tbody > tr:hover > td,.table-hover.table-mc-yellow > tbody > tr:hover > th {background-color: #fff9c4;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-yellow > tbody > tr > td:nth-child(odd) {background-color: #fffde7;}.table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-yellow > tbody > tr > td:hover {background-color: #fff9c4;}}.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-amber > tbody > tr:nth-child(odd) > th {background-color: #fff8e1;}.table-hover.table-mc-amber > tbody > tr:hover > td,.table-hover.table-mc-amber > tbody > tr:hover > th {background-color: #ffecb3;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-amber > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-amber > tbody > tr > td:nth-child(odd) {background-color: #fff8e1;}.table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-amber > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-amber > tbody > tr > td:hover {background-color: #ffecb3;}}.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-orange > tbody > tr:nth-child(odd) > th {background-color: #fff3e0;}.table-hover.table-mc-orange > tbody > tr:hover > td,.table-hover.table-mc-orange > tbody > tr:hover > th {background-color: #ffe0b2;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-orange > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-orange > tbody > tr > td:nth-child(odd) {background-color: #fff3e0;}.table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-orange > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-orange > tbody > tr > td:hover {background-color: #ffe0b2;}}.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > td,.table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) > th {background-color: #fbe9e7;}.table-hover.table-mc-deep-orange > tbody > tr:hover > td,.table-hover.table-mc-deep-orange > tbody > tr:hover > th {background-color: #ffccbc;}@media screen and (max-width: 767px) {.table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td,.table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr:nth-child(odd) {background-color: #ffffff;}.table-responsive-vertical .table-striped.table-mc-deep-orange > tbody > tr > td:nth-child(odd) {background-color: #fbe9e7;}.table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover > td,.table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr:hover {background-color: #ffffff;}.table-responsive-vertical .table-hover.table-mc-deep-orange > tbody > tr > td:hover {background-color: #ffccbc;}}	


  </style>
  
</head>

<body>

  <div id="container" class="">
  
    <h1>Emails HTML</h1>
    <div class="table-responsive-vertical shadow-z-1">
		    
		    
	   	<table class="table table-hover table-mc-light-blue">
	      <thead>
	        <tr>
	          <th>Nombre</th>
	          <th>Fecha modificación</th>
	        </tr>
	      </thead>
	      <tbody>
	      <?php
		      
		    error_reporting(0);
		      
	        // Opens directory
	        $myDirectory=opendir(".");
	        
	        // Gets each entry
	        while($entryName=readdir($myDirectory)) {
		      
		      	//Filter only php and html files, but no the index itselft.
				if (strpos($entryName,'.html') !== false || strpos($entryName,'.php') !== false && strpos($entryName,'index.php') === false ) {
				    $dirArray[]=$entryName;
				}		      

	          
	        }
	        
	        // Finds extensions of files
	        function findexts ($filename) {
	          $filename=strtolower($filename);
	          $exts=split("[/\\.]", $filename);
	          $n=count($exts)-1;
	          $exts=$exts[$n];
	          return $exts;
	        }
	        
	        // Closes directory
	        closedir($myDirectory);
	        
	        // Counts elements in array
	        $indexCount=count($dirArray);
	        
	        // Sorts files
	        sort($dirArray);
	        
	        // Loops through the array of files
	        for($index=0; $index < $indexCount; $index++) {
	        
	          // Allows ./?hidden to show hidden files
	          if($_SERVER['QUERY_STRING']=="hidden")
	          {$hide="";
	          $ahref="./";
	          $atext="Hide";}
	          else
	          {$hide=".";
	          $ahref="./?hidden";
	          $atext="Show";}
	          if(substr("$dirArray[$index]", 0, 1) != $hide) {
	          
	          // Gets File Names
	          $name=$dirArray[$index];
	          $namehref=$dirArray[$index];
	          
	          // Gets Extensions 
	          $extn=findexts($dirArray[$index]); 
	          
	          // Gets file size 
	          $size=number_format(filesize($dirArray[$index]));
	          
	          // Gets Date Modified Data
	          $modtime=date("M j Y g:i A", filemtime($dirArray[$index]));
	          $timekey=date("YmdHis", filemtime($dirArray[$index]));
	          
	          // Prettifies File Types, add more to suit your needs.
	          switch ($extn){
	            case "png": $extn="PNG Image"; break;
	            case "jpg": $extn="JPEG Image"; break;
	            case "svg": $extn="SVG Image"; break;
	            case "gif": $extn="GIF Image"; break;
	            case "ico": $extn="Windows Icon"; break;
	            
	            case "txt": $extn="Text File"; break;
	            case "log": $extn="Log File"; break;
	            case "htm": $extn="HTML File"; break;
	            case "php": $extn="PHP Script"; break;
	            case "js": $extn="Javascript"; break;
	            case "css": $extn="Stylesheet"; break;
	            case "pdf": $extn="PDF Document"; break;
	            
	            case "zip": $extn="ZIP Archive"; break;
	            case "bak": $extn="Backup File"; break;
	            
	            default: $extn=strtoupper($extn)." File"; break;
	          }
	          
	          // Separates directories
	          if(is_dir($dirArray[$index])) {
	            $extn="&lt;Directory&gt;"; 
	            $size="&lt;Directory&gt;"; 
	            $class="dir";
	          } else {
	            $class="file";
	          }
	          
	          // Cleans up . and .. directories 
	          if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;";}
	          if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
	          
	          // Print 'em
	          print("
	          <tr class='$class'>
	            <td data-title='Nombre'><a href='./$namehref'>$name</a></td>
	            <td data-title='Modificado'><a href='./$namehref'>$modtime</a></td>
	          </tr>");
	          }
	        }
	      ?>
	      </tbody>
	    </table>
	   	
   	
    </div>
  </div>
  
  
  
   
  
</body>

</html>
<br><br>
<small>
<h2 class="h5"><strong>Compatibilidad gestores de correo</strong></h2>

<h3 class="h6"><strong>Mac & PC</strong></h3>
<ul>
	<li>Outlook 2011 y superior</li>
	<li>Mac Mail (última versión)</li>
</ul>
<h3 class="h6"><strong>Web</strong></h3>
<ul>
	<li>Gmail</li>
	<li>Yahoo</li>
	<li>Outlook</li>	
</ul>

<h3 class="h6"><strong>Tablet</strong></h3>
<ul>
	<li>Android Gmail (última versión)</li>
	<li>Android Correo (última versión)</li>
	<li>iOS Mail (última versión)</li>
</ul>


<h3 class="h6"><strong>Móvil</strong></h3>
<ul>
	<li>Android Gmail (última versión)</li>
	<li>Android Correo (última versión)</li>
	<li>iOS Mail (última versión)</li>
</ul>


</small>

</body>
</html>
