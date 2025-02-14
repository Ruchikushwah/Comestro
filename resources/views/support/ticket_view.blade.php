@extends('layout')
@section('content')
    <div class="flex min-h-screen bg-gray-100 p-6 mt-12">
        <div class="flex flex-1 gap-5">

            {{-- left side section for the personal  --}}
            <div class="w-2/12 bg-white px-5">
                <h2 class="flex gap-1 mb-5 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-xl font-bold">Your information</span>
                </h2>
                <ul>
                    <li class="font-bold">comestro</li>
                    <li>purnea bihar, 854301</li>
                    <li>India</li>
                </ul>
            </div>

            {{-- right side section for the ticket details and the messages --}}
            <div class="w-10/12 bg-green-100">

                {{-- header for the tickets and relocate url goes here --}}
                <div class="flex font-bold text-xl justify-between bg-white px-5 py-2">
                    <h2>My Ticket Detail</h2>
                    <a href="/support" class="text-blue-500">Back</a>
                </div>

                {{-- tickets goes here --}}
                <div class="flex flex-col flex-1 p-4">
                    <div id="ticketDetails" class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">

                    </div>
                </div>

                {{-- messages goes here --}}
                <div id="callMessages" class="">

                </div>

                {{-- message sending input goes here --}}
                <div class="mt-10 px-10 py-5">
                    <form id="sendMessage">
                        <div class="mt-3">
                            <textarea id="messageText" name="message" rows="7" cols="90" class="mt-5 px-10 py-5 border-2 rounded-lg"
                                placeholder="Enter your message here..."></textarea>
                            <button type="button" id="sendMessageButton"
                                class="bg-blue-500 px-3 py-1 rounded text-white text-lg">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            //calling specified ticket here:
            let ticketId = {{ $id }}; //getting ticket_id from the blade
            let userId = {{ auth()->id() }}; //getting user_id of the logged-in user 

            function callingTickets() {
                $.ajax({
                    type: "GET",
                    url: `/support/view_tickets/${ticketId}`,
                    // data: {
                    //     user_id: userId
                    // }, 
                    success: function(response) {
                        // console.log("user id in blade file :", userId);
                        // console.log(response);
                        let ticket = response.data;
                        let isClosed = ticket.status === 'closed';

                        if (ticket.attachment) {
                            $('#ticketImage').attr('src', `/Problem_image/${ticket.attachment}`).show();
                            $('#noAttachmentMessage').hide();
                        } else {
                            $('#noAttachmentMessage').show();
                            $('#ticketImage').hide();
                        }

                        $('#ticketDetails').html(`
                        <div class="flex flex-col gap-3">
                            <p class="text-lg font-semibold">Ticket: ${ticket.ticket_number}</p>
                            <p class="text-sm"><strong>Status:</strong> <span id='ticket-status' class="${ticket.status === 'closed' ? 'text-red-500' : ''}">${ticket.status}</span></p>
                            <p class="text-sm"><strong>Department:</strong> ${ticket.department}</p>
                            <p class="text-sm"><strong>Subject:</strong> ${ticket.problem_category.name}</p>
                            <p class="text-sm"><strong>Create Date:</strong> ${ticket.formatted_created_at}</p>
                        </div>

                        <div class="flex flex-col gap-3">
                            <p class="text-sm"><strong>Name:</strong> ${ticket.user.name}</p>
                            <p class="text-sm"><strong>Email:</strong> ${ticket.user.email}</p>
                            <p class="text-sm"><strong>Mobile:</strong> ${ticket.user.contact}</p>
                            <p class="text-sm"><strong>Domain:</strong> ${ticket.domain}</p>
                            <p class="text-sm"><strong>Main product:</strong> comestro.com: ${ticket.mainProduct}</p>
                        </div>
                        <div>
                            <strong>Description:</strong>
                            <p class='mb-2'>
                                ${ticket.description}
                            </p>
                            ${ticket.status !== 'closed' ? `
                                                        <button id='close-ticket-btn' data-id='${ticket.id}' class='bg-red-500 text-white px-3 py-1 rounded'>
                                                            Close Ticket
                                                        </button>` : ''
                            }
                        </div>
                        <div>
                            <strong>Attachment:</strong>
                            <img id='ticketImage' src="" alt=""  />
                            <p id='noAttachmentMessage'>No Attachment file is provided</p>
                        </div>
                        `);

                        // hide the message form if ticket is closed:
                        if (isClosed) {
                            $('#sendMessage').remove();
                            $('#close-ticket-btn').remove();
                        }

                        let callMessages = $('#callMessages');
                        callMessages.empty();
                        let message = ticket.messages;
                        let lastSender = null;

                        message.forEach((msg) => {
                            let messageTime = new Date(msg.created_at).toLocaleString();
                            let sender = msg.sender_type;

                            if (sender !== lastSender) {
                                let headerColor = sender === "user" ? "bg-blue-500" :
                                    "bg-red-500";
                                let senderText = sender === "user" ? "Client" : "Admin";

                                callMessages.append(
                                    `<h2 class="${headerColor} text-white w-full px-3 py-2 text-lg">${messageTime} - ${senderText}</h2>`
                                );
                                lastSender = sender;
                            }

                            callMessages.append(`
                                    <div class='px-10 py-5 bg-white'>
                                        <p>${msg.message}</p>    
                                    </div>`);
                        });

                    }

                });
            }
            callingTickets();

            // close ticket work goes here:
            $(document).on("click", "#close-ticket-btn", function() {
                let ticketId = $(this).data('id');

                $.ajax({
                    type: "post",
                    url: `/support/close/${ticketId}`,
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        alert(response.msg);
                        callingTickets();
                    },
                });
            });


            // send message work goes here:
            $('#sendMessageButton').on("click", function(e) {
                e.preventDefault();
                // alert('hello, send button got clicked')

                let message = $('#messageText').val();

                let data = {
                    ticketId: ticketId,
                    senderId: userId,
                    message: message,
                    _token: "{{ csrf_token() }}",
                };
                console.log(data)

                $.ajax({
                    url: '/messages',
                    type: "post",
                    data: data,
                    success: function(response) {
                        alert(response.msg);
                        $('#sendMessage').trigger('reset');


                    },
                    error: function(err) {
                        console.log("Error sending message:", err)
                        alert('there was an error sending the message')
                    },
                });
            });
        });
    </script>
@endsection
