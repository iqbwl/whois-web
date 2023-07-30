<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = $_POST['query'];

    if (!empty($query)) {
        if (preg_match('/^[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,}$/', $query)) {
            // Valid domain name
            $lookup_data = shell_exec('whois ' . escapeshellarg($query));
        } elseif (filter_var($query, FILTER_VALIDATE_IP)) {
            // Valid IP address
            $lookup_data = shell_exec('whois ' . escapeshellarg($query));
        } else {
            // Invalid input
            $lookup_data = 'Invalid domain name or IP address';
        }

        if (empty($lookup_data)) {
            $lookup_data = 'No information found for the query.';
        } else {
            // Escape HTML characters to prevent breaking the layout
            $lookup_data = htmlspecialchars($lookup_data);
            // Convert newlines to <br> tags to display properly in HTML
            $lookup_data = nl2br($lookup_data);
        }
    } else {
        $lookup_data = 'Please enter a domain name or IP address.';
    }
}
?>

<div class="result">
    <?php if (!empty($lookup_data)) { ?>
        <pre><?php echo $lookup_data; ?></pre>
    <?php } ?>
</div>
