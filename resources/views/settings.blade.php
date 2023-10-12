<link href="{{ asset('css/settings.css') }}" rel="stylesheet"/>
<script defer src="{{ asset('js/checkbox.js') }}"></script>

@extends('layouts.main')

@section('title')
    Settings
@endsection

@section('content')

<h1 class="header">Settings</h1>

<div class="table_container">
    <table>

        <tbody>
            <tr>
                <td>Language</td>
                <td>
                    <select>
                        <option>russian</option>
                        <option>english</option>
                        <option>spanish</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Theme mode</td>
                <td>
                    <select>
                        <option>light theme</option>
                        <option>dark theme</option>
                    </select>
                </td>
            </tr>
            @if(Auth::check())
                <tr>
                    <td>Password</td>
                    <td>
                        <form action="{{}}" method="POST">
                            @csrf
                            @method('patch')
                            <input type="text" name="current_password" placeholder="Current password">
                            <input type="text" name="new_password" placeholder="New password">
                            <button type="submit">Change password</button>
                        </form>
                    </td>
                </tr>
            @endif
            <tr>
                <td>Display current local time</td>
                <td>
                    <input type="checkbox" id="toggle_time" onclick="boxChecked()">
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
