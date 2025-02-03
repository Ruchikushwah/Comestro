@extends('layout')
@section('content')
    <div class="flex min-h-screen bg-gray-100 p-6">
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
                    <p>{{ $id }}</p>
                    {{-- <p>{{ $user_id }}</p> --}}
                    <a href="/support" class="text-blue-500">Back</a>
                </div>

                {{-- tickets goes here --}}
                <div class="flex flex-col flex-1 p-4">
                    <div id="ticketDetails" class="flex-1 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4  ">
                        {{-- <div class="flex flex-col gap-3">
                            <p class="text-lg font-semibold">Ticket: tkt-1234567890</p>
                            <p class="text-sm"><strong>Status:</strong> <span class="text-red-500">Closed</span></p>
                            <p class="text-sm"><strong>Department:</strong> technical</p>
                            <p class="text-sm"><strong>Subject:</strong> technical issue</p>
                            <p class="text-sm"><strong>Create Date:</strong> Fri Jan 20, 2025, 10:00 AM</p>
                        </div>

                        <div class="flex flex-col gap-3">
                            <p class="text-sm"><strong>Name:</strong> khobabe</p>
                            <p class="text-sm"><strong>Email:</strong> khobabe007@gmail.com</p>
                            <p class="text-sm"><strong>Domain:</strong> Comestro.com</p>
                            <p class="text-sm"><strong>Main product:</strong> comestro.com: Shared Hosting Service</p>
                        </div>
                        <div>
                            <strong>Description:</strong>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis facere laborum, quis in
                                nisi incidunt explicabo modi odit reiciendis quia deserunt iure, molestiae assumenda quod
                                fuga neque consectetur quibusdam amet?Lorem, ipsum dolor sit amet consectetur adipisicing
                                elit. Dolorem labore odit expedita cupiditate quae iste laudantium, commodi natus optio
                                ratione explicabo quis nemo error voluptatem ab repellendus facere praesentium? Mollitia?
                            </p>
                        </div>
                        <div>
                            <strong>Attachment:</strong>
                            <img src="https://kinsta.com/wp-content/uploads/2021/02/what-is-a-url.jpg" alt="">
                        </div> --}}
                    </div>
                </div>

                {{-- messages goes here --}}
                <div id="callMessages" class="">
                    {{-- clients message --}}
                    <h2 class="bg-blue-500 text-white w-full px-3 py-2 text-lg">Friday, August 15, 2025, 10:04 pm - Client
                    </h2>
                    <div class="px-10 py-5 bg-white">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae eum
                            ullam dolor, aspernatur saepe id quaerat ipsam a doloribus rerum sapiente ipsum quibusdam ab,
                            deserunt officiis itaque ducimus vel!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae eum
                            ullam dolor, aspernatur saepe id quaerat ipsam a doloribus rerum sapiente ipsum quibusdam ab,
                            deserunt officiis itaque ducimus vel!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae eum
                            ullam dolor, aspernatur saepe id quaerat ipsam a doloribus rerum sapiente ipsum quibusdam ab,
                            deserunt officiis itaque ducimus vel!</p>
                    </div>
                    {{-- admins message --}}
                    <h2 class="bg-red-500 text-white w-full px-3 py-2 text-lg">Mon, August 18, 2025, 02:04 pm - Admin</h2>
                    <div class="px-10 py-5 bg-white">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae eum
                            ullam dolor, aspernatur saepe id quaerat ipsam a doloribus rerum sapiente ipsum quibusdam ab,
                            deserunt officiis itaque ducimus vel!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae eum
                            ullam dolor, aspernatur saepe id quaerat ipsam a doloribus rerum sapiente ipsum quibusdam ab,
                            deserunt officiis itaque ducimus vel!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae beatae eum
                            ullam dolor, aspernatur saepe id quaerat ipsam a doloribus rerum sapiente ipsum quibusdam ab,
                            deserunt officiis itaque ducimus vel!</p>
                    </div>
                </div>

                {{-- message sending input goes here --}}
                <div class="mt-10 px-10 py-5">
                    <form id="sendMessage">
                        <div class="mt-3">
                            <textarea name="message" rows="7" cols="90" class="mt-5 px-10 py-5 border-2 rounded-lg"
                                placeholder="Enter your message here..."></textarea>
                            <button type="button" class="bg-blue-500 px-3 py-1 rounded text-white text-lg">Send</button>
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

            $.ajax({
                type: "GET",
                url: `/api/support/view_tickets/${ticketId}`,
                data: {user_id:userId}, //sending user_id in the request
                success: function(response) {
                    console.log("user id in blade file :", userId);
                    console.log(response);
                    let ticket = response.data;
                    console.log(ticket);

                    $('#ticketDetails').html(`
                        <div class="flex flex-col gap-3">
                            <p class="text-lg font-semibold">Ticket: ${ticket.ticket_number}</p>
                            <p class="text-sm"><strong>Status:</strong> <span class="text-red-500">${ticket.status}</span></p>
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
                            <p>
                                ${ticket.description}
                            </p>
                        </div>
                        <div>
                            <strong>Attachment:</strong>
                            <img src="https://kinsta.com/wp-content/uploads/2021/02/what-is-a-url.jpg" alt="">
                        </div>
                    `);
                }


            });
        });
    </script>
@endsection
