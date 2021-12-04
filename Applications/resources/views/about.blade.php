@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-sm-0 main">
            <div class="album-title">About Us</div>
            Hello my name {{ $name }}, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur quis tincidunt nisi, eu suscipit nisl. Nunc at efficitur magna, eget pretium urna. Aenean mattis mollis vestibulum. Duis elit enim, facilisis ac feugiat sit amet, pretium eu enim. Nulla bibendum suscipit sem sed finibus. Sed lacinia iaculis tellus ut bibendum. Praesent auctor tristique sem, eget ornare leo lacinia eu. Maecenas non massa scelerisque, rhoncus tortor sit amet, venenatis augue. Aenean fringilla scelerisque nulla sed vestibulum. Aliquam in leo dignissim, egestas arcu eu, lobortis lacus. Donec euismod viverra nibh, eget mattis metus euismod eu. Sed pulvinar elit nunc, id luctus enim mollis eget. In fringilla, augue eget varius efficitur, sem arcu tristique nulla, et suscipit dui justo et orci. Mauris hendrerit sed est quis iaculis.<br /><br /><br /><center><img class="imageStyle" alt="Image" src="{{ $image }}" width="650" height="650" /></center>
        </div>
    </div>
</div>
@endsection
