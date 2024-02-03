@extends('backend.dashboard')
@section('add_product')
<div class="container">
    <div class="row ">
        <div class="col-md-7 mx-auto">
            <h2>Add Products</h2>
            <form action="">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title">
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Description">
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Image">
                        </div>
                        <div class="mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Add to cart</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
@endsection