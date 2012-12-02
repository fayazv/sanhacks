<?php

// Function to return error message based on error code
function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}

// Change size to text
function size_as_text($size=0) {
	if($size < 1024) {
		return "{$size} bytes";
	} elseif($size < 1048576) {
		$size_kb = round($size/1024);
		return "{$size_kb} KB";
	} else {
		$size_mb = round($size/1048576, 1);
		return "{$size_mb} MB";
	}
}

// function to be used in admin / student pages
function text_validate($msg="",$type="") {
	if($type=="error") {
		echo "<div style='color:red;font-weight:400;font-size:16px;'>";
		echo output_message($msg);
		echo "</div>";
	} elseif($type=="success") {
		echo "<div style='color:green;font-weight:400;font-size:16px;'>";
		echo output_message($msg);
		echo "</div>";
	} else {
		echo "<div style='color:black;font-size:12px;font-style:italic;'>";
		echo output_message($msg);
		echo "</div>";
	}
}

// function to be used in user pages
function graphic_validate($msg="",$type="") {
	echo "<div id=$type>";
	echo output_message($msg);
	echo "</div>";
}

function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

// generates random passwords
function gen_md5_password($len = 8)
{
    // function calculates 32-digit hexadecimal md5 hash
    // of some random data
    return substr(md5(rand().rand()), 0, $len);
}

// validates numbers
function validate_number($num=0) {
	$flag = false;
	if(is_numeric($num)) {
		$flag = true;
	} else {
		$flag = false;
	}
	return $flag;
}

// validates email
function validate_email($email="") {
	$flag = false;
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$flag = true;
	} else {
		$flag = false;
	}
	return $flag;
}

function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function __autoload($class_name) {
	$class_name = strtolower($class_name);
	$path = "../includes/{$class_name}.php";
	if(file_exists($path)) {
		require_once($path);
	} else {
		die("The file {$class_name}.php could not be found.");
	}
}

?>