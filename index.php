<!DOCTYPE html>
<html>
<head>
    <title>WHOIS Tools for Domain & IP Address Lookup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>WHOIS Tools</h1>
        <form method="post" class="lookup-form">
            <input type="text" name="query" placeholder="Enter domain name or IP address">
            <button type="submit">Lookup</button>
        </form>
        <?php include 'lookup.php'; ?>
    </div>
</body>
</html>
