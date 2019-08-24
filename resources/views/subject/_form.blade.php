@csrf


@include('components.input', [
'label' => 'Class Title',
'name'=>'title',
'value'=>$subject->title
])

@include('components.select', [
'label' => 'Classes',
'name'=>'class_id',
'items'=>$classes,
'value_field'=>'id',
'display_field'=>'title',
'selected_value' => (empty($subject) ? false: $subject->class_id)
])


@include('components.submit')