@csrf


@include('components.input', [
'label' => 'Class Title',
'name'=>'title',
'value'=>$class->title
])


@include('components.submit', ['class' => 'btn btn-primary'])