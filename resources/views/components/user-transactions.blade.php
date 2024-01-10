<div>
    <h2>Transactions</h2>
    <table id="datatables-dashboard-securities" class="table table-sm table-striped my-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Reference</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{ $transaction->reference_no }}</td>
                    @if ($transaction->type == 'debit')
                    <td class="text-danger">- {{ number_format($transaction->amount) }}</td>
                    @elseif ($transaction->type == 'credit')
                    <td class="text-success">+{{ number_format($transaction->amount) }}</td>
                    @endif
                    <td>{{$transaction->type }}</td>
                    <td>{{$transaction->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
