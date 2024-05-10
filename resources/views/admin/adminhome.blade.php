<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-purple-100">
    <div class="flex h-screen rounded-lg">
        <div class="w-1/4 bg-purple-400 text-white p-4">
            <br>
            <br>
            <h1 class="text-2xl font-bold text-black-50 flex justify-center items-center">TOGO_University</h1>
            <br>
            <br>
            <div class="mr-6 grid place-items-center">
                <a href="{{ route('home') }}" class="py-2 px-4 rounded-lg bg-purple-500 hover:bg-purple-600 text-white">liste des étudiants</a>
                <br>
                <a href="{{ url('home') }}" class="py-2 px-4 rounded-lg bg-purple-500 hover:bg-purple-600 text-white">Commentaire</a>
            </div>
        </div>
        <div class="w-3/4 bg-white p-4">
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                       
                    </h2>
                </x-slot>


            </x-app-layout>
        </div>
    </div>

    <script>
        function toggleDescription(id) {
            var description = document.getElementById('description-' + id);
            description.classList.toggle('hidden');
        }
    </script>
</body>
</html>
