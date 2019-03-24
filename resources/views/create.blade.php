<!DOCTYPE html>
<html>
<head>
	<title> Add Event</title>
</head>
<body>
<h1>Add Event</h1>




    {{--<form action="/events" method="post">
           {{ csrf_field() }}
                <div class="form-group">
                </div><label for="">Name</label>
                    <input name="name" type="text" value="" class="form-control" placeholder="Title" />

                    <label for='place'>Place</label>
                    <textarea name="place" class="form-control" rows="10" placeholder="Here goes your content..."></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>--}}



            <form class="" action="{{URL::to('/store')}}" method="post">      
                    <input type="text" name="name" value="" placeholder="enter name"> 
                     <input type="text" name="place" value="" placeholder="enter place">                   

                     <input type="hidden" name="_token" value="{{csrf_token()}}">

                     <button type="submit" name="button">Submit</button>
                
                
            </form>


</body>
</html>