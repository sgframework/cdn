<?php 

namespace cdn\Http\Controllers;

use Auth;
use cdn\Models\User;
use cdn\Models\Status;
use cdn\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function postUpload(Request $request)
    {
    $target_dir = "./public/images/uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["fileToUpload"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		//if (file_exists($target_file)) {
		  //  echo "Sorry, file already exists.";
		   // $uploadOk = 0;
		//}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
	}
  	   public function photoEdit(Request $request)
    {
    	$target_dir = "../public/images/uploads/avatars/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["fileToUpload"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		//if (file_exists($target_file)) {
		  //  echo "Sorry, file already exists.";
		   // $uploadOk = 0;
		//}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		            	Auth::user()->update([
    		'photo' => basename( $_FILES["fileToUpload"]["name"]),
    	]);	      
    	return redirect()->route('profile.edit')->with('info', 'Your profile image has been updated');
		        
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

     	}

  	public function vidUpload(Request $request)
    {   	
    $target_dir = "../public/uploads/videos/";
    $file_name = md5(basename($_FILES["fileToUpload"]["name"])) . "_" . basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir . $file_name;
	$url = $_SERVER['HTTP_REFERER'] . $target_dir . $file_name;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["fileToUpload"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check == false) {
		        echo "File is a video - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not a video.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		//if (file_exists($target_file)) {
		  //  echo "Sorry, file already exists.";
		   // $uploadOk = 0;
		//}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";      
		        $this->validate($request, [
	    	'fileToUpload' => 'required',   	
    	]);
        Upload::create([
		'idnumber' => Auth::user()->idnumber,
		'file_name' => $file_name,
    		'file_path' => $target_file,
    		'url' => $url,   		
    	]);
        	return redirect()->route('home')->with('info', 'Your video has been uploaded');
		        
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
    }	
 }