<div>
    <h1> Student list With Using Elequent Model</h1>
    {{-- {{ print_r($data) }} --}}
    <table border="1" >
        
        <tr>
            <td> Name</td>
            <td> Email</td>
            <td> Batch</td>
            
        </tr>
        @foreach ($student as $x )
        <tr>
            <td> {{$x->name}} </td>
            <td> {{$x->email}}</td>
            <td> {{$x->batch}}</td>
            
        </tr>
            
        @endforeach
    </table>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>
