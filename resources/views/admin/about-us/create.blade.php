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
                            <h3 class="mb-0">Create about-us </h3>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('about-us.store')}}">
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
                                        <input type="text" required name="title" id="title" class="form-control"
                                            placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option value="Ranah Jokeen.id">Ranah Jokeen.id</option>
                                            <option value="Program Jokeen.id">Program Jokeen.id</option>
                                            <option value="3D modeling">3D modeling</option>
                                            <option value="Simulasi Sistem">Simulasi Sistem</option>
                                            <option value="Pembuatan Prototype">Pembuatan Prototype</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Description -->
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea rows="4" required name="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" name="save" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
