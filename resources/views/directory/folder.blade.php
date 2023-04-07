
@extends('directory.maindir')
@push('title')
    <title>Folder</title>    
@endpush
@section('sub-section')
<div class="main-content">
<div class="flex-container">
    @if(count($data["Folder"]) == 0 && count($data["Files"]) == 0)
    <div class="emptyfolder">Folder is empty</div>

    @else
        @foreach( $data["Folder"] as $value)
        <a href="/directory/getDir/{{$value['id']}}">
            <div title="{{$value['dir_name']}}" class="fo-div" >
            <i class="fa fa-folder fa-2x fo-icon" style="width:auto; margin-right:.5rem;"></i>
            <span class="fo-name" aria-label="{{$value['dir_name']}}">  {{$value['dir_name']}}  </span>
            </div>
        </a>
        @endforeach
        @foreach( $data["Files"] as $file)
        <a href="/files/{{$file['file_path']}}" >
            <div title="{{$file['file_name']}}" class="fo-div" >
            <i class="fa fa-file fa-2x fo-icon" style="width:auto; margin-right:.5rem;"></i>
            <span class="fo-name" aria-label="{{$file['file_name']}}">  {{$file['file_name']}}  </span>
            </div>
        </a>
        @endforeach
    @endif
  
</div>
</div>

@endsection

