@extends('layout.master');

@section('title')
  Department Entry | University Management System
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        @if(Session::has('success'))
          <script>
            var msg = "{{ Session::get('success') }}";
            $(document).ready(function() {
              swal("Done!", msg, "success");
            });
          </script>
        @endif

        <div class="panel panel-default user_form">
          <div class="panel-heading">Add New Department</div>
          <div class="panel-body">
            <form method="POST" action="{{ Route('postdepartment') }}" accept-charset="UTF-8" id="">
              <input name="_token" type="hidden" value="{{ Session::token() }}">

              <div class="form-group {{ $errors->has('deptcode') ?  'has-error' : ''}}">
                <label for="code" class="btn-label">Department Code</label>
                <input class="form-control" name="deptcode" type="text" id="code" value="{{ Request::old('deptcode') }}">
                @if($errors->has('deptcode')) <label class="help-block">{{ $errors->first('deptcode') }}</label> @endif
              </div>

              <div class="form-group {{ $errors->has('deptname') ?  'has-error' : ''}}">
                <label for="name" class="btn-label">Department Name</label>
                <input class="form-control" name="deptname" type="text" id="name" value="{{ Request::old('deptname') }}">
                @if($errors->has('deptname')) <label class="help-block">{{ $errors->first('deptname') }}</label> @endif
              </div>

              <input class="btn btn-primary" type="submit" value="Save">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
