@extends('layout')
@section('content')
    <div class="w-full px-10 mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">My Tickets</h2>
            <button id="create-ticket-btn" class="text-2xl font-semibold text-blue-500 mb-4">Create new ticket</button>
            <a href="{{ route('auth.logout') }}" class='text-red-500'>logout</a>
        </div>
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Ticket Number</th>
                    <th class="px-4 py-2 border-b">User ID</th>
                    <th class="px-4 py-2 border-b">Subject</th>
                    <th class="px-4 py-2 border-b">Description</th>
                    <th class="px-4 py-2 border-b">Status</th>
                    <th class="px-4 py-2 border-b">Raised On</th>
                    <th class="px-4 py-2 border-b">Action</th>
                </tr>
            </thead>
            <tbody id="CallingTickets">

            </tbody>
        </table>
    </div>

    {{-- ticket raising form html goes here: --}}
    <div class="max-w-4xl mx-auto p-6 space-y-8">
        {{-- <!-- FAQ Section -->
        <section>
            <h2 class="text-2xl font-bold text-blue-500">Frequently Asked Questions</h2>
            <ul class="list-disc list-inside space-y-2 mt-4">
                <li>How do I reset my password?</li>
                <li>Where can I access my courses?</li>
                <li>How do I report an issue?</li>
            </ul>
        </section>

        <!-- Generate Ticket Button -->
        <section>
            <h2 class="text-2xl font-bold text-blue-500">Need Assistance?</h2>
            <p class="mt-2">Fill the form below to generate a support ticket.</p>
            <a href="#ticket-form" class="mt-4 inline-block bg-customBlue text-white px-4 py-2 rounded hover:bg-opacity-90">
                Generate Ticket
            </a>
        </section> --}}

        <!-- Ticket Form -->
        <section id="ticket-form" class="hidden">
            <h2 class="text-2xl font-bold text-blue-500">Generate a Support Ticket</h2>
            <form id="generateTickets" class="mt-4 space-y-4 bg-gray-50 p-6 rounded shadow">
                @csrf
                <input type="hidden" name="user_id" value="{{ session('user_id') }}">
                <div class='mb-3'>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select type='text' name="prob_cat_id" id="callingProblemCategory" required
                        class="block w-full border border-gray-300 p-2 rounded focus:ring-customBlue focus:border-customBlue">
                    </select>
                </div>
                <div class='mb-3'>
                    <label for="description" class="block text-sm font-medium text-gray-700">Describe Your Issue</label>
                    <textarea name="description" id="description" required rows="4"
                        class="block w-full border border-gray-300 p-2 rounded focus:ring-customBlue focus:border-customBlue"></textarea>
                </div>
                <div class="flex-space-x-4">
                    <w class="2/3">
                        <div class='mb-3'>
                            <label for="attachment" class="block text-sm font-medium text-gray-700">Attachment
                                (optional)</label>
                            <input type="file" id="attachment_upload" name="attachment"
                                class="block w-full border border-gray-300 p-2 rounded focus:ring-customBlue focus:border-customBlue">
                        </div>
                    </w>
                    <w class="1/3">
                        <img src="" id="attachment_preview" alt=""
                            class="w-full h-auto object-cover rounded">
                    </w>
                </div>

                <div class='mb-3'>
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-opacity-90">Submit
                        Ticket</button>
                </div>
            </form>
        </section>

        {{-- <!-- Check Ticket Status -->
        <section>
            <h2 class="text-2xl font-bold text-blue-500">Check Your Ticket Status</h2>
            <form action="/check-ticket" method="GET" class="mt-4 space-y-4">
                <div>
                    <label for="ticket-id" class="block text-sm font-medium text-gray-700">Enter Ticket Number</label>
                    <input type="text" name="ticket-id" id="ticket-id" required
                        class="block w-full border border-gray-300 p-2 rounded focus:ring-customBlue focus:border-customBlue">
                </div>
                <div>
                    <button type="submit" class="w-full bg-customBlue text-white py-2 rounded hover:bg-opacity-90">Check
                        Status</button>
                </div>
            </form>
        </section> --}}
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            // ajax for calling problems:
            $.ajax({
                type: "get",
                url: "/api/support",
                success: function(response) {
                    let select = $('#callingProblemCategory');
                    select.empty();
                    let problems = response.data;

                    problems.forEach((probs) => {
                        select.append(`<option value=${probs.id}>${probs.name}</option>`);
                    });
                },
            });

            //show and close the form for ticket generating:
            $('#create-ticket-btn').click(function(e) {
                $('#ticket-form').toggleClass("hidden");
            });

            // ajax for generating tickets:
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#attachment_preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#attachment_upload').change(function() {
                readURL(this);
            });


            $('#generateTickets').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '/api/support/generate_tickets',
                    data: new FormData(this),
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        alert(response.msg);
                        $('#generateTickets').trigger('reset');
                        window.open('/support', '_self');
                    },
                });
            });

            //ajax for calling tickets for the specified users:
            $.ajax({
                type: "get",
                url: "api/support/call_tickets",
                data: {
                    user_id: {{ session('user_id') }}
                },
                success: function(response) {
                    let TicketTable = $('#CallingTickets');
                    TicketTable.empty();
                    let tickets = response.data;

                    tickets.forEach((ticket) => {
                        let isClosed = ticket.status === 'closed';
                        TicketTable.append(`
                            <tr>
                                <td class="px-4 py-2 border-b">${ticket.id}</td>
                                <td class="px-4 py-2 border-b">${ticket.ticket_number}</td>
                                <td class="px-4 py-2 border-b">${ticket.user_id}</td>
                                <td class="px-4 py-2 border-b">${ticket.problem_category_id.name}</td>
                                <td class="px-4 py-2 border-b">${ticket.description}</td>
                                <td class="px-4 py-2 border-b">${ticket.status}</td>
                                <td class="px-4 py-2 border-b">${ticket.formatted_created_at}</td>
                                <td>
                                    <a href='/support/view/${ticket.id}' class='bg-yellow-500 text-white px-2 py-1 rounded'>View</a>                                     
                                    <button data-id="${ticket.id}"
                                            id="close-ticket-btn"
                                            ${isClosed ? "disabled" : ""} 
                                            class="${isClosed ? "text-gray-500" : "bg-red-500 text-white"} px-2 py-1 rounded">
                                        ${isClosed ? 'Closed' : 'Close'}
                                    </button>                                      
                                </td>
                            </tr> 
                        `);
                    });
                },
            });

            // close ticket work goes here: 
            $(document).on("click", "#close-ticket-btn", function(){
                let ticketId = $(this).data("id");
                // console.log("ticket ID: ", ticketId);

                $.ajax({
                    url:`/api/support/close/${ticketId}`,
                    type:"POST",
                    data:{_token: "{{ csrf_token() }}"},
                    success:function(response){
                        alert(response.msg);

                        let button = $(`button[data-id=${ticketId}]`);
                        button.text("Closed").prop("disabled", true).removeClass("text-red-500").addClass("text-gray-500");

                        $(`.status-${ticketId}`).text("closed");
                    },
                });
            });
        });
    </script>
@endsection
