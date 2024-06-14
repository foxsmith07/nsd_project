<x-layout>
    <div style="height: 70px"></div>

    <div class="row justify-content-center">

        <div class="col-12 col-md-7 shadow d-flex flex-column justify-content-center align-items-center p-4 rounded-2">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center align-items-center">
                    <h1>Contattami</h1>
                    <p>
                        Se hai una domanda, hai bisogno di supporto tecnico o vuoi discutere di un progetto o vuoi lasciare
                        soltanto un feedback non esitare a contattarmi. Compila il modulo qui sotto e ti risponderò al più
                        presto.
                    </p>

                </div>

                <div class="col-12 col-md-7">

                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="mail" name="email">
                        </div>
        
                        <div class="mb-3">
                            <label for="body" class="form-label">Messaggio o Feedback</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                        </div>
        
                        <button type="submit" class="btn btn-primary float-end my-4">Submit</button>
                    </form>
                </div>
            </div>

            <hr class="border border-secondary border-1 w-50">

            <h3 class="my-4">Ulteriori informazioni di Contatto</h3>
            <p>
                Se preferisci, puoi contattarmi direttamente attraverso i seguenti canali:
                <ul class=" list-unstyled">
                    <li><i class="fa-solid fa-envelope fs-3 text-danger me-2"></i> Email: <a href="mailto: fortunato.didomenico@gmail.com">fortunato.didomenico@gmail.com</a></li>
                    <li><i class="fa-brands fa-linkedin fs-3 text-primary me-2"></i> Linkedin: <a href="https://www.linkedin.com/in/fortunato-di-domenico/">Fortunato</a></li>
                    <li><i class="fa-brands fa-square-github fs-3 me-2"></i> GitHub: <a href="https://github.com/foxsmith07">Fortunato</a></li>
                </ul>
            </p>

        </div>


    </div>
</x-layout>
