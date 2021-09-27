@extends('layouts.admin')
@section('content')
    <div class="admin_create_edit_form">
        <form action="{{ route('admin.users.update', ['user' => $user]) }}" method="post">
            @csrf
            {{-- @include('inc.message') --}}
            @method('put')
            <h3>Редактирование данных пользователя</h3>
            <hr>

            <p>Имя пользователя:</p>
            @error('name') <span style="color:red"> {{ $message }} </span> @enderror
            <input name="name" type="text" value="{{ $user->name }}">
            <hr>

            <p>Email адресс:</p>
            @error('email') <span style="color:red"> {{ $message }} </span> @enderror
            <input name="email" type="text" value="{{ $user->email }}">
            <hr>

            <p>Права:</p>
            @error('is_admin') <span style="color:red"> {{ $message }} </span> @enderror
            <select name="is_admin" >
                @if($user->is_admin)
                    <option value="1"  selected >Admin</option>
                    <option value="0">User</option>
                @else
                    <option value="1">Admin</option>
                    <option value="0" selected >User</option>
                @endif
            </select>
            <hr>

            <div>
                <p>Информация:</p>
                <p>id пользователя: {{ $user->id }}<br>
                Статус верификации:
                    @if(is_null($user->verifed_at)) Не верифицирован
                    @else {{ $user->verifed_at }}
                    @endif<br>
                Дата создания пользователя: {{ $user->created_at }}<br>
                Дата последнего обновления: {{ $user->updated_at }}</p>
            </div>
            <hr>
            <button type="submit">edit</button>
        </form>
    </div>


    {{--
        Добавил скрипт потому что checkbox не возвращает true, он возращает 'on'
        Я попробовал вставлять в js checkbox.setAttribute('value', true) ибо интуитивно это кажется более правильным,но оно тоже не работало
        Потому сделал на установку атрибутов 1 false и так чекбокс заработал как надо.
        Хотя я понимаю что это костыль, я не могу понять и найти другое решение

    <script>
        let checkbox = document.getElementById('acc_edit_checkbox_admin');
        checkbox.addEventListener('change', () => {
            if(checkbox.checked){
                checkbox.setAttribute('value', 'true')
            }else{
                checkbox.setAttribute('value', 'false')
            }
        })
    </script>
    --}}
@endsection
