@extends('layout')
@section('content')
    <p>{{ $msg }}</p>

    @if (count($errors) > 0)
        <p>入力に問題があります。再入力してください。</p>
    @endif
    <form action="/CreateAccount" method="post">
        <table>
            @csrf
            @error('username')
                <tr>
                    <th>
                        エラー
                    </th>
                    <td>
                        {{ $message }}
                    </td>
                </tr>
            @enderror
            <tr>
                <th>
                    ユーザーネーム
                </th>
                <td>
                    <input type="text" name="username" value="{{ old('username') }}">
                </td>
            </tr>
            
            @error('email')
                <tr>
                    <th>
                        エラー
                    </th>
                    <td>
                        {{ $message }}
                    </td>
                </tr>
            @enderror

            <tr>
                <th>
                    メールアドレス
                </th>
                <td>
                    <input type="text" name="email" value="{{ old('email') }}">
                </td>
            </tr>

            @error('password')
                <tr>
                    <th>
                        エラー
                    </th>
                    <td>
                        {{ $message }}
                    </td>
                </tr>
            @enderror

            <tr>
                <th>
                    パスワード
                </th>
                <td>
                    <input type="text" name="password" value="{{ old('password') }}">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="登録">
                </td>
            </tr>
        </table>
    </form>
@endsection
