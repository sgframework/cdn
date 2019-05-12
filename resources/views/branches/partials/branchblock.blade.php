@if ($branch->branchname)
    <tbody>
        <tr>
            <td style="text-align:center;"><img class="media-object" alt="{{ $branch->logo }}" src="{{ asset('/images/assests') }}/{{ $branch->logo }}" style="width:15px; height:15px; border-radius:50%"></td>
            <td style="padding-left:14px;">{{ $branch->branchname }}</td>
            <td style="padding-left:14px;">{{ $branch->branchnumber }}</td>
            <td style="padding-left:14px;">{{ $branch->salesgroup }}</td>
            <td style="padding-left:14px;">{{ $branch->dc }}</td>
            <td style="padding-left:14px;">{{ $branch->office }}</td>
        </tr>
    </tbody>
@endif