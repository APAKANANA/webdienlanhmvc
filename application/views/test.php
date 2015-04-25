<!DOCTYPE html>
<html lang="en">
<head>
		
<script type="text/javascript" src="http://localhost:7070/test/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="http://localhost:7070/test/ckfinder/ckfinder.js"></script>
	
	</head>
<body>
  <textarea id="editor1" name="editor1" > </textarea>			

<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl : '../public/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '../public/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '../public/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor, '../' );
var editor2 = CKEDITOR.replace( 'editor2', {
    filebrowserBrowseUrl : '../public/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '../public/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '../public/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor2, '../' );
var editor3 = CKEDITOR.replace( 'editor3', {
    filebrowserBrowseUrl : '../public/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '../public/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '../public/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor3, '../' );
</script>
		
</body>
</html>