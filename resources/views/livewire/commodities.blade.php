<div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-3 col-md-3">
                        <label>
                            Show 
                            <select
                                class="form-control">
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
                            <input type="search" wire:model.debounce.300ms='search'
                                class="form-control" placeholder="Search....">
                            </label>
                        </div>
                </div>
            </div>
            <table class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th wire:click="sortBy('name')">Name @include('partials._sort-icon', ['field' => 'name'])</th>
                        <th wire:click="sortBy('commodity_code')">Code @include('partials._sort-icon', ['field' => 'commodity_code'])</th>
                        <th wire:click="sortBy('current_price')">Current Price @include('partials._sort-icon', ['field' => 'current_price'])</th>
                        <th wire:click="sortBy('old_price')">Old Price @include('partials._sort-icon', ['field' => 'old_price'])</th>
                        <th>Ware House</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commodities as $commodity)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $commodity->name }}</td>
                            <td>{{ $commodity->commodity_code }}</td>
                            <td>&#8358;{{ number_format($commodity->current_price) }}</td>
                            <td>&#8358;{{ number_format($commodity->old_price) }}</td>
                            <td>{{ $commodity->wareHouse->name}}</td>
                            <td>{{ $commodity->created_at->diffForHumans() }}</td>
                            <td class="btn-group">
                                <a class="btn btn-info btn-sm" href="{{route('app.commodities.edit', $commodity->id)}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm" id="del{{ $commodity->id }}"
                                    data-value="{{ $commodity->id }}"><i class="fa fa-trash"></i></button>
                                <script>
                                    document.querySelector('#del{{ $commodity->id }}').addEventListener('click', function(e) {
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
                                <form id="del#{{ $commodity->id }}"
                                    action="{{ route('app.commodities.destroy', $commodity->id) }}" method="POST"
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
        <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">

            <nav aria-label="Page navigation example">
                {{ $commodities->links() }}
            </nav>
              <div class="fw-normal small mt-4 mt-lg-0">Showing <b>{{$commodities->firstItem()}}</b> to <b>{{$commodities->lastItem()}}</b> out of <b>{{$commodities->total()}}</b> entries</div>
        </div>
    </div>
</div>
