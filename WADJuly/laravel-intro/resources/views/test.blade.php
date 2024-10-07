<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <h1>My name is {{$data['name']}}</h1> --}}
    {{-- {!! $htmlString !!} --}}
    {{-- <ul>
        @foreach ($names as $name)
            <li>{{$name}}</li>
        @endforeach
    </ul> --}}

    @if ($age == 18)
        <p>အသက် ၁၈ နှစ် ပြည့်ပြီးပါပြီ။</p>
    @elseif ($age >= 18 && $age <= 30)
        <p>လူငယ် ဖြစ်ပါ သည်။</p>
    @elseif ($age > 30)
        <p>လူကြီး ဖြစ်ပါသည်။</p>
    @else
        <p>အသက် ၁၈ မပြည့်သေးပါ။</p>
    @endif

    @php
        $count = 0;
    @endphp

    {{-- <ul>
        @for ($count = 0; $count < 5; $count++)
            <li>{{$count}}</li>
        @endfor
    </ul> --}}

    <ul>
        @while ($count < 5)
            <li>{{ $count }}</li>
            @php
                $count++;
            @endphp
        @endwhile
    </ul>


    @php
        $fruit = 'yangon';
    @endphp

    @switch($fruit)
        @case('mango')
            <p>This is mango</p>
        @break

        @case('apple')
            <p>This is apple</p>
        @break

        @case('orange')
            <p>This is orange</p>
        @break

        @default
            <p>This is not fruit.</p>
    @endswitch

</body>

</html>
