@extends ('layouts.app')

@section('content')

<section>
<div class="container">
    <h1>Bolg</h1>
</div>
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
        </tr>
    </thead>
    <tbody>
    @foreach($projects as $project)

    <tr>
        <td>{{$project->id}}</td>
        <td><a href="">{{$project->title}}</a></td>
        <td>{{$project->slug}}</td>
        <td></td>
    </tr>
    @endforeach
    </tbody>
     
</table>
        

       
    </div>
</div>

</section>

@endsection