<div class="my-3">{{ $attendances->links() }}</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Student</th>
            <th>Date</th>
            <th>In</th>
            <th>Out</th>
            <th>Missing</th>
            <th>Approved</th>
            <th>Remarks</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($attendances as $att)
        <tr>
            <td class="py-1" scope="row">{{ $loop->iteration }}</td>
            <td class="py-1">{{ $att->student_name }}</td>
            <td class="py-1">{{ $att->working_day  }}</td>
            <td class="py-1">{{ $att->in_at  }}</td>
            <td class="py-1">{{ $att->out_at }}</td>
            <td class="py-1"><input type="checkbox" name="missing" {{ $att->missing ? 'checked' : '' }} disabled> </td>
            <td class="py-1"><input type="checkbox" name="approved" {{ $att->approved ? 'checked' : '' }} disabled></td>
            <td class="py-1">{{ $att->remarks }}</td>
            <td class="py-1">
                <a href="{{route('attendances.edit', $att)}}" class="btn btn-outline-secondary btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>

</table>

<div class="my-3">{{ $attendances->links() }}</div>