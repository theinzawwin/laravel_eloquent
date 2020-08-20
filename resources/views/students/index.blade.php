<div>
<a href="{{route('students.create')}}">New Student</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Roll No</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $std)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$std->name}}</td>
            <td>{{$std->phone}}</td>
            <td>{{$std->rollno}}</td>
            <td><img src="{{asset('/uploads/'.$std->photopath)}}" width="80" height="80"/></td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>