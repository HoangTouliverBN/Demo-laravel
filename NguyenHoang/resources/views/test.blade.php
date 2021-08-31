<table>
    @foreach ($VanHoc as $SachVanHoc)
    <tr>
        <th>{{$SachVanHoc->TenSach}}</th>
        <th>{{$SachVanHoc->DonGia}}</th>
        <th><img src="{{ Storage::disk('AnhSach')->url($SachVanHoc->AnhSP) }}" alt="">
        </th>
    </tr>


    @endforeach
</table>