<!doctype html>
<html lang="en">

<head>
    <title>User Registration Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-8 m-auto">
                <div class="card shadow">

                    {{-- Displaying the user created message in the real time --}}
                    <div id="response"></div>

                    <div class="card-body">
                        <h3 class="title fw-bold border-bottom pb-3">Registration Form - Event Broadcasting Using Reverb
                            in Laravel 11</h3>
                        <form action="{{ route('user.register') }}" method="POST" class="mt-4">
                            @csrf
                            <div class="row row-space mb-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">Name</label>
                                        <input class="form-control" type="text" name="name"
                                            placeholder="Your Name" />

                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">Email</label>
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Your Email" />

                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space mb-3">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">Password</label>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Your Password" />

                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="label">Phone Number</label>
                                        <input class="form-control" type="text" name="phone_number"
                                            placeholder="Phone Number" />

                                        @error('phone_number')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="pt-2 text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <script type="module">
        console.log(window.Echo);
        window.Echo.private('registered-user').listen('.user-created', (event) => {
            console.log(event);
            const responseElement = document.querySelector('#response');

            responseElement.innerHTML += `<div class="alert alert-info">
                A new user has been registered with Name : ${event.name} and
                Email : ${event.email}
            </div>`;
        })
    </script>
</body>

</html>
