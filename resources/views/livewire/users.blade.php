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
            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th wire:click="sortBy('firstname')">First Name @include('partials._sort-icon', ['field' => 'firstname'])</th>
                        <th wire:click="sortBy('lastname')">Last Name @include('partials._sort-icon', ['field' => 'lastname'])</th>
                        <th wire:click="sortBy('email')">Email @include('partials._sort-icon', ['field' => 'email'])</th>
                        <th wire:click="sortBy('phone')">Phone @include('partials._sort-icon', ['field' => 'phone'])</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                @foreach ($user->roles as $key => $role)
                                    <span class="badge rounded-pill bg-success">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td class="btn-group">
                                <a class="btn btn-success text-white btn-sm"
                                    href="{{ route('app.users.show', $user->id) }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('app.users.edit', $user->id) }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm" id="del{{ $user->id }}"
                                    data-value="{{ $user->id }}"><i class="fa fa-trash"></i></button>
                                <script>
                                    document.querySelector('#del{{ $user->id }}').addEventListener('click', function(e) {
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
                                                document.getElementById('del#'+this.getAttribute('data-value')).submit();
                                                // Swal.fire(
                                                //     'Deleted!',
                                                //     'Your file has been deleted.',
                                                //     'success'
                                                // )
                                            }
                                        })
                                    })
                                </script>
                                <form id="del#{{ $user->id }}"
                                    action="{{ route('app.users.destroy', $user->id) }}" method="POST"
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
        <div
            class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">

            <nav aria-label="Page navigation example">
                {{ $users->links() }}
            </nav>
            <div class="fw-normal small mt-4 mt-lg-0">Showing <b>{{ $users->firstItem() }}</b> to
                <b>{{ $users->lastItem() }}</b> out of <b>{{ $users->total() }}</b> entries</div>
        </div>
    </div>
</div>
