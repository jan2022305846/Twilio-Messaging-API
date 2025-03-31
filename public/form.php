<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-4xl flex flex-col md:flex-row">
        <!-- Left Section: Info with Typing Animation -->
        <div class="w-full md:w-1/2 p-4 flex flex-col justify-center items-center bg-blue-100 rounded-lg">
            <div class="typing-container">
                Messaging API
            </div>
            <p class="text-gray-700 text-center mt-2">
                Sent Instant Message! <br>
                <span class="font-semibold">By: Janny Abu-abu</span> <br>
                Powered by <span class="font-semibold text-blue-600">Twilio</span>.
            </p>
        </div>

        <!-- Right Section: Form -->
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold text-center text-gray-700">Contact Form</h2>
            <form action="../src/process.php" method="POST" class="mt-4">
                <div>
                    <label class="block text-gray-600">Name:</label>
                    <input type="text" name="name" placeholder="Enter your full name" required class="w-full p-2 border rounded">
                </div>
                <div class="mt-2">
                    <label class="block text-gray-600">Email:</label>
                    <input type="email" name="email" placeholder="Enter your email address" required class="w-full p-2 border rounded">
                </div>
                <div class="mt-2">
                    <label class="block text-gray-600">Phone:</label>
                    <input type="text" name="phone" placeholder="+639123456789" required class="w-full p-2 border rounded">
                </div>
                <div class="mt-2">
                    <label class="block text-gray-600">Message:</label>
                    <textarea name="message" placeholder="Write your message here..." required class="w-full p-2 border rounded"></textarea>
                </div>
                <div class="mt-4">
                    <button type="submit" class="bg-blue-500 text-white w-full py-2 rounded hover:bg-blue-600 transition duration-200">Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>