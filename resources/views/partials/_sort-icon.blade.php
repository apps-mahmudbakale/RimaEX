@if ($sortBy !== $field)
<i class="text-muted fa fa-sort"></i>
@elseif ($sortDirection == 'asc')
<i style="color:rgb(38, 38, 326, 0.774)" class="fa fa-sort-alpha-up"></i>
@else
<i style="color:rgb(38, 38, 326, 0.774)" class="fa fa-sort-alpha-down"></i>
@endif