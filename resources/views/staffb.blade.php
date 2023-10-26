@extends('templates.layout')

@section('title',$title)

@section('content')

<h1>
    {{$title}} - Blade page
</h1>
 
<?php /*$loop in @foreach Blade's cycle:
$loop->first returns '1' if the item of the array is the first;
$loop->last returns '1' if the item of the array is the last;
$loop->remaining returns how many items the array still has got.
In this example:
- if the item is first, its color is red;
- if the item is last, its color is blue;
- if no first and no last, its color is green (color:)*/ ?>

@if($staff)
    <ul>
    @foreach($staff as $s)
        <li style="color:green; {{$loop->first ? 'color:red' : ''}}; {{$loop->last ? 'color:blue' : ''}}">
            {{$loop->remaining}} {{$s['name']}} {{$s['lastName']}}
        </li>
    @endforeach
    </ul>
@else 
    <h1>No staff</h1>
@endif


<ul>
@forelse($staff as $s)
    <li>{{$s['name']}} {{$s['lastName']}}</li>
@empty
    <li>No staff</li>
@endforelse
</ul>


<h2>Staff with &#64;for Blade Cycle</h2>
@for($i=0; $i < count($staff); $i++)

    {{$staff[$i]['name']}} {{$staff[$i]['lastName']}} <br>

@endfor

<br/><br/>


<h2>Staff with &#64;while Blade Cycle using array_shift function</h2>
@while($s = array_shift($staff) )

    {{$s['name']}} {{$s['lastName']}} <br>

@endwhile



@endsection

<!--
    Blade syntax
-->
@section('footer')
    @parent <!-- it calls the content of parent section named 'footer' 
                    in layout that is extended in this html page
                -->
        <!-- example of code that are viewed together the parent 'footer' section content-->
        <script>
            console.log("parent");
        </script>
@stop <!-- it stops the 'footer' section -->


 