<div class="main-search">
    <div class="container">


        <div class="headline-main-header">
            <h1>La <strong>référence</strong> de toutes vos <strong>recherches</strong> de
                <strong>professionnels</strong> au <strong>Maroc</strong>
            </h1>
        </div>

        <div class="main-header-box-search">

            <form method="GET" action="{{ route('societies.index') }}">
                <div class="row">
                    <div class="col-md-10">

                        <input type="text" autocomplete="off"
                            placeholder="Qui, quoi ? ( activité, produit, service, nom d'entreprise ou professionnel.. sur le Maroc)"
                            required="required" name="search" class="form-control" />
                        <ul class="autocomplete"></ul>
                    </div>
                    <div class="col-md-2" style="align-items: center">
                        <button onclick="" class="btn btn-danger" type="submit">
                            {{-- SEARCH ICON --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                            <span>Trouver<span>
                        </button>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
