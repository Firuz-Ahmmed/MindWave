<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a Blog Post</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1480072723304-5021e468de85?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">Write a New Post</h2>
        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter post title"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
            </div>

            <!-- Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                <select name="category" id="category"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required>
                    <option value="">Select a category</option>
                    <option value="tech">Technology</option>
                    <option value="health">Health</option>
                    <option value="lifestyle">Lifestyle</option>
                    <option value="business">Business</option>
                </select>
            </div>

            <!-- Tags -->
            <div>
                <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                <input type="text" name="tags" id="tags" placeholder="Enter tags separated by commas"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" id="content" rows="8" placeholder="Write your post content here..."
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200" required></textarea>
            </div>

            <!-- Upload Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md shadow-sm cursor-pointer focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200">
                <p class="mt-1 text-sm text-gray-500">PNG, JPG, GIF up to 2MB.</p>
            </div>

            
            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Publish Post
                </button>
            </div>
        </form>
    </div>
</body>
</html>
