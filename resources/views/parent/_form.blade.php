@csrf


@include('components.input', ['label' => 'Father Name', 'name'=>'father_name', 'value'=>$parent->father_name])
@include('components.input', ['label' => 'Mother Name', 'name'=>'mother_name', 'value'=>$parent->mother_name])
@include('components.input', ['label' => 'Address', 'name'=>'address', 'value'=>$parent->address])
@include('components.input', ['label' => 'Phone #', 'name'=>'phone_no', 'value'=>$parent->phone_no])
@include('components.input', ['label' => 'Email', 'name'=>'email', 'value'=>$parent->email])

@include('components.submit');