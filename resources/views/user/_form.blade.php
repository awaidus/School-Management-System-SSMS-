@csrf


@include('components.select', [
'label' => 'Users',
'name'=>'user_id',
'items'=>$users,
'value_field'=>'id',
'display_field'=>'name',
'selected_value' => (empty($user) ? false: $user->id)
])

@include('components.select', [
'label' => 'parents',
'name'=>'paren_id',
'items'=>$parents,
'value_field'=>'id',
'display_field'=>'name',
// 'selected_value' => (empty($user) ? false: $user->id)
])


@include('components.submit')