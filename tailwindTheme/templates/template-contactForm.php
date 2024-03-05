<?php /* Template Name: Contact Form */ ?>
<?php get_header(); ?>

<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $gender = isset($_POST['gender']) ? sanitize_text_field($_POST['gender']) : '';

    $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'gender' => $gender,
    );
    $submitted = true;
    // Display submitted data in the browser console
    echo "<script>console.log(" . json_encode($data) . ");</script>";
}
?>

<div class="max-w-md mx-auto">
    <form method="post" class="mt-8 space-y-6" action="">
        <div>
            <label for="name" class="block text-black-700">Name</label>
            <input id="name" name="name" type="text" class="form-input mt-1 block w-full border-black-300 focus:border-blue-500">
        </div>
        <div>
            <label for="email" class="block text-black-700">Email</label>
            <input id="email" name="email" type="email" class="form-input mt-1 block w-full border-black-300 focus:border-blue-500">
        </div>
        <div>
            <label for="phone" class="block text-black-700">Phone</label>
            <input id="phone" name="phone" type="tel" class="form-input mt-1 block w-full border-black-300 focus:border-blue-500">
        </div>
        <div>
            <label for="gender" class="block text-black-700">Gender</label>
            <select id="gender" name="gender" class="form-select mt-1 block w-full border-black-300 focus:border-blue-500">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div>
            <button type="submit" name="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </div>
    </form>
    <?php if ($submitted): ?>
    <div class="max-w-md mx-auto">
        <p class="text-green-500">Thanks for submission!</p>
    </div>
    <?php else: endif; ?>

</div>

<?php get_footer(); ?>
