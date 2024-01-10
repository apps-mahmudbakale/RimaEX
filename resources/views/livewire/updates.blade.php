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
            <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th wire:click="sortBy('title')">Title @include('partials._sort-icon', ['field' => 'title'])</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($updates as $update)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $update->title }}</td>
                            <td>{{ $update->created_at->diffForHumans() }}</td>
                            <td class="btn-group">
                                <a class="btn btn-success text-white btn-sm" href="{{route('app.updates.show', $update->id)}}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a class="btn btn-info btn-sm" href="{{route('app.updates.edit', $update->id)}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm"
                                    onclick="event.preventDefault(); document.getElementById('del#{{ $update->id }}').submit();">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form id="del#{{ $update->id }}" action="" method="POST"
                                    onsubmit="return confirm('Are you sure');" style="display: inline-block;">
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
                {{ $updates->links() }}
            </nav>
              <div class="fw-normal small mt-4 mt-lg-0">Showing <b>{{$updates->firstItem()}}</b> to <b>{{$updates->lastItem()}}</b> out of <b>{{$updates->total()}}</b> entries</div>
        </div>
    </div>
</div>
