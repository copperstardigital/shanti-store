@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">Posts</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <form action="/posts" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="headline">Post</label>
                                <textarea class="form-control" name="headline" id="headline" rows="7">{{ old('headline') }}</textarea>
                            </div>

                            @if ($errors->has('headline'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('headline') }}</strong>
                                </span>
                            @endif

                            <button type="submit" class="btn btn-primary pull-right">Post to Facebook</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
