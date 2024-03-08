@section('menubar')
<a href="/create">新規登録へ</a>

@section('content')
    <table>
        <tr>
            <th>
                username
            </th>
        </tr>
        <tr>
            <th>
                mailaddress
            </th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>
                    {{$item->username}}
                </td>
            </tr>

            <tr>
                <td>
                    {{$item->email}}
                </td>
            </tr>
        @endforeach
    </table>
