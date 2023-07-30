<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $domain = $_POST['domain'];

    // Validate the domain name (you may need more comprehensive validation in a real application)
    if (!empty($domain) && preg_match('/^[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,}$/', $domain)) {
        $whois_data = shell_exec('whois ' . escapeshellarg($domain));
        $whois_data = nl2br($whois_data); // Convert newlines to <br> tags to display properly in HTML
    } else {
        $whois_data = 'Invalid domain name';
    }
}
?>

<div class="result">
    <?php if (!empty($whois_data)) { ?>
        <pre><?php echo $whois_data; ?></pre>
    <?php } ?>
</div>
