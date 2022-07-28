<!DOCTYPE html>
<html>
<head>
    <title>Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="mystylesheet.css"/>
</head>

<body>
    <main>
    <h1>Account Sign Up</h1>
    <form action="form.php" method="post">
    <fieldset> 
    <legend>Account Information</legend>
        <label>E-Mail:</label>
        <input type="text" name="email" value="" class="textbox">
        <br>
        <br>
        <label>Phone Number:</label>
        <input type="text" name="phone" value="" class="textbox">
    </fieldset>
    <fieldset>
    <legend>Settings</legend>
        <p>How did you hear about us?</p>
        <input type="radio" name="heard_from" value="Search Engine">
        Search engine<br>
        <input type="radio" name="heard_from" value="Friend">
        Word of mouth<br>
        <input type=radio name="heard_from" value="Other">
        Other<br>
        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <input type="checkbox" name="wants_updates" value="Yes">YES, I'd like to receive
        information about new products and special offers.<br>
        <input type="checkbox" name="wants_updates" value="No">No thank you!<br>
        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
        </select>
        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>
    <input type="submit" value="Submit">
    <br>
    </form>
    </main>
</body>
</html>