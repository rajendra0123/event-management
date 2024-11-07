<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Event Management</title>
    </head>
    <style>
      .event-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
    background-color: grey;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: auto;
    margin: 0 auto;
    gap: 20px; 
}

.event-item {
    padding: 20px;
    background-color: white;
    border-radius: 4px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    /* width: calc(40% - 10px);  */
}
            input[type="button"] {
                background-color: #28a745;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                padding: 10px 20px;
                margin-top: 10px;
                transition: background-color 0.3s ease;
                
            }
            input[type="button"]:hover {
                background-color: #218838;
            }
            input[type="button"]:focus {
                outline: none;
            }

            </style>
    <body>
        @include('partials.hero')

        <div class="event-list">
            @if($events->isEmpty())
                <p>No events available.</p>
            @else
                @foreach($events as $event)
                    <div class="event-item">
                        <h3>{{ $event->event_name }}</h3>
                        @if($event->image)
                        <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" style="max-width: 200px; height:100px">
                    @endif
                        <p><strong>Description:</strong> {{ $event->description }}</p>
                        <p><strong>Contact:</strong> {{ $event->contact }}</p>
                       <input type="button" value="BOOK NOW" name="submit"/>
                    </div>
                @endforeach
            @endif
        </div>

    </body>
    </html>
</x-layout>
