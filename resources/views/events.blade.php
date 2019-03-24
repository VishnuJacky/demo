
    <h1>Posts</h1>
    <style>
.center {
    text-align: left;
    border: 5px solid white;
}
</style>
    @if(count($events) > 0)
        @foreach($events as $event)
        <hr>
            <//div class="center">
            <//div class="well">
                <//div class="row">
                    <//div class="col-md-4 col-sm-4"> 
                    <//div>
                    <//div class="col-md-8 col-sm-8">
                        <h3>{{$event->name}}</h3>
                        
                        
                    <//div>
                <//div>
            <//div>
        @endforeach

        
    @else
        <p>No posts found</p>
    @endif
