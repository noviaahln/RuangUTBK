<nav class="d-flex align-items-center p-3 w-100 bg-white">
    <div class="flex-grow-1 text-start text-xl font-bold text-success">
        <p class="mb-0">FARMORA</p>
    </div>
    <div class="d-flex align-items-center"> <!-- Container untuk kedua div -->
        <div class="d-flex justify-content-center flex-grow-0 gap-5 text-center me-5">
            <a href="/homepage" class="d-flex align-items-center btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-house-door me-2" viewBox="0 0 16 16">
                    <path
                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                </svg>
                <p class="text-xl font-bold mb-0 text-black">Beranda</p>
            </a>
            <a href="/katalog" class="text-decoration-none d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-seam me-2" viewBox="0 0 16 16">
                    <path
                        d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z" />
                </svg>
                <p class="text-xl font-bold mb-0 text-black">Katalog</p>
            </a>
            <a href="/konsultasi" class="text-decoration-none d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-laptop me-2" viewBox="0 0 16 16">
                    <path
                        d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                </svg>
                <p class="text-xl font-bold mb-0 text-black">Konsultasi</p>
            </a>
        </div>
        <div class="me-5">
            <form class="d-flex" action="{{ route('katalog.index') }}" method="GET">
                <input class="form-control me-0" type="search" placeholder="Cari..." aria-label="Search"
                    name="search" value="{{ request('search') }}">
                <button class="btn btn-success" type="submit">Cari</button>
            </form>
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
            <a href="/keranjang" class="text-decoration-none d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-cart" viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
                <p class="flex-grow-1 text-end text-xl font-bold text-black" style="margin: 0;"> Keranjang</p>
            </a>
        </div> 
    </div>
</nav>