<div class="page-header">
    <h1>Users</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th title="Use equipment, etc...">Active</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Subscription Expires</th>
        </tr>
    </thead>
@foreach ($users as $user)
    <tbody>
        <tr>
            <td>{{ $user->active }}</td>
            <td><a href="{{ route('account.show', $user->id) }}">{{ $user->given_name }} {{ $user->family_name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ User::statusLabel($user->status) }}</td>
            <td>
                @if ($user->subscription_expires->year > 0)
                    {{ $user->subscription_expires->toFormattedDateString() }}
                @else
                    -
                @endif
            </td>
        </tr>
    </tbody>
@endforeach
</table>