<center>
    <h2>add a student</h2>
    <br>
    <form action="{{ url('estudiante') }}" method="post">
        @csrf   
        @include ('estudiantes.form')
    </form>
</center>