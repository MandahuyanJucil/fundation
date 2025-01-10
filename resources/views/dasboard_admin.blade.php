<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BYSMP | Bless The Children Foundation</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f8ff;
    color: #333;
    display: flex;
    flex-direction: column;
    height: 100vh;
}

header {
    background-color: #A294F9;
    color: white;
    padding: 20px;
    text-align: center;
    animation: slideDownFadeIn 1s ease-out; /* Apply the animation */
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}

header p {
    margin: 5px 0 0;
    font-size: 1.2em;
}

main {
    flex: 1;
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 columns */
    grid-template-rows: repeat(2, 1fr);    /* 2 rows */
    gap: 10px;
    padding: 10px;
}

a.button {
    text-decoration: none;
    background-color: #CDC1FF;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5em;
    border: 2px solid #A294F9;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.3s ease; /* Added transform for scaling */
}

a.button:hover {
    background-color: #A294F9;
    transform: scale(1.05); /* Scale the button on hover */
}

footer {
    background-color: #ddd;
    text-align: center;
    padding: 10px;
}

/* Keyframes for header animation */
@keyframes slideDownFadeIn {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
</head>
<body>
    <header>
        <h1>BYSMP</h1>
        <p>BLESS THE CHILDREN FOUNDATION</p>
        <p>INSPIRING CHANGE, BUILDING WITH HOPE.</p>
    </header>
    <main>
        <a href="/mayashope" class="button">Chalice</a>
        <a href="/chalice" class="button">Mayashope</a>
        <a href="/events" class="button">Events</a>
        <a href="/mayaform" class="button">Evaluation Form</a>
    </main>
    
</body>
</html>
