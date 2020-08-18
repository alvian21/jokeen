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
                    <form method="POST">
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="title">Title</label>
                                        <input type="text" id="title" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label" for="image">Image</label>
                                            <input type="file" id="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        <!-- Description -->
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
