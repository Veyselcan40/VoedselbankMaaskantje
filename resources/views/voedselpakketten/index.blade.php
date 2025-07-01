<x-app-layout>
    <div class="container mx-auto mt-8">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-green-700">
                <a href="#" class="underline">Overzicht gezinnen met voedselpakketten</a>
            </h1>
            <div class="flex gap-2">
                <select class="border rounded px-2 py-1">
                    <option>Selecteer Eetwens</option>
                </select>
                <button class="bg-gray-500 text-white px-4 py-1 rounded hover:bg-gray-600">Toon Gezinnen</button>
            </div>
        </div>
        <div class="bg-white shadow rounded">
            <table class="min-w-full border">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 border text-left">Gezinsnaam</th>
                        <th class="px-4 py-2 border text-left">Omschrijving</th>
                        <th class="px-4 py-2 border text-left">Volwassenen</th>
                        <th class="px-4 py-2 border text-left">Kinderen</th>
                        <th class="px-4 py-2 border text-left">Babys</th>
                        <th class="px-4 py-2 border text-left">Vertegenwoordiger</th>
                        <th class="px-4 py-2 border text-left">Voedselpakket Details</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 6; $i++)
                    <tr>
                        <td class="px-4 py-2 border">~~~~</td>
                        <td class="px-4 py-2 border">~~~~</td>
                        <td class="px-4 py-2 border">~~~~</td>
                        <td class="px-4 py-2 border">~~~~</td>
                        <td class="px-4 py-2 border">~~~~</td>
                        <td class="px-4 py-2 border">~~~~</td>
                        <td class="px-4 py-2 border text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <rect x="4" y="7" width="16" height="10" rx="2" stroke-width="2" stroke="currentColor" fill="none"/>
                                <path d="M2 7V17C2 18.1046 2.89543 19 4 19H20C21.1046 19 22 18.1046 22 17V7" stroke-width="2" stroke="currentColor" fill="none"/>
                            </svg>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <div class="flex justify-end mt-4">
            <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">home</a>
        </div>
    </div>
</x-app-layout>

