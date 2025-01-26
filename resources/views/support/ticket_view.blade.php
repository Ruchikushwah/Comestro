@extends('layout')
@section('content')
    <div class="min-h-screen bg-gray-100 p-6">
        <div class="w-full mx-auto bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold text-blue-600 mb-6">Ticket Details</h1>
                <a href="" class="text-2xl font-bold text-blue-500 mb-6">Back</a>
            </div>

            <!-- Ticket Details Table -->
            <div class="overflow-hidden border border-gray-300 rounded-lg">
                <table class="w-full border-collapse">
                    {{-- <tbody>
                        <!-- Example Key-Value Pair -->
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Ticket ID</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">#12345</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Ticket number</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">#12345</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Subject</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">Technical Issue</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Description</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">
                                Unable to log in to my account, receiving an error code.
                            </td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Created By</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">John Doe</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Ticket Status</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">Open</td>
                        </tr>
                        <tr>
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Created At</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">2025-01-25 10:30 AM</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="p-4 font-medium text-gray-700 border-b border-gray-300">Updated At</td>
                            <td class="p-4 text-gray-800 border-b border-gray-300">2025-01-25 11:45 AM</td>
                        </tr>
                    </tbody> --}}
                    <tbody id="viewSpecifiedTicket">

                    </tbody>
                </table>
            </div>

            <!-- Attachment Section -->
            <div class="mt-6">
                <h2 class="text-lg font-semibold text-blue-600 mb-2">Attachment</h2>
                <div class="border border-gray-300 p-4 rounded-lg">
                    <img src="https://via.placeholder.com/300x200" alt="Attachment Preview"
                        class="w-full h-auto rounded mb-4">
                    <a href="https://via.placeholder.com/300x200" target="_blank"
                        class="text-blue-600 hover:underline font-medium">Download Attachment</a>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-6">
                <a href="/tickets" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Back to Tickets</a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $document.ready(function(){
            //calling specified ticket here:
            $.ajax({
                type:"GET",
                url:"",
                
            });
        });
    </script>
@endsection
