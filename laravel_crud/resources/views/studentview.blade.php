<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  
<style>
    /* Add padding to containers */
    .container {
    padding: 16px;
    background-color: white;
    }

    /* Full-width input fields */
    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    .registerbtn:hover {
    opacity: 1;
    }

    /* Add a blue text color to links */
    a {
    color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
    background-color: #f1f1f1;
    text-align: center;
    }
    </style>
    </head>
    <div class="container">
    <body>
    {{session()->get('usermail');}}
    <form action="savestudent" method="post">
    <div class="container">
        <label for="name"><b>name</b></label>
        <input type="text" placeholder="Enter name" name="name" id="name" required>

        <label for="course"><b>course</b></label>
        <input type="text" placeholder="Enter course" name="course" id="course" required>

        <label for="fee"><b>fee</b></label>
        <input type="text" placeholder="Enter fee" name="fee" id="fee" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn">Register</button>
    </div>
    @csrf
    
    </form>
<table class="table table-striped  table-dark" id="myTable">
    <thead>
 <tr>  
    <th>Name</th>
    <th>Course</th>
    <th>Fee</th>
</tr>
</thead>
<tbody>
@foreach ($studentdata as $student)
   <tr>
     <td>{{$student->name}}</td>
     <td>{{$student->course}}</td>
     <td>{{$student->fee}}</td>
   </tr>   
      
@endforeach
</tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
