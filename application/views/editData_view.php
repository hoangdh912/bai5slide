<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>
	
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<h3 class="display-4 text-xs-center">Edit Slide</h3>
				<hr>
				<form action="Slides/editSlide" method="POST" enctype="multipart/form-data">
					<label for="title">Title</label>
					<input type="text" id="title" name="title" placeholder="Title">

					<label for="description">Description</label>
					<input type="text" id="description" name="description" placeholder="description">

					<label for="button_link">Link</label>
					<input type="text" id="link" name="button_link" placeholder="link">

					<label for="button_text">Button text</label>
					<input type="text" id="button_text" name="button_text" placeholder="button text">

					<label for="slide_image">Image Upload</label>
					<input type="file" id="slide_image" name="slide_image">

					<input type="submit" id="submit" id="submit" class="btn btn-primary" value="Edit">
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>