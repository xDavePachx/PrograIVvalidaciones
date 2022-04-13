<center>
<h2>Edit a student</h2>
</center>
<br>
<br>
<form action="{{ url('/estudiante/'.$estudiante->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    @include('estudiantes.form')
</form>