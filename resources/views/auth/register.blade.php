<x-layout>


    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="https://img.icons8.com/ios-filled/50/near-me.png" sheight="35"
                                            alt="POI Logo">
                                        <h2 class="mt-1 mb-5 pb-1 ">Registrati</h2>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <h4>Compila tutti i campi</h4>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Username</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Username" />

                                        </div>
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control"name="email"
                                                placeholder="Email" />

                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" />

                                        </div>

                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <label class="form-label">Conferma Password</label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                placeholder="Conferma Password" />

                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init
                                                class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Registrati</button>

                                        </div>



                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Benvenuti</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layout>
