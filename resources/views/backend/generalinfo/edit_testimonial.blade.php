@extends('backend.dashboard')
<style>
    .star {
    font-size: 30px;
    cursor: pointer;
    color: gray;
}

.star.active {
    color: gold;
}
</style>
@section('content')
<div class="container">
    <h2 class="text-center ">Update Testimonial</h2>
    @include('backend.flashmessage')
    <div class="row ">
        <div class="card col-md-8 mx-auto">
            <div class="card-body ">
                <form action="{{route('admin.update_testimonial',$testimonial->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name</label>
                      <input name="name" value="{{$testimonial->name}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Author</label>
                        <input name="author" value="{{$testimonial->author}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Old Image</label>
                        <img src="{{asset('storage/testimonial/'. $testimonial->image)}}" style="height: 100px;width:auto;" alt="">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Image</label>
                        <input type="file" name="image" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Text</label>
                        <textarea class="form-control" id="content" name="text" rows="5" placeholder="Enter content">{{$testimonial->text}}</textarea>
                    </div>
                    <div class="col-lg-4 col-12">
                        <label for="content">Rating</label>
                        <div id="rating-stars">
                            
                        </div>
                        <input type="hidden" name="rating" id="rating-value" value="{{$testimonial->rating}}">
                    </div>
                    <button class="btn btn-lg btn-info">Update</button>
                </form>
            </div>
        </div>
    </div>
        
</div>
@endsection
@section('extra_script')
<script>
$(document).ready(function() {
    // Function to dynamically generate star ratings
    function generateStars(rating) {
        var stars = '';
        for (var i = 1; i <= 5; i++) {
            if (i <= rating) {
                stars += '<span class="star active">&#9733;</span>';
            } else {
                stars += '<span class="star">&#9733;</span>';
            }
        }
        $('#rating-stars').html(stars);
    }

    // Initial generation of stars based on the rating value
    generateStars(parseInt($('#rating-value').val()));

    // Click event handler for stars
    $('.star').click(function() {
        var index = $(this).index() + 1;
        $('.star').removeClass('active');
        $(this).prevAll().addBack().addClass('active');
        $('#rating-value').val(index);
    });
});
</script>
@endsection