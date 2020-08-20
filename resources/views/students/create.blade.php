<div>
<form action="{{route('students.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" /><br>
    <label>Roll No:</label>
    <input type="text" name="rollno" /><br>
    <label>Phone:</label>
    <input type="text" name="phone" /><br>
    <label>Photo:</label>
    <input type="file" name="photo" /><br>
    <input type="submit" value="Save" />
    </form>
</div>