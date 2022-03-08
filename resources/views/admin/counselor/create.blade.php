@extends('admin.layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <h4>Create Counselor</h4>
                    </div>
                    <div class="card-content">
                        <a href="{{ route('counselors.index') }}" class="btn btn-rose">Back</a>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">

                  <div class="card-content">
                    <form method="post" action="{{ route('counselors.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                  </div>
                                  <div class="form-group label-floating">
                                    <label class="control-label">Specialty</label>
                                    <input type="text" class="form-control" name="specialty" required>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail">
                                    <img src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="...">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                  <div>
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="photo" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                      <input type="submit" class="btn btn-fill btn-rose" value="Submit">
                    </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
