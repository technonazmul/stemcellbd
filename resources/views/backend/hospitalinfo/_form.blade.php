@csrf
<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $info->title ?? '') }}">
</div>
<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control">{{ old('description', $info->description ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if (!empty($info->image))
        <img src="{{ asset('storage/public/hospitalinfos/' . $info->image) }}" height="60">
    @endif
</div>
<button type="submit" class="btn btn-primary">Submit</button>
