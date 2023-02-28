<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mã hoá Pass</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="{{route('mahoa')}}" method="post">
        @csrf
        <input type="name" name="name" placeholder="Nhập mã">
     
       <input type="submit" value="mã hoá">
    </form>
    <br>
    <br>
    Mã hoá của bạn là <br>
        <div class="result">
            <input name="result" type="text" value="{{$mahoa}}">
            <i class="fa-regular fa-clone" id="copy-button" title="Copy"></i>
        </div>
 <style>
    input{
        height: 40px;
        padding: 10px 10px;
        font-size: 18px;
    }
    input[type="text"]{
        width: 1000px;
    }
    input[type="name"]{
        width: 500px;
    }
    .result {
        position: relative;
         width: 1000px;
    }
    #copy-button {
        position: absolute;
        top: 20px;
        right: 0px;
    }
    #copy-button{
        cursor: pointer !important;
        font-size: 25px;
    }
 </style>
 
<script>
$(document).ready(function(){
  $("#copy-button").click(function(){
    var copyText = $('input[name="result"]').val();
    var tempInput = document.createElement("input");
    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
    tempInput.value = copyText;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    
  });
});
</script>


</body>
</html>