<?php
// Shortcode to display the tournament registration form
function masters_registration_form_shortcode() {
    ob_start();
    ?>
    <form id="registration-form" method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="tournament">Select Tournament:</label>
        <select id="tournament" name="tournament" required>
            <option value="tournament1">Tournament 1</option>
            <option value="tournament2">Tournament 2</option>
            <option value="tournament3">Tournament 3</option>
        </select>

        <input type="submit" name="submit" value="Register">
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('masters_registration_form', 'masters_registration_form_shortcode');

// Handle form submission
function masters_handle_registration() {
    if (isset($_POST['submit'])) {
        // Process the registration data here
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $tournament = sanitize_text_field($_POST['tournament']);

        // Here you can add code to save the registration data to the database
        // and potentially send a confirmation email.

        // Redirect or display a success message
        echo '<p>Thank you for registering, ' . esc_html($name) . '!</p>';
    }
}
add_action('wp', 'masters_handle_registration');
?>