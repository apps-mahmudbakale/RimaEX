<div>
    <table id="datatables-dashboard-securities" class="table table-sm table-striped my-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Bank Name</th>
                <th>Account Name</th>
                <th>Account Number</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banks as $bank)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$bank->bank_name }}</td>
                    <td>{{$bank->account_name }}</td>
                    <td>{{$bank->account_number }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

