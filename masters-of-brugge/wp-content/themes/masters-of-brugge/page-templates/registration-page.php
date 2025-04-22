<?php
/*
Template Name: Tournament Registration
*/

get_header(); ?>

<div class="registration-form-container">
    <h1>Register for the Masters of Brugge Tournament</h1>
    <form id="registration-form" method="post" action="">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <label for="team">Team Name:</label>
        <input type="text" id="team" name="team" required>

        <label for="payment">Payment Method:</label>
        <select id="payment" name="payment" required>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="credit_card">Credit Card</option>
        </select>

        <input type="submit" value="Register">
    </form>
</div>

<?php get_footer(); ?>