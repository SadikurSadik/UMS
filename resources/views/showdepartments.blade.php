@extends('layout.master');

@section('title')
  Department Entry | University Management System
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
          <h3>Department List</h3>
            <?php $index = 0; ?>
            <table class="table table-bordered">
              <tr>
                <th>SL</th>
                <th>Department Code</th>
                <th>Department Name</th>
              </tr>
              @foreach($departments as $department)
                <tr class="{{ $index%2==0 ? 'info' : 'active' }}">
                  <td><strong>{{ ++$index }}</strong></td>
                  <td>{{ $department['deptcode'] }}</td>
                  <td>{{ $department['deptname'] }}</td>
                </tr>
              @endforeach
            </table>
            <div class="pagination">
              @if($departments->currentPage() != 1)
                <a href="{{ $departments->previousPageUrl() }}"><span class="fa fa-caret-left fa-2x"></span></a>
              @endif
              @if(($departments->currentPage() != $departments->lastPage()) && $departments->hasPages())
                <a href="{{ $departments->nextPageUrl() }}"><span class="fa fa-caret-right fa-2x"></span></a>
              @endif
            </div>
          </div>
        </div>
      </div>
@endsection
