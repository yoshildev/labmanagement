<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .swal2-popup {
        z-index: 9999999 !important;
    }
    aside {
        z-index: 999999 !important;
    }
    .swal2-container {
        z-index: 999999 !important;
    }
    .layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
    .layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
    .layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-navbar {
        /* z-index: 999999 !important; */
        /* z-index: 50 !important; */
    }
</style>
<script>
    $(document).ready(function() {
        @if (session()->has('success'))
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                toast: true,
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 4500
            })
        @endif
        @if (session()->has('errors'))
            Swal.fire({
                position: 'top-end',
                toast: true,
                icon: 'error',
                html: `<ul>
                @foreach (session('errors')->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>`,
                showConfirmButton: false,
                timer: 15500
            })
        @endif
    });
</script>
<script>
    const openDeleteWarning = (e) => {
        // console.log(e.previousElementSibling)
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                e.previousElementSibling.click();
            }
        })
    }
    const success = (message) => {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            toast: true,
            title: `${message}`,
            showConfirmButton: false,
            timer: 4500
        })
    }
    const error = (message) => {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            toast: true,
            title: `${message}`,
            showConfirmButton: false,
            timer: 4500
        })
    }
</script>
{{-- @dd($errors); --}}
