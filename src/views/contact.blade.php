<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="contact" method="POST" style="display:inline-grid">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="" required>
    <label for="message">Message:</label>
    <textarea name="message" id="" cols="30" rows="10" required></textarea>
    <button type="submit" style="margin-top: 1em;">Submit</button>
    </form>
</body>
</html>