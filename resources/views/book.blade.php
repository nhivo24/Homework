<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
        table, th, td{
            border:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
            width:auto;
        }
        th, td{
            text-align:left;
            padding:10px;
            text-align: center;
        }
        tr:hover{
            background-color:#ddd;
            cursor:pointer;
        }
       
    </style>
<body>
  <table border="1" style="border-collapse: separate">
       <caption style="caption-side: top;">BOOK</caption>    
          <tr>
            <td>Title</td>
            <td>Authour</td>
            <td colspan="2">Detail</td>
          </tr> 
        @foreach($book as $books)                     
          <tr>
              <td>{{ $books->title}}</td>
              <td>{{ $books->author}}</td>
              <td>
                <form method="get" action="update/{{$books->id}}">
                  @csrf
                  <button type="submit">Edit</button>
                </form>
              </td>
              <td>
                <form method="post" action="book/{{$books->id}}">
                  @csrf
                  <button type="submit">Delete</button>
                </form>
              </td> 
                                   
          </tr>
      

                  
                  </div>
              @endforeach
              </table>
        </div>
    </body>
</html>