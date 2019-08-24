@csrf


<input name="old_student_id" type="hidden" value="{{ (empty($student) ? '': $student->id) }}">


@include('components.select', [
'label' => 'Students',
'name'=>'student_id',
'items'=>$students,
'value_field'=>'id',
'display_field'=>'name',
'selected_value' => (empty($student) ? false: $student->id)
])

@include('components.select', [
'label' => 'Classes',
'name'=>'class_id',
'items'=>$classes,
'value_field'=>'id',
'display_field'=>'title',
'selected_value' => $class->id
])

@include('components.input', [
'label' => 'Enrollment Date',
'name'=>'date_from',
'value'=> (empty($student->class_enrollment) ? '' : $student->class_enrollment->date_from),
'class'=> 'date'
])

@include('components.input', [
'label' => 'Completed Date',
'name'=>'date_to',
'value'=> (empty($student->class_enrollment) ? '' : $student->class_enrollment->date_to),
'class'=> 'date'
])

@include('components.submit', ['class' => ''])