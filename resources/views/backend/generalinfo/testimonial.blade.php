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
    <h2 class="text-center ">Add Testimonial</h2>
    @include('backend.flashmessage')
    <div class="row ">
        <div class="card col-md-8 mx-auto">
            <div class="card-body ">
                <form action="{{route('admin.add_testimonial')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name</label>
                      <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Author</label>
                        <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Image</label>
                        <input type="file" name="image" id="">
                    </div>
                    <div class="form-group">
                        <label for="content">Text</label>
                        <textarea class="form-control" id="content" name="text" rows="5" placeholder="Enter content"></textarea>
                    </div>
                    <div class="col-lg-4 col-12">
                        <label for="content">Rating</label>
                        <div id="rating-stars">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                        <input type="hidden" name="rating" id="rating-value" value="0">
                    </div>
                    <button class="btn btn-lg btn-info">Save</button>
                </form>
            </div>
        </div>
    </div>
        
</div>
@endsection
@section('extra_script')
<script>
    $(document).ready(function() {
       
    $('.star').click(function() {
        var index = $(this).index() + 1;
        $('.star').removeClass('active');
        $(this).prevAll().addBack().addClass('active');
        $('#rating-value').val(index);
    });
});
</script>
@endsection