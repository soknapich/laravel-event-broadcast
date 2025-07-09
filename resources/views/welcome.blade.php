<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        .chat-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 1rem;
            font-family: sans-serif;
        }

        .message {
            display: flex;
            margin-bottom: 12px;
            align-items: flex-end;
        }

        .message.you {
            justify-content: flex-end;
        }

        .bubble {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 18px;
            font-size: 14px;
            line-height: 1.4;
            position: relative;
        }

        .message.you .bubble {
            background-color: #daf1da;
            color: #000;
            border-bottom-right-radius: 0;
        }

        .message.other .bubble {
            background-color: #f1f0f0;
            color: #000;
            border-bottom-left-radius: 0;
        }

        .message-scroll {
            overflow-y: scroll;
            height: 400px;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h2>Waiting recive somthing</h2>
    <div id="response" class="chat-container message-scroll">
    </div>
    <script type="module">
        //console.log(import.meta.env.VITE_REVERB_APP_KEY);
        //console.log(import.meta.env.VITE_REVERB_APP_KEY);
        window.Echo.channel('registered-user').listen('.user-created', (event) => {
            console.log(event);

            Swal.fire({
                title: 'Incomming message?',
                text: "Are you want to accept!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Accept'
            });
            
            const responseElement = document.querySelector('#response');
            responseElement.innerHTML += `
            <div class="message other">
                <div class="bubble"> ${event.name} :${event.email}</div>
            </div>`;
        })
    </script>

</body>

</html>