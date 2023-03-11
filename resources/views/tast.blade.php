<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href= "{{ asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    {{--<h1>
    <h1>hola {{name}}</h1>

    @if(day =='saturday')
    es sabado!!

    @elseif(day=='sunday')
    es domingo

    @elseno estamos en el fin de semana

    @endif
</h1>--}}


{{--<h1>
    *******************************************************************************************
    ******************************************************************************************************
<h1>
    @@switch($day)
        @case(saturday)
        sabado!!
            
            @break
        @case(sunday)
        es domingo!!
            
            @break
        @default
        no estamos en fin de semana
            
    @endswitch

</h1>--}}
        <table class="table">
            <td>id</td>
            <td>nombre completo</td>
            <td>correo</td>
                
            
            </tr>
        </thead>
        @endforeach ($user as $user)

        <tr>
            <th>{{$user->id}}</th>
            <th>{{$user->fullname}}</th>
            <th>{{$user->email}}</th>
        </tr>






        </table>
</h1>
</body>
</html>