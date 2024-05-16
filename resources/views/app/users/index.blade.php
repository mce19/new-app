<x-tenant-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="ml-4 float-right" href="{{ route('tenants.create') }}">Agregar Tenant</x-btn-link>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- inicio --}}
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 text-gray-900">

                                    <div class="relative overflow-x-auto">
                                        <table class="w-full text-sm text-left text-gray-700">
                                            <thead
                                                class="text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3">Nombre</th>
                                                    <th scope="col" class="px-6 py-3">Correo</th>
                                                    <th scope="col" class="px-6 py-3">Dominio</th>
                                                    <th scope="col" class="px-6 py-3">Estado</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                @foreach ($tenants as $tenant)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $tenant->name }}
                                                        </th>
                                                        <td class="px-6 py-4">{{ $tenant->email }}</td>
                                                        <td class="px-6 py-4">
                                                            @foreach ($tenant->domains as $domain)
                                                                {{ $domain->domain }}{{ $loop->last ? '' : ',' }}
                                                            @endforeach
                                                        </td>
                                                        <td class="px-6 py-4"></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- fin --}}
                </div>

            </div>
        </div>
    </div>
</x-tenant-app-layout>
