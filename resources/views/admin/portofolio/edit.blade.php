@extends('admin.main')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">

        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Create Portfolio </h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route("portofolio.update",[$portfolio->id])}}"
                        enctype="multipart/form-data">
                        {{method_field("PUT")}}
                        @csrf
                        @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="title">Title</label>
                                        <input type="text" id="title" value="{{$portfolio->title}}" name="title"
                                            class="form-control" required placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option value="3D-MODEL" @if($portfolio->category == "3D-MODEL") selected
                                                @endif>3D MODEL</option>
                                            <option value="PROTOTYPE" @if($portfolio->category == "PROTOTYPE") selected
                                                @endif>PROTOTYPE</option>
                                            <option value="3D-PRINT" @if($portfolio->category == "3D-PRINT") selected
                                                @endif>3D PRINT</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="image">Image</label>
                                        <input type="file" id="image" name="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea rows="4" class="form-control" name="description"
                                    required>{{$portfolio->description}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" name="save" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
