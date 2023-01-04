@if (!empty($listAll))
@foreach ($listAll as $key => $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->nameBusiness }}</td>
    <td>{{ $item-> isAccept}}</td>
    <td>{{ $item-> created_at}}</td>
</tr>
@endforeach
@endif
{!! $listAll->links() !!}