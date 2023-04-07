
@extends('directory.maindir')
@push('title')
    <title>Upload File</title>    
@endpush
@section('sub-section')
<div class="  ">
  
    <div class=" border shadow-lg rounded p-3">
        <div class="panel panel-default ">
            <div class="panel-heading">
                    <h4 class="panel-title text-center mb-3">Upload File</h4>
                     </div>
                     <div class="panel-body">
                    <form action="/directory/upload_file" method="POST" enctype="multipart/form-data">
                    @csrf

                      <div class="form-group">
                            <input type="file" name="file" id="file"   class="form-control up-file">
                            <input type="hidden" name="Dir_Id" value="{{$data['Dir_Id']}}"/>
                        </div>

                       <div class="new-btn">
                        
                        <input type="submit" value="Upload" class="btn btn-info btn-block mr-5 ml-5">
                       </div>
                        
                      

                    </form>
                </div>
            </div>
        </div>
      </div>

@endsection