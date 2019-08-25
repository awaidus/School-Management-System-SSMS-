<div class="table-responsive">

    <div class="my-3">{{ $attendances->links() }}</div>

    <table class="table table-striped table-sm">
        <thead class="">
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
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $att->student_name }}</td>
                <td>{{ $att->working_day  }}</td>
                <td>{{ $att->in_at  }}</td>
                <td>{{ $att->out_at }}</td>
                <td><input type="checkbox" name="missing" {{ $att->missing ? 'checked' : '' }} disabled>
                </td>
                <td><input type="checkbox" name="approved" {{ $att->approved ? 'checked' : '' }} disabled>
                </td>
                <td>{{ $att->remarks }}</td>
                <td class="float-right mr-2">
                    <div class="input-group">
                        <span class="input-group-btn">
                            @include('components.button-edit', [
                            'route' => route('attendances.edit', $att),
                            'class' =>'btn-sm'])
                        </span>

                        @if ($att->missing === true && $att->approved === false)
                        <form method="POST" action="{{ route('missing-attendances.mail')}}">
                            @csrf
                            <input type="hidden" name='id' value='{{ $att->id }}'>
                            <button type="submit" class="btn btn-info btn-sm">
                                <i class="far fa-envelope"></i>
                                <span>Email</span>
                            </button>
                        </form>
                        @endif

                    </div>

                </td>
            </tr>
            @endforeach

        </tbody>

    </table>

    <div class="my-3">{{ $attendances->links() }}</div>

</div>