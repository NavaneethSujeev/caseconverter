<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Case Convert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    .container{
        padding-top: 50px;
    }
    .btn{
        border: 1px solid gray;
    }
</style>
<body>
    <div class="container">
      <div class="row">
          <div class="col">
              <textarea name="word" id="word" rows="7" cols="120" placeholder="Text"></textarea>
          </div>
      </div> 
    <div class="row">
        <div class="col" style="padding-left: 20%">
         <button class="btn" onclick="convertStr()"> UPPER CASE </button>
         <button class="btn" onclick="changetolower()"> lower case </button>
         <button class="btn" onclick="changetocapitalise()"> CaPitalise </button>
         <button class="btn" onclick="Sentancetoupper()"> Sentence Case </button>
         <button class="btn" onclick="toggleletter()"> tOGGLE cASE </button>
         {{-- <button class="btn" onclick="convertStr()"> aLtErNaTe cAsE </button> --}}
        </div>
    </div>
    <div class="row">
        <div class="col pt-2">
            <textarea name="result" id="result" rows="7" cols="120" placeholder="Result"></textarea> 
        </div>
    </div>
     
    </div>
</body>
<script>
    function convertStr(){
       var str = $('#word').val().toUpperCase();
       document.getElementById("result").innerHTML = str
    }
    function changetolower(){
       var str = $('#word').val().toLowerCase();
       document.getElementById("result").innerHTML = str
    }
    function changetocapitalise(){
       var str = $('#word').val();
       arr = str.split(" ");
       for (var i = 0; i < arr.length; i++) {
         arr[i] = arr[i].charAt(0).toUpperCase() + arr[i].slice(1);
        }
        const str2 = arr.join(" ");
       document.getElementById("result").innerHTML = str2;       
    }
    function Sentancetoupper(){
       var string = $('#word').val();
        var res = string.charAt(0).toUpperCase() + string.slice(1)
       document.getElementById("result").innerHTML = res;      
    }
    function toggleletter(){
       var str = $('#word').val().toUpperCase();
       arr = str.split(" ");
       for (var i = 0; i < arr.length; i++) {
         arr[i] = arr[i].charAt(0).toLowerCase() + arr[i].slice(1);
        }
        const str2 = arr.join(" ");
    document.getElementById("result").innerHTML = str2;      
    }
 </script>
</html>