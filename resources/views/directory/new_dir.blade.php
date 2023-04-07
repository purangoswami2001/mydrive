

  @extends('directory.maindir')
@push('title')
    <title>New Folder</title>    
@endpush
@section('sub-section')

  <div class="  ">
  
        <div class=" border shadow-lg rounded p-3">
            <div class="panel panel-default ">
                <div class="panel-heading">
                        <h4 class="panel-title text-center mb-3">New Folder</h4>
                         </div>
                         <div class="panel-body">
                        <form action="/create_folder" method="POST">
                          @csrf
                          @if(Session::has('fail'))
                          <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                            <div class="form-group">
                                <input type="text" name="dir_name" id="dir" class="form-control input-sm" placeholder="Folder Name" value="New Folder">
                                <input type="hidden" name="Dir_Id" value="{{$data['Dir_Id']}}"/>
                            </div>

                           <div class="new-btn">
                            <input type="range" value="Cancel" class="btn btn-info btn-block mr-5">
                            <input type="submit" value="Create" class="btn btn-info btn-block ml-5">
                           </div>
                            
                          
    
                        </form>
                    </div>
                </div>
            </div>
          </div>

@endsection