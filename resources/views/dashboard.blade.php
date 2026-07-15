<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded-lg p-6">

                <h3 class="text-2xl font-bold">
                    Selamat Datang 👋
                </h3>

                <p class="mt-3">
                    Anda berhasil login ke
                    <strong>Church Management System</strong>.
                </p>

                <div class="mt-6">
                    <a href="/jemaat"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">
                        Kelola Data Jemaat
                    </a>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
