@extends('admin.layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            @if(@session('status'))
                <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="rose">
                        <h4>Counselors List</h4>
                    </div>
                    <div class="card-content">
                        <a href="{{ route('counselors.create') }}" class="btn btn-rose">Create Counselor</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($counselors as $counselor)
            <div class="col-md-4">
                <div class="card card-product">
                    <div class="card-image" data-header-animation="true">
                        <a href="#pablo">
                            <img class="img" src="{{asset('uploads/photo/'.$counselor->photo)}}">
                        </a>
                    </div>

                    <div class="card-content">
                        <div class="card-actions">
                            <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                <i class="material-icons">build</i> Fix Header!
                            </button>

                            {{-- <button type="button" class="btn btn-default btn-simple" rel="tooltip"
                                    data-placement="bottom" title="View">
                                <i class="material-icons">art_track</i>
                            </button> --}}
                            <a href="{{ route('counselors.edit',$counselor->id) }}" type="button" class="btn btn-success btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Edit">
                                <i class="material-icons">edit</i>
                            </a>
                            <form action="{{route('counselors.destroy',$counselor->id)}}" method="post" onclick="return confirm('Are you sure?')" style="display: inline;">
                                @csrf
                                @method('delete')
                            <button type="submit" class="btn btn-danger btn-simple" rel="tooltip"
                                    data-placement="bottom" title="Remove">
                                <i class="material-icons">close</i>
                            </button>
                            </form>
                        </div>
                        <h4 class="card-title">
                            <a href="#pablo">{{ $counselor->name }}</a>
                        </h4>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h4>{{ $counselor->specialty }}</h4>
                        </div>
                        <div class="stats pull-right">
                            @if ($counselor->status == 0)
                                <button class="btn btn-rose btn-sm">booked</button>
                            @else
                                <button class="btn btn-success btn-sm">avaliable</button>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h4 class="text-center">
            {{ $counselors->links() }}
        </h4>
    </div>
</div>
@endsection
