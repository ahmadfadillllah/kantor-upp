@if (session('success'))
    <script>
        Swal.fire(
        'Good job!',
        '{{ session('success') }}',
        'success'
        )
    </script>
@endif
@if (session('info'))
    <script>
        Swal.fire(
        'Upps!',
        '{{ session('info') }}',
        'info'
        )
    </script>
@endif
@error('email')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
@error('password')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
@error('password_lama')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
@error('password_baru')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
@error('nama')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
@error('nama_panggilan_surat')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
@error('daftarsurat_id')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
@error('no_hp')
    <div class="alert bg-gradient1 text-white alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Notif!</strong> {{ $message }}
    </div>
@enderror
