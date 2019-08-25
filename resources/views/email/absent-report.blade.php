@component('mail::message')

# Absent Report of following STUDENT

<h3>Student Name: {{ $data['student_name'] }} </h3>
<p>Date: {{ $data['working_day'] }} </p>
<p>In Time: {{ $data['in_at'] }} </p>
<p>Out Time: {{ $data['out_at'] }} </p>

<p>Please logon to the system for furthe details or contact the SCHOOL management</p>

@component('mail::button', ['url' => route('home')])
Login
@endcomponent

Thanks,<br>

Admin Section

School Management System

@endcomponent