<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Create Event</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
            }

            /* Center the container without affecting layout flow */
            .form-container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                margin: 40px auto; /* Auto horizontal margin and top margin for spacing */
            }

            .form-container h2 {
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }

            .form-group {
                margin-bottom: 15px;
            }

            label {
                font-weight: bold;
                color: #333;
                display: block;
                margin-bottom: 5px;
            }

            input[type="text"], input[type="email"], input[type="file"], textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-size: 16px;
            }

            textarea {
                resize: vertical;
                min-height: 100px;
            }

            .submit-btn {
                width: 100%;
                padding: 12px;
                font-size: 18px;
                color: #fff;
                background-color: #28a745;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .submit-btn:hover {
                background-color: #218838;
            }
            .error-message {
    color: #ff0000; 
    font-size: 12px; 
    margin-top: 4px; 
}
        </style>
    </head>
    <body>
        <div class="form-container">
            <h2>Add New Event</h2>
            <form action="/listings" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="event-name">Event Name</label>
                    <input type="text" id="event-name" name="event_name"  value="{{ old('event_name') }}" placeholder="Enter event name" >
                    @error('event_name')
                    <p class="error-message">{{$message}}</p>
                                    @enderror
                </div>

                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" id="contact" name="contact" value="{{ old('contact') }}" placeholder="Enter your contact details" >
                    @error('contact')
                    <p class="error-message">{{$message}}</p>
                                    @enderror
                </div>
               

                <div class="form-group">
                    <label for="image">Event Image</label>
                    <input type="file" id="image" name="image"  value="{{ old('image') }}" accept="image/*" >
                    @error('image')
                    <p class="error-message">{{$message}}</p>
                                    @enderror
                </div>
                

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" placeholder="Enter event description" > {{ old('description') }}</textarea>
                    @error('description')
                    <p class="error-message">{{$message}}</p>
                                    @enderror
                </div>
               

                <button type="submit" class="submit-btn">Add Event</button>
            </form>
        </div>
    </body>
    </html>
</x-layout>
