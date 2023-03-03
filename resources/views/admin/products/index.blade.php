<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Bank ID</th>
            <th>Account Name</th>
            <th>Account Number</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Info</th>
        </tr>
    </thead>
    <tbody>
        @foreach($accounts as $account)
        <tr>
            <td>{{ $account['id'] }}</td>
            <td>{{ $account['bank_id'] }}</td>
            <td>{{ $account['account_name'] }}</td>
            <td>{{ $account['account_number'] }}</td>
            <td>{{ $account['status'] }}</td>
            <td>{{ $account['created_at'] }}</td>
            <td>{{ $account['updated_at'] }}</td>
            <td>{{ $account['info'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>