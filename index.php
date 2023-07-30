<!DOCTYPE html>
<html>
<head>
    <title>WHOIS Lookup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>WHOIS Lookup</h1>
        <form method="post">
            <input type="text" name="domain" placeholder="Enter domain name">
            <button type="submit">Lookup</button>
        </form>
        <?php include 'whois.php'; ?>
    </div>
</body>
</html>
