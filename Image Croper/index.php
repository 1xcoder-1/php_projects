
<!DOCTYPE html>
<html lang="en">
<head>
<title>Crop Image</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="main_title">Crop Image</div>
        <div class="content">
            <span class="upload_btn" onclick="show_popup('popup_upload')">Select Image </span>
            <div id="photo_container">	
            </div>
        </div><!-- content -->    
        <div class="footer">
            Visit Us <a href="https://itsourcecode.com"><i class="fa fa-globe" aria-hidden="true"></i></a>
        </div><!-- footer -->
    </div><!-- container -->

    <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onclick="close_popup('popup_upload')">x</span>
            <h2>Upload photo</h2>
            <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
                <input type="file" name="photo" id="photo" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" id="upload_btn">
            </form>
            <iframe name="upload_frame" class="upload_frame"></iframe>
        </div>
    </div>

    <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onclick="close_popup('popup_crop')">x</span>
            <h2>Crop photo</h2>
            <img id="cropbox" />
            <form>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
                <input type="button" value="Crop Image" id="crop_btn" onclick="crop_photo()" />
            </form>
        </div>
    </div>
</body>
</html>
