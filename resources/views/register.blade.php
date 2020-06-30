<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
        @csrf
        <label for="fname">First name:</label><br>
        <p><input type="text" id="fname" name="fname"></p>
        <label for="lname">Last name:</label><br>
        <p><input type="text" id="lname" name="lname"></p>

        <p>Gender:</p>
        <input type="radio" name="gender" id="male"><label for="male">Male</label><br>
        <input type="radio" name="gender" id="female"><label for="female">Female</label><br>
        <input type="radio" name="gender" id="other"><label for="other">Other</label><br>

        <p>Nationality:</p>
        <select name="nationality">
            <option>Indonesian</option>
            <option>Singaporean</option>
            <option>Malaysian</option>
            <option>Australian</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" id="bindo"><label for="bindo">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english"><label for="english">English</label><br>
        <input type="checkbox" id="lain"><label for="lain">Other</label><br>

        <p><label for="bio">Bio:</label></p>
        <textarea id="bio" cols="30" rows="10"></textarea><br>

        <button type="submit">Sign Up</button>
    </form>

</body>

</html>