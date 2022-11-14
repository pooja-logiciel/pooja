
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
	.div{
		width: 800px;
		height: 500px;
		margin: auto;
	}
	.bt
	{
		width: 100px;
/*margin-right: 350px;*/
}

</style>
<body>
<div class="shadow p-3 mb-5 bg-body rounded div">
	 @if ($message = Session::get('success'))  
            <div class="alert alert-success alert-block">  
                <button type="button" class="close" data-dismiss="alert">?</button>   
                <strong>{{ $message }}</strong>  
            </div>  
            @endif
              @if ($message = Session::get('failed'))  
            <div class="alert alert-danger alert-block">  
                <button type="button" class="close" data-dismiss="alert">?</button>   
                <strong>{{ $message }}</strong>  
            </div>  
            @endif
	<form method="post" action="{{url('addproduct')}}"  enctype="multipart/form-data">
		@csrf
		<div class="mb-3">
			<label class="form-lable">Product Name</label>
			<input type="text" name="product_name" class="form-control">
			 <p style="color:red;">@error('product_name'){{$message}}@enderror</p>		
		</div>
		<div class="mb-3">
			<label class="form-lable">Select category</label>
	 		<input type="text" class="form-control" name="cate">
            <p style="color:red;">@error('cate'){{$message}}@enderror</p>
		</div>		
		<div class="mb-3">
			<label class="form-lable">Uplolad Image</label>
			<input type="file" name="image" class="form-control">
			<p style="color:red;">@error('image'){{$message}}@enderror</p>		
		</div>
		<div class="mb-3">
			<label class="form-lable">Description</label>
			<input type="text" name="details" class="form-control">
			<p style="color:red;">@error('details'){{$message}}@enderror</p>		
		</div>
		<div class="mb-3 form-check">
			<label class="form-check-label" for="exampleCheck1">status</label>
			<input type="checkbox" name="check_list" class="form-check-input" id="exampleCheck1">
		</div>

		<input type="submit" class="btn btn-primary bt" value="submit">
	</form>

</div>
</body>
</html>