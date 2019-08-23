@csrf

@include('components.select', [
'label' => 'Parents',
'name'=>'parent_id',
'items'=>$parents,
'value_field'=>'id',
'display_field'=>'father_name',
'selected_value' => (empty($student) ? false: $student->parent_id)
])


@include('components.input', [
'label' => 'Student Name',
'name'=>'name',
'value'=>$student->name
])

@include('components.input', [
'label' => 'Roll #',
'name'=>'roll_no',
'value'=>$student->roll_no
])

@include('components.input', [
'label' => 'Birth Date',
'name'=>'dob',
'value'=>$student->dob,
'class'=> 'date'
])

@include('components.input', [
'label' => 'Admission Date',
'name'=>'doa',
'value'=>$student->doa,
'class'=> 'date'
])

@include('components.submit')