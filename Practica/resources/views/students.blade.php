@foreach($students as $student)
<tr>
{{$student->name_student}}
{{$student->lastname_student}}
{{$student->id_student}}
<tr>
@endforeach