<html>  
<head>  
<title>Laravel 10 Crop and Resize Upload Image Ajax | Bootstrap 5 Modal</title>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
<meta name="token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>  
<body>  
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
        Laravel 10 Crop and Resize Upload Image Ajax
        </div>
        <div class="card-body">
            <input type="file" name="before_crop_image" id="before_crop_image" accept="image/*" />
        </div>
    </div>
</div>
 
<div id="imageModel" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Laravel 10 Crop and Resize Upload Image Ajax</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="image_demo" style="width:350px; margin-top:30px"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary crop_image">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
<script>  
$(document).ready(function(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
      }
    });
     
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width:200,
            height:200,
            type:'square' //circle
        },
        boundary:{
            width:300,
            height:300
        }    
    });
    $('#before_crop_image').on('change', function(){
        var reader = new FileReader();
        reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#imageModel').modal('show');
       
    });
    $('.crop_image').click(function(event){ alert("Success");
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(response){
            $.ajax({
                url: '{{ route('store') }}',
                type:'POST',
                data: {'_token': $('meta[name="csrf-token"]').attr('content'), 'image': response},
                success:function(data){
                    $('#imageModel').modal('hide');
                    alert('Crop image has been uploaded');
                }
            })
        });
    });
});  
</script>
</body>  
</html>