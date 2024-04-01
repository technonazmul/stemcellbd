@extends('backend.dashboard')
@section('content')
<div class="container">
    <h2 class="text-center ">Add Testimonial</h2>
    <div class="row ">
        <div class="card col-md-8 mx-auto">
            <div class="card-body">
                <form>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Name</label>
                      <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Author</label>
                        <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Author">
                    </div>
                    <div class="form-group">
                        <label for="content">Text</label>
                        <textarea class="form-control" id="content" name="text" rows="5" placeholder="Enter content"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
</div>
@endsection