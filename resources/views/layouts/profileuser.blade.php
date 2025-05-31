<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Sidebar - Include langsung dari profile -->
            <div class="w-full md:w-80">
                @include('user.profile.sidebar', ['user' => $user])
            </div>

            <!-- Main Content -->
            <div class="flex-1 bg-white rounded-xl shadow-sm p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Informasi Biodata Diri</h1>
                @include('user.profile.form', ['user' => $user])
            </div>
        </div>
    </div>
</body>
</html>