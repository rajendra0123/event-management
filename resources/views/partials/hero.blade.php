<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body img {
        width: 100%;
        height: 450px;
        object-fit: cover;
    }
    .event
    {
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        margin-left: 420px;
        font-size: 30px;
    }
    /* Flex container to align elements in a single line */
.search-bar {
    display: flex;
    align-items: center; /* Align items vertically */
    gap: 15px; /* Space between "Search Events" and search input */
   
}

.search {
    display: flex;
    align-items: center;
    gap: 10px;
}

.search input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.search button {
    padding: 8px 12px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.search button:hover {
    background-color: #555;
}
.search-bar a{
text-decoration: none;
}
.add-events-button {
    margin-left: 10px;
        display: inline-block;
        padding: 10px 20px;
        background-color: #28a745; /* Green background */
        color: white;
        border-radius: 4px;
        font-weight: bold;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .add-events-button:hover {
        background-color: #218838; /* Darker green on hover */
    }

    </style>
<body>
    <img src="images/hero.jpeg" alt="evet"/>
</body>
<div class="search-bar">
    <a href="/listings/create" class="add-events-button"
    >ADD EVENTS</a>
    <!-- Event Title -->
    <div class="event">
        <p><strong>Search your Events now</strong></p>
    </div>
    
    <!-- Search Input and Button -->
    <div class="search">
      
        <input
            type="text"
            name="search"
            placeholder="Search here..."
        />
        <button type="submit">Search</button>
    </div>
</div>
</html>