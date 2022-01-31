@include('pages/header')
    @php
        $name='amr';
        $number=array('1','2','3','4','5','6','7','8','9');
        $age=17;
    @endphp
<h1> test view </h1>
<h1> name is: {{$name}}</h1>
@foreach ($number as $key=>$num)
    <ul>
        <li>{{$num}}</li>
    </ul>
@endforeach
@for($i=1;$i<=10;$i++)
{{$i}}<br>
@endfor
@if (count($number)==1)
single number
 @elseif(count($number)>1)
 this number more than one
@else
no number

@endif
<br>
{{$age>=18? 'you is youg' : 'you not'}}
</body>
</html>
