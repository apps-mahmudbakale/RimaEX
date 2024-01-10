<div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-3 col-md-3">
                        <label>
                            Show
                            <select class="form-control">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            entries
                        </label>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 float-right">
                    <div class="mb-3 col-md-7">
                        <label>
                            Search:
                            <input type="search" wire:model.debounce.300ms='search' class="form-control"
                                placeholder="Search....">
                        </label>
                    </div>
                </div>
            </div>
            <table id="datatables-dashboard-orders" class="table table-sm table-striped my-0">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Ware House Name</th>
                        <th>Location</th>
                        <th>Capacity</th>
                        <th>Date Created</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($warehouses as $warehouse)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $warehouse->name }}</td>
                            <td>{{ $warehouse->location }}</td>
                            <td>{{ $warehouse->capacity }}</td>
                            <td>{{ $warehouse->created_at->diffForHumans() }}</td>
                            <td class="btn-group">
                                <a class="btn btn-info btn-sm"
                                    href="{{ route('app.warehouses.edit', $warehouse->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm" id="del{{ $warehouse->id }}"
                                    data-value="{{ $warehouse->id }}"><i class="fa fa-trash"></i></button>
                                <script>
                                    document.querySelector('#del{{ $warehouse->id }}').addEventListener('click', function(e) {
                                        // alert(this.getAttribute('data-value'));
                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, delete it!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                document.getElementById('del#' + this.getAttribute('data-value')).submit();
                                                // Swal.fire(
                                                //     'Deleted!',
                                                //     'Your file has been deleted.',
                                                //     'success'
                                                // )
                                            }
                                        })
                                    })
                                </script>
                                <form id="del#{{ $warehouse->id }}"
                                    action="{{ route('app.warehouses.destroy', $warehouse->id) }}" method="POST"
                                    style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
